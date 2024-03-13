<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<p class="h3"><span class="frg-icon icon-cart-inverted gray_text"></span> Cart items</p>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<span class="gray_text">Please select the items that you would like to checkout</span>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<h3 class="title no_margin left">Devices and Plans</h3>
		<div class="right">
			<div class="frg-select-container color-light left gap_right">
				<select autocomplete="off">
					<option>Actions</option>
					<option>Actions</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg cart_review">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th>Select</th>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Availability</th>
					<th>Due monthly</th>
					<th>Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td class="item">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Prime (<a href="device.php">edit</a>)</p>
						<ul class="gap_left_small">
							<li>Plan: Unlimited nationwide 60 (<a href="plans2.php">edit</a>)</li>
							<li>Add-ons: TELUS Link, TELUS MDM, US Roaming (<a href="addons.php">edit</a>)</li>
							<li>Subscribers: 50 Micro SIM cards (<a href="subscriber.php">edit</a>)</li>
						</ul>
					</td>
					<td>
						<span class="status positive">Available</span>
					</td>
					<td>
						<span class="purple_text">$5,500</span>
					</td>
					<td>
						<span class="purple_text">$25,500</span>
					</td>
				</tr>
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td class="item">
						<span>Order-2</span>
					</td>
					<td>
						<span>100</span>
					</td>
					<td class="description">
						<p class="big no_margin">Unlimited nationwide 60 (<a href="device.php">edit</a>)</p>
						<ul class="gap_left_small">
							<li>Add-ons: TELUS Link, US Roaming (<a href="addons.php">edit</a>)</li>
							<li>Subscribers: 100 Micro SIM cards (<a href="subscriber.php">edit</a>)</li>
						</ul>
					</td>
					<td>
						<span class="status positive">Available</span>
					</td>
					<td>
						<span class="purple_text">$5,500</span>
					</td>
					<td>
						<span class="purple_text">$25,500</span>
					</td>
				</tr>
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2"  disabled="disabled">
								<div class="icon">
									<span class="frg-icon" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td class="item">
						<span>Order-3</span>
					</td>
					<td>
						<span>20</span>
					</td>
					<td class="description">
						<p class="big no_margin">iPhone S6</p>
					</td>
					<td class="vertical_align_top clearfix">
						<div class="status negative">
							<span class="status negative">Back order</span>
							<span class="frg-icon icon-info back-order right"></span>
						</div>
					</td>
					<td></td>
					<td>
						<span class="purple_text">$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container top_bottom_small_padding clearfix">
		<a class="js-view_more" href="devices.php">
			<span class="text">Add more devices</span> <span class="frg-icon icon-plus-circled purple_text"></span>
		</a>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Upgrades</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg cart_review">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th>Select</th>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Availability</th>
					<th>Due monthly</th>
					<th>Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td class="item">
						<span>Order-4</span>
					</td>
					<td>
						<span>25</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Prime (<a href="upgrade.php">edit</a>)</p>
						<ul class="gap_left_small">
							<li>Plan: Unlimited nationwide 60 (<a href="plans2.php">edit</a>)</li>
							<li>Add-ons: TELUS Link, TELUS MDM, US Roaming (<a href="addons.php">edit</a>)</li>
							<li>Subscribers: 25 Micro SIM cards (<a href="subscriber.php">edit</a>)</li>
						</ul>
					</td>
					<td>
						<span class="status positive">Available</span>
					</td>
					<td>
						<span class="purple_text">$5,500</span>
					</td>
					<td>
						<span class="purple_text">$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container top_bottom_small_padding clearfix">
		<a class="js-view_more" href="upgrade.php">
			<span class="text">Upgrade more devices</span> <span class="frg-icon icon-plus-circled purple_text"></span>
		</a>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Accessories</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg cart_review">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th>Select</th>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Availability</th>
					<th></th>
					<th>Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td class="item">
						<span>Order-5</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<span>iPhone Case (<a href="accessories.php">edit</a>)</span>
					</td>
					<td>
						<span class="status positive">Available</span>
					</td>
					<td></td>
					<td>
						<span class="purple_text">$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container top_bottom_small_padding clearfix">
		<a class="js-view_more" href="acessories.php">
			<span class="text">Add more accessories</span> <span class="frg-icon icon-plus-circled purple_text"></span>
		</a>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_small_padding clearfix">
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>