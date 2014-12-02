<html>
	<head><title>Class Selection</title></head>
	<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		Select your Job Class:<br />
		<select name="attributes[]" multiple>
			<option value="warrior"	>Warrior</option>
			<option value="wizard"	>Wizard</option>
			<option value="archer"	>Archer</option>
			<option value="rouge"	>Rouge</option>
			<option value="merchant">Merchant</option>
			<option value="cleric"	>Cleric</option>
		</select><br />

		<input type="submit" name="s" value="Record my job class" />
	</form>

	<?php if (array_key_exists('s', $_GET)){
		$description = join(' ', $_GET['attributes']);
		echo "You're a mighty {$description}!";
	} ?>
	</body>
</html>