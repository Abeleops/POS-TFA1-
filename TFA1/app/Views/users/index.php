<?= view('partials/header', ['title' => 'User Accounts | NightPOS']) ?>

<section class="page-banner compact">
    <div class="container">
        <span class="eyebrow">Staff Management</span>
        <h1>User Accounts</h1>
        <p class="lead">A clear overview of staff members and their assigned system roles.</p>
    </div>
</section>

<section class="container section table-section">
    <div class="table-card">
        <div class="table-header">
            <div>
                <h2>Staff List</h2>
                <p><?= count($users) ?> records available</p>
            </div>
            <span class="badge">Static Data</span>
        </div>

        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><strong>@<?= esc($user['username']) ?></strong></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
