<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit repellendus molestias officiis accusantium ad laborum ex temporibus, nostrum sequi nisi delectus, culpa expedita harum eligendi accusamus provident, voluptate quod minus. Corrupti dolorem corporis quia in nobis. Dolorum odit eos voluptates nobis ipsam quisquam quo aspernatur debitis voluptatem repellat. Atque quisquam unde, nostrum, harum aperiam, consequuntur doloremque quis amet nam assumenda maiores facere ipsum culpa.'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Maria verdi',
            'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto libero voluptates dolorem? Provident nostrum corporis, impedit ab cumque pariatur iure. Exercitationem laborum quibusdam error libero ipsam sequi voluptatem earum soluta unde distinctio reprehenderit cumque iusto, tempora iste, qui itaque, fugiat voluptate doloremque nam rem iure?'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Larisa Marra',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia corrupti, ea et id facilis accusamus velit. Totam, autem molestias, nemo eos illum ipsam porro excepturi iste fugit nihil neque eveniet repellat eius a qui ex culpa blanditiis, vero nostrum dolore in tempora corporis sequi eum! Ullam, vitae quas beatae doloremque recusandae corrupti aspernatur ducimus facere repudiandae numquam fuga voluptatibus dolores, aperiam reiciendis illo explicabo eum et blanditiis! Vero facere porro eaque. Nisi voluptas nulla dolorem!'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Pinocchio Durry',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ullam dolor quaerat molestias asperiores rem, debitis nostrum enim. Blanditiis quo tempore ullam aspernatur, velit debitis repudiandae eum reiciendis! Vitae repellendus ratione excepturi nihil, error vero esse.'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Bob Clarck',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum quasi odio rem reprehenderit obcaecati perspiciatis, eveniet aspernatur voluptatum voluptates accusamus commodi, saepe nulla repellat?'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Babbo Natale',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore earum excepturi est saepe commodi cumque libero veritatis eligendi maxime? Animi suscipit minima, enim cupiditate quisquam ipsam sapiente blanditiis provident voluptatem!'
        ]
    ],
];

?>

<?php
$style = '.';
$title = 'Snack 3';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

<main>
    <section>
        <div class="container p-0">
            <?php foreach ($posts as $k => $v) : ?>
                <div class="mb-5 shadow rounded border">
                    <h3 class="px-4 pt-2 d-flex">Data degli post <span class="ml-auto"><?php echo $k; ?></span></h3>
                    <ul class="list-group p-2">
                        <?php foreach ($v as $v2) : ?>
                            <li class="list-group-item">
                                <h5><?php echo $v2['title']; ?></h5>
                                <h4 class="text-center"><?php echo $v2['author']; ?></h4>
                                <p><?php echo $v2['text']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include '../assets/components/footer.php' ?>