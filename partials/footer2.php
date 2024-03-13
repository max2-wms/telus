		<div class="outer-container content purple_bg">
			<div class="inner-container grid">
				
			</div>
		</div>

		<footer class="outter-container center vertical_padding30">
			<img class="logo" alt="TELUS logo" src="img/TELUS-logo-white.svg">
			<p class="top_margin20">&copy; <?php echo date( 'Y' ); ?> TELUS Communications Company</p>
		</footer>

		<?php include( 'partials/modals.php' ); ?>

		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?><?php echo $javascipt_form; ?>/lib/jquery.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/bootstrap.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/bootstrap-modalmanager.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/bootstrap-modal.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/dropit.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/slick.js"></script>

		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/cities.js"></script>
		<script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/jaguar.js"></script>

		<script type="text/javascript">
			$( document ).ready( function () {
				JAG.init();
				// JAG.displayErrorMessage( 'warning', 'test', 'testing' );
			});
		</script>
	</body>
</html> 