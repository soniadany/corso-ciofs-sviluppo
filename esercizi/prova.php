<HTML>
 <HEAD>
	</HEAD> 
  <BODY>
    <TITLE>TITOLO PAGINA web </TITLE>
	  	
	<?php
	
	if (!$link = mysql_connect('localhost', 'sonia')) {
		echo 'Could not connect to mysql';
		exit;
		}
	var_dump($link);
	if ( (!mysql_select_db('mydb' , $link)) ) {
		echo 'Could not select database';
		exit;
	    }
	$sql	= 'select * from where UMcod = "l" ';
	$result  =  mysql_query ($sql, $link) ;
	if (!result) {
			echo "DB Error ; could not query the database\n";
			echo ' mysql error:'. msql_error () ;
			exit;
}
while ($row = msql_field_assoc($result) ) {
	echo $row['UMcod'] , "<br>" ,$row['descrizioni'] , "<br>" , $row['idUM'];
}
	?>
	<h1>prova</h1>
  </BODY>
</HTML>

