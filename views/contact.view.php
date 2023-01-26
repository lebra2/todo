<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: beige;">
    <?php require_once('partials/nav.php'); ?>
    <h1>Contact</h1>
    <div style="display: flex; gap: 20px; justify-content: center;">
    <?php foreach ( $contacts as $contact ): ?>
        <div style="padding: 6px;">
                <p style="margin: 0;"><?= $contact->nimi; ?></p>
                <p style="margin: 0;"><?= $contact->email; ?></p>
                <p style="margin: 0;"><?= $contact->number; ?></p>
        </div>

            <?php endforeach; ?>
    </div>
</body>
</html>