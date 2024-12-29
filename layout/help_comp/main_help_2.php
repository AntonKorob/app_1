<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Выбор несколькоих значений списка</h1>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>
    <div class="main_form row">
        <div class="form col-4">
            <h3>Личность</h3>
            <form class="border border-info-subtle rounded p-2" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

                <p>Охарактеризуйте себя: </p>
                <select id="form_selection_help_2" class="w-50" name="attributes[]" multiple>
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
        </div>
        <div class="val col">
            <?php include '../help_storage/help_form_2.php'; ?>
        </div>
    </div>

</div>