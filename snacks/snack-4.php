<?php

$numbers = [];

while (count($numbers) <= 15) {
    $n = rand(1, 99);
    if (!in_array($n, $numbers))
        $numbers[] = $n;
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 4</title>
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
                <h1>Snack 4 <span class="bg-primary text-white px-2 rounded shadow">PHP</span></h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container p-4 shadow rounded border text-center">
                <h3 class="mb-4">15 numeri random</h3>
                <div class="d-flex flex-wrap justify-content-center" style="gap: 5px;">
                    <?php foreach ($numbers as $v) : ?>
                        <?php if ($v % 2 == 0) : ?>
                            <span class="bg-primary p-2 ml-1 text-center font-weight-bold text-white" title="PARI">
                                <?php echo $v; ?>
                            </span>
                        <?php else : ?>
                            <span class="bg-danger p-2 ml-1 text-center font-weight-bold text-white" title="DISPARI">
                                <?php echo $v; ?>
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
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