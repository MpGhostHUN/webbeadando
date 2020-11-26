<?php session_start(); ?>
<?php if (file_exists('./felhaszn/' . $oldal_keres['file'] . '.php')) {
    include("./felhaszn/{$oldal_keres['file']}.php");} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ablakcim['cim'] ?></title>
    <link rel="stylesheet" href="megjelenes.css" type="text/css">
</head>

<body>
    <header>
        <img src="kepek/<?= $fejlec['kepekforrasa'] ?>" alt="">
        <h1><?= $cim ?></h1>
    </header>
    <div id="belep">
        <?php if (isset($_SESSION['login'])) { ?>Bejelentkezett: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")"?></strong><?php } ?>
    </div>
    <div id="tartalom">
    <nav>
        <ul id="menu">
            <?php foreach ($sites as $url => $oldal) { ?>
                <?php if (!isset($_SESSION['login']) && $oldal['menu'][0] || isset($_SESSION['login']) && $oldal['menu'][1]) { ?>
                    <li class="aktiv" <?= (($oldal == $oldal_keres) ? '' : '') ?>>
                        <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>"><?= $oldal['szoveg'] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </nav>
        <?php include("{$oldal_keres['file']}.php") ?>
    </div>
</body>

</html>