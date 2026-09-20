<?php
// Vinicius Lima Sulpicio - 2213215 - BCC-B

use App\IngressoCinema;

$ingresso1 = new IngressoCinema("Amor em ruinas", 50, false);
$ingresso2 = new IngressoCinema("Batman", 50, true);

echo $ingresso1->resumo() . PHP_EOL;
echo $ingresso2->resumo() . PHP_EOL;

?>