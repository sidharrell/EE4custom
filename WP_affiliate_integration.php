function espresso_track_successful_sale( $Transaction, $reg_msg, $from_admin ){
    
	if ($Transaction instanceof EE_Transaction) {
		$sale_amt = $Transaction->paid();
		$unique_transaction_id = $Transaction->ID();
		$Primary_Registration = $Transaction->primary_registration();
		if ($Primary_Registration instanceof EE_Registration) {
			$Attendee = $Primary_Registration->attendee();
			if ($Attendee instanceof EE_Attendee) {
				$email = $Attendee->email();
				$referrer = $_COOKIE['ap_id'];
				do_action('wp_affiliate_process_cart_commission', array("referrer" => $referrer, "sale_amt" =>$sale_amt, "txn_id"=>$unique_transaction_id, "buyer_email"=>$email));
				write_log($referrer);
				write_log($sale_amt);
				write_log($unique_transaction_id);
				write_log($email);
			}
		}
	}
}
add_action('AHEE__EE_Transaction__finalize__all_transaction','espresso_track_successful_sale', 20, 3);
