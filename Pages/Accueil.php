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
<form method="post">
    <label>
        Joueur 1
        <input type="text" placeholder="Entrez votre nom" name="name1" required/>
    </label>
    <label>
        Joueur 2
        <input type="text" placeholder="Entrez votre nom" name="name2" value="BOT"/>
    </label>

    <button type="submit">Jouer</button>
</form>
</body>
</html>