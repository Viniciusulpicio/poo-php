<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\Hidrometro;

$hidrometro = new Hidrometro("Casa", 13456, 13670);

$hidrometro->registrarLeitura(13800);
echo $hidrometro->resumo(5.5);

$hidrometro->registrarLeitura(14098);
echo $hidrometro->resumo(5.5);

$hidrometro->registrarLeitura(14240);
echo $hidrometro->resumo(5.5);


$hidrometro->registrarLeitura(14000);
echo $hidrometro->resumo(5.5);



?>