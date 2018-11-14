<?php 


	add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
	/**
	 * custom_woocommerce_template_loop_add_to_cart
	*/
	function custom_woocommerce_product_add_to_cart_text() {
		global $product;
		
		$product_type = $product->get_type();
		
		switch ( $product_type ) {
			case 'external':
				return __( 'Buy product', 'woor' );
			break;
			case 'grouped':
				return __( 'View products', 'woor' );
			break;
			case 'simple':
				return __( 'Add cart korun', 'woor' );
			break;
			case 'variable':
				return __( 'My Select options', 'woor' );
			break;
			default:
				return __( 'Read more', 'woor' );
		}
		
	}

