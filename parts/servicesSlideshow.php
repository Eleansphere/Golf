<div class="part-title" id="services">
    <div class="left-flex-center">
        SLUŽBY
    </div>
    <div class="left-flex-center">
        <div class="part-ttile-line">

        </div>
    </div>
</div>
<div class="services-slideshow">
    <div class="services-slideshow-slide-content" id="articleSlide">
        <div class="article">
            <div class="article-title">
                <div class="all-flex-center">
                    <div class="lines">
                        <div class="all-flex-center">

                            <div class="lines-line">

                            </div>
                        </div>

                        <div class="all-flex-center">

                            <div class="lines-line-long">

                            </div>
                        </div>

                        <div class="all-flex-center">

                            <div class="lines-line">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="left-flex-center article-title-bg" id="articleSlideTitle">

                </div>
            </div>
            <div class="article-text" id="articleSlideText">


            </div>

        </div>
    </div>
</div>
<div class="services-slideshow-dots">
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(0)" class="services-slideshow-dots-dot" id="slideDot0">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(1)" class="services-slideshow-dots-dot" id="slideDot1">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(2)" class="services-slideshow-dots-dot" id="slideDot2">

        </div>
    </div>
</div>

<script>
    const article1 = {
        title: "PLÁNOVÁNÍ A ORGANIZAČNÍ ZAJIŠTĚNÍ",
        text: "Vytváříme prostředí a zázemí, ve kterém může každý sportovec uskutečňovat své sny a dosahovat svých cílů. Nabízíme nadstandartní služby, špičkový servis, individuální přístup, přátelské jednání a diskrétnost. Proto ke každému sportovci přistupujeme individuálně a s ojedinělým řešením, které vede k zajištění maximálního komfortu, vzájemné důvěře a spokojenosti sportovce."
    }
    const article2 = {
        title: "KARIÉRNÍ PLÁNOVÁNÍ",
        text: "Pomůžeme Vám najít optimální cestu k dosažení Vašeho profesionálního sportovního cíle. Pomůžeme Vám stanovovat průběžné cíle, sledovat je, podrobně vyhodnocovat."
    }
    const article3 = {
        title: "ORGANIZAČNÍ ZAJIŠTĚNÍ ÚČASTI NA TURNAJÍCH",
        text: "Kompletně organizačně zajistíme Vaši účast na turnajích a Vy se mohli soustředit na podání toho nejlepšího sportovního výkonu."
    }
    const titles = [article1.title, article2.title, article3.title];
    const texts = [article1.text, article2.text, article3.text];
    var number = 0;
    moveSlideArticle();

    function moveSlideArticle() {
        let slideDot = "slideDot" + number;
        document.getElementById("articleSlideTitle").innerHTML = titles[number];
        document.getElementById("articleSlideText").innerHTML = texts[number];
        for (let n = 0; n < 3; n++) {
            let slideDot0 = "slideDot" + n;
            if (number == n) {
                document.getElementById(slideDot0).style.background = "#0f1c4a";
            } else {
                document.getElementById(slideDot0).style.background = "rgb(223, 223, 223)";
            }
        }
        number++;
        if (number == 3) {
            number = 0;
        }
        setTimeout(moveSlideArticle, 15000);

    }

    function switchSlideArticle(switchNumber) {
        number = switchNumber;
        clearTimeout(moveSlideArticle);
        document.getElementById("articleSlideTitle").innerHTML = titles[number];
        document.getElementById("articleSlideText").innerHTML = texts[number];
        for (let n = 0; n < 3; n++) {
            let slideDot0 = "slideDot" + n;
            if (number == n) {
                document.getElementById(slideDot0).style.background = "#0f1c4a";
            } else {
                document.getElementById(slideDot0).style.background = "rgb(223, 223, 223)";
            }
        }
        number++;
        if (number == 3) {
            number = 0;
        }
    }
</script>