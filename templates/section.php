<?php require_once 'templates/header.php'; ?>
        <div class="w3-col m10">
            <div class="container">
                <div class="w3-row">
                    <div class="w3-col l12 w3-padding-large">
                        <h2 class="w3-xxlarge">
                            <b><?= $notes[0]["header"] ?></b>
                        </h2>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l6 w3-padding-large">
                        <p>
                            <?= $notes[0]["description"] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <?php
                    for($i = 1; $i < count($notes); $i++) {
                        if ($notes[$i]["level"] == 2) {
                            print <<<EOF
                                <div class='w3-row'>
                                    <div class='w3-col l12 w3-padding-large'>
                                        <h3 class='w3-xlarge'>
                                            <b>{$notes[$i]["title"]}</b>
                                        </h3>
                                    </div>
                                </div>
EOF;
                        } elseif ($notes[$i]["level"] == 3) {
                        print <<<EOT
                            <div class='w3-row'>
                                <div class='w3-col l4 w3-padding-large' id='slider-{$i}'>
                                    <div class='w3-content w3-display-container'>
                                        <img class='w3-image slider_image' src='/images/{$notes[$i]["url"]}-1.jpg' data-id='1' data-container-id='slider-{$i}'>
                                        <img class='w3-image slider_image slider_other' src='/images/{$notes[$i]["url"]}-2.jpg' data-id='2' data-container-id='slider-{$i}'>
                                        <img class='w3-image slider_image slider_other' src='/images/{$notes[$i]["url"]}-3.jpg' data-id='3' data-container-id='slider-{$i}'>
                                    </div>
                                    <div class='w3-section w3-row-padding w3-stretch'>
                                        <div class='w3-col s4'>
                                            <img class='w3-image w3-opacity w3-hover-opacity-off r-cursor-btn slider_thumb' src='/images/{$notes[$i]["url"]}-1.jpg' data-id='1' data-container-id='slider-{$i}'>
                                        </div>
                                        <div class='w3-col s4'>
                                            <img class='w3-image w3-opacity w3-hover-opacity-off r-cursor-btn slider_thumb' src='/images/{$notes[$i]["url"]}-2.jpg' data-id='2' data-container-id='slider-{$i}'>
                                        </div>
                                        <div class='w3-col s4'>
                                            <img class='w3-image w3-opacity w3-hover-opacity-off r-cursor-btn slider_thumb' src='/images/{$notes[$i]["url"]}-3.jpg' data-id='3' data-container-id='slider-{$i}'>
                                        </div>
                                    </div>
                                </div>
                                <div class='w3-col l6 w3-padding-large'>
                                    <h4>
                                        <b>{$notes[$i]["title"]}</b>
                                    </h4>
                                    <p>
                                        {$notes[$i]["content"]}
                                    </p>
                                    <form class='w3-col l10' action='index.php' method='POST'>
                                        <input type='hidden' name='form_name' value='Аренда спецтехники _ СПб'>
                                        <input type='hidden' name='form_description' value='Получить расчет аренды {$notes[$i]["title"]}'>
                                        <h3>
                                            <b>Получите расчет заказа на <span class='w3-text-orange'>{$notes[$i]["title"]}</span></b>
                                        </h3>
                                        <p>
                                            <label class='w3-text-grey'>Телефон *</label>
                                            <input class='w3-input w3-round w3-light-grey' type='text' name='phone' required>
                                        </p>
                                        <button class='w3-btn w3-block w3-indigo w3-round' type='submit'>Получить расчет аренды</button>
                                        <p class='w3-text-grey w3-small'>Нажимая на кнопку, вы даете согласие на обработку персональных данных</p>
                                    </form>
                                </div>
                            </div>
EOT;
                        }
                    }
                ?>
            </div>
            <?php require_once 'templates/about.php'; ?>
        </div>
    </div>
<?php require_once 'templates/footer.php'; ?>