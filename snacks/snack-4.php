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
</head>

<body>

    <header>
        <section>
            <div class="container text-center p-4">
                <h1>Snack 4</h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container p-4 shadow text-center">
                <?php foreach ($numbers as $k => $v) : ?>
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
        </section>
    </main>

</body>

</html>