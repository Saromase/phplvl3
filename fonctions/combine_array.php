<form action="" method="post">
    <h2>Premier tableau</h2>
    <p>Attention : Toutes les données du tableau doivent etre séparéa par des espaces vides.</p>
    <input type="text" name="array1">
    <h2>Deuxieme tableau</h2>
    <input type="text" name="array1">
    <button type="submit">Envoyer</button>
</form>


<?php

if (empty($_POST['array1']) && empty($_POST['array2'])){
    echo "Merci de saisir des valeurs";
} else {
    echo "Valeur";
}