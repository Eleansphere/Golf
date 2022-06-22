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
        <button class="footer-scroll-btn"><img src="pictures/back_to_top.svg" alt=""></button>
        <!-- vyrobím nějakou ikonu, text je jen dočasný --> 
    </footer>
</body>
<script>
    //***********************Galerie slide**************************************

    function moveRowRight() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft += 500;
    }
    function moveRowLeft() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft -= 500;
    }

    //*************************Tlačítko back to top******************************

    let scrollBtn = document.querySelector(".footer-scroll-btn");
    let rootElement = document.documentElement;

     // point určuje startovní pozici btn (vybrané div co se zobrazí na obrazovce)
    let point = document.querySelector(".video-2-filter");
   
     //funkce => scroll k root elementu (to je <html>)
    scroll = () =>{
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
    
    //kontrola kdy teda začít zobrazovat btn, využívá Intersection Observer
    function navrat(vstupy){
    vstupy.forEach((entry) => {
        if(entry.isIntersecting){
            scrollBtn.classList.add("footer-show-btn");
        }
        else{
            scrollBtn.classList.remove("footer-show-btn");
        }
    });
}

    //samotné spuštění po kliku -> hlídá EventListener
    scrollBtn.addEventListener("click", scroll);
    let observer = new IntersectionObserver(navrat);
    observer.observe(point);

</script>
</html>