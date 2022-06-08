<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221865933-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-221865933-1');

    function setEvent(category, label) {
        gtag('event', 'Click', {
            'event_category': category,
            'event_label': label
        });

    }
</script>
