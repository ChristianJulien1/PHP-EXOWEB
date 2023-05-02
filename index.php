<?php ob_start() ?>

<h2 class="text-center mt-5">Convertisseur de nombres en chiffres romains</h2>
	<form method="post" class="text-center mt-5">
		<label for="nombre">Entrez un nombre :</label>
		<input type="nombre" id="nombre" name="nombre" min="1" max="3999" method="POST" action="template.php" required></input>
		<button type="submit">Convertir</button>
	</form>

<?php
$content = ob_get_clean();
require "template.php";
?>