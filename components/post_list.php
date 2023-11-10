<section class="post_list">
    <div class="add_post_link_wrapper">
        <a class="add_post_link" href="../action/addPost.php">Добавить запись</a>
    </div>

    <?php
    foreach ($post as $key => $post) {
        // запрос на полученте комментариев по индетификатору поста 
        $comment = getCommentsByPostId($db, $post["id"]);

        //получение автора поста
        $user = getUserById($db, $post["user_id"]);
        // визуализация поста
        require_once("../components/post.php");
    }
    ?>
</section>