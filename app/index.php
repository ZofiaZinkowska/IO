<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl" >
<head>
    <meta charset="UTF-8" />
    <title> Aplikacja do zakładania kont na serwerze baz danych </title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="pobrane.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <div id="container">
        <nav>
            <button><a class="menu" href="index.php">Strona główna</a></button>
            <button><a class="menu" href="login.php">Login</a></button>
            <button><a class="menu" href="register.php">Rejestracja</a></button>
        </nav>
        
	        <article>
				<h1>Aplikacja do zakładania kont na serwerze baz danych</h1>
                <p>
                Projekt ma na celu rozwiązanie problemu przestarzałego oprogramowania systemu wspomagającego zakładanie
kont na serwerze baz danych. Pomysł na aplikacje powstał podczas rozmowy z dr inż. Bartoszem Reichelem
oraz brakiem nowoczesnej koncepcji do rozwiązania problemu. Przedsięwzięcie dąży do wypełnienia brakujących
potrzeb w systemie na Wydziale FTiMS. 
                </p>
			</article>
        <section>
			<?php
			include '../projektIO/dump.php';
            ?>
		</section>
        <footer>
        </footer>
    </div>
</body>
</html>