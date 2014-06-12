<?php

$id = $_GET['id'];
$name = $_GET['name'];
$type = $_GET['type']

?>

<html>
	<head>
	</head>
	<body>
		<script type="text/javascript">
			healcode_widget_id = "<?php echo $id ?>";
			healcode_widget_name = "<?php echo $name ?>";
			healcode_widget_type = "<?php echo $type ?>";
			document.write(unescape("%3Cscript src='https://www.healcode.com/javascripts/hc_widget.js' type='text/javascript'%3E%3C/script%3E"));
			// Healcode Prospect Widget for Easton Training Center : Facebook CrossFit Prospect
	</script>
	<noscript>Please enable Javascript in order to get <a href="https://www.healcode.com" target="_blank">HealCode</a> functionality</noscript>

	</body>
</html>