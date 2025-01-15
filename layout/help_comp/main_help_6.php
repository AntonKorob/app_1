<div class="container justify-content-center h-100">
    <div class="title">
        <?php
        // Создание массива приветствий, а затем получение случайного значения  
        $greetings = ['Hi ', 'Howdy ', 'Hello ', 'Hola ', 'Welcome ', 'Ciao '];
        $greeting_key = array_rand($greetings);
        $greeting = $greetings[$greeting_key];

        // Массив бестселеров, подсчет товаров, вывод списком 
        $bestsellers = ['notebook', 'pencil', 'ink'];
        $bestseller_count = count($bestsellers);
        $bestseller_text = implode(' , ', $bestsellers);

        // Массив содержащий сведения о клиентах
        $custumers = ['forname' => 'Ivy', 'surname' => 'Stone', 'email' => 'ivy@com'];

        // Если есть имя у клиента, добавим его в приветствие
        if (
            array_key_exists('forname', $custumers)
        ) {
            $greeting .= $custumers['forname'];
        }
        ?>
        <h1>Best Sellers</h1>
        <p><?= $greeting ?></p>
        <hr>
        <p>Our top: <?= $bestseller_count ?> items todey are: <b><?= $bestseller_text ?></b></p>
    </div>
    <div class="row">
        <div class="col">
            <?php
            include '../classes/Account.php';
            include '../classes/AccountNumber.php';

            $numbers = new AccountNumber(12345678, 987654321);
            $account = new Account($numbers, 'Savings', 10.00);
            ?>
            <div class="account_number">
                <h2><?= $account->type ?></h2>
                <p>Account: <?= $account->number->accountNumber ?></p>
                <p>Routing: <?= $account->number->routingNumber ?></p>
            </div>
        </div>
        <div class=" col">
            <table class="table">
                <tr>
                    <th colspan="2" class="title">Data About Browser Sent in HTTP Headers</th>
                </tr>
                <tr>
                    <th>Browser's IP address</th>
                    <td><?= $_SERVER['REMOTE_ADDR'] ?></td>
                </tr>
                <tr>
                    <th>Type of browaer</th>
                    <td><?= $_SERVER['HTTP_USER_AGENT'] ?></td>
                </tr>
                <tr>
                    <th colspan="2" class="title">HTTP Request</th>
                </tr>
                <tr>
                    <th>Host name</th>
                    <td><?= $_SERVER['HTTP_HOST'] ?></td>
                </tr>
                <tr>
                    <th>URL after host name</th>
                    <td><?= $_SERVER['REQUEST_URI'] ?></td>
                </tr>
                <tr>
                    <th>Query string</th>
                    <td><?= $_SERVER['QUERY_STRING'] ?></td>
                </tr>
                <tr>
                    <th>HTTP request method</th>
                    <td><?= $_SERVER['REQUEST_METHOD'] ?></td>
                </tr>
                <tr>
                    <th colspan="2" class="title">Location of File Executed</th>
                </tr>
                <tr>
                    <th>Document root</th>
                    <td><?= $_SERVER['DOCUMENT_ROOT'] ?></td>
                </tr>
                <tr>
                    <th>Path form document root</th>
                    <td><?= $_SERVER['SCRIPT_NAME'] ?></td>
                </tr>
                <tr>
                    <th>Absolute path</th>
                    <td><?= $_SERVER['SCRIPT_FILENAME'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>