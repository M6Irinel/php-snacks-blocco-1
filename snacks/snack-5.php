<?php

$big_text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, eligendi.
Enim quo omnis sapiente. Porro incidunt iste sapiente tempora nulla.
Natus obcaecati sit rerum quas, cum ipsum nemo optio soluta.
Consequatur asperiores exercitationem commodi porro soluta totam corporis sapiente earum.
Hic error soluta corrupti inventore et minus veniam nobis.
Tenetur officiis, perspiciatis culpa similique beatae fugiat, Expedita, atque optio.
Non quod quos laboriosam cupiditate perferendis sapiente officiis consectetur beatae.
Labore sunt nostrum dolores iste temporibus inventore corporis veritatis quas';

$ar_text = explode('.', $big_text);

?>

<?php
$style = '.';
$title = 'Snack 5';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

<main>
    <section>
        <div class="container p-0">
            <ul class="list-group shadow rounded border">
                <?php foreach ($ar_text as $v) : ?>
                    <li class="list-group-item list-group-item-action">
                        <?php echo $v; ?>.
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php include '../assets/components/footer.php' ?>