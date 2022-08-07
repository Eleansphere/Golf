<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Sport Management</title>
    <link rel="stylesheet" href="styles20.css" media="all">
    <link rel="stylesheet" href="language/language.css">
    <link rel="alternate" href="index-en.php" hreflang="en">
    <link rel="alternate" href="index.php" hreflang="cs">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script 
        id="language_script"
        data-debug="0" 
        src="language/language.js">
    </script>
    <script>
        $().ready(function () {
 
 $("#form-kontakt").validate({
     rules: {
         jmeno: "required",
         odesilatel: "required",
         jmeno: {
             required: true,
             minlength: 3
         },
         odesilatel: {
             required: true,
             minlength: 5
         },
         text: {
             required: true,
             minlength: 10
         }
     },
     // zprávy
     messages: {
         jmeno: " Please, enter your full name.",
         odesilatel: "Please, enter valid email address.",
         jmeno: {
             required: " Please, enter your full name.",
             minlength: " Your name must obtain at least three characters."
         },
         text: {
             required: " Please, enter your message.",
             minlength: " Your message must obtain at least ten characters."
         }
     }
 });
});
    </script>
</head>


<body>
    <?php include("parts/en/slidepanel-en.php") ?>
    <?php include("parts/en/menu-en.php") ?>
    <?php include("parts/en/articlesAbout-en.php") ?>
    <?php include("parts/en/servicesSlideshow-en.php") ?>
    <?php include("parts/galleryPanel.php") ?>
    <?php include("parts/en/clients-en.php") ?>
    <?php include("parts/en/oldClients-en.php") ?>
    <?php include("parts/en/investice-en.php") ?>
    <?php include("parts/contact.php") ?>
    
    <footer>
        Created by:  <p classs="footer-strong-text">Jakub Šťastný and Vojtěch Franek</p> &copy;2022
        <button class="footer-scroll-btn"><img src="pictures/back_to_top.svg" alt=""></button>
        <!-- vyrobím nějakou ikonu, text je jen dočasný --> 
    </footer>
</body>

<script>

    //*********************** Refresh on top************************************
    //history.scrollRestoration = 'manual';
    //***********************Galerie slide**************************************
    function moveRowRight() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft += 500;
    }
    function moveRowLeft() {
        var el = document.getElementById("gallery-panel");
        el.scrollLeft -= 500;
    }
 //***********************Staří klienti slide**************************************

 function moveRowRightOldClients() {
        var el = document.getElementById("old-client-slide");
        el.scrollLeft += 500;
    }
    function moveRowLeftOldClients() {
        var el = document.getElementById("old-client-slide");
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

    //******************************Hide nav*******************************************

    let pozicePredScroll = window.pageYOffset;
        window.onscroll = function() {
    let poziceTedScroll = window.pageYOffset;
        if (pozicePredScroll > poziceTedScroll) {
            document.getElementById("nav-hide").style.top = "0";
            document.getElementById("nav-hide").style.transition = "all 0.5s ease-in-out";
        } else {
            document.getElementById("nav-hide").style.top = "-120px";
            document.getElementById("nav-hide").style.transition = "all 0.5s ease-in-out";
        }
    pozicePredScroll = poziceTedScroll;
} 

//***********************************Show clients******************************************


const sliders = document.querySelectorAll(".slide-in");

const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -150px 0px"
};

const appearOnScroll = new IntersectionObserver(function(
  entries,
  appearOnScroll
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
    }
  });
},
appearOptions);

sliders.forEach(slider => {
  appearOnScroll.observe(slider);
});


</script>
</html>