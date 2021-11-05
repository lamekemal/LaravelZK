<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "UA-129399191-2");
		</script>
  <title>Connexion</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/css/autoComplete.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body >

<div >
          <label for="bday">ville de résidance</label>
              <!-- CODE DE ADRESS GEOGRAPHIQUE -->
              <div class="body" align="center">
                <input id="autoComplete" type="text" tabindex="1"/>
                  <div class="mode">
                    <h4>mode</h4>
                    <div class="toggele">
                      <div class="toggeler">Strict</div>
                    </div>
                  </div>
                <div class="selection"></div>
              </div>
          </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/js/autoComplete.min.js"></script>
<script src="./data/index.js"></script>
</body>
</html>