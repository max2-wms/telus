<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar2.php' ); ?>

<div class="outer-container content white_bg title_shopping_cart">
	<div class="inner-container clearfix">
		<div class="col-xs-6 no_padding">
			<div class="h3">Payment options</div>

			<br />
			
			<p class="h4">Select an account for payment</p>

			<div class='frg-select-container color-light'>
				<select autocomplete="off">
					<option>Choose account type</option>
					<option>Option 1</option>
					<option>Option 2</option>
				</select>
			</div>
			<br />
			<br />
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>	