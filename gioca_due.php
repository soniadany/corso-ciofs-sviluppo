
benvenuto <?php echo $_POST["nome"]?>
<?php 

 $player = rand (1,6);
 $computer = rand (1,6);
 ?>
 
  
<?php if ($player < $computer) {
	 echo $_POST["nome"] . " hai perso" ;
	 } 
	 elseif ($player > $computer) {
	 echo $_POST["nome"] . " hai vinto" ;
 }
 else {
	 echo $_POST["nome"] . " hai pareggiato" ;
 }

 
?>

