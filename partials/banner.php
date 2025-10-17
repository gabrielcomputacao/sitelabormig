<div id="home" class="banner">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../assets/images/obrabanner1.webp" alt="Imagem 1" />
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/obrabanner2.webp" alt="Imagem 2" />
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/obrabanner3.webp" alt="Imagem 3" />
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/obrabanner4.webp" alt="Imagem 3" />
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/obrabanner5.webp" alt="Imagem 3" />
            </div>
        </div>

        <!-- Botões de navegação -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Paginação -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="banner-text">
        <h2>
            Labormig - A experiência <br />
            que faz a diferença!
        </h2>
        <h5>
            Construa com qualidade<br />
            e segurança.
        </h5>
        <p></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        loop: true,
        speed: 1200,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>