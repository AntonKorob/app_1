<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Выбор несколькоих значений списка</h1>
        <p>Help 2</p>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>
    <div class="main_form row">
        <div class="form col-4">
            <h3>Личность</h3>
            <form class="border border-info-subtle rounded p-2" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

                <p>Охарактеризуйте себя: </p>
                <select id="form_selection_help_2" class="p-2 w-50" name="attributes[]" multiple>
                    <option value="веселый">Веселый</option>
                    <option value="угрюмый">Угрюмый</option>
                    <option value="умный">Умный</option>
                    <option value="смешной">Смешной</option>
                    <option value="жадный">Жадный</option>
                    <option value="гений">Гений</option>
                </select>
                </br>
                <input class="btn btn-success mt-2" type="submit" name="self" value="Записать">
            </form>
            <?php include '../help_storage/help_form_2.php'; ?>
        </div>
        <div class="val col">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
                <h3>Охарактеризуйте себя</h3>
                <ul>
                    <li>
                        <input type="checkbox" name="attributes[]" value="находчивый"><span> Находчивый </span>
                    </li>
                    <li>
                        <input type="checkbox" name="attributes[]" value="уютный"><span> Уютный </span>
                    </li>
                    <li>
                        <input type="checkbox" name="attributes[]" value="дерзкий"><span> Дерзкий </span>
                    </li>
                    <li>

                        <input type="checkbox" name="attributes[]" value="веселый"><span> Веселый </span>
                    </li>
                    <li>

                        <input type="checkbox" name="attributes[]" value="чувственный"><span> Чувственный </span>
                    </li>
                    <li>

                        <input type="checkbox" name="attributes[]" value="шоппер"><span> Шоппер </span>
                    </li>
                </ul>
                </br>
                <input class="btn btn-success mt-2" type="submit" name="self" value="Записать">
            </form>
            <?php include '../help_storage/help_form_2.php'; ?>

        </div>
    </div>

</div>