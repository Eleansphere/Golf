<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Sport Management</title>
    <link rel="stylesheet" href="styles7.css">
</head>


<body>
    <?php include("parts/slidepanel.php") ?>
    <?php include("parts/menu.php") ?>
    <?php include("parts/articlesAbout.php") ?>
    <?php include("parts/services.php") ?>
    <?php include("parts/galleryPanel.php") ?>
    <?php include("parts/clients.php") ?>
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
        el.scrollLeft += 200;
    }
    function moveRowLeft() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft -= 200;
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