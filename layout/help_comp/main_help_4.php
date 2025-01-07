<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Проверка форм</h1>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>
    <div class="row">
        <div class="col-2">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $name = $_POST['name'];
                $mediaType = $_POST['media_type'];
                $filename = $_POST['filename'];
                $caption = $_POST['Caption'];
                $status = $_POST['Status'];

                $tried = ($_POST['tried'] == 'yes');

                if ($tried) {
                    $validated = (!empty($name) && !empty($mediaType) && !empty($filename));
                    if (!$validated) { ?>
                        <p>Имя, тип файла и имя файла - обязательные поля. Заполните их для продложения</p>
                    <?php }
                }
                if ($tried && $validated) {
                    echo "<p>Элеимент был создан</p>";
                }

                function mediaSelected($type)
                {
                    global $mediaType;
                    if ($mediaType == $type) {
                        echo "Тип файла выбран!";
                    } ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        Имя : <input type="text" name="name" value="{$name} ?>"></br>
                        Статус : <input type="checkbox" name="status" value="active"
                            <?php
                            if (isset($status)) {
                                if ($status == "active") {
                                    echo "checked";
                                }
                            }
                            ?>
                            <span>
                        Тип:
                        </span> <select name="media_type">

                        </select>
                    </form>
            <?php }
            }

            ?>
        </div>
        <div class="col">
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
                <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            </form>
            <p>Suggestions: <span id="txtHint"></span></p>
        </div>
    </div>


</div>