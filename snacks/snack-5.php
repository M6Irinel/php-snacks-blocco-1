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

<!doctype html>
<html lang="en">

<head>
    <title>Snack 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <section>
            <div class="container text-center p-4">
                <h1>Snack 5</h1>
            </div>
        </section>
    </header>

    <main>
        <section>
            <div class="container">
                <ul class="list-group">
                    <?php foreach ($ar_text as $k => $v) : ?>
                        <li class="list-group-item list-group-item-action">
                            <?php echo $v; ?>.
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>

</body>

</html>