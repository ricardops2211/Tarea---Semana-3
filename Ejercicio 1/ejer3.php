<title> LABORATORIO 3 DE PACHAS </title>
<?php
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
num($valores);
function num($valores){
  $mayor = $valores[0];
  $menor = $valores[0];
   foreach ($valores as $key) {
    if ($mayor < $key){
      $mayor = $key;
    }
    if($menor > $key){
      $menor = $key;
    }
   }
   echo "El número mayor es: ".$mayor."</br>";
   echo "El número menor es: ".$menor;
}




 ?>
