<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
		
		$risultato= ((($_POST ['obbiettivo_euro']*12) + $_POST ['imu'])*10000)/(9700-(85*$_POST ['aliquota']));
		$tasse = ($risultato*0.85)*($_POST ['aliquota']/100);
		?>
		Per avere un mensile netto di <?php echo $_POST['obbiettivo_euro']; ?>  euro al mese, sarà necessario un affitto annuo di
		<?php echo $risultato ?> euro<br>
		In questo modo pagherai  <?php echo $tasse ?> euro di tasse e <?php echo $_POST['imu']; ?> di imu.
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="obbiettivo_euro">obbiettivo_euro</label>
					</td>
					<td>
						<input type="text" name="obbiettivo_euro" class="testo" /> al mese
					</td>
				</tr>
				<tr>
					<td>
						<label for="imu" "euro">imu_euro</label>
					</td>
					<td>
						<input type="text" name="imu" class="testo" />
					</td>
				</tr>
                <tr>
					<td>
						<label for="aliquota":> Aliquota:</label>
					</td>
					<td>
						<input type="text" name="aliquota" class="testo" /> % dell'imponibile
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="calcola" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

