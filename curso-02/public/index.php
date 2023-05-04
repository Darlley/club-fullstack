<?php require "../bootstrap.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DevClass</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl m-auto py-10">
        <?php try {
            require load();
        }catch(Exception $errors) {
            echo $errors->getMessage();
        } ?>
    </div>
</body>
</html>