<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">

	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="main.css">
	<!-- <link rel="stylesheet" href="./css/addMore.css"> -->
	<link rel="stylesheet" href="./css/1.css">
	<link rel="stylesheet" href="./css/tiltEffect.scss">
</head>
<body>
<div id="app-container" data-tilt >
  <div id="app">
    <vue-tabs id="tabs">
      <v-tab title="First Tab" class="tab" :selected="true">
        <div class="tab-content">
          <div class="tab-image first-image"></div>
          <div class="tab-content-text">
            <h1>First Header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt nu aliqua. Sollicit udin purus faucibus ornare aliquam ultrices sagittis orci a scelerisque a consectetur atna purus.</p>
          </div>
        </div>
      </v-tab>
    </vue-tabs>
  </div>
</div>

<div id="app-container" data-tilt >
  <div id="app">
    <vue-tabs id="tabs">
      <v-tab title="First Tab" class="tab" :selected="true">
        <div class="tab-content">
          <div class="tab-image first-image"></div>
          <div class="tab-content-text">
            <h1>First Header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt nu aliqua. Sollicit udin purus faucibus ornare aliquam ultrices sagittis orci a scelerisque a consectetur atna purus.</p>
          </div>
        </div>
      </v-tab>
    </vue-tabs>
  </div>
</div>
<div id="app-container" data-tilt >
  <div id="app">
    <vue-tabs id="tabs">
      <v-tab title="First Tab" class="tab" :selected="true">
        <div class="tab-content">
          <div class="tab-image first-image"></div>
          <div class="tab-content-text">
            <h1>First Header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt nu aliqua. Sollicit udin purus faucibus ornare aliquam ultrices sagittis orci a scelerisque a consectetur atna purus.</p>
          </div>
        </div>
      </v-tab>
    </vue-tabs>
  </div>

</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="js/tilt.jquery.js"></script>
<script src="text/javascript">
	new Vue({
		el:"#app",
	});

	$('.js-tilt').tilt({

	})

</script>
			
</body>
	<script type="text/javascript" src="scripts/hotelMore.js"></script>
	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
</html>