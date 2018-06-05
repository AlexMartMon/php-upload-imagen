<html>
	<head>
		<title>Problema</title>
	</head>
	<body>
		<?php
			copy($_FILES['foto']['tmp_name'],'../../img/'.$_FILES['foto']['name']);
			echo "La foto se registro en el servidor.<br>";
			$nom='../../img/'.$_FILES['foto']['name'];
			echo "<img src=\"$nom\">";
		?>
	</body>
</html>