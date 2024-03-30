<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="google" content="notranslate" />
    <title>The Wedding of Lintang &amp; Rafli</title>

    <meta name="title" content="The Wedding Lintang & Rafli" />
    <meta name="description" content="Sabtu, 20 April 2024" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lintangrafli.site/" />
    <meta property="og:title" content="The Wedding Lintang & Rafli" />
    <meta property="og:description" content="Sabtu, 20 April 2024" />
    <meta property="og:image" content="{{ asset('images/photo14.jpg') }}" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://lintangrafli.site/" />
    <meta property="twitter:title" content="The Wedding Lintang & Rafli" />
    <meta property="twitter:description" content="Sabtu, 20 April 2024" />
    <meta property="twitter:image" content="{{ asset('images/photo14.jpg') }}" />

    <!-- Meta Tags Generated with https://metatags.io -->

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/splide@4.1.4/splide.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/animate.css@4.1.1/animate.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('themes/themesda7b.css?v=191123') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap&family=Cookie&display=swap");
        @import url("{{ asset('fonts/brittany_signature/BrittanySignature.css') }}");

        :root {
            --inv-bg: #ECECEC;
            --inv-base: #ffffff;
            --inv-accent: #524E4D;
            --inv-border: #524E4D;
            --font-base: "Marcellus", serif;
            --font-accent: "Cookie", cursive;
            --font-latin: "Cookie", cursive;
            --menu-bg: #ECECEC;
            --menu-inactive: #b3b3b3;
            --menu-active: #524E4D;
            --btn-color: #ECECEC;
        }

        p {
            color: #524E4D;
        }

        .font-latin,
        .font-accent {
            line-height: 2;
        }
    </style>

    <style>
        @import url("{{ asset('fonts/brittany_signature/BrittanySignature.css') }}");
        @import url("{{ asset('fonts/photograph_signature/fonts.css') }}");
        @import url("{{ asset('fonts/heatwood/Heatwood.css') }}");

        .font-brittany-signature {
            font-family: "Brittany Signature";
            line-height: 1.6 !important;
        }

        .font-photograph-signature {
            font-family: "Photograph Signature";
            line-height: 1.6 !important;
        }

        .font-heatwood {
            font-family: "Heatwood";
            line-height: 3 !important;
        }
    </style>
    @livewireStyles
</head>

<body>
    <main id="app">
        <div id="modalOverlay" class="modal-backdrop fade" style="display: none"></div>
        <div id="loader" class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <audio id="music" loop autoplay>
            <source src="{{ asset('themes/cipicapa.mp3') }}" />
        </audio>
        <div id="satuMomen" class="splide not-open" data-guest="Nama Tamu" data-group="Nama Group">
            <div class="splide__track invitation__track">
                <ul class="splide__list invitation__list">
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile cover"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                <div style="width: 100%">
                                    <div>
                                        <div class="text-center">
                                            <div
                                                class="editable font-accent color-accent h2 mb-2 animate__animated animate__fadeInDown animate__slow">
                                                <p>Lintang &amp; Rafli</p>
                                            </div>
                                            <div class="editable animate__animated animate__fadeInDown animate__slower">
                                                <p>Sabtu, 20 April 2024</p>
                                            </div>
                                            <div class="editable mb-5 animate__animated animate__fadeInDown">
                                                <p>Masjid Al-Wustho, Pondok Bambu</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <div
                                                class="editable mb-4 animate__animated animate__fadeInUp animate__slower">
                                                <p>Kepada Yth<br />Bapak/Ibu/Saudara/i</p>
                                            </div>
                                            <div
                                                class="editable color-accent h5 font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower">
                                                {{ isset($name) ? $name : 'Fulan' }}
                                            </div>

                                            <button type="button"
                                                class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow">
                                                Open Invitation
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                <div class="animate__animated animate__fadeInUp animate__slower" style="width: 100%;">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front text-dark">
                                                <h2 class="editable font-italic mb-3 text-center font-accent">Ar Rum
                                                    21
                                                </h2>
                                                <img style="width: 100%; filter: grayscale(100%);" class="mb-3"
                                                    src="{{ asset('images/photo1.jpg') }}">
                                                <div class="editable quotes">
                                                    Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia
                                                    menciptakan pasangan-pasangan untukmu dari jenismu
                                                    sendiri, agar kamu cenderung dan merasa tenteram
                                                    kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
                                                    sayang. Sungguh, pada yang demikian itu benar-benar
                                                    terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                                                    berpikir.
                                                </div>
                                            </div>
                                            <div class="flip-card-back text-dark">
                                                <h2 class="editable font-italic mb-3 text-center font-accent">With You
                                                </h2>
                                                <img style="width: 100%; filter: grayscale(100%); object-fit: cover; max-height: 350px;"
                                                    class="mb-3" src="{{ asset('images/photo2.jpg') }}">
                                                <div class="editable quotes">
                                                    No relationship is all sunshine, but two people can share one
                                                    umbrella and survive the storm together.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                <div style="width: 100%">
                                    <div
                                        class="editable text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                                        <p class="mb-2" style="    font-size: 200%;">بِسْمِ اللهِ الرَّحْمَنِ
                                            الرَّحِيْمِ</p>
                                        <p class="mb-2">Assalamu'alaikum
                                            Wr Wb</p>
                                        <p> Tanpa mengurangi rasa hormat <br> kami bermaksud
                                            mengundang <br> Bapak/Ibu/Saudara/i pada acara pernikahan kami:</p>
                                    </div>
                                    <div
                                        class="text-center mb-4 animate__animated animate__fadeInLeft animate__slower">
                                        <div class="editable font-latin color-accent h4 mb-2">
                                            <p class="mb-0" style="line-height: 1"> Lintang Anindhitya Indraswari
                                            </p>
                                        </div>
                                        <div class="editable">
                                            <p> Putri dari Bapak Tyas Indra Kurniawan<br />&amp; Ibu Ita
                                                Yunita <br /><br />~ dengan ~</p>
                                        </div>
                                    </div>

                                    <div class="text-center animate__animated animate__fadeInRight animate__slower">
                                        <div class="editable font-latin color-accent h4 mb-2">
                                            <p class="mb-0" style="line-height: 1">Muhammad Sulthan Rafli Maajid</p>
                                        </div>
                                        <div class="editable">
                                            <p> Putra dari Bapak Edy Maulana (Alm)<br />&amp; Ibu Desy
                                                Nurmalayanti<br /></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                <div style="width: 100%">
                                    <div
                                        class="text-center mb-3 animate__animated animate__fadeInDown animate__slower">
                                        <div class="editable font-latin color-accent h4 mb-2">
                                            <p>Sabtu, 20 April 2024</p>
                                        </div>
                                        <div class="editable color-accent">Akad Nikah : 10.00 - 12.00 WIB</div>
                                        <div class="editable color-accent">Resepsi : 12.30 - 15.00 WIB</div>
                                    </div>
                                    <div class="countdown-wrapper mb-3 d-flex flex-column animate__animated animate__fadeInDown animate__slower"
                                        data-datetime="2022-06-13T13:00">
                                        <div class="countdown text-center">
                                            <div class="countdown-item day">
                                                <div class="number" id="countdown-item-day">00</div>
                                                <div class="text editable">Hari</div>
                                            </div>
                                            <div class="countdown-item hour">
                                                <div class="number" id="countdown-item-hour">00</div>
                                                <div class="text editable">Jam</div>
                                            </div>
                                            <div class="countdown-item minute">
                                                <div class="number" id="countdown-item-minute">00</div>
                                                <div class="text editable">Menit</div>
                                            </div>
                                            <div class="countdown-item second">
                                                <div class="number" id="countdown-item-second">00</div>
                                                <div class="text editable">Detik</div>
                                            </div>
                                        </div>
                                        <button class="btn-countdown btn btn-sm btn-pilled btn-accent mt-2"
                                            style="">
                                            Atur Countdown
                                        </button>
                                    </div>
                                    <div style="width: 100%; margin: auto; border-radius: 10px; overflow: hidden; margin-bottom: 20px; padding-bottom: 50%; position: relative;"
                                        class="animate__animated animate__fadeInUp animate__slow">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.141799341967!2d106.90535997488021!3d-6.245036993743314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f332754bfc39%3A0xe270d0456d103042!2sMasjid%20Al-Wustho!5e0!3m2!1sen!2sid!4v1703844524049!5m2!1sen!2sid"
                                            width="100%" height="100%" style="border: 0; position: absolute"
                                            loading="lazy" allowfullscreen="" class="maps-embed">
                                        </iframe>
                                    </div>
                                    <div class="text-center animate__animated animate__fadeInUp animate__slow">
                                        <div class="editable mb-3 color-accent">Masjid Al-Wustho, Pondok Bambu</div>
                                        <a href="https://maps.app.goo.gl/K22mssAJZiMuuGUh6"
                                            class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow"
                                            target="_blank">Petunjuk Ke Lokasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center"
                                style="height: 100%;">
                                <div
                                    class="editable text-center font-latin color-accent h4 mb-3 animate__animated animate__fadeInDown animate__slower">
                                    Our Love Story</div>
                                <div style="margin: 0rem 4rem 0rem 4rem"
                                    class="animate__animated animate__zoomIn animate__slow">
                                    <p
                                        style="font-size: 11px; top: 50px; right: -49px; text-align: center; position: absolute; transform: rotate(6deg); font-family: cursive; font-weight: bold;">
                                        Our first met <br> Jun, 2016</p>
                                    <div id="gifContainer">
                                        <img src="{{ asset('images/arrow.gif') }}"
                                            style="top: 6px; position: absolute; right: 3px; width: 30px; transform: rotate(170deg);">
                                    </div>
                                    <div class="polaroid-story"
                                        style="left: -40px; transform: rotate(-9deg); padding-bottom: 7px;">
                                        <img src="{{ asset('images/photo3.jpg') }}" alt="Polaroid 2">
                                    </div>

                                    <p
                                        style="font-size: 11px; top: 180px; left: -60px; text-align: center; position: absolute; transform: rotate(-11deg); font-family: cursive; font-weight: bold;">
                                        We see a lots <br>of beautiful <br> things together</p>
                                    <img src="{{ asset('images/arrow.gif') }}"
                                        style="top: 140px; width: 30px; position: absolute; left: 0px; transform: rotate(190deg) rotateY(180deg);">
                                    <div class="polaroid-story"
                                        style="right: -40px; transform: rotate(9deg); padding-bottom: 7px;">
                                        <img src="{{ asset('images/photo4.jpg') }}" alt="Polaroid 1">
                                    </div>

                                    <p
                                        style="font-size: 11px; top: 298px; right: -45px; text-align: center; position: absolute; transform: rotate(7deg); font-family: cursive; font-weight: bold;">
                                        Until we <br> get engaged <br>Oct, 2023</p>
                                    <img src="{{ asset('images/arrow.gif') }}"
                                        style="top: 259px; position: absolute; right: 0px; width: 30px; transform: rotate(171deg);">
                                    <div class="polaroid-story"
                                        style="left: -40px; transform: rotate(-9deg); padding-bottom: 7px;">
                                        <img src="{{ asset('images/photo5.jpg') }}" alt="Polaroid 2">
                                    </div>
                                    <p
                                        style="font-size: 11px; top: 422px; left: -50px; text-align: center; position: absolute; transform: rotate(-11deg); font-family: cursive; font-weight: bold;">
                                        We decided to <br> get married <br>Apr, 2024</p>
                                    <img src="{{ asset('images/arrow.gif') }}"
                                        style="top: 380px; width: 30px; position: absolute; left: 0px; transform: rotate(187deg) rotateY(180deg);">
                                    <div class="polaroid-story"
                                        style="right: -40px; transform: rotate(9deg); padding-bottom: 7px;">
                                        <img src="{{ asset('images/photo9.jpg') }}" alt="Polaroid 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <livewire:comment-component />
                        </div>
                    </li>

                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                <div style="width: 100%" class="text-center">
                                    <div
                                        class="font-latin color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slower">
                                        Kirim Hadiah
                                    </div>
                                    <div class="editable mb-4 animate__animated animate__fadeInDown animate__slower">
                                        <p class="mb-0">Doa Restu anda merupakan karunia yang sangat berarti
                                            bagi kami. <br> Namun jika anda ingin memberi hadiah kami sediakan
                                            fitur berikut</p>
                                    </div>
                                    <div class="mt-1 pt-4 pb-4 rounded animate__animated animate__zoomIn animate__slow"
                                        style="">
                                        <div class="text-center mb-4">
                                            <div class="editable font-weight-bold h5 color-accent mb-2">
                                                Kirim Kado
                                            </div>
                                            <div class="editable mb-0">
                                                <p> Anda dapat mengirim kado ke:<br />Jl. Melati 1 No.19 RT.13/RW.9,
                                                    Duren Sawit <br /> Jakarta Timur, 13440</p>
                                            </div>
                                        </div>
                                        <div class="text-center mb-4">
                                            <div class="editable account-number font-weight-bold h5 mb-0">
                                                <p>6330952901</p>
                                            </div>
                                            <div class="editable">
                                                <p>BCA : Muhammad Sulthan Rafli Maajid</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="editable account-number font-weight-bold h5 mb-0">
                                                <p>7207072049</p>
                                            </div>
                                            <div class="editable">
                                                <p>BSI : Lintang Anindhitya Indraswari</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}'); padding: 10px;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="watermark d-flex justify-content-center align-items-center"
                                style="height: 100%">
                                <div style="width: 100%; z-index: 99;">
                                    <div class="text-center">
                                        <div
                                            class="editable font-accent h4 color-accent animate__animated animate__fadeInDown animate__slow mb-3">
                                            Our Gallery</div>
                                        <div class="animate__animated animate__fadeInUp animate__slower">
                                            <div class="wrapper">
                                                <div class="item">
                                                    <div class="polaroid"><img
                                                            src="{{ asset('images/photo6.png') }}">
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="polaroid"><img
                                                            src="{{ asset('images/photo7.jpg') }}">
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="polaroid"><img
                                                            src="{{ asset('images/photo12.jpg') }}">
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="polaroid"><img
                                                            src="{{ asset('images/photo13.jpg') }}"
                                                            style="object-position: bottom;">
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="polaroid"><img
                                                            src="{{ asset('images/photo10.jpg') }}">
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="polaroid"><img
                                                            src="{{ asset('images/photo11.jpg') }}">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile"
                            style="background-image: url('{{ asset('themes/luxury-navy/bg.jpg') }}')">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-tl.png') }}" alt="frame" />
                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower"
                                    src="{{ asset('themes/luxury-maroon/frame-br.png') }}" alt="frame" />
                            </div>
                            <div class="watermark d-flex justify-content-center align-items-center"
                                style="height: 100%">
                                <div swtyle="width: 100%">
                                    <div class="text-center">
                                        <div
                                            class="editable quotes mb-3 animate__animated animate__fadeInDown animate__slower">
                                            <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami,
                                                apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
                                                memberikan do'a restu kepada kedua mempelai.</p>
                                        </div>
                                        <div
                                            class="editable font-italic animate__animated animate__fadeInDown animate__slow">
                                            <p>Hormat Kami Yang Mengundang</p>
                                        </div>

                                        <div
                                            class="editable font-accent h4 color-accent animate__animated animate__fadeInDown animate__slow">
                                            <p>Lintang &amp; Rafli</p>
                                        </div>
                                        <div class="watermark-placeholder mt-5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="menuSlider" class="splide">
            <div class="splide__track menu-track">
                <ul class="splide__list menu-list">
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.144 20.782v-3.067c0-.777.632-1.408 1.414-1.413h2.875c.786 0 1.423.633 1.423 1.413v3.058c0 .674.548 1.222 1.227 1.227h1.96a3.46 3.46 0 0 0 2.444-1 3.41 3.41 0 0 0 1.013-2.422V9.866c0-.735-.328-1.431-.895-1.902l-6.662-5.29a3.115 3.115 0 0 0-3.958.071L3.467 7.963A2.474 2.474 0 0 0 2.5 9.867v8.703C2.5 20.464 4.047 22 5.956 22h1.916c.327.002.641-.125.873-.354.232-.228.363-.54.363-.864h.036Z"
                                fill="currentColor" />
                        </svg>
                        <span>Opening</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".4"
                                d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z"
                                fill="currentColor" />
                        </svg>
                        <span>Quotes</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".4"
                                d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z"
                                fill="currentColor" />
                            <path
                                d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z"
                                fill="currentColor" />
                        </svg>
                        <span>Mempelai</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87Zm4.96-2.46a.822.822 0 0 1-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.06 0a.822.822 0 0 1-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.03 3.68a.847.847 0 0 1-.82-.85.831.831 0 0 1 .81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85Zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm-4.07 0c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 0 1-.79.849.814.814 0 0 1-.84-.799v-.01Z"
                                fill="currentColor" />
                            <path opacity=".4"
                                d="M3.003 9.257c.013-.587.063-1.752.156-2.127.474-2.11 2.084-3.45 4.386-3.64h8.911c2.282.2 3.912 1.55 4.386 3.64.092.365.142 1.539.155 2.127H3.003Z"
                                fill="currentColor" />
                            <path
                                d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 0 0 8.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77ZM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 0 0-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77Z"
                                fill="currentColor" />
                        </svg>
                        <span>Acara</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".4"
                                d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z"
                                fill="currentColor" />
                        </svg>
                        <span>Story</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".4"
                                d="M12.02 2C6.21 2 2 6.74 2 12c0 1.68.49 3.41 1.35 4.99.16.26.18.59.07.9l-.67 2.24c-.15.54.31.94.82.78l2.02-.6c.55-.18.98.05 1.491.36 1.46.86 3.279 1.3 4.919 1.3 4.96 0 10-3.83 10-10C22 6.65 17.7 2 12.02 2Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.98 13.29c-.71-.01-1.28-.58-1.28-1.29 0-.7.58-1.28 1.28-1.27.71 0 1.28.57 1.28 1.28 0 .7-.57 1.28-1.28 1.28Zm-4.61 0c-.7 0-1.28-.58-1.28-1.28 0-.71.57-1.28 1.28-1.28.71 0 1.28.57 1.28 1.28 0 .7-.57 1.27-1.28 1.28Zm7.94-1.28c0 .7.57 1.28 1.28 1.28.71 0 1.28-.58 1.28-1.28 0-.71-.57-1.28-1.28-1.28-.71 0-1.28.57-1.28 1.28Z"
                                fill="currentColor" />
                        </svg>
                        <span>RSVP</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".4"
                                d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z"
                                fill="currentColor" />
                        </svg>
                        <span>Gift</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512">
                            <path opacity=".4" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                                d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                        </svg>
                        <span>Gallery</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".4"
                                d="M16.34 2H7.67C4.28 2 2 4.38 2 7.92v8.17C2 19.62 4.28 22 7.67 22h8.67c3.39 0 5.66-2.38 5.66-5.91V7.92C22 4.38 19.73 2 16.34 2Z"
                                fill="currentColor" />
                            <path
                                d="M10.813 15.248a.872.872 0 0 1-.619-.256l-2.373-2.373a.874.874 0 1 1 1.237-1.238l1.755 1.755 4.128-4.128a.874.874 0 1 1 1.237 1.238l-4.746 4.746a.872.872 0 0 1-.619.256Z"
                                fill="currentColor" />
                        </svg>
                        <span>Thanks</span>
                    </li>
                </ul>
            </div>
        </div>
        <div style="max-width: 500px; margin: auto; position: fixed; left: calc(100% - 60px); right: 0; bottom: 60px; gap: 12px;"
            class="d-flex align-items-end flex-column px-3 pb-3">
            {{-- <button id="btnQrModal" onclick="showModal(qrModal)" class="btn btn-float">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20"
                    height="20">
                    <path fill-rule="evenodd"
                        d="M3 4.875C3 3.839 3.84 3 4.875 3h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 0 1 3 9.375v-4.5zM4.875 4.5a.375.375 0 0 0-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 0 0 .375-.375v-4.5a.375.375 0 0 0-.375-.375h-4.5zm7.875.375c0-1.036.84-1.875 1.875-1.875h4.5C20.16 3 21 3.84 21 4.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5a1.875 1.875 0 0 1-1.875-1.875v-4.5zm1.875-.375a.375.375 0 0 0-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 0 0 .375-.375v-4.5a.375.375 0 0 0-.375-.375h-4.5zM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75A.75.75 0 0 1 6 7.5v-.75zm9.75 0A.75.75 0 0 1 16.5 6h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zM3 14.625c0-1.036.84-1.875 1.875-1.875h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.035-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 0 1 3 19.125v-4.5zm1.875-.375a.375.375 0 0 0-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 0 0 .375-.375v-4.5a.375.375 0 0 0-.375-.375h-4.5zm7.875-.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm6 0a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zM6 16.5a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm9.75 0a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm-3 3a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm6 0a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75z"
                        clip-rule="evenodd" />
                </svg>
            </button> --}}
            <button id="btnMusic" onclick="playMusic()" class="btn btn-float">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20"
                    height="20">
                    <path fill-rule="evenodd"
                        d="M19.952 1.651a.75.75 0 0 1 .298.599v14.053a3 3 0 0 1-2.176 2.884l-1.32.377a2.553 2.553 0 1 1-1.403-4.909l2.311-.66a1.5 1.5 0 0 0 1.088-1.442V6.994l-9 2.572v9.737a3 3 0 0 1-2.176 2.884l-1.32.377a2.553 2.553 0 1 1-1.402-4.909l2.31-.66a1.5 1.5 0 0 0 1.088-1.442V5.25a.75.75 0 0 1 .544-.721l10.5-3a.75.75 0 0 1 .658.122z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div id="lightboxWrapper" class="lightbox-wrapper">
            <div class="lightbox-list"></div>
            <a href="#" id="lightboxCloseBtn" class="btn-lightbox">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="#" id="lightboxPrevBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" id="lightboxNextBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </main>
    <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0.8rem">
                <div class="modal-body text-center justify-content-center align-items-center">
                    <h2>Pemberitahuan</h2>
                    <p>
                        Browser yang kamu gunakan mungkin kurang kompatibel. Beberapa
                        fungsi undangan ini mungkin tidak dapat berjalan dengan baik. Kami
                        merekomendasikan Chrome. Klik tombol dibawah ini untuk
                        mendownload.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="btn p-1"
                            target="_BLANK">
                            <img src="{{ asset('images/btn_app_store.png') }}" alt="AppStore" height="40px" />
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.android.chrome&amp;hl=in&amp;gl=US"
                            class="btn p-1" target="_BLANK">
                            <img src="{{ asset('images/btn_play_store.png') }}" alt="PlayStore" height="40px" />
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-block rounded-pill" onclick="closeModal(notSupport)">
                        Tetap Akses
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/splide@4.1.4/splide.min.js') }}"></script>
    <script src="{{ asset('themes/themev2da7b.js?v=191123') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splideTest = new Splide('#splideComment', {
                type: 'fade', // or 'slide'            
                pagination: false,
                arrows: false,
                loop: true,
                rewind: true,
                autoplay: true
            }).mount();

            document.querySelector('.splide__prev').addEventListener('click', function() {
                splideTest.go('-');
            });

            document.querySelector('.splide__next').addEventListener('click', function() {
                splideTest.go('+');
            });
        });
        // Set the date we're counting down to
        var countDownDate = new Date("Apr 20, 2024 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("countdown-item-day").innerHTML = days;
            document.getElementById("countdown-item-hour").innerHTML = hours;
            document.getElementById("countdown-item-minute").innerHTML = minutes;
            document.getElementById("countdown-item-second").innerHTML = seconds;

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
            }
        }, 1000);
    </script>
    @livewireScripts

</body>

</html>
