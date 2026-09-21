<div id="preloader" role="status" aria-label="Loading" aria-live="polite">
    <span class="sl-spinner" aria-hidden="true"></span>
</div>
<style>
    #preloader {
        position: fixed; inset: 0; background: #fff; z-index: 9999;
        display: flex; align-items: center; justify-content: center;
        transition: opacity .35s ease, visibility .35s ease;
    }
    #preloader .sl-spinner {
        width: 48px; height: 48px; border-radius: 50%;
        border: 4px solid #f0e2e2; border-top-color: #db0000;
        animation: sl-spin .7s linear infinite;
    }
    @keyframes sl-spin { to { transform: rotate(360deg); } }
    body.loaded #preloader { opacity: 0; visibility: hidden; }
    @media (prefers-reduced-motion: reduce) {
        #preloader .sl-spinner { animation: none; }
        #preloader { transition: none; }
    }
</style>
<script>
    /* Reveal content as soon as the DOM is ready (not on full window.load, which
       waits for every image/font). A safety timeout guarantees it never sticks. */
    (function () {
        function hide() { document.body.classList.add('loaded'); }
        if (document.readyState !== 'loading') { hide(); }
        else { document.addEventListener('DOMContentLoaded', hide); }
        window.addEventListener('load', hide);
        setTimeout(hide, 1500);
    })();
</script>
