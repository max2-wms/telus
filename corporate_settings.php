<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container purple_bg borders">
	<div class="inner-container">
		<h4>Corporate Settings</h4>
	</div>
</div>

<div class="outer-container main_content tabs-container">
	<div class="inner-container">
		<div id="tab-container" class="tab-container">
			<ul class='etabs'>
				<li class='tab'>
					<a href="#tabs1">Apple DEP</a>
				</li>
				<li class='tab'>
					<a href="#tabs2">Default shipping address</a>
				</li>
				<li class='tab'>
					<a href="#tabs3">Profile</a>
				</li>
			</ul>

			<div id="tabs1">
				<div class="vertical_padding30">
					<h4>Apple Device Enrolment Program</h4>

					<p>
						The Apple Device Enrolment Program (DEP) provides a fast, streamlined way to deploy your corporate-liable iOS devices.<br />When you activate or renew iOS devices through this portal you can automatically enroll them.
					</p>

					<p>
						Don't have an Apple DEP account? <a href="#">Get one here</a>
					</p>

					<div class="dep_accounts">
						<div class="row lenght70 top_margin20">
							<div class="col-xs-6">
								<label class="block devil_gray_text">DEP number</label>
								<input class='frg-input-field full_width' />
							</div>
							<div class="col-xs-6">
								<label class="block devil_gray_text">Description</label>
								<input class='frg-input-field full_width' />
							</div>
						</div>
					</div>

					<a class="js-more" href="#">more</a>
				</div>
			</div>

			<div id="tabs2">
				<div class="vertical_padding30">
					<h4>Default shipping address</h4>

					<p>
						To help display real time hardware availibility from the nearest warehouse please add a default shipping address.<br />You can change this address at any time during the checkout process or in your corporate settings.
					</p>

					<div class="row lenght70 top_margin20">
						<div class="col-xs-6">
							<label class="block devil_gray_text">First name</label>
							<input class='frg-input-field full_width' name="firstname" />
						</div>
						<div class="col-xs-6">
							<label class="block devil_gray_text">Last name</label>
							<input class='frg-input-field full_width' name="lastname" />
						</div>
					</div>

					<div class="row lenght70 top_margin20">
						<div class="col-xs-12">
							<label class="block devil_gray_text">Phone number</label>
							<input class='frg-input-field full_width js-phone_input_mask' name="phone_number" />
						</div>

						<div class="col-xs-12 top_margin20">
							<label class="block devil_gray_text">Address</label>
							<input class='frg-input-field full_width' name='address' />
						</div>

						<div class="col-xs-12 top_margin20">
							<label class="block devil_gray_text">Apartment / Suite</label>
							<input class='frg-input-field full_width' name="apt_suite" />
						</div>

						<div class="col-xs-12 top_margin20">
							<label class="block devil_gray_text">City</label>
							<input class='frg-input-field full_width' name="city" />
						</div>

						<div class="col-xs-12 top_margin20">
							<label class="block devil_gray_text">Province</label>
							<input class='frg-input-field full_width' name="province" />
						</div>

						<div class="col-xs-12 top_margin20">
							<label class="block devil_gray_text">Postal code</label>
							<input class='frg-input-field full_width' name="postal_code" />
						</div>
					</div>
				</div>
			</div>

			<div id="tabs3">
				<div class="vertical_padding30">
					<h4>Tell us about your company</h4>

					<p>
						To ensure that we're providing you with the best service possible please answer the following questions
					</p>

					<div class="row lenght70 top_padding20">
						<div class="col-xs-12">
							<label class="block devil_gray_text">What mobile device management software does your company use today?</label>
							<div class='frg-select-container color-light full_width'>
			     				<select>
			       					<option>- Please select - </option>
			       					<option>Option</option>
			     				</select>
			   				</div>

			   				<label class="block devil_gray_text">What telecom expense management software do you use today?</label>
							<div class='frg-select-container color-light full_width'>
			     				<select>
			       					<option>- Please select - </option>
			       					<option>Option</option>
			     				</select>
			   				</div>

			   				<label class="block devil_gray_text">This is where the next question could go...</label>
							<div class='frg-select-container color-light full_width'>
			     				<select>
			       					<option>- Please select - </option>
			       					<option>Option</option>
			     				</select>
			   				</div>
						</div>
		   			</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky2.php' ); ?>

<?php include( 'partials/footer.php' ); ?>