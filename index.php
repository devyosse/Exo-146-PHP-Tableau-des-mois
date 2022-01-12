<?php
//1
$mois = [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre',
];

//2
echo $mois[3];
echo "<br>";

//3
echo $mois[5];
echo "<br>";

//4
echo $mois[7] = "août";
echo "<br>";

//5
$departement = ["59" => "Nord", "62" => "Pas-de-Calais", "02" => "Aisne", "60" => "Oise", "80" => "Somme"];
echo "<br>";

//6
echo $departement[59];
echo "<br>";

//7
$departement[8] = ["51" => "Marne"];
echo "<br>";

//8

for($i = 0;$i < count($mois); $i++){
    echo $mois[$i] . "<br>";
}
echo "<br>";

//9
foreach ($departement as $departements) {
    echo $departements."<br>";
}
echo "<br>";

//10

foreach ($departement as $num_departement => $nom_departements) {
    echo "Le département " .$nom_departements. " a le numero ".$num_departement. "";
    echo "<br>";
}