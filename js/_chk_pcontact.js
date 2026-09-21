(function () {
    var form = document.getElementById('sl-product-enquiry-form');
    if (!form) { return; }
    var feedback = document.getElementById('sl-pcontact-feedback');
    var btn = form.querySelector('.sl-pcontact__submit');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var name = form.name.value.trim();
        var email = form.email.value.trim();
        var message = form.message.value.trim();
        if (!name || !email || !message) {
            feedback.textContent = 'Please fill in your name, email and message.';
            feedback.className = 'sl-pcontact__feedback is-err';
            return;
        }
        feedback.textContent = 'Sending your enquiry...';
        feedback.className = 'sl-pcontact__feedback';
        btn.disabled = true;
        fetch(form.getAttribute('action'), { method: 'POST', body: new FormData(form) })
            .then(function (r) {
                return r.text().then(function (t) { return { ok: r.ok, text: t }; });
            })
            .then(function (res) {
                feedback.textContent = res.text || (res.ok
                    ? 'Thank you! Your enquiry has been sent.'
                    : 'Something went wrong. Please try WhatsApp or email.');
                feedback.className = 'sl-pcontact__feedback ' + (res.ok ? 'is-ok' : 'is-err');
                if (res.ok) { form.reset(); }
                btn.disabled = false;
            })
            .catch(function () {
                feedback.textContent = 'Could not send right now. Please use WhatsApp or email sales@starlabs.com.pk directly.';
                feedback.className = 'sl-pcontact__feedback is-err';
                btn.disabled = false;
            });
    });
})();
