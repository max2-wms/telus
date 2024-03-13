<tr>
	<td>
		<div class="frg-checkbox regular small">
			<div class="inner">
				<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>">
				<div class="icon">
					<span class="frg-icon" aria-hidden="true"></span>
				</div>
			</div>
		</div>
	</td>
	<td>
		<input class='frg-input-field short' />
	</td>
	<td>
		<input class='frg-input-field short' />
	</td>
	<td class="port">
		<div class="frg-select-container color-light left">
			<select autocomplete="off">
				<option value="no" selected>No</option>
				<option value="yes">Yes</option>
			</select>
		</div>
	</td>
	<td class="js-calling-city">
		<div class="empty hide"></div>
		<input class='frg-input-field short js-cities-auto-complete' />
		<div class="js-auto-complete-results hide"></div>
	</td>
	<td class="js-preferred-area-code">
		<div class="empty hide"></div>
		<div class="frg-select-container color-light left">
			<select class="js-area-codes" autocomplete="off">
			</select>
		</div>
	</td>
	<td class="existing_phone_nbr hide">
		<div class="empty"></div>
		<div class="status clearfix hide positive">
			<input value="1" class="frg-input-field js-phone_input_mask short back-order left">
			<div class="frg-icon icon-info back-order left"></div>
			<div class="tooltip_bubble">
				<span>This request cannot be completed because this phone number is already an active subscriber. Please select a new number to activate this device or contact TELUS for additional assistance</span>
			</div>
		</div>
	</td>
	<td class="account_nbr hide">
		<div class="empty"></div>
		<input class='frg-input-field short hide' />
	</td>
	<td>
		<div class="frg-select-container color-light left">
			<select autocomplete="off">
				<option>English</option>
				<option>French</option>
			</select>
		</div>
	</td>
	<?php if ( $byod ) { ?>
		<td class="sim_nbr">
			<div class="empty hide"></div>
			<div class="status positive clearfix">
				<input class='frg-input-field js-validate_number back-order short left' />
				<div class="frg-icon icon-info back-order left"></div>
				<div class="tooltip_bubble">
					<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
				</div>
			</div>
		</td>
	<?php } ?>
</tr>