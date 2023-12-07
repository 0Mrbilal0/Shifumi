<?php
require 'classes/Players.php';
require 'classes/Choices.php';

use Shifumi\Choices;
use Shifumi\Players;

session_start();
$choices = new Choices('', '');

if (isset($_POST['name1']) && isset($_POST['name2']) || isset($_SESSION['name1'])) {
    $score1 = $_SESSION['score1'] ?? 0;
    $score2 = $_SESSION['score2'] ?? 0;
    //Premier Tour
    if (!isset($_SESSION['name1'])) {
        $players = new Players(
            $_POST['name1'],
            $_POST['name2'],
            $score1,
            $score2
        );
        $choices->setState(rand(0,1));
        $playerName = [$players->getName1(), $players->getName2()];
        $name = $playerName[$choices->getState()];
    }
    //Deuxième Tour
    if (isset($_SESSION['name1'])) {
        $players = new Players(
            $_SESSION['name1'],
            $_SESSION['name2'],
            $score1,
            $score2
        );
        $choices->setState($_SESSION['state']);
        $choices->getState() == 0 ? $choices->setState(1) : $choices->setState(0);
        $playerName = [$players->getName1(), $players->getName2()];
        $name = $playerName[$choices->getState()];
    }
    include 'Pages/Game.php';
    var_dump($_SESSION);

} else {
    include './Pages/Accueil.php';
    echo 'Veuillez entrer au moins un nom';
}
