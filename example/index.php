<title><?= $title = "Paginator Happy and @CoffeeCode"; ?></title>
<?php

require __DIR__ . "/../vendor/autoload.php";

$page = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
$pager = new \MelquesPaiva\Paginator\Paginator("/teste/");
$pager->pager(100, 10, $page, 3, null, ["code" => 1, 'testando' => 5]);

?>
<link rel="stylesheet" href="style.css"/>

<div class="container">
    <h1><?= $title; ?></h1>
    <p>Paginator is simple and is ready to generate results navigation in your application.</p>
    <pre>SELECT * table LIMIT <?= $pager->limit(); ?> OFFSET <?= $pager->offset(); ?>;</pre>

    <?= $pager->render(null, false); ?>
</div>


