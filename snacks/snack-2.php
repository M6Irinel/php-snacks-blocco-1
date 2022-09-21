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
</head>

<body>

    <header>
        <section>
            <div class="container text-center p-4">
                <h1>Snack 1</h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container d-flex justify-content-center shadow p-3">
                <form class="d-flex flex-column w-50" action="./snack-2.php">
                    <div class="form-group">
                        <label for="name">Inserisci il nome per favore</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="qui dentro va il nome...">
                    </div>

                    <div class="form-group">
                        <label for="mail">Adesso qui va il tuo mail</label>
                        <input class="form-control" type="email" name="mail" id="mail" placeholder="vai con il mail, urraa...">
                    </div>

                    <div class="form-group">
                        <label for="age">In fine, la tua eta ed è finita</label>
                        <input class="form-control" type="number" name="age" id="age" placeholder="non barrare con l'età">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Invia al GET i dati">
                </form>
            </div>
        </section>
        <section>
            <div class="container text-center shadow p-0 mt-5">
                <?php if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && number_format($age)) : ?>
                    <h3 class="bg-success p-4 text-white">Accesso riuscito</h3>
                <?php else : ?>
                    <h3 class="bg-danger p-4 text-white">Accesso negato</h3>
                <?php endif; ?>
            </div>
        </section>
    </main>

</body>

</html>