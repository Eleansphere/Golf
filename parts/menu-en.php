<div class="menu" id="nav-hide">
    <div class="all-flex-center">
        <div class="menu-item">
            <div class="all-flex-center">
                <a href="#services" style="text-decoration:none; color:black;">SERVICES</a>
            </div>
            <div class="all-flex-center">
                <div class="menu-item-line">

                </div>
            </div>
        </div>
    </div>
    <div class="all-flex-center">
        <div class="menu-item">
            <div class="all-flex-center">
            <a href="#clients" style="text-decoration:none; color:black;">CLIENTS</a>
            </div>
            <div class="all-flex-center">
                <div class="menu-item-line">

                </div>
            </div>
        </div>
    </div>
    <div class="all-flex-center">
        <img class="menu-item-logo" src="pictures/filip_sport2.svg">
    </div>
    <div class="all-flex-center">
        <div class="menu-item">
            <div class="all-flex-center">
            <a href="#spoluprace" style="text-decoration:none; color:black;">COLLABORATION</a>
            </div>
            <div class="all-flex-center">
                <div class="menu-item-line">

                </div>
            </div>
        </div>
    </div>
    <div class="all-flex-center">
        <div class="menu-item">
            <div class="all-flex-center">
            <a href="#kontakt" style="text-decoration:none; color:black;">CONTACTS</a>
            </div>
            <div class="all-flex-center">
                <div class="menu-item-line">

                </div>
            </div>
        </div>
    </div>
    <div class="all-flex-center">
        <div class="menu-item">
            <div class="all-flex-center">
            <language class="languageFrameClick" data-type="flag">
	        </language>
            </div>
        </div>
    </div>
</div>
<div class="mobile-menu" id="nav-hide">
    <div class="left-flex-center">
        <img class="menu-item-logo" src="pictures/filip_sport2.svg">
    </div>
    <div class="all-flex-center">

        <div onclick="mobileMenu()" class="mobile-menu-btn all-flex-center">
            <svg class="mobile-menu-btn-ico" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
    </div>

    <div class="mobile-menu-items" id="mobileMenu">
        <div class="all-flex-center">
            <div class="menu-item">
                <div class="all-flex-center">
                <a href="#services" style="text-decoration:none; color:black;">SERVICES</a>
                </div>
                <div class="all-flex-center">
                    <div class="menu-item-line">

                    </div>
                </div>
            </div>
        </div>
        <div class="all-flex-center">
            <div class="menu-item">
                <div class="all-flex-center">
                <a href="#clients" style="text-decoration:none; color:black;">CLIENTS</a>
                </div>
                <div class="all-flex-center">
                    <div class="menu-item-line">

                    </div>
                </div>
            </div>
        </div>
        <div class="all-flex-center">
            <div class="menu-item">
                <div class="all-flex-center">
                <a href="#spoluprace" style="text-decoration:none; color:black;">COLLABORATION</a>
                </div>
                <div class="all-flex-center">
                    <div class="menu-item-line">

                    </div>
                </div>
            </div>
        </div>
        <div class="all-flex-center">
            <div class="menu-item">
                <div class="all-flex-center">
                <a href="#kontakt" style="text-decoration:none; color:black;">CONTACTS</a>
                </div>
                <div class="all-flex-center">
                    <div class="menu-item-line">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        function mobileMenu() {
        var menu = document.getElementById("mobileMenu");

        if (menu.style.display == "grid") {
            menu.style.display = "none";
        } else {
            menu.style.display = "grid";
        }
    }

</script>