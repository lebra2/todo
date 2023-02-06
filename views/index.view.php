<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once('partials/head.php'); ?>
    <ul style="display: flex; flex-direction: column; list-style: none;">
        <?php foreach ( $tasks as $task ): ?>
            <li>

                <?php if ( $task->is_completed ): ?>
                    <strike>
                <?php endif; ?>

                <?= $task->description; ?>

                <?php if ( $task->is_completed ): ?>
                    </strike>
                <?php endif; ?>

            </li>
        <?php endforeach; ?>
    </ul>
    <H1>Submit task</H1>
    <form action="/task" method="POST">
        <input type="text" name="task">
        <input type="text" name="description">
        <input type="submit" value="Submit">
    </form>
    <?php require_once('partials/footer.php'); ?>
</body>
</html>