<?php
session_start();
$get = $_SESSION['letters'];
?>
<footer>
    <div class="footer">
        <div><?
            echo 'Разница в днях = ' . diffDays();
            echo "<br>";
            echo 'Количество слов = ' . words($get);
            echo "<br>";
            echo 'Количество гласных = '  . letters($get);
            ?>
        </div>
        <div><? echo $_SESSION['auth']?></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="contact">
            <a href="https://github.com/7binker4"><img src="images/GitHub-logo.png" width="80px" alt="GitHub"></a>
            <a href="https://vk.com/idbunker074"><img src="images/vk-logo.png" width="50px" alt="VK"></a>
            <a href="https://github.com/7binker4"><img src="images/instagram-logo.png" width="60px" alt="Instagram"></a>
            <a href="https://t.me/bunker4"><img src="images/telegram-logo.png" width="50px" alt="Telegram"></a>
        </div>
    </div>
</footer>
</body>
</html>