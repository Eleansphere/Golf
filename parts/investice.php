<div class="part-title" id="kontakt">
        <div class="left-flex-center">
            KONTAKT
        </div>
        <div class="left-flex-center">
            <div class="part-ttile-line">

            </div>
        </div>
    </div>
<div class="video-2-filter">
    <div class="all-flex-center">
        <div class="investice-article all-flex-center">
           <p> Pokud máte jakékoliv dotazy, neváhejte nás kontaktovat. Můžete využít kontaktní formulář nebo telefoní číslo uvedené níže.</p>
        </div>

    </div>
    <div class="all-flex-center">

        <form action="parts/mailto.php" method="post" id="kontakt">
            <input type="text" name="jmeno" placeholder="Jméno" maxlength="255" required>
            <input type="email" name="odesilatel" placeholder="E-mail" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="255" validate>
            <textarea rows="8" name="text" cols="1" placeholder="Zpráva" maxlength="255" required></textarea>
            <button type="submit" name="submit">Odeslat</button>     
        </form>

    </div>


</div>

<video class="video2" playsinline autoplay muted loop>
    <source src="videos/golf2.mp4" type="video/mp4 ">
</video>

