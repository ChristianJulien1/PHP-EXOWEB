<?php ob_start() ?>


<?php
   $tableau = [ "M" => 1000 , "CM"=> 900 , "D" => 500 , "CD" => 400 , "C" => 100 , "XC" => 90 , "L" => 50 , "XL" => 40 , "X" => 10 , "IX" => 9 , "V" => 5 , "IV" => 4 , "I" => 1];
   $saisie = readline ("entrez un nombre :");
   while($saisie > 0){
            foreach ($tableau as $romain => $nombre) {
                if ($saisie >= $nombre) {
                    echo $romain;
                    $saisie = $saisie - $nombre;
                    break;
                } 
            }
        }
        

?>

<?php
$content = ob_get_clean();
require "template.php";
?>