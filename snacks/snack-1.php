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

<?php
$style = '.';
$title = 'Snack 1';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

<main>
    <section>
        <div class="container shadow rounded border p-0">
            <ol class="list-group">
                <?php foreach ($partite as $value) : ?>
                    <li class="list-group-item list-group-item-action">
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

<?php include '../assets/components/footer.php' ?>