<?php
require 'classes/Players.php';
require 'classes/Choices.php';

use Shifumi\Choices;
use Shifumi\Players;
session_start();

$choices = new Choices(
    '',
    '',
    rand(0, 1)
);
if (isset($_POST['name1']) || isset($_POST['name2']) || isset($_SESSION['name1'])) {
    include 'Pages/Game.php';
    if (!isset($_SESSION['name1'])) {
        $score = 0;
        $players = new Players(
            $_SESSION['name1'],
            $_SESSION['name2'],
            $score,
        );
        $playerName = [$players->getName1(), $players->getName2()];
        if ($players->getName1() && $players->getName2() ) {
            $name = $playerName[$choices->getState()] ;
        }
    }
    if (isset($_SESSION['name1'])) {
        $name = $_SESSION['name1'];
        if ($_POST['choice']){

        }
    }


} else {
    include './Pages/Accueil.php';
    echo 'Veuillez entrer au moins un nom';
}