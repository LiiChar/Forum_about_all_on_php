<nav class="header">
    <a href="../forum/index.php">IГуру</a>
    <form action="../action/addSearchParam.php" method="get" class="header_search">
        <input name="search" placeholder="Найдите запись" class="header_search_input" type="text">
        <button type="submit" class="header_search_button">Найти</button>
    </form>
    <a href="../pages/profile.php" style="justify-self: center; "><?php array_key_exists("user", $_SESSION) ? print($_SESSION['user']['username']) : ""; ?></a>
</nav>