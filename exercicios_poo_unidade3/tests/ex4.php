<?php
// Vinicus Lima Sulpicio - 2213125 - BCC-B

use App\CronometroTreino;

$cronometro = new CronometroTreino("Corrida", 0);

$cronometro->adicionarTempo(45);
echo $cronometro->formatarTempo() . PHP_EOL;


$cronometro->adicionarTempo(300);
echo $cronometro->formatarTempo() . PHP_EOL;

$cronometro->adicionarTempo(800);
echo $cronometro->formatarTempo() . PHP_EOL;

$cronometro->zerar();
echo "zerando" . $cronometro->formatarTempo() . PHP_EOL;

?>