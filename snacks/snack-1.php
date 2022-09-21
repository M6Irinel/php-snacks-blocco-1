<?php

function partita($casa, $ospite, $casa_score, $ospite_score)
{
    return [
        'casa' => $casa,
        'ospite' => $ospite,
        'casa_score' => $casa_score,
        'ospite_score' => $ospite_score
    ];
}

$partite = [
    partita('Correcaminos', 'Astros Jalisco', 118, 124),
    partita('Fuerza Regia', 'Plateros DeFresnillo', 100, 86),
    partita('Mineros', 'Libertadores de Queretaro', 87, 103),
    partita('Dorados De Chihuahua', 'Halcones UV Xalapa', 82, 78),
    partita('Soles', 'Abejas', 91, 87),
    partita('Socar Petkim', 'Turk Telekom', 63, 59)
];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 1</title>
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
            <div class="container">
                <ol>
                    <?php foreach ($partite as $key => $value) : ?>
                        <li>
                            <?php echo "{$value['casa']} - {$value['ospite']}" ?>
                            |
                            <span class="font-weight-bold">
                                <?php echo $value['casa_score'] ?>
                            </span>
                            -
                            <span class="font-weight-bold">
                                <?php echo $value['ospite_score'] ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </section>
    </main>

</body>

</html>