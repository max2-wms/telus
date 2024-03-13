<?php
	$service_category = $title = $feature = null;

	if ( $i % 2 === 0 ) {
		$service_category = 'both';
		$title = "Local Talk 50";
	} else if ( $i % 3 === 0 ) {
		$service_category = 'voice';
		$title = "Local Talk 50 Local Talk 50 Local Talk 50";
	} else {
		$service_category = 'data';
		$title = "Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50 Local Talk 50";
	}

	$feature = $title;
?>

<div data-filter="<?php echo $service_category; ?>" class="plan clearfix frg-drop-shadow">
	<div class="vertical_gap big_gap clearfix">
		<div class="row">
			<div class="col-xs-7">
				<h5 class="js-ellipsis" data-maxlen="115"><?php echo $title; ?></h5>
				<ul class="no_styles">
					<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">300 sharable local minutes</span></li>
					<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Call display, voice mail, call waiting,</span></li>
					<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Access to shared data</span></li>
					<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Voice mail to text</span></li>
					<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Roam ready USA</span></li>
				</ul>

				<div>
					<ul class="extra_features no_styles">
						<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">No commitment, contracts or credit checks</span></li>
						<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Low calling rates of $0.15 per min</span></li>
						<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Voice Mail 3, call display, call waiting and conference calling for free</span></li>
						<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">No commitment, contracts or credit checks</span></li>
						<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Low calling rates of $0.15 per min</span></li>
						<li><span class="frg-icon icon-checkmark"></span> <span class="js-ellipsis" data-maxlen="60">Voice Mail 3, call display, call waiting and conference calling for free</span></li>
					</ul>

					<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
				</div>
			</div>
			<div class="col-xs-5 right_align clearfix vertical_gap_top small_gap">
				<div><h6 class="price"><span>$60</span> per month</h6></div>
			</div>
		</div>
	</div>
	<a class="frg-button select full_width" href="#">Select</a>
	<input type="hidden" name="price_per_month" value="60" />
</div>