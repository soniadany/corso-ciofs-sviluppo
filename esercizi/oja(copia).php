

<table border>
  <tr>
     <td colspan="2" rowspan="2"> 
       <?php
//questo e' un commento
     $prestito=10000;
     $tasso=5.45;
      $interessi=($prestito*$tasso)/100;
 $restituire=$interessi+$prestito;
   echo "tu devi restituire  $restituire ";
       ?>
       </td>
      <td>1,3</td>
  </tr>
  <tr>
      <td>2,3</td>
  </tr>
  <tr>
      <td>3,1 </td> 
      <td>3,2 </td> 
      <td>3,3 </td>
  </tr>
</table>  
