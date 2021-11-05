<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>a</title>
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/css/autoComplete.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	</head>

	<body>
		<div>

				<input id="autoComplete" type="text" tabindex="1">
				<div class="selection"></div>

			<footer class="footer">
				<div class="copyrights" hidden>
					Copyright &copy; 2018-<span id="currentDate"></span>
					<a href="http://www.tarekraafat.com/">Tarek Raafat</a> All Rights
					Reserved
				</div>
			</footer>

		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/js/autoComplete.min.js"></script>
		<script src="./data/index.js"></script>
	</body>

</html>
