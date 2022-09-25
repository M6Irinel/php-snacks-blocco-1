<?php

$name = isset($_GET['name']) ? $_GET['name'] : null;
$mail = isset($_GET['mail']) ? $_GET['mail'] : null;
$age = isset($_GET['age']) ? $_GET['age'] : null;

?>

<?php
$style = '.';
$title = 'Snack 2';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

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

<?php include '../assets/components/footer.php' ?>