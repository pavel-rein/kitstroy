<!DOCTYPE html>
<html>
    <head>
        <title>Аренда спецтехники в Санкт-Петербурге</title>
        <link rel="icon" href="/images/favicon.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
        <style>
            html, body, h1, h2, h3, h4, h5, h6 {
                font-family: "Rubik", "Verdana", sans-serif;
            }
            .r-cursor-btn {
                cursor: pointer;
            }
            #mobile_sidebar {
                display: none;
            }
            .slider_other {
                display: none;
            }
        </style>
        <script>
            $(function(){
                $(".mobile_sidebar_btn").click(function(){
                    $('#mobile_sidebar').toggle();
                });

                $(".slider_thumb").click(function() {
                    var $dataContainerId;
                    var $dataId;

                    $dataContainerId = $(this).attr("data-container-id");
                    $dataId = $(this).attr("data-id");

                    $(".slider_image[data-container-id=" + $dataContainerId + "]").hide();
                    $(".slider_image[data-container-id=" + $dataContainerId + "][data-id=" + $dataId + "]").show();
                });
            });
        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-52ZDQ4G');</script>
        <!-- End Google Tag Manager -->
    </head>    
    <body>
        <div class="w3-container">
            <div class="w3-row w3-margin w3-padding">
                <div class="w3-col">
                    <div class="w3-cell-row w3-hide-small w3-hide-medium">
                        <div class="w3-container w3-cell w3-cell-middle">
                            <img src="/images/logotip-kitstroy.png" class="w3-image" alt="Логотип Китстрой">
                        </div>
                        <div class="w3-container w3-cell w3-cell-middle">
                            <div class="w3-bar">
                                <a href="/" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-indigo w3-hover-text-indigo">Аренда спецтехники</a>
                                <a href="/" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-indigo w3-hover-text-indigo">Услуги</a>
                                <a href="/" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-indigo w3-hover-text-indigo">Доставка нерудных материалов</a>
                            </div>
                        </div>
                        <div class="w3-container w3-cell w3-cell-middle">
                            <a class="w3-text-indigo" href="tel:+7 921 091 09 51"><b>+7 921 091 09 51</b></a><br>
                            СПб, ул. Шаумяна 8, корп. 1, офис 348<br>
                            <a class="w3-text-indigo" href="mailto:docs@arenda-spectehniki.site"><b>docs@arenda-spectehniki.site</b></a>
                        </div>
                    </div>
                    <div class="w3-row w3-cell-row w3-hide-large">
                        <div class="w3-cell w3-cell-middle">
                            <button class="w3-button w3-xlarge mobile_sidebar_btn">☰</button>
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <img src="/images/logotip-kitstroy.png" class="w3-image" alt="Логотип Китстрой">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <a class="w3-text-indigo" href="tel:+7 921 091 09 51"><b>+7 921 091 09 51</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-container">
            <div class="w3-row w3-row-padding">
                <div class="w3-bar-block w3-hide-large" id="mobile_sidebar">
                    <div class="w3-bar-item">СПб, ул. Шаумяна 8, корп. 1, офис 348</div>
                    <div class="w3-bar-item"><a class="w3-text-indigo" href="mailto:docs@arenda-spectehniki.site"><b>docs@arenda-spectehniki.site</b></a></div>
                    <div class="w3-bar-item"><hr></div>
                    <?php
                    for($i = 0; $i < count($sidebar); $i++) {
                        if ($sidebar[$i]["level"] == 2) {
                            if (!empty($path[0]) && empty($path[1]) && $path[0] == $sidebar[$i]["url"]) {
                                print "<a href='/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo w3-indigo'>{$sidebar[$i]["title"]}</a>";
                            } else {
                                print "<a href='/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo'>{$sidebar[$i]["title"]}</a>";
                            }
                        } elseif ($sidebar[$i]["level"] == 3) {
                            if (!empty($path[1]) && $path[1] == $sidebar[$i]["url"]) {
                                print "<a href='/{$sidebar[$sidebar[$i]["parent_id"]-2]["url"]}/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo w3-margin-left w3-indigo'>{$sidebar[$i]["title"]}</a>";
                            } else {
                                print "<a href='/{$sidebar[$sidebar[$i]["parent_id"]-2]["url"]}/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo w3-margin-left'>{$sidebar[$i]["title"]}</a>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="w3-row w3-row-padding">
            <div class="w3-col m2 w3-padding-large w3-hide-small w3-hide-medium">
                <div class="w3-bar-block w3-small">
                    <?php
                    for($i = 0; $i < count($sidebar); $i++) {
                        if ($sidebar[$i]["level"] == 2) {
                            if (!empty($path[0]) && empty($path[1]) && $path[0] == $sidebar[$i]["url"]) {
                                print "<a href='/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo w3-indigo'>{$sidebar[$i]["title"]}</a>";
                            } else {
                                print "<a href='/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo'>{$sidebar[$i]["title"]}</a>";
                            }
                        } elseif ($sidebar[$i]["level"] == 3) {
                            if (!empty($path[1]) && $path[1] == $sidebar[$i]["url"]) {
                                print "<a href='/{$sidebar[$sidebar[$i]["parent_id"]-2]["url"]}/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo w3-margin-left w3-indigo'>{$sidebar[$i]["title"]}</a>";
                            } else {
                                print "<a href='/{$sidebar[$sidebar[$i]["parent_id"]-2]["url"]}/{$sidebar[$i]["url"]}/' class='w3-bar-item w3-button w3-hover-indigo w3-margin-left'>{$sidebar[$i]["title"]}</a>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>