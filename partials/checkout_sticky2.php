<?php if ( $page === 'profile_config' ) { ?>
	<div class="outer-container content white_bg vertical_padding20 actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-9 col-xs-3 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Save &amp; continue</a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'corporate_settings' ) { ?>
	<div class="outer-container content white_bg vertical_padding20 actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-10 col-xs-2 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Save</a>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="outer-container content white_bg vertical_padding20 actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-9 col-xs-3 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Save &amp; continue</a>
			</div>
		</div>
	</div>
<?php } ?>