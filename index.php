<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLASHNEWS</title>
    <link rel="stylesheet" href="styles4.css">
</head>


<body>
    <?php include("parts/slidepanel.php") ?>
    <?php include("parts/menu.php") ?>
    <?php include("parts/articlesAbout.php") ?>
    <?php include("parts/services.php") ?>
    <?php include("parts/galleryPanel.php") ?>
    <?php include("parts/clients.php") ?>

    <div class="part-title">
        <div class="left-flex-center">
            INVESTICE
        </div>
        <div class="left-flex-center">
            <div class="part-ttile-line">

            </div>
        </div>
    </div>
    <?php include("parts/investice.php") ?>

    <?php include("parts/contact.php") ?>
    <footer>
        Vytvořil <p classs="footer-strong-text">Jakub Šťastný a Vojtěch Franek</p> &copy;2022
    </footer>
</body>
<script>
    function moveRowRight() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft += 500;
    }
    function moveRowLeft() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft -= 500;
    }
</script>

</html>