<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg top_bottom_padding white_bg">
	<div class="inner-container clearfix">
		<p class="h3"><span class="frg-icon icon-accessories gray_text"></span> Accessories</p>
	</div>
</div>

<div class="outer-container secondary_bg separation white_bg">
	<div class="inner-container clearfix">
		<div class="clearfix">
			<?php if ( !$home_page1 ) { ?>
				<nav class="left filter_nav device">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="audio" href="#">Audio</a></li>
						<li class="left"><a class="block js-filter" data-filter="cases_and_protection" href="#">Cases &amp; protection</a></li>
						<li class="left"><a class="block js-filter" data-filter="charging" href="#">Charging</a></li>
						<li class="left"><a class="block js-filter" data-filter="health_and_fitness" href="#">Health &amp; fitness</a></li>
						<li class="left"><a class="block js-filter" data-filter="smart_watches" href="#">Smart watches</a></li>
						<li class="left"><a class="block js-filter" data-filter="other" href="#">Other</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav brand hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="audio" href="#">Audio</a></li>
					</ul>
				</nav>
			<?php } ?>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container row clearfix">
		<div class="page current clearfix">
			<?php 
				for ( $i = 1; $i < 21; $i++ ) {
					include( 'partials/accessory.php' );

					if ( $i % 9 === 0 ) {
						echo "</div><div class='page hide clearfix'>";
					}	
				} 
			?>
		</div>
	</div>

	<?php include( 'partials/paging.php' ); ?>
</div>

<?php include( 'partials/footer.php' ); ?>