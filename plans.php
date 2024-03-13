<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg top_bottom_padding white_bg">
	<div class="inner-container clearfix">
		<p class="h3"><span class="frg-icon icon-paper-inverted gray_text"></span> BYOD Plans</p>
	</div>
</div>

<div class="outer-container secondary_bg separation white_bg">
	<div class="inner-container clearfix">
		<span>Select a device type:</span>
		<div class='frg-select-container color-light vertical_gap'>
			<select class="js-sort-by" autocomplete="off">
				<option>Select</option>
				<option value="smartphone" selected>Smartphone / BlackBerry 10+</option>
				<option value="tablet">Tablet</option>
				<option value="modem">Modem / smart hub / internet key</option>
				<option value="legacy">Legacy BlackBerry</option>
				<option value="regular">Regular cell phone</option>
			</select>
		</div>
	</div>

	<div class="inner-container clearfix">
		<?php if ( !$home_page1 ) { ?>
			<nav class="left">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="both" href="#">Voice &amp; data</a></li>
					<li class="left"><a class="block js-filter" data-filter="voice" href="#">Voice only</a></li>
					<li class="left"><a class="block js-filter" data-filter="data" href="#">Data only</a></li>
				</ul>
			</nav>
		<?php } ?>
		<?php if ( $page === 'device' ) { ?>
			<div class="shopping_cart clearfix right">
				<div class="col-xs-2">
					<div class="item_count"><span>5</span></div>
					<span class="frg-icon icon-cart"></span>
				</div>
				<div class="col-xs-10 status">
					<div>Cart empty</div>
					<div>Last saved: 2:38 PM EST</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_small_padding"></div>

<div class="outer-container content white_bg">
	<div class="inner-container clearfix">
		<div class="row">
			<?php for ( $i = 0; $i < 4; $i++ ) { ?>
				<div class="col-xs-6 js-element">
					<?php include( 'partials/plan.php' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>