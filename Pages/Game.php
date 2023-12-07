<?php
if (isset($_POST['choice']) && $name == $_SESSION['name1']) {
    $_SESSION['choice1'] = $_POST['choice'];
} else if (isset($_POST['choice']) && $name == $_SESSION['name2']) {
    $_SESSION['choice2'] = $_POST['choice'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body style="padding: 0;margin: 0; box-sizing: border-box">
<header style="display: flex; justify-content: center; width: 100vw; background-color: black; margin-bottom: 1rem">
    <img src="https://placehold.co/100x50" alt="logo"/>
</header>

<main>
    <header>
        <h2> <?= $name ?> </h2>
        <p></p>
        <section>
            <form method="post">
                <label>
                    <input type="hidden" name="choice" value="pierre"/>
                </label>
                <button type="submit">Pierre</button>
            </form>
            <form method="post">
                <label>
                    <input type="hidden" name="choice" value="feuille"/>
                </label>
                <button type="submit">Feuille</button>
            </form>
            <form method="post">
                <label>
                    <input type="hidden" name="choice" value="ciseaux"/>
                </label>
                <button type="submit">Ciseaux</button>
            </form>
        </section>
    </header>
</main>
</body>
</html>