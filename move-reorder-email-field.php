/**
 * @snippet       Move / ReOrder Fields @ Checkout Page, WooCommerce version 3.0+
 * @author        Khalid Almallahi
 * @compatible    Woo 3.5.3
 */
 
add_filter( 'woocommerce_billing_fields', 'abukotsh_move_checkout_email_field', 10, 1 );
 
function abukotsh_move_checkout_email_field( $address_fields ) {
    $address_fields['billing_email']['priority'] = 5;
    return $address_fields;
}
