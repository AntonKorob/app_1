<div class="container justify-content-center h-100">
    <div class="row">
        <div class="col">
            <?php 
            include '../classes/Account.php';
            include '../classes/AccountNumber.php';

            $numbers = new AccountNumber(12345678, 987654321);
            $account = new Account($numbers, 'Savings', 10.00);
            ?>
            <div class="account_number">
                <h2><?= $account->type?></h2>
                <p>Account: <?= $account->number->accountNumber?></p>
                <p>Routing: <?= $account->number->routingNumber?></p>
            </div>
        </div>
        <div class="col">

        </div>
    </div>
</div>
