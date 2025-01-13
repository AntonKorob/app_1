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

                public function deposit($amount) {
                    $this->balance += $amount;
                    return $this->balance;
                }
                public function withdraw($amount) {
                    $this->balance-= $amount;
                    return $this->balance;
                }
            }

            $customer = new Customer();
            $account = new Account();
            $customer->email = 'ivy@eg.link';
            $account->balance = 1000.00;

            ?>
            <h2>Neo Bank</h2>
            <p>Email : <?= $customer->email?></p>
            <p>Balance : <?= $account->balance?></p>
            <h2>Deposit</h2>
            <p>$<?= $account->deposit(50.00)?></p>
        </div>
        <div class="row">
            <div class="col">
                
            </div>
        </div>
    </div>


</div>