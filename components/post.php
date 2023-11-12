<div class="post">
    <div class="icon_user"><!-- <img class="icon" src="../assets/user.png" alt="user icon"> --></div>
    <div class="post_info">
        <div>
            <a href="../pages/profile.php?username=<?php print($user["username"]) ?>" class="post_author_name"><?php print_r($user["username"])  ?></a>
            <span class="post_date"><?php print(date_parse($post["updated_at"])["hour"] . ":" . date_parse($post["updated_at"])["minute"]) ?></span>
        </div>
        <a href="../pages/post.php?post_id=<?php print($post["id"]) ?>" class="post_heading"><?php print_r($post["heading"] . '<br>') ?></a>
        <div class="post_body"><?php print_r($post["body"] . '<br>') ?></div>
        <!-- <div>
            <span>
                <a class="post_like" style="<?php getLikeByTypePostId($db, $_SESSION['user']["username"], $post["id"], 'posts') ? print("color: red") : print("inherit") ?>" href=<?php print("../action/addLikes.php?type=posts&id=" . $post["id"]) ?>>&#10084 </a>
                <?php print(getCountLikesByTypePostId($db, $post["id"], 'posts')) ?></span>
        </div> -->
    </div>
</div>