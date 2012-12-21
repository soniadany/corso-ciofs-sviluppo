<html>
	<head>
		<title> CARTESIO</title>
	</head>
	<body>
		<table border="2">
		     <?php	for ($i = 1;$i<= 10 ; $i++) { ?>
		     <tr>
				<?php for ($j=1; $j <=10; $j++) { ?>
				<td> <?php echo $j*$i?> </td>
				<?php } ?>
				
		     </tr>
				<?php } ?>
		</table>
	</body>
</html>
