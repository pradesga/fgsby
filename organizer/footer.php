		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../js/holder.min.js" type="text/javascript"></script>

    <?php if($_SERVER['PHP_SELF'] == '/organizer/scanner.php'){ ?>

    <script src="../js/html5-qrcode.min.js" type="text/javascript"></script>

    <?php } ?>

    <?php if($_SERVER['PHP_SELF'] == '/organizer/attendee.php'){ ?>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <?php } ?>

    <script type="text/javascript">
	(function () {
		'use strict';
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement('style');
			msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
			document.querySelector('head').appendChild(msViewportStyle);
		}
	})();

	<?php if($_SERVER['PHP_SELF'] == '/organizer/scanner.php'){ ?>

	$(document).ready(function(){
		$('#reader').html5_qrcode(function(data){
			$('#read').html(data);
		},
		function(error){
			$('#read_error').html(error);
		}, function(videoError){
			$('#vid_error').html(videoError);
		});
	});

	<?php } ?>

	<?php if($_SERVER['PHP_SELF'] == '/organizer/attendee.php'){ ?>

	$(document).ready(function(){
		$('#attendee-lists').DataTable();
	});

	<?php } ?>
	
    </script>
</body>