<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="file:///C|/Users/user/AppData/Local/Microsoft/Windows/Temporary Internet Files/Content.IE5/YNO7YR7F/stile-form.css">
	</head>
	<body>


		<?php
			$cambio = array();
			$cambio['EU'] = 1;
			$cambio['USD'] = 1.28;
			$cambio['YEN'] = 105.37;
			$cambio['GBP'] = 0.80;
			$cambio['CHF'] = 1.20;
   
		  ?>
		<form method="POST">
			<td>
            	<select name="cambio">
            							<option value="euro">eu</option>
										<option value="dollaro">USD</option>
										<option value="yen">yen</option>
										<option value="sterlina inglese">gbp</option>
										<option value="franco svizzero">chf</option>
										
							
            
								<?php foreach($cambio as $key => $val): ?>
								<option value="<?php echo $val ?>">
								<?php echo $key ?>
								</option>
								<?php endforeach; ?>
				</select>
            </td>
			<input type="text" name="valuta" />
     		<input type="submit" value="Calcola cambio" />
		</form>
	</body>
</html>

