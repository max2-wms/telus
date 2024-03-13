<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header">
	<div class="inner-container padding_bottom clearfix">
		<p class="h3"><span class="frg-icon icon-upgrades block left"></span> <span class="title">Upgrades</span></p>

		<span>It's easy to give subscribers a new smartphone.</span>
	</div>
</div>

<div class="outer-container content purple_bg top_bottom_small_padding">
	<div class="inner-container clearfix">
		<p class="h3 gray_text">ABC Company is eligible for the following:</p>

		<div class="clearfix vertical_gap vertical_gap_top">
			<div class="left circle green_bg bold">20</div>
			<div class="left gap_left super_dark_gray_text">
				<strong class="big">Allotment program</strong>
				<p class="top_bottom_small_padding no_margin">
					Your current allotment balance is 20.<br />Use your allotment to upgrade any subscriber to a new smartphone  for only $75.00.<br />This program expires 6 months before your corporate agreement with TELUS ends.
				</p>
			</div>
		</div>

		<div class="clearfix">
			<div class="left circle green_bg bold">
				<span class="frg-icon icon-checkmark white_text"></span>
			</div>
			<div class="left gap_left super_dark_gray_text">
				<strong class="big">Technology refresh program</strong>
				<p class="top_bottom_small_padding no_margin">
					The TELUS Technology Refresh Program allows you to upgrade any subscriber to a new smartphone after 24 months on their current term.<br />The refresh program requires the subscriber to extend their contract for another 36 months.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="js-all-required-fields">
			<p class="h3 no_margin">How to upgrade subscribers</p>

			<div class="gray_text vertical_gap_top"><span>Step 1: Enter the first phone number you would like to upgrade</span></div>

			<div class='frg-select-container style2 color-light vertical_gap_top small_gap'>
				<select class="js-required" autocomplete="off">
					<option>Select</option>
					<option>TELUS account</option>
					<option>TELUS account</option>
					<option>TELUS account</option>
				</select>
			</div>

			<div class="gray_text vertical_gap_top"><span>Step 2: Enter the first phone number you would like to upgrade</span></div>

			<div class="clearfix vertical_gap_top small_gap">
				<input class='frg-input-field left js-phone_input_mask side_padding js-required' placeholder="Enter a phone number" />
				<input class="frg-button color-purple left gap_left_small side_padding state-disabled js-submit" type="submit" name="submit" value="Add" />
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>