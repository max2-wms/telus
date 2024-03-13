<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header">
	<div class="inner-container padding_bottom clearfix">
		<p class="h3"><span class="frg-icon icon-upgrades block left"></span> <span class="title">Upgrades</span></p>

		<span>First select an upgrade offer for each subscriber then select the subscriber(s) and add a device and plan.</span>
	</div>
</div>

<?php include( 'partials/error_message_mockup.php' ); ?>

<div class="outer-container content purple_bg top_bottom_small_padding">
	<div class="inner-container clearfix">
		<div class="col-xs-offset-7 col-xs-5 no_padding operations">
			<input class="frg-button color-purple right state-disabled" type="submit" name="submit" value="Remove" />
			<input class="frg-button color-purple right gap_right state-disabled" type="submit" name="submit" value="Add device &amp; plan" />

			<div class="vertical_gap_top small_gap right gap_right">
				<strong class="bold">Actions:</strong>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead>
				<tr>
					<th>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input class="js-check-all" id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
							</div>
							<label for="chkbox-option-2"></label>
						</div>
					</th>
					<th>Phone number</th>
					<th>Subscriber</th>
					<th>Device balance</th>
					<th>Upgrade offer</th>
					<th>Status</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="7">
						<div class="top_bottom_small_padding">The following subscribers have a minimum service committment of $50.00/month</div>
					</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td colspan="7">
						<div class="top_bottom_small_padding">The following subscribers have a minimum service committment of $50.00/month</div>
					</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td colspan="7">
						<div class="top_bottom_small_padding">The following subscribers have a minimum service committment of $50.00/month</div>
					</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Complete ( <a href="#">edit</a> )</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Complete ( <a href="#">edit</a> )</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
				<tr>
					<td class="top_bottom_small_padding">
						<input type="hidden" name="blah" value="#" />
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td class="top_bottom_small_padding">555-555-5555</td>
					<td class="top_bottom_small_padding">John Doe</td>
					<td class="side_padding center">$0.00</td>
					<td>
						<div class='frg-select-container color-light'>
							<select class="js-upgrade-offer" autocomplete="off">
								<option>Select</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
								<option>Technology refresh</option>
							</select>
						</div>
					</td>
					<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
					<td class="right_align top_bottom_small_padding">-</td>
				</tr>
			</tbody>
		</table>

		<div class="clearfix">
			<div class="purple_bg left add_subscriber">
				<p class="h3">Add another subscriber that is on TELUS account #898927383:</p>

				<div class="clearfix">
					<input class='frg-input-field left js-phone_input_mask side_padding' placeholder="Enter a phone number" />
					<input class="frg-button color-purple left gap_left_small side_padding js-validated_options state-disabled" type="submit" name="submit" value="Add">
				</div>
				<div class="vertical_gap_top small_gap">
					<span class="gray_text small">To upgrade subscribers on other TELUS accounts you need to repeat this process again</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>