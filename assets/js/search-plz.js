jQuery(document).ready(function () {

    // Parse & Cache CSV-Data
    var csvData;

    var url = jQuery('#tk-ud-plz-url').val();

    var settings = {
        download: true,
        delimiter: ",",
        header: true,
        skipEmptyLines: true,
        complete: function(data) {
            csvData = data.data;
        }
    };
    Papa.parse( plz.url, settings);


    // Alternativ für ajax

    // jQuery(document).on('#tk_ud_state', 'change', function(event) {

    // Starte Suche
    jQuery('#tk_ud_state').on('change', function(event) {

        event.stopPropagation();
        var query = jQuery(this).val().toLowerCase();
        var pattern_bundesland  = new RegExp("^" + query + "$");
        var plzs = '';

        var i = 0;
        jQuery.each(csvData, function(index, value) {

            // Pattern
            var pattern_plz = new RegExp("^" + query + ".*$");

            // Suchabfrage
            if( value.bundesland.toLowerCase().match(pattern_bundesland) ) {
                if(i > 0){ plzs += ','; }
                plzs += value.plz;
                i++;
            }

        });
        jQuery('#tk-ud-s-plz-multi').val(plzs).trigger('change');

        var src = jQuery(this).find(':selected').attr('data-src')

        jQuery("#deMap").attr('src', src);

        return false;
    });

    // Check if plz is entered
    jQuery(document).on('change keyup paste click', '#tk-ud-s-plz', function () {

        var s_plz = jQuery(this).val().toLowerCase();

        if (s_plz.length > 4) {
            jQuery('#tk-ud-s-plz-multi').val('');
            jQuery("#tk_ud_state").val('none').trigger('change');
            jQuery('#tk-ud-paged').val(0);
            tk_ud_ajax_search();
            jQuery.each(csvData, function(index, value) {
                // Pattern
                var pattern_plz         = new RegExp("^" + s_plz + ".*$");

                // Suchabfrage
                if( value.plz.match(pattern_plz) ) {
                    // Tabelle erstellen
                    jQuery("#tk_ud_state").val(value.bundesland).trigger('change');
                }
            });
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
            //jQuery('#tk-ud-s-plz').val('');
            jQuery('#tk-ud-paged').val(0);
            tk_ud_ajax_search();
        }

    });

    jQuery(document).on('click', '.tk-ud-map-state', function () {
        var state = jQuery(this).attr('data-state');
        var src = jQuery(this).attr('data-src');
        jQuery('#tk-ud-s-plz').val('');
        jQuery("#tk_ud_state").val(state).trigger('change');
        jQuery("#deMap").attr('src', src);

        tk_ud_ajax_search();
        return false;
    });

    jQuery(document).on('hover', '.tk-ud-map-state', function () {
        var old_src = jQuery('#tk_ud_state option:selected').attr('data-src');
        var this_src = jQuery(this).attr('data-src');
        jQuery("#deMap").attr('src', this_src);
    });

    jQuery(document).on('mouseout', '.tk-ud-map-state', function () {
        var old_src = jQuery('#tk_ud_state option:selected').attr('data-src');
        var this_src = jQuery(this).attr('data-src');
        jQuery("#deMap").attr('src', old_src);
    });

});
