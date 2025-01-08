<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Проверка форм</h1>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>
    <div class="row">
        <div class="col-2 w-25">
            <h3>Time Zone: </h3>
            <?php
            $tz_LDN = new DateTimeZone('Europe/London');
            $tz_TYO = new DateTimeZone('Asia/Tokyo');
            $location = $tz_LDN->getLocation();

            $LDN = new DateTime('now', $tz_LDN);
            $TYO = new DateTime('now', $tz_TYO);
            $SYD = new DateTime('now', new DateTimeZone('Australia/Sydney'));
            ?>
            <p><b>LDN: <?php $LDN->format('g:i a'); ?></b>
                (<span>Разница во времени</span><?= ($LDN->getOffset() / (60 * 60)) ?>)
                <hr>
                <b>TYO: <?= $TYO->format('g:i a') ?></b>
                (<span>Разница во времени</span><?= ($TYO->getOffset() / (60 * 60)) ?>)
                <hr>
                <b>SYD: <?= $SYD->format('g:i a') ?></b>
                (<span>
                Разница во времени
                </span><?= $SYD->getOffset() / (60 * 60) ?>)
                <hr>
            </p>
            <h1>Head Office</h1>
            <p><?= $tz_LDN->getName() ?><br>
                <b>Longitude: </b><?php $location['longitude']?><br>
                <b>Latitude: </b><?php $location['latitude']?>
            </p>
        </div>
        <!-- col 2 -->
        <div class="col w-75">
            <!-- AJAX PHP tech -->
            <!-- <script src="../js/txtHint.js"></script> -->
            <script>
                function showHint(str) {
                    if (str.length == 0) {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("txtHint").innerHTML = this.responseText;
                            }
                        }
                        xmlhttp.open("GET", "../storeg/gethint.php?q=" + str, true);
                        xmlhttp.send();
                    }
                }
            </script>
            <p><b>Start typing a name in the input field below:</b></p>
            <form action="">
                <label for="fname">First name:</label>
                <input class="form-control border-4 w-50" type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            </form>
            <p>Suggestions: <span id="txtHint"></span></p>

            <button class="btn btn-outline-secondary" type="reset" name="reset"><a class="text-decoration-none text-dark" href="../pages/help_4.php">Сбросить</a></button>

        </div>
    </div>


</div>