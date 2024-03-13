<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h3">Order summary: #12345678</p>

			<h4 class="no_padding gray_text">Status: <span class="frg-icon <?php echo ( $status === 'pending_approval' ) ? 'icon-warning-inverted' : 'icon-checkmark-inverted'; ?>"></span> <?php echo ( $status === 'pending_approval' ) ? 'Pending approval' : 'Shipped'; ?></h4>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Devices and Plans</h4>
		</div>
		<?php if ( $status === 'shipped' ) { ?>
			<div class="frg-select-container right color-light">
				<select autocomplete="off">
					<option>Action</option>
					<option>Select all</option>
					<option>Remove item(s)</option>
					<option>Deselect all</option>
				</select>
			</div>
		<?php } ?>
	</div>
</div>

<div class="outer-container content white_bg order_details">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr class="wide outline">
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th class="wide">Description</th>
					<?php if ( $status !== 'shipped' ) { ?>
						<th>Estimated arrival</th>
					<?php } ?>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
					for ( $i = 0; $i < 3; $i++ ) { 
						include( 'partials/order_details_row.php' );
						include( 'partials/order_details_subscriber_row.php' );
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Accessories</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details">
	<div class="inner-container clearfix">
		<table class="wide datagrid">
			<thead class="gray_text">
				<tr class="wide outline">
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th class="description">Description</th>
					<?php if ( $status !== 'shipped' ) { ?>
						<th>Estimated arrival</th>
					<?php } ?>
					<th></th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small">
				<tr class="wide outline">
					<?php if ( $status === 'shipped' ) { ?>
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
					<?php } ?>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<a href="#">iPhone Case</a>
					</td>
					<?php if ( $status !== 'shipped' ) { ?>
						<td>
							<span class="status positive">5 days from approval date</span>
						</td>
					<?php } ?>
					<td></td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr class="wide outline">
					<?php if ( $status === 'shipped' ) { ?>
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
					<?php } ?>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<a href="#">iPhone Case</a>
					</td>
					<?php if ( $status !== 'shipped' ) { ?>
						<td>
							<span class="status positive">5 days from approval date</span>
						</td>
					<?php } ?>
					<td></td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr class="wide outline">
					<?php if ( $status === 'shipped' ) { ?>
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
					<?php } ?>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<a href="#">iPhone Case</a>
					</td>
					<?php if ( $status !== 'shipped' ) { ?>
						<td>
							<span class="status positive">5 days from approval date</span>
						</td>
					<?php } ?>
					<td></td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal">
					<tr>
						<td>Subtotal:</td>
						<td class="right_align">$25,500</td>
					</tr>
					<tr>
						<td>Shipping:</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST:</td>
						<td class="right_align">$25,500</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator light_gray no_padding clearfix">
			<div class="right">
				<table class="right_align total">
					<tr>
						<td>Total:</td>
						<td class="right_align">$31,922.50</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="col-xs-offset-6 col-xs-3 right_align">
			<a class="frg-button color-green full_lenght" href="#"><?php echo ( $status === 'pending_approval' ) ? 'Edit and resubmit order' : 'Repair selected'; ?></a>
		</div>
		<div class="col-xs-3 no_padding right_align">
			<a class="frg-button color-green full_lenght" href="#"><?php echo ( $status === 'pending_approval' ) ? 'Cancel order' : 'Return selected'; ?></a>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>