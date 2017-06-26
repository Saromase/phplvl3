<pre>
<?php
require '../fonction.php';

$array = array(
    'Sport' => ['Football', 'BasketBall', 'Baseball', 'Hockey', 'Handball', 'Ping-Pong', 'Badmington', 'Babyfoot'],
    'Joueurs' => ['Alice', 'Roxane', 'Carole','Deborah', 'Léa', 'Vassily', 'Florian', 'Benoit', 'Olivier'],
    'Phrases' => [' aime jouer au ',' n\'aime pas jouer au ']
);
$intPlayers = rand(0,(count($array['Joueurs']) -1));
$intSport = rand(0,(count($array['Sport']) -1));
echo $array['Joueurs'][$intPlayers] . $array['Phrases'][rand(0,1)]. $array['Sport'][$intSport];

?>
</pre>
