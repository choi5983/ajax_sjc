<html>
<head>
	<title>Weather Demo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


	<script type="text/javascript">

	$(document).ready(function(){

		$('form').submit(function(){
			var city = $(this).children()[0].value;
			var form = $(this);


			console.log($(this).children()[0].value);
			$.ajax('http://api.openweathermap.org/data/2.5/weather?q='+$(this).children()[0].value).done(function(response){
				console.log('Got the following response from', 'http://api.openweathermap.org/data/2.5/weather?q='+city, response);
				console.log('Temperature is', response.main.temp);
				form.siblings('p')[0].innerHTML = "Temperature: "+response.main.temp+"K | Pressure: "+(response.main.pressure/1000)+" atm";
			})
			return false;
		});


	});

	</script>

	<style type="text/css">
	div.box{
		border:1px solid silver;
		padding:15px;
		display:inline-block;
		width:200px;
		height:125px;
		margin:15px;
		vertical-align: top;
	}
	</style>
</head>
<body>


	<div class='box'>
		<form action='' method='post'>
			<input type='text' value='Seattle,WA' placeholder='enter city name' name='city' />
			<input type='submit' value='Retrieve' />
		</form>
		<p></p>
	</div>
	<div class='box'>
		<form action='' method='post'>
			<input type='text' placeholder='enter city name'name='city'  />
			<input type='submit' value='Retrieve' />
		</form>
		<p></p>
	</div>
	<div class='box'>
		<form action='' method='post'>
			<input type='text'placeholder='enter city name' name='city'  />
			<input type='submit' value='Retrieve' />
		</form>
		<p></p>
	</div>

</body>
</html>