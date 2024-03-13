<?php
	$filter = $filter2 = $status = null;

	if ( $i % 2 === 0 ) {
		$status = 'available';
		$filter = 'all';
		$filter2 = 'voice_data';
	} else if ( $i % 3 === 0 ) {
		$status = 'back order';
		$filter = 'iphones';
		$filter2 = 'voice_only';
	} else if ( $i % 5 === 0 ) {
		$status = 'available';
		$filter = 'blackberry';
		$filter2 = 'data_only';
	} else if ( $i % 7 === 0 ) {
		$status = 'available';
		$filter = 'android';
		$filter2 = 'data_only';
	} else if ( $i % 11 === 0 ) {
		$status = 'back order';
		$filter = 'windows_phone';
		$filter2 = 'voice_only';
	} else {
		$status = 'available';
		$filter = 'other';
		$filter2 = 'voice_data';
	}
?>

<div class="col-xs-4 js-element">
	<div class="box phone object clearfix" data-filter="<?php echo "{$filter} {$filter2}"; ?>">
		<div class="image left">
			<a href="<?php echo ( $status !== 'back order' ) ? 'upgrades_device.php': '#'; ?>" class="<?php echo ( $status !== 'back order' ) ? '': 'cursor_pointer'; ?>">
				<img alt="Space Grey" src="http://static.telus.com/common/cms/images/mobility/devices/en/iphone-5s-space-grey.jpg" class="js-iphone-5s-space-grey">			
				<img alt="Silver" src="http://static.telus.com/common/cms/images/mobility/devices/en/iphone-5s-silver.jpg" class="js-iphone-5s-silver hide">	
			</a>
			<div class="device__variant-container">			
				<button aria-label="Space Grey" data-sku="iphone-5s-space-grey" data-lang="en" class="device-color-button device__variant-item">				
					<span style="color: #595859" class="frg-icon icon-circle-solid"></span>			
				</button>			
				<button aria-label="Silver" data-sku="iphone-5s-silver" data-lang="en" class="device-color-button device__variant-item">				
					<span style="color: #909090" class="frg-icon icon-circle-solid"></span>			
				</button>		
			</div>
		</div>

		<div class="description right">
			<div class="name">
				<div>
					<h6>
						<a href="<?php echo ( $status !== 'back order' ) ? 'upgrades_device.php': '#'; ?>" class="<?php echo ( $status !== 'back order' ) ? '': 'cursor_pointer'; ?>">
							<strong data-maxlen="40" class="js-ellipsis">Samsung Galaxy S6 32GB </strong>
						</a>
					</h6>
				</div>
				<div class="status<?php echo ( $status === 'limited' || $status === 'available' ) ? ' positive' : ' negative'; ?>">
					<strong><?php echo ucfirst( $status ); ?></strong> <span class="frg-icon icon-info back-order right"></span>
				</div>
			</div>

			<div class="prices clearfix">
				<div class="no-term left">
					<h4><strong>$130.99</strong> <span class="time_period">3-year term</span></h4>
				</div>
			</div>

			<div class="mtm">
				<div class="gray_text"><strong>$50.00 on technology refresh</strong></div>
				<div class="gray_text"><strong>$75.00 on allotment</strong></div>
				<a class="frg-button<?php echo ( $status !== 'back order' ) ? '': ' state-disabled'; ?>" href="<?php echo ( $status !== 'back order' ) ? 'upgrades_device.php': '#'; ?>"><?php echo ( $status !== 'back order' ) ? 'Select': 'Unavailable'; ?></a>
			</div>
		</div>
	</div>
</div>