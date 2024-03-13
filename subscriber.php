<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<h3 class="title">Set up your subscribers for:</h3>
			
			<?php include( 'partials/edit_name.php' ); ?>
		</div>
		<div class="right advanced_options">
			<div class="frg-select-container color-light left gap_right">
				<select class="advanced_option" autocomplete="off">
					<option value="advanced_option" selected="selected">Advanced options</option>
					<option value="import">Import</option>
				</select>
			</div>
			<div class="frg-select-container color-light left">
				<select autocomplete="off">
					<option>Actions</option>
					<option>Copy</option>
					<option>Duplicate to all</option>
					<option>Paste</option>
					<option>Clear</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding subscriber">
	<div class="inner-container clearfix">
	<input type="hidden" name="base_total" value="25500.00" />

		<table class="page current vertical_align_top grid" data-from="0">
			<thead class="gray_text">
				<tr>
					<th>1</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Port</th>
					<th>Calling city</th>
					<th>Preferred<br />area code</th>
					<th class="existing_phone_nbr hide">Existing<br />Phone #</th>
					<th class="account_nbr hide">Account #</th>
					<th>Voicemail<br />language</th>

					<?php if ( $byod ) { ?>
						<th class="sim_nbr">SIM #</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					for ( $i = 0; $i < 10; $i++ ) { 
						include( 'partials/subscriber_row.php' );
					}
				?>
			</tbody>
		</table>

		<table class="page vertical_align_top grid hide" data-from="10">
			<thead class="gray_text">
				<tr>
					<th>2</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Port</th>
					<th>Calling city</th>
					<th>Preferred<br />area code</th>
					<th class="existing_phone_nbr hide">Existing<br />Phone #</th>
					<th class="account_nbr hide">Account #</th>
					<th>Voicemail<br />language</th>

					<?php if ( $byod ) { ?>
						<th class="sim_nbr hide">SIM #</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					for ( $i = 0; $i < 10; $i++ ) { 
						include( 'partials/subscriber_row.php' );
					}
				?>
			</tbody>
		</table>

		<table class="page vertical_align_top grid hide" data-from="20">
			<thead class="gray_text">
				<tr>
					<th>3</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Port</th>
					<th>Calling city</th>
					<th>Preferred<br />area code</th>
					<th class="existing_phone_nbr hide">Existing<br />Phone #</th>
					<th class="account_nbr hide">Account #</th>
					<th>Voicemail<br />language</th>

					<?php if ( $byod ) { ?>
						<th class="sim_nbr hide">SIM #</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					for ( $i = 0; $i < 5; $i++ ) { 
						include( 'partials/subscriber_row.php' );
					}
				?>
			</tbody>
		</table>

		<table class="view_all vertical_align_top grid hide" data-from="0">
			<thead class="gray_text">
				<tr>
					<th>*</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Port</th>
					<th>Calling city</th>
					<th>Preferred<br />area code</th>
					<th class="existing_phone_nbr hide">Existing<br />Phone #</th>
					<th class="account_nbr hide">Account #</th>
					<th>Voicemail<br />language</th>

					<?php if ( $byod ) { ?>
						<th class="sim_nbr hide">SIM #</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>

		<?php include( 'partials/paging.php' ); ?>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>