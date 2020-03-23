/**
 * @snippet       Move / ReOrder Fields @ Checkout Page, WooCommerce version 3.0+
 * @author        Khalid Almallahi
 * @compatible    Woo 3.5.3
 */
 
add_filter( 'woocommerce_default_address_fields', 'abukotsh_reorder_checkout_fields' );
  
function abukotsh_reorder_checkout_fields( $fields ) {
 
   // default priorities: 
   // 'first_name' - 10
   // 'last_name' - 20
   // 'company' - 30
   // 'country' - 40
   // 'address_1' - 50
   // 'address_2' - 60
   // 'city' - 70
   // 'state' - 80
   // 'postcode' - 90
  
  // e.g. move 'company' above 'first_name':
  // just assign priority less than 10
  $fields['company']['priority'] = 8;
 
  return $fields;
}
