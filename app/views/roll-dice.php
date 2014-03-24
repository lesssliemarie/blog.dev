<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice View</title>

<style>
body {
	text-align: center;
}
</style>

</head>
<body>
	<h1>Rolled Number:</h1>
	<h2><?= $roll; ?></h2>

	<? if ($roll == $guess): ?>
	<h3 style="color: green">LUCKY GUESS!</h3>
	<? else: ?>
	<h3 style="color: red">WRONG GUESS</h3>
	<? endif; ?>

	<h1>Guessed Number:</h1>
	<h2><?= $guess; ?></h2>

</body>
</html>