<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​JBL Consultoría e Inversiones, PORTAFOLIO, what we do, ​Hacemos&nbsp; de su proyecto, el nuestro y&nbsp; así logramos un desarrollo eficaz y personalizado de soluciones estratégicas para el crecimiento de sus equipos y la organización., Get to know today!">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>JBL</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Casa.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


  <?php
  include("conexion.php");
  $RSBan = mysqli_query($conexion, "SELECT * FROM banner");
  $vBan = mysqli_fetch_row($RSBan);
  $RSFor = mysqli_query($conexion, "SELECT * FROM footer");
  $vFor = mysqli_fetch_row($RSFor);
  $RSPor = mysqli_query($conexion, "SELECT * FROM portafolio");
  $vPor = mysqli_fetch_row($RSPor);
  $RSSom = mysqli_query($conexion, "SELECT * FROM somos");
  $vSom = mysqli_fetch_row($RSSom);
  ?>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/default-logo.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Casa">
  <meta property="og:type" content="website">
</head>

<body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body">
<header class="u-clearfix u-header u-header" id="sec-dfa6"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="login.php" class="u-image u-logo u-image-1" data-image-width="200" data-image-height="133">
          <img src="images/Flag_of_Colombia.svg.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;" href="#servicios">Servicios</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;" href="#quienes">Quienes Somos?</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;" href="#contactenos">Contacto</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Servicios</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Quienes Somos?</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Contacto</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>
  <section class="u-clearfix u-image u-shading" id="carousel_cc46">
    <div class="container">
      <img style="width:1700px; height:570px; background-color:rgba(160,54,234,0.65)" src="admin/ban/archivos/<?php if ($vBan['0'] != "") {
                                                                                                                echo $vBan['2'];
                                                                                                              } else {
                                                                                                                echo "default.png";
                                                                                                              } ?>">
      <div class="centered">
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-container-layout-1">
            <h1 class="centered"><b><?php echo $vBan[1]; ?></b>
            </h1>
            <h3 class="centered">Gestionando la transformacion de su Empresa</h3>
            <div class="centered"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-grey-5 u-section-2" id="carousel_972b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
          <div class="u-size-20 u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-custom-font u-text u-text-font u-text-1">PORTAFOLIO</h2>
                      <h4 class="u-custom-font u-text u-text-custom-color-2 u-text-font u-text-2"><b><?php echo $vPor[1]; ?><span style="font-weight: 400;"></span></b>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            <div class="u-size-20 u-size-30-md">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell">
                  <img style="width:360px; height:650px;" src="admin/por/archivos/<?php if ($vPor['0'] != "") {
                                                                                    echo $vPor['3'];
                                                                                  } else {
                                                                                    echo "default.png";
                                                                                  } ?>">
                  <div class="u-container-layout"></div>
                </div>
              </div>
            </div>
            <div class="u-size-20 u-size-60-md">
              <div class="u-layout-col">
                <div class="u-container-style u-image u-layout-cell u-right-cell  ">
                  <img style="width:360px; height:300px;" src="admin/por/archivos/<?php if ($vPor['0'] != "") {
                                                                                    echo $vPor['4'];
                                                                                  } else {
                                                                                    echo "default.png";
                                                                                  } ?>">
                  <div class="u-container-layout u-container-layout-3"></div>
                </div>
                <div class="u-align-center u-container-style u-custom-color-2 u-layout-cell u-right-cell u-size-30 u-layout-cell-4">
                  <div class="u-container-layout u-valign-middle">
                    <p class="u-text u-text-3"><b><?php echo $vPor[2]; ?></b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-palette-5-dark-3 u-section-3" id="carousel_7d2b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-24 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c08c"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c08c"><g id="XMLID_1167_"><g id="XMLID_1015_"><path id="XMLID_1084_" d="m107 114.946c7.262 0 13.169 4.947 13.169 11.027 0 5.522 4.478 10 10 10s10-4.478 10-10c0-13.849-9.752-25.606-23.169-29.583v-1.39c0-5.522-4.478-10-10-10s-10 4.478-10 10v1.39c-13.417 3.978-23.169 15.734-23.169 29.583 0 17.109 14.88 31.027 33.169 31.027 7.262 0 13.169 4.946 13.169 11.026s-5.907 11.027-13.169 11.027-13.169-4.947-13.169-11.027c0-5.522-4.478-10-10-10s-10 4.478-10 10c0 13.849 9.752 25.606 23.169 29.583v1.391c0 5.522 4.478 10 10 10s10-4.478 10-10v-1.39c13.417-3.978 23.169-15.734 23.169-29.583 0-17.108-14.88-31.026-33.169-31.026-7.262 0-13.169-4.946-13.169-11.026s5.907-11.029 13.169-11.029z"></path><path id="XMLID_1192_" d="m291 292.743c-5.522 0-10 4.478-10 10v145.257c0 5.522 4.478 10 10 10h48c5.522 0 10-4.478 10-10v-145.257c0-5.522-4.478-10-10-10zm38 145.257h-28v-125.257h28z"></path><path id="XMLID_1195_" d="m435 269h-48c-5.522 0-10 4.478-10 10v169c0 5.522 4.478 10 10 10h48c5.522 0 10-4.478 10-10v-169c0-5.522-4.478-10-10-10zm-10 169h-28v-149h28z"></path><path id="XMLID_1200_" d="m195 348c-5.522 0-10 4.478-10 10v90c0 5.522 4.478 10 10 10h48c5.522 0 10-4.478 10-10v-90c0-5.522-4.478-10-10-10zm38 90h-28v-70h28z"></path><path id="XMLID_1202_" d="m195 250.957c-5.522 0-10 4.478-10 10s4.478 10 10 10c49.362 0 98.375-12.046 141.74-34.834 33.361-17.532 63.443-41.404 88.26-69.866v1.063c0 5.522 4.478 10 10 10s10-4.478 10-10v-29.806c0-5.522-4.478-10-10-10h-29.806c-5.522 0-10 4.478-10 10s4.478 10 10 10h9.493c-53.859 65.109-134.571 103.443-219.687 103.443z"></path><path id="XMLID_1205_" d="m502 0h-141.998c-5.522 0-10 4.478-10 10s4.478 10 10 10h131.998v472h-354v-242.585c43.93-13.323 76-54.191 76-102.415s-32.07-89.092-76-102.415v-24.585h132.002c5.522 0 10-4.478 10-10s-4.478-10-10-10h-142.002c-5.522 0-10 4.478-10 10v30.562c-3.617-.371-7.287-.562-11-.562-59 0-107 48-107 107s48 107 107 107c3.713 0 7.383-.191 11-.562v248.562c0 5.522 4.478 10 10 10h374c5.522 0 10-4.478 10-10v-492c0-5.522-4.478-10-10-10zm-482 147c0-47.972 39.028-87 87-87s87 39.028 87 87-39.028 87-87 87-87-39.028-87-87z"></path><path id="XMLID_1206_" d="m315 20c2.64 0 5.21-1.07 7.069-2.931 1.861-1.859 2.931-4.439 2.931-7.069s-1.07-5.21-2.931-7.07c-1.859-1.861-4.439-2.93-7.069-2.93s-5.21 1.069-7.07 2.93-2.93 4.44-2.93 7.07 1.069 5.21 2.93 7.069c1.86 1.861 4.44 2.931 7.07 2.931z"></path>
</g>
</g></svg></span>
                  <p class="u-align-center u-text u-text-1"> Asesoria Financiera<span style="font-weight: 700;"></span>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-24 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.999 511.999" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cd26"></use></svg><svg class="u-svg-content" viewBox="0 0 511.999 511.999" x="0px" y="0px" id="svg-cd26" style="enable-background:new 0 0 511.999 511.999;"><g><g><path d="M344.214,276.755l-43.582-19.37c-3.079-1.368-5.067-4.429-5.067-7.797V237.62c14.64-11.665,24.05-29.628,24.05-49.758    v-16.847c4.823-2.665,8.016-7.815,8.016-13.583v-1.635c0-35.076-28.537-63.613-63.613-63.613h-16.032    c-35.076,0-63.613,28.537-63.613,63.613v14.835c0,5.07,2.182,9.663,5.985,12.602c0.645,0.498,1.324,0.936,2.031,1.315v3.312    c0,20.13,9.409,38.093,24.048,49.757v11.969c0,3.368-1.989,6.429-5.067,7.797l-43.582,19.37    c-14.273,6.343-23.496,20.535-23.496,36.154v99.404c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-99.403    c0-0.869,0.062-1.728,0.152-2.58l20.082,20.082c3.125,3.126,4.847,7.281,4.847,11.702v70.2c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-70.2c0-8.427-3.281-16.349-9.24-22.308l-23.941-23.942c2.157-2.238,4.745-4.093,7.689-5.402    l42.847-19.043l31.775,31.775v109.119c0,4.142,3.358,7.5,7.5,7.5s7.5-3.358,7.5-7.5V303.194l31.775-31.775l42.846,19.042    c2.944,1.309,5.532,3.164,7.689,5.403l-23.941,23.941c-5.959,5.959-9.24,13.881-9.24,22.308v70.2c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-70.2c0-4.42,1.721-8.576,4.847-11.702l20.081-20.081c0.09,0.852,0.152,1.709,0.152,2.578v99.404    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-99.403C367.709,297.29,358.487,283.098,344.214,276.755z M256,289.481    l-27.881-27.882c2.12-3.567,3.317-7.694,3.317-12.011v-3.052c7.563,3.178,15.862,4.939,24.565,4.939s17.001-1.76,24.563-4.938    v3.051c0,4.318,1.197,8.444,3.318,12.012L256,289.481z M256.001,236.474c-26.805,0.001-48.613-21.807-48.613-48.612v-3.373    c4.68-1.855,9.248-4.807,13.621-8.842c3.043-2.809,3.234-7.554,0.424-10.598c-2.809-3.043-7.553-3.234-10.598-0.425    c-3.751,3.463-7.499,5.7-11.137,6.65c-0.088,0.023-0.153,0.033-0.199,0.037c-0.054-0.105-0.127-0.325-0.127-0.678v-14.835    c0-26.805,21.808-48.613,48.613-48.613h16.032c26.806,0,48.613,21.808,48.613,48.613v1.635c0,0.243-0.146,0.454-0.338,0.492    c-44.911,8.87-67.437-7.847-75.037-15.447c-2.929-2.929-7.678-2.929-10.606,0c-2.929,2.929-2.929,7.678,0,10.606    c23.29,23.29,57.275,23.71,77.965,21.224v13.553C304.614,214.666,282.806,236.474,256.001,236.474z"></path>
</g>
</g><g><g><path d="M135.242,235.961v-16.035c0-19.566-10.168-36.79-25.489-46.702c0.946-3.035,1.44-6.214,1.44-9.411    c0-17.396-14.152-31.548-31.548-31.548s-31.548,14.153-31.548,31.548c0,3.237,0.49,6.385,1.438,9.413    c-15.32,9.911-25.487,27.135-25.487,46.7v16.032c0,18.947,9.533,35.701,24.048,45.743v16.493c0,3.253-1.807,6.177-4.716,7.632    l-25.941,12.97C6.682,324.176,0,334.988,0,347.015v65.299c0,4.142,3.358,7.5,7.5,7.5s7.5-3.358,7.5-7.5v-62.055l12.218,12.218    c3.125,3.126,4.847,7.281,4.847,11.702v38.135c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-38.135    c0-8.427-3.282-16.349-9.24-22.308L20.82,334.866c-0.082-0.082-0.17-0.153-0.254-0.23c1.067-0.942,2.264-1.762,3.582-2.422    l25.941-12.97c1.329-0.665,2.566-1.45,3.719-2.322l18.337,18.338v77.055c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5    v-77.056l18.338-18.338c1.154,0.873,2.39,1.658,3.719,2.322l7.153,3.577c1.077,0.539,2.221,0.794,3.349,0.794    c2.751,0,5.4-1.52,6.714-4.147c1.853-3.705,0.351-8.21-3.354-10.062l-7.153-3.577c-2.91-1.455-4.717-4.379-4.717-7.631v-16.493    C125.709,271.662,135.242,254.907,135.242,235.961z M79.645,147.265c9.125,0,16.548,7.424,16.548,16.548    c0,1.005-0.09,1.99-0.262,2.955c-5.154-1.582-10.621-2.439-16.286-2.439c-5.657,0-11.117,0.854-16.263,2.432    c-0.173-0.965-0.285-1.945-0.285-2.948C63.097,154.688,70.52,147.265,79.645,147.265z M79.645,179.33    c22.385,0,40.597,18.212,40.597,40.597v2.718c-31.225,9.56-49.834-14.193-50.629-15.234c-1.305-1.739-3.3-2.827-5.468-2.981    c-2.168-0.152-4.298,0.641-5.835,2.178c-7.159,7.159-14.171,10.612-19.235,12.279C39.63,196.981,57.609,179.33,79.645,179.33z     M79.645,321.545l-17.331-17.331c0.506-1.934,0.783-3.95,0.783-6.019v-9.155c5.229,1.634,10.788,2.515,16.548,2.515    s11.319-0.881,16.548-2.515v9.155c0,2.069,0.277,4.086,0.783,6.019L79.645,321.545z M79.645,276.555    c-22.385,0-40.597-18.212-40.597-40.597v-1.554c5.981-1.374,14.849-4.567,24.1-12.007c3.273,3.088,7.951,6.876,13.908,10.125    c7.046,3.843,16.777,7.398,28.663,7.398c4.517,0,9.35-0.525,14.459-1.731C119.015,259.541,101.281,276.555,79.645,276.555z"></path>
</g>
</g><g><g><path d="M494.561,302.765l-41.973-20.987c-2.909-1.455-4.716-4.379-4.716-7.631v-10.629c9.825-8.723,16.032-21.435,16.032-35.575    v-8.537c0.173,0,0.343,0.005,0.516,0.005c4.142,0,7.5-3.358,7.5-7.5v-16.032c0-26.236-21.345-47.581-47.581-47.581h-16.032    c-26.236,0-47.581,21.345-47.581,47.581v16.032c0,4.142,3.358,7.5,7.5,7.5c0.062,0,0.242-0.002,0.516-0.013v8.545    c0,14.141,6.208,26.853,16.033,35.576v10.629c0,3.253-1.807,6.177-4.717,7.631c-3.705,1.852-5.207,6.357-3.354,10.062    c1.314,2.628,3.963,4.148,6.714,4.148c1.127,0,2.271-0.255,3.348-0.793c1.329-0.665,2.566-1.45,3.719-2.322l18.338,18.338v101.103    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5V311.21l18.337-18.338c1.154,0.873,2.39,1.658,3.719,2.322l40.615,20.308    l-12.319,12.319c-5.958,5.959-9.24,13.881-9.24,22.308v62.184c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-62.184    c0-4.42,1.721-8.576,4.847-11.702l11.669-11.669c0.354,1.357,0.548,2.772,0.548,4.224v81.331c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-81.331C512,318.956,505.318,308.144,494.561,302.765z M375.725,202.868v-6.99h0.001    c0-17.965,14.616-32.581,32.581-32.581h16.032c17.965,0,32.581,14.616,32.581,32.581v8.331    c-32.603-1.759-52.278-14.446-52.469-14.571c-1.269-0.846-2.717-1.26-4.158-1.26c-1.936,0-3.856,0.748-5.306,2.197    C387.811,197.751,380.78,201.205,375.725,202.868z M416.323,297.497l-17.331-17.331c0.506-1.934,0.783-3.95,0.783-6.019v-1.597    c5.156,1.919,10.731,2.973,16.548,2.973c5.817,0,11.392-1.054,16.548-2.973v1.597c0,2.069,0.276,4.085,0.783,6.019    L416.323,297.497z M416.323,260.524c-17.965,0-32.581-14.615-32.581-32.581v-12.091h0c5.253-2.099,11.373-5.436,17.601-10.742    c7.876,4.098,24.354,11.181,47.561,13.521v9.312C448.904,245.908,434.288,260.524,416.323,260.524z"></path>
</g>
</g></svg></span>
                  <p class="u-align-center u-text u-text-2"> Recurso Humano</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-24 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4b1b"></use></svg><svg class="u-svg-content" viewBox="0 0 512.001 512.001" x="0px" y="0px" id="svg-4b1b" style="enable-background:new 0 0 512.001 512.001;"><g><g><path d="M341.954,328.358c-12.131,0-22-8.542-22-19.041c0-10.5,9.869-19.042,22-19.042c12.131,0,22,8.542,22,19.042    c0,5.522,4.478,10,10,10c5.522,0,10-4.478,10-10c0-18.325-13.654-33.733-32-37.915v-5.201c0-5.522-4.478-10-10-10    c-5.522,0-10,4.478-10,10v5.201c-18.346,4.182-32,19.59-32,37.915c0,21.527,18.841,39.041,42,39.041c12.131,0,22,8.542,22,19.042    s-9.869,19.042-22,19.042c-12.131,0-22-8.542-22-19.042c0-5.522-4.478-10-10-10c-5.522,0-10,4.478-10,10    c0,18.325,13.654,33.733,32,37.915v4.32c0,5.522,4.478,10,10,10c5.522,0,10-4.478,10-10v-4.32c18.346-4.182,32-19.59,32-37.915    C383.954,345.872,365.113,328.358,341.954,328.358z"></path>
</g>
</g><g><g><path d="M451.482,268.876c-13.063-20.355-31.467-36.643-53.222-47.101c-4.979-2.394-10.954-0.298-13.346,4.68    c-2.393,4.978-0.298,10.952,4.68,13.345C427.505,258.024,452,296.963,452,339.001c0,17.988-4.434,35.827-12.821,51.591    c-2.594,4.875-0.745,10.931,4.131,13.525c1.496,0.796,3.104,1.174,4.688,1.174c3.578,0,7.039-1.926,8.837-5.305    C466.756,381.342,472,360.253,472,339.001C472,314.041,464.905,289.792,451.482,268.876z"></path>
</g>
</g><g><g><path d="M357.673,209.002L357,209.001c-5.522,0-10,4.477-10,10c0,5.523,4.478,10,10,10l0.579,0.001c0.016,0,0.031,0,0.048,0    c5.501,0,9.973-4.446,9.999-9.953C367.651,213.526,363.195,209.028,357.673,209.002z"></path>
</g>
</g><g><g><path d="M294.407,438.202c-37.91-18.225-62.405-57.164-62.405-99.201c0-17.988,4.434-35.827,12.821-51.591    c2.594-4.875,0.745-10.931-4.131-13.525c-4.874-2.594-10.932-0.745-13.525,4.131c-9.921,18.645-15.165,39.733-15.165,60.985    c0,24.96,7.095,49.208,20.518,70.125c13.063,20.355,31.467,36.643,53.222,47.102c1.397,0.672,2.873,0.989,4.326,0.989    c3.724,0,7.298-2.089,9.02-5.669C301.479,446.57,299.385,440.595,294.407,438.202z"></path>
</g>
</g><g><g><path d="M327.002,449.001l-0.579-0.002c-5.548-0.01-10.02,4.429-10.045,9.953c-0.026,5.523,4.432,10.021,9.954,10.047l0.67,0.002    c5.522,0,10-4.478,10-10C337.002,453.479,332.524,449.001,327.002,449.001z"></path>
</g>
</g><g><g><path d="M387.409,175.168c-1.217-2.9-2.708-5.633-4.443-8.168H409c25.364,0,46-20.636,46-46s-20.636-46-46-46h-80.08    c5.091-7.402,8.08-16.357,8.08-26c0-25.364-20.636-46-46-46H46C20.636,3,0,23.636,0,49s20.636,46,46,46h80.08    c-5.091,7.402-8.08,16.357-8.08,26s2.988,18.598,8.08,26H100c-25.364,0-46,20.636-46,46c0,14.567,6.814,27.566,17.415,36    C60.814,237.434,54,250.433,54,265s6.814,27.566,17.415,36C60.814,309.434,54,322.433,54,337c0,14.567,6.814,27.566,17.415,36    C60.814,381.434,54,394.433,54,409c0,25.364,20.636,46,46,46h117.85c31.046,33.207,75.212,54.001,124.151,54.001    c93.738,0,170-76.262,170-170C512.001,260.984,459.171,195.083,387.409,175.168z M409,95c14.337,0,26,11.664,26,26    s-11.663,26-26,26h-64H164c-14.337,0-26-11.664-26-26s11.663-26,26-26H409z M46,75c-14.337,0-26-11.664-26-26s11.663-26,26-26h245    c14.337,0,26,11.664,26,26s-11.663,26-26,26H46z M100,167h245c4.028,0,7.885,0.936,11.345,2.612    c-4.73-0.397-9.512-0.611-14.344-0.611c-46.945,0-89.505,19.129-120.299,49.999H100c-14.336,0-26-11.664-26-26S85.664,167,100,167    z M100,239h104.615c-11.352,15.553-20.129,33.095-25.703,52H100c-14.337,0-26-11.663-26-26C74,250.664,85.663,239,100,239z     M100,311h74.32c-1.517,9.113-2.319,18.464-2.319,28.001c0,8.146,0.589,16.156,1.702,23.999H100c-14.337,0-26-11.663-26-26    C74,322.663,85.663,311,100,311z M100,435c-14.337,0-26-11.663-26-26c0-14.337,11.663-26,26-26h77.786    c5.046,18.813,13.243,36.346,23.993,52H100z M342.001,489.001c-82.71,0-150-67.29-150-150s67.29-150,150-150s150,67.29,150,150    S424.711,489.001,342.001,489.001z"></path>
</g>
</g></svg></span>
                  <p class="u-align-center u-text u-text-3"> Inversiones</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-container-layout-4"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-23 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d100"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-d100" style="enable-background:new 0 0 512 512;"><g><g><path d="M506.552,317.933c-9.739-14.312-29.351-18.1-43.707-8.452l-65.34,43.728l-0.19-136.11l22.7,21.265    c4.827,4.521,11.121,7.009,17.729,7.009c0.012,0,0.026,0,0.039,0c7.134-0.01,14.022-3,18.898-8.205    c4.737-5.057,7.222-11.655,6.996-18.581c-0.226-6.926-3.136-13.349-8.193-18.086l-43.035-40.314    c-2.946-2.76-7.571-2.609-10.33,0.337c-2.759,2.946-2.608,7.57,0.337,10.33l43.035,40.314c2.208,2.068,3.478,4.872,3.577,7.895    c0.098,3.023-0.986,5.904-3.055,8.111c-2.16,2.306-5.09,3.578-8.252,3.582c-0.006,0-0.011,0-0.017,0    c-2.883,0-5.63-1.086-7.737-3.06c-0.001-0.001-0.001-0.001-0.001-0.001L259.124,67.616c-2.816-2.637-7.198-2.633-10.007,0.014    L78.679,228.188c-2.201,2.074-5.079,3.16-8.103,3.076c-3.024-0.09-5.831-1.353-7.905-3.556c-2.074-2.201-3.167-5.079-3.076-8.102    c0.09-3.024,1.353-5.831,3.554-7.905L246.326,39.143c4.342-4.091,11.154-4.101,15.507-0.021L369,139.514    c2.945,2.759,7.57,2.609,10.33-0.337c2.759-2.946,2.608-7.57-0.337-10.33L271.827,28.455c-9.973-9.344-25.576-9.323-35.523,0.049    l-58.639,55.24l-0.016-9.853c-0.004-3.106-1.218-6.024-3.417-8.216c-2.195-2.189-5.109-3.394-8.209-3.394    c-0.006,0-0.011,0-0.017,0l-41.947,0.059c-3.106,0.004-6.023,1.218-8.216,3.417c-2.192,2.199-3.398,5.12-3.393,8.227l0.116,71.087    l-59.439,55.993c-5.044,4.751-7.935,11.182-8.142,18.108c-0.207,6.926,2.296,13.518,7.047,18.56    c4.75,5.044,11.181,7.936,18.108,8.143c0.265,0.008,0.53,0.012,0.795,0.012c6.635,0,12.918-2.49,17.767-7.06l22.649-21.336    l0.09,64.291c-7.328-1.067-14.742-1.627-22.19-1.627H76.746v-4.382c0-14.711-11.969-26.68-26.68-26.68H26.68    C11.969,249.092,0,261.06,0,275.772V390.29c0,4.036,3.272,7.308,7.308,7.308s7.308-3.272,7.308-7.308V275.772    c0-6.652,5.412-12.064,12.064-12.064h23.385c6.652,0,12.064,5.412,12.064,12.064v11.69v149.796v11.575    c0,6.652-5.412,12.064-12.064,12.064H26.68c-6.652,0-12.064-5.412-12.064-12.064v-12.788c0-4.036-3.272-7.308-7.308-7.308    S0,432.009,0,436.045v12.788c0,14.711,11.969,26.68,26.68,26.68h23.385c14.711,0,26.68-11.968,26.68-26.68v-0.993l107.024,40.528    c0.198,0.075,0.399,0.141,0.603,0.198c4.653,1.314,9.304,1.973,13.896,1.973c2.484,0,4.951-0.193,7.393-0.579l157.281-22.672    c0.037-0.005,0.073-0.011,0.11-0.017c13.372-2.135,25.987-7.788,36.48-16.346c0.091-0.074,0.181-0.151,0.268-0.23l101.611-91.388    C513.244,348.802,515.453,331.015,506.552,317.933z M163.037,76.902l0.034,20.59l-35.912,33.83l-0.089-54.371L163.037,76.902z     M254.141,82.976l128.538,120.412l0.223,159.593l-20.691,13.848L340.3,375.6l-0.579-5.82    c-2.039-20.498-17.171-36.987-37.18-40.922l-0.132-94.945c-0.01-7.286-5.942-13.207-13.227-13.207c-0.006,0-0.011,0-0.018,0    l-69.654,0.098c-3.533,0.005-6.853,1.385-9.347,3.887c-2.495,2.501-3.866,5.825-3.861,9.357l0.116,82.781    c-13.797-3.154-26.971-8.363-39.288-15.568c-1.537-0.899-3.089-1.767-4.654-2.611c-0.61-0.329-1.23-0.638-1.845-0.959    c-0.952-0.497-1.902-0.997-2.864-1.474c-0.766-0.38-1.541-0.74-2.313-1.107c-0.819-0.389-1.637-0.782-2.462-1.157    c-0.84-0.381-1.687-0.744-2.533-1.11c-0.773-0.334-1.546-0.67-2.324-0.991c-0.87-0.359-1.745-0.704-2.621-1.047    c-0.777-0.304-1.555-0.606-2.336-0.898c-0.867-0.324-1.738-0.637-2.611-0.944c-0.819-0.289-1.639-0.571-2.463-0.846    c-0.836-0.279-1.674-0.552-2.516-0.817c-0.897-0.283-1.798-0.553-2.7-0.82c-0.775-0.228-1.549-0.456-2.328-0.672    c-1.017-0.283-2.039-0.548-3.062-0.81c-0.479-0.123-0.955-0.262-1.437-0.381l-0.113-80.878L254.141,82.976z M287.923,327.029    l-61.125-7.037l-5.759-0.663l-0.118-83.911l66.874-0.094L287.923,327.029z M491.673,348.41l-101.511,91.298    c-8.459,6.859-18.606,11.396-29.361,13.122l-157.213,22.662c-0.033,0.005-0.065,0.01-0.098,0.015l-0.109,0.017    c-4.763,0.754-9.723,0.436-14.744-0.942L76.746,432.21V294.77h12.505c10.645,0,21.218,1.229,31.514,3.616    c0.383,0.089,0.765,0.18,1.147,0.272c1.265,0.305,2.527,0.619,3.783,0.959c0.11,0.03,0.219,0.062,0.329,0.092    c1.259,0.344,2.513,0.707,3.763,1.086c0.224,0.068,0.449,0.135,0.672,0.204c1.33,0.411,2.654,0.84,3.971,1.29    c0.136,0.047,0.271,0.095,0.407,0.142c2.743,0.947,5.459,1.98,8.141,3.098c0.146,0.061,0.292,0.122,0.438,0.184    c1.337,0.562,2.666,1.143,3.986,1.747c0.035,0.016,0.071,0.033,0.106,0.05c1.276,0.586,2.543,1.194,3.802,1.819    c0.148,0.073,0.297,0.145,0.445,0.219c1.23,0.615,2.45,1.252,3.663,1.904c0.229,0.123,0.457,0.249,0.686,0.373    c1.224,0.667,2.441,1.347,3.646,2.052c17.391,10.173,36.323,16.762,56.271,19.585c0.063,0.009,0.125,0.017,0.188,0.024    l81.881,9.427c0.453,0.065,0.903,0.14,1.35,0.224c12.054,2.264,21.568,11.171,24.751,22.77c0.472,1.718,0.804,3.496,0.986,5.319    l0.325,3.27l-153.46-13.445c-4.018-0.351-7.566,2.622-7.918,6.642c-0.353,4.021,2.622,7.566,6.642,7.918l162.242,14.215    c0.039,0.003,0.077,0.002,0.115,0.005c0.038,0.003,0.075,0.009,0.114,0.012l30.597,1.717c0.137,0.008,0.273,0.011,0.409,0.011    c0.145,0,0.288-0.023,0.432-0.032c0.163-0.01,0.326-0.016,0.488-0.036c0.218-0.028,0.431-0.075,0.645-0.122    c0.153-0.034,0.307-0.059,0.457-0.103c0.234-0.067,0.459-0.158,0.686-0.249c0.122-0.049,0.248-0.086,0.368-0.142    c0.341-0.158,0.673-0.34,0.989-0.552l25.972-17.381c0.001-0.001,0.002-0.002,0.003-0.003l76.702-51.332    c7.717-5.187,18.251-3.152,23.482,4.536C499.249,333.181,498.062,342.736,491.673,348.41z"></path>
</g>
</g></svg></span>
                  <p class="u-align-center u-text u-text-4"> Finca Raiz</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-4" id="carousel_83f3">    
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
      <a name="servicios">
        <h2 class="u-align-center u-custom-font u-text u-text-font u-text-1"><b>Hacemos&nbsp; de su proyecto, el nuestro y&nbsp; así logramos un desarrollo eficaz y personalizado de soluciones estratégicas para el crecimiento de sus equipos y la organización.</b>
        </h2>
        <h3 class="u-align-center u-custom-font u-text u-text-font u-text-2"><b>&nbsp;Más de 10 años de experiencia laboral y académica, con vivencias de front and&nbsp; back del sector mipyme.</b>
        </h3>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h4 class="u-custom-font u-text u-text-font u-text-3"><b>SU EMPRESA</b>
                  </h4>
                  <ul class="u-text u-text-4">
                    <li><b>Constitución de&nbsp; empresas y sociedades, de acuerdo a los requerimientos de ley para iniciar operaciones.</b>
                    </li>
                    <li><b>Asistencia jurídica y laboral.</b>
                    </li>
                    <li><b>Cultura Organizacional</b>
                    </li>
                    <li><b><b>Planeación Estratégica.</b>
                        <br></b>
                    </li>
                    <li><b><b><b>Construcción de procesos y áreas de trabajo rentables.</b>
                          <br></b></b>
                    </li>
                  </ul>
                  <h4 class="u-text u-text-5"><b>ASESORÍA FINANCIERA&nbsp;</b>
                  </h4>
                  <ul class="u-text u-text-6">
                    <li><b>Planeación Financiera</b>
                    </li>
                    <li><b>Apertura de cuentas en Bancaria P. Jurídicas y P. Naturales Banca local e internacional.</b>
                    </li>
                    <li><b>Gestión de préstamos para empresas en bancos locales e internacionales.</b>
                    </li>
                    <li><b><b>Gestión de fideicomisos.</b>
                        <br></b>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h4 class="u-custom-font u-text u-text-font u-text-7"><b>CONTABILIDAD&nbsp;</b>
                  </h4>
                  <ul class="u-text u-text-8">
                    <li><b>ERP Contables,&nbsp; Tesorería, Nómina, Cartera, Inventarios y Facturación.</b>
                    </li>
                    <li><b>Estados Financieros.</b>
                    </li>
                    <li><b>Declaraciones de Renta y optimización de impuestos.</b>
                    </li>
                    <li><b><b>Auditorías financieras y contables.</b>
                        <br></b>
                    </li>
                    <li><b><b><b>Inventarios.</b></b></b>
                    </li>
                  </ul>
                  <h4 class="u-custom-font u-text u-text-font u-text-9"><b>TALENTO HUMANO&nbsp;</b>
                  </h4>
                  <ul class="u-text u-text-10">
                    <li><b>Selección de personal, con principios y valores.</b>
                    </li>
                    <li><b>Capacitación segunda lengua English</b>
                    </li>
                    <li><b>Capacitación Servicio al cliente</b>
                    </li>
                    <li><b><b>Clima organizacional</b>
                        <br></b>
                    </li>
                    <li><b><b><b>Sistema de seguridad y salud en el trabajo.</b>
                          </b></b>
                    </li>
                    <li><b><b><b><b>Cursos y talleres online o presenciales de formación personal.</b>
                            </b></b></b>
                    </li>
                  </ul>
                  <h4 class="u-custom-font u-text u-text-font u-text-11"><b></b><b>CALIDAD&nbsp;</b>
                  </h4>
                  <ul class="u-text u-text-12">
                    <li><b>Construcción de Procesos para el uso eficiente de los recursos Humano, Físico, &nbsp; Financieros y tecnológicos.</b>
                    </li>
                    <li><b>Gestión en procesos de calidad.</b>
                    </li>
                    <li><b>Auditorías de Gestión.</b>
                    </li>
                    <li><b><b>Sistema de Seguridad y Salud en el trabajo.</b>
                        <br></b>
                    </li>
                    <li><b><b><b>Ley de Protección de datos.</b>
                          <br></b></b>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <ul class="u-text u-text-13">
                    <li><b>Estadísticas vitales.</b>
                    </li>
                    <li><b>Registro de Marcas y Propiedad Intelectual</b>
                    </li>
                    <li><b>Responsabilidad social empresarial.</b>
                    </li>
                  </ul>
                  <h4 class="u-custom-font u-text u-text-font u-text-14"><b>MARKETING</b>
                  </h4>
                  <ul class="u-text u-text-15">
                    <li><b>Imagen Corporativa.</b>
                    </li>
                    <li><b>Estudios de mercados.</b>
                    </li>
                    <li><b>Marketing Digital.</b>
                    </li>
                    <li><b><b>Planificación publicitaria.</b>
                        <br></b>
                    </li>
                    <li><b><b><b>Gestión de Redes Sociales</b>
                          <br></b></b>
                    </li>
                    <li><b><b><b><b>Creación de contenidos.</b>
                            <br></b></b></b>
                    </li>
                    <li><b><b><b><b><b>Logotipo y Marcas.</b>
                              <br></b></b></b></b>
                    </li>
                    <li><b><b><b><b><b><b>Publicidad.</b>
                                <br></b></b></b></b></b>
                    </li>
                    <li><b><b><b><b><b><b><b>Innovación tecnológica.</b>
                                  <br></b></b></b></b></b></b>
                    </li>
                  </ul>
                  <h4 class="u-custom-font u-text u-text-font u-text-16"><b>NEGOCIOS INTERNACIONALES</b>
                  </h4>
                  <ul class="u-text u-text-17">
                    <li><b>Asesorías y manejo de carga: Importación y exportación con sus gestión documental y financiera.</b>
                    </li>
                  </ul>
                  <h4 class="u-custom-font u-text u-text-font u-text-18"><b></b><b>INVERSIONES</b>
                  </h4>
                  <ul class="u-text u-text-19">
                    <li><b>Asesoría y Portafolios de Inversión y mercado de capitales.</b>
                    </li>
                    <li><b>Fiducias y Pensiones voluntarias.</b>
                    </li>
                    <li><b>Seguros con ahorro.</b>
                    </li>
                    <li><b><b>Planes de Negocios.</b>
                        <br></b>
                    </li>
                    <li><b><b><b>Asesoramiento de inversión en Inmuebles y activos fijos,</b>
                          <br></b></b>
                    </li>
                    <li><b><b><b><b>Constitución de Fideicomisos.</b>
                            <br></b></b></b>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div> 
    </section>
  <section class="u-clearfix u-custom-color-2 u-section-5" id="sec-adfd">
    <a name="quienes">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-radius-15 u-shape u-shape-round u-white u-shape-1"></div>
        <h3 class="u-custom-font u-font-arial u-text u-text-custom-color-2 u-text-default u-text-1"><b>&#191;QUIENES SOMOS&#63;</b>
        </h3>
        <h5 class="u-custom-font u-font-arial u-text u-text-body-color u-text-2"><b></b><b><?php if ($vSom[1] != null) {
                                                                                              echo $vSom[1];
                                                                                            } else {
                                                                                              echo "NO EXISTE INFORMACIÓN";
                                                                                            }
                                                                                            ?></b>
          <br>
          <br>
          <br>
          <br>
        </h5>
      </div>
    </a>
  </section>
  <a name="contactenos" class="sirva" type="color" color="#ffffff" value="#ffffff">

    <section class="u-clearfix u-palette-5-dark-3 u-section-6" id="carousel_8927" type="color" color="#ffffff" value="#ffffff">

      <div class="u-align-left u-clearfix u-sheet u-sheet-1" type="color" color="#ffffff" value="#ffffff">
        <div type="color" color="#ffffff" value="#ffffff">

          <h4 class="u-custom-font u-font-arial u-text u-text-default u-text-1" type="color" color="#ffffff" value="#ffffff">

            Contáctanos</h4>
          <span type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-circle u-icon-1">
            <svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio=" slice" viewBox="0 0 512 512" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0290">
              </use>
              <a class="porfa" type="color" color="#ffffff" value="#ffffff" href="<?php echo $vFor[5] ?>">
                <path type="color" color="#ffffff" value="#ffffff" d="m160.007812 423h-70v-226h70zm6.984376-298.003906c0-22.628906-18.359376-40.996094-40.976563-40.996094-22.703125 0-41.015625 18.367188-41.015625 40.996094 0 22.636718 18.3125 41.003906 41.015625 41.003906 22.617187 0 40.976563-18.367188 40.976563-41.003906zm255.007812 173.667968c0-60.667968-12.816406-105.664062-83.6875-105.664062-34.054688 0-56.914062 17.03125-66.246094 34.742188h-.066406v-30.742188h-68v226h68v-112.210938c0-29.386718 7.480469-57.855468 43.90625-57.855468 35.929688 0 37.09375 33.605468 37.09375 59.722656v110.34375h69zm90 153.335938v-392c0-33.085938-26.914062-60-60-60h-392c-33.085938 0-60 26.914062-60 60v392c0 33.085938 26.914062 60 60 60h392c33.085938 0 60-26.914062 60-60zm-60-412c11.027344 0 20 8.972656 20 20v392c0 11.027344-8.972656 20-20 20h-392c-11.027344 0-20-8.972656-20-20v-392c0-11.027344 8.972656-20 20-20zm0 0">
                </path>
              </a>
            </svg>
          </span>
          <span type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-circle u-icon-2">
            <svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" type="color" color="#ffffff" value="#ffffff" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b5ae">
              </use>
            </svg>
          </span>
          <span span type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-circle u-icon-2">
            <svg type="color" color="#ffffff" value="#ffffff" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-b5ae" style="enable-background:new 0 0 512 512;">
              <g type="color" color="#ffffff" value="#ffffff">
                <g type="color" color="#ffffff" value="#ffffff">
                  <a class="porfa" type="color" color="#ffffff" value="#ffffff" href="<?php echo $vFor[4] ?>">
                    <path type="color" color="#ffffff" value="#ffffff" d="M452,0H60C26.916,0,0,26.916,0,60v392c0,33.084,26.916,60,60,60h392c33.084,0,60-26.916,60-60V60    C512,26.916,485.084,0,452,0z M472,452c0,11.028-8.972,20-20,20H338V309h61.79L410,247h-72v-43c0-16.975,13.025-30,30-30h41v-62    h-41c-50.923,0-91.978,41.25-91.978,92.174V247H216v62h60.022v163H60c-11.028,0-20-8.972-20-20V60c0-11.028,8.972-20,20-20h392    c11.028,0,20,8.972,20,20V452z" type="color" color="#ffffff" value="#ffffff">
                    </path>
                  </a>
                </g>
              </g>
            </svg>
          </span>
          <span class="u-icon u-icon-circle u-icon-3" type="color" color="#ffffff" value="#ffffff">
            <svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 496 496" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-eeaa">
                  <g>
                    <g>
                      <g>
                        <a class="porfa" type="color" color="#ffffff" value="#ffffff" href="<?php echo $vFor[6] ?>">
                          <path type="color" color="#ffffff" value="#ffffff" d="M365.008,0H130.992C57.536,0,0,57.536,0,130.992v234.016C0,438.464,57.536,496,130.992,496h234.016     C438.464,496,496,438.464,496,365.008V130.992C496,57.536,438.448,0,365.008,0z M464,365.008     c0,55.52-43.488,98.992-98.992,98.992H130.992C75.488,464,32,420.512,32,365.008V130.992C32,75.488,75.488,32,130.992,32h234.016     C420.528,32,464,75.488,464,130.992V365.008z"></path>
                          <path type="color" color="#ffffff" value="#ffffff" d="M403.984,126.64c-5.136-3.76-12.016-4.08-17.504-0.88c-5.472,3.216-17.6,4.8-27.328,6.08c-2.016,0.272-4,0.528-5.92,0.8     c-13.616-11.296-31.008-17.632-48.944-17.632c-40.4,0-73.552,31.264-75.904,70.592c-36.64-6.176-70.192-25.28-93.968-53.984     c-3.536-4.288-9.024-6.384-14.56-5.664c-5.504,0.768-10.208,4.336-12.432,9.424c-1.024,2.336-9.952,24.304-9.952,78.64     c0,47.056,37.136,81.632,62.608,99.824c-17.424,7.92-37.504,10.832-56.576,8.72c-7.456-0.8-14.432,3.584-16.896,10.608     c-2.464,7.04,0.256,14.848,6.56,18.832c30.08,18.976,64.848,29.008,100.56,29.008c114.688,0,184.096-90.096,186.672-178.928     c3.296-4.784,9.584-14.096,20.208-30.432c4.256-6.576,7.824-20.752,9.568-28.608C411.568,136.832,409.12,130.384,403.984,126.64z      M351.536,187.536c-1.968,2.72-3.04,6.016-3.04,9.376c0,63.152-48.016,152.096-154.752,152.096     c-9.648,0-19.216-0.88-28.592-2.608c12.512-4.736,24.336-11.344,35.2-19.712c4.352-3.344,6.672-8.72,6.16-14.176     c-0.512-5.456-3.792-10.288-8.704-12.768c-0.688-0.352-68.32-35.92-68.32-85.712c0-16.688,0.896-29.808,2.08-39.792     c31.408,27.04,71.376,43.216,113.44,45.296c0.32,0.016,0.656,0.032,0.96,0.016c9.312-0.272,16.16-7.104,16.16-16     c0-2.208-0.448-4.304-1.264-6.224c-0.4-2.4-0.608-4.816-0.608-7.232c0-23.76,19.744-43.088,44.032-43.088     c12.192,0,23.92,4.992,32.192,13.68c3.776,3.936,9.296,5.712,14.624,4.672c3.632-0.688,7.824-1.232,12.224-1.808     c1.568-0.208,3.152-0.416,4.768-0.64C356.08,181.216,351.744,187.248,351.536,187.536z"></path>
                        </a>
                      </g>
                    </g>
                  </g>
                </svg>
              </use>
            </svg>
          </span>
          <span class="u-icon u-icon-circle u-icon-4" type="color" color="#ffffff" value="#ffffff" type="color" color="#ffffff" value="#ffffff">

              <use type="color" color="#ffffff" value="#ffffff" xlink:href="#svg-bfb0">
                <svg type="color" color="#ffffff" value="#ffffff" class="u-svg-content" type="color" color="#ffffff" value="#ffffff" viewBox="" id="svg-bfb0">
                  <path type="color" color="#ffffff" value="#ffffff" d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path>
                  <a href="<?php echo $vFor[7] ?>">
                    <path type="color" color="#ffffff" value="#ffffff" d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0">
                    </path>
                  </a>
                  <path type="color" color="#ffffff" value="#ffffff" d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path>
                </svg>
              </use>
            </svg>
          </span>
          <p type="color" color="#ffffff" value="#ffffff" class="u-text u-text-default u-text-2">
            <span type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-5">
              <svg type="color" color="#ffffff" value="#ffffff" class="u-svg-content" viewBox="0 0 54.757 54.757" x="0px" y="0px" style="width: 1em; height: 1em;">
                <g>
                  <path type="color" color="#ffffff" value="#ffffff" d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
		s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z" type="color" color="#ffffff" value="#ffffff"></path>
                  <path type="color" color="#ffffff" value="#ffffff" d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
		L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
		C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
		C45.576,13.08,46.321,24.468,41.099,31.431z" type="color" color="#ffffff" value="#ffffff"></path>
                </g>
              </svg>
              <img type="color" color="#ffffff" value="#ffffff">
            </span>
            <b type="color" color="#ffffff" value="#ffffff">
              <a href="https://www.google.com.co/maps/search/Av+2+1-40+Ed.+Manhattan+–+Lleras+San+José+de+Cúcuta/@7.8983379,-72.50313,19z/data=!3m1!4b1?hl=es">
                JBL Consultoría e Inversiones
              </a>
            </b>
            <br type="color" color="#ffffff" value="#ffffff">
            <b type="color" color="#ffffff" value="#ffffff">
              <a href="https://www.google.com.co/maps/search/Av+2+1-40+Ed.+Manhattan+–+Lleras+San+José+de+Cúcuta/@7.8983379,-72.50313,19z/data=!3m1!4b1?hl=es">
              </a> <?php echo $vFor[1]; ?>
  </a>
  </b>
  </p>
  <?php echo  '<a href="https://api.whatsapp.com/send?phone=' . $vFor[2] . '" type="color" color="#ffffff" value="#ffffff" class="u-active-none u-btn u-btn-rectangle u-button-style  u-none u-radius-0 u-text-body-alt-color u-btn-1"><span class="u-icon u-icon-6"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
		V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
		C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path><path  type="color" color="#ffffff" value="#ffffff"d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S31.103,55,30,55z"></path><path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path><path type="color" color="#ffffff" value="#ffffff" d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path><path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path><path type="color" color="#ffffff" value="#ffffff" d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path><path type="color" color="#ffffff" value="#ffffff" d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path><path type="color" color="#ffffff" value="#ffffff" d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
</g></svg><img></span><b> ' . $vFor[2];
  '.</b> </a>'; ?>

  <?php echo  '<a <p  href="mailto:' . $vFor[3] . '" class="u-text u-text-default u-text-3"><span class="u-icon u-icon-7"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M55.014,45.389l-9.553-4.776C44.56,40.162,44,39.256,44,38.248v-3.381c0.229-0.28,0.47-0.599,0.719-0.951
	c1.239-1.75,2.232-3.698,2.954-5.799C49.084,27.47,50,26.075,50,24.5v-4c0-0.963-0.36-1.896-1-2.625v-5.319
	c0.056-0.55,0.276-3.824-2.092-6.525C44.854,3.688,41.521,2.5,37,2.5s-7.854,1.188-9.908,3.53c-1.435,1.637-1.918,3.481-2.064,4.805
	C23.314,9.949,21.294,9.5,19,9.5c-10.389,0-10.994,8.855-11,9v4.579c-0.648,0.706-1,1.521-1,2.33v3.454
	c0,1.079,0.483,2.085,1.311,2.765c0.825,3.11,2.854,5.46,3.644,6.285v2.743c0,0.787-0.428,1.509-1.171,1.915l-6.653,4.173
	C1.583,48.134,0,50.801,0,53.703V57.5h14h2h44v-4.043C60,50.019,58.089,46.927,55.014,45.389z M14,53.262V55.5H2v-1.797
	c0-2.17,1.184-4.164,3.141-5.233l6.652-4.173c1.333-0.727,2.161-2.121,2.161-3.641v-3.591l-0.318-0.297
	c-0.026-0.024-2.683-2.534-3.468-5.955l-0.091-0.396l-0.342-0.22C9.275,29.899,9,29.4,9,28.863v-3.454
	c0-0.36,0.245-0.788,0.671-1.174L10,23.938l-0.002-5.38C10.016,18.271,10.537,11.5,19,11.5c2.393,0,4.408,0.553,6,1.644v4.731
	c-0.64,0.729-1,1.662-1,2.625v4c0,0.304,0.035,0.603,0.101,0.893c0.027,0.116,0.081,0.222,0.118,0.334
	c0.055,0.168,0.099,0.341,0.176,0.5c0.001,0.002,0.002,0.003,0.003,0.005c0.256,0.528,0.629,1,1.099,1.377
	c0.005,0.019,0.011,0.036,0.016,0.054c0.06,0.229,0.123,0.457,0.191,0.68l0.081,0.261c0.014,0.046,0.031,0.093,0.046,0.139
	c0.035,0.108,0.069,0.215,0.105,0.321c0.06,0.175,0.123,0.356,0.196,0.553c0.031,0.082,0.065,0.156,0.097,0.237
	c0.082,0.209,0.164,0.411,0.25,0.611c0.021,0.048,0.039,0.1,0.06,0.147l0.056,0.126c0.026,0.058,0.053,0.11,0.079,0.167
	c0.098,0.214,0.194,0.421,0.294,0.621c0.016,0.032,0.031,0.067,0.047,0.099c0.063,0.125,0.126,0.243,0.189,0.363
	c0.108,0.206,0.214,0.4,0.32,0.588c0.052,0.092,0.103,0.182,0.154,0.269c0.144,0.246,0.281,0.472,0.414,0.682
	c0.029,0.045,0.057,0.092,0.085,0.135c0.242,0.375,0.452,0.679,0.626,0.916c0.046,0.063,0.086,0.117,0.125,0.17
	c0.022,0.029,0.052,0.071,0.071,0.097v3.309c0,0.968-0.528,1.856-1.377,2.32l-2.646,1.443l-0.461-0.041l-0.188,0.395l-5.626,3.069
	C15.801,46.924,14,49.958,14,53.262z M58,55.5H16v-2.238c0-2.571,1.402-4.934,3.659-6.164l8.921-4.866
	C30.073,41.417,31,39.854,31,38.155v-4.018v-0.001l-0.194-0.232l-0.038-0.045c-0.002-0.003-0.064-0.078-0.165-0.21
	c-0.006-0.008-0.012-0.016-0.019-0.024c-0.053-0.069-0.115-0.152-0.186-0.251c-0.001-0.002-0.002-0.003-0.003-0.005
	c-0.149-0.207-0.336-0.476-0.544-0.8c-0.005-0.007-0.009-0.015-0.014-0.022c-0.098-0.153-0.202-0.32-0.308-0.497
	c-0.008-0.013-0.016-0.026-0.024-0.04c-0.226-0.379-0.466-0.808-0.705-1.283c0,0-0.001-0.001-0.001-0.002
	c-0.127-0.255-0.254-0.523-0.378-0.802l0,0c-0.017-0.039-0.035-0.077-0.052-0.116h0c-0.055-0.125-0.11-0.256-0.166-0.391
	c-0.02-0.049-0.04-0.1-0.06-0.15c-0.052-0.131-0.105-0.263-0.161-0.414c-0.102-0.272-0.198-0.556-0.29-0.849l-0.055-0.178
	c-0.006-0.02-0.013-0.04-0.019-0.061c-0.094-0.316-0.184-0.639-0.26-0.971l-0.091-0.396l-0.341-0.22
	C26.346,25.803,26,25.176,26,24.5v-4c0-0.561,0.238-1.084,0.67-1.475L27,18.728V12.5v-0.354l-0.027-0.021
	c-0.034-0.722,0.009-2.935,1.623-4.776C30.253,5.458,33.081,4.5,37,4.5c3.905,0,6.727,0.951,8.386,2.828
	c1.947,2.201,1.625,5.017,1.623,5.041L47,18.728l0.33,0.298C47.762,19.416,48,19.939,48,20.5v4c0,0.873-0.572,1.637-1.422,1.899
	l-0.498,0.153l-0.16,0.495c-0.669,2.081-1.622,4.003-2.834,5.713c-0.297,0.421-0.586,0.794-0.837,1.079L42,34.123v4.125
	c0,1.77,0.983,3.361,2.566,4.153l9.553,4.776C56.513,48.374,58,50.78,58,53.457V55.5z"></path></svg><img></span><b>' . $vFor[3] . ' </b>  </p>  </a>'; ?>
  </div>

  </div>
  </section>
  </a>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5aab">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="https://nicepage.com/" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>
</body>

</html>