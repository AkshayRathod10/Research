<?php
global $wpdb;
global $current_user;
get_currentuserinfo();

$order = new WC_Order( $order->id );
$user_id = $order->user_id;
$mobile = get_user_meta( $user_id, 'billing_phone', true );
$ch = curl_init('login.ezecom123123.in/submitsms.jsp?user=bagelshp&key=030a8e43a8XX&mobile=+91'.$mobile.'&message=Your%20order%20No.%20'.$order->id.'%20is%20ready%20for%20dispatch%20and%20shall%20reach%20you%20shortly.%20Thank%20you%20for%20ordering%20with%20The%20Bagel%20Shop.&senderid=BGLSHP&accusage=1');


curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$output = curl_exec ($ch); 
curl_close ($ch);

?>