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
$page_lang = "RU";
$QUERY=$_SERVER["QUERY_STRING"];


?>






<html lang="ru">

<head>
    <style id="ot-custom-css">
        #onetrust-consent-sdk,
        #onetrust-consent-sdk * {
            filter: none;
        }

        #ot-pc-lst.ot-hide~.ot-pc-footer button {
            opacity: 0.01;
            height: 1px !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden !important;
        }

        #ot-pc-lst.ot-hide~.ot-pc-footer {
            position: relative !important;
        }

        .ot-sdk-row.ot-cat-grp .save-preference-btn-handler {
            margin-right: 0 !important;
        }
    </style>
    <title>
    «Нефтяной концерн ORLEN»
    открывает новую платформу для граждан Литвы, Латвии и Эстонии.
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="shortcut icon" href="./pre-land/m19705469.png">
    <meta name="Keywords" content="biznes,technologia,gospodarka,pieniądze">
    <meta name="news_keywords" content="biznes,technologia,gospodarka,pieniądze">
    <link rel="stylesheet" href="./pre-land/style-mobile-min.css.cssgz.css">
    <link rel="stylesheet" href="./pre-land/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css">
        .banLabel {
            text-transform: uppercase;
            margin-top: 6px;
            font: normal 10px Arial, sans-serif;
            padding-bottom: 2px;
            text-align: left;
            color: #999;
        }

        iframe[name="__cmpLocator"] {
            display: none !important;
        }

        body.screeningLabel-001-TOPBOARD .DFP-001-TOPBOARD .banLabel {
            max-width: none !important;
        }

        body.rwd.screeningADFP .DFP-001-TOPBOARD {
            padding: 15px 0;
        }

        body.screeningADFP .back-to-top span,
        body.screeningADFP .ppg__close--small,
        body.screeningADFP .ppg__fab-circle,
        body.screeningADFP a,
        body.screeningADFP a *,
        body.screeningADFP area {
            cursor: pointer !important;
        }

        body.winieta #page-top:not(.fixed) {
            position: relative;
        }

        body.winieta #page-top:not(.fixed) #pageHead .imgw img {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }

        body.winieta #page-top:not(.fixed) #pageHead.hasBanner {
            min-height: 90px;
        }

        #pageHead.hasBanner .banLabel {
            position: absolute;
            top: 20px;
            right: -40px;
            padding: 3px 5px;
            margin: 0;
            transform: rotate(-90deg);
            background: #fff;
        }

        body.dfp-forum #pageHead.hasBanner .banLabel {
            right: -36px;
        }

        body.dfp-forum.winieta {
            width: auto !important;
        }

        #pageHead.hasBanner .column.col1 {
            display: inline-block;
            position: relative;
            z-index: 2;
            height: 100%;
        }

        body.dfp-gazetawyborcza #pageHead.hasBanner .c0 {
            top: 40px;
            position: absolute;
        }
    </style>
    <style id="hyb_ssp_style">
        .buttons-fi9V9 {
            top: -10px;
            right: 5%;
            display: none;
            width: 105px;
        }

        .buttons-fi9V9,
        .close-button-2HkbT {
            position: absolute;
            z-index: 1;
            height: 20px;
        }

        .close-button-2HkbT {
            top: 0;
            right: 0;
            width: 20px;
            border-radius: 50%;
            background: #313231 no-repeat 50%/11px url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAFNQDtUAAAAAXNSR0IArs4c6QAAA4tJREFUWAnFV81qFEEQrtrdJEoEQQWVHCKCPsKuOYREPUUQBJ0o4sWjoGev8ebJgyE+gogJeElILoooHuIbaE6CBk+CIEJCsm1Vz1Sluqdnd3ZzcGC3uuvn66+ranpmAKou184c20SqX6WiZNCQeOA6dy+g62R/wcFbALxMy3z0TozhOvO/eIKuPf/HWxBmvKfr3L5vsZAnxbKr+Hn5uhiLyHFojZzzTt4xX/CoOJHcoKA5njdU6bCr43ywp3Oi/MQzbGfrqqQBb6X27mlbGS+BtLZyY7QAoVjGl0CM4qBRomAHvmJEr4yRvKO30F9PhDjSznkXnly8ptcjbMkKldLugvOxRkhawKooLSyOXMTNl1sepOgkW9igGwRMg0VRNIAyYX0VWFWwYAUgokyAiUlbTxQsD9rQasstKdaD1hQNyYBJFe0EsyBneWLzG3DcgCdp9wQjBk+LzgluGgMaDBmMfl8DJU+cc8HWSg5G4dp3ps00T6y7lD2AznzXZdmoNabGbiqbAdj/QIfRD7GjB+jCC1HAJIzh8vKuzs3AA+zDe1UhbuPm64kGdOGLKnnwDXZSjEoA7Hvi9HkWRXWyKzSmA9RchlES4OSZI7i+uMMRmkyqThIIvsMU2C1wlAEIQHiSBGKDvSIANikT8esJlADguNK9Q+fJO8J+LKAqcfS45EB1xaDMhPsgzoFEmWSLimUAkqyC9eZxAki3kwSgHFDY1QAn0UeeSRWA5CCZbMMI+wEIi15AjVISK8qYVy3a2nbzFC+Sb6d48MSdKCysVEYjzQn89Grb2sDNPRoLFD0mbmFBC8JuQYlZkR8NOAeT7lbVkcB+g1557nGNVvwN0Jrlh57FUCLF2bRERtXReJV66+ZhCCkBcPY5QKsgpfOAELrpe2dhZ5fYRY6W7hCEKgmEuBvUDze4pXX3vvhIGXBgXw3CsBqEBiUgCygRUQxLaFgCsm6JiBhqE0J4Dg7f9CmtlkDwY1lJRBxrEhL3WPYlIAF9iYjjgIRqExD84FARZVI26QCtfhGMQ/bg2E/9doiNqXnfjNRswhQ262qfQ5VEahLYoINpkRp15bC3fYlIbQLFQSSpqNlDlRlSIsMSECIihyVUvAjQw6j3ET/wXVCLEOISvT8/5E34jPB3BREpv97RV508C2THg8okIf6obTVn7XuEloYXMIQOTSAmnBPCZ9BqXLMEYr//Pv8H/dIJv5Sdg/sAAAAASUVORK5CYII=");
            cursor: pointer;
        }

        .close-button-2HkbT:after {
            position: absolute;
            content: "";
            display: block;
            width: 200%;
            height: 200%;
            transform: translate(-25%, -25%);
        }

        .ssp-brand-lNooh {
            position: absolute;
            top: 0;
            right: 27px;
            width: 20px;
            height: 20px;
            border-radius: 10px;
            background: #313231;
            transform: translateX(0);
            transition: all 0.2s linear;
            overflow: hidden;
        }

        .ssp-brand-lNooh:hover {
            width: 90px;
        }

        .ssp-brand-lNooh:before {
            width: 100%;
            background: #313231 no-repeat 20% / auto 100% url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE4AAAAZCAMAAACo/+hgAAAC7lBMVEUAAADNzs3Iycjq6+rd3d35+fn29vbDxMPh4eH39/f8/Pz4+Pj09PT////g4ODo6ej+/v79/v3i4uLa2trt7e3////o6ejq6urj5OPZ2dnt7e3i4+LExcTFxsXZ2dno6OjHx8fFxcX////29/bz8/Po6Oj19fX09PTu7+7//v/+/v78/Pz////f39/+/v7+/v7v7+/u7u76+vr7+/vt7u3W1tb39/f4+Pjc3Nz////////19fXp6em+v77////////7+/v3+Pf////19fXx8fHu7e7+/v79/f3j5OPs7ezu7u7y8vLk5OTt7e339/fs7Oz7+/vx8fHu7u78/fzy8vL09PTy8vLs7Ozo6Oj29vb+/v7n6OfX2Nfq6ur19vXi4uL+/v7p6enY2Njs7ezQ0ND5+fnn5+fe397T09Pt7e34+PjHx8fe3t6urq66u7ra29rj5OPW19b////ExcTW19bv7+/19fX9/f34+Pj+/v74+Pj9/f3////9/f3x8fHt7u37+/v////o6Ojy8vLq6ur+/v7p6enj5OP7+/v19vXy8/Lr7Ov5+fn29vbq6+ro6Ojy8vLj4+P19fXe3t7+/v74+Pjx8fH+/v7c3Nzp6en09PTz8/Pf39/n6Ofw8PD6+fra2tr//v/k5OTs7Ozg4ODw8PD6+fr7+vv19fXl5eXg4ODu7u7////19fXs7Oz////z8/Ps7Ozf39/u7u7m5ubs7Oz7+/vw8PDv7+/b29vh4eH19vXW1tb////y8vL09PTX19fm5ubk5OTY2Nj////o6OiztLOjo6Ph4eHAwcDBwsHy8vLJysm4ubjZ2tnV1dX9/f37+/vz8/P+/v7x8fH////19vXp6enu7u76+vrf3t/j4+Po5+j+/v78/Pz////w8fD////n6Ofm5+b19fXw8PDk5eT29vbLzMvf39/e3t77+/vo6ejNzc3z8/P39/fx8fH////////////8/Pz5+fn39/f+//79/v309PQSGSTEAAAA83RSTlMABgQMAXl3EQfu7OK4eXVnUEc6NDMyLiopKSEbGBUUEA0D98+9vaeZmYV3dnBwbmlmYVhUUEI9Ni4tKCQdCvn09Obk39DIxsG/u7i2tLKvrqmopJyVjYqIhoJ/e3pxamRjXltWUk9OTU1COjk3Ni8kIiEbGxkWCvf17+nk397e3NjX1tTRzs7OzcrIxcTDwsLAu7q6ubGuq6uko5+fnpyamZeVlJOSkYuKioSDgYB/fHx8eXh2dHNvbGpoZ2ReWFRTRkVEQz04NzQ0MiwkIR8cFPj38uzr4Nm8srCrqaGgnpSTjouGg35vbWxhXlxKSUExHROfg6D5AAAD1ElEQVQ4y+3SY2zdURgG8Ofe3tpauVprV3vtbNvVarerZtu2bdu2bdt4qn3b/6Ttbpos2ZJl2Zf9PpzkTd7z5D3Av2Xuu1i/Cn7DESMoXTLDz8jcCkmWdCjAL6g78oOyulDs89Omm6ST61Syv80v4ppyPiRmarq6utXC9OmiukQF79VU3RHioaq6WwZhDEdYAggfz2EAClaqqvmKkTtuUNsWVynNmNS0BpIpfLOJkdaRcJLWiLQSSrQvADhBzZoQFHWZjIvQJDnWDnghOnTkUKrP+rwNWWFhFz29XRdRjW184MnJagE4tN5j577HbAagHT1R5i3nofQu9qk1ZHe0Mkr30B3L7cq0aDaXlfK8nIPK6m5MASbQEuUi2RfACFa8qSUbwKFUBljRGSwGYMHpyrjevezgyZEYwLmbNkXJpOl6AHcYConVjqmlZH0AoyvF3SiyBsI4BQ4lyPZ1pB4qrGGdpTswjoHqfSgZCG8RN4OmAM7WIrXa1hLTzfmxZS8X4lpRVaAGW6CeQz9xdwqUy6UQIWMxNI7GH57HgABl3HiuCAF4FYARe6tDqKnJNNSuiBtANlINxg8tqRNkanoc99hFlCFcF0B9oBVTAfRjTwDFJZBMZn9xXPPBHAdlXB+mV/4ktQHBmmzSxNn5Ci38mAQ0pgWAp6wzqZmneYRcTDWMdGw5hhxiB9QqlOJCORGt2WDalCZD4wEhWVMrDWXiHSh0wZLhCqBRS0jkbSnZjDLP60hFr84im2I6De2BsNMRHVq5gJARaI8KBWcyTp6xBS6LQgVlbHJyvpiinL3Jp88aEE5liH0KcRXhJ09Z4O+wtc23h2166sesbD8zDRWo50N+CecMgKCDWYB6z8TgI4CdFeQphlK3CvLkp/2MTwQnVFFAavcPh/khG6jAGBCqV/calbvIYPAsw+bvQtcbIGouMjscHb4sNrbxAbN6Z1/HrKrrDSwvhn+jmYsRqiXTWzvpQGpMXQ+XvTL9jVvbNjzWftecl9vc1lTEGRZO6wg3Ezj6Z28whHc7ZHaelWjhtnG6v432qNk1FO2Ams+aGSesg5PG18LZ3bc6+1nCBUYTmzZd3RWrW3WKc/XhApTR7eYVOagemsepaHud7uh9eadTfuBS1837tbuOfmXSeS1zsiYAe4Y8bK3vEtZQdnz+cu4f6mVi3zgPRde/mbQJ1+mw4tZ9K63WmYCQYGBw7rwrthvJF7mnHHzQLajNkzeJeQtXmYe0dw+KRqcw6y1ApK9Z992P2h9G8B5UO7bM3VCxxRqdkroiduYCKx9ERwUmrcR/f+Q7Z5eOuXMAiVkAAAAASUVORK5CYII=");
        }

        .ssp-brand-lNooh:after,
        .ssp-brand-lNooh:before {
            content: "";
            display: block;
            height: 100%;
        }

        .ssp-brand-lNooh:after {
            position: absolute;
            top: 0;
            right: 0;
            width: 20px;
            border-radius: 10px;
            background: #313231 no-repeat 2px/77% url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAhCAMAAABkz+JgAAAArlBMVEUAAAD/SVT/SFD/SVP/R1P/R1P/Slb/SVT/SVT/SFP/SlX/SlX/SVT/SlX/SVT/SVT/SFT/SFT/SFT/SFH/R0//SVT/SVT/SFT/SFL/SFT/R1P/R1P/SFP/R1P/SFT/SFL/R1T/SVT/SFP/R1L/Slb/SlT/SVX/SlT/SFT/SVT/SVH/SVT/SVf/SVb/SVT/SFL/SFD/R03/SE//SFH/SFT/SFP/SFL/SlX/S1f/SFMpKNnoAAAAN3RSTlMAnBO0CQT8h4As8u/ayJaTZkcxGg/oz3ltYlc/KCUfFgfVXTb44N69rKeiy8OwjYNSIcJbUEs4cIvo0AAAAYxJREFUOMuFk4dug0AQRJdqaugdYzCuie3YaXP8/48FEskFI91IJ6HlCc0+dHSfWiRuZMfjQ8dNyGVe2CufARIeI6gb9YvHmEVjzh9GlV+NGIRzxDcDQb6L8mrc55sy9iHTkDKxTWBGozisi4N0+0MLT7M6to4m9nRMYbkYHnyL2e96YTTPvmqZane/00oSvf6sVf0ZqTK7Y4bJ2DtdNnGD5QgIPccCrFMhK63EBHIZe+wbZJLR93UDIrFdDD8lJWerXN8rpbsz2eojk4nm2qYD9gptWaFcPfmfDQOsXCH5S4gAO8lf8Uaiubr5XpTLk60athSvWLfN/nbNIFGBRqa7KHpiR9FxUKO/rCWfnH6xFAJNJoF6UNUfknAeek8hHiSR2pWh0xv8/ngTjAadRPIMaC6ssOqMyzNzQnhGTsERnTr0Zof6iZkhUKxO7z2luwiDa2GC0SnF57+U5b6lPUsmvkMxrvJkkiXk1Zi5zOA+jNpvf8wI4N0wrcOh5jFYl8Rlzvy77HARxRenxr+qtCqmV1fLWgAAAABJRU5ErkJggg==");
        }

        .placeholder-d5JfG {
            position: absolute;
            bottom: 0;
            z-index: 999;
            display: none;
            width: 100%;
            height: 0;
        }

        .check-ad-block-image-3dW6Y {
            position: absolute;
            z-index: -1;
            display: none;
            opacity: 0;
        }

        .fullscreen-counter-10p_f {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            font-weight: 700;
            text-align: center;
            color: #fff;
        }

        .fullscreen-counter-active-1KaPj {
            display: block;
        }

        .fullscreen-container-1rAxF {
            margin: 0;
            padding: 0;
            display: block;
            position: fixed;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 9999999;
            background: rgba(0, 0, 0, 0.8);
            border: 0;
        }

        .fullscreen-close-2fdu7 {
            position: absolute;
            right: 15px;
            top: 15px;
            width: 35px;
            height: 35px;
            z-index: 1;
            cursor: pointer;
            border-radius: 50%;
        }

        .buttons-2WOf0 {
            display: block;
        }

        .close-button-2tMuF {
            display: none;
        }

        .ssp-brand-3upUU {
            display: none;
            cursor: pointer;
        }

        .buttons-alt-1g5_s .close-button-2tMuF {
            background: transparent 50%/100% url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAA21BMVEX///8AAADHx8f///+urq7////+/v7////Gxsb9/f3////6+vr////////R0dHR0dHMzMzGxsZTU1NRUVFra2v////x8fHg4OBpaWn////////w8PDQ0NDGxsbFxcVvb2/////t7e1lZWX////x8fH////d3d1ra2v////////////+/v7y8vLw8PD////u7u7////r6+vh4eFOTk5oaGj////Z2dn////v7+/t7e3r6+vJycnPz8/ExMR3d3d4eHhwcHCHh4d9fX3x8fHz8/PIyMjg4OD19fXj4+NItN/iAAAASXRSTlN6AESfBX6WgUmdmZeIgzwnIxHm4tamiW3Tt6qkNxwL2a6Cy6SRhWvFwbOyo5+aj42Kf27ez7uoko+Ffk02G9XUzcu5q5SPhn12KxA6nQAAAVZJREFUGNNF0dWSwzAMBVCtHWbmtIGmzIzL9P9ftErazN4nz5mxbEnwhGFM40rIRSDkaphMLVDrTRPW03A4nHzmF+3G3Lmjk744Hu52mRuOsl+id2pmdLKK3CgMQ5qV1B31BJ15AiYlq1Ki41HouhGldDKekZQBU/PLA0ejLBIzVHS3r5lgCOJ8Od+/fUhuSePnPZVUTjAg8SW+6r1aziyicdd6oTxw6wSIt2RV5RjY3Ri1G88BFI8AkVlQK2XhWI6DKgIAKyOLwLK8Ws0Cy3KmtAKM2HDty15g2870AC3LPDq/2NpBYDsnaIt4Cp5Ohb094oUih/uTic8B/Aw2hacqi2IzQMYPYjscVvl+z/FdWA2+AHhsp25egiYsC00kXzPrUZ2xzH+4M46qGWwuqS2qUk50pl2DzCksVlU4uf9YA3qqCb4nUyp7vqClHaR2xQlpkjxW/AdH6SADgFI+tQAAAABJRU5ErkJggg==");
        }

        .buttons-alt-1g5_s .ssp-brand-3upUU {
            width: 80px;
            background-color: transparent;
        }

        .buttons-alt-1g5_s .ssp-brand-3upUU:hover:before {
            background-position-x: 2px;
        }

        .buttons-alt-1g5_s .ssp-brand-3upUU:before {
            width: 100%;
            background: transparent no-repeat 100px/100% url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAAAdCAMAAACJzSIWAAAB+1BMVEUAAAD///////////////////+FhYX///////////////9iYmJzc3N9fX3///9qamq8vLz///+BgYGHh4f///////////+jo6P///////////////9VVVVtbW3///////////////////////9WVlavr6+ysrL8/Pz///////90dHR6enqYmJipqani4uL///////////////////////////////////9cXFxkZGRpaWnBwcH////////+/v7///9oaGiPj4+FhYX////d3d3w8PD///////////////////9xcXF3d3dycnKTk5PIyMjT09Pp6en29vb///////////////////////////9ZWVlfX19wcHB4eHh1dXV7e3uNjY2Li4ubm5utra3FxcXNzc2rq6vY2Nj///+srKz4+Pj///////////////////////////////9nZ2eAgIB2dnaQkJCkpKTT09Px8fH///////////////////////////+Li4ttbW1xcXGenp54eHihoaGXl5eSkpKbm5u2traPj4/KysrAwMDExMS5ubnPz8+goKDCwsKpqany8vLv7+////9tbW1jY2OBgYGfn5+RkZH///+EhIT////l5eXMzMyzs7Pt7e3a2tq7u7v///////////9TU1OnLleJAAAAqHRSTlMApxo1wKbfqaWxnvTp46Pvwjzh3Zs5As6UkI02/u2/oZyWiIT9yMaoQxPp5dPLsq2roJqXfnNvOPnz78G2hoId8drYurStooB3a0rr5+HWvLmvqop6Yl1IKgn79ubi393Z09LJvrq3trOyo5KLaFAwIRkW6dvb2La1rGZaQhAMCwfg3dnQzcvLycXDwb65t7StrKurn5tV6enJx8XEwbi1saylmppYQCeAyD3xAAAEHUlEQVRIx+2WeVcSURiHudUswMwwMhgWIJYsySIgJlshUmDKplQC7uZSWqktaqZl+77v+77cj9mdYYA8p8aW/zo9nDnMzD3cZ373fe8cZP8aGwtnjh9b97c0nJMwrKzLr/81fFVllreJVIljs1KKhhndk3bGJZcf2rGjdoNIba1wWuHV9yPfD9bu4iFzMimFLlevIAkg4HYDEQwrfgERN/gZJDpqfJKKqiWvRkGCItbdZUc3WAXhBiHKpFeZkRVDnwpGdHTKJFhZ32P0MKWfHFS2lZ6XDQBstcQBe+1qP8RXxSteHJXsqHU5L0GCUoogZAmQoSmKMqtNFB0btlEhp52yO9HgLahqBGDRDi0AOKhkOotyUbZ0lmTqFHkpR2Gmw1V5JieEQetbk1+lUsdofYK1wyB3UKVSKaEZADUU1nHRb+hWjyUjEO+2XDJE4HDco2iRSdGwfIQoO2L+iBY6WRji49NKDJhwwJO1QA6AgKrYF7S+EaJcdmUXZEnGEFTUabZJOo7lFJUY8zBkDfq79H2UTYvRSgBgG7qbSZogX4RIACs6TI1QCwCOHOkrAzDa1LRlVtLR2gnK1dith9DAwvkQhRbHWXI0mvy4pQ85ONjFB+nupUTHKQihf+TRlppNZ9dwuMsOux5vaxun9btdwNqrLjkscAxlQI6DJuUppDRAFjkwknf03/Miw6bNsjUcBCMqQnBeSGNS2qgg1NIJ5DjAp+uzcSwLkE0PIwY9uoccTDyqnOrr7e/vv7Z579Y1cuQYo+jAh7NCr7MJlcrgsDq6UCvF+I1iQ21W3D14IEBn0O4MWjyKd0NN9wZOnEh93LqzvlW65l9qykWv4AI/IQ4ARjJGD+qlJmGVjiBDe7NO0nGmak8dCVZhBYD4kQSzxpkpI8nERcPhTWiVdobbm/ftmZZ0FPJPNHXFIPglLedwck6cw2Pnx5UxOuk4MJo+QI+CWwFrQn1jijp5e2DQckcRfRQdSl2bGEy9n7v5cO75vj3bO1ql3yXVYQ1TdGgNNkfChgPcgrPnOXbMbB5Tq830DZLjbuMfRjQjJ6/evX71jubk45EHExMvFxZunnj26fLr7S0tHcuSQVZmOr1GIQinHTc4xg2j6uFsYNGu5TJmcyY9ak5emRp4EX06dPfx3ODkYGoydT06NPFgYXLy4oWH9y/cv3yxpePo6f15ySANviUPIb4+sfJ7m5Cj4pLxYnX5TbBZKG+4ufkwXweh0miRUAbesL9nunUNSY/ijdxN8BYEEDxAzlTm5yetR/MLs7aXK10x9Cx97pyVluSn6xn5Dp5D8hKHdqFzl8vlJgiM4PtVIRprCAJdoQvvFtRbQj6Uqj4cnj4uJSkc/7r+d9BVV/t8Ol91CZ9OYGb2rJTlHP/f5+9pKMj+8+d8A7E28U2Z3XZFAAAAAElFTkSuQmCC");
            transition: background-position 0.2s ease-in-out;
            -webkit-mask: no-repeat 25% 50%/200px 200px radial-gradient(transparent 0, transparent 10px, #000 0);
            mask: no-repeat 25% 50%/200px 200px radial-gradient(transparent 0, transparent 10px, #000 0);
        }

        .buttons-alt-1g5_s .ssp-brand-3upUU:after {
            background: transparent no-repeat 50%/100% url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAABd1BMVEX///8AAAD////ExMT////Kysr////////////Gxsb6+vr////R0dHMzMzGxsbGxsatra2ysrL////////x8fHg4ODNzc3Q0NDQ0ND///+goKBSUlJbW1v////////////+/v7////////r6+vd3d3Ly8tNTU1SUlJtbW2NjY19fX2kpKT8/Pz7+/vh4eH////h4eHHx8c6OjpCQkJKSkpeXl5gYGBoaGhcXFxxcXF+fn6FhYX///+0tLT///////+5ubnZ2dmtra26urqnp6f////o6Oju7u709PTJycnPz8/R0dFCQkJJSUlxcXFWVlZhYWFubm6lpaV3d3exsbGEhIRmZmZra2uVlZWNjY2urq6UlJTX19d4eHhxcXH////8/PyIiIiampqSkpK5ubn///+rq6uPj4+Li4vy8vKjo6OcnJzu7u7q6urDw8P09PTx8fHz8/O8vLz////w8PDKysrT09P19fXq6urj4+P6+vrj4+Pd3d1k1YcLAAAAfXRSTlN6AH1Fn0OVioBJl4M8IxsRCASemYltQjcnpqTm4rKvqqShj35sDe/g18O/vZ2ZmIduRvLu5eHg2tbT0cjBwb23tKunop+FhYF+TTYo6+Td3NjR0NDOzs7NycnIxsPAv7u6ubi4t7Szra2qqKimpaKdmZSUkpGNi4aFhIJ2aiQBuisAAAGISURBVBjTRZFVd8JQEIS3Ny6QkJCQ4O6FursX6u7u7v7jey+hp/O053vYnZ2BBiyP4qqY1LRAmRWX4iGEYNUtC033B3190ceJadmtOjhlMT/F0MDAftgeDIW/GStFsGo1JyJ2ZGVnMBaO0vbpi2CpDeBxM4moroWW0pd2hKbpWOiBcXtAkZPRZzYW2Up3hmM01o2dlBVwCcU4F9e1/uW5DZoe3g72So2CC3yGLo1zcfYs0H9y297REfwCtskHppdDUpmLj/YEAp3D2XQJgPMyQIk8eh9Zb1ssFIYK7ZtDCIAXKaA0OG9pyR8GM73d2Z7VccDSMC4i9HG9e1zKBXLZXHDMwWQJIMSXR7tKC92t/tk3Zwk+CXjir/Lzd0eZVn9mipzEBlnAQv782kgZPl8v9ohB/E6jRLi/rUtCZJiqvaPIho4InpmoUUC6ISu1qFgMxp7AoWyCREWCndQlqEvSJ5sttVZDlUmKLId98hwrJplq6r80wytqmug1BKe0v4p9JoVl+uoV/wIS/DVDP+eIgwAAAABJRU5ErkJggg==");
        }

        .buttons-alt-mirror-1O88H .ssp-brand-3upUU:before {
            background-position: -100px;
            -webkit-mask-position: 75% 50%;
            mask-position: 75% 50%;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAAAdCAMAAACJzSIWAAAB9VBMVEUAAAD///////////////////////9zc3P///97e3v///////////9WVlZpaWmFhYX///9ra2v///////////////////////94eHj///////+Ojo6vr6////////////////9jY2NiYmJtbW1/f3+ZmZmjo6O0tLT8/Pz///////////+IiIi8vLzIyMj////i4uLw8PD///////////////////////////+rq6vS0tL///////+BgYF7e3uDg4OWlpZ9fX3///////////////////////9eXl5mZmZwcHB1dXWpqamysrK/v7/Dw8Pa2tr4+Pj///////////////////////////////////////9ZWVlcXFx2dnaDg4OdnZ23t7e3t7fV1dXf39/v7+////////////////////////////////////////9hYWFnZ2dsbGyFhYWMjIx5eXmOjo7AwMDo6Oj09PT///////////////////////////92dnZ0dHSLi4t9fX2SkpJ+fn6Li4uFhYXKysqcnJympqafn5+wsLDKysrExMSTk5P19fW9vb3b29vBwcHx8fH///////94eHiPj4+rq6uYmJifn5////+NjY3Ozs7///+4uLiXl5fp6emgoKD///9TU1NuC4cUAAAApnRSTlMApxo1pcCj6aHlsJI3/fDfqe6ePJuNOQPmrHnZyb+clYj09Ozi087GqIOAQ93CvLqyraCZl5CKhgjAuJZn4eDV09K2s31zEgL38uvpy8fBv7SqhIFwXFpOLhYLAfz56ODRxLu4s6Z2bmtkYDMoGxQP9uLf2dPJu7mwlVVKST8fHRng39vZ19bNy8TBt7ezsLCvqqmoko1LQtTRzMzFxMS7uLW0r68j6mgRDwAABB5JREFUSMftlvdX00AcwD2JWSVpA0VSWsDugm2lWpXVZRVpS5fQCsoWHIDKRhDce++9x/2d3qVNxCdGffqTz89r7+WS5vu5b75316z7N6lsPNmz/s8513Oyca+K5sCZ8ZIi5ZuLPC1XKC35NSZ6VC376S0FqjcoVFejj9J/jRuF1Veqd+2KsqyB7lwqnWirVJGs1AIMCX6EQT4gCi0h93U6+UJZ53LJCTXJfoChceMaKQYjwClFIUdKURwUTNihSBWH3p8vV8uksUv++SGLUb7XYwZFZIUd9jK2PqglFLnhq4zcSufGD6gkUoJuqyEJwsVDDwBehqIok42jbD4jRaVfMJTYAdBpKDQA4GNgkgBhqv/yfZCmqEQ4K1t0/uXjanWvIkDZVprsgJB3NXB9gmDzMVw8xUDenREEYRKaAAjADED4+qwfB9IiD7U+56A1Bo1KKoaj3Y1qFSH1+pqy0faYA3YMwRRAMBYAOK1U12wSugGI8UDCBhsgyosxH8JJW3nFodvxtE3F0V2madm2bRYulPHtzVw7lXBIDjxIwityECIZHwMSDNcAHQBokSPsEJFdkWxdXq/i6PFv19Q+RLGsw9CYogQz7JAdI1yfNtmOHG7YDBCneqmioxlC2H7xvuIgwZOzapvKph0V28/D0OzsnSCXIQlXb6DoIJwwjXJAjgxnRpIGK/QUHRkYl6yKQ3f6uJqjbuemB/CqprZl20POQlE8dDBx5BgExAicpNweD4rh5CBvhdAOJIfbkp3sRRPQvtqhlkfb7vq6yLXFiu3IMhzneWuYtqMxBnx4oVCCEACYQ9qY2eZFj0twAvatjWhmBEEcURYiTW5Wy+NzVRWy7MRPDOeir8EzmSTQfT/dX1aVvHblXCHcwbUcpXsOr2UhSGySx+kCIIu+EqxOOSlD1lSVt6mtjyNde+bmP0Te3IrcioSuLIbuWEaD/WF70/OXwSbaa3bFA0PZRCDNiEkv0Prctv6wUxQ9jN3JXJTTqNEvKWtwjfV+prX16JG5e1PT89PTkX2R21duh0Lv7zY1LVy61BQc1s/MLGhHjS7jwGBq0I4dxusmkx19rLx34LKchr5uo7KXHPzuaVWujB1rbZ2792hq/tHUp2fXHlseX7gRQo4HV2/evHBj8fyrGWtweDQoOhnRmXC4bc7rpuSQ2D9kSpgGmGIatP9099c98TvHRD6XQxaUS9c3ddHU13fuw4cVGk2tv1AjGteH1RX2f9TgFqOj86UqfyBnnyzl87mxsWPHJAvSFC31khF59klKxUOy2IAlCGmSRd/ROTXFeFdnXR0a7qaKCilQix8FovHE1WhapKioR+Lx6gwGA8uy0S1RVia6CxFl6Z37u9sq1d4ZSiU2yhQ6Jb/FxPoDaysO/q13nxP43ec/v88XA4vyVjbl4ycAAAAASUVORK5CYII=");
        }

        .buttons-alt-mirror-1O88H .ssp-brand-3upUU:hover:before {
            background-position-x: 0;
        }

        .buttons-alt-mirror-1O88H .close-button-2tMuF {
            right: auto;
            left: 0;
        }

        .buttons-alt-mirror-1O88H .ssp-brand-3upUU {
            right: auto;
            left: 27px;
        }

        .buttons-alt-mirror-1O88H .ssp-brand-3upUU:after {
            right: auto;
            left: 0;
        }

        .buttons-mirror-1apBT {
            right: auto;
            left: 5%;
        }

        .buttons-mirror-1apBT .close-button-2tMuF {
            right: auto;
            left: 0;
        }

        .buttons-mirror-1apBT .ssp-brand-3upUU {
            right: auto;
            left: 27px;
        }

        .buttons-mirror-1apBT .ssp-brand-3upUU:after {
            right: auto;
            left: 0;
        }

        .buttons-mirror-1apBT .ssp-brand-3upUU:before {
            background-position-x: 80%;
        }

        .buttons-hybrid-QEasr .close-button-2tMuF {
            background: #000 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTQuODkgNi4zOWExLjA2IDEuMDYgMCAwMTAtMS41MUw1IDQuNzVhMS4wOSAxLjA5IDAgMDExLjM2LjEzbDguODQgOC41MWExLjA3IDEuMDcgMCAxMS0xLjIgMS43N2wtLjA3LS4wNWEuODQuODQgMCAwMS0uMjMtLjIzeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNS4yMSA2LjQyYTEuMSAxLjEgMCAwMC0xLjU2LTEuNTRsLTguNzYgOC43OGExLjEgMS4xIDAgMTAxLjU2IDEuNTZ6Ii8+PC9zdmc+");
        }

        .buttons-hybrid-QEasr.buttons-alt-1g5_s .close-button-2tMuF {
            background: #fff url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHBhdGggZD0iTTQuODkgNi4zOWExLjA2IDEuMDYgMCAwMTAtMS41MUw1IDQuNzVhMS4wOSAxLjA5IDAgMDExLjM2LjEzbDguODQgOC41MWExLjA3IDEuMDcgMCAxMS0xLjIgMS43N2wtLjA3LS4wNWEuODQuODQgMCAwMS0uMjMtLjIzeiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTE1LjIxIDYuNDJhMS4xIDEuMSAwIDAwLTEuNTYtMS41NGwtOC43NiA4Ljc4YTEuMSAxLjEgMCAxMDEuNTYgMS41NnoiLz48L3N2Zz4=");
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU:after {
            background: #000 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE0Ljc0IDguMTdhMSAxIDAgMDEtLjExLjQ2bC0zLjI5IDcuMmExLjI3IDEuMjcgMCAwMS0uNDUuNDcgMS4zNyAxLjM3IDAgMDEtMS4zMyAwIDEuMjIgMS4yMiAwIDAxLS40Ni0uNDdsLTUtOS41OEExIDEgMCAwMTQuMzUgNWExLjIzIDEuMjMgMCAwMS44Ny0uMzMgMS40NiAxLjQ2IDAgMDEuNjguMTQgMS4wNyAxLjA3IDAgMDEuNDUuNDdsMy44NyA3LjQzIDIuMTctNWExLjA5IDEuMDkgMCAwMS40Ni0uNDkgMS4yOSAxLjI5IDAgMDEuNjctLjIyIDEuMjMgMS4yMyAwIDAxLjg3LjMzIDEgMSAwIDAxLjM1Ljg0ek0xNiA1LjY3YTEuMzEgMS4zMSAwIDExLTEuMzMtMS4yOUExLjMgMS4zIDAgMDExNiA1LjY1eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            opacity: 1;
            transition: opacity 0.5s, right 0.5s, left 0.5s;
        }

        .buttons-hybrid-QEasr.buttons-alt-1g5_s .ssp-brand-3upUU:after {
            background: #fff url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMTQuNzQgOC4xN2ExIDEgMCAwMS0uMTEuNDZsLTMuMjkgNy4yYTEuMjcgMS4yNyAwIDAxLS40NS40NyAxLjM3IDEuMzcgMCAwMS0xLjMzIDAgMS4yMiAxLjIyIDAgMDEtLjQ2LS40N2wtNS05LjU4QTEgMSAwIDAxNC4zNSA1YTEuMjMgMS4yMyAwIDAxLjg3LS4zMyAxLjQ2IDEuNDYgMCAwMS42OC4xNCAxLjA3IDEuMDcgMCAwMS40NS40N2wzLjg3IDcuNDMgMi4xNy01YTEuMDkgMS4wOSAwIDAxLjQ2LS40OSAxLjI5IDEuMjkgMCAwMS42Ny0uMjIgMS4yMyAxLjIzIDAgMDEuODcuMzMgMSAxIDAgMDEuMzUuODR6TTE2IDUuNjdhMS4zMSAxLjMxIDAgMTEtMS4zMy0xLjI5QTEuMyAxLjMgMCAwMTE2IDUuNjV6Ii8+PC9zdmc+");
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU:before {
            display: none;
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU {
            width: 55px;
            background: none;
            transition: width 0.6s;
            overflow: hidden;
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU .brand-name-mTUPb {
            background: #fff url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0MC45NCAxMy43Ij48cGF0aCBkPSJNMTAuOSAxLjE0YTEgMSAwIDAxLS4xLjQ1TDYuNDIgMTFhMS4xOSAxLjE5IDAgMDEtLjQuNDYgMSAxIDAgMDEtLjU4LjE3IDEuMDggMS4wOCAwIDAxLTEtLjYzTC4wOSAxLjU5QTEuMTcgMS4xNyAwIDAxMCAxLjE0IDEgMSAwIDAxLjMxLjM4YTEgMSAwIDAxLjc3LS4zMiAxIDEgMCAwMS41OC4xNyAxIDEgMCAwMS40LjQ1bDMuMzggNy4zTDguOC43YTEgMSAwIDAxLjQxLS40N0ExIDEgMCAwMTkuOC4wNmExIDEgMCAwMS43Ni4zMiAxIDEgMCAwMS4zNC43NnpNMjcuNDIgMi4wN0ExLjE3IDEuMTcgMCAwMTI5LjA0LjM5bDkuNTcgOS4yNGExLjE3IDEuMTcgMCAwMTAgMS42NWwtLjE1LjEzYTEuMTYgMS4xNiAwIDAxLTEuNS0uMXoiLz48cGF0aCBkPSJNMzguNDQgMmExLjE2IDEuMTYgMCAwMDAtMS42NS43NS43NSAwIDAwLS4xNC0uMTIgMS4xNyAxLjE3IDAgMDAtMS41LjA5TDI3LjQ0IDkuN2ExLjE3NCAxLjE3NCAwIDEwMS40NiAxLjg0IDEuMTUgMS4xNSAwIDAwLjIyLS4yMnpNNDAuOSAxMi41MmExLjE4IDEuMTggMCAwMS0xLjE2IDEuMTggMS4xOSAxLjE5IDAgMTEwLTIuMzggMS4xOCAxLjE4IDAgMDExLjE2IDEuMnoiLz48L3N2Zz4=");
            background-repeat: no-repeat;
            background-position: 6px 4px;
            background-size: auto 14px;
            position: absolute;
            top: 0;
            bottom: 0;
            width: 55px;
            right: -55px;
            opacity: 0;
            transition: opacity 0.5s, right 0.5s, left 0.5s;
            border-radius: 10px;
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU:hover {
            width: 55px;
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU:hover:after {
            opacity: 0;
            right: 15px;
        }

        .buttons-hybrid-QEasr.buttons-alt-mirror-1O88H .ssp-brand-3upUU:hover:after,
        .buttons-hybrid-QEasr.buttons-mirror-1apBT .ssp-brand-3upUU:hover:after {
            right: auto;
            left: 15px;
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU:hover .brand-name-mTUPb {
            opacity: 1;
            right: 0;
        }

        .buttons-hybrid-QEasr .ssp-brand-3upUU .brand-name-mTUPb:before {
            content: "";
            width: 13px;
            height: 13px;
            background: transparent url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMi4zNSAxMi4zNSI+PHBhdGggZD0iTTEwLjk3IDkuMjJhMS40MSAxLjQxIDAgMDEtMS40Mi0xIDQuMjUgNC4yNSAwIDAxLTEuNDIgMS40NCAzLjkzIDMuOTMgMCAwMS0yIC41NCAzLjg1IDMuODUgMCAwMS0xLjU0LS4zIDQgNCAwIDAxLTEuNzUtMS40NiA0IDQgMCAwMS0uMTUtNC4yMiAzLjgzIDMuODMgMCAwMTEuNDctMS40OSAxLjQyIDEuNDIgMCAwMS4yOS0uMUExLjcxIDEuNzEgMCAwMTMuODkuNDQgNS43NiA1Ljc2IDAgMDAzIC45YTYuMDkgNi4wOSAwIDAwLTMgNS4yOSA1Ljc4IDUuNzggMCAwMC44MyAzLjA5IDYuMTEgNi4xMSAwIDAwNS4zIDMuMDYgNS43NyA1Ljc3IDAgMDAzLjA4LS44MyA2IDYgMCAwMDIuMjItMi4yM2MwLS4wNi4wNi0uMDkuMDktLjE1YTEuNzYgMS43NiAwIDAxLS41NS4wOXoiLz48cGF0aCBmaWxsPSIjZjZjNTVhIiBkPSJNNy4zMyAyLjM4YTQuMiA0LjIgMCAwMTEuNzQgMS4xIDQgNCAwIDAxMSAxLjg0IDQuNSA0LjUgMCAwMTAgMS43OSAxLjI4IDEuMjggMCAwMC4xMiAxIDEuMTUgMS4xNSAwIDAwMS42Mi4yNSAxLjQ4IDEuNDggMCAwMC4yNS0uMjUgNi41MSA2LjUxIDAgMDAuMTQtMy4yMSA1LjkxIDUuOTEgMCAwMC0xLjQ4LTIuODNsLS4wNi0uMDZBNiA2IDAgMDA3LjkyLjI2QzUuMzEtLjQ4IDQuMjQuNSA0LjM2IDEuMjdhMS4wOSAxLjA5IDAgMDAxLjE4IDEgNSA1IDAgMDExLjc5LjExeiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            right: 23px;
            background-size: 100%;
            background-position: 50%;
            -webkit-animation: rotating-2Yfkc 1s linear infinite;
            -moz-animation: rotating-2Yfkc 1s linear infinite;
            -ms-animation: rotating-2Yfkc 1s linear infinite;
            -o-animation: rotating-2Yfkc 1s linear infinite;
            animation: rotating-2Yfkc 1s linear infinite;
            position: absolute;
            top: 4px;
        }

        .buttons-hybrid-QEasr.buttons-alt-mirror-1O88H .ssp-brand-3upUU .brand-name-mTUPb,
        .buttons-mirror-1apBT.buttons-hybrid-QEasr .ssp-brand-3upUU .brand-name-mTUPb {
            right: auto;
            left: -55px;
        }

        .buttons-hybrid-QEasr.buttons-alt-mirror-1O88H .ssp-brand-3upUU:hover .brand-name-mTUPb,
        .buttons-mirror-1apBT.buttons-hybrid-QEasr .ssp-brand-3upUU:hover .brand-name-mTUPb {
            opacity: 1;
            right: auto;
            left: 0;
        }

        @media (max-width: 680px) {
            .buttons-scale-2iHA8 {
                transform: scale(1.25);
            }
        }

        @-webkit-keyframes rotating-2Yfkc {
            0% {
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(1turn);
                -o-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @keyframes rotating-2Yfkc {
            0% {
                -ms-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            to {
                -ms-transform: rotate(1turn);
                -moz-transform: rotate(1turn);
                -webkit-transform: rotate(1turn);
                -o-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        .ad-button-2z0pa {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -999;
            min-width: 220px;
            height: 110px;
            border: 0;
            opacity: 0;
        }

        .logo-bg-1qfaf {
            position: absolute;
            z-index: 5;
            width: 80px;
            height: 80px;
            border: 1px solid #ccc;
            border-radius: 100%;
            background: linear-gradient(135deg, #e1dfdd, #fff);
            transform: scale(1);
            transition: transform 0.5s ease-in-out;
            box-shadow: 7px 7px 8px rgba(0, 0, 0, 0.3);
            animation: ripple-2Myta 1.5s ease-in-out infinite;
            cursor: pointer;
        }

        .logo-DCeTL {
            width: 60px;
            height: 60px;
            margin: 10px !important;
            background: no-repeat 50% / contain;
        }

        .product-bg-2tt76 {
            position: absolute;
            top: 15px;
            left: 70px;
            width: calc(100% - 70px);
            min-width: 150px;
            height: 60px;
            border-radius: 0 30px 30px 0;
            background: linear-gradient(90deg, #e1dfdd, #fff);
            cursor: pointer;
        }

        .product-1CmLx {
            height: 60px;
            background: no-repeat 50% / contain;
        }

        .head-2_GXl {
            position: absolute;
            bottom: 5px;
            left: 80px;
            min-width: 125px;
            padding: 1px 10px;
            border-radius: 0 3px 3px 0;
            font-family: sans-serif;
            color: #fff;
            transform: translate(-10px, -30px);
            transition: transform 0.3s linear;
            text-transform: uppercase;
            white-space: nowrap;
            cursor: pointer;
        }

        .head-2_GXl:before {
            position: absolute;
            content: "";
            bottom: 11px;
            left: -21px;
            z-index: -1;
            display: block;
            width: 45px;
            height: 35px;
            background-color: inherit;
            transform: rotate(55deg);
        }

        .head-angle-fcZ2T {
            display: none;
        }

        .close-button-149XI {
            width: 15px;
            height: 15px;
            background-size: 8px;
        }

        @keyframes ripple-2Myta {

            0%,
            to {
                transform: scale(1.05);
            }

            50% {
                transform: scale(0.95);
            }
        }

        @media screen and (max-width: 800px) {
            .ad-button-2z0pa {
                position: absolute;
                right: 0;
                bottom: 0;
                z-index: -999;
                min-width: 170px;
                height: 80px;
                opacity: 0;
            }

            .logo-bg-1qfaf {
                width: 50px;
                height: 50px;
            }

            .logo-DCeTL {
                width: 40px;
                height: 40px;
                margin: 5px !important;
            }

            .product-bg-2tt76 {
                top: 10px;
                left: 40px;
                width: calc(100% - 60px);
                min-width: 110px;
                height: 40px;
            }

            .product-1CmLx {
                height: 40px;
                background: no-repeat 50% / contain;
            }

            .head-2_GXl {
                bottom: 0;
                left: 42px;
            }

            .head-2_GXl:before {
                bottom: 4px;
                left: -9px;
                width: 30px;
            }
        }
    </style>
    <style id="onetrust-style">
        #onetrust-banner-sdk {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            cursor: pointer;
            color: #1f96db;
            font-size: inherit;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px;
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
            color: #1f96db;
        }

        #onetrust-banner-sdk .ot-close-icon,
        #onetrust-pc-sdk .ot-close-icon,
        #ot-sync-ntfy .ot-close-icon {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 12px;
            width: 12px;
        }

        #onetrust-banner-sdk .powered-by-logo,
        #onetrust-banner-sdk .ot-pc-footer-logo a,
        #onetrust-pc-sdk .powered-by-logo,
        #onetrust-pc-sdk .ot-pc-footer-logo a,
        #ot-sync-ntfy .powered-by-logo,
        #ot-sync-ntfy .ot-pc-footer-logo a {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 25px;
            width: 152px;
            display: block;
        }

        #onetrust-banner-sdk h3 *,
        #onetrust-banner-sdk h4 *,
        #onetrust-banner-sdk h6 *,
        #onetrust-banner-sdk button *,
        #onetrust-banner-sdk a[data-parent-id] *,
        #onetrust-pc-sdk h3 *,
        #onetrust-pc-sdk h4 *,
        #onetrust-pc-sdk h6 *,
        #onetrust-pc-sdk button *,
        #onetrust-pc-sdk a[data-parent-id] *,
        #ot-sync-ntfy h3 *,
        #ot-sync-ntfy h4 *,
        #ot-sync-ntfy h6 *,
        #ot-sync-ntfy button *,
        #ot-sync-ntfy a[data-parent-id] * {
            font-size: inherit;
            font-weight: inherit;
            color: inherit;
        }

        #onetrust-banner-sdk .ot-hide,
        #onetrust-pc-sdk .ot-hide,
        #ot-sync-ntfy .ot-hide {
            display: none !important;
        }

        #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
            padding: 0;
        }

        #onetrust-pc-sdk .ot-sdk-container {
            padding-right: 0;
        }

        #onetrust-pc-sdk .ot-sdk-row {
            flex-direction: initial;
            width: 100%;
        }

        #onetrust-pc-sdk [type="checkbox"]:checked,
        #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
            pointer-events: initial;
        }

        #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label:after,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label {
            pointer-events: none;
            opacity: 0.7;
        }

        #onetrust-pc-sdk #vendor-list-content {
            transform: translate3d(0, 0, 0);
        }

        #onetrust-pc-sdk li input[type="checkbox"] {
            z-index: 1;
        }

        #onetrust-pc-sdk li .ot-checkbox label {
            z-index: 2;
        }

        #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"] {
            height: auto;
            width: auto;
        }

        #onetrust-pc-sdk li .host-title a,
        #onetrust-pc-sdk li .ot-host-name a,
        #onetrust-pc-sdk li .accordion-text,
        #onetrust-pc-sdk li .ot-acc-txt {
            z-index: 2;
            position: relative;
        }

        #onetrust-pc-sdk input {
            margin: 3px 0.1ex;
        }

        #onetrust-pc-sdk .toggle-always-active {
            opacity: 0.6;
            cursor: default;
        }

        #onetrust-pc-sdk .pc-logo,
        #onetrust-pc-sdk .ot-pc-logo {
            height: 60px;
            width: 180px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        #onetrust-pc-sdk .ot-tooltip .ot-tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        #onetrust-pc-sdk .ot-tooltip .ot-tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        #onetrust-pc-sdk .ot-tooltip:hover .ot-tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        #onetrust-pc-sdk .ot-tooltip {
            position: relative;
            display: inline-block;
            z-index: 3;
        }

        #onetrust-pc-sdk .ot-tooltip svg {
            color: grey;
            height: 20px;
            width: 20px;
        }

        #onetrust-pc-sdk .screen-reader-only,
        #onetrust-pc-sdk .ot-scrn-rdr,
        .ot-sdk-cookie-policy .screen-reader-only,
        .ot-sdk-cookie-policy .ot-scrn-rdr {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        #onetrust-pc-sdk.ot-fade-in,
        .onetrust-pc-dark-filter.ot-fade-in {
            animation-name: onetrust-fade-in;
            animation-duration: 400ms;
            animation-timing-function: ease-in-out;
        }

        #onetrust-pc-sdk.ot-hide {
            display: none !important;
        }

        .onetrust-pc-dark-filter.ot-hide {
            display: none !important;
        }

        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings {
            color: #68b631;
            border: 1px solid #68b631;
            height: auto;
            white-space: normal;
            word-wrap: break-word;
            padding: 0.8em 2em;
            font-size: 0.8em;
            line-height: 1.2;
            cursor: pointer;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease;
        }

        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover {
            color: #fff;
            background-color: #68b631;
        }

        .onetrust-pc-dark-filter {
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
        }

        @keyframes onetrust-fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape) {
            #onetrust-pc-sdk p {
                font-size: 0.75em;
            }
        }

        #onetrust-banner-sdk .banner-option-input:focus+label {
            outline: 1px solid #000;
            outline-style: auto;
        }

        #onetrust-banner-sdk,
        #onetrust-pc-sdk,
        #ot-sdk-cookie-policy,
        #ot-sync-ntfy {
            font-size: 16px;
        }

        #onetrust-banner-sdk *,
        #onetrust-banner-sdk ::after,
        #onetrust-banner-sdk ::before,
        #onetrust-pc-sdk *,
        #onetrust-pc-sdk ::after,
        #onetrust-pc-sdk ::before,
        #ot-sdk-cookie-policy *,
        #ot-sdk-cookie-policy ::after,
        #ot-sdk-cookie-policy ::before,
        #ot-sync-ntfy *,
        #ot-sync-ntfy ::after,
        #ot-sync-ntfy ::before {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        #onetrust-banner-sdk div,
        #onetrust-banner-sdk span,
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-banner-sdk p,
        #onetrust-banner-sdk img,
        #onetrust-banner-sdk svg,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk section,
        #onetrust-banner-sdk a,
        #onetrust-banner-sdk label,
        #onetrust-banner-sdk input,
        #onetrust-banner-sdk ul,
        #onetrust-banner-sdk li,
        #onetrust-banner-sdk nav,
        #onetrust-banner-sdk table,
        #onetrust-banner-sdk thead,
        #onetrust-banner-sdk tr,
        #onetrust-banner-sdk td,
        #onetrust-banner-sdk tbody,
        #onetrust-banner-sdk .ot-main-content,
        #onetrust-banner-sdk .ot-toggle,
        #onetrust-banner-sdk #ot-content,
        #onetrust-banner-sdk #ot-pc-content,
        #onetrust-banner-sdk .checkbox,
        #onetrust-pc-sdk div,
        #onetrust-pc-sdk span,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #onetrust-pc-sdk p,
        #onetrust-pc-sdk img,
        #onetrust-pc-sdk svg,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk section,
        #onetrust-pc-sdk a,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk input,
        #onetrust-pc-sdk ul,
        #onetrust-pc-sdk li,
        #onetrust-pc-sdk nav,
        #onetrust-pc-sdk table,
        #onetrust-pc-sdk thead,
        #onetrust-pc-sdk tr,
        #onetrust-pc-sdk td,
        #onetrust-pc-sdk tbody,
        #onetrust-pc-sdk .ot-main-content,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk .checkbox,
        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox,
        #ot-sync-ntfy div,
        #ot-sync-ntfy span,
        #ot-sync-ntfy h1,
        #ot-sync-ntfy h2,
        #ot-sync-ntfy h3,
        #ot-sync-ntfy h4,
        #ot-sync-ntfy h5,
        #ot-sync-ntfy h6,
        #ot-sync-ntfy p,
        #ot-sync-ntfy img,
        #ot-sync-ntfy svg,
        #ot-sync-ntfy button,
        #ot-sync-ntfy section,
        #ot-sync-ntfy a,
        #ot-sync-ntfy label,
        #ot-sync-ntfy input,
        #ot-sync-ntfy ul,
        #ot-sync-ntfy li,
        #ot-sync-ntfy nav,
        #ot-sync-ntfy table,
        #ot-sync-ntfy thead,
        #ot-sync-ntfy tr,
        #ot-sync-ntfy td,
        #ot-sync-ntfy tbody,
        #ot-sync-ntfy .ot-main-content,
        #ot-sync-ntfy .ot-toggle,
        #ot-sync-ntfy #ot-content,
        #ot-sync-ntfy #ot-pc-content,
        #ot-sync-ntfy .checkbox {
            font-family: inherit;
            font-weight: normal;
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            margin: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
        }

        #onetrust-banner-sdk label:before,
        #onetrust-banner-sdk label:after,
        #onetrust-banner-sdk .checkbox:after,
        #onetrust-banner-sdk .checkbox:before,
        #onetrust-pc-sdk label:before,
        #onetrust-pc-sdk label:after,
        #onetrust-pc-sdk .checkbox:after,
        #onetrust-pc-sdk .checkbox:before,
        #ot-sdk-cookie-policy label:before,
        #ot-sdk-cookie-policy label:after,
        #ot-sdk-cookie-policy .checkbox:after,
        #ot-sdk-cookie-policy .checkbox:before,
        #ot-sync-ntfy label:before,
        #ot-sync-ntfy label:after,
        #ot-sync-ntfy .checkbox:after,
        #ot-sync-ntfy .checkbox:before {
            content: "";
            content: none;
        }

        #onetrust-banner-sdk .ot-sdk-container,
        #onetrust-pc-sdk .ot-sdk-container,
        #ot-sdk-cookie-policy .ot-sdk-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
        }

        #onetrust-banner-sdk .ot-sdk-column,
        #onetrust-banner-sdk .ot-sdk-columns,
        #onetrust-pc-sdk .ot-sdk-column,
        #onetrust-pc-sdk .ot-sdk-columns,
        #ot-sdk-cookie-policy .ot-sdk-column,
        #ot-sdk-cookie-policy .ot-sdk-columns {
            width: 100%;
            float: left;
            box-sizing: border-box;
            padding: 0;
            display: initial;
        }

        @media (min-width: 400px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 90%;
                padding: 0;
            }
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 100%;
            }

            #onetrust-banner-sdk .ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-columns {
                margin-left: 4%;
            }

            #onetrust-banner-sdk .ot-sdk-column:first-child,
            #onetrust-banner-sdk .ot-sdk-columns:first-child,
            #onetrust-pc-sdk .ot-sdk-column:first-child,
            #onetrust-pc-sdk .ot-sdk-columns:first-child,
            #ot-sdk-cookie-policy .ot-sdk-column:first-child,
            #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
                margin-left: 0;
            }

            #onetrust-banner-sdk .ot-sdk-one.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-one.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-one.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-one.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-columns {
                width: 4.66666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
                width: 13.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
                width: 22%;
            }

            #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
                width: 30.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-five.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-five.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-five.ot-sdk-columns {
                width: 39.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-six.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-six.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-six.ot-sdk-columns {
                width: 48%;
            }

            #onetrust-banner-sdk .ot-sdk-seven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-seven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-seven.ot-sdk-columns {
                width: 56.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
                width: 65.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
                width: 74%;
            }

            #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
                width: 82.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
                width: 91.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
                width: 100%;
                margin-left: 0;
            }

            #onetrust-banner-sdk .ot-sdk-one-third.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-one-third.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-one-third.ot-sdk-column {
                width: 30.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-two-thirds.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-two-thirds.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-two-thirds.ot-sdk-column {
                width: 65.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-one-half.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-one-half.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-one-half.ot-sdk-column {
                width: 48%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-columns {
                margin-left: 8.66666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-columns {
                margin-left: 17.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-columns {
                margin-left: 26%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-columns {
                margin-left: 34.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-columns {
                margin-left: 43.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-columns {
                margin-left: 52%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-columns {
                margin-left: 60.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-columns {
                margin-left: 69.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-columns {
                margin-left: 78%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-columns {
                margin-left: 86.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-columns {
                margin-left: 95.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-columns {
                margin-left: 34.6666666667%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-columns {
                margin-left: 69.3333333333%;
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-columns {
                margin-left: 52%;
            }
        }

        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin-top: 0;
            font-weight: 600;
            font-family: inherit;
        }

        #onetrust-banner-sdk h1,
        #onetrust-pc-sdk h1,
        #ot-sdk-cookie-policy h1 {
            font-size: 1.5rem;
            line-height: 1.2;
        }

        #onetrust-banner-sdk h2,
        #onetrust-pc-sdk h2,
        #ot-sdk-cookie-policy h2 {
            font-size: 1.5rem;
            line-height: 1.25;
        }

        #onetrust-banner-sdk h3,
        #onetrust-pc-sdk h3,
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5rem;
            line-height: 1.3;
        }

        #onetrust-banner-sdk h4,
        #onetrust-pc-sdk h4,
        #ot-sdk-cookie-policy h4 {
            font-size: 1.5rem;
            line-height: 1.35;
        }

        #onetrust-banner-sdk h5,
        #onetrust-pc-sdk h5,
        #ot-sdk-cookie-policy h5 {
            font-size: 1.5rem;
            line-height: 1.5;
        }

        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h6 {
            font-size: 1.5rem;
            line-height: 1.6;
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk h1,
            #onetrust-pc-sdk h1,
            #ot-sdk-cookie-policy h1 {
                font-size: 1.5rem;
            }

            #onetrust-banner-sdk h2,
            #onetrust-pc-sdk h2,
            #ot-sdk-cookie-policy h2 {
                font-size: 1.5rem;
            }

            #onetrust-banner-sdk h3,
            #onetrust-pc-sdk h3,
            #ot-sdk-cookie-policy h3 {
                font-size: 1.5rem;
            }

            #onetrust-banner-sdk h4,
            #onetrust-pc-sdk h4,
            #ot-sdk-cookie-policy h4 {
                font-size: 1.5rem;
            }

            #onetrust-banner-sdk h5,
            #onetrust-pc-sdk h5,
            #ot-sdk-cookie-policy h5 {
                font-size: 1.5rem;
            }

            #onetrust-banner-sdk h6,
            #onetrust-pc-sdk h6,
            #ot-sdk-cookie-policy h6 {
                font-size: 1.5rem;
            }
        }

        #onetrust-banner-sdk p,
        #onetrust-pc-sdk p,
        #ot-sdk-cookie-policy p {
            margin: 0 0 1em 0;
            font-family: inherit;
            line-height: normal;
        }

        #onetrust-banner-sdk a,
        #onetrust-pc-sdk a,
        #ot-sdk-cookie-policy a {
            color: #565656;
            text-decoration: underline;
        }

        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: #565656;
            text-decoration: none;
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit;
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk input[type="submit"],
        #onetrust-banner-sdk input[type="reset"],
        #onetrust-banner-sdk input[type="button"],
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk input[type="submit"],
        #onetrust-pc-sdk input[type="reset"],
        #onetrust-pc-sdk input[type="button"],
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy input[type="submit"],
        #ot-sdk-cookie-policy input[type="reset"],
        #ot-sdk-cookie-policy input[type="button"] {
            display: inline-block;
            height: 38px;
            padding: 0 30px;
            color: #555;
            text-align: center;
            font-size: 0.9em;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0.01em;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 2px;
            border: 1px solid #bbb;
            cursor: pointer;
            box-sizing: border-box;
        }

        #onetrust-banner-sdk .ot-sdk-button:hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:hover,
        #onetrust-banner-sdk input[type="submit"]:hover,
        #onetrust-banner-sdk input[type="reset"]:hover,
        #onetrust-banner-sdk input[type="button"]:hover,
        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-banner-sdk input[type="submit"]:focus,
        #onetrust-banner-sdk input[type="reset"]:focus,
        #onetrust-banner-sdk input[type="button"]:focus,
        #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:hover,
        #onetrust-pc-sdk input[type="submit"]:hover,
        #onetrust-pc-sdk input[type="reset"]:hover,
        #onetrust-pc-sdk input[type="button"]:hover,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk input[type="submit"]:focus,
        #onetrust-pc-sdk input[type="reset"]:focus,
        #onetrust-pc-sdk input[type="button"]:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:hover,
        #ot-sdk-cookie-policy input[type="submit"]:hover,
        #ot-sdk-cookie-policy input[type="reset"]:hover,
        #ot-sdk-cookie-policy input[type="button"]:hover,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy input[type="submit"]:focus,
        #ot-sdk-cookie-policy input[type="reset"]:focus,
        #ot-sdk-cookie-policy input[type="button"]:focus {
            color: #333;
            border-color: #888;
            opacity: 0.7;
        }

        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-banner-sdk input[type="submit"]:focus,
        #onetrust-banner-sdk input[type="reset"]:focus,
        #onetrust-banner-sdk input[type="button"]:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk input[type="submit"]:focus,
        #onetrust-pc-sdk input[type="reset"]:focus,
        #onetrust-pc-sdk input[type="button"]:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy input[type="submit"]:focus,
        #ot-sdk-cookie-policy input[type="reset"]:focus,
        #ot-sdk-cookie-policy input[type="button"]:focus {
            outline: 2px solid #000;
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-banner-sdk button.ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-pc-sdk button.ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary {
            color: #fff;
            background-color: #33c3f0;
            border-color: #33c3f0;
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus {
            color: #fff;
            background-color: #1eaedb;
            border-color: #1eaedb;
        }

        #onetrust-banner-sdk input[type="email"],
        #onetrust-banner-sdk input[type="number"],
        #onetrust-banner-sdk input[type="search"],
        #onetrust-banner-sdk input[type="text"],
        #onetrust-banner-sdk input[type="tel"],
        #onetrust-banner-sdk input[type="url"],
        #onetrust-banner-sdk input[type="password"],
        #onetrust-banner-sdk textarea,
        #onetrust-banner-sdk select,
        #onetrust-pc-sdk input[type="email"],
        #onetrust-pc-sdk input[type="number"],
        #onetrust-pc-sdk input[type="search"],
        #onetrust-pc-sdk input[type="text"],
        #onetrust-pc-sdk input[type="tel"],
        #onetrust-pc-sdk input[type="url"],
        #onetrust-pc-sdk input[type="password"],
        #onetrust-pc-sdk textarea,
        #onetrust-pc-sdk select,
        #ot-sdk-cookie-policy input[type="email"],
        #ot-sdk-cookie-policy input[type="number"],
        #ot-sdk-cookie-policy input[type="search"],
        #ot-sdk-cookie-policy input[type="text"],
        #ot-sdk-cookie-policy input[type="tel"],
        #ot-sdk-cookie-policy input[type="url"],
        #ot-sdk-cookie-policy input[type="password"],
        #ot-sdk-cookie-policy textarea,
        #ot-sdk-cookie-policy select {
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box;
        }

        #onetrust-banner-sdk input[type="email"],
        #onetrust-banner-sdk input[type="number"],
        #onetrust-banner-sdk input[type="search"],
        #onetrust-banner-sdk input[type="text"],
        #onetrust-banner-sdk input[type="tel"],
        #onetrust-banner-sdk input[type="url"],
        #onetrust-banner-sdk input[type="password"],
        #onetrust-banner-sdk textarea,
        #onetrust-pc-sdk input[type="email"],
        #onetrust-pc-sdk input[type="number"],
        #onetrust-pc-sdk input[type="search"],
        #onetrust-pc-sdk input[type="text"],
        #onetrust-pc-sdk input[type="tel"],
        #onetrust-pc-sdk input[type="url"],
        #onetrust-pc-sdk input[type="password"],
        #onetrust-pc-sdk textarea,
        #ot-sdk-cookie-policy input[type="email"],
        #ot-sdk-cookie-policy input[type="number"],
        #ot-sdk-cookie-policy input[type="search"],
        #ot-sdk-cookie-policy input[type="text"],
        #ot-sdk-cookie-policy input[type="tel"],
        #ot-sdk-cookie-policy input[type="url"],
        #ot-sdk-cookie-policy input[type="password"],
        #ot-sdk-cookie-policy textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        #onetrust-banner-sdk textarea,
        #onetrust-pc-sdk textarea,
        #ot-sdk-cookie-policy textarea {
            min-height: 65px;
            padding-top: 6px;
            padding-bottom: 6px;
        }

        #onetrust-banner-sdk input[type="email"]:focus,
        #onetrust-banner-sdk input[type="number"]:focus,
        #onetrust-banner-sdk input[type="search"]:focus,
        #onetrust-banner-sdk input[type="text"]:focus,
        #onetrust-banner-sdk input[type="tel"]:focus,
        #onetrust-banner-sdk input[type="url"]:focus,
        #onetrust-banner-sdk input[type="password"]:focus,
        #onetrust-banner-sdk textarea:focus,
        #onetrust-banner-sdk select:focus,
        #onetrust-pc-sdk input[type="email"]:focus,
        #onetrust-pc-sdk input[type="number"]:focus,
        #onetrust-pc-sdk input[type="search"]:focus,
        #onetrust-pc-sdk input[type="text"]:focus,
        #onetrust-pc-sdk input[type="tel"]:focus,
        #onetrust-pc-sdk input[type="url"]:focus,
        #onetrust-pc-sdk input[type="password"]:focus,
        #onetrust-pc-sdk textarea:focus,
        #onetrust-pc-sdk select:focus,
        #ot-sdk-cookie-policy input[type="email"]:focus,
        #ot-sdk-cookie-policy input[type="number"]:focus,
        #ot-sdk-cookie-policy input[type="search"]:focus,
        #ot-sdk-cookie-policy input[type="text"]:focus,
        #ot-sdk-cookie-policy input[type="tel"]:focus,
        #ot-sdk-cookie-policy input[type="url"]:focus,
        #ot-sdk-cookie-policy input[type="password"]:focus,
        #ot-sdk-cookie-policy textarea:focus,
        #ot-sdk-cookie-policy select:focus {
            border: 1px solid #000;
            outline: 0;
        }

        #onetrust-banner-sdk label,
        #onetrust-banner-sdk legend,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk legend,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy legend {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        #onetrust-banner-sdk fieldset,
        #onetrust-pc-sdk fieldset,
        #ot-sdk-cookie-policy fieldset {
            padding: 0;
            border-width: 0;
        }

        #onetrust-banner-sdk input[type="checkbox"],
        #onetrust-banner-sdk input[type="radio"],
        #onetrust-pc-sdk input[type="checkbox"],
        #onetrust-pc-sdk input[type="radio"],
        #ot-sdk-cookie-policy input[type="checkbox"],
        #ot-sdk-cookie-policy input[type="radio"] {
            display: inline;
        }

        #onetrust-banner-sdk label>.label-body,
        #onetrust-pc-sdk label>.label-body,
        #ot-sdk-cookie-policy label>.label-body {
            display: inline-block;
            margin-left: 0.5rem;
            font-weight: normal;
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            list-style: circle inside;
        }

        #onetrust-banner-sdk ol,
        #onetrust-pc-sdk ol,
        #ot-sdk-cookie-policy ol {
            list-style: decimal inside;
        }

        #onetrust-banner-sdk ol,
        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ol,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ol,
        #ot-sdk-cookie-policy ul {
            padding-left: 0;
            margin-top: 0;
        }

        #onetrust-banner-sdk ul ul,
        #onetrust-banner-sdk ul ol,
        #onetrust-banner-sdk ol ol,
        #onetrust-banner-sdk ol ul,
        #onetrust-pc-sdk ul ul,
        #onetrust-pc-sdk ul ol,
        #onetrust-pc-sdk ol ol,
        #onetrust-pc-sdk ol ul,
        #ot-sdk-cookie-policy ul ul,
        #ot-sdk-cookie-policy ul ol,
        #ot-sdk-cookie-policy ol ol,
        #ot-sdk-cookie-policy ol ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%;
        }

        #onetrust-banner-sdk li,
        #onetrust-pc-sdk li,
        #ot-sdk-cookie-policy li {
            margin-bottom: 1rem;
        }

        #onetrust-banner-sdk code,
        #onetrust-pc-sdk code,
        #ot-sdk-cookie-policy code {
            padding: 0.2rem 0.5rem;
            margin: 0 0.2rem;
            font-size: 90%;
            white-space: nowrap;
            background: #f1f1f1;
            border: 1px solid #e1e1e1;
            border-radius: 4px;
        }

        #onetrust-banner-sdk pre>code,
        #onetrust-pc-sdk pre>code,
        #ot-sdk-cookie-policy pre>code {
            display: block;
            padding: 1rem 1.5rem;
            white-space: pre;
        }

        #onetrust-banner-sdk th,
        #onetrust-banner-sdk td,
        #onetrust-pc-sdk th,
        #onetrust-pc-sdk td,
        #ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1;
        }

        #onetrust-banner-sdk .ot-sdk-u-full-width,
        #onetrust-pc-sdk .ot-sdk-u-full-width,
        #ot-sdk-cookie-policy .ot-sdk-u-full-width {
            width: 100%;
            box-sizing: border-box;
        }

        #onetrust-banner-sdk .ot-sdk-u-max-full-width,
        #onetrust-pc-sdk .ot-sdk-u-max-full-width,
        #ot-sdk-cookie-policy .ot-sdk-u-max-full-width {
            max-width: 100%;
            box-sizing: border-box;
        }

        #onetrust-banner-sdk .ot-sdk-u-pull-right,
        #onetrust-pc-sdk .ot-sdk-u-pull-right,
        #ot-sdk-cookie-policy .ot-sdk-u-pull-right {
            float: right;
        }

        #onetrust-banner-sdk .ot-sdk-u-pull-left,
        #onetrust-pc-sdk .ot-sdk-u-pull-left,
        #ot-sdk-cookie-policy .ot-sdk-u-pull-left {
            float: left;
        }

        #onetrust-banner-sdk hr,
        #onetrust-pc-sdk hr,
        #ot-sdk-cookie-policy hr {
            margin-top: 3rem;
            margin-bottom: 3.5rem;
            border-width: 0;
            border-top: 1px solid #e1e1e1;
        }

        #onetrust-banner-sdk .ot-sdk-container:after,
        #onetrust-banner-sdk .ot-sdk-row:after,
        #onetrust-banner-sdk .ot-sdk-u-cf,
        #onetrust-pc-sdk .ot-sdk-container:after,
        #onetrust-pc-sdk .ot-sdk-row:after,
        #onetrust-pc-sdk .ot-sdk-u-cf,
        #ot-sdk-cookie-policy .ot-sdk-container:after,
        #ot-sdk-cookie-policy .ot-sdk-row:after,
        #ot-sdk-cookie-policy .ot-sdk-u-cf {
            content: "";
            display: table;
            clear: both;
        }

        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            margin: 0;
            max-width: none;
            display: block;
        }

        #onetrust-banner-sdk {
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.2);
        }

        #onetrust-banner-sdk.otCenterRounded {
            z-index: 2147483645;
            top: 10%;
            position: fixed;
            right: 0;
            background-color: #fff;
            width: 60%;
            max-width: 650px;
            border-radius: 2.5px;
            left: 1em;
            margin: 0 auto;
            font-size: 14px;
            max-height: 90%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #onetrust-banner-sdk::-webkit-scrollbar {
            width: 11px;
        }

        #onetrust-banner-sdk::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #c1c1c1;
        }

        #onetrust-banner-sdk {
            scrollbar-arrow-color: #c1c1c1;
            scrollbar-darkshadow-color: #c1c1c1;
            scrollbar-face-color: #c1c1c1;
            scrollbar-shadow-color: #c1c1c1;
        }

        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk p {
            color: dimgray;
        }

        #onetrust-banner-sdk #onetrust-policy {
            margin-top: 20px;
        }

        #onetrust-banner-sdk #onetrust-policy-title {
            float: left;
            text-align: left;
            font-size: 1em;
            line-height: 1.4;
            margin-bottom: 0;
            padding: 0 0 10px 30px;
            width: calc(100% - 90px);
        }

        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-banner-sdk .ot-gv-list-handler {
            clear: both;
            float: left;
            margin: 0 30px 10px 30px;
            font-size: 0.813em;
            line-height: 1.5;
        }

        #onetrust-banner-sdk #onetrust-policy-text *,
        #onetrust-banner-sdk .ot-b-addl-desc *,
        #onetrust-banner-sdk .ot-gv-list-handler * {
            line-height: inherit;
            font-size: inherit;
            margin: 0;
        }

        #onetrust-banner-sdk .ot-gv-list-handler {
            padding: 0;
            border: 0;
            height: auto;
            width: auto;
        }

        #onetrust-banner-sdk .ot-b-addl-desc {
            display: block;
        }

        #onetrust-banner-sdk #onetrust-button-group-parent {
            padding: 15px 30px;
            text-align: center;
        }

        #onetrust-banner-sdk #onetrust-button-group-parent:not(.has-reject-all-button) #onetrust-button-group {
            text-align: right;
        }

        #onetrust-banner-sdk #onetrust-button-group {
            text-align: center;
            display: inline-block;
            width: 100%;
        }

        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            margin-right: 1em;
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            border: 1px solid #6cc04a;
            max-width: 45%;
        }

        #onetrust-banner-sdk .banner-actions-container {
            float: right;
            width: 50%;
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: #fff;
            border: none;
            color: #6cc04a;
            text-decoration: underline;
            padding-left: 0;
            padding-right: 0;
        }

        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            background-color: #6cc04a;
            color: #fff;
            border-color: #6cc04a;
            min-width: 135px;
            padding: 12px 10px;
            letter-spacing: 0.05em;
            line-height: 1.4;
            font-size: 0.813em;
            font-weight: 600;
            height: auto;
            white-space: normal;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
            float: left;
            max-width: calc(40% - 18px);
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
            text-align: left;
            margin-right: 0;
        }

        #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
            max-width: 60%;
            width: auto;
        }

        #onetrust-banner-sdk .ot-close-icon {
            width: 44px;
            height: 44px;
            background-size: 12px;
            margin: -18px -18px 0 0;
            border: none;
            display: inline-block;
            padding: 0;
        }

        #onetrust-banner-sdk #onetrust-close-btn-container {
            float: right;
            margin-right: 20px;
        }

        #onetrust-banner-sdk .banner_logo {
            display: none;
        }

        #onetrust-banner-sdk #banner-options {
            float: left;
            padding: 0 30px;
            width: calc(100% - 90px);
        }

        #onetrust-banner-sdk .banner-option {
            margin-bottom: 10px;
        }

        #onetrust-banner-sdk .banner-option-input {
            cursor: pointer;
            width: auto;
            height: auto;
            border: none;
            padding: 0;
            padding-right: 3px;
            margin: 0 0 6px;
            font-size: 0.82em;
            line-height: 1.4;
        }

        #onetrust-banner-sdk .banner-option-input * {
            pointer-events: none;
            font-size: inherit;
            line-height: inherit;
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded="true"] .ot-arrow-container {
            transform: rotate(90deg);
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded="true"]~.banner-option-details {
            height: auto;
            display: block;
        }

        #onetrust-banner-sdk .banner-option-header {
            cursor: pointer;
            display: inline-block;
        }

        #onetrust-banner-sdk .banner-option-header :first-child {
            color: dimgray;
            font-weight: bold;
            float: left;
        }

        #onetrust-banner-sdk .ot-arrow-container,
        #onetrust-banner-sdk .banner-option-details {
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
        }

        #onetrust-banner-sdk .ot-arrow-container {
            display: inline-block;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid dimgray;
            margin-left: 10px;
            vertical-align: middle;
        }

        #onetrust-banner-sdk .banner-option-details {
            display: none;
            font-size: 0.83em;
            line-height: 1.5;
            height: 0px;
            padding: 10px 10px 5px 10px;
        }

        #onetrust-banner-sdk .banner-option-details * {
            font-size: inherit;
            line-height: inherit;
            color: dimgray;
        }

        #onetrust-banner-sdk .ot-dpd-container {
            float: left;
            margin: 0 30px 10px 30px;
        }

        #onetrust-banner-sdk .ot-dpd-title {
            font-weight: bold;
            padding-bottom: 10px;
        }

        #onetrust-banner-sdk .ot-dpd-title {
            font-size: 1em;
            line-height: 1.4;
        }

        #onetrust-banner-sdk .ot-dpd-desc {
            font-size: 0.813em;
            line-height: 1.5;
            margin-bottom: 0;
        }

        #onetrust-banner-sdk .ot-dpd-desc * {
            margin: 0;
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            display: block;
            margin-left: 0px;
            margin-top: 5px;
            padding: 0;
            margin-bottom: 0;
            border: 0;
            line-height: normal;
            height: auto;
            width: auto;
        }

        #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc {
            float: left;
            margin: 0 30px 10px 30px;
        }

        #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc {
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            line-height: 1.5;
            float: none;
        }

        #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: bold;
            margin-left: 5px;
        }

        @media only screen and (max-width: 425px) {

            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%;
                margin-bottom: 10px;
            }

            #onetrust-banner-sdk #onetrust-pc-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler {
                margin-right: 0;
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
                text-align: center;
            }

            #onetrust-banner-sdk .banner-actions-container,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%;
                max-width: none;
            }

            #onetrust-banner-sdk.otCenterRounded {
                left: 0;
                width: 95%;
                top: 50%;
                transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
            }
        }

        @media only screen and (max-width: 600px) {
            #onetrust-banner-sdk .ot-sdk-container {
                width: auto;
                padding: 0;
            }

            #onetrust-banner-sdk #onetrust-policy-title {
                padding: 0 22px 10px 22px;
            }

            #onetrust-banner-sdk #onetrust-policy-text,
            #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc,
            #onetrust-banner-sdk .ot-dpd-container {
                margin: 0 22px 10px 22px;
                width: calc(100% - 44px);
            }

            #onetrust-banner-sdk #onetrust-button-group-parent {
                padding: 15px 22px;
            }

            #onetrust-banner-sdk #banner-options {
                padding: 0 22px;
                width: calc(100% - 44px);
            }

            #onetrust-banner-sdk .banner-option {
                margin-bottom: 6px;
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
                float: none;
                max-width: 100%;
            }

            #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
                width: 100%;
                text-align: center;
                max-width: 100%;
            }
        }

        @media only screen and (min-width: 426px) and (max-width: 896px) {
            #onetrust-banner-sdk.otCenterRounded {
                left: 0;
                top: 15%;
                transform: translateY(-13%);
                -webkit-transform: translateY(-13%);
                max-width: 600px;
                width: 95%;
            }
        }

        #onetrust-consent-sdk #onetrust-banner-sdk {
            background-color: #ffffff;
        }

        #onetrust-consent-sdk #onetrust-policy-title,
        #onetrust-consent-sdk #onetrust-policy-text,
        #onetrust-consent-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk .ot-dpd-desc,
        #onetrust-consent-sdk .ot-dpd-title,
        #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk #onetrust-banner-sdk #banner-options * {
            color: #696969;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
            background-color: #e9e9e9;
        }

        #onetrust-consent-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler {
            background-color: #1371c3;
            border-color: #1371c3;
            color: #ffffff;
        }

        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            color: #1371c3;
            border-color: #1371c3;
            background-color: #ffffff;
        }

        a:focus,
        a:active,
        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link,
        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            outline: none;
            -moz-outline-style: initial;
        }

        #onetrust-policy-text a,
        #onetrust-button-group .cookie-setting-link {
            text-decoration: none !important;
        }

        #ot-sdk-btn-floating,
        amp-consent #post-consent-ui,
        .ot-pc-logo,
        .ot-pc-footer-logo {
            display: none !important;
        }

        #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-dpd-desc {
            line-height: 1.25;
        }

        #onetrust-banner-sdk .ot-dpd-title {
            padding-bottom: 0;
            font-size: 12px;
            font-weight: normal;
        }

        /* bloki tekstowe na pierwszej warstwie */
        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc,
        #onetrust-banner-sdk .ot-dpd-container {
            margin: 0 20px 5px 20px;
        }

        /* zaufani partnerzy i typy zgód inline */
        #onetrust-banner-sdk .onetrust-vendors-list-handler,
        #onetrust-banner-sdk .ot-dpd-title,
        #onetrust-banner-sdk .ot-dpd-content,
        #onetrust-banner-sdk .ot-dpd-desc {
            display: inline;
            margin: 0;
        }

        /* gorny odstep buttonow dowiedz sie wiecej i akceptuj */
        #onetrust-banner-sdk #onetrust-button-group-parent {
            padding: 10px 30px 0px 30px;
        }

        /* poprawa wyglądu baretki z krzyzykiem zamykajacym */
        #onetrust-pc-sdk .ot-pc-header {
            height: 29px;
        }

        /* powiekszenie krzyzyka zamykajacego */
        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            width: 16px;
            height: 16px;
            right: 10px;
        }

        #onetrust-pc-sdk.otPcCenter {
            overflow: hidden;
            position: fixed;
            margin: 0 auto;
            top: 5%;
            bottom: 10%;
            right: 0;
            left: 0;
            width: 40%;
            max-width: 575px;
            min-width: 575px;
            border-radius: 2.5px;
            z-index: 2147483647;
            background-color: #fff;
            -webkit-box-shadow: 0px 2px 10px -3px #999;
            -moz-box-shadow: 0px 2px 10px -3px #999;
            box-shadow: 0px 2px 10px -3px #999;
        }

        #onetrust-pc-sdk.otPcCenter[dir="rtl"] {
            right: 0;
            left: 0;
        }

        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus,
        #onetrust-pc-sdk .ot-hide-tgl {
            visibility: hidden;
        }

        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr *,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus *,
        #onetrust-pc-sdk .ot-hide-tgl * {
            visibility: hidden;
        }

        #onetrust-pc-sdk #ot-gn-venlst .ot-ven-item .ot-acc-hdr {
            min-height: 40px;
        }

        #onetrust-pc-sdk .ot-pc-header {
            height: 39px;
            padding: 10px 0 10px 30px;
            border-bottom: 1px solid #e9e9e9;
        }

        #onetrust-pc-sdk #ot-pc-title,
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk .ot-cat-header,
        #onetrust-pc-sdk #ot-lst-title,
        #onetrust-pc-sdk .ot-ven-hdr .ot-ven-name,
        #onetrust-pc-sdk .ot-always-active {
            font-weight: bold;
            color: dimgray;
        }

        #onetrust-pc-sdk .ot-cat-header {
            float: left;
            font-weight: 600;
            font-size: 0.875em;
            line-height: 1.5;
            max-width: 90%;
            vertical-align: middle;
        }

        #onetrust-pc-sdk .ot-always-active-group .ot-cat-header {
            width: 55%;
            font-weight: 700;
        }

        #onetrust-pc-sdk .ot-cat-item p {
            clear: both;
            float: left;
            margin-top: 10px;
            margin-bottom: 5px;
            line-height: 1.5;
            font-size: 0.812em;
            color: dimgray;
        }

        #onetrust-pc-sdk .ot-close-icon {
            height: 44px;
            width: 44px;
            background-size: 10px;
        }

        #onetrust-pc-sdk #ot-pc-title {
            float: left;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 10px;
            margin-top: 10px;
            width: 100%;
        }

        #onetrust-pc-sdk #accept-recommended-btn-handler {
            margin-right: 10px;
            margin-bottom: 25px;
            outline-offset: -1px;
        }

        #onetrust-pc-sdk #ot-pc-desc {
            clear: both;
            width: 100%;
            font-size: 0.812em;
            line-height: 1.5;
            margin-bottom: 25px;
        }

        #onetrust-pc-sdk #ot-pc-desc a {
            margin-left: 5px;
        }

        #onetrust-pc-sdk #ot-pc-desc * {
            font-size: inherit;
            line-height: inherit;
        }

        #onetrust-pc-sdk #ot-pc-desc ul li {
            padding: 10px 0px;
        }

        #onetrust-pc-sdk a {
            color: #656565;
            cursor: pointer;
        }

        #onetrust-pc-sdk a:hover {
            color: #3860be;
        }

        #onetrust-pc-sdk label {
            margin-bottom: 0;
        }

        #onetrust-pc-sdk #vdr-lst-dsc {
            font-size: 0.812em;
            line-height: 1.5;
            padding: 10px 15px 5px 15px;
        }

        #onetrust-pc-sdk button {
            max-width: 394px;
            padding: 12px 30px;
            line-height: 1;
            word-break: break-word;
            word-wrap: break-word;
            white-space: normal;
            font-weight: bold;
            height: auto;
        }

        #onetrust-pc-sdk .ot-link-btn {
            padding: 0;
            margin-bottom: 0;
            border: 0;
            font-weight: normal;
            line-height: normal;
            width: auto;
            height: auto;
        }

        #onetrust-pc-sdk #ot-pc-content {
            position: absolute;
            overflow-y: scroll;
            padding-left: 0px;
            padding-right: 30px;
            top: 60px;
            bottom: 110px;
            margin: 1px 3px 0 30px;
            width: calc(100% - 63px);
        }

        #onetrust-pc-sdk .ot-cat-grp .ot-always-active {
            float: right;
            clear: none;
            color: #3860be;
            margin: 0;
            font-size: 0.813em;
            line-height: 1.3;
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-track {
            margin-right: 20px;
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar {
            width: 11px;
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #d8d8d8;
        }

        #onetrust-pc-sdk input[type="checkbox"]:focus+.ot-acc-hdr {
            outline: #000 1px solid;
        }

        #onetrust-pc-sdk .ot-pc-scrollbar {
            scrollbar-arrow-color: #d8d8d8;
            scrollbar-darkshadow-color: #d8d8d8;
            scrollbar-face-color: #d8d8d8;
            scrollbar-shadow-color: #d8d8d8;
        }

        #onetrust-pc-sdk .save-preference-btn-handler {
            margin-right: 20px;
        }

        #onetrust-pc-sdk .ot-pc-refuse-all-handler {
            margin-right: 10px;
        }

        #onetrust-pc-sdk #privacy-notice-link {
            text-decoration: underline;
        }

        #onetrust-pc-sdk .ot-subgrp-cntr {
            display: inline-block;
            clear: both;
            width: 100%;
            padding-top: 15px;
        }

        #onetrust-pc-sdk .ot-switch+.ot-subgrp-cntr {
            padding-top: 10px;
        }

        #onetrust-pc-sdk ul.ot-subgrps {
            margin: 0;
            font-size: initial;
        }

        #onetrust-pc-sdk ul.ot-subgrps li p,
        #onetrust-pc-sdk ul.ot-subgrps li h5 {
            font-size: 0.813em;
            line-height: 1.4;
            color: dimgray;
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-switch {
            min-height: auto;
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-switch-nob {
            top: 0;
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr {
            display: inline-block;
            width: 100%;
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-txt {
            margin: 0;
        }

        #onetrust-pc-sdk ul.ot-subgrps li {
            padding: 0;
            border: none;
        }

        #onetrust-pc-sdk ul.ot-subgrps li h5 {
            position: relative;
            top: 5px;
            font-weight: bold;
            margin-bottom: 0;
            float: left;
        }

        #onetrust-pc-sdk li.ot-subgrp {
            margin-left: 20px;
            overflow: auto;
        }

        #onetrust-pc-sdk li.ot-subgrp>h5 {
            width: calc(100% - 100px);
        }

        #onetrust-pc-sdk .ot-cat-item p>ul,
        #onetrust-pc-sdk li.ot-subgrp p>ul {
            margin: 0px;
            list-style: disc;
            margin-left: 15px;
            font-size: inherit;
        }

        #onetrust-pc-sdk .ot-cat-item p>ul li,
        #onetrust-pc-sdk li.ot-subgrp p>ul li {
            font-size: inherit;
            padding-top: 10px;
            padding-left: 0px;
            padding-right: 0px;
            border: none;
        }

        #onetrust-pc-sdk .ot-cat-item p>ul li:last-child,
        #onetrust-pc-sdk li.ot-subgrp p>ul li:last-child {
            padding-bottom: 10px;
        }

        #onetrust-pc-sdk .ot-pc-logo {
            height: 40px;
            width: 120px;
            display: inline-block;
        }

        #onetrust-pc-sdk .ot-pc-footer {
            position: absolute;
            bottom: 0px;
            width: 100%;
            max-height: 160px;
            border-top: 1px solid #d8d8d8;
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-refuse-all-handler {
            margin-bottom: 0px;
        }

        #onetrust-pc-sdk.ot-ftr-stacked #ot-pc-content {
            bottom: 160px;
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-footer button {
            width: 100%;
            max-width: none;
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
            margin: 0 30px;
            width: calc(100% - 60px);
            padding-right: 0;
        }

        #onetrust-pc-sdk .ot-pc-footer-logo {
            height: 30px;
            width: 100%;
            text-align: right;
            background: #f4f4f4;
        }

        #onetrust-pc-sdk .ot-pc-footer-logo a {
            display: inline-block;
            margin-top: 5px;
            margin-right: 10px;
        }

        #onetrust-pc-sdk[dir="rtl"] .ot-pc-footer-logo {
            direction: rtl;
        }

        #onetrust-pc-sdk[dir="rtl"] .ot-pc-footer-logo a {
            margin-right: 25px;
        }

        #onetrust-pc-sdk .ot-tgl {
            float: right;
            position: relative;
            z-index: 1;
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #cddcf2;
            border: 1px solid #3860be;
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
            background-color: #3860be;
            border-color: #3860be;
        }

        #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch {
            outline: #000 solid 1px;
        }

        #onetrust-pc-sdk .ot-switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 25px;
        }

        #onetrust-pc-sdk .ot-switch-nob {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #f2f1f1;
            border: 1px solid #ddd;
            transition: all 0.2s ease-in 0s;
            -moz-transition: all 0.2s ease-in 0s;
            -o-transition: all 0.2s ease-in 0s;
            -webkit-transition: all 0.2s ease-in 0s;
            border-radius: 20px;
        }

        #onetrust-pc-sdk .ot-switch-nob:before {
            position: absolute;
            content: "";
            height: 21px;
            width: 21px;
            bottom: 1px;
            background-color: #7d7d7d;
            -webkit-transition: 0.4s;
            transition: 0.4s;
            border-radius: 20px;
        }

        #onetrust-pc-sdk .ot-chkbox input:checked~label::before {
            background-color: #3860be;
        }

        #onetrust-pc-sdk .ot-chkbox input+label::after {
            content: none;
            color: #fff;
        }

        #onetrust-pc-sdk .ot-chkbox input:checked+label::after {
            content: "";
        }

        #onetrust-pc-sdk .ot-chkbox input:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto;
        }

        #onetrust-pc-sdk .ot-chkbox label {
            position: relative;
            display: inline-block;
            padding-left: 30px;
            cursor: pointer;
            font-weight: 500;
        }

        #onetrust-pc-sdk .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-chkbox label::after {
            position: absolute;
            content: "";
            display: inline-block;
            border-radius: 3px;
        }

        #onetrust-pc-sdk .ot-chkbox label::before {
            height: 18px;
            width: 18px;
            border: 1px solid #3860be;
            left: 0px;
            top: auto;
        }

        #onetrust-pc-sdk .ot-chkbox label::after {
            height: 5px;
            width: 9px;
            border-left: 3px solid;
            border-bottom: 3px solid;
            transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            left: 4px;
            top: 5px;
        }

        #onetrust-pc-sdk .ot-label-txt {
            display: none;
        }

        #onetrust-pc-sdk .ot-chkbox input,
        #onetrust-pc-sdk .ot-tgl input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        #onetrust-pc-sdk .ot-arw-cntr {
            float: right;
            position: relative;
        }

        #onetrust-pc-sdk .ot-arw-cntr .ot-arw {
            width: 16px;
            height: 16px;
            margin-left: 5px;
            color: dimgray;
            display: inline-block;
            vertical-align: middle;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
            transition: all 300ms ease-in 0s;
        }

        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
        }

        #onetrust-pc-sdk input[type="checkbox"]:focus+.ot-acc-hdr {
            outline: #000 1px solid;
        }

        #onetrust-pc-sdk .ot-tgl-cntr,
        #onetrust-pc-sdk .ot-arw-cntr {
            display: inline-block;
        }

        #onetrust-pc-sdk .ot-tgl-cntr {
            width: 45px;
            float: right;
            margin-top: 2px;
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-tgl-cntr {
            margin-top: 10px;
        }

        #onetrust-pc-sdk .ot-always-active-subgroup {
            width: auto;
            padding-left: 0px !important;
            top: 3px;
            position: relative;
        }

        #onetrust-pc-sdk .ot-label-status {
            padding-left: 5px;
            font-size: 0.75em;
            display: none;
        }

        #onetrust-pc-sdk .ot-arw-cntr {
            margin-top: -1px;
        }

        #onetrust-pc-sdk .ot-arw-cntr svg {
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
            transition: all 300ms ease-in 0s;
            height: 10px;
            width: 10px;
        }

        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
        }

        #onetrust-pc-sdk .ot-arw {
            width: 10px;
            margin-left: 15px;
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-bottom: 0;
        }

        #onetrust-pc-sdk .ot-hlst-cntr {
            margin-top: 5px;
            display: inline-block;
            width: 100%;
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-pc-sdk .category-host-list-handler {
            clear: both;
            color: #3860be;
            margin-left: 0;
            font-size: 0.813em;
            text-decoration: none;
            float: left;
            overflow: hidden;
        }

        #onetrust-pc-sdk .category-vendors-list-handler:hover,
        #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            color: #1883fd;
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a {
            clear: none;
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a::after {
            content: "";
            height: 15px;
            width: 15px;
            background-repeat: no-repeat;
            margin-left: 5px;
            float: right;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 511.626 511.627'%3E%3Cg fill='%231276CE'%3E%3Cpath d='M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z'/%3E%3Cpath d='M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z'/%3E%3C/g%3E%3C/svg%3E");
        }

        #onetrust-pc-sdk .back-btn-handler {
            font-size: 1em;
            text-decoration: none;
        }

        #onetrust-pc-sdk .back-btn-handler:hover {
            opacity: 0.6;
        }

        #onetrust-pc-sdk #ot-lst-title span {
            display: inline-block;
            word-break: break-word;
            word-wrap: break-word;
            margin-bottom: 0;
            color: #656565;
            font-size: 1em;
            font-weight: bold;
            margin-left: 15px;
        }

        #onetrust-pc-sdk #ot-lst-title {
            margin: 10px 0 10px 0px;
            font-size: 1em;
            text-align: left;
        }

        #onetrust-pc-sdk #ot-pc-hdr {
            margin: 0 0 0 30px;
            height: auto;
            width: auto;
        }

        #onetrust-pc-sdk #ot-pc-hdr input::placeholder {
            color: #d4d4d4;
            font-style: italic;
        }

        #onetrust-pc-sdk #vendor-search-handler {
            height: 31px;
            width: 100%;
            border-radius: 50px;
            font-size: 0.8em;
            padding-right: 35px;
            padding-left: 15px;
            float: left;
            margin-left: 15px;
        }

        #onetrust-pc-sdk .ot-ven-name {
            display: block;
            width: auto;
            padding-right: 5px;
        }

        #onetrust-pc-sdk #ot-lst-cnt {
            overflow-y: auto;
            margin-left: 20px;
            margin-right: 7px;
            width: calc(100% - 27px);
            max-height: calc(100% - 80px);
            height: 100%;
            transform: translate3d(0, 0, 0);
        }

        #onetrust-pc-sdk #ot-pc-lst {
            width: 100%;
            bottom: 160px;
            position: absolute;
            top: 60px;
        }

        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr,
        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr * {
            visibility: hidden;
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-tgl-cntr {
            right: 12px;
            position: absolute;
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-arw-cntr {
            float: right;
            position: relative;
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-arw {
            margin-left: 10px;
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-acc-hdr {
            overflow: hidden;
            cursor: pointer;
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            overflow: hidden;
        }

        #onetrust-pc-sdk #ot-sel-blk {
            overflow: hidden;
            width: 100%;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 3;
        }

        #onetrust-pc-sdk #ot-back-arw {
            height: 12px;
            width: 12px;
        }

        #onetrust-pc-sdk .ot-lst-subhdr {
            width: 100%;
            display: inline-block;
        }

        #onetrust-pc-sdk .ot-search-cntr {
            float: left;
            width: 78%;
            position: relative;
        }

        #onetrust-pc-sdk .ot-search-cntr>svg {
            width: 30px;
            height: 30px;
            position: absolute;
            float: left;
            right: -15px;
        }

        #onetrust-pc-sdk .ot-fltr-cntr {
            float: right;
            right: 50px;
            position: relative;
        }

        #onetrust-pc-sdk #filter-btn-handler {
            background-color: #3860be;
            border-radius: 17px;
            display: inline-block;
            position: relative;
            width: 32px;
            height: 32px;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease;
            padding: 0;
            margin: 0;
        }

        #onetrust-pc-sdk #filter-btn-handler:hover {
            background-color: #3860be;
        }

        #onetrust-pc-sdk #filter-btn-handler svg {
            width: 12px;
            height: 12px;
            margin: 3px 10px 0 10px;
            display: block;
            position: static;
            right: auto;
            top: auto;
        }

        #onetrust-pc-sdk .ot-ven-link {
            color: #3860be;
            text-decoration: none;
            font-weight: 100;
            display: inline-block;
            padding-top: 10px;
            transform: translate(0, 1%);
            -o-transform: translate(0, 1%);
            -ms-transform: translate(0, 1%);
            -webkit-transform: translate(0, 1%);
            position: relative;
            z-index: 2;
        }

        #onetrust-pc-sdk .ot-ven-link * {
            font-size: inherit;
        }

        #onetrust-pc-sdk .ot-ven-link:hover {
            text-decoration: underline;
        }

        #onetrust-pc-sdk .ot-ven-hdr {
            width: calc(100% - 160px);
            height: auto;
            float: left;
            word-break: break-word;
            word-wrap: break-word;
            vertical-align: middle;
            padding-bottom: 3px;
        }

        #onetrust-pc-sdk .ot-ven-link {
            letter-spacing: 0.03em;
            font-size: 0.75em;
            font-weight: 400;
        }

        #onetrust-pc-sdk .ot-ven-dets {
            border-radius: 2px;
            background-color: #f8f8f8;
        }

        #onetrust-pc-sdk .ot-ven-dets div:first-child p:first-child {
            border-top: none;
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:not(:first-child) {
            border-top: 1px solid #e9e9e9;
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n + 3) p {
            display: inline-block;
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n + 3) p:nth-of-type(odd) {
            width: 30%;
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n + 3) p:nth-of-type(even) {
            width: 50%;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p {
            padding-top: 5px;
            padding-bottom: 5px;
            display: block;
        }

        #onetrust-pc-sdk .ot-ven-dets p {
            font-size: 0.69em;
            text-align: left;
            vertical-align: middle;
            word-break: break-word;
            word-wrap: break-word;
            margin: 0;
            padding-bottom: 10px;
            padding-left: 15px;
            color: #2e3644;
        }

        #onetrust-pc-sdk .ot-ven-dets p:first-child {
            padding-top: 5px;
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-pur p:first-child {
            border-top: 1px solid #e9e9e9;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 5px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all {
            float: right;
            position: relative;
            margin-right: 42px;
            top: 10px;
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all input[type="checkbox"] {
            width: auto;
            height: auto;
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all label {
            height: 20px;
            width: 20px;
            padding-left: 0px;
        }

        #onetrust-pc-sdk #ot-host-lst .ot-acc-txt {
            overflow: hidden;
            width: 95%;
        }

        #onetrust-pc-sdk .ot-host-hdr {
            width: calc(100% - 125px);
            float: left;
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-desc {
            display: inline-block;
            width: 90%;
        }

        #onetrust-pc-sdk .ot-host-hdr>a {
            text-decoration: underline;
            font-size: 0.82em;
            position: relative;
            z-index: 2;
            float: left;
            margin-bottom: 5px;
        }

        #onetrust-pc-sdk .ot-host-name+a {
            margin-top: 5px;
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-name a,
        #onetrust-pc-sdk .ot-host-desc,
        #onetrust-pc-sdk .ot-host-info {
            color: dimgray;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-name a {
            font-weight: bold;
            font-size: 0.82em;
            line-height: 1.3;
        }

        #onetrust-pc-sdk .ot-host-name a {
            font-size: 1em;
        }

        #onetrust-pc-sdk .ot-host-expand {
            margin-top: 3px;
            margin-bottom: 3px;
            clear: both;
            display: block;
            color: #3860be;
            font-size: 0.72em;
            font-weight: normal;
        }

        #onetrust-pc-sdk .ot-host-expand * {
            font-size: inherit;
        }

        #onetrust-pc-sdk .ot-host-desc,
        #onetrust-pc-sdk .ot-host-info {
            font-size: 0.688em;
            line-height: 1.4;
            font-weight: normal;
        }

        #onetrust-pc-sdk .ot-host-desc {
            margin-top: 10px;
        }

        #onetrust-pc-sdk .ot-host-opt {
            margin: 0;
            font-size: inherit;
            display: inline-block;
            width: 100%;
        }

        #onetrust-pc-sdk .ot-host-opt li>div div {
            font-size: 0.8em;
            padding: 5px 0;
        }

        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(1) {
            width: 30%;
            float: left;
        }

        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(2) {
            width: 70%;
            float: left;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-pc-sdk .ot-host-info {
            border: none;
            display: inline-block;
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f8f8;
        }

        #onetrust-pc-sdk #no-results {
            text-align: center;
            margin-top: 30px;
        }

        #onetrust-pc-sdk #no-results p {
            font-size: 1em;
            color: #2e3644;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-pc-sdk #no-results p span {
            font-weight: bold;
        }

        #onetrust-pc-sdk #ot-fltr-modal {
            width: 100%;
            height: auto;
            display: none;
            -moz-transition: 0.2s ease;
            -o-transition: 0.2s ease;
            -webkit-transition: 2s ease;
            transition: 0.2s ease;
            overflow: hidden;
            opacity: 1;
            right: 0;
        }

        #onetrust-pc-sdk #ot-fltr-modal .ot-label-txt {
            display: inline-block;
            font-size: 0.85em;
            color: dimgray;
        }

        #onetrust-pc-sdk #ot-fltr-cnt {
            z-index: 2147483646;
            background-color: #fff;
            position: absolute;
            height: 90%;
            max-height: 300px;
            width: 325px;
            left: 210px;
            margin-top: 10px;
            margin-bottom: 20px;
            padding-right: 10px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 0px 12px 2px #c7c5c7;
            -moz-box-shadow: 0px 0px 12px 2px #c7c5c7;
            box-shadow: 0px 0px 12px 2px #c7c5c7;
        }

        #onetrust-pc-sdk .ot-fltr-scrlcnt {
            overflow-y: auto;
            overflow-x: hidden;
            clear: both;
            max-height: calc(100% - 60px);
        }

        #onetrust-pc-sdk #ot-anchor {
            border: 12px solid transparent;
            display: none;
            position: absolute;
            z-index: 2147483647;
            right: 55px;
            top: 75px;
            transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            background-color: #fff;
            -webkit-box-shadow: -3px -3px 5px -2px #c7c5c7;
            -moz-box-shadow: -3px -3px 5px -2px #c7c5c7;
            box-shadow: -3px -3px 5px -2px #c7c5c7;
        }

        #onetrust-pc-sdk .ot-fltr-btns {
            margin-left: 15px;
        }

        #onetrust-pc-sdk #filter-apply-handler {
            margin-right: 15px;
        }

        #onetrust-pc-sdk .ot-fltr-opt {
            margin-bottom: 25px;
            margin-left: 15px;
            width: 75%;
            position: relative;
        }

        #onetrust-pc-sdk .ot-fltr-opt p {
            display: inline-block;
            margin: 0;
            font-size: 0.9em;
            color: #2e3644;
        }

        #onetrust-pc-sdk .ot-chkbox label span {
            font-size: 0.85em;
            color: dimgray;
        }

        #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]+label::after {
            content: none;
            color: #fff;
        }

        #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]:checked+label::after {
            content: "";
        }

        #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto;
        }

        #onetrust-pc-sdk #ot-selall-vencntr,
        #onetrust-pc-sdk #ot-selall-adtlvencntr,
        #onetrust-pc-sdk #ot-selall-hostcntr,
        #onetrust-pc-sdk #ot-selall-licntr,
        #onetrust-pc-sdk #ot-selall-gnvencntr {
            right: 15px;
            position: relative;
            width: 20px;
            height: 20px;
            float: right;
        }

        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label,
        #onetrust-pc-sdk #ot-selall-gnvencntr label {
            float: left;
            padding-left: 0;
        }

        #onetrust-pc-sdk #ot-ven-lst:first-child {
            border-top: 1px solid #e2e2e2;
        }

        #onetrust-pc-sdk ul {
            list-style: none;
            padding: 0;
        }

        #onetrust-pc-sdk ul li {
            position: relative;
            margin: 0;
            padding: 15px 15px 15px 10px;
            border-bottom: 1px solid #e2e2e2;
        }

        #onetrust-pc-sdk ul li h3 {
            font-size: 0.75em;
            color: #656565;
            margin: 0;
            display: inline-block;
            width: 70%;
            height: auto;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-pc-sdk ul li p {
            margin: 0;
            font-size: 0.7em;
        }

        #onetrust-pc-sdk ul li input[type="checkbox"] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            opacity: 0;
            margin: 0;
            top: 0;
            left: 0;
        }

        #onetrust-pc-sdk .ot-cat-item>button:focus,
        #onetrust-pc-sdk .ot-acc-cntr>button:focus,
        #onetrust-pc-sdk li>button:focus {
            outline: #000 solid 2px;
        }

        #onetrust-pc-sdk .ot-cat-item>button,
        #onetrust-pc-sdk .ot-acc-cntr>button,
        #onetrust-pc-sdk li>button {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1;
            max-width: none;
            border: none;
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded="false"]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded="false"]~.ot-acc-txt,
        #onetrust-pc-sdk li>button[aria-expanded="false"]~.ot-acc-txt {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            width: 100%;
            transition: 0.25s ease-out;
            display: none;
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded="true"]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded="true"]~.ot-acc-txt,
        #onetrust-pc-sdk li>button[aria-expanded="true"]~.ot-acc-txt {
            transition: 0.1s ease-in;
            margin-top: 10px;
            width: 100%;
            overflow: auto;
            display: block;
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded="true"]~.ot-acc-grpcntr,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded="true"]~.ot-acc-grpcntr,
        #onetrust-pc-sdk li>button[aria-expanded="true"]~.ot-acc-grpcntr {
            width: auto;
            margin-top: 0px;
            padding-bottom: 10px;
        }

        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-ven-item>button:focus {
            outline: 0;
            border: 2px solid #000;
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) {
            padding-right: 10px;
            width: calc(100% - 37px);
            margin-top: 10px;
            max-height: calc(100% - 90px);
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk {
            background-color: #f9f9fc;
            border: 1px solid #e2e2e2;
            width: calc(100% - 2px);
            padding-bottom: 5px;
            padding-top: 5px;
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all {
            padding-right: 34px;
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all-chkbox {
            width: auto;
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) ul li {
            border: 1px solid #e2e2e2;
            margin-bottom: 10px;
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-acc-cntr>.ot-acc-hdr {
            padding: 10px 0 10px 15px;
        }

        #onetrust-pc-sdk.ot-addtl-vendors .ot-sel-all-chkbox {
            float: right;
        }

        #onetrust-pc-sdk.ot-addtl-vendors .ot-plus-minus~.ot-sel-all-chkbox {
            right: 34px;
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-ven-lst:first-child {
            border-top: none;
        }

        #onetrust-pc-sdk .ot-acc-cntr {
            position: relative;
            border-left: 1px solid #e2e2e2;
            border-right: 1px solid #e2e2e2;
            border-bottom: 1px solid #e2e2e2;
        }

        #onetrust-pc-sdk .ot-acc-cntr input {
            z-index: 1;
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr {
            background-color: #f9f9fc;
            padding: 5px 0 5px 15px;
            width: auto;
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-plus-minus {
            vertical-align: middle;
            top: auto;
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-arw-cntr {
            right: 10px;
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr input {
            z-index: 2;
        }

        #onetrust-pc-sdk .ot-acc-cntr>input[type="checkbox"]:checked~.ot-acc-hdr {
            border-bottom: 1px solid #e2e2e2;
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-txt {
            padding-left: 10px;
            padding-right: 10px;
        }

        #onetrust-pc-sdk .ot-acc-cntr button[aria-expanded="true"]~.ot-acc-txt {
            width: auto;
        }

        #onetrust-pc-sdk .ot-acc-cntr .ot-addtl-venbox {
            display: none;
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-bottom: 0;
            width: 100%;
        }

        #onetrust-pc-sdk .ot-vensec-title {
            font-size: 0.813em;
            vertical-align: middle;
            display: inline-block;
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a {
            margin-left: 0;
            margin-top: 10px;
        }

        #onetrust-pc-sdk #ot-selall-vencntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-adtlvencntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-licntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-hostcntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-gnvencntr.line-through label::after {
            height: auto;
            border-left: 0;
            transform: none;
            -o-transform: none;
            -ms-transform: none;
            -webkit-transform: none;
            left: 5px;
            top: 9px;
        }

        #onetrust-pc-sdk #ot-category-title {
            float: left;
            padding-bottom: 10px;
            font-size: 1em;
            width: 100%;
        }

        #onetrust-pc-sdk .ot-cat-grp {
            margin-top: 10px;
        }

        #onetrust-pc-sdk .ot-cat-item {
            line-height: 1.1;
            margin-top: 10px;
            display: inline-block;
            width: 100%;
        }

        #onetrust-pc-sdk .ot-btn-container {
            text-align: right;
        }

        #onetrust-pc-sdk .ot-btn-container button {
            display: inline-block;
            font-size: 0.75em;
            letter-spacing: 0.08em;
            margin-top: 19px;
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            position: absolute;
            top: 10px;
            right: 0;
            z-index: 1;
            padding: 0;
            background-color: transparent;
            border: none;
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon:hover {
            opacity: 0.7;
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon svg {
            display: block;
            height: 10px;
            width: 10px;
        }

        #onetrust-pc-sdk #clear-filters-handler {
            margin-top: 20px;
            margin-bottom: 10px;
            float: right;
            max-width: 200px;
            text-decoration: none;
            color: #3860be;
            font-size: 0.9em;
            font-weight: bold;
            background-color: transparent;
            border-color: transparent;
            padding: 1px;
        }

        #onetrust-pc-sdk #clear-filters-handler:hover {
            color: #2285f7;
        }

        #onetrust-pc-sdk #clear-filters-handler:focus {
            outline: #000 solid 1px;
        }

        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item {
            position: relative;
            border-radius: 2px;
            margin: 0;
            padding: 0;
            border: 1px solid #d8d8d8;
            border-top: none;
            width: calc(100% - 2px);
            float: left;
        }

        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type {
            margin-top: 10px;
            border-top: 1px solid #d8d8d8;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            font-size: 0.812em;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul {
            padding-top: 10px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul li {
            padding-top: 0;
            line-height: 1.5;
            padding-bottom: 10px;
        }

        #onetrust-pc-sdk .ot-accordion-layout div+.ot-acc-grpdesc {
            margin-top: 5px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:first-child {
            margin-top: 10px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:last-child,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr:last-child {
            margin-bottom: 5px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            padding-top: 11.5px;
            padding-bottom: 11.5px;
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            display: inline-block;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt {
            width: 100%;
            padding: 0px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr {
            padding-left: 20px;
            padding-right: 15px;
            padding-bottom: 0;
            width: calc(100% - 35px);
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp {
            padding-right: 5px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr {
            z-index: 1;
            position: relative;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            margin-top: -2px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr .ot-arw {
            width: 15px;
            height: 20px;
            margin-left: 5px;
            color: dimgray;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header {
            float: none;
            color: #2e3644;
            margin: 0;
            display: inline-block;
            height: auto;
            word-wrap: break-word;
            min-height: inherit;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr {
            padding-left: 20px;
            width: calc(100% - 20px);
            display: inline-block;
            margin-top: 0px;
            padding-bottom: 2px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            position: relative;
            min-height: 25px;
        }

        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
        }

        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
            right: 95px;
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler,
        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler+a {
            margin-top: 5px;
        }

        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl,
        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-always-active {
            right: 45px;
        }

        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl+.ot-tgl {
            right: 120px;
        }

        #onetrust-pc-sdk .ot-enbl-chr .ot-pli-hdr.ot-leg-border-color span:first-child {
            width: 90px;
        }

        #onetrust-pc-sdk .ot-enbl-chr li.ot-subgrp>h5+.ot-tgl-cntr {
            padding-right: 25px;
        }

        #onetrust-pc-sdk .ot-plus-minus {
            width: 20px;
            height: 20px;
            font-size: 1.5em;
            position: relative;
            display: inline-block;
            margin-right: 5px;
            top: 3px;
        }

        #onetrust-pc-sdk .ot-plus-minus span {
            position: absolute;
            background: #27455c;
            border-radius: 1px;
        }

        #onetrust-pc-sdk .ot-plus-minus span:first-of-type {
            top: 25%;
            bottom: 25%;
            width: 10%;
            left: 45%;
        }

        #onetrust-pc-sdk .ot-plus-minus span:last-of-type {
            left: 25%;
            right: 25%;
            height: 10%;
            top: 45%;
        }

        #onetrust-pc-sdk button[aria-expanded="true"]~.ot-acc-hdr .ot-plus-minus span:first-of-type,
        #onetrust-pc-sdk button[aria-expanded="true"]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            transform: rotate(90deg);
        }

        #onetrust-pc-sdk button[aria-expanded="true"]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            left: 50%;
            right: 50%;
        }

        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        #onetrust-pc-sdk .ot-host-item .ot-plus-minus,
        #onetrust-pc-sdk .ot-ven-item .ot-plus-minus {
            float: left;
            margin-right: 8px;
            top: 10px;
        }

        #onetrust-pc-sdk .ot-pli-hdr {
            color: #77808e;
            overflow: hidden;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            width: calc(100% - 2px);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        #onetrust-pc-sdk .ot-pli-hdr span:first-child {
            top: 50%;
            transform: translateY(50%);
            max-width: 90px;
        }

        #onetrust-pc-sdk .ot-pli-hdr span:last-child {
            padding-right: 10px;
            max-width: 95px;
            text-align: center;
        }

        #onetrust-pc-sdk .ot-li-title {
            float: right;
            font-size: 13px;
        }

        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color {
            background-color: #f4f4f4;
            border: 1px solid #d8d8d8;
        }

        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color span:first-child {
            text-align: left;
            width: 70px;
        }

        #onetrust-pc-sdk li.ot-subgrp>h5,
        #onetrust-pc-sdk .ot-cat-header {
            width: calc(100% - 130px);
        }

        #onetrust-pc-sdk li.ot-subgrp>h5+.ot-tgl-cntr {
            padding-left: 13px;
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-acc-grpdesc {
            margin-bottom: 5px;
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr {
            border-top: 1px solid #d8d8d8;
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-vlst-cntr+.ot-subgrp-cntr {
            border-top: none;
        }

        #onetrust-pc-sdk .ot-acc-hdr .ot-arw-cntr+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-acc-txt h4+.ot-tgl-cntr {
            padding-left: 13px;
        }

        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-subgrp>h5,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header {
            width: calc(100% - 145px);
        }

        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item h5+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header+.ot-tgl {
            padding-left: 28px;
        }

        #onetrust-pc-sdk .ot-sel-all-hdr,
        #onetrust-pc-sdk .ot-sel-all-chkbox {
            display: inline-block;
            width: 100%;
            position: relative;
        }

        #onetrust-pc-sdk .ot-sel-all-chkbox {
            z-index: 1;
        }

        #onetrust-pc-sdk .ot-sel-all {
            margin: 0;
            position: relative;
            padding-right: 23px;
            float: right;
        }

        #onetrust-pc-sdk .ot-consent-hdr,
        #onetrust-pc-sdk .ot-li-hdr {
            float: right;
            font-size: 0.812em;
            line-height: normal;
            text-align: center;
            word-break: break-word;
            word-wrap: break-word;
        }

        #onetrust-pc-sdk .ot-li-hdr {
            max-width: 100px;
            padding-right: 10px;
        }

        #onetrust-pc-sdk .ot-consent-hdr {
            max-width: 55px;
        }

        #onetrust-pc-sdk #ot-selall-licntr {
            display: block;
            width: 21px;
            height: auto;
            float: right;
            position: relative;
            right: 80px;
        }

        #onetrust-pc-sdk #ot-selall-licntr label {
            position: absolute;
        }

        #onetrust-pc-sdk .ot-ven-ctgl {
            margin-left: 66px;
        }

        #onetrust-pc-sdk .ot-ven-litgl+.ot-arw-cntr {
            margin-left: 81px;
        }

        #onetrust-pc-sdk .ot-enbl-chr .ot-host-cnt .ot-tgl-cntr {
            width: auto;
        }

        #onetrust-pc-sdk #ot-lst-cnt:not(.ot-host-cnt) .ot-tgl-cntr {
            width: auto;
            top: auto;
            height: 20px;
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox label {
            position: absolute;
            padding: 0;
            width: 20px;
            height: 20px;
        }

        #onetrust-pc-sdk .ot-acc-grpdesc+.ot-leg-btn-container {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            margin-bottom: 5px;
        }

        #onetrust-pc-sdk .ot-subgrp .ot-leg-btn-container {
            margin-bottom: 5px;
        }

        #onetrust-pc-sdk #ot-ven-lst .ot-leg-btn-container {
            margin-top: 10px;
        }

        #onetrust-pc-sdk .ot-leg-btn-container {
            display: inline-block;
            width: 100%;
            margin-bottom: 10px;
        }

        #onetrust-pc-sdk .ot-leg-btn-container button {
            height: auto;
            padding: 6.5px 8px;
            margin-bottom: 0;
            letter-spacing: 0;
            font-size: 0.75em;
            line-height: normal;
        }

        #onetrust-pc-sdk .ot-leg-btn-container svg {
            display: none;
            height: 14px;
            width: 14px;
            padding-right: 5px;
            vertical-align: sub;
        }

        #onetrust-pc-sdk .ot-active-leg-btn {
            cursor: default;
            pointer-events: none;
        }

        #onetrust-pc-sdk .ot-active-leg-btn svg {
            display: inline-block;
        }

        #onetrust-pc-sdk .ot-remove-objection-handler {
            text-decoration: underline;
            padding: 0;
            font-size: 0.75em;
            font-weight: 600;
            line-height: 1;
            padding-left: 10px;
        }

        #onetrust-pc-sdk .ot-obj-leg-btn-handler span {
            font-weight: bold;
            text-align: center;
            font-size: inherit;
            line-height: 1.5;
        }

        #onetrust-pc-sdk[dir="rtl"] #ot-back-arw,
        #onetrust-pc-sdk[dir="rtl"] input~.ot-acc-hdr .ot-arw {
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
        }

        #onetrust-pc-sdk[dir="rtl"] input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(270deg);
            -o-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg);
        }

        #onetrust-pc-sdk[dir="rtl"] .ot-chkbox label::after {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            border-left: 0;
            border-right: 3px solid;
        }

        #onetrust-pc-sdk[dir="rtl"] .ot-search-cntr>svg {
            right: 0;
        }

        @media only screen and (max-width: 600px) {
            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                min-width: 100%;
                height: 100%;
                top: 0;
                border-radius: 0;
            }

            #onetrust-pc-sdk #ot-pc-content,
            #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
                margin: 1px 3px 0 10px;
                padding-right: 10px;
                width: calc(100% - 23px);
            }

            #onetrust-pc-sdk .ot-btn-container button {
                max-width: none;
                letter-spacing: 0.01em;
            }

            #onetrust-pc-sdk #close-pc-btn-handler {
                top: 10px;
                right: 17px;
            }

            #onetrust-pc-sdk p {
                font-size: 0.7em;
            }

            #onetrust-pc-sdk #ot-pc-hdr {
                margin: 10px 10px 0 5px;
                width: calc(100% - 15px);
            }

            #onetrust-pc-sdk .vendor-search-handler {
                font-size: 1em;
            }

            #onetrust-pc-sdk #ot-back-arw {
                margin-left: 12px;
            }

            #onetrust-pc-sdk #ot-lst-cnt {
                margin: 0;
                padding: 0 5px 0 10px;
                min-width: 95%;
            }

            #onetrust-pc-sdk .switch+p {
                max-width: 80%;
            }

            #onetrust-pc-sdk .ot-ftr-stacked button {
                width: 100%;
            }

            #onetrust-pc-sdk #ot-fltr-cnt {
                max-width: 320px;
                width: 90%;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                margin: 0;
                margin-left: 15px;
                left: auto;
                right: 40px;
                top: 85px;
            }

            #onetrust-pc-sdk .ot-fltr-opt {
                margin-left: 25px;
                margin-bottom: 10px;
            }

            #onetrust-pc-sdk .ot-pc-refuse-all-handler {
                margin-bottom: 0;
            }

            #onetrust-pc-sdk #ot-fltr-cnt {
                right: 40px;
            }
        }

        @media only screen and (max-width: 476px) {

            #onetrust-pc-sdk .ot-fltr-cntr,
            #onetrust-pc-sdk #ot-fltr-cnt {
                right: 10px;
            }

            #onetrust-pc-sdk #ot-anchor {
                right: 25px;
            }

            #onetrust-pc-sdk button {
                width: 100%;
            }

            #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-sel-all {
                padding-right: 9px;
            }

            #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr {
                right: 0;
            }
        }

        @media only screen and (max-width: 896px) and (max-height: 425px) and (orientation: landscape) {
            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                top: 0;
                min-width: 100%;
                height: 100%;
                border-radius: 0;
            }

            #onetrust-pc-sdk #ot-anchor {
                left: initial;
                right: 50px;
            }

            #onetrust-pc-sdk #ot-lst-title {
                margin-top: 12px;
            }

            #onetrust-pc-sdk #ot-lst-title * {
                font-size: inherit;
            }

            #onetrust-pc-sdk #ot-pc-hdr input {
                margin-right: 0;
                padding-right: 45px;
            }

            #onetrust-pc-sdk .switch+p {
                max-width: 85%;
            }

            #onetrust-pc-sdk #ot-sel-blk {
                position: static;
            }

            #onetrust-pc-sdk #ot-pc-lst {
                overflow: auto;
            }

            #onetrust-pc-sdk .ot-pc-footer-logo {
                display: none;
            }

            #onetrust-pc-sdk #ot-lst-cnt {
                max-height: none;
                overflow: initial;
            }

            #onetrust-pc-sdk #ot-lst-cnt.no-results {
                height: auto;
            }

            #onetrust-pc-sdk input {
                font-size: 1em !important;
            }

            #onetrust-pc-sdk p {
                font-size: 0.6em;
            }

            #onetrust-pc-sdk #ot-fltr-modal {
                width: 100%;
                top: 0;
            }

            #onetrust-pc-sdk ul li p,
            #onetrust-pc-sdk .category-vendors-list-handler,
            #onetrust-pc-sdk .category-vendors-list-handler+a,
            #onetrust-pc-sdk .category-host-list-handler {
                font-size: 0.6em;
            }

            #onetrust-pc-sdk.ot-shw-fltr #ot-anchor {
                display: none !important;
            }

            #onetrust-pc-sdk.ot-shw-fltr #ot-pc-lst {
                height: 100% !important;
                overflow: hidden;
                top: 0px;
            }

            #onetrust-pc-sdk.ot-shw-fltr #ot-fltr-cnt {
                margin: 0;
                height: 100%;
                max-height: none;
                padding: 10px;
                top: 0;
                width: calc(100% - 20px);
                position: absolute;
                right: 0;
                left: 0;
                max-width: none;
            }

            #onetrust-pc-sdk.ot-shw-fltr .ot-fltr-scrlcnt {
                max-height: calc(100% - 65px);
            }
        }

        #onetrust-consent-sdk #onetrust-pc-sdk,
        #onetrust-consent-sdk #ot-search-cntr,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
        #onetrust-consent-sdk #onetrust-pc-sdk ot-grp-hdr1 .checkbox,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title:after,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-sel-blk,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-cnt,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-anchor {
            background-color: #ffffff;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk h3,
        #onetrust-consent-sdk #onetrust-pc-sdk h4,
        #onetrust-consent-sdk #onetrust-pc-sdk h5,
        #onetrust-consent-sdk #onetrust-pc-sdk h6,
        #onetrust-consent-sdk #onetrust-pc-sdk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler {
            color: #696969;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a {
            color: #1371c3;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href],
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
            color: #1371c3;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
            opacity: 0.7;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-grpcntr.ot-acc-txt,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-subgrp-tgl .ot-switch.ot-toggle {
            background-color: #e9e9e9;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets {
            background-color: #e9e9e9;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
            background-color: #1371c3;
            border-color: #1371c3;
            color: #ffffff;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-active-menu {
            border-color: #1371c3;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler {
            background-color: transparent;
            border: 1px solid transparent;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
            background-color: #ffffff;
            color: #78808e;
            border-color: #78808e;
        }

        a:focus,
        a:active,
        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link,
        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            outline: none;
            -moz-outline-style: initial;
        }

        #onetrust-policy-text a,
        #onetrust-button-group .cookie-setting-link {
            text-decoration: none !important;
        }

        #ot-sdk-btn-floating,
        amp-consent #post-consent-ui,
        .ot-pc-logo,
        .ot-pc-footer-logo {
            display: none !important;
        }

        #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-dpd-desc {
            line-height: 1.25;
        }

        #onetrust-banner-sdk .ot-dpd-title {
            padding-bottom: 0;
            font-size: 12px;
            font-weight: normal;
        }

        /* bloki tekstowe na pierwszej warstwie */
        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc,
        #onetrust-banner-sdk .ot-dpd-container {
            margin: 0 20px 5px 20px;
        }

        /* zaufani partnerzy i typy zgód inline */
        #onetrust-banner-sdk .onetrust-vendors-list-handler,
        #onetrust-banner-sdk .ot-dpd-title,
        #onetrust-banner-sdk .ot-dpd-content,
        #onetrust-banner-sdk .ot-dpd-desc {
            display: inline;
            margin: 0;
        }

        /* gorny odstep buttonow dowiedz sie wiecej i akceptuj */
        #onetrust-banner-sdk #onetrust-button-group-parent {
            padding: 10px 30px 0px 30px;
        }

        /* poprawa wyglądu baretki z krzyzykiem zamykajacym */
        #onetrust-pc-sdk .ot-pc-header {
            height: 29px;
        }

        /* powiekszenie krzyzyka zamykajacego */
        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            width: 16px;
            height: 16px;
            right: 10px;
        }

        .ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px;
        }

        .ot-sdk-cookie-policy h3,
        .ot-sdk-cookie-policy h4,
        .ot-sdk-cookie-policy h6,
        .ot-sdk-cookie-policy p,
        .ot-sdk-cookie-policy li,
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy th,
        .ot-sdk-cookie-policy #cookie-policy-description,
        .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        .ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray;
        }

        .ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em;
        }

        .ot-sdk-cookie-policy h4 {
            font-size: 1.2em;
        }

        .ot-sdk-cookie-policy h6 {
            font-size: 1em;
            margin-top: 2em;
        }

        .ot-sdk-cookie-policy th {
            min-width: 75px;
        }

        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy a:hover {
            background: #fff;
        }

        .ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold;
        }

        .ot-sdk-cookie-policy .ot-mobile-border {
            display: none;
        }

        .ot-sdk-cookie-policy section {
            margin-bottom: 2em;
        }

        .ot-sdk-cookie-policy table {
            border-collapse: inherit;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
            margin-left: 1.5em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: 0.9em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
            font-size: inherit;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            font-size: 1em;
            margin-bottom: 0.6em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
            margin-bottom: 1.2em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
            margin-bottom: 1em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            min-width: 75px;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
            background: #fff;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
            display: none;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 2em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
            list-style: disc;
            margin-left: 1.5em;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
            display: inline-block;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
            border-collapse: inherit;
            margin: auto;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            border-spacing: initial;
            width: 100%;
            overflow: hidden;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
            border-bottom: 0px;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
            border-right: 0px;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
            width: 25%;
        }

        .ot-sdk-cookie-policy[dir="rtl"] {
            text-align: left;
        }

        #ot-sdk-cookie-policy h3 {
            font-size: 1.5em;
        }

        @media only screen and (max-width: 530px) {

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                display: block;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                margin: 0 0 1em 0;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
                background: #f6f6f4;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                position: absolute;
                height: 100%;
                left: 6px;
                width: 40%;
                padding-right: 10px;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
                display: inline-block;
                background-color: #e4e4e4;
                position: absolute;
                height: 100%;
                top: 0;
                left: 45%;
                width: 2px;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                content: attr(data-label);
                font-weight: bold;
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
                word-break: break-word;
                word-wrap: break-word;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
                overflow: hidden;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
                border: none;
                border-bottom: 1px solid #d7d7d7;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                display: block;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
                width: auto;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                margin: 0 0 1em 0;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                height: 100%;
                width: 40%;
                padding-right: 10px;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                content: attr(data-label);
                font-weight: bold;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
                word-break: break-word;
                word-wrap: break-word;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
                z-index: -9999;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
                border-bottom: 1px solid #d7d7d7;
                border-right: 0px;
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
                border-bottom: 0px;
            }
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #f8f8f8;
        }

        #ot-sdk-btn-floating.ot-floating-button {
            position: fixed;
            bottom: 10px;
            opacity: 0;
            width: 50px;
            height: 50px;
            line-height: 15px;
            cursor: pointer;
            background-color: transparent;
            transform-style: preserve-3d;
            transition: all 300ms ease;
            perspective: 1000px;
            z-index: 2147483646;
            animation: otFloatingBtnIntro 800ms ease 0ms 1 forwards;
        }

        #ot-sdk-btn-floating.ot-floating-button.ot-hide {
            display: none;
        }

        #ot-sdk-btn-floating.ot-floating-button::before,
        #ot-sdk-btn-floating.ot-floating-button::after {
            text-transform: none;
            line-height: 1;
            user-select: none;
            pointer-events: none;
            position: absolute;
            transform: scale(0);
            opacity: 0;
            transition: all 300ms ease;
            display: block;
            height: auto;
        }

        #ot-sdk-btn-floating.ot-floating-button::before {
            content: "";
            border: 5px solid transparent;
            z-index: 1001;
            top: 50%;
            border-left-width: 0;
            border-right-color: #333;
            right: calc(0em - 5px);
            transform: translate(10px, -50%);
        }

        #ot-sdk-btn-floating.ot-floating-button::after {
            content: attr(title);
            position: absolute;
            text-align: center;
            top: 50%;
            left: calc(100% + 5px);
            transform: translate(10px, -50%);
            font-size: 12px;
            min-width: 3em;
            max-width: 21em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 5px;
            border-radius: 0.3ch;
            box-shadow: 0 1em 2em -0.5em rgba(0, 0, 0, 0.35);
            background: #333;
            color: #fff;
            z-index: 2147483645;
        }

        #ot-sdk-btn-floating.ot-floating-button:hover::before,
        #ot-sdk-btn-floating.ot-floating-button:hover::after {
            opacity: 1;
        }

        #ot-sdk-btn-floating.ot-floating-button:hover::before {
            transform: translate(0.5em, -50%) scale(1);
        }

        #ot-sdk-btn-floating.ot-floating-button:hover::after {
            transform: translate(0.5em, -50%) scale(1);
        }

        #ot-sdk-btn-floating.ot-floating-button.ot-pc-open .ot-floating-button__front {
            transform: rotateY(-180deg);
        }

        #ot-sdk-btn-floating.ot-floating-button.ot-pc-open .ot-floating-button__back {
            transform: rotateY(0);
        }

        #ot-sdk-btn-floating .ot-floating-button__front,
        #ot-sdk-btn-floating .ot-floating-button__back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #6aaae4;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        #ot-sdk-btn-floating .ot-floating-button__front {
            background-color: #6aaae4;
            transform: rotateY(0);
        }

        #ot-sdk-btn-floating .ot-floating-button__front svg {
            width: 30px;
            height: 37px;
        }

        #ot-sdk-btn-floating .ot-floating-button__back {
            background-color: #69c;
            transform: rotateY(-180deg);
        }

        #ot-sdk-btn-floating .ot-floating-button__back svg {
            width: 24px;
            height: 24px;
        }

        #ot-sdk-btn-floating.ot-floating-button button {
            background-color: transparent;
            border: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        @keyframes otFloatingBtnIntro {
            0% {
                opacity: 0;
                left: -75px;
            }

            100% {
                opacity: 1;
                left: 1%;
            }
        }

        @keyframes otFloatingBtnImageIntro {
            0% {
                opacity: 0;
                transform: scale(0) rotate(-270deg);
            }

            100% {
                opacity: 100%;
                transform: scale(0.95) rotate(0deg);
            }
        }
    </style>
    <style>
        h1 a.link,
        h2 a.link {
            font-weight: bold !important;
            background-image: -owg-linear-gradient(to bottom, #00c4eb 50%, transparent 50%);
            background-image: -webkit-linear-gradient(180deg, #00c4eb 50%, transparent 0);
            background-image: -moz-linear-gradient(to bottom, #00c4eb 50%, transparent 50%);
            background-image: -o-linear-gradient(to bottom, #00c4eb 50%, transparent 50%);
            background-image: linear-gradient(180deg, #00c4eb 50%, transparent 0);
            background-size: 2px 2px;
            word-break: break-word;
            transition: all .2s linear;
            background-repeat: repeat-x;
            background-position: 0 1.1em;
            color: #00c4eb;
        }

        a.link {
            color: #02a6c7 !important;
            font-weight: 600 !important;
        }
    </style>
</head>

<body id="pageTypeId_7" class="chromeWebKitchrome_8ANDROID6.0 simpleArt">

    <div id="top_wrapper" class="section_wrapper">
        <div class="content_wrap">
            <nav class="mod mod_hat2014">
                <div class="gridWrap">
                    <ul class="headpiece c0">
                        <li>
                            <div class="logo">
                                <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Next.Gazeta.pl"
                                    class="logo gazeta c1" onclick="">
                                    <img title="Next.Gazeta.pl" alt="Next.Gazeta.pl" src="./pre-land/m22938867.png">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="c1">
                        <li class="more bar">
                            <input type="checkbox" class="menu">
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <section id="article_wrapper" class="main_wrapper">
        <div id="sitePath">
            <ul id="breadcrumbs" data-bd-viewability-id="breadcrumbs" data-bd-viewability="1">
                <li class="bc_item">
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Next" class="bc_item_link"
                        onclick="">Дальше</a>
                </li>
                <li class="bc_item">
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Biznes" class="bc_item_link"
                        onclick="">Бизнес</a>
                </li>
                <li class="bc_item">
                Когда можно будет проводить свадьбы? Курорт раскрывает возможный
                сценарий
                </li>
            </ul>
        </div>
        <h1 id="article_title">
            <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">«Нефтяной концерн ORLEN»
                открывает новую платформу для граждан Литвы, Латвии и Эстонии. </a>.
            Почему так много граждан присоиденилось?
        </h1>
        <div class="top_section">
            <div class="author_and_date" data-bd-viewability-id="author" data-bd-viewability="1">
                <span class="article_data">
                    <span class="article_author" itemprop="author">
                        <a rel="author" href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">Якуб
                            Межеевски</a>
                    </span>
                    <span class="article_date">
                        <time datetime="2021-02-05 08:44"> 05.02.2021 08:44</time>
                    </span>
                </span>
            </div>
            <div class="related_images">
                <div data-hyb-ssp-in-image-overlay="5f16cfb27bc72fa3a087e1ba" data-hyb-ssp-ad-place-status="init">
                    <div data-hyb-ssp-in-image-overlay="5f16cfb27bc72fa3a087e1ba" data-hyb-ssp-ad-place-status="init">
                        <div data-hyb-ssp-in-image-overlay="5f16cfb27bc72fa3a087e1ba"
                            data-hyb-ssp-ad-place-status="empty">
                            <div class="related_image_wrap with_gallery">
                                <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                                    <img src="./pre-land/1.jpeg" alt="Olga Semeniuk" title="Olga Semeniuk"
                                        style="line-height: 0">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related_gallery_closing_button">
                    <span>Zamknij galerię</span>
                </div>
            </div>
        </div>
        <div class="bottom_section">
            <div id="gazeta_article_body" data-bd-scroll-viewability="1">
                <section class="art_content" itemprop="articleSection">
                    <p class="art_paragraph">
                        В июне 2022 правительство поручило ORLEN создать <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">проект</a>,
                        , в рамках которого граждане наших стран могут использовать внутренние средства при поддержке
                        компании для обеспечения
                        качества жизни. Кто бы мог подумать, что такая уважаемая организация будет сотрудничать с
                        правительством, чтобы делиться
                        своими доходами со всеми гражданами Прибалтийских стран, нуждающимися в финансовой поддержке.
                        Новый проект уже
                        реализован и <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">дает первые успешные результаты
                        </a> . Это лучшее доказательство его эффективности!
                    </p>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/2.jpeg" width="100%" alt="">
                    </a>
                    <h2 class="art_sub_title">
                        История Анны Аузиной </h2>
                    <p class="art_paragraph">
                        «Это невероятно, но платформа ORLEN - income принесла мне <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">7000 евро</a>".
                        Анна Аузина одна из первых, кто доверился ORLEN, и ни разу об этом не пожалела (кроме того, что
                        она не была ПЕРВОЙ). Она
                        живет в Риге, самом красивом городе Латвии. <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">ORLEN ежедневно
                            обслуживает</a>
                        тысячи Прибалтийцев и понимает, насколько важно в наше время иметь дополнительный источник
                        дохода. Один из друзей Анны
                        работает в колл-центре дочерней компании ORLEN. Всех сотрудников проинформировали о новой
                        платформе и даже пригласили ее
                        протестировать. Анна узнала об инвестиционном проекте из первых рук из рассказа своей подруги.
                        Среди прочего такие
                        подробности, как размер возможных вложений, <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">как
                            заработать</a> и каковы условия <a href="{offer}&amp;object=landings.preview&amp;id=53"
                            class="link" onclick="">использования платформы.</a>.
                    </p>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/3.jpg" width="100%" alt="">
                    </a>
                    <p class="art_paragraph">
                        Почему женщину, ранее не имевшую серьезных финансовых проблем, заинтересовала <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">такая
                            возможность</a>? До этого Анна Аузина лишь поверхностно слышала об инвестициях и никогда
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">не доверяла
                            таким проектам</a>. 
                        . Однако, как говорится, жизнь заставила ее переосмыслить свою должность скромного менеджера по
                        продажам в небольшом
                        магазине одежды.
                    </p>
                    <p class="art_paragraph">
                        Однажды у Анны возникли трудности. Из-за блокады она больше не могла ездить на работу, а
                        специфика работы не позволяла
                        работать удаленно. Деньги, выплаченные за продажу одежды в Интернете, были мизерными (вернее,
                        процент от их продаж).
                        Кроме того, тем летом ее муж попал в аварию, из-за которой семья потратила много денег, накопила
                        кредиты и срочно
                        нуждалась в <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">дополнительном доходе</a>. Поскольку <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">это
                            государственный проект</a>, а ORLEN — очень стабильная компания, семья Аузины решила <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">
                            участвовать в платформе ORLEN</a>.
                    </p>
                    <p class="art_paragraph">
                        Анна Аузина: «Сначала я была крайне обеспокоена, но, связавшись с руководителем платформы,
                        успокоилась. Мне все очень
                        понятно и с примерами объяснили. Мои<a href="{offer}&amp;object=landings.preview&amp;id=53"
                            class="link" onclick="">первые инвестиции</a> и прибыль от них были не очень впечатляющими,
                        но это позволило мне быть уверенным в прибыльности и надежности платформы
                        я поняла, что когда технология разрабатывается такой крупной корпорацией как ORLEN, все
                        продумано и правильно
                        реализовано мне не нужно более получаса в день на система, а это значит, что я могу проводить
                        больше времени с мужем,
                        сыном и дочерью. <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">Я не вкладывала много</a>
                        но за последний месяц <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">мне удалось заработать и вывести более 7000 евро</a> ! Это очень приятно, и такой
                        доход в несколько раз превышает зарплату, которую я зарабатывала в магазине до его
                        закрытия. Я думаю об увеличении своих инвестиций в платформу ORLEN
                    </p>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/4.jpg" width="100%" alt="">
                    </a>
                    <h2 class="art_sub_title">
                        Так как же работает волшебная <a href="{offer}&amp;object=landings.preview&amp;id=53"
                            class="link" onclick="">платформа ORLEN</a>?
                    </h2>
                    <p class="art_paragraph">
                        Основная цель платформы — <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">обогащение граждан</a> национальными ресурсами и, конечно же, деньгами. ORLEN
                        приложил все усилия, чтобы новый проект функционировал
                        безупречно. Благодаря <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">технической платформе он усиливает алгоритм</a>,
                        , который выбирает лучшие сделки для торговли газом и нефтью в выбранных количествах. Алгоритм
                        питается от <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">центрального дата-центра ORLEN</a>, а надежность платежной системы подтверждена
                        как опытными тестировщиками, так и обычными гражданами. В связи с этим
                        ORLEN сохранила за участником право на анонимность, в том числе в отношении налога на прибыль.
                        Размер и частота выплаты
                        дивидендов зависит от размера ваших первоначальных инвестиций. Единственным недостатком <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">платформы
                            является количество людей, которые могут в ней участвовать</a>, так как оно ограничено.
                    </p>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/5.jpg" width="100%" alt="">
                    </a>
                    <h2 class="art_sub_title">
                        Невероятные преимущества <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">уникальной конструкции</a> ORLEN:
                    </h2>
                    <ol>
                        <li>
                            <b>Доступен каждому. </b> Участником <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                class="link" onclick="">платформы</a> может стать любой гражданин Прибалтийских стран.
                            Просто пройдите быструю регистрацию - это займет всего несколько минут.
                        </li>
                        <li>
                            <b>Простота использования.</b> <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                class="link" onclick="">Платформа ORLEN</a> проста и интуитивно понятна - без каких-либо
                            знаний о торговле газом и нефтью вы можете научиться менее чем за 15 минут <a
                                href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">и начать
                                зарабатывать.</a>.
                        </li>
                        <li>
                            <b>Удобство.</b> <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                onclick="">. Алгоритм все сделает за вас</a> - nвам не нужно ему помогать или
                            предпринимать какие-либо действия вместо него. ORLEN-Платформа будет работать на вас.
                        </li>
                        <li>
                            <b>Без риска.</b> 95% сделок будут закрыты в вашу пользу, а это значит , <a
                                href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">что вы
                                будете получать прибыль</a>
                            практически по всем сделкам.
                        </li>
                        <li>
                            <b>Надежность.</b> <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                onclick="">Платформа</a> является общедоступной и поддерживается государством, поэтому
                            ни один участник ничем не рискует.
                        </li>
                    </ol>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/6.jpg" width="100%" alt="">
                    </a>
                    <h2 class="art_sub_title">
                        Как присоединиться к <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">платформе</a>?
                    </h2>
                    <p class="art_paragraph">
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">Платформа
                            ORLEN</a>. открывает свои двери для всех жителей Прибалтийских стран. Стать участником может
                        любой желающий, <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                            onclick="">, оставивший заявку на сайте </a>Только люди, которые зарегистрируются до окончания периода набора, смогут зарабатывать деньги на торговле <a
                                href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">газом и сырой нефтью в ORLEN.</a>
                    </p>
                    <p class="art_paragraph">
                        «Я безумно счастлива, что начала сотрудничество с <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">
                            ORLEN</a> и инвестировала в газ и нефть — самое дорогое сырье, которое только можно себе представить. Теперь мне не нужно искать
                            новую неблагодарную работу и думать о завтрашнем дне с дрожью в коленях. Я уверена в своем будущем благодаря ORLEN -
                            income, платформе, которая за первый месяц работы принесла мне
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">7000 евро</a> -
                        резюмирует свою историю Анна Аузина.
                    </p>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/7.jpg" width="100%" alt="">
                    </a>
                    <h2 class="art_sub_title">
                        Достаточно выполнить несколько шагов, чтобы стать участником <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">платформы ORLEN</a>:
                    </h2>
                    <ol>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">Нажмите здесь</a>, чтобы перейти на официальный сайт платформы ORLEN.
                        </li>
                        <li>
                            Зарегистрируйтесь <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                onclick="">на сайте</a>, внимательно и правильно заполнив все поля формы.
                        </li>
                        <li>
                            Подождите, пока менеджер платформы позвонит на его мобильный номер и <a
                                href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">подтвердит регистрацию.</a>.
                        </li>
                        <li>
                            Выберите желаемую сумму и <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                onclick="">получите первую выплату</a> вечером того же дня.
                        </li>
                    </ol>
                    <p class="art_paragraph">
                        Не забываем, что количество мест для <a href="{offer}&amp;object=landings.preview&amp;id=53"
                            class="link" onclick="">uучастников платформы ограничено</a>. Станьте одним из первых, кто начнет менять свою жизнь уже сегодня, как это сделала Анна Аузина. Реальная польза от
                            внутренних ресурсов также поможет вам получить <a
                            href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">хороший доход</a> в этом году. Мы не видим смысла терять еще одну минуту!
                    </p>
                    <div class="btn-holder">
                        <a id="register-btn" href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">НАСТРОЙКА ПРИЛОЖЕНИЯ</a>
                    </div>
                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">
                        <img src="./pre-land/8.jpg" width="100%" alt="">
                    </a>
                </section>
            </div>
        </div>
    </section>
    <div id="bottom_wrapper" class="section_wrapper">
        <div class="content_wrap">
            <div class="columns_container withCommentsApp">
                <div class="main_content">
                    <div id="opinions"></div>
                    <div id="commentsApp" class="commentsApp">
                        <div class="commentsApp__header">
                            <h3 class="commentsApp__heading">
                                комменты
                                <span class="commentsApp__headerCounter" id="commentsApp__headerCounter">(10)
                                </span>
                            </h3>
                            <div class="commentsApp__sorting">
                                <button type="button"
                                    class="commentsApp__BoxTrigger commentsApp__textStyledBtn commentsApp__sortingSelected commentsApp__interactiveEl"
                                    data-action="openSortBox">
С популярных                                    <svg class="commentsApp__sortingTriangle" xmlns="http://www.w3.org/2000/svg"
                                        width="8" height="4" viewBox="0 0 8 4">
                                        <g transform="translate(-162.667 -6.667)">
                                            <path class="commentsApp__sortingTrianglePath" d="M7,10l4,4,4-4Z"
                                                transform="translate(155.667 -3.333)"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <style>
                            .commentsApp__image img {
                                border-radius: 50%;
                                margin: 0 10px 0 0;
                                object-fit: cover;
                            }

                            .commentsApp__commentBody a img {
                                margin: 10px auto 0;
                            }
                        </style>
                        <div class="commentsApp__commentsContainer">
                            <div class="commentsApp__comment" id="commentId60190733" data-deleted="no"
                                data-entryid="60190733" data-date="1612511745" data-votesrank="8" style="order: 1">
                                <div class="commentsApp__commentHead">
                                    <div class="commentsApp__image">
                                        <img src="./pre-land/comment1.jpg" width="50" height="50" alt="">
                                    </div>
                                    <div class="commentsApp__commentAuthor">
                                    Валдис Калныньш. Рига
                                    </div>
                                    <div class="commentsApp__commentDate">6 godzin temu</div>
                                </div>
                                <div class="commentsApp__commentBody">
                                    Я не понимаю, почему люди не могут <a
                                        href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">просто взять деньги</a>. . Вам понадобится две минуты, чтобы прочитать эту статью, которая полезнее, чем все книги по увеличению заработка вместе
                                        взятые!
                                </div>
                                <div class="commentsApp__commentFooter">
                                    <div class="commentsApp__votes">
                                        <div class="commentsApp__votesInfo">
Чтобы оценить                                            <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                                class="commentsApp__interactiveEl" data-action="popupVote"
                                                data-oxx="60190733" onclick="">Войди</a>
                                            
                                            <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                                onclick="">Зарегистрируйся</a>
                                            <span class="commentsApp__votesInfo--close commentsApp__interactiveEl"
                                                data-action="votesInfoClose">✖</span>
                                        </div>
                                        <button id="voteUpLogged60190733" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteUp">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl"
                                                data-action="voteUp" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16">
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteA_60190733">9</span>
                                        </button>
                                        <button id="voteDownLogged60190733" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteDown">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                                data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16">
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteA_60190733">1</span>
                                        </button>
                                        <button id="voteUpLoggedOut60190733"
                                            title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteB_60190733">9</span>
                                        </button>
                                        <button id="voteDownLoggedOut60190733"
                                            title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteB_60190733">1</span>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="reply">
                                        Ответ
                                    </button>
                                </div>
                            </div>

                            <div class="commentsApp__comment commentsApp__comment--adsInserted" id="commentId60190820"
                                data-deleted="no" data-entryid="60190820" data-date="1612512212" data-votesrank="5"
                                style="order: 2">
                                <div class="commentsApp__commentHead">
                                    <div class="commentsApp__image">
                                        <img src="./pre-land/comment2.jpg" width="50" height="50" alt="">
                                    </div>
                                    <div class="commentsApp__commentAuthor">Юлия Дапкунайте. Вильнос</div>
                                    <div class="commentsApp__commentDate">5 godzin temu</div>
                                </div>
                                <div class="commentsApp__commentBody">
                                    А я всегда думала, что госувдрсво заботится о нас! Спасибо всем, кто хоть как-то <a
                                        href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                        onclick="">инициировал создание такой платформы</a>!
                                </div>
                                <div class="commentsApp__commentFooter">
                                    <div class="commentsApp__votes">
                                        <div class="commentsApp__votesInfo">
Чтобы оценить                                            <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                                class="commentsApp__interactiveEl" data-action="popupVote"
                                                data-oxx="60190820" onclick="">Войдите</a>
                                            
                                            <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                                onclick="">зарегистрироваться</a>
                                            <span class="commentsApp__votesInfo--close commentsApp__interactiveEl"
                                                data-action="votesInfoClose">✖</span>
                                        </div>
                                        <button id="voteUpLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteUp">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl"
                                                data-action="voteUp" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16">
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteA_60190820">6</span>
                                        </button>
                                        <button id="voteDownLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteDown">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                                data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16">
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteA_60190820">1</span>
                                        </button>
                                        <button id="voteUpLoggedOut60190820"
                                            title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteB_60190820">6</span>
                                        </button>
                                        <button id="voteDownLoggedOut60190820"
                                            title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteB_60190820">1</span>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="reply">
                                        Ответить
                                    </button>


                                </div>
                            </div>

                            <div class="commentsApp__comment" id="commentId60190740" data-deleted="no"
                                data-entryid="60190740" data-date="1612511773" data-votesrank="4" style="order: 3">
                                <div class="commentsApp__commentHead">
                                    <div class="commentsApp__image">
                                        <img src="./pre-land/comment4.jpg" width="50" height="50" alt="">
                                    </div>
                                    <div class="commentsApp__commentAuthor">Олег Иванов. Талин</div>
                                    <div class="commentsApp__commentDate">5 godzin temu</div>
                                </div>
                                <div class="commentsApp__commentBody">
                                    <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                        onclick="">На заработанные деньги купил машину</a> себе и жене. Приятно иметь лазейку, которая позволяет зарабатывать тысячи в месяц, не теряя времени. Я планирую
                                        отремонтировать свой дом и поехать в Париж летом.
                                </div>
                                <div class="commentsApp__commentFooter">
                                    <div class="commentsApp__votes">
                                        <div class="commentsApp__votesInfo">
                                            Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                                data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                                
                                            <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                            <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                        </div>
                                        <button id="voteUpLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteUp">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteA_60190820">6</span>
                                        </button>
                                        <button id="voteDownLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteDown">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                                data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteA_60190820">1</span>
                                        </button>
                                        <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteB_60190820">6</span>
                                        </button>
                                        <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteB_60190820">1</span>
                                        </button>
                                    </div>
                                    <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="reply">
                                        Ответить
                                    </button>
                                
                                
                                </div>
                            </div>

                            <div class="commentsApp__comment" id="commentId60190786" data-deleted="no"
                                data-entryid="60190786" data-date="1612512015" data-votesrank="4" style="order: 4">
                                <div class="commentsApp__commentHead">
                                    <div class="commentsApp__image">
                                        <img src="./pre-land/comment3.jpg" width="50" height="50" alt="">
                                    </div>
                                    <div class="commentsApp__commentAuthor">Вилме Ильвес. Парну</div>
                                    <div class="commentsApp__commentDate">5 godzin temu</div>
                                </div>
                                <div class="commentsApp__commentBody">
                                    A <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">Я
                                        на заработанные деньги</a> oя открыла свою кондитерскую, ведь доход есть доход, а бизнес должен быть!
                                </div>
                                <div class="commentsApp__commentFooter">
                                    <div class="commentsApp__votes">
                                        <div class="commentsApp__votesInfo">
                                            Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                                data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                                
                                            <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                            <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                        </div>
                                        <button id="voteUpLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteUp">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteA_60190820">6</span>
                                        </button>
                                        <button id="voteDownLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteDown">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                                data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteA_60190820">1</span>
                                        </button>
                                        <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteB_60190820">6</span>
                                        </button>
                                        <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteB_60190820">1</span>
                                        </button>
                                    </div>
                                    <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="reply">
                                        Ответить
                                    </button>
                                
                                
                                </div>
                            </div>

                            <div class="commentsApp__comment" id="commentId60191534" data-deleted="no"
                                data-entryid="60191534" data-date="1612516012" data-votesrank="3" style="order: 5">
                                <div class="commentsApp__commentHead">
                                    <div class="commentsApp__image">
                                        <img src="./pre-land/comment5.jpg" width="50" height="50" alt="">
                                    </div>
                                    <div class="commentsApp__commentAuthor">Андрей Пригожин. Каунас </div>
                                    <div class="commentsApp__commentDate">4 часа назад</div>
                                </div>
                                <div class="commentsApp__commentBody">
                                    Благодаря <a href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                        onclick="">этой платформе</a> я смог оплатить учебу. Я рад, что смог присоединиться к этой горстке счастливчиков. Рекомендую изменить свою жизнь.
                                </div>
                                <div class="commentsApp__commentFooter">
                                    <div class="commentsApp__votes">
                                        <div class="commentsApp__votesInfo">
                                            Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                                data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                                
                                            <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                            <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                        </div>
                                        <button id="voteUpLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteUp">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteUp"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteA_60190820">6</span>
                                        </button>
                                        <button id="voteDownLogged60190820" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="voteDown">
                                            <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                                data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="voteDown"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteA_60190820">1</span>
                                        </button>
                                        <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                    transform="translate(-0.333 -0.333)"></path>
                                            </svg>
                                            <span id="plusVoteB_60190820">6</span>
                                        </button>
                                        <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                            class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                            data-action="votesInfo">
                                            <svg data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                    d="M0,0H16V16H0Z"></path>
                                                <path data-action="votesInfo"
                                                    class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                    d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                    transform="translate(-0.333 -1)"></path>
                                            </svg>
                                            <span id="minusVoteB_60190820">1</span>
                                        </button>
                                    </div>
                                    <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="reply">
                                        Ответить
                                    </button>
                                
                                
                                </div>
                            </div>
                        </div>

                        <div class="commentsApp__comment" id="commentId60190740" data-deleted="no"
                            data-entryid="60190740" data-date="1612511773" data-votesrank="4" style="order: 3">
                            <div class="commentsApp__commentHead">
                                <div class="commentsApp__image">
                                    <img src="./pre-land/comment7.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="commentsApp__commentAuthor">Анна Харма. Паланга</div>
                                <div class="commentsApp__commentDate">4 часа назад</div>
                            </div>
                            <div class="commentsApp__commentBody">
                                Я не понимаю, почему <a
                                    href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">мой официальный сайт</a>. не открывается. Кажется, на моем компьютере нет ничего особенного, но страница глючит. (9
                            </div>
                        <div class="commentsApp__commentFooter">
                            <div class="commentsApp__votes">
                                <div class="commentsApp__votesInfo">
                                    Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                        data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                        
                                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                    <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                </div>
                                <button id="voteUpLogged60190820" type="button"
                                    class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="voteUp">
                                    <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="voteUp"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="voteUp"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                            transform="translate(-0.333 -0.333)"></path>
                                    </svg>
                                    <span id="plusVoteA_60190820">6</span>
                                </button>
                                <button id="voteDownLogged60190820" type="button"
                                    class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="voteDown">
                                    <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                        data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="voteDown"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="voteDown"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                            transform="translate(-0.333 -1)"></path>
                                    </svg>
                                    <span id="minusVoteA_60190820">1</span>
                                </button>
                                <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                    class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="votesInfo">
                                    <svg data-action="votesInfo"
                                        class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                            transform="translate(-0.333 -0.333)"></path>
                                    </svg>
                                    <span id="plusVoteB_60190820">6</span>
                                </button>
                                <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                    class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="votesInfo">
                                    <svg data-action="votesInfo"
                                        class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                            transform="translate(-0.333 -1)"></path>
                                    </svg>
                                    <span id="minusVoteB_60190820">1</span>
                                </button>
                            </div>
                            <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                data-action="reply">
                                Ответить
                            </button>
                        
                        
                        </div>
                        </div>

                        <div class="commentsApp__comment" id="commentId60190740" data-deleted="no"
                            data-entryid="60190740" data-date="1612511773" data-votesrank="4" style="order: 3">
                            <div class="commentsApp__commentHead">

                                <div class="commentsApp__image">
                                    <img src="./pre-land/comment6.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="commentsApp__commentAuthor">Локис Буткевичюс, Юрмала</div>
                                <div class="commentsApp__commentDate">4 часа назад</div>
                            </div>
                            <div class="commentsApp__commentBody">
                                Я хочу купить загородный дом в Юрмале. Мечтать не вредно. К тому же теперь <a
                                    href="{offer}&amp;object=landings.preview&amp;id=53" class="link" onclick="">с такой площадкой</a>. Доход, вероятно, будет чрезмерно оптимистичным.
                            </div>
                            <div class="commentsApp__commentFooter">
                                <div class="commentsApp__votes">
                                    <div class="commentsApp__votesInfo">
                                        Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                            data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                            
                                        <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                        <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                    </div>
                                    <button id="voteUpLogged60190820" type="button"
                                        class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="voteUp">
                                        <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="voteUp"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="voteUp"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                transform="translate(-0.333 -0.333)"></path>
                                        </svg>
                                        <span id="plusVoteA_60190820">6</span>
                                    </button>
                                    <button id="voteDownLogged60190820" type="button"
                                        class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="voteDown">
                                        <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                            data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="voteDown"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="voteDown"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                transform="translate(-0.333 -1)"></path>
                                        </svg>
                                        <span id="minusVoteA_60190820">1</span>
                                    </button>
                                    <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                        class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="votesInfo">
                                        <svg data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                transform="translate(-0.333 -0.333)"></path>
                                        </svg>
                                        <span id="plusVoteB_60190820">6</span>
                                    </button>
                                    <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                        class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="votesInfo">
                                        <svg data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                transform="translate(-0.333 -1)"></path>
                                        </svg>
                                        <span id="minusVoteB_60190820">1</span>
                                    </button>
                                </div>
                                <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="reply">
                                    Ответить
                                </button>
                            
                            
                            </div>
                        </div>

                        <div class="commentsApp__comment" id="commentId60190740" data-deleted="no"
                            data-entryid="60190740" data-date="1612511773" data-votesrank="4" style="order: 3">
                            <div class="commentsApp__commentHead">

                                <div class="commentsApp__image">
                                    <img src="./pre-land/comment8.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="commentsApp__commentAuthor">Юманте Варнане. Седа</div>
                                <div class="commentsApp__commentDate">4 часа назад</div>
                            </div>
                            <div class="commentsApp__commentBody">
                                А кто будет работать, <a href="{offer}&amp;object=landings.preview&amp;id=53"
                                    class="link" onclick="">когда они все такие умные</a>? Будут ли роботать и печь вам хлеб? Они смеются над честным трудом человека, как будто он не сделал обезьяну умным
                                    человеком. Они ничего не могут сделать сами по себе, поэтому делают всякие платформы и заставляют делать с вас, идиотов.
                                    Если честно, лучше бы мы пошли работать.
                            </div>
                        <div class="commentsApp__commentFooter">
                            <div class="commentsApp__votes">
                                <div class="commentsApp__votesInfo">
                                    Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                        data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                        
                                    <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                    <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                </div>
                                <button id="voteUpLogged60190820" type="button"
                                    class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="voteUp">
                                    <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="voteUp"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="voteUp"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                            transform="translate(-0.333 -0.333)"></path>
                                    </svg>
                                    <span id="plusVoteA_60190820">6</span>
                                </button>
                                <button id="voteDownLogged60190820" type="button"
                                    class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="voteDown">
                                    <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                        data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="voteDown"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="voteDown"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                            transform="translate(-0.333 -1)"></path>
                                    </svg>
                                    <span id="minusVoteA_60190820">1</span>
                                </button>
                                <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                    class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="votesInfo">
                                    <svg data-action="votesInfo"
                                        class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                            transform="translate(-0.333 -0.333)"></path>
                                    </svg>
                                    <span id="plusVoteB_60190820">6</span>
                                </button>
                                <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                    class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="votesInfo">
                                    <svg data-action="votesInfo"
                                        class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                            d="M0,0H16V16H0Z"></path>
                                        <path data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                            d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                            transform="translate(-0.333 -1)"></path>
                                    </svg>
                                    <span id="minusVoteB_60190820">1</span>
                                </button>
                            </div>
                            <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                data-action="reply">
                                Ответить
                            </button>
                        
                        
                        </div>
                        </div>

                        <div class="commentsApp__comment" id="commentId60190740" data-deleted="no"
                            data-entryid="60190740" data-date="1612511773" data-votesrank="4" style="order: 3">
                            <div class="commentsApp__commentHead">

                                <div class="commentsApp__image">
                                    <img src="./pre-land/comment9.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="commentsApp__commentAuthor">Юргис Каваляускас. Клайпеда</div>
                                <div class="commentsApp__commentDate">4 часа назад</div>
                            </div>
                            <div class="commentsApp__commentBody">
                                Не кричи здесь, женщина. Мы все это прекрасно понимаем и никто не заставляет вас <a
                                    href="{offer}&amp;object=landings.preview&amp;id=53" class="link"
                                    onclick="">зарабатывать такие деньги</a>. Пеки хлеб на здоровье и не беспокойся о нас.
                            </div>
                            <div class="commentsApp__commentFooter">
                                <div class="commentsApp__votes">
                                    <div class="commentsApp__votesInfo">
                                        Чтобы оценить <a href="{offer}&amp;object=landings.preview&amp;id=53" class="commentsApp__interactiveEl"
                                            data-action="popupVote" data-oxx="60190820" onclick="">Войдите</a>
                            
                                        <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">зарегистрироваться</a>
                                        <span class="commentsApp__votesInfo--close commentsApp__interactiveEl" data-action="votesInfoClose">✖</span>
                                    </div>
                                    <button id="voteUpLogged60190820" type="button"
                                        class="commentsApp__vote commentsApp__vote--up commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="voteUp">
                                        <svg class="commentsApp__voteSVG commentsApp__vodeSVG--up commentsApp__interactiveEl" data-action="voteUp"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="voteUp"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="voteUp"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                transform="translate(-0.333 -0.333)"></path>
                                        </svg>
                                        <span id="plusVoteA_60190820">6</span>
                                    </button>
                                    <button id="voteDownLogged60190820" type="button"
                                        class="commentsApp__vote commentsApp__vote--down commentsApp__vote--logged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="voteDown">
                                        <svg class="commentsApp__voteSVG commentsApp__vodeSVG--down commentsApp__interactiveEl"
                                            data-action="voteDown" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="voteDown"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="voteDown"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                transform="translate(-0.333 -1)"></path>
                                        </svg>
                                        <span id="minusVoteA_60190820">1</span>
                                    </button>
                                    <button id="voteUpLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                        class="commentsApp__vote commentsApp__vote--up commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="votesInfo">
                                        <svg data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--up"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M1,14.333H3.667v-8H1ZM15.667,7a1.337,1.337,0,0,0-1.333-1.333H10.127L10.76,2.62l.02-.213a1,1,0,0,0-.293-.707L9.78,1,5.393,5.393A1.3,1.3,0,0,0,5,6.333V13a1.337,1.337,0,0,0,1.333,1.333h6a1.324,1.324,0,0,0,1.227-.813l2.013-4.7a1.317,1.317,0,0,0,.093-.487Z"
                                                transform="translate(-0.333 -0.333)"></path>
                                        </svg>
                                        <span id="plusVoteB_60190820">6</span>
                                    </button>
                                    <button id="voteDownLoggedOut60190820" title="Aby ocenić zaloguj się lub zarejestruj" type="button"
                                        class="commentsApp__vote commentsApp__vote--down commentsApp__vote--unlogged commentsApp__textStyledBtn commentsApp__interactiveEl"
                                        data-action="votesInfo">
                                        <svg data-action="votesInfo"
                                            class="commentsApp__interactiveEl commentsApp__voteSVG commentsApp__vodeSVG--down"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--transparent"
                                                d="M0,0H16V16H0Z"></path>
                                            <path data-action="votesInfo"
                                                class="commentsApp__interactiveEl commentsApp__voteSVGPath commentsApp__voteSVGPath--fill"
                                                d="M10.333,3h-6a1.324,1.324,0,0,0-1.227.813l-2.013,4.7A1.317,1.317,0,0,0,1,9v1.333a1.337,1.337,0,0,0,1.333,1.333H6.54l-.633,3.047-.02.213a1,1,0,0,0,.293.707l.707.7L11.28,11.94a1.325,1.325,0,0,0,.387-.94V4.333A1.337,1.337,0,0,0,10.333,3ZM13,3v8h2.667V3Z"
                                                transform="translate(-0.333 -1)"></path>
                                        </svg>
                                        <span id="minusVoteB_60190820">1</span>
                                    </button>
                                </div>
                                <button type="button" class="commentsApp__reply commentsApp__textStyledBtn commentsApp__interactiveEl"
                                    data-action="reply">
                                    Ответить
                                </button>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_wrapper">
        <div class="content_wrap">
            <footer class="page_footer">
                <div class="page_footer_upper">
                    <ul class="footer_upper_links">
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Sport"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Sport</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Dziecko"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Dziecko</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="TOK FM"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">TOK FM</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Horoskopy"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Horoskopy</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Gazeta Wyborcza"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Gazeta Wyborcza</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Zakupy"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Zakupy</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Haps"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Haps</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Wiadomości"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Wiadomości</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Gazeta.pl"
                                data-bd-viewability-id="footerUpper" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Gazeta.pl</a>
                        </li>
                    </ul>
                    <ul class="footer_middle_links">
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Poczta"
                                data-bd-viewability-id="footerMiddle" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Poczta</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Newsletter"
                                data-bd-viewability-id="footerMiddle" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Newsletter</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Wszystkie artykuły"
                                data-bd-viewability-id="footerMiddle" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Wszystkie artykuły</a>
                        </li>
                        <li>
                            <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Facebook"
                                data-bd-viewability-id="footerMiddle" data-bd-viewability-href="{offer}"
                                data-bd-viewability="1" onclick="">Facebook</a>
                        </li>
                    </ul>
                </div>
                <a href="{offer}&amp;object=landings.preview&amp;id=53" rel="noreferrer"
                    data-bd-viewability-id="footerLower" data-bd-viewability-href="{offer}" data-bd-viewability="1"
                    onclick="">Copyright © Agora SA</a>
                <ul class="footer_lower_links">
                    <li>
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" title="RSS"
                            data-bd-viewability-id="footerLower" data-bd-viewability-href="{offer}"
                            data-bd-viewability="1" onclick="">RSS</a>
                    </li>
                    <li>
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" title="O Nas"
                            data-bd-viewability-id="footerLower" data-bd-viewability-href="{offer}"
                            data-bd-viewability="1" onclick="">O Nas</a>
                    </li>
                    <li>
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Reklama"
                            data-bd-viewability-id="footerLower" data-bd-viewability-href="{offer}"
                            data-bd-viewability="1" onclick="">Reklama</a>
                    </li>
                    <li>
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" title="Prywatność"
                            data-bd-viewability-id="footerLower" data-bd-viewability-href="{offer}"
                            data-bd-viewability="1" onclick="">Prywatność</a>
                    </li>
                    <li>
                        <a data-error-node="" href="{offer}&amp;object=landings.preview&amp;id=53" data-width="650"
                            data-height="505" title="Zgłoś błąd" onclick="">Zgłoś
                            błąd</a>
                    </li>
                    <li id="footer_consent_link">
                        <a href="{offer}&amp;object=landings.preview&amp;id=53" onclick="">Zgody</a>
                    </li>
                </ul>
            </footer>
        </div>
    </div>

    <!-- Проброс всех меток на ленд -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function () {
        const link = "../";
        $('a').attr('href', link + '?<?php echo http_build_query($_GET);?>');
        $('a').attr('onclick', '');
    });
</script>
    <!-- Проброс всех меток на ленд -->



    <div id="torrent-scanner-popup" style="display: none;"></div>
</body>

</html>