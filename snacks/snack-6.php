<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <section>
            <div class="container text-center p-4">
                <h1>Snack 6</h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container d-flex justify-content-center">
                <?php foreach ($db as $k => $v) : ?>
                    <div class="w-25 p-3 shadow mx-2">
                        <h3><?php echo $k; ?></h3>

                        <ul class="list-group">
                            <?php for ($i = 0; $i < count($v); $i++) : ?>
                                <li class="list-group-item list-group-item-action">
                                    <?php echo "{$v[$i]['name']} {$v[$i]['lastname']}" ?>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>

</html>