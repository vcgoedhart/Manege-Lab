<?php 
	$errName = "";
	$errAge = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (!empty($_POST['name']) 
			&& !empty($_POST['age'])){
			
			$arr = [$_POST['name'], $_POST['age'], $_POST["id"]];
			update($arr);
		}
		if (empty($_POST["name"])){
			$errName = "* Vul dit veld in.";
		}
		if (empty($_POST["age"])){
			$errAge = "* Vul dit veld in.";
		}
	}
 ?>
<h1>Persoon wijzigen</h1>
<form name="create" method="post">
	<input type="hidden" name="id" value="<?= $medewerker["id"] ?>">
	<div class="form-group">
		<label for="name">Naam</label>
		<input type="text" name="name" id="name" value="<?= $medewerker['name'] ?>"> <span class="text-danger"><?= $errName ?></span>
	</div>
	<div class="form-group">
		<label for="age">Leeftijd</label>
		<input type="text" name="age" id="age" value="<?= $medewerker['age'] ?>"> <span class="text-danger"><?= $errAge ?></span>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary" value="Bewerk">
	</div>
</form>