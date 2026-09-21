/* ============================================================================
 * Star Laboratories — Products Browser Controller
 * Unified search + category filter + sort + pagination workflow.
 * Loaded at the end of products/index.php (after jQuery + nice-select),
 * so it works WITH the theme's nice-select widget on the sort dropdown.
 * ========================================================================== */
(function () {
    'use strict';

    function init() {
        var grid = document.getElementById('sl-grid');
        if (!grid) { return; }

        var cards = Array.prototype.slice.call(grid.querySelectorAll('.sl-pcard'));
        var items = cards.map(function (el) {
            return {
                el: el,
                name: (el.getAttribute('data-name') || '').toLowerCase(),
                cat: (el.getAttribute('data-cat') || '').toLowerCase(),
                title: (el.querySelector('.sl-pcard__title') || {}).textContent || ''
            };
        });

        var searchInput = document.getElementById('sl-search');
        var sortSelect  = document.getElementById('sl-sort');
        var countEl     = document.getElementById('sl-count');
        var chipsEl     = document.getElementById('sl-chips');
        var emptyEl     = document.getElementById('sl-empty');
        var pagerEl     = document.getElementById('sl-pagination');
        var clearBtn    = document.getElementById('sl-clear');
        var checkboxes  = Array.prototype.slice.call(document.querySelectorAll('.sl-subcat'));

        var PER_PAGE = 12;
        var state = { q: '', cats: [], sort: 'default', page: 1 };

        var SUBCAT_LABELS = {
            'vet-injectables': 'Veterinary: Injectables',
            'vet-liquid': 'Veterinary: Liquid Dosage',
            'vet-solid': 'Veterinary: Solid Dosage',
            'vet-aerosol': 'Veterinary: Aerosol / Spray',
            'vet-semi-solid': 'Veterinary: Semi Solid',
            'human-oral-solids': 'Human: Oral Solids',
            'human-injectable': 'Human: Injectables',
            'human-oral-liquid': 'Human: Oral Liquid',
            'human-topical': 'Human: Topical'
        };

        /* ---------- filtering + sorting ---------- */
        function getFiltered() {
            return items.filter(function (it) {
                var matchCat = state.cats.length === 0 || state.cats.indexOf(it.cat) > -1;
                var matchSearch = state.q === '' || it.name.indexOf(state.q) > -1;
                return matchCat && matchSearch;
            });
        }
        function sortList(list) {
            var l = list.slice();
            if (state.sort === 'az') {
                l.sort(function (a, b) { return a.title.localeCompare(b.title); });
            } else if (state.sort === 'za') {
                l.sort(function (a, b) { return b.title.localeCompare(a.title); });
            } else if (state.sort === 'cat') {
                l.sort(function (a, b) {
                    return a.cat.localeCompare(b.cat) || a.title.localeCompare(b.title);
                });
            }
            return l;
        }

        /* ---------- render ---------- */
        function render() {
            var filtered = sortList(getFiltered());
            var total = filtered.length;
            var totalPages = Math.max(1, Math.ceil(total / PER_PAGE));
            if (state.page > totalPages) { state.page = totalPages; }
            if (state.page < 1) { state.page = 1; }

            var startIdx = (state.page - 1) * PER_PAGE;
            var endIdx = startIdx + PER_PAGE;

            // hide everything, then re-append in sorted order and show the page slice
            items.forEach(function (it) { it.el.style.display = 'none'; });
            filtered.forEach(function (it, i) {
                grid.appendChild(it.el);
                it.el.style.display = (i >= startIdx && i < endIdx) ? '' : 'none';
            });

            // count
            if (countEl) {
                if (total === 0) {
                    countEl.textContent = 'No products found';
                } else {
                    countEl.textContent = 'Showing ' + (startIdx + 1) + '–' +
                        Math.min(endIdx, total) + ' of ' + total +
                        ' product' + (total === 1 ? '' : 's');
                }
            }

            // empty state
            if (emptyEl) { emptyEl.hidden = total !== 0; }
            grid.style.display = total === 0 ? 'none' : 'grid';

            renderChips();
            renderPagination(totalPages);

            // clear button visibility
            var hasFilters = state.q !== '' || state.cats.length > 0 || state.sort !== 'default';
            if (clearBtn) { clearBtn.hidden = !hasFilters; }
        }

        /* ---------- active filter chips ---------- */
        function renderChips() {
            if (!chipsEl) { return; }
            chipsEl.innerHTML = '';
            if (state.q !== '') {
                chipsEl.appendChild(makeChip('Search: "' + state.q + '"', function () {
                    state.q = '';
                    if (searchInput) { searchInput.value = ''; }
                    state.page = 1; render();
                }));
            }
            state.cats.forEach(function (cat) {
                chipsEl.appendChild(makeChip(SUBCAT_LABELS[cat] || cat, function () {
                    state.cats = state.cats.filter(function (c) { return c !== cat; });
                    var cb = checkboxes.filter(function (c) { return c.value === cat; })[0];
                    if (cb) { cb.checked = false; }
                    state.page = 1; render();
                }));
            });
        }
        function makeChip(label, onRemove) {
            var chip = document.createElement('span');
            chip.className = 'sl-chip';
            chip.appendChild(document.createTextNode(label + ' '));
            var btn = document.createElement('button');
            btn.type = 'button';
            btn.setAttribute('aria-label', 'Remove filter ' + label);
            btn.innerHTML = '&times;';
            btn.addEventListener('click', onRemove);
            chip.appendChild(btn);
            return chip;
        }

        /* ---------- pagination ---------- */
        function renderPagination(totalPages) {
            if (!pagerEl) { return; }
            pagerEl.innerHTML = '';
            if (totalPages <= 1) { return; }

            pagerEl.appendChild(makePageBtn('«', state.page - 1, state.page === 1, false));
            var start = Math.max(1, state.page - 2);
            var end = Math.min(totalPages, start + 4);
            start = Math.max(1, end - 4);
            for (var i = start; i <= end; i++) {
                pagerEl.appendChild(makePageBtn(String(i), i, false, i === state.page));
            }
            pagerEl.appendChild(makePageBtn('»', state.page + 1, state.page === totalPages, false));
        }
        function makePageBtn(label, page, disabled, active) {
            var b = document.createElement('button');
            b.type = 'button';
            b.textContent = label;
            if (disabled) { b.disabled = true; }
            if (active) { b.className = 'is-active'; }
            b.addEventListener('click', function () {
                if (disabled) { return; }
                state.page = page;
                render();
                var anchor = document.querySelector('.sl-shop');
                if (anchor) {
                    window.scrollTo({
                        top: anchor.getBoundingClientRect().top + window.pageYOffset - 110,
                        behavior: 'smooth'
                    });
                }
            });
            return b;
        }

        /* ---------- filter state from inputs ---------- */
        function syncCats() {
            state.cats = checkboxes.filter(function (c) { return c.checked; })
                .map(function (c) { return c.value.toLowerCase(); });
        }
        function applySearch(val) {
            state.q = (val || '').replace(/\s+/g, ' ').trim().toLowerCase();
            state.page = 1;
            render();
        }
        function applySort(val) {
            state.sort = val || 'default';
            state.page = 1;
            render();
        }
        function clearAll() {
            state.q = '';
            state.cats = [];
            state.sort = 'default';
            state.page = 1;
            if (searchInput) { searchInput.value = ''; }
            checkboxes.forEach(function (c) { c.checked = false; });
            if (sortSelect) {
                sortSelect.value = 'default';
                // keep nice-select widget in sync if present
                if (window.jQuery) { window.jQuery(sortSelect).niceSelect && window.jQuery(sortSelect).niceSelect('update'); }
            }
            render();
        }

        /* ---------- wire events ---------- */
        if (searchInput) {
            searchInput.addEventListener('input', function () { applySearch(this.value); });
        }
        // Sort: nice-select replaces the <select>; jQuery .trigger('change') only
        // reaches jQuery-bound handlers, so bind through jQuery when available.
        if (sortSelect) {
            if (window.jQuery) {
                window.jQuery(sortSelect).on('change', function () { applySort(this.value); });
            }
            sortSelect.addEventListener('change', function () { applySort(this.value); });
        }
        checkboxes.forEach(function (cb) {
            cb.addEventListener('change', function () {
                syncCats();
                state.page = 1;
                render();
            });
        });
        // Category accordion headers
        document.querySelectorAll('.sl-cat__head').forEach(function (head) {
            head.addEventListener('click', function () {
                var body = this.nextElementSibling;
                this.classList.toggle('is-open');
                if (body) { body.classList.toggle('is-open'); }
            });
        });
        if (clearBtn) { clearBtn.addEventListener('click', clearAll); }
        var emptyClear = document.getElementById('sl-empty-clear');
        if (emptyClear) { emptyClear.addEventListener('click', clearAll); }

        /* ---------- pre-fill search from ?q= (supports site search / schema SearchAction) ---------- */
        try {
            var params = new URLSearchParams(window.location.search);
            var q = params.get('q');
            if (q && searchInput) {
                searchInput.value = q;
                state.q = q.replace(/\s+/g, ' ').trim().toLowerCase();
            }
        } catch (e) { /* no-op */ }

        render();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
