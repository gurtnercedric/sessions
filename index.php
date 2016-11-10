<head>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="app.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
	margin: 5%;
	padding: 5%;
}
</style>

</head>

<body>

	 <div class="containter">
		<div class="row"
			<div class="col-md-12">
			
			<form method="POST">
			
				<div class="form-group">
				<label for=Name">Name</label>
				<input class="form-control" type="text" name="Name"  value="" placeholder="Bitte Name eingeben" id="Name" >
				</div>
				
				<div class="form-group">
				<label for=farbe">Farbe</label>
				<input class="form-control" type="color" name="Farbe"  value="#f5f5f5" >
				</div>
				<div class="form-group">
				<label for="Bauart">Bauart</label>
				<select class="form-control" title="Bauart">
				<option value="Cabrio">Cabrio</option>
				<option value="Limousine">Limousine</option>
				<option value="Kombi">Kombi</option>
				</select>
				</div>
				<div class="form-group">
				<label for=Alter">Alter</label>
				<input class="form-control" id="disabledInput" type="text" placeholder="13" disabled>
				</div>
				
				<div class="form-group">
				<label for=E-Mail">E-Mail</label>
				<input class="form-control" type="E-Mail" name="E-Mail"  value="" placeholder="example@example.com">
				</div>
				
				<button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Submit</button>
				<button onclick="firstFunc()" type="button" class="btn btn-default"><i class="fa-object-ungroup"></i> jQuerry button</button>
			<br>
			</form>
			
			</div>
		</div>
	</div>
	
	
	
	<?php
	
	
	
	include('class.php');
	
	
	$fehlercheck = false;
	
	if(!empty($_POST['Name'])){
		$name = $_POST['Name'];
	} else{
	$fehlercheck = true;
	}
	
	if(!empty($_POST['farbe'])){
		$farbe = $_POST['farbe'];
	} else{
	$fehlercheck = true;
	}
	
	if(!empty($_POST['E-Mail'])){
		$Mail = $_POST['E-Mail'];
	} else{
	$fehlercheck = true;
	}
	
	
	if(!empty($_POST)){
		if($fehlercheck == true){
			echo "<strong>Fehler bei der Eingabe<strong>";
		}
		}
	
	
	
	
	
	echo "<br><br>";
	echo "<h2>Fahrzeugdaten von Golf</h2>";
	
	
	session_start();


	
	$golf = new Auto;
	echo "<br><br>";
	$golf->setFarbe('rot');
	echo "<br><br>";
	$golf->Treibstoff('Diesel');
	echo "<br><br>";
	$golf->setBauart('Limousine');
	echo "<br><br>";
	$golf->tankDeckelOeffnen('Diesel');
	
	echo "<br><br><br>";
	echo "<h2>Anzahl Tankfüllungen des Golfes:</h2><br>";
	echo "Das Auto wurde schon $golf->Counter mal POSTankt";
	
	
	
	echo "<br><br><br><br><br><br>";
	echo "<h2>Fahrzeugdaten von Maserati</h2>";
	$maserati = new Auto;
	$maserati->setFarbe('Schwarz');
	echo "<br><br>";
	$maserati->Treibstoff('Bleifrei');
	echo "<br><br>";
	$maserati->setBauart('Limousine');
	echo "<br><br>";
	$maserati->tankDeckelOeffnen('Bleifrei');
	$maserati->tankDeckelOeffnen('Bleifrei');
	$maserati->tankDeckelOeffnen('Bleifrei');
	
	echo "<br><br><br>";
	echo "<h2>Anzahl Tankfüllungen des Maseratis:</h2><br>";
	echo "Das Auto wurde schon $maserati->Counter mal betankt<br><br><br>";
	


	
	
	
	
	?>


</body>