<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left gray_text">
			<div class="h3">Order management</div>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg">	
	<div class="inner-container clearfix">
		<div class="left">
			<nav>
				<ul class="no_styles">
					<li class="left"><a class="block current" href="#">Show all</a></li>
					<li class="left"><a class="block" href="#">Pending approval</a></li>
					<li class="left"><a class="block" href="#">Orders approved</a></li>
					<li class="left"><a class="block" href="#">Returns</a></li>
					<li class="left"><a class="block" href="#">Repairs</a></li>
				</ul>
			</nav>
		</div>
		<div class="right padding_top">
			<a class="block advanced_search" href="#">
				<div class="left icon-plus-inverted toggle_panel">Show advanced search</div> 
				<div class="left frg-icon icon-plus-inverted toggle_panel"></div>
			</a>
		</div>
	</div>
	<div class="inner-container advanced_search_table closed hide clearfix">
		<table>
			<tr>
				<td>
					<label class="block">Order ID (#)</label>
					<div class="status clearfix positive">
						<input class="frg-input-field small js-validate_number left" placeholder='Order ID'>
						<div class="frg-icon icon-info back-order left"></div>
						<div class="tooltip_bubble">
							<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
						</div>
					</div>
				</td>
				<td>
					<label class="block">Date Range</label>
					<div class="form-group">
		                <div class='input-group date datepicker'>
		                    <input class="form-control frg-input-field" placeholder="Date From" />
		                    <span class="input-group-addon">
		                        <span class="frg-icon icon-calendar"></span>
		                    </span>
		                </div>
		            </div>
				</td>
				<td>
					<label class="block">&nbsp;</label>
					<div class="form-group">
		                <div class='input-group date datepicker'>
		                    <input class="form-control frg-input-field" placeholder="Date To" />
		                    <span class="input-group-addon">
		                        <span class="frg-icon icon-calendar"></span>
		                    </span>
		                </div>
		            </div>
				</td>
				<td>
					<label class="block">BAN</label>
					<div class='frg-select-container color-light'>
						<select autocomplete="off">
							<option>Select</option>
							<option>1051231215615</option>
							<option>8512198423165</option>
							<option>7441125898338</option>
						</select>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<label class="block">First Name</label>
					<input class='frg-input-field small' placeholder='First Name' />
				</td>
				<td>
					<label class="block">Last Name</label>
					<input class='frg-input-field small' placeholder='Last Name' />
				</td>
				<td>
					<label class="block">Shipping Phone Number</label>
					<input class='frg-input-field small js-phone_input_mask' placeholder='Phone Number' />
				</td>
				<td>
					<label class="block">Email</label>
					<div class="status clearfix positive">
						<input class='frg-input-field small js-email_validation left' placeholder='E-mail' />
						<div class="frg-icon icon-info back-order left"></div>
						<div class="tooltip_bubble">
							<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<label class="block">Status</label>
					<div class='frg-select-container color-light'>
						<select autocomplete="off">
							<option>Select</option>
							<option>Select</option>
						</select>
					</div>
				</td>
				<td>
					<label class="block">Order Type</label>
					<div class='frg-select-container color-light'>
						<select autocomplete="off">
							<option>Select</option>
							<option>Select</option>
						</select>
					</div>
				</td>
				<td>
					<label class="block">Shipping Postal Code</label>
					<input class='frg-input-field small js-postalcode_input_mask' placeholder='Shipping Postal Code' />
				</td>
				<td>
					<label class="block">IMEI</label>
					<div class="status clearfix positive">
						<input class='frg-input-field small js-validate_number left' placeholder='IMEI' />
						<div class="frg-icon icon-info back-order left"></div>
						<div class="tooltip_bubble">
							<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<label class="block">SIM Serial Number</label>
					<div class="status clearfix positive">
						<input class='frg-input-field small js-validate_number left' placeholder='SIM Serial Number' />
						<div class="frg-icon icon-info back-order left"></div>
						<div class="tooltip_bubble">
							<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
						</div>
					</div>
				</td>
				<td></td>
				<td></td>
				<td>
					<label class="block">&nbsp;</label>
					<a href='#' class='frg-button button-wide color-green js-loading state-disabled'>Search</a>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding order_management">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Orders</h4>
		</div>
		<div class="right">
			<div class="frg-select-container color-light left">
				<select autocomplete="off">
					<option>Actions</option>
					<option>Edit</option>
					<option>Copy order to cart</option>
					<option>Cancel order</option>
				</select>
			</div>
		</div>
	</div>
	<div class="inner-container js-loaded-content clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th class="clearfix">
						<span>Select</span>
					</th>
					<th class="clearfix">
						<span>Order ID (#)</span>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Submitter</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="2" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<div>	
							<a class="block js-sort gray_text left" href="#">Payment method</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="3" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Date submitted</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="4" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<span>Type</span>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Status</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="6" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<span>Due now</span>
					</th>
				</tr>
			</thead>
			<tbody id="sortable" class="small">
				<tr>
					<td>
						<div class="frg-checkbox small regular">
							<div class="inner">
								<input type="radio" value="Option 1" name="option" id="radio-option1">
								<div class="icon"></div>
								<label for="radio-option1"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan a</span>
					</td>
					<td>
						<span>Airtime Account -70728106 Airtime Account -70728106 Airtime Account -70728106</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">Pending approval</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="frg-checkbox small regular">
							<div class="inner">
								<input type="radio" value="Option 2" name="option" id="radio-option2">
								<div class="icon"></div>
								<label for="radio-option2"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan b</span>
					</td>
					<td>
						<span>V</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">Pending approval</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="frg-checkbox small regular">
							<div class="inner">
								<input type="radio" value="Option 3" name="option" id="radio-option3">
								<div class="icon"></div>
								<label for="radio-option3"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan c</span>
					</td>
					<td>
						<span>U</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">Pending approval</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="frg-checkbox small regular">
							<div class="inner">
								<input type="radio" value="Option 4" name="option" id="radio-option4">
								<div class="icon"></div>
								<label for="radio-option4"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan d</span>
					</td>
					<td>
						<span>E</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">A</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php include( 'partials/loading.php' ); ?>
</div>

<div class="outer-container content white_bg top_bottom_padding order_management">
	<div class="inner-container clearfix">
		<?php include( 'partials/paging.php' ); ?>		
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>