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
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class="bg-light d-flex flex-column h-min-100vh">

    <header>
        <section>
            <div class="container text-center p-4 position-relative">
                <div class="position-absolute">
                    <a class="btn btn-info" href="../index.php">← menu snacks</a>
                </div>
                <h1>Snack 6</h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container p-0">
                <?php foreach ($db as $k => $v) : ?>
                    <div class="p-4 shadow rounded mx-2 mb-3">
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

    <footer class="mt-auto">
        <section>
            <div class="container bg-dark text-white p-3 text-center">
                <p class="m-0"><span class="text-danger">♥</span> grazie per la visione del sito <strong>snack PHP</strong> ___ by. <strong>Boolean</strong> <span class="text-danger">♥</span></p>
            </div>
        </section>
    </footer>

</body>

</html>