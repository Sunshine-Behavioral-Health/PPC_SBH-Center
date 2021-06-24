<script>
    jQuery(document).ready(function($) {
        // Removes target blank from PPC pages
        setTimeout(function() {
            $('a[target="_blank"]').removeAttr('target');
        }, 1000);

    });
</script>