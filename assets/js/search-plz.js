jQuery(document).ready(function () {

    // Check if plz is entered
    jQuery(document).on('change keyup paste click', '#tk-ud-s-plz', function () {

        var s_plz = jQuery(this).val();

        if (s_plz.length > 4) {
            jQuery('#tk-ud-s-plz-multi').val('');
            jQuery('#tk-ud-paged').val(0);
            tk_ud_ajax_search();
        }

    });

    // Check for the distance
    jQuery(document).on('change keyup paste click', '#tk-ud-s-distance', function () {

        var s_distance = jQuery(this).val();
        var s_plz = jQuery('#tk-ud-s-plz').val();

        if (s_plz.length > 4 && s_distance.length > 0) {
            jQuery('#tk-ud-paged').val(0);
            tk_ud_ajax_search();
        }
    });


    // Check if plz is entered
    jQuery(document).on('change', '#tk-ud-s-plz-multi', function () {

        var s_plz_multi = jQuery(this).val();

        if (s_plz_multi.length > 4) {
            jQuery('#tk-ud-s-plz').val('');
            jQuery('#tk-ud-paged').val(0);
            tk_ud_ajax_search();
        }

    });


    jQuery(document).on('click', '.tk-ud-map-state', function () {
        var state = jQuery(this).attr('data-state');
        jQuery("#tk_ud_state").val(state).trigger('change');
        return false;
    });


});
