<div class="part-title" id="services">
    <div class="left-flex-center">
        SERVICES
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
        title: "CAREER PLANNING",
        text: "We will help you find the best way to achieve your professional sporting goals. We will help you set the targets, track them, evaluate and adapt them to achieve the objective."
    }
    const article2 = {
        title: "PLANNING AND ORGANIZATION OF TRAININGS",
        text: "We will plan and organize your trainings focused on achieving your goals. We will negotiate the best conditions for your training so that you can fully concentrate on quality training."
    }
    const article3 = {
        title: "ORGANIZATION OF THE PARTICIPATION IN TOURNAMENTS",
        text: "We will organize completely your participation in tournaments so that you can concentrate on bringing the best sports performance."
    }
    const article4 ={
        title:"CONSULTANCY IN THE FIELD OF SPORTS NUTRITION AND SUPPLEMENTS",
        text:"We will help you with establishing optimal nutrition system to maintain your peak performance. We will recommend supplements for maximum support of your performance."
    }
    const article5 ={
        title:"ARRANGING SPECIALISTS AND SERVICES IN THE FIELD OF SPORTS PSYCHOLOGY",
        text:"We will provide quality specialists in the field of sports psychology and mental training who will help you maximize your talent and potential to achieve the best performance."
    }
    const article6 ={
        title:"CONSULTANCY IN THE FIELD OF SPORTS EQUIPMENT",
        text:"We will advise you specific sports equipment to help you to the best performance."
    }
    const article7 ={
        title:"ARRANGING PROFESSIONAL HEALTH SERVICES",
        text:"Together with our cooperating partners we will provide the best medical and rehabilitative care when dealing with any health problem."
    }
    const article8 ={
        title:"MEDIA PRESENTATION AND PR",
        text:"We create an environment for the best presentation of the sportsman. We use marketing strategies that help create improvement of the image of sportsman and raise awareness about his activities. We motivate business partners and sponsors to direct sponsorship and cooperation with the sportsman. Continually we are working with media publicity tools for maximum presentation of the sportsman."
    }
    const article9 ={
        title:"ARRANGING SPONSORSHIP CONTRACTS",
        text:"We will help you create a project that introduces your work, your accomplishments and future plans to sponsors. The project will also include proposal to sponsors (something back for provided sponsorship). We would like to keep the sponsor for next seasons, so we have to take care of him and offer him something. The sponsor will obtain media and marketing promotions and other activities that he may receive for his sponsorship."
    }
    const article10 ={
        title:"ARRANGING LEGAL SERVICES FOR SPORTSMAN",
        text:"Cooperating law firms focused on sports law will provide advice and check contracts with partners."
    }
    const article11 ={
        title:"FINANCIAL, TAXT AND INVESTMENT CONSULTANCY",
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