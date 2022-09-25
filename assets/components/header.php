<!doctype html>
<html lang="en">

<head>
    <title>
        <?= $tabTitle; ?>
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $style ?>./assets/style.css">
</head>

<body class="bg-light d-flex flex-column h-min-100vh">

    <header>
        <section>
            <div class="container text-center p-4">
                <?php if ($btn == true) : ?>
                    <div class="position-absolute">
                        <a class="btn btn-info" href="../index.php">← menu</a>
                    </div>
                <?php endif; ?>
                <h1><?= $title; ?> <span class="bg-primary text-white px-2 rounded shadow">PHP</span></h1>
            </div>
        </section>
    </header>