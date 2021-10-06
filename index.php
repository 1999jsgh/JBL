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
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body"><header class="u-clearfix u-header u-header" id="sec-dfa6"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
        <img style="width:90px; height:40px;" src="admin/ban/archivos/<?php if ($vBan['0'] != "") {
                                                                                  echo $vBan['3'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;" href="#servicios" >Servicios</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;" href="#quienes">&#191;Quienes Somos&#63;</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;" href="#contactenos">Contacto</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Servicios</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">&#191;Quienes Somos&#63;</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Contacto</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-shading" id="carousel_cc46" >
      <div class="container">
    <img style="width:1700px; height:570px; background-color:rgba(160,54,234,0.65)" src="admin/ban/archivos/<?php if ($vBan['0'] != "") {
                                                                                  echo $vBan['2'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">
      <div class="centered">
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-container-layout-1">
            <h1 class="centered"><b><?php echo $vBan[1];?></b>
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
                  <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-custom-font u-text u-text-1">PORTAFOLIO</h2>
                      <h4 class="u-custom-font u-font-arial u-text u-text-custom-color-2 u-text-2"><b><?php echo $vPor[1];?><span style="font-weight: 400;"></span></b>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20 u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-container-style u-image u-layout-cell">
                  <img  style="width:360px; height:800px;" src="admin/por/archivos/<?php if ($vPor['0'] != "") {
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
                  <img  style="width:500px; height:300px;" src="admin/por/archivos/<?php if ($vPor['0'] != "") {
                                                                                  echo $vPor['3'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">
                    <div class="u-container-layout u-container-layout-3"></div>
                  </div>
                  <div class="u-align-center u-container-style u-custom-color-2 u-layout-cell u-right-cell u-size-30 u-layout-cell-4">
                    <div class="u-container-layout u-valign-middle">
                      <p class="u-text u-text-3"><b><?php echo $vPor[2];?></b>
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
                <div class="u-container-layout"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-21 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52.966 52.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3b1d"></use></svg><svg class="u-svg-content" viewBox="0 0 52.966 52.966" x="0px" y="0px" id="svg-3b1d" style="enable-background:new 0 0 52.966 52.966;"><path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
	c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
	C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
	S32.459,40,21.983,40z"></path></svg></span>
                  <p class="u-align-center u-text u-text-1">Web and Mobile Development</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-21 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.998 511.998"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-25e9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-25e9" x="0px" y="0px" viewBox="0 0 511.998 511.998" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve" class="u-svg-content"><g><g><path d="M74.664,85.179c-17.673,0-32,14.327-32,32v85.333h21.333v-85.333c0-5.891,4.776-10.667,10.667-10.667h256V85.179H74.664z"></path>
</g>
</g><g><g><path d="M74.664,405.179c-5.891,0-10.667-4.776-10.667-10.667V287.845H42.664v106.667c0,17.673,14.327,32,32,32h106.667v-21.333    H74.664z"></path>
</g>
</g><g><g><path d="M338.206,432.688L79.155,173.637c-4.165-4.164-10.917-4.164-15.083,0L3.123,234.587c-4.164,4.165-4.164,10.917,0,15.083    L262.174,508.72c2,2.001,4.713,3.125,7.541,3.125c2.829-0.001,5.541-1.125,7.541-3.125l60.949-60.949    C342.37,443.605,342.37,436.853,338.206,432.688z M269.715,486.096L25.747,242.128l45.867-45.867L315.582,440.23L269.715,486.096z    "></path>
</g>
</g><g><g><path d="M469.331,405.179h-160v21.333h117.333v53.333c0,5.891,4.776,10.667,10.667,10.667h32    c23.564,0,42.667-19.102,42.667-42.667C511.998,424.281,492.895,405.179,469.331,405.179z M469.331,469.179h-21.333v-42.667    h21.333c11.782,0,21.333,9.551,21.333,21.333C490.664,459.628,481.113,469.179,469.331,469.179z"></path>
</g>
</g><g><g><path d="M469.331,85.179h-53.333v21.333h53.333c11.782,0,21.333,9.551,21.333,21.333v320h21.333v-320    C511.998,104.281,492.895,85.179,469.331,85.179z"></path>
</g>
</g><g><g><rect x="164.042" y="314.513" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -175.2621 227.2397)" width="45.259" height="21.333"></rect>
</g>
</g><g><g><rect x="121.376" y="271.846" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -157.5885 184.5736)" width="45.259" height="21.333"></rect>
</g>
</g><g><g><rect x="206.686" y="357.18" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -192.9419 269.8904)" width="45.259" height="21.333"></rect>
</g>
</g><g><g><rect x="249.372" y="399.868" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -210.6241 312.5771)" width="45.259" height="21.333"></rect>
</g>
</g><g><g><rect x="78.679" y="229.18" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -139.9243 141.885)" width="45.259" height="21.333"></rect>
</g>
</g><g><g><path d="M460.094,23.824L445.352,9.083c-12.473-11.907-32.103-11.907-44.576,0L238.579,171.28c-4.164,4.165-4.164,10.917,0,15.083    l44.235,44.235c1.995,2.008,4.711,3.133,7.541,3.125c2.829-0.001,5.541-1.125,7.541-3.125L460.094,68.4    c0.005-0.005,0.01-0.01,0.015-0.015C472.41,56.076,472.403,36.125,460.094,23.824z M445.022,53.307L290.355,207.973    l-29.152-29.152L415.87,24.165c4.028-3.849,10.372-3.849,14.4,0l14.752,14.731c0.001,0.002,0.003,0.003,0.005,0.005    C449.003,42.88,449.001,49.33,445.022,53.307z"></path>
</g>
</g><g><g><path d="M286.931,212.944l-46.037,15.371l15.371-46.112l-20.267-6.752l-22.123,66.357c-0.362,1.088-0.547,2.227-0.547,3.373    c0.001,5.891,4.778,10.666,10.669,10.664c1.129,0.004,2.252-0.169,3.328-0.512l66.357-22.123L286.931,212.944z"></path>
</g>
</g><g><g><rect x="390.275" y="36.943" transform="matrix(0.7071 -0.7071 0.7071 0.7071 69.1923 303.4905)" width="21.333" height="62.56"></rect>
</g>
</g><g><g><rect x="223.998" y="234.512" width="160" height="21.333"></rect>
</g>
</g><g><g><rect x="405.331" y="234.512" width="21.333" height="21.333"></rect>
</g>
</g><g><g><rect x="447.998" y="234.512" width="21.333" height="21.333"></rect>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <p class="u-align-center u-text u-text-2">Web and Application Design</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-21 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 295.238 295.238"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5db9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-5db9" x="0px" y="0px" viewBox="0 0 295.238 295.238" style="enable-background:new 0 0 295.238 295.238;" xml:space="preserve" class="u-svg-content"><g><g><g><path d="M277.462,0.09l-27.681,20.72l-27.838,64.905h-22.386l-8.79-19.048h5.743c10.505,0,19.048-8.452,19.048-18.957V28.571     h9.524V0H196.51v28.571h9.524V47.71c0,5.248-4.271,9.433-9.524,9.433h-10.138L174.2,30.81l14.581-7.267L141.038,3.095     l-11.224,39.281c-0.305-23.371-19.386-42.29-42.829-42.29c-23.633,0-42.857,19.224-42.857,42.857     c0,14.281,7.233,27.676,19.048,35.595v7.176H51.643L50.9,89.619c-2.314,12.005-2.529,24.343-0.638,36.648l-32.486,57.905     l35.876,8.195v60.014h47.619v42.857h114.286v-66.357c33.333-23.581,52.371-61.495,52.343-101.943l0.01-17.371     c0-6.548-0.605-13.276-1.824-19.905l-0.705-3.948h-9.348l21.429-51.338V0.09z M206.033,19.138V9.614h9.524v9.524H206.033z      M189.067,85.714h-18.062l-8.657-19.048h17.929L189.067,85.714z M147.219,16.119l18.929,8.11l-4.467,2.19l14.2,30.724h-17.862     l-11.605-25.471l-4.262,2.152L147.219,16.119z M160.543,85.715h-21.176v-9.433c0-5.252,4.271-9.614,9.524-9.614h2.995v-0.001     L160.543,85.715z M141.843,44.652l5.776,12.71c-9.905,0.667-17.776,8.848-17.776,18.919v9.433h-19.048v-7.176     c9.529-6.386,15.995-16.352,18.176-27.452L141.843,44.652z M53.653,42.948c0-18.376,14.957-33.333,33.333-33.333     c18.376,0,33.333,14.957,33.333,33.333c0,11.829-6.39,22.881-16.671,28.838l-2.376,1.371v12.557h-9.524V56.352     c5.529-1.971,9.524-7.21,9.524-13.41c0-7.876-6.41-14.286-14.286-14.286c-7.876,0-14.286,6.411-14.286,14.287     c0,6.2,3.995,11.438,9.524,13.41v29.362H72.7V73.157l-2.376-1.376C60.043,65.824,53.653,54.776,53.653,42.948z M86.986,47.71     c-2.629,0-4.762-2.139-4.762-4.762c0-2.629,2.133-4.762,4.762-4.762c2.629,0,4.762,2.133,4.762,4.762S89.615,47.71,86.986,47.71z      M257.366,95.239c0.691,4.761,1.039,9.59,1.039,14.285l0.01,17.405c0.029,38.148-18.795,73.871-50.286,95.552l-2.095,1.429     v61.805h-95.238v-42.857h-47.62v-58.086l-30.862-7.043l27.876-49.7l-0.271-1.7c-1.771-10.419-1.871-21.567-0.333-31.09h3.59     h47.619H257.366z M245.714,85.714H232.3l23.738-55.343l10.557,5.257L245.714,85.714z M267.938,25.714l-5.267-2.633l5.267-3.943     V25.714z"></path><path d="M96.51,123.81c-7.876,0-14.286-4.762-14.286-14.286H72.7c0,14.286,10.681,23.81,23.81,23.81     c13.129,0,23.81-9.524,23.81-23.81h-9.524C110.795,119.048,104.386,123.81,96.51,123.81z"></path>
</g>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <p class="u-align-center u-text u-text-3">User Interface</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-container-layout-4"><span class="u-custom-color-2 u-icon u-icon-circle u-spacing-21 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cc02"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-cc02" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="u-svg-content"><g><g><path d="M366,396c-5.52,0-10,4.48-10,10c0,5.52,4.48,10,10,10c5.52,0,10-4.48,10-10C376,400.48,371.52,396,366,396z"></path>
</g>
</g><g><g><path d="M390.622,363.663l-47.53-15.84l-17.063-34.127c15.372-15.646,26.045-36.348,29.644-57.941L357.801,243H376    c16.542,0,30-13.458,30-30v-63C406,67.29,338.71,0,256,0c-82.922,0-150,67.097-150,150v63c0,13.036,8.361,24.152,20,28.28V253    c0,16.542,13.458,30,30,30h8.782c4.335,9.417,9.946,18.139,16.774,25.974c1.416,1.628,2.893,3.206,4.406,4.741l-17.054,34.108    l-47.531,15.841C66.112,382.092,26,440.271,26,502c0,5.523,4.477,10,10,10h440c5.522,0,10-4.477,10-10    C486,440.271,445.889,382.092,390.622,363.663z M386,213c0,5.514-4.486,10-10,10h-15.262c2.542-19.69,4.236-40.643,4.917-61.28    c0.02-0.582,0.036-1.148,0.054-1.72H386V213z M136,223c-5.514,0-10-4.486-10-10v-53h20.298c0.033,1.043,0.068,2.091,0.107,3.146    c0.001,0.036,0.003,0.071,0.004,0.107c0,0.003,0,0.006,0,0.009c0.7,20.072,2.372,40.481,4.856,59.737H136V223z M156,263    c-5.514,0-10-4.486-10-10v-10h8.198l2.128,12.759c0.406,2.425,0.905,4.841,1.482,7.241H156z M146.017,140H126.38    C131.445,72.979,187.377,20,256,20c68.318,0,124.496,52.972,129.619,120h-19.635c-0.72-55.227-45.693-100-101.033-100h-17.9    C191.712,40,146.736,84.773,146.017,140z M247.05,60h17.9c44.809,0,81.076,36.651,81.05,81.41c0,3.147-0.025,5.887-0.078,8.38    c0,0.032-0.001,0.065-0.001,0.098l-12.508-1.787c-33.98-4.852-66.064-20.894-90.342-45.172C241.195,101.054,238.652,100,236,100    c-26.856,0-52.564,12.236-69.558,32.908C170.63,92.189,205.053,60,247.05,60z M178.54,263c-5.006-16.653-10.734-65.653-12-97.053    l13.459-17.946c12.361-16.476,31.592-26.713,52.049-27.888c26.917,25.616,61.739,42.532,98.537,47.786l14.722,2.104    c-0.984,20.885-2.995,41.843-5.876,61.118c-0.001,0.006-0.002,0.013-0.003,0.02c-0.916,6.197-1.638,10.185-3.482,21.324    c-5.296,31.765-28.998,60.49-60.287,68.313c-12.877,3.215-26.443,3.214-39.313,0c-19.537-4.884-37.451-18.402-49.012-37.778    h20.386c4.128,11.639,15.243,20,28.28,20h20c16.575,0,30-13.424,30-30c0-16.542-13.458-30-30-30h-20    c-13.327,0-24.278,8.608-28.297,20H178.54z M235.159,341.016c6.859,1.445,13.852,2.184,20.841,2.184    c5.471,0,10.943-0.458,16.353-1.346l-17.67,18.687L235.159,341.016z M240.935,375.079l-31.718,33.542    c-8.732-16.714-16.235-34.109-22.389-51.917l11.911-23.822L240.935,375.079z M311.566,329.494l13.604,27.209    c-6.164,17.838-13.669,35.239-22.392,51.933l-33.948-33.948L311.566,329.494z M226,273c0-5.521,4.478-10,10-10h20    c5.514,0,10,4.486,10,10c0,5.522-4.479,10-10,10h-20C230.486,283,226,278.514,226,273z M46.4,492    c3.963-49.539,36.932-94.567,81.302-109.363l42.094-14.028c7.712,21.325,17.266,42.052,28.463,61.74    c0.019,0.034,0.037,0.068,0.056,0.101c0,0.001,0.001,0.001,0.001,0.002c8.181,14.389,17.389,28.45,27.372,41.799L237.99,492H46.4z     M256,483.086l-13.562-21.773c-0.152-0.244-0.314-0.481-0.486-0.711c-8.098-10.802-15.652-22.099-22.532-33.662l35.663-37.714    l37.578,37.578c-6.926,11.647-14.506,22.991-22.611,33.796C269.56,461.253,270.255,460.224,256,483.086z M274.01,492    l12.301-19.748c10.027-13.4,19.301-27.574,27.564-42.132c0.05-0.088,0.097-0.178,0.147-0.266c0.006-0.011,0.012-0.021,0.018-0.032    c11.055-19.5,20.509-40.047,28.164-61.213l42.093,14.028c44.371,14.796,77.34,59.824,81.303,109.363H274.01z"></path>
</g>
</g><g><g><path d="M435.546,451.531c-6.683-13.377-16.472-25.261-28.309-34.367c-4.378-3.369-10.656-2.55-14.023,1.828    c-3.368,4.378-2.549,10.656,1.828,14.024c9.454,7.273,17.272,16.766,22.611,27.453c2.473,4.949,8.483,6.941,13.415,4.477    C436.008,462.478,438.013,456.472,435.546,451.531z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <p class="u-align-center u-text u-text-4">Professional Consulting</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-4" id="carousel_83f3">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-custom-font u-font-arial u-text u-text-1"><b>Hacemos&nbsp; de su proyecto, el nuestro y&nbsp; así logramos un desarrollo eficaz y personalizado de soluciones estratégicas para el crecimiento de sus equipos y la organización.</b>
        </h2>
        <h3 class="u-align-center u-custom-font u-font-arial u-text u-text-2"><b>&nbsp;Más de 10 años de experiencia laboral y académica, con vivencias de front and&nbsp; back del sector mipyme.</b>
        </h3>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <a name="servicios">
              <div class="u-container-layout u-similar-container u-container-layout-1" >
                <ul class="u-custom-font u-font-arial u-text u-text-3">
                  <li ><b></b><b >&nbsp;Constitución de&nbsp; empresas y sociedades, de acuerdo a los requerimientos de ley para iniciar operaciones.<br></b>
                  </li>
                  <li><b><b>Asistencia jurídica</b>
                      <br></b>
                  </li>
                  <li><b><b><b>Asistencia laboral&nbsp;</b>
                        <br></b></b>
                  </li>
                  <li><b><b><b><b>Apertura de cuentas jurídicas y naturales, locales e internacionales</b>
                          <br></b></b></b>
                  </li>
                  <li><b><b><b><b><b>Servicios Financieros</b>
                            <br></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b>Cuentas Jurídicas</b>
                              <br></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b>Gestión de cuentas de ahorro y corrientes en banca internacional</b>
                                <br></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b>Gestión de préstamos para empresas en banca internacional</b>
                                  <br></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b>Gestión de cuentas de ahorro y corrientes en banca local</b>
                                    <br></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b>Gestión de fideicomisos</b>
                                      <br></b></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b><b>Estructura de financiamiento internacional</b>
                                        <br></b></b></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b><b><b>Financiamientos en banca local, internacional y fondos internacionales</b>
                                          <br></b></b></b></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b><b><b><b>Planes de Negocios</b>
                                            <br></b></b></b></b></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b><b><b><b><b>Contabilidad</b>
                                              <br></b></b></b></b></b></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b><b><b><b><b><b>Declaraciones de Renta y optimización de impuestos</b>
                                                <br></b></b></b></b></b></b></b></b></b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b><b><b><b><b><b><b><b><b><b>Auditorías de Gestión</b>
                                                  <br></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b>
                  </li>
                </ul>
              </div>
            </a>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <ul class="u-custom-font u-font-arial u-text u-text-4">
                  <li><b><b>Inventarios</b>
                      <br></b>
                  </li>
                  <li><b><b><b>Estados Financieros</b>
                        <br></b></b>
                  </li>
                  <li><b><b><b><b>Estudios de Mercado</b>
                          <br></b></b></b>
                  </li>
                  <li><b><b><b><b><b>Talento humano</b></b></b></b></b>
                  </li>
                  <li><b>Declaraciones de Renta y optimización de impuestos</b>
                    <br>
                  </li>
                  <li><b>Asesoramiento inmobiliario: Compra, venta y alquiler.</b>
                  </li>
                  <li><b>Asesorías y manejo de carga: Importación y exportación</b>
                  </li>
                  <li><b>Registro de Marcas</b>
                  </li>
                  <li><b><b>Propiedad Intelectual</b></b>
                  </li>
                  <li><b><b><b>Asesoría y Portafolios de Inversión</b></b></b>
                  </li>
                  <li><b><b><b><b>Constitución de Fideicomisos</b></b></b></b>
                  </li>
                  <li><b><b><b><b><b>Seguros</b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b>Estadísticas vitales</b></b></b></b></b></b>
                  </li>
                  <li><b><b><b><b><b><b><b>Responsabilidad social empresarial</b></b></b></b></b></b></b>
                  </li>
                </ul>
                <h4 class="u-custom-font u-font-arial u-text u-text-5"><b>Selección y Capacitación</b>
                </h4>
                <ul class="u-custom-font u-font-arial u-text u-text-6">
                  <li><b>Selección de personal, con principios y valores.</b>
                  </li>
                  <li><b>Capacitación segunda lengua English</b>
                  </li>
                  <li><b>Gestión en procesos de calidad<br></b>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <ul class="u-custom-font u-font-arial u-text u-text-7">
                  <li><b>Servicio al cliente</b>
                  </li>
                  <li><b>Clima organizacional</b>
                  </li>
                  <li><b>Sistema de seguridad y salud en el trabajo.</b>
                  </li>
                  <li><b><b>Cursos y talleres online o presenciales</b>
                      <br></b>
                  </li>
                </ul>
                <h4 class="u-custom-font u-font-arial u-text u-text-8"><b>Imagen Corporativa</b>
                </h4>
                <ul class="u-custom-font u-font-arial u-text u-text-9">
                  <li><b>Logotipo y Marcas<br></b>
                  </li>
                  <li><b>Publicidad</b>
                  </li>
                  <li><b>Cultura Organizacional</b>
                  </li>
                  <li><b><b>Innovación tecnológica</b></b>
                  </li>
                </ul>
                <h4 class="u-custom-font u-font-arial u-text u-text-10"><b>Marketing</b>
                </h4>
                <ul class="u-custom-font u-font-arial u-text u-text-11">
                  <li><b>Estudios de mercado</b>
                  </li>
                  <li><b>Planificación publicitaria</b>
                  </li>
                  <li><b>Gestión de Redes Sociales</b>
                  </li>
                  <li><b><b>Creación de contenidos</b>
                      <br></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-2 u-section-5" id="sec-adfd">
      <a name="quienes">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-radius-15 u-shape u-shape-round u-white u-shape-1"></div>
        <h3 class="u-custom-font u-font-arial u-text u-text-custom-color-2 u-text-default u-text-1"><b>&#191;QUIENES SOMOS&#63;</b>
        </h3>
        <h5 class="u-custom-font u-font-arial u-text u-text-body-color u-text-2"><b></b><b><?php if($vSom[1] != null)
        {
          echo $vSom[1];
        }else {
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
    <a name="contactenos" class="sirva"  type="color" color="#ffffff" value="#ffffff">

    <section class="u-clearfix u-palette-5-dark-3 u-section-6" id="carousel_8927" type="color" color="#ffffff" value="#ffffff">

      <div class="u-align-left u-clearfix u-sheet u-sheet-1" type="color" color="#ffffff" value="#ffffff">
        <div type="color"  color="#ffffff" value="#ffffff">

        <h4 class="u-custom-font u-font-arial u-text u-text-default u-text-1" type="color" color="#ffffff" value="#ffffff">
  
          Contáctanos</h4><span  type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-circle u-icon-1"><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio=" slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0290"></use></svg><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-content" viewBox="0 0 512 512" id="svg-0290"><path type="color" color="#ffffff" value="#ffffff" d="m160.007812 423h-70v-226h70zm6.984376-298.003906c0-22.628906-18.359376-40.996094-40.976563-40.996094-22.703125 0-41.015625 18.367188-41.015625 40.996094 0 22.636718 18.3125 41.003906 41.015625 41.003906 22.617187 0 40.976563-18.367188 40.976563-41.003906zm255.007812 173.667968c0-60.667968-12.816406-105.664062-83.6875-105.664062-34.054688 0-56.914062 17.03125-66.246094 34.742188h-.066406v-30.742188h-68v226h68v-112.210938c0-29.386718 7.480469-57.855468 43.90625-57.855468 35.929688 0 37.09375 33.605468 37.09375 59.722656v110.34375h69zm90 153.335938v-392c0-33.085938-26.914062-60-60-60h-392c-33.085938 0-60 26.914062-60 60v392c0 33.085938 26.914062 60 60 60h392c33.085938 0 60-26.914062 60-60zm-60-412c11.027344 0 20 8.972656 20 20v392c0 11.027344-8.972656 20-20 20h-392c-11.027344 0-20-8.972656-20-20v-392c0-11.027344 8.972656-20 20-20zm0 0"></path></svg></span><span type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-circle u-icon-2"><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" type="color" color="#ffffff" value="#ffffff" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b5ae"></use></svg><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-b5ae" style="enable-background:new 0 0 512 512;"><g type="color" color="#ffffff" value="#ffffff"><g type="color" color="#ffffff" value="#ffffff"><a class="porfa" type="color" color="#ffffff" value="#ffffff" href="https://www.facebook.com/profile.php?id=100015143491500"><path type="color" color="#ffffff" value="#ffffff" d="M452,0H60C26.916,0,0,26.916,0,60v392c0,33.084,26.916,60,60,60h392c33.084,0,60-26.916,60-60V60    C512,26.916,485.084,0,452,0z M472,452c0,11.028-8.972,20-20,20H338V309h61.79L410,247h-72v-43c0-16.975,13.025-30,30-30h41v-62    h-41c-50.923,0-91.978,41.25-91.978,92.174V247H216v62h60.022v163H60c-11.028,0-20-8.972-20-20V60c0-11.028,8.972-20,20-20h392    c11.028,0,20,8.972,20,20V452z" type="color" color="#ffffff" value="#ffffff"></a></path>
</g>
</g></svg></span><span class="u-icon u-icon-circle u-icon-3" type="color" color="#ffffff" value="#ffffff"><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 496 496" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-eeaa"></use></svg><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-content" viewBox="0 0 496 496" x="0px" y="0px" id="svg-eeaa" style="enable-background:new 0 0 496 496;"><g><g><g><path type="color" color="#ffffff" value="#ffffff" d="M365.008,0H130.992C57.536,0,0,57.536,0,130.992v234.016C0,438.464,57.536,496,130.992,496h234.016     C438.464,496,496,438.464,496,365.008V130.992C496,57.536,438.448,0,365.008,0z M464,365.008     c0,55.52-43.488,98.992-98.992,98.992H130.992C75.488,464,32,420.512,32,365.008V130.992C32,75.488,75.488,32,130.992,32h234.016     C420.528,32,464,75.488,464,130.992V365.008z"></path><path type="color" color="#ffffff" value="#ffffff" d="M403.984,126.64c-5.136-3.76-12.016-4.08-17.504-0.88c-5.472,3.216-17.6,4.8-27.328,6.08c-2.016,0.272-4,0.528-5.92,0.8     c-13.616-11.296-31.008-17.632-48.944-17.632c-40.4,0-73.552,31.264-75.904,70.592c-36.64-6.176-70.192-25.28-93.968-53.984     c-3.536-4.288-9.024-6.384-14.56-5.664c-5.504,0.768-10.208,4.336-12.432,9.424c-1.024,2.336-9.952,24.304-9.952,78.64     c0,47.056,37.136,81.632,62.608,99.824c-17.424,7.92-37.504,10.832-56.576,8.72c-7.456-0.8-14.432,3.584-16.896,10.608     c-2.464,7.04,0.256,14.848,6.56,18.832c30.08,18.976,64.848,29.008,100.56,29.008c114.688,0,184.096-90.096,186.672-178.928     c3.296-4.784,9.584-14.096,20.208-30.432c4.256-6.576,7.824-20.752,9.568-28.608C411.568,136.832,409.12,130.384,403.984,126.64z      M351.536,187.536c-1.968,2.72-3.04,6.016-3.04,9.376c0,63.152-48.016,152.096-154.752,152.096     c-9.648,0-19.216-0.88-28.592-2.608c12.512-4.736,24.336-11.344,35.2-19.712c4.352-3.344,6.672-8.72,6.16-14.176     c-0.512-5.456-3.792-10.288-8.704-12.768c-0.688-0.352-68.32-35.92-68.32-85.712c0-16.688,0.896-29.808,2.08-39.792     c31.408,27.04,71.376,43.216,113.44,45.296c0.32,0.016,0.656,0.032,0.96,0.016c9.312-0.272,16.16-7.104,16.16-16     c0-2.208-0.448-4.304-1.264-6.224c-0.4-2.4-0.608-4.816-0.608-7.232c0-23.76,19.744-43.088,44.032-43.088     c12.192,0,23.92,4.992,32.192,13.68c3.776,3.936,9.296,5.712,14.624,4.672c3.632-0.688,7.824-1.232,12.224-1.808     c1.568-0.208,3.152-0.416,4.768-0.64C356.08,181.216,351.744,187.248,351.536,187.536z"></path>
</g>
</g>
</g></svg></span><span class="u-icon u-icon-circle u-icon-4" type="color" color="#ffffff" value="#ffffff" type="color" color="#ffffff" value="#ffffff"><svg type="color" color="#ffffff" value="#ffffff" class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.00096 512.00096"><use type="color" color="#ffffff" value="#ffffff" xlink:href="#svg-bfb0"></use></svg><svg  type="color" color="#ffffff" value="#ffffff" class="u-svg-content"  type="color" color="#ffffff" value="#ffffff" viewBox="" id="svg-bfb0"><path type="color" color="#ffffff" value="#ffffff" d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path><path type="color" color="#ffffff" value="#ffffff" d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"></path><path  type="color" color="#ffffff" value="#ffffff" d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path></svg></span>
        <p type="color" color="#ffffff" value="#ffffff" class="u-text u-text-default u-text-2"><span type="color" color="#ffffff" value="#ffffff" class="u-icon u-icon-5"><svg  type="color" color="#ffffff" value="#ffffff" class="u-svg-content" viewBox="0 0 54.757 54.757" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path  type="color" color="#ffffff" value="#ffffff" d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
		s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z" type="color" color="#ffffff" value="#ffffff"></path><path  type="color" color="#ffffff" value="#ffffff" d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
		L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
		C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
		C45.576,13.08,46.321,24.468,41.099,31.431z" type="color" color="#ffffff" value="#ffffff"></path>
</g></svg><img type="color" color="#ffffff" value="#ffffff"></span><b  type="color" color="#ffffff" value="#ffffff"><a href="https://www.google.com.co/maps/search/Av+2+1-40+Ed.+Manhattan+–+Lleras+San+José+de+Cúcuta/@7.8983379,-72.50313,19z/data=!3m1!4b1?hl=es" >JBL Consultoría e Inversiones</a></b>
          <br  type="color" color="#ffffff" value="#ffffff"><b type="color" color="#ffffff" value="#ffffff"><a href="https://www.google.com.co/maps/search/Av+2+1-40+Ed.+Manhattan+–+Lleras+San+José+de+Cúcuta/@7.8983379,-72.50313,19z/data=!3m1!4b1?hl=es"></a>  <?php echo $vFor[1];?></a></b>
        </p>
        <?php echo  '<a href="https://api.whatsapp.com/send?phone='.$vFor[2].'" type="color" color="#ffffff" value="#ffffff" class="u-active-none u-btn u-btn-rectangle u-button-style  u-none u-radius-0 u-text-body-alt-color u-btn-1"><span class="u-icon u-icon-6"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
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
</g></svg><img></span><b> '.$vFor[2];'.</b> </a>';?>
       
       <?php echo  '<a <p  href="mailto:'.$vFor[3].'" class="u-text u-text-default u-text-3"><span class="u-icon u-icon-7"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M55.014,45.389l-9.553-4.776C44.56,40.162,44,39.256,44,38.248v-3.381c0.229-0.28,0.47-0.599,0.719-0.951
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
	c0,1.77,0.983,3.361,2.566,4.153l9.553,4.776C56.513,48.374,58,50.78,58,53.457V55.5z"></path></svg><img></span><b>'.$vFor[3].' </b>  </p>  </a>';?> 
      </div>

      </div>
    </section>
  </a>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5aab"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>
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