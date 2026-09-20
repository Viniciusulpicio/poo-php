<?php

use App\TicketEstacionamento;

$tarifa = 10.0; // R$ 10,00 por hora
$entradaPadrao = 480; // Ex: 08:00 da manhã (8 * 60)

// Simulação 1: 40 minutos de permanência (saída em 480 + 40 = 520)
$ticket1 = new TicketEstacionamento("ABC-1234", $entradaPadrao, $tarifa);
$ticket1->registrarSaida($entradaPadrao + 40);
echo $ticket1->resumo() . PHP_EOL;

// Simulação 2: 60 minutos de permanência (saída em 480 + 60 = 540)
$ticket2 = new TicketEstacionamento("DEF-5678", $entradaPadrao, $tarifa);
$ticket2->registrarSaida($entradaPadrao + 60);
echo $ticket2->resumo() . PHP_EOL;

// Simulação 3: 125 minutos de permanência (saída em 480 + 125 = 605) -> Arredonda para 3 horas
$ticket3 = new TicketEstacionamento("GHI-9012", $entradaPadrao, $tarifa);
$ticket3->registrarSaida($entradaPadrao + 125);
echo $ticket3->resumo() . PHP_EOL;

?>