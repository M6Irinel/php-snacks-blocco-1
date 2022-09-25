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

<?php
$style = '.';
$title = 'Snack 7';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

<main>
    <section>
        <div class="container p-4 shadow rounded border">
            <table class="w-100">
                <thead>
                    <tr class="border-bottom">
                        <th class="border-right">Nome alunno</th>
                        <th class="border-right">Voti</th>
                        <th>Media Voto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alunni as $v) {
                        $media = 0;
                    ?>
                        <tr class="border-bottom">
                            <td class="border-right"><?php echo "{$v['nome']} {$v['cognome']}" ?></td>
                            <td class="border-right">
                                <?php foreach ($v['voti'] as $v2) {
                                    $media += $v2 / count($v['voti']);
                                ?>
                                    <span class="px-2 py-1 mr-1 d-inline-block">
                                        <?php echo $v2; ?>
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

<?php include '../assets/components/footer.php' ?>