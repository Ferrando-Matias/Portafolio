<?php
//ARRAYS - ARREGLOS - VECTORES
$frutas = array("manzana", "banana", "durazno"); //creo un array y le asigno valores
print_r($frutas); //muestro la info de un array
echo "<br>";

echo $p = count($frutas); //cuento los valores de un array
echo "<br>";

print_r(array_pop($frutas)); //extraigo el ultimo valor de un array
echo "<br>";

echo array_product($frutas); //multiplico los valores de un array
echo "<br>";

array_push($frutas, "pera"); //agrego un elemento al final del array
print_r($frutas);
echo "<br>";

array_sum($frutas); //suma los valores de un array

array_unshift($frutas, "frutilla"); //agrego un elemento al principio del array
print_r($frutas);
echo "<br>";

rsort($frutas); //Ordena un array en orden inverso
print_r($frutas);
echo "<br>";

sort($frutas); //Ordena un array de menor a mayor
print_r($frutas);
echo "<br>";

//Recorrer un array
for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . ", ";
}
echo "<br>";

$a = 0;
while ($a < count($frutas)) {
    echo $frutas[$a] . ", ";
    $a++;
}
echo "<br>";

$a = 0;
do {
    echo $frutas[$a] . ", ";
    $a++;
} while ($a < count($frutas));
echo "<br>";

foreach ($frutas as $arrayfrutas) {
    echo $arrayfrutas . ", ";
}
echo "<br>";