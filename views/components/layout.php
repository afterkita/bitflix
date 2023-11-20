<?php
?>
<html lang="en">
<head>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/head.php';
    ?>
</head>
<body class="body">
<div class="wrapper">
    <header class="slidebar">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/slidebar_menu.php';
        ?>
    </header>
    <header class="toolbar">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/toolbar_menu.php'
        ?>
    </header>
    <header class="content">

        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/smal_cards_area.php';
        ?>
    </header>

</div>
</body>
</html>
