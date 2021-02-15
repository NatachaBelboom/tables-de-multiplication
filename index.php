<?php
    require('validation.php');
    $nbvaleurs = 0;
    $nbtables = 0;
    $errors = [];


    if (isset($_GET['nbvaleurs'], $_GET['nbtables'])) {
        $old = $_GET;
        $data = validated();

    }
?>
<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="utf-8">
    <title>Les tables de multiplication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Les tables de multiplication</h1>
    <section>
        <h2>Indiquez quelles tables vous souhaitez</h2>
        <form action="index.php" method="get">
            <div class="form-group">
                <label class="control-label" for="nbtables">Nombre de tables : </label>
                <input class="form-control" id="nbtables" type="text" name="nbtables"
                       value="<?= $nbtables ?>">
            </div>
            <div class="form-group">
                <label class="control-label" for="nbvaleurs">Nombre de valeurs : </label>
                <input class="form-control" id="nbvaleurs" type="text" name="nbvaleurs"
                       value="<?= $nbvaleurs ?>">
            </div>
            <input type="submit">
        </form>
    </section>

    <section>
        <h2>Voici vos tables</h2>
        <table class="table table-striped table-bordered">
            <caption>Les <?= $nbvaleurs ?> premières valeurs des <?= $nbtables ?> premières tables</caption>
            <tr>
                <th class="vide">&nbsp;</th>
                <?php for($cell=1; $cell<=$nbtables; $cell++): ?>
                    <th scope="col"><?= $cell ?></th>
                <?php endfor ?>
            </tr>

            <?php for($row=1; $row<=$nbvaleurs; $row++):?>
                <tr>
                    <th scope="row"><?= $row ?></th>
                    <?php for($cell=1; $cell<=$nbtables; $cell++): ?>
                        <td><?= $row ?> * <?= $cell ?> = <?= $row*$cell ?></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
            <!--<tr>
                <th scope="row">1</th>
                <td>1 * 1 = 1</td>
                <td>1 * 2 = 2</td>
                <td>1 * 3 = 3</td>
                <td>1 * 4 = 4</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>2 * 1 = 2</td>
                <td>2 * 2 = 4</td>
                <td>2 * 3 = 6</td>
                <td>2 * 4 = 8</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>3 * 1 = 3</td>
                <td>3 * 2 = 6</td>
                <td>3 * 3 = 9</td>
                <td>3 * 4 = 12</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>4 * 1 = 4</td>
                <td>4 * 2 = 8</td>
                <td>4 * 3 = 12</td>
                <td>4 * 4 = 16</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>5 * 1 = 5</td>
                <td>5 * 2 = 10</td>
                <td>5 * 3 = 15</td>
                <td>5 * 4 = 20</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>6 * 1 = 6</td>
                <td>6 * 2 = 12</td>
                <td>6 * 3 = 18</td>
                <td>6 * 4 = 24</td>
            </tr>-->
        </table>
    </section>
</main>
</body>
</html>