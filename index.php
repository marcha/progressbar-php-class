<?php
include_once('lib/ProgressbarHandler.php');
$bar = new ProgressbarHandler('active');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Progressbar Test</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- JavaScript plugins (requires jQuery) -->
		<script src="js/jquery.min.js"></script>
	    <!-- Twitter Bootstrap -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Optionally enable responsive features in IE8 -->
	    <script src="js/respond.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
	</head>
	<body>
		<?php
			set_time_limit(0);
			$bar->insert();
			for($i=0;$i<=10;$i++)
			{
				$bar->set_current($i*10);
				$bar->update();
				sleep(2);
			}
			$bar->hide();	
		?>
	</body>
</html>