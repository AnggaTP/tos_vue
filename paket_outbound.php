<!DOCTYPE html>
<html>
<head>
    <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harga Paket Outbound di TOS ADVENTURE Pacet Mojokerto Jawa Timur </title>
    <meta name="description" content="Dapatkan informasi berbagai paket OUTBOUND kami. Rasakan serunya kegiatan OUTBOUND dan nikmati keindahan alam di kaki gunung Welirang Pacet Mojokerto." />
    <meta name="keywords" content="rafting, outbound, rafting pacet, rafting mojokerto, rafting jawa timur, outbound pacet, outbound mojokerto, outbound jawa timur, rafting terdekat, outbound terdekat, wisata pacet, wisata mojokerto, wisata jawa timur"/>
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="language" content="indonesia">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="shortcut icon" type="image/png" href="img/new_tos.png"/>
    
</head>
<body>
    <!-- header -->
    <?php include "header.php" ?>
    <!-- end header -->

    <!-- title halaman -->
    <section id="title-halaman">
        <div class="container">
            <h1>Detail Harga dan Paket Outbound</h1>
        </div>
    </section>
    <!-- end title halaman -->


    <!-- Product -->
    <section id="product">
        <h1>
            Semua Produk & Paket Outbound
        </h1>
        <div class="line"><img src="img/line.png" alt=""></div>
        <div class="container">
            <div class="box">
                <img src="img/out1.jpg" alt="outbound fun pacet">
                <h2>Outbound Fun Outing Day</h2> 
                <p>*mulai harga :</p>
                <p>RP. 175.000,-/ORANG</p>
                <button onclick="window.location.href='tos-fun-outbound-Pacet'"> <strong>Selengkapnya</strong> </button>
            </div>
            <div class="box">
                <img src="img/out2.jpg" alt="outbound fun adventure pacet">
                <h2>Outbound Fun Adventure Day</h2> 
                <p>*mulai harga :</p>
                <p>RP. 325.000,-/ORANG</p>
                <button onclick="window.location.href='tos-fun-adventure-outbound-Pacet'"> <strong>Selengkapnya</strong> </button>
            </div>
            <div class="box">
                <img src="img/out3.jpg" alt="outbound motivasi pacet">
                <h2>Outbound Motivasi Day</h2> 
                <p>*mulai harga :</p>
                <p>RP. 225.000,-/ORANG</p>
                <button onclick="window.location.href='tos-outbound-motivasi-Pacet'"> <strong>Selengkapnya</strong> </button>
            </div>
            <!-- <div class="box">
                <img src="img/camp1.jpg" alt="info paket lain">
                <h2>Outbound Full Training</h2> 
                <p>*mulai harga :</p>
                <p>KONTAK UNTUK HARGA</p>
                <button><strong>Selengkapnya</strong></button>
            </div> -->
            <div class="box">
                <img src="img/camp1.jpg" alt="outbound family gathering pacet">
                <h2>Family Gathering</h2> 
                <p>*mulai harga :</p>
                <p>KONTAK UNTUK HARGA</p>
                <button onclick="window.location.href='tos-family-gathering-Pacet'"> <strong>Selengkapnya</strong> </button>
            </div>
            <!-- <div class="box">
                <img src="img/camp1.jpg" alt="info paket lain">
                <h2>Outbound Edukasi</h2> 
                <p>*mulai harga :</p>
                <p>KONTAK UNTUK HARGA</p>
                <button><strong>Selengkapnya</strong></button>
            </div> -->
        </div>
    </section>
    <!-- end fasilitas & syarat -->

    <!-- Contact -->
    <?php include "detail_kontak.php" ?>
    <!-- end Contact -->

    <!-- footer -->
    <?php include "footer.php" ?>
    <!-- end footer -->

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    

    function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        
    } else {
        header.classList.remove("sticky");
        
    }
    }

    function openSlideMenu(){
        document.getElementById("mobile-menu").style.width = '250px';
    }

    function closeSlideMenu(){
        document.getElementById("mobile-menu").style.width = '0';
    }

    
</script>

</body>
</html>