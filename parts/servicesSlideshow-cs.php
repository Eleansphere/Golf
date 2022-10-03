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
    <div class="services-slideshow-slide-conten all-flex-center" id="articleSlide">
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
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(3)" class="services-slideshow-dots-dot" id="slideDot3">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(4)" class="services-slideshow-dots-dot" id="slideDot4">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(5)" class="services-slideshow-dots-dot" id="slideDot5">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(6)" class="services-slideshow-dots-dot" id="slideDot6">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(7)" class="services-slideshow-dots-dot" id="slideDot7">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(8)" class="services-slideshow-dots-dot" id="slideDot8">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(9)" class="services-slideshow-dots-dot" id="slideDot9">

        </div>
    </div>
    <div class="all-flex-center">
        <div onclick="switchSlideArticle(10)" class="services-slideshow-dots-dot" id="slideDot10">

        </div>
    </div>
</div>

<script>
const article1 = {
    title: "KARIÉRNÍ PLÁNOVÁNÍ",
    text: "Pomůžeme Vám najít optimální cestu k dosažení Vašeho profesionálního sportovního cíle. Pomůžeme Vám stanovit průběžné cíle, sledovat je, vyhodnocovat a přizpůsobovat jim cestu k dosažení cíle."
}
const article2 = {
    title: "PLÁNOVÁNÍ A ORGANIZAČNÍ ZAJIŠTĚNÍ TRÉNINKOVÉ PŘÍPRAVY",
    text: "Naplánujeme a zorganizujeme Vaši tréninkovou přípravu se zaměřením na dosažení Vašeho cíle. Vyjednáme Vám nejlepší podmínky pro Váš trénink, abyste se mohli plně soustředit na kvalitní přípravu."
}
const article3 = {
    title: "ORGANIZAČNÍ ZAJIŠTĚNÍ ÚČASTI NA TURNAJÍCH",
    text: "Kompletně organizačně zajistíme Vaši účast na turnajích a Vy se můžete soustředit na podání toho nejlepšího sportovního výkonu."
}
const article4 ={
    title:"PORADENSTVÍ V OBLASTI SPORTOVNÍ VÝŽIVY A DOPLŇKŮ",
    text:"Pomůžeme Vám se sestavením optimálního programu výživy, který podpoří Váš špičkový výkon. Doporučíme Vám doplňky stravy pro optimalizaci Vašeho výkonu."
}
const article5 ={
    title:"ZAJIŠTĚNÍ SPECIALISTŮ A SLUŽEB Z OBLASTI SPORTOVNÍ PSYCHOLOGIE",
    text:"Zajistíme Vám kvalitní specialisty z oboru sportovní psychologie a mentální přípravy, kteří Vám pomohou maximálně využít Váš talentový potenciál a dosáhnout nejlepšího výkonu."
}
const article6 ={
    title:"PORADENSTVÍ V OBLASTI SPORTOVNÍHO VYBAVENÍ",
    text:"Poradíme, s jakým konkrétním sportovním výbavením dosáhnete nejlepšího výkonu."
}
const article7 ={
    title:"ZAJIŠTĚNÍ ODBORNÝCH ZDRAVOTNÍCH SLUŽEB",
    text:"Ve spolupráci s našimi spolupracujícími zařízeními Vám zajistíme nejlepší zdravotní a rehabilitační péči, při řešení jakéhokoliv zdravotního problému."
}
const article8 ={
    title:"MEDIÁLNÍ PREZENTACE A PR",
    text:"Vytváříme prostředí, pro co nejlepší prezentaci samotného sportovce, sestavujeme marketingové strategie, které pomáhají vytvářet zlepšení image sportovce a zvyšují povědomí o jeho činnosti. Motivujeme obchodní partnery a sponzory k přímému sponzoringu a navázání spolupráce s daným sportovcem. Nepřetržitě pracujeme s nástroji mediální propagace k maximální prezentaci sportovce."
}
const article9 ={
    title:"ZPROSTŘEDKOVÁNÍ SPONZORSKÝCH KONTRAKTŮ",
    text:"Pomůžeme Vám s vytvořením projektu, který sponzorovi představí Vaši činnost, Vaše úspěchy a plány do budoucna. Součástí projektu je také návrh protiplnění sponzorům (něco zpět za poskytnutý sponzoring), rádi bychom totiž sponzora udrželi i pro další sezóny, proto se o něj musíme starat a něco mu nabídnout. Sponzor získá mediální a marketingovou propagaci, a další činnosti, které může za svůj sponzoring obdržet."
}
const article10 ={
    title:"ZAJIŠTĚNÍ PRÁVNÍHO SERVISU PRO SPORTOVCE",
    text:"Spolupracující právní kanceláře zaměřené na sportovní právo Vám zajistí poradenství a kontrolu smluv s partnery."
}
const article11 ={
    title:"FINANČNÍ, DAŇOVÉ A INVESTIČNÍ PORADENTSTVÍ",
    text:""
}
    const titles = [article1.title, article2.title, article3.title, article4.title, article5.title, article6.title, article7.title, article8.title, article9.title, article10.title, article11.title,];
    const texts = [article1.text, article2.text, article3.text, article4.text, article5.text, article6.text, article7.text, article8.text, article9.text, article10.text, article11.text,];
    var number = 0;
    moveSlideArticle();

    function moveSlideArticle() {
        let slideDot = "slideDot" + number;
        document.getElementById("articleSlideTitle").innerHTML = titles[number];
        document.getElementById("articleSlideText").innerHTML = texts[number];
        for (let n = 0; n <= 10; n++) {
            let slideDot0 = "slideDot" + n;
            if (number == n) {
                document.getElementById(slideDot0).style.background = "#0f1c4a";
            } else {
                document.getElementById(slideDot0).style.background = "rgb(223, 223, 223)";
            }
        }
        number++;
        if (number == 11) {
            number = 0;
        }
        console.log(number);

        setTimeout(moveSlideArticle, 15000);

    }

    function switchSlideArticle(switchNumber) {
        number = switchNumber;
        document.getElementById("articleSlideTitle").innerHTML = titles[number];
        document.getElementById("articleSlideText").innerHTML = texts[number];
        for (let n = 0; n <= 10; n++) {
            let slideDot0 = "slideDot" + n;
            if (number == n) {
                document.getElementById(slideDot0).style.background = "#0f1c4a";
            } else {
                document.getElementById(slideDot0).style.background = "rgb(223, 223, 223)";
            }
        }
        number++;
        if (number == 11) {
            number = 0;
        }
        console.log(number);
    }
</script>