<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/producten-MSI.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>
    <?php require_once 'header.php'; ?>

    <main>
        <div class="producten">
            <h2>Producten</h2>
            <h3>Voor de serieuze gamer</h3>
            <nav class="categorie-navigatie" aria-label="Productcategorieën">
                <a href="#muizen">Muizen</a>
                <a href="#toetsenborden">Toetsenborden</a>
                <a href="#computers">Computers &amp; laptops</a>
                <a href="#headsets">Headsets</a>
            </nav>

            <section class="productcategorie" id="muizen" aria-labelledby="muizen-titel">
                <h3 id="muizen-titel">Muizen</h3>
                <div class="producten-raster">
                    <article class="productkaart">
                        <img src="img/gaming-muis-rgb.png" alt="Zwarte gamingmuis met RGB-verlichting">
                        <h4>RGB Gamingmuis</h4>
                        <p class="prijs">€39</p>
                        <p class="info">Gamingmuis met kleurrijke RGB-verlichting en een bijbehorende app om de kleuren aan te passen.</p>
                    </article>

                    <article class="productkaart">
                        <img src="img/gaming-headset-groen.png" alt="Witte gamingmuis met RGB-verlichting">
                        <h4>Witte Gamingmuis</h4>
                        <p class="prijs">€29</p>
                        <p class="info">Bedrade witte gamingmuis met RGB-verlichting. Ook is het een stille muis.</p>
                    </article>
                </div>
            </section>

            <section class="productcategorie" id="toetsenborden" aria-labelledby="toetsenborden-titel">
                <h3 id="toetsenborden-titel">Toetsenborden</h3>
                <div class="producten-raster">
                    <article class="productkaart">
                        <img src="img/gaming-toetsenbord-rgb.png" alt="Gamingtoetsenbord met RGB-verlichting">
                        <h4>RGB Gamingtoetsenbord</h4>
                        <p class="prijs">€69</p>
                        <p class="info">Gamingtoetsenbord met RGB-verlichting.</p>
                    </article>

                    <article class="productkaart">
                        <img src="img/gaming-headset-rgb.png" alt="Gamingtoetsenbord met paarse RGB-verlichting">
                        <h4>Paars Gamingtoetsenbord</h4>
                        <p class="prijs">€79</p>
                        <p class="info">Gamingtoetsenbord met paarse RGB-verlichting.</p>
                    </article>
                </div>
            </section>

            <section class="productcategorie" id="computers" aria-labelledby="computers-titel">
                <h3 id="computers-titel">Computers &amp; laptops</h3>
                <div class="producten-raster">
                    <article class="productkaart">
                        <img src="img/laptop-no-bg.png" alt="Gaming laptop">
                        <h4>Gaming Laptop X1</h4>
                        <p class="prijs">€1499</p>
                        <p class="info">Krachtige laptop met de nieuwste GPU voor ultieme gamingprestaties.</p>
                    </article>

                    <article class="productkaart">
                        <img src="img/gaming-muis-wit.png" alt="Gaminglaptop met kleurrijk scherm en verlicht toetsenbord">
                        <h4>RGB Gaminglaptop</h4>
                        <p class="prijs">€1799</p>
                        <p class="info">Gaminglaptop met een kleurrijk scherm en verlicht toetsenbord.</p>
                    </article>

                    <article class="productkaart">
                        <img src="img/pc.png" alt="Custom gaming-pc">
                        <h4>Custom Gaming PC</h4>
                        <p class="prijs">€1989</p>
                        <p class="info">Op maat gemaakte desktop met topkwaliteit componenten voor maximale snelheid.</p>
                    </article>

                    <article class="productkaart">
                        <img src="img/gaming-pc-rgb.png" alt="Gaming-pc met RGB-verlichting">
                        <h4>Levelup Hardware Gaming PC</h4>
                        <p class="prijs">€2500</p>
                        <p class="info">Levelup Hardware gaming-pc met een krachtige videokaart.</p>
                    </article>
                </div>
            </section>

            <section class="productcategorie" id="headsets" aria-labelledby="headsets-titel">
                <h3 id="headsets-titel">Headsets</h3>
                <div class="producten-raster">
                    <article class="productkaart">
                        <img src="img/headset-no-bg.png" alt="Pro gamingheadset">
                        <h4>Pro Gaming Headset</h4>
                        <p class="prijs">€199</p>
                        <p class="info">Comfortabele headset met surround sound voor een meeslepende game-ervaring.</p>
                    </article>

                    <article class="productkaart">
                        <img src="img/gaming-toetsenbord-paars.png" alt="Gamingheadset met rode details en RGB-verlichting">
                        <h4>RGB Gamingheadset</h4>
                        <p class="prijs">€89</p>
                        <p class="info">Gamingheadset met microfoon en rode RGB-verlichting.</p>
                    </article>
                </div>
            </section>

        </div>
    </main>
    <footer>
    </footer>
    </div>
    	<script src="script.js"></script>
</body>

</html>