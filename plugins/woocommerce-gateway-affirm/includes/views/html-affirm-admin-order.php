<?php
/**
 * Affirm Payment Gateway
 *
 * Provides a form based Affirm Payment Gateway.
 *
 * @class    WC_Gateway_Affirm
 * @package  WooCommerce
 * @link     https://www.affirm.com/
 */

?>

<button type="button" class="button capture-affirm">Capture</button>
<div class="wc-order-data-row wc-order-data-row-toggle wc-affirm-partial-capture" data-ol-has-click-handler>
	<table class="wc-order-totals">

		<tr>
			<td class="label">Authorization total:</td>
			<td class="total" id="affirm-auth-total"><?php esc_html( wc_price( $auth_total / 100, array( 'currency' => $order->get_currency() ) ) ); ?></td>
		</tr>
		<tr>
			<td class="label">Amount already captured:</td>
			<td class="total" id="affirm-already-captured"><?php esc_esc_htmlattr__( wc_price( $already_captured / 100, array( 'currency' => $order->get_currency() ) ) ); ?></td>
		</tr>

		<?php if ( 1 > 0 ) : ?>
			<tr>
				<td class="label">Amount authorized remaining:</td>
				<td class="total" id="affirm-auth-remaining">
					<?php
					$amount = strval( wc_price( $auth_remaining / 100, array( 'currency' => $order->get_currency() ) ) );
					esc_html( $amount );
					?>
				</td>
			</tr>
		<?php endif; ?>

		<tr>
			<td class="label"><label for="affirm-capture-amount">Capture amount:</label></td>
			<td class="total">
				<input type="text" class="text" id="affirm-capture-amount" name="affirm-capture-amount" class="wc_input_price" />
				<div class="clear"></div>
			</td>
		</tr>
		<tr>
			<td class="label"><label for="affirm-capture-remaining">Capture remaining:</label></td>
			<td class="total"><input type="checkbox" id="affirm-capture-remaining" name="affirm-capture-remaining"></td>
		</tr>
	</table>
	<div class="clear"></div>
	<div class="capture-actions">

		<?php $amount = 'Capture <span class="capture-amount">' . wc_price( 0, array( 'currency' => $order->get_currency() ) ) . '</span> via Affirm'; ?>

		<button type="button" class="button button-primary capture-action" disabled="disabled"><?php esc_html( $amount ); ?></button>
		<button type="button" class="button cancel-action">Cancel</button>

		<div class="clear"></div>
	</div>
</div>
