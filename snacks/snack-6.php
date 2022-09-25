<?php

$db = [
    'Insegnanti' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ],
        [
            'name' => 'Paolo',
            'lastname' => 'Rossi'
        ]
    ],
    'PM' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ],
        [
            'name' => 'Veronica',
            'lastname' => 'Luna'
        ],
        [
            'name' => 'Marco',
            'lastname' => 'Verdi'
        ]
    ]
];

?>

<?php
$style = '.';
$title = 'Snack 6';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

<main>
    <section>
        <div class="container p-0">
            <?php foreach ($db as $k => $v) : ?>
                <div class="p-3 shadow rounded border mb-3">
                    <h3><?php echo $k; ?></h3>

                    <ul class="list-group">
                        <?php foreach ($v as $v2) : ?>
                            <li class="list-group-item list-group-item-action">
                                <?php echo "{$v2['name']} {$v2['lastname']}" ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include '../assets/components/footer.php' ?>