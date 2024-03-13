<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( "partials/{$banner}.php" ); ?>

<div class="outer-container main_content purple_bg">
	<div class="inner-container">
		<h3 class="title">Track, adjust and manage your business mobility needs</h3>

		<div class="box left">
			<div class="top">
				<h3 class="buy">
					<a href="index.php?banner=banner2"><span class="support-footer__icon frg-icon icon-user-profile-inverted"></span> Buy</a>
				</h3>

				<h6 class="description">Get the right devices, SIMs and accessories for your business.</h6>
			</div>
			<ul class="no_styles">
				<li>
					<a class="clearfix" href="devices.php">
						<div class="left ellipsis">Buy devices</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="plans.php">
						<div class="left ellipsis">Activate a plan only</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="upgrade.php">
						<div class="left ellipsis">Upgrade a subscriber</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="accessories.php">
						<div class="left ellipsis">Buy accessories</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="box left">
			<div class="top">
				<h3 class="manage">
					<a href="http://managebusiness.telus.com/ui/sso/oauth/index.jsp"><span class="support-footer__icon frg-icon icon-smartphone-inverted"></span> Manage</a>
				</h3>

				<h6 class="description">Modify individual or group plans and features. Track usage.</h6>
			</div>
			<ul class="no_styles">
				<li>
					<a class="clearfix" href="http://managebusiness.telus.com/ui/sso/oauth/index.jsp">
						<div class="left ellipsis">Manage existing subscribers</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li class="laptop center_text"><img src="img/Laptop_01.png" alt="laptop"></li>
			</ul>
		</div>
		<div class="box left">
			<div class="top">
				<h3 class="order">
					<a href="order_management.php"><span class="support-footer__icon frg-icon icon-cart-inverted"></span> Order management</a>
				</h3>

				<h6 class="description">View, update and confirm your recent and pending orders.</h6>
			</div>
			<ul class="no_styles">
				<li>
					<a class="clearfix" href="order_management.php">
						<div class="left ellipsis">Review my orders</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="order_management.php">
						<div class="left ellipsis">Review orders pending approval</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="heading clearfix" href="cart_review.php">
						<div class="left ellipsis">Pending orders in cart (10)</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="#">
						<div class="left gap_left ellipsis">ABC sale team - Galaxy Pr</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="#">
						<div class="left gap_left ellipsis">Item # 2 - iPhone 6s</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="outer-container content white_bg">
	<div class="inner-container">
		<div class="support_section clearfix">
			<div class="col6 left">
				<div class="left gap_right">
					<h3 class="title">Support shortcuts</h3>

					<ul class="list">
						<li><a href="#">Submit a repair</a></li>
						<li><a href="#">Return item(s)</a></li>
						<li><a href="#">Browse support articles</a></li>
						<li><a target="_blank" href="http://www.telus.com/support">New device starter guide</a></li>
					</ul>
				</div>

				<img class="headset left" src="img/headset.jpg" alt="headset">
			</div>
			<div class="col6 separator left">
				<h3 class="title">Check repair ticket status</h3>

				<div class="ticket_number_status">
					<input class="left frg-input-field" placeholder="Repair ticket number"/>
					<a class="left frg-button" href="#">Repair status</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>