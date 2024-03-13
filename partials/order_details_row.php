<tr class="wide outline">
	<?php if ( $status === 'shipped' ) { ?>
		<td>
			<div class="frg-checkbox regular small">
				<div class="inner">
					<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>">
					<div class="icon">
						<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</td>
	<?php } ?>
	<td>
		<span>Group-1</span>
	</td>
	<td>
		<span>50<span/>
	</td>
	<td class="description">
		<a href="#">Samsung Galaxy Prime</a>

		<ul class="gap_left_small">
			<li>Plan: Unlimited nationwide 60</li>
			<li>Add-ons: TELUS Link, TELUS MDM, US Roaming</li>
		</ul>

		<a class="js-show_list" href="#">View list</a>
	</td>
	<?php if ( $status !== 'shipped' ) { ?>
		<td>
			<span class="status positive">5 days from approval date</span>
		</td>
	<?php } ?>
	<td class="right_align amount_due">
		<span>$5,500.00</span>
	</td>
	<td class="right_align amount_due">
		<span>$25,500.00</span>
	</td>
</tr>