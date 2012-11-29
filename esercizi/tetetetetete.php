<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="miostile.css">
	</head>
	<body>
			Et&agrave; =
 <?php
//questa è la data attuale			
			$data_attuale_Y = date('Y');
			$data_attuale_m = date('m');
			$data_attuale_d = date('d');
// questa è la data di nascita			
			$data_nascita_Y = $_POST['anno'];
			$data_nascita_m = $_POST['mese'];
			$data_nascita_d = $_POST['giorno'];
// calcolo età
			$calc_eta = $data_attuale_Y - $data_nascita_Y;
     		if ($data_attuale_m < $data_nascita_m)  {
				$calc_eta -= 1;	
			}   else if  ($data_attuale_m == $data_nascita_m) {
				if ($data_attuale_d < $data_nascita_d)  {
					$calc_eta -= 1;
				}			
    		}
	$eta = 	$calc_eta;	
	echo "$eta";		
?>
			<form method="POST"> 
					<table>
							<TR>
									
										<td>	<input type="text" name= "anno"/>
										</td>
							</TR>
							<TR>
									
      									<td>	<input type="text" name= "mese"/>
										</td>
                                      </TR>
							<TR>
									
      									<td>	<input type="text" name= "giorno"/>
										</td>
                                      </TR>
									<TR>
									
      									<td>	<input type="submit" value= "calcola"/>
										</td>
                                      </TR>
		      				</table>
			</form>
	
	</body>
</html>
