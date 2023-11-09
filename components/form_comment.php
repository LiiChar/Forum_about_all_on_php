<div>
    <?php // форма для добавления комментария
    ?>
    <form action="../action/addComment.php" method="post">
        <input type="hidden" value='<?php print($post["id"]) ?>' require name='post_id'>
        <input type="text" name='body'>
        <button type="submit">Написать</button>
    </form>
</div>