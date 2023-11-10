<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Forum</title>
</head>

<body>
    <?php
    require_once("../components/header.php");

    ?>

    <main>

        <?php
        $search = null;
        if (array_key_exists("search", $_GET)) {
            $search = $_GET["search"];
        }
        $post = getPosts($db, $search);
        //проверка на получение постов
        require_once("../components/post_list.php");
        ?>
        </div>
    </main>
    <?php
    ?>
</body>

</html>