<?php

function snack($link, $title, $description)
{
  return [
    'link' => $link,
    'title' => $title,
    'description' => $description
  ];
}

$snacks = [
  snack(
    1,
    'Snack 1',
    'Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60'
  ),
  snack(
    2,
    'Snack 2',
    'Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”'
  ),
  snack(
    3,
    'Snack 3',
    'Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z'
  ),
  snack(
    4,
    'Snack 4',
    'Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta'
  ),
  snack(
    5,
    'Snack 5',
    'Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.'
  ),
  snack(
    6,
    'Snack 6',
    'Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.'
  ),
  snack(
    7,
    'Snack 7',
    'Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.'
  )
];

?>

<?php
$tabTitle = 'Menu with snacks';
$style = '';
$title = 'Snacks';
$btn = false;
include './assets/components/header.php'
?>

<main class="mb-5">
  <section>
    <?php foreach ($snacks as $value) : ?>
      <div class="container shadow mb-4 rounded p-0 border">
        <a href="./snacks/snack-<?= $value['link']; ?>.php" class="text-decoration-none p-3 d-block">
          <h3><?= $value['title']; ?></h3>
          <p><?= $value['description']; ?></p>
        </a>
      </div>
    <?php endforeach; ?>
  </section>
</main>

<?php include './assets/components/footer.php' ?>