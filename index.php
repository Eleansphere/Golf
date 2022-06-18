<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLASHNEWS</title>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    <?php include("parts/slidepanel.php") ?>
    <?php include("parts/menu.php") ?>
    <?php include("parts/articlesAbout.php") ?>
    <div class="part-title">
        <div class="left-flex-center">
            SLUŽBY
        </div>
        <div class="left-flex-center">
            <div class="part-ttile-line">

            </div>
        </div>
    </div>
    <?php include("parts/services.php") ?>
    <?php include("parts/galleryPanel.php") ?>

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