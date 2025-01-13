<div class="container justify-content-center h-100">
    <div class="row">
        <div class="col">
            <?php

            $candy = [
                'Toffee' => ['price' => 3.00, 'stock' => 12],
                'Mints' => ['price' => 2.00, 'stock' => 26],
                'Fudge' => ['price' => 4.00, 'stock' => 8],
            ];
            $tax = 20;

            function get_reorder_message(int $stock)
            {
                return ($stock < 10) ? 'Yes' : 'No';
            }

            function get_total_value($price, $quantity)
            {
                return $price * $quantity;
            }

            function get_tax_due($price, $quantity, $tax = 0)
            {
                return ($price * $quantity) * ($tax / 100);
            }
            ?>
            <h1>The Candy Store</h1>
            <h2>Stock Control</h2>
            <table>
                <tr>
                    <th>Candy</th>
                    <th>Stock</th>
                    <th>Re-order</th>
                    <th>Total value</th>
                    <th>Tax due</th>
                </tr>
                <?php foreach ($candy as $product_name => $data) { ?>
                    <tr>
                        <td><?= $product_name ?></td>
                        <td><?= $data['stock'] ?></td>
                        <td><?= get_reorder_message($data['stock']) ?></td>
                        <td><?= get_total_value($data['price'], $data['stock']) ?></td>
                        <td><?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
                    </tr>
                <?php }; ?>
            </table>

        </div>
        <div class="col">
            <?php
            class Customer
            {
                public $forename;
                public $surename;
                public $email;
                public $password;
            }

            class Account
            {
                public $number;
                public $type;
                public $balance;

                public function deposit($amount)
                {
                    $this->balance += $amount;
                    return $this->balance;
                }
                public function withdraw($amount)
                {
                    $this->balance -= $amount;
                    return $this->balance;
                }
            }

            $customer = new Customer();
            $account = new Account();
            $customer->email = 'ivy@eg.link';
            $account->balance = 1000.00;

            ?>
            <h2>Neo Bank</h2>
            <p>Email : <?= $customer->email ?></p>
            <p>Balance : <?= $account->balance ?></p>
            <h2>Deposit</h2>
            <p>$<?= $account->deposit(50.00) ?></p>
        </div>
        <div class="row">
            <div class="col mt-4 ">
                <?php
                include '../classes/Account.php';
                $checking = new Accaunt(43161176, 'Checking', 32.00);
                $savings = new Accaunt(20148896, 'Savings', 756.00);

                ?>

                <h2 class="text-center m-3">Account Balances</h2>

                <table id="table_account_balances" class="table mx-auto p-2 w-50 border border-black ">
                    <tr>
                        <th>Date</th>
                        <th><?= $checking->type ?></th>
                        <th><?= $savings->type ?></th>
                    </tr>
                    <tr>
                        <td>23 June</td>
                        <td>$<?= $checking->getBalance(); ?></td>
                        <td>$<?= $savings->getBalance(); ?></td>
                        </td>
                    <tr>
                        <td>24 June</td>
                        <td>$<?= $checking->deposite(12.00); ?></td>
                        <td>$<?= $savings->withdraw(100.00); ?></td>
                    </tr>
                    <tr>
                        <td>25 June</td>
                        <td>$<?= $checking->deposite(5.00); ?></td>
                        <td>$<?= $savings->withdraw(300.00); ?></td>
                    </tr>

                </table>
                <div class="bg bg-secondary rounded-3 mt-5 p-2 w-50">

                    <?php
                    $numbers = [
                        'account_number' => 12345678,
                        'routing_number' => 987654321
                    ];
                    $account = new Accaunt($numbers, 'Savings', 10.00);
                    ?>
                    <h2><?= $account->type ?> acount</h2>
                    <p>Account: <?= $account->number['account_number'] ?></p>
                    <p>Account: <?= $account->number['routing_number'] ?></p>
                </div>

            </div>
        </div>
    </div>


</div>