<?php
//C:\xampp\php\php.exe

//US1
//Song Class Test
require './class.php';

$a = new Song('Africa', 'Toto', 1, 2.5);
$b = new Song('Three Little Monkeys', 'Dion', 1, 2.5);
$c = new Song('Eine Nase', 'Eros', 1, 2.5);
$d = new Song('lil jeep', 'peep', 1, 2.5);
$e = new Song('haram', 'nikola', 1, 2.5);


echo $a->getAllIds();
echo ' | ';
echo $a->getId();
echo ' | ';
echo $b->getId();

//OST Class Test
echo "\n\n---OST \n";

$list1 = array($a, $b, $c, $d, $e);
$ost1 = new OST('Mario Theme', 'Mario', '20.08.2005', $list1);

echo $ost1;



?>