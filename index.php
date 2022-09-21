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

<!doctype html>
<html lang="en">

<head>
  <title>Menu for Snacks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="bg-light d-flex flex-column h-min-100vh">

  <header>
    <section>
      <div class="container text-center p-4">
        <h1>Snacks</h1>
      </div>
    </section>
  </header>

  <main class="mb-5">
    <section>
      <?php foreach ($snacks as $key => $value) : ?>
        <div class="container shadow mb-4 rounded p-0">
          <a href="./snacks/snack-<?= $value['link']; ?>.php" class="text-decoration-none p-3 d-block">
            <h3><?= $value['title']; ?></h3>
            <p><?= $value['description']; ?></p>
          </a>
        </div>
      <?php endforeach; ?>
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