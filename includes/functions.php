<?php

// Create a taxonomy for the plz
add_action( 'init', 'tk_ud_register_search_plz' );
function tk_ud_register_search_plz() {
	$labels = array(
		"name" => __( 'PLZ', 'tk_ud' ),
	);

	$args = array(
		"label"              => __( 'PLZ', 'tk_ud' ),
		"labels"             => $labels,
		"public"             => true,
		"hierarchical"       => false,
		"label"              => "PLZ",
		"show_ui"            => true,
		"show_in_menu"       => true,
		"show_in_nav_menus"  => true,
		"query_var"          => true,
		"rewrite"            => array( 'slug' => 'plz', 'with_front' => true, 'hierarchical' => false, ),
		"show_admin_column"  => true,
		"show_in_rest"       => true,
		"rest_base"          => "directory-plz",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "directory_plz", array( "ultimate_directory" ), $args );
}

// Add the plz search to the search Shortcode.
add_action( 'tk_ud_search_form', 'tk_ud_plz_search_form' );
function tk_ud_plz_search_form(){
	?>
	<div class="col-md-3">
		<div class="row">
			<?php
			$tk_ud_search = get_option( 'tk_ud_search', true );
			if( isset( $tk_ud_search['display_plz'] ) && $tk_ud_search['display_plz'] == 'yes'){ ?>
				<div class="col-lg-6"><input type="text" value="" placeholder="<?php _e( 'PLZ', 'tk_ud' ); ?>" name="s_plz" minlength=5 maxlength=5 id="tk-ud-s-plz"/></div>
			<?php }

			if( isset( $tk_ud_search['display_distance'] ) && $tk_ud_search['display_distance'] == 'yes'){ ?>
				<div class="col-lg-6"><input type="number" value="" placeholder="<?php _e( 'Distance in km', 'tk_ud' ); ?>" name="s_distance" id="tk-ud-s-distance"/></div>
			<?php } ?>
			<input type="hidden" value="" id="tk-ud-s-plz-multi">
		</div>
	</div>
	<?php
}

add_action('tk_ud_search_settings', 'tk_ud_plz_search_settings', 10, 1);
function tk_ud_plz_search_settings($tk_ud_search){ ?>
	<hr>
	<label for="display_plz"><p><b>Display PLZ</b></p></label>
	<select id="display_plz" name="tk_ud_search[display_plz]">
		<option <?php selected($tk_ud_search['display_plz'], 'yes') ?> value="yes">Yes</option>
		<option <?php selected($tk_ud_search['display_plz'], 'no') ?> value="no">No</option>
	</select>

	<label for="display_distance"><p><b>Display Distance</b></p></label>
	<select id="display_distance" name="tk_ud_search[display_distance]">
		<option <?php selected($tk_ud_search['display_distance'], 'yes') ?> value="yes">Yes</option>
		<option <?php selected($tk_ud_search['display_distance'], 'no') ?> value="no">No</option>
	</select>
	<?php
}

add_filter( 'tk_ud_ajax_search_args', 'tk_ud_plz_ajax_search_args', 1, 10 );
function tk_ud_plz_ajax_search_args($args){

	$plzs = false;

	if ( isset( $_POST['search_plz_multi'] ) && ! empty( $_POST['search_plz_multi'] ) ) {
		$plzs = explode(',', str_replace( '"', '', $_POST['search_plz_multi']) );
	}


	if ( isset( $_POST['search_plz'] ) && ! empty( $_POST['search_plz'] ) ) {
		$search_plz      = $_POST['search_plz'];
		$search_distance = isset( $_POST['search_distance'] ) ? $_POST['search_distance'] : 0;
		$plzs            = ogdbPLZnearby( $search_plz, $search_distance );
	}



	// Add the plzs string to the query
	if ( $plzs ) {
		$args['tax_query'][]['relation'] = 'AND';
		$args['tax_query'][] = array(
			'taxonomy' => 'directory_plz',
			'field'    => 'slug',
			'terms'    => $plzs,
		);
	}

	return $args;

}