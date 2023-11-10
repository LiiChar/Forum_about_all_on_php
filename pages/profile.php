<?php
session_start();
require_once("../database/db_connect.php");
$user = getUserByUsername($db, $_SESSION['user']['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title><?php print($user['username']) ?></title>
</head>

<body>
    <?php require_once("../components/header.php") ?>
    <section class="profile_wrapper">
        <div class="profile">
            <div class="profile_info">
                <img class="profile_info_image" src="../assets/user.png" alt="user image" />
                <div class="profile_info_about">
                    <div class="profile_info_about_username">Username: <?php print($user['username']) ?></div>
                    <div class="profile_info_about_fullname">Name: <?php print($user['firstname'] . " " . $user['lastname']) ?></div>
                    Bio:<div class="profile_info_about_bio"> <?php print($user['bio']) ?></div>
                </div>
            </div>
            <div class="profile_action">
                <form class="profile_action_exit" action="../action/exit.php">
                    <button>Выйти из аккаунта</button>
                </form>
                <form class="profile_action_delete" action="../action/deleteUser.php" method="post">
                    <input type="hidden" value="<?php print($user['id']) ?>" name="user_id" id="">
                    <button>Удалить аккаунт</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>