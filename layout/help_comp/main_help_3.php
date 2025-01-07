<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Многозначный параметры</h1>
        <p>Help 3</p>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>
    <div class="main_form row">
        <div class="form col-4">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            // if(!empty($_GET['attributes'])){
                $attrs = $_GET['attributes'];
            } else {
                echo "Запись пуста!";
            }
            if (!is_array(($attrs))) {
                $attrs = [];
            }

            function makeCheckboxes($name, $query, $options)
            {
                foreach ($options as $value => $label) {
                    $checked = in_array($value, $query) ? "checked" : '';

                    echo "<input type=\"checkbox\" name =\"{$name}\" value=\"{$value}\" {$checked} /> ";
                    echo "{$label} <br/>";
                }
            }
            $personalityAttributes = array(
                'веселый' => 'Веселый',
                'умный' => 'Умный',
                'красивый' => 'Красивый',
                'нежный' => 'Нежный',
                'страстный' => 'Страстный'
            );

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

                <?php makeCheckboxes('attributes[]', $attrs, $personalityAttributes) ?></br>
                <!-- <input type="submit" name="s" value="Записать"> -->
                <button class="btn btn-outline-primary" type="submit" name="s" >Записать</button>
                <button class="btn btn-outline-secondary" type="reset" name="reset"><a class="text-decoration-none text-dark" href="../pages/help_3.php">Сбросить</a></button>
            </form>

            <?php
            if (!empty($_GET['attributes'])) {

                if (array_key_exists('s', $_GET)) {
                    $description = join(' ', $_GET['attributes']);
                    echo "Вы - {$description} ";
                }else{
                    echo "Запись пуста";
                }
            }
            ?>

        </div>
        <div class="val col mt-4">

        </div>
    </div>
</div>