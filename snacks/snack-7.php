<?php

$alunni = [
    [
        'nome' => 'Valeria',
        'cognome' => 'Rossi',
        'voti' => [5, 7, 6.5, 7.5, 5.5, 3]
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Blu',
        'voti' => [7, 8, 6.5, 7.5, 4, 5]
    ],
    [
        'nome' => 'Roxy',
        'cognome' => 'Tabi',
        'voti' => [6.5, 4, 8.5, 7, 7.5]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Verdi',
        'voti' => [8, 9, 9.5, 6, 7.5, 8.5]
    ]
];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 7</title>
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
                <h1>Snack 7</h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container p-4 shadow rounded">
                <table class="w-100">
                    <thead>
                        <tr class="border-bottom">
                            <th class="border-right">Nome alunno</th>
                            <th class="border-right">Voti</th>
                            <th>Media Voto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alunni as $k => $v) {
                            $media = 0;
                        ?>
                            <tr class="border-bottom">
                                <td class="border-right"><?php echo "{$v['nome']} {$v['cognome']}" ?></td>
                                <td class="border-right">
                                    <?php for ($i = 0; $i < count($v['voti']); $i++) {
                                        $media += $v['voti'][$i] / count($v['voti']);
                                    ?>
                                        <span class="px-2 py-1 mr-1 d-inline-block">
                                            <?php echo $v['voti'][$i]; ?>
                                        </span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php echo (int)$media; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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