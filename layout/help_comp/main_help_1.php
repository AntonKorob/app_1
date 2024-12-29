<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Разбить слово по частям</h1>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>


    <form class="w-25 border border-info-subtle rounded p-2" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <p for="Введите слово">Введите слово : </p>
        <input class="form-control bg-light" type="text" name="word" required>
        <p>Введите длинну одной части слова :</p>
        <input class="form-control bg-light" type="number" name="number" required>
        </br>
        <input class="btn btn-success mt-2" type="submit" value="Разбить">

    </form>

    <?php include'../help_storage/help_form_1.php';?>
</div>
