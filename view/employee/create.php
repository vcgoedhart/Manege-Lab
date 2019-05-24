<?php 
	$errName = "";
	$errAge = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (!empty($_POST['name']) 
			&& !empty($_POST['age'])){
			
			$arr = [$_POST['name'], $_POST['age']];
			store($arr);
		}
		if (empty($_POST["name"])){
			$errName = "* Vul dit veld in.";
		}
		if (empty($_POST["age"])){
			$errAge = "* Vul dit veld in.";
		}
	}
 ?>
<h1>Voeg een medewerker toe</h1>
<form name="create" method="post">
	<div class="form-group">
		<label for="name">Naam</label>
		<input type="text" name="name" id="name"> <span class="text-danger"><?= $errName ?></span>
	</div>
	<div class="form-group">
		<label for="age">Leeftijd</label>
		<input type="text" name="age" id="age"> <span class="text-danger"><?= $errAge ?></span>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary" value="Voeg toe">
	</div>
</form>