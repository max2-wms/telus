<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<h3 class="title">Select a device for: </h3>
		
		<?php include( 'partials/edit_name.php' ); ?>

		<div class="clearfix">
			<?php if ( !$home_page1 ) { ?>
				<nav class="left filter_nav brand">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
						<li class="left"><a class="block js-filter" data-filter="blackberry" href="#">Blackberry</a></li>
						<li class="left"><a class="block js-filter" data-filter="android" href="#">Android</a></li>
						<li class="left"><a class="block js-filter" data-filter="windows_phone" data-specific-spelling="Windows Phone" href="#">Windows Phone</a></li>
						<li class="left"><a class="block js-filter" data-filter="other" href="#">Other</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav price1 hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav price2 hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav price3 hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav device hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav availability hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav plan_nav hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					</ul>
				</nav>
			<?php } ?>
			<div class='right frg-select-container color-light'>
				<select class="js-sort-by" autocomplete="off">
					<option value="device">Sort by: Device</option>
					<option value="brand">Sort by: Brand</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg shadow products">
	<div class="inner-container clearfix">
		<div class="clearfix">
			<h3 class="js-applied_filter">All</h3>
			<div>
				<h3 class="no_padding">
					<span class="left gap_right_small smaller">Select your service commitment: </span>
				</h3>
				<div class="left">
					<div class='right frg-select-container color-light'>
						<select class="js-filter-service-category" autocomplete="off">
							<option>Select</option>
							<option value="voice_data">Voice &amp; data ($50/subscriber/month)</option>
							<option value="voice_only">Voice Only ($45/subscriber/month)</option>
							<option value="data_only">Data Only ($40/subscriber/month)</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="phones clearfix">
			<div class="page current clearfix">
				<div class="row">
					<?php 
						for ( $i = 1; $i < 20; $i++ ) { 
							include( 'partials/phone2.php' );
						} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>