<form action="" method="post">
    <h2>Numero de tel</h2>
    <p>Attention : Toutes les données du formulaires doivent etre séparéa par des espaces vides.</p>
    <input type="text" name="array1">
    <button type="submit">Envoyer</button>
</form>


<?php

$a = $_POST['array1'];


if (empty($_POST['array1']) && empty($_POST['array2'])){
    echo "Merci de saisir des valeurs";
} else {
    if(filter_var($a, FILTER_VALIDATE_INT) !== false) { //Si la variable est bien un entier.
    
    } else {
        echo "Merci de ne rentrer que des chiffres";
    }
}
