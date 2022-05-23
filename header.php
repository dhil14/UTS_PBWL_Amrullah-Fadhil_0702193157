<?php
require_once "inc/Koneksi.php";
require_once "index.php";
?>
<div class="banner">
    <!-- Content -->
    <div class="content">
            <h1>WELCOME</h1>
            <h2>TOKO SEPATU</h2>
            <div>
                <button class="button" type="button"><a href="login.php" class="dropdown-link"><span></span></a>Get Started</button>
            </div>
        </div>
    </div>
    </header>

    <!-- Program -->
    <section class="program">
        <h1>Sepatu Best Seller</h1>

        <div class="row1">
            <div class="kotak-1">
                <img src="layouts/assets/img/adidasfluit.jpeg">
                <h3>ADIDAS FLUIT</h3>
            </div>
            <div class="kotak-2">
                <img src="layouts/assets/img/adidasterex.jpeg">
                <h3>ADIDAS TEREX</h3>
            </div>
            <div class="kotak-3">
                <img src="layouts/assets/img/airforce.jpeg">
                <h3>NIKE AIRFORCE</h3>
            </div>
            <div class="kotak-4">
                <img src="layouts/assets/img/nikeairmax.jpeg">
                <h3>NIKE AIRMAX</h3>
            </div>
        </div>

        <div class="row1">
            <div class="kotak-1">
                <img src="layouts/assets/img/nikevapor.jpeg">
                <h3>NIKE VAPOR</h3>
            </div>
            <div class="kotak-2">
                <img src="layouts/assets/img/pumaflyer.jpeg">
                <h3>PUMA FLYER</h3>
            </div>
            <div class="kotak-3">
                <img src="layouts/assets/img/pumazaab.jpEg">
                <h3>PUMA ZAAB</h3>
            </div>
            <div class="kotak-4">
                <img src="layouts/assets/img/vans.jpEg">
                <h3>VANS</h3>
            </div>
        </div>
    </section>


    <?php require_once "footer.php" ?>
</div>
</html>