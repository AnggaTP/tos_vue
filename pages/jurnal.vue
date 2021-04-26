<template>
  <div>
    <head>
      <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>
        Jurnal Kegiatan klien Bersama TOS ADVENTURE Pacet Mojokerto Jawa Timur
      </title>
      <meta
        name="description"
        content="Intip dan baca beberapa catatan jurnal kegiatan klien kami, jangan ragu segera acarakan segala kegiatan anda bersama TOS Adventure Pacet"
      />
      <meta
        name="keywords"
        content="rafting, outbound, rafting pacet, rafting mojokerto, rafting jawa timur, outbound pacet, outbound mojokerto, outbound jawa timur, rafting terdekat, outbound terdekat, wisata pacet, wisata mojokerto, wisata jawa timur"
      />
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow" />
      <meta name="language" content="indonesia" />

      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Montserrat"
        rel="stylesheet"
      />
      <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
      <link rel="shortcut icon" type="image/png" href="img/new_tos.png" />
    </head>
    <body>
      <!-- header -->
      <header id="myHeader-home">
        <nav>
          <a href="home" id="logo">
            <img src="@/img/new_tos333.png" alt="logo tos adventure pacet"
          /></a>
          <span class="open-menu">
            <button onclick="openSlideMenu()">
              <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
              </svg>
              <p>Menu</p>
            </button>
          </span>
          <ul>
            <li><a href="home">Home</a></li>
            <li><a href="rafting">Rafting</a></li>
            <li class="dropdown">
              <a href="#" class="not-active"
                >Outbound <span class="fa fa-chevron-down"></span>
              </a>
              <div class="dropdown-content">
                <a href="outbond_fun">Fun Outbound Outing</a>
                <a href="outbound_adventure">Fun Outbound Adventure</a>
                <a href="outbond_motivasi">Outbound Motivasi</a>
                <!-- <a href="Harga-paket-outbound-Pacet-Mojokerto">Outbound Full Training</a> -->
                <a href="family_gathering">Family Gathering</a>
                <!-- <a href="Harga-paket-outbound-Pacet-Mojokerto">Outbound Edukasi</a> -->
              </div>
            </li>
            <li class="dropdown">
              <a href="#" class="not-active"
                >Paket Lain <span class="fa fa-chevron-down"></span
              ></a>
              <div class="dropdown-content">
                <a href="paintball">Paintball War</a>
                <a href="travel">Travel Partner</a>
                <a href="event_organizer">Event Organizer</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="#" class="not-active"
                >Villa <span class="fa fa-chevron-down"></span
              ></a>
              <div class="dropdown-content">
                <a href="villa">Sewa Villa Pacet</a>
                <!-- <a href="Harga-sewa-villa-murah-di-Trawas-Mojokerto">Villa Trawas</a> -->
                <!-- <a href="#client">Camping Santai</a> -->
              </div>
            </li>
            <li class="dropdown">
              <a href="#" class="not-active"
                >Info Lain <span class="fa fa-chevron-down"></span
              ></a>
              <div class="dropdown-content">
                <a href="tentang_kami">Tentang Kami</a>
                <a href="jurnal">Jurnal Klien</a>
                <!-- <a href="#client">Berita & Artikel</a> -->
                <a href="#contact">Galeri TOS</a>
              </div>
            </li>
            <li><a href="kontak-dan-reservasi">Contact</a></li>
          </ul>
        </nav>
      </header>

      <div id="mobile-menu" class="side-menu">
        <button class="btn-close" onclick="closeSlideMenu()">&times;</button>
        <a href="tos-rafting-Pacet">Tos Rafting Pacet</a>
        <a href="tos-fun-outbound-Pacet">Fun Outing Outbound Pacet</a>
        <a href="tos-fun-adventure-outbound-Pacet"
          >Fun Adventure Outbound Pacet</a
        >
        <a href="tos-outbound-motivasi-Pacet">Outbound Motivasi</a>
        <a href="tos-family-gathering-Pacet">Family Gathering</a>
        <a href="tos-paintball-Pacet">TOS Paintball Pacet</a>
        <a href="info-travel-&-outing">Travel Partner</a>
        <a href="info-event-organizer">Event Organizer</a>
        <a href="Harga-sewa-villa-Pacet">Sewa Villa Pacet</a>
        <a href="tentang-TOS-Adventure-Pacet">Tentang Kami</a>
        <a href="Jurnal-klien-TOS-Adventure-Pacet">Jurnal Klien</a>
        <a href="kontak-dan-reservasi">Contact</a>
      </div>
      <!-- end header -->

      <!-- title halaman -->
      <section id="title-halaman">
        <div class="container">
          <h1>Jurnal Kegiatan Klien TOS</h1>
        </div>
      </section>
      <!-- end title halaman -->

      <!-- tamu -->
      <section id="tamu">
        <h2>Jurnal Klien</h2>
        <div class="line"><img src="img/line.png" alt="" /></div>
        <p>
          Tos Adventure Pacet sudah bekerjasama dan melayani berbagai klien dari
          seluruh Indonesia baik mulai dari Perusahaan, instansi Pemerintah,
          sekolah, universitas, organisasi, club, komunitas keluarga, maupun
          umum. Intip sekilas bagaimana perjalanan dan kegiatan para klien kami
        </p>
        <div class="container">
          <div class="box">
            <img
              src="img/banner.jpg"
              alt="kegiatan rafting outbound shopee.id"
            />
            <h3>
              Seller Gathering Shopee.id, asyiknya kebersamaan dengan
              rekan-rekan baru
            </h3>
            <p>
              Shopee.id bersama para Seller di area Jawa Timur melakukan
              gathering pertama mereka di TOS Adventure Pacet. Diawali dengan
              fun outbound yang kemudian dilanjutkan dengan pengarungan rafting
              welirang trip.
            </p>
            <button><strong>Selengkapnya</strong></button>
          </div>
          <div class="box">
            <img
              src="img/out3.jpg"
              alt="kegiatan rafting outbound KPPBC Surabaya"
            />
            <h3>
              Seru serta berkesannya kegiatan Capacity Building KPPBC Surabaya
            </h3>
            <p>
              Kegiatan Capacity Building 2 hari 1 malam oleh KPPBC Surabaya ini
              berlangsung seru dan penuh makna. Diawali dengan kegiatan fun
              outbound yang sangat fun, kemudian dilanjutkan dengan rafting trip
              arjuna bersama-sama. Malamnya kegiatan outbound motivasi di Royal
              Camp Trawas dilanjutkan api unggun, electone dan Nobar Piala
              Dunia. Kemudian pagi keesokan harinya kegiatan senam dan hash,
              ditutup dengan pembagian doorprize.
            </p>
            <button><strong>Selengkapnya</strong></button>
          </div>
          <div class="box">
            <img
              src="img/raf2.jpg"
              alt="kegiatan rafting CCRC Bank BTN Surabaya"
            />
            <h3>
              Lepas penat kerja versi rekan-rekan CCRC Bank BTN cabang Surabaya
            </h3>
            <p>
              Rafting day Unit CCRC Bank BTN cabang Surabaya, menikmati keseruan
              Trip Rafting teratas TOS yaitu Mahameru Trip yang jalurnya memacu
              andrenalin dengan balutan dengan keindahan alam natural
              disepanjang perjalanan. Ditutup dengan makan bersama dan menikmati
              hiburan music electone.
            </p>
            <button><strong>Selengkapnya</strong></button>
          </div>
        </div>
      </section>
      <!-- end tamu -->

      <!-- produk lain -->
      <!-- Product -->
      <section id="product">
        <h1>PAKET KAMI LAINNYA</h1>
        <div class="line"><img src="img/line.png" alt="garis batas" /></div>
        <div class="container">
          <div class="box">
            <img src="img/raf4-min.jpg" alt="paket rafting pacet" />
            <h2>Paket Tos Rafting Pacet</h2>
            <p>*mulai harga :</p>
            <p>RP. 150.000,-/ORANG</p>
            <button onclick="window.location.href='tos-rafting-Pacet'">
              <strong>Selengkapnya</strong>
            </button>
          </div>
          <div class="box">
            <img src="img/out2.jpg" alt="paket outbound pacet" />
            <h2>Paket Tos Outbound Pacet</h2>
            <p>*mulai harga :</p>
            <p>RP. 175.000,-/ORANG</p>
            <button onclick="window.location.href='tos-outbound-Pacet'">
              <strong>Selengkapnya</strong>
            </button>
          </div>
          <div class="box">
            <img src="img/pain2.jpg" alt="paket paintball pacet" />
            <h2>Paket Tos Paintball Pacet</h2>
            <p>*mulai harga :</p>
            <p>RP. 150.000,-/ORANG</p>
            <button onclick="window.location.href='tos-paintball-Pacet'">
              <strong>Selengkapnya</strong>
            </button>
          </div>
          <div class="box">
            <img src="img/camp1.jpg" alt="info paket lain" />
            <h2>Paket Tos Adventure lain</h2>
            <p>*mulai harga :</p>
            <p>KONTAK UNTUK HARGA</p>
            <button onclick="window.location.href='#contact'">
              <strong>Selengkapnya</strong>
            </button>
          </div>
        </div>
      </section>

      <!-- end product -->

      <!-- Contact -->

      <section id="contact">
        <div class="container">
          <h2>KONTAK TOS ADVENTURE PACET</h2>
          <!-- <div class="line"><img src="img/line.png" alt=""></div> -->
          <p>
            Tunggu apalagi? Segera hubungi kontak kami dibawah atau langsung
            meluncur ke basecamp kami..
          </p>
          <p>TOS ADVENTURE PACET Enjoy The Flow Feel The Nature.</p>
          <div class="box-grid">
            <div class="box">
              <ul>
                <li>
                  <span class="fa fa-fort-awesome"></span> Basecamp : Wana
                  Wisata Air Panas Pacet Mojokerto
                </li>
                <li>
                  <span class="fa fa-home"></span> Kantor : Blok E-3 Perum Taman
                  Majapahit Jabon Mojokerto
                </li>
                <li>
                  <span class="fa fa-phone"></span> Office : 0321-6855054/
                  085156244623 (WA Chat Only)
                </li>
                <li>
                  <span class="fa fa-phone"></span> 082231372191 / Navis Zarkasy
                </li>
                <li>
                  <span class="fa fa-phone"></span> 081234557490 / Muslihuddin
                </li>
                <li>
                  <span class="fa fa-envelope"></span> Email :
                  pacetraftingtos@gmail.com
                </li>
              </ul>
            </div>
            <div class="box">
              <a href="https://goo.gl/maps/6pJgvw71Z4jddrKj8" target="_blank">
                <img src="img/peta-tos.jpg" alt="lokasi tos" />
              </a>
            </div>
            <div class="box-sosmed">
              <p>SOCIAL MEDIA KAMI</p>
              <ul>
                <li>
                  <a
                    href="https://www.instagram.com/tosraftingpacet/"
                    target="_blank"
                    ><i class="fa fa-instagram"></i>
                    <p>@tosraftingpacet</p></a
                  >
                </li>
                <li>
                  <a href="https://www.facebook.com/TOSPACET/" target="_blank"
                    ><i class="fa fa-facebook"></i>
                    <p>tospacet</p></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- end Contact -->

      <!-- footer -->
      <div class="container">
        <div class="box">
          <img src="img/new_tos11.png" alt="emblem tos adventure pacet" />
        </div>
        <div class="box">
          <h3>LINK TOS ADVENTURE PACET</h3>
          <ul>
            <li><a href="tos-rafting-Pacet">> Rafting Pacet</a></li>
            <li><a href="tos-outbound-Pacet">> Outbound Pacet</a></li>
            <li><a href="Htos-paintball-Pacet">> Paintball Pacet</a></li>
            <li><a href="sewa-villa-Pacet">> Villa Pacet</a></li>
            <li><a href="kontak-dan-reservasi">> Info Reservasi</a></li>
          </ul>
        </div>
        <div class="box">
          <h3>TEMUKAN TOS ADVENTURE PACET</h3>
          <ul>
            <li>
              <span class="fa fa-fort-awesome"></span> Basecamp : Wana Wisata
              Air Panas Pacet Mojokerto
            </li>
            <li>
              <span class="fa fa-home"></span> Kantor : Blok E-3 Perum Taman
              Majapahit Jabon Mojokerto
            </li>
            <li><span class="fa fa-phone"></span> Office : 0321-6855054</li>
            <li>
              <span class="fa fa-envelope"></span> Email :
              pacetraftingtos@gmail.com
            </li>
          </ul>
        </div>
        <div class="box">
          <h3>KONTAK TOS ADVENTURE PACET</h3>
          <ul>
            <li>
              <span class="fa fa-phone"></span> 082231372191 / NAVIS ZARKASY
            </li>
            <li>
              <span class="fa fa-phone"></span> 081234557490 / MUSLIHUDDIN
            </li>
            <li>
              <span class="fa fa-phone"></span> 085156244623 (OFFICE WA CHAT
              ONLY)
            </li>
          </ul>
        </div>
      </div>

      <!-- end footer -->

      <script>
        window.onscroll = function () {
          myFunction();
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }

        function openSlideMenu() {
          document.getElementById("mobile-menu").style.width = "250px";
        }

        function closeSlideMenu() {
          document.getElementById("mobile-menu").style.width = "0";
        }
      </script>
    </body>
  </div>
</template>