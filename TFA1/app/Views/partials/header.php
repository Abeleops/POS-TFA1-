<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'NightPOS') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= base_url('/') ?>">
                <span class="brand-mark">N</span>
                <span>NightPOS</span>
            </a>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('about') ?>">About</a>
                <a href="<?= base_url('customers') ?>">Customers</a>
                <a href="<?= base_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>

    <main>
