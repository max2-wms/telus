<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar2.php' ); ?>

<div class="outer-container content white_bg shipping">
	<div class="inner-container clearfix">
		<div class="col-xs-7">
			<p class="h3">Confirm shipping information</p>

			<h5 class="gray_text">Please remember:</h5>

			<ul class="list gray_text">
				<li><span>Someone must be available to accept delivery at your selected shipping address</span></li>
				<li><span>Deliveries will arrive Monday to Friday between 9am to 5pm</span></li>
				<li><span>Use the Shipping Instructions box below if you have additional instructions</span></li>
			</ul>

			<span class="footnote gray_text">* Unfortunately we cannot deliver to P.O. Boxes, rural addresses or addresses outside Canada</span>
		</div>
		<div class="col-xs-4">
			<img class="telus_truck" src="img/TELUS_Van.jpg">
		</div>
	</div>
</div>

<div class="outer-container content white_bg gray_text">
	<div class="inner-container vertical_gap clearfix">
		<h3>Enter a new address:</h3>
	</div>
</div>

<div class="outer-container content purple_bg top_bottom_padding shipping gray_text">
	<div class="inner-container clearfix">
		<table class="gray_text">
			<tr>
				<td>
					<label>First name</label>
				</td>
				<td>
					<label>Last name</label>
				</td>
				<td>
					<label>Company</label>
				</td>
			</tr>
			<tr>
				<td><input class="js-form-complete" type="text" name="firstname"></td>
				<td><input class="js-form-complete" type="text" name="lastname"></td>
				<td><input type="text" name="company"></td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="padding_top">
					<label>Address</label>
				</td>
				<td class="padding_top">
					<label>Apt/Suite</label>
				</td>
				<td class="padding_top">
					<label>City</label>
				</td>
				<td class="padding_top">
					<label>Province</label>
				</td>
				<td class="padding_top">
					<label>Postal code</label>
				</td>
				<td class="padding_top">
					<label>Phone #</label>
				</td>
			</tr>
			<tr>
				<td><input class="js-form-complete" type="text" name="address"></td>
				<td><input type="text" name="apt_suite"></td>
				<td><input class="js-form-complete" type="text" name="city"></td>
				<td><input class="js-form-complete" type="text" name="province"></td>
				<td><input class="js-form-complete" type="text" name="postal_code"></td>
				<td><input class="js-form-complete js-phone_input_mask" type="text" name="phone_number"></td>
			</tr>
		</table>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding gray_text">
	<div class="inner-container clearfix">
		<h3>Or use an existing address</h3>

		<div class="row top_bottom_padding">
			<div class="col-xs-3 existing_address clearfix">
				<div class="frg-checkbox regular left">
					<div class="inner">
						<input class="js-form-complete" id="radio-option1" type="radio" value="Option 1" name="option">
						<div class="icon"></div>
					</div>
				</div>
				<div class="info left">
					<strong>
						Jonathan Richman<br />
						ABC Company<br />
					</strong>
					<span>
						6a-123 Main Street<br />
						Ottawa, Ontario<br />
						A1B C2D<br />
						(613) 555 1234
					</span>
				</div>
			</div>
			<div class="col-xs-3 existing_address clearfix">
				<div class="frg-checkbox regular left">
					<div class="inner">
						<input class="js-form-complete" id="radio-option1" type="radio" value="Option 1" name="option">
						<div class="icon"></div>
					</div>
				</div>
				<div class="info left">
					<strong>
						Jonathan Richman<br />
						ABC Company<br />
					</strong>
					<span>
						6a-123 Main Street<br />
						Ottawa, Ontario<br />
						A1B C2D<br />
						(613) 555 1234
					</span>
				</div>
			</div>
			<div class="col-xs-3 existing_address clearfix">
				<div class="frg-checkbox regular left">
					<div class="inner">
						<input class="js-form-complete" id="radio-option1" type="radio" value="Option 1" name="option">
						<div class="icon"></div>
					</div>
				</div>
				<div class="info left">
					<strong>
						Jonathan Richman<br />
						ABC Company<br />
					</strong>
					<span>
						6a-123 Main Street<br />
						Ottawa, Ontario<br />
						A1B C2D<br />
						(613) 555 1234
					</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>