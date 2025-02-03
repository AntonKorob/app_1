<div class="container justify-content-center h-100">
    <div class="row">
        <div class="col">
            <?php
            $cities = [
                'London' => '48 Store Street, WC1E 7BS',
                'Sydney' => '151 Oxford Street, 2021',
                'NYC' => '1245 7th Street, 10492'
            ];


    $city = $_GET['city'] ?? '';
    $address = $cities[$city] ?? '';

    ?>

            <?php foreach ($cities as $key => $value) { ?>
                <button class="btn btn-secondary">
                    <a class="link-underline-light" href="help_7.php?city=<?= $key ?>"><?= $key ?></a>
                </button>
            <?php }; ?>

            <h1><?= $city ?></h1>
            <p><?= $address ?></p>
        </div>
        <div class="col">

        </div>
    </div>
</div>