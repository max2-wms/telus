<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header2.php' ); ?>

<div class="outer-container main_content">
	<div class="inner-container grid">
		<div class="center">
			<span class="registration frg-icon icon-user-profile-inverted"></span>
		</div>
		<h2 class="form-heading center devil_gray_text line light_gray2 top_margin0 bottom_padding20">First, let's create your profile</h2>

		<div class="row top_margin50">
			<div class="col-xs-offset-1 col-xs-4">
				<div class="default_text_color">
					<div class="left_align">
						<h2 class="frg-headline-font-27px">Once registered, you can:</h2>
					</div>
					<div class="left_align">
						<ul>
							<li>View and pay your bill</li>
							<li>Check your usage</li>
							<li>See upgrade offers, and more</li>
						</ul>
					</div>
				</div>
  
				<img class="flower" src="img/flower.png" />
			</div>
			<div class="col-xs-offset-2 col-xs-4 registration_form js-all-required-fields">
				<form>
					<div class="bottom_margin20">
						<label class="block devil_gray_text">First name</label>

						<div class="clearfix status">
							<input class="frg-input-field js-required js-not-empty left" maxlength="60" name="firstname">
							<div class="frg-icon left"></div>
							<div class="tooltip_bubble">
								<span>Please enter your first name.</span>
							</div>
						</div>
					</div>

					<div class="bottom_margin20">
						<label class="block devil_gray_text">Last name</label>
						
						<div class="clearfix status">
							<input class="frg-input-field js-required js-not-empty left" maxlength="60" name="lastname">
							<div class="frg-icon left"></div>
							<div class="tooltip_bubble">
								<span>Please enter your last name.</span>
							</div>
						</div>
					</div>

					<div class="bottom_margin20">
						<label class="block devil_gray_text">Enter email</label>

						<div class="clearfix status">
							<input class="frg-input-field js-required js-not-empty js-email_validation js-match-validation left" maxlength="60" name="email">
							<div class="frg-icon left"></div>
							<div class="tooltip_bubble">
								<span>Please enter your email address.</span>
							</div>
						</div>
					</div>

					<div class="bottom_margin20">
						<label class="block devil_gray_text">Re-enter email</label>
						
						<div class="clearfix status">
							<input class="frg-input-field js-required js-not-empty js-email_validation js-match-validation left" maxlength="60" name="email2">
							<div class="frg-icon left"></div>
							<div class="tooltip_bubble">
								<span>Please enter your email address.</span>
							</div>
						</div>
					</div>

					<div class="bottom_margin20">
						<label class="block devil_gray_text">Create your password</label>

						<div class="clearfix status">
							<input class="frg-input-field js-required js-not-empty left" maxlength="60" name="password">
							<div class="frg-icon left"></div>
							<div class="tooltip_bubble">
								<span>Please enter your first name.</span>
							</div>
						</div>
					</div>

					<h5 class="devil_gray_text bottom_margin20 top_margin20">Just in case you forget your profile details...</h5>

					<div class="bottom_margin20">
						<label class="block devil_gray_text">Choose a security question</label>
						<!-- <input class='frg-input-field full_width js-required' name='' /> -->

						<div class='frg-select-container full_width color-light'>
							<select name="security_question">	
			                    <option value="">Select a question</option>
			                    <option value="First school you attended?">First school you attended?</option>
			                    <option value="Country of your dream vacation?">Country of your dream vacation?</option>
			                    <option value="City of your first job?">City of your first job?</option>
			                    <option value="Name of your childhood hero?">Name of your childhood hero?</option>
			                    <option value="First concert you attended?">First concert you attended?</option>
			                    <option value="Favourite childhood teacher?">Favourite childhood teacher?</option>
			                    <option value="Best childhood friend?">Best childhood friend?</option>
			                    <option value="Mother's middle name?">Mother's middle name?</option>
			                    <option value="Father's middle name?">Father's middle name?</option>
			                    <option value="Mother's year of birth?">Mother's year of birth?</option>
							</select>
						</div>
					</div>

					<div class="bottom_margin20">
						<label class="block devil_gray_text">Answer</label>
						<input class="frg-input-field full_width" maxlength="60" name="answer">
					</div>

					<div class="top_margin20 bottom_margin20">
						<span class="devil_gray_text">By clicking Continue, you agree to receive My Account updates and to the TELUS <a href="#">Privacy Commitment</a>.</span>
					</div>

					<a href='#' class='frg-button button-wide color-green bottom_margin50 state-disabled js-submit'>Continue</a>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer2.php' ); ?>