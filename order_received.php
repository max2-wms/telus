<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left gray_text">
			<div class="h3">Order #12345678 Summary</div>
			<h4 class="no_padding">Order received</h4>
		</div>
	</div>
</div>

<?php include( 'partials/error_message.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Devices and Plans</h4>
		</div>
		<div class="right">
			<div class="left find_a_device">
				<input class="left frg-input-field" />
				<a class="left frg-button" href="#">Find a device</a>
			</div>
			<div class='left gap_left frg-select-container color-light'>
				<select autocomplete="off">
					<option>Action</option>
					<option>Select all</option>
					<option>Remove item(s)</option>
					<option>Deselect all</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="gray_text">
			<thead class="gray_text">
				<tr>
					<th>Select</th>
					<th>Item</th>
					<th>Device</th>
					<th>Plan</th>
					<th>Add-ons</th>
					<th>Subscribers</th>
					<th>Quantity</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small">
				<tr>
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
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Samsung Galaxy<br />Grand Prime</a>
					</td>
					<td>
						<a href="#">Plan 1</a>
					</td>
					<td>
						<a href="#">TELUS Link,<br />Travel Passport</a>
					</td>
					<td>
						<a class="underline js-show_list" href="#">View list</a>
					</td>
					<td>
						<span>50<span/>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr>
					<td colspan="10">
						<div class="subscriber_list hide">
							<div class="heading clearfix">
								<div class="left"><div class="h4">Subscribers</div></div>
								<div class="right"><a class="js-hide_subscribers_list" href="#"><span>Hide list</span> <span class="frg-icon icon-x-circled purple_text"></span></a></div>
							</div>
							<table>
								<thead>
									<tr>
										<th></th>
										<th>#</th>
										<th>Subscriber Name</th>
										<th>Port</th>
										<th>Calling city</th>
										<th>Preferred<br />area code</th>
										<th>Account<br />Number</th>
										<th>Existing Phone<br />Number</th>
										<th>Voicemail<br />language</th>
										<th>New SIM</th>
										<th><span>SIM Number</span> <span class="frg-icon icon-star-inverted purple_text"></span></th>
										<th><span>IMEI</span> <span class="frg-icon icon-star-inverted purple_text"></span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				<tr>
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
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Samsung Galaxy<br />Grand Prime</a>
					</td>
					<td>
						<a href="#">Plan 1</a>
					</td>
					<td>
						<a href="#">TELUS Link,<br />Travel Passport</a>
					</td>
					<td>
						<a class="underline js-show_list" href="#">View list</a>
					</td>
					<td>
						<span>50<span/>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr>
					<td colspan="10">
						<div class="subscriber_list hide">
							<div class="heading clearfix">
								<div class="left"><div class="h4">Subscribers</div></div>
								<div class="right"><a class="js-hide_subscribers_list" href="#"><span>Hide list</span> <span class="frg-icon icon-x-circled purple_text"></span></a></div>
							</div>
							<table>
								<thead>
									<tr>
										<th></th>
										<th>#</th>
										<th>Subscriber Name</th>
										<th>Port</th>
										<th>Calling city</th>
										<th>Preferred<br />area code</th>
										<th>Account<br />Number</th>
										<th>Existing Phone<br />Number</th>
										<th>Voicemail<br />language</th>
										<th>New SIM</th>
										<th><span>SIM Number</span> <span class="frg-icon icon-star-inverted purple_text"></span></th>
										<th><span>IMEI</span> <span class="frg-icon icon-star-inverted purple_text"></span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				<tr>
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
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Samsung Galaxy<br />Grand Prime</a>
					</td>
					<td>
						<a href="#">Plan 1</a>
					</td>
					<td>
						<a href="#">TELUS Link,<br />Travel Passport</a>
					</td>
					<td>
						<a class="underline js-show_list" href="#">View list</a>
					</td>
					<td>
						<span>50<span/>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr>
					<td colspan="10">
						<div class="subscriber_list hide">
							<div class="heading clearfix">
								<div class="left"><div class="h4">Subscribers</div></div>
								<div class="right"><a class="js-hide_subscribers_list" href="#"><span>Hide list</span> <span class="frg-icon icon-x-circled purple_text"></span></a></div>
							</div>
							<table>
								<thead>
									<tr>
										<th></th>
										<th>#</th>
										<th>Subscriber Name</th>
										<th>Port</th>
										<th>Calling city</th>
										<th>Preferred<br />area code</th>
										<th>Account<br />Number</th>
										<th>Existing Phone<br />Number</th>
										<th>Voicemail<br />language</th>
										<th>New SIM</th>
										<th><span>SIM Number</span> <span class="frg-icon icon-star-inverted purple_text"></span></th>
										<th><span>IMEI</span> <span class="frg-icon icon-star-inverted purple_text"></span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
									<tr>
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
										<td>1</td>
										<td>Jonathan Smitherson</td>
										<td>No</td>
										<td>Ottawa</td>
										<td>613</td>
										<td>12345678</td>
										<td>613-555-1234</td>
										<td>English</td>
										<td>Yes</td>
										<td>987654321</td>
										<td>613-555-1234</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container horizontal_separator dark_gray"></div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Accessories</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table>
			<thead class="gray_text">
				<tr>
					<th>Select</th>
					<th>Item</th>
					<th>Accessory</th>
					<th></th>
					<th></th>
					<th></th>
					<th>Quantity</th>
					<th>Estimated arrival</th>
					<th></th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small">
				<tr>
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
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Beats ear buds</a>
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						<span>50</span>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td>
						
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr>
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
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Beats ear buds</a>
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						<span>50</span>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td>
						
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr>
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
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Beats ear buds</a>
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						<span>50</span>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td>
						
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal">
					<tr>
						<td>Subtotal</td>
						<td>$5,500</td>
						<td class="right_align">$25,500</td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td>Free</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST</td>
						<td>$5,500</td>
						<td class="right_align">$25,500</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator no_padding clearfix">
			<div class="right">
				<table class="right_align total">
					<tr>
						<td>Total</td>
						<td>$6,215</td>
						<td class="right_align">$31,922.50</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="col-xs-offset-7 col-xs-2 right_align">
			<a class="previous block" href="#">Previous step</a>
		</div>
		<div class="col-xs-3 right_align">
			<a class="frg-button color-green full_lenght" href="#">Continue</a>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>