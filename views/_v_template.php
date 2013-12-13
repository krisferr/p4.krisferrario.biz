<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="icon" type="image/vnd.microsoft.icon" href="/icon.ico" />
					
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine:bold,bolditalic|Inconsolata:italic|Droid+Sans">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="../js/prayer.js"></script>
	
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	<div class=push></div>
		
</div>
	
</body>

<footer>
	<ul id="footer">
            <li>Developed for <a href="http://dwa15.com/Home" target="_blank">CSCI-E 15</a> at Harvard Exension School</li>
            <li>For Academic Purposes Only</li>
        </ul>
	
</footer>
</html>