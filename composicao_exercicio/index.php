<?php

// PHP_EOL  --> End of Line --> Pula para a proxima linha
echo "Servidor iniciado..." . PHP_EOL ;

require_once __DIR__ . '/vendor/autoload.php';
use App\Pedido;
use App\ItemPedido;

$item1 = new ItemPedido("Teclado", 1, 271.97);
$item2 = new ItemPedido("Mouse", 3, 173.97);
$item3 = new ItemPedido("RTX 4080", 7, 4318.96);
$item4 = new ItemPedido("Ferro de solda", 30, 40.67);


$pedido = new Pedido();
$pedido->adicionarItem($item1);
$pedido->adicionarItem($item2);
$pedido->adicionarItem($item3);
$pedido->adicionarItem($item4);
// $pedido->adicionarItem($item4);

$pedido->listarItem();



?>