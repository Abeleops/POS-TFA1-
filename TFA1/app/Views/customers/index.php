<?= view('partials/header', ['title' => 'Customer Accounts | NightPOS']) ?>

<section class="page-banner compact">
    <div class="container">
        <span class="eyebrow">Accounts</span>
        <h1>Customer Accounts</h1>
        <p class="lead">A list of customer contact records currently stored in a temporary PHP array.</p>
    </div>
</section>

<section class="container section table-section">
    <div class="table-card">
        <div class="table-header">
            <div>
                <h2>Customer List</h2>
                <p><?= count($customers) ?> records available</p>
            </div>
            <span class="badge">Static Data</span>
        </div>

        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $index => $customer): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><strong><?= esc($customer['full_name']) ?></strong></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
