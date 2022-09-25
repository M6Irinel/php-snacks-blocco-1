<?php

$numbers = [];

while (count($numbers) <= 15) {
    $n = rand(1, 99);
    if (!in_array($n, $numbers))
        $numbers[] = $n;
}

?>

<?php
$style = '.';
$title = 'Snack 4';
$tabTitle = $title;
$btn = true;
include '../assets/components/header.php';
?>

<main>
    <section>
        <div class="container p-4 shadow rounded border text-center">
            <h3 class="mb-4">15 numeri random</h3>
            <div class="d-flex flex-wrap justify-content-center" style="gap: 5px;">
                <?php foreach ($numbers as $v) : ?>
                    <?php if ($v % 2 == 0) : ?>
                        <span class="bg-primary p-2 ml-1 text-center font-weight-bold text-white" title="PARI">
                            <?php echo $v; ?>
                        </span>
                    <?php else : ?>
                        <span class="bg-danger p-2 ml-1 text-center font-weight-bold text-white" title="DISPARI">
                            <?php echo $v; ?>
                        </span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include '../assets/components/footer.php' ?>