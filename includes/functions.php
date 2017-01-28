<?php

// Add the plz search to the search Shortcode.
add_action( 'tk_ud_search_form', 'tk_ud_plz_search_form' );
function tk_ud_plz_search_form(){
	?>
	<div class="col-md-3">
		<div class="row">
			<div class="col-lg-6"><input type="text" value="" placeholder="<?php _e( 'PLZ', 'tk_ud' ); ?>" name="s_plz" minlength=5 maxlength=5 id="tk-ud-s-plz"/></div>
			<div class="col-lg-6"><input type="number" value="" placeholder="<?php _e( 'Distance in km', 'tk_ud' ); ?>" name="s_distance" id="tk-ud-s-distance"/></div>
			<input type="hidden" value="" id="tk-ud-s-plz-multi">
		</div>
	</div>
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