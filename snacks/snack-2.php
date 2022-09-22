<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class="bg-light d-flex flex-column h-min-100vh">

    <header>
        <section>
            <div class="container text-center p-4 position-relative">
                <div class="position-absolute">
                    <a class="btn btn-info" href="../index.php">← menu</a>
                </div>
                <h1>Snack 2 <span class="bg-primary text-white px-2 rounded shadow">PHP</span></h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container d-flex justify-content-center shadow rounded p-3 border">
                <form class="d-flex flex-column w-50" action="./snack-2.php">
                    <div class="form-group">
                        <label for="name">Inserisci il nome per favore</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="qui dentro va il nome..." required>
                    </div>

                    <div class="form-group">
                        <label for="mail">Adesso qui va il tuo mail</label>
                        <input class="form-control" type="email" name="mail" id="mail" placeholder="vai con il mail, urraa..." required>
                    </div>

                    <div class="form-group">
                        <label for="age">In fine, la tua eta ed è finita</label>
                        <input class="form-control" type="number" name="age" id="age" placeholder="non barrare con l'età" required>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Invia al GET i dati">
                </form>
            </div>
        </section>

        <section>
            <div class="container text-center shadow p-0 mt-5">
                <?php if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && number_format($age)) : ?>
                    <h3 class="bg-success p-4 text-white rounded">Accesso riuscito</h3>
                <?php else : ?>
                    <h3 class="bg-danger p-4 text-white rounded">Accesso negato</h3>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <footer class="mt-auto">
        <section>
            <div class="container bg-dark text-white p-3 text-center">
                <p class="m-0"><span class="text-danger">♥</span> grazie per la visione del sito <strong>snack PHP</strong> ___ by. <strong>Boolean</strong> <span class="text-danger">♥</span></p>
            </div>
        </section>
    </footer>

</body>

</html>