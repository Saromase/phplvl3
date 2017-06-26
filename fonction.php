<?php

/*
        AFFICHER LES TABLEAUX
*/
function printTwoArray ($array, $ary) {
    for ($j=0; $j < count($array); $j++){
    echo '<tr><td>'. $array[$j].'</td>';
    echo '<td>'. $ary[$j].'</td></tr>';
    }
}
function printArray ($array){
    for ($i=0; $i < count($array); $i++){
    echo '<tr><td>'. $array[$i].'</td></tr>';
    }
}

function printTwoArrayDiff ($oldarray, $newarray){
    for ($j=0; $j < count($oldarray); $j++){
    echo '<tr><td>'. $oldarray[$j].'</td>';
    if ($j < count($newarray)){
            echo '<td>'. $newarray[$j].'</td></tr>';
        }
    }
}
/*
        Fonction.
*/
// Exercice 1 
function ArrayToArray ($ary, $tab1, $tab2) {
    for ($i = 0; $i < count($ary[$tab1]); $i++) {
    for($j= 0; $j < count($ary[$tab2]); $j++) {
        $final[] = $ary[$tab2][$j] . " " . $ary[$tab1][$i];
    }
}
    return $final;
}
// Exercice 2
function StringToArray ($delimiter, $string) {
    return explode($delimiter, $string);
}
// Exercice 3
function Select_last ($array){
    $reverse = array_reverse($array);
    for ($i=0; $i < (count($array) -6); $i++){
        $final[] = $reverse[$i];
}
    return $final;
}
// Exercice 4
function deleteMedianArray ($array){
    $arrondis = floor((count($array) /2));
    unset($array[$arrondis]);
    return array_merge($array);
}
// Exercice 5
function ArrayMaxLenght ($array){
    for ($i = 0;$i < count($array) -1; $i++){
        $motA = $array[$i];
        $motB = $array[$i+1];
        if (strlen($motA) > strlen($motB)){
            $array[$i] = $motB;
            $array[$i +1] = $motA;
        }
    }
    return $array[(count($array)-1)];
}
// Exercice 6
function Change06To33($array, $change){
    for ($i = 0; $i < count($array); $i++){
        $numero = $array[$i];
        $first_num = substr($numero,2,10);
        $replace = str_replace($numero, $change, $numero);
        $newarray[$i] = $replace.$first_num;
}
    return $newarray;    
}
// Exercice 7 
function occurence ($array, $letter) {
    $implode = implode($array);
    $count_char = count_chars($implode, 1);
    $LetterAskii = ord($letter);
    return $count_char[$LetterAskii];
}


/*
        GENERATION DE FORMULAIRE HTML
*/

function addInput ($int, $sortie,$arrayType, $arrayName){
    for ($i = 0; $i < $int; $i++){
        $sortie .= "<input type='$arrayType[$i]' class='form-control' name='$arrayName[$i]'>";;
    }
    return $sortie;
}
?>
