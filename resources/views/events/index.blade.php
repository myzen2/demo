<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Démo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Évènements</h1>

    <?php dump($events); ?>

    <ul>
        <?php foreach($events as $event) : ?>
            <li><?= $event ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
