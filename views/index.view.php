<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="about/culture">About Culture</a></li>
        </ul>
    </nav>
    <ul>
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
</body>
</html>