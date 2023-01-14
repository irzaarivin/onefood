<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>OneFood | Halaman Kosong</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/404.css" />

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<h1 style="font-family: 'Montserrat', sans-serif;" id="timeOut">5</h1>
			<div class="notfound-404">

				<h1>hahay</h1>
				<h2>404 - GADA APA-APA</h2>
				
			</div>
			<a href="http://onefood.test/">Cabut Dah</a>
		</div>
	</div>

	<script>

		var timeleft = 5;
	    var downloadTimer = setInterval(function(){

		    timeleft--;
		    document.getElementById("timeOut").textContent = timeleft;

		    if(timeleft <= 0) {
		        history.go(-1);
		    }

	    },1000);

	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
