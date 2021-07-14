<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> <?= $title; ?>
        </title>
        <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
        <link href="<?= base_url('assets/') ?>manual_home1.css" rel="stylesheet" />
        <link href="<?= base_url('assets/') ?>css/bootstrap.css" rel="stylesheet" />
        <link href="<?= base_url('assets/') ?>sweet/sweetalert2.css" rel="stylesheet" />
        <link href="<?= base_url('assets/') ?>css/dashboard_user/dashboard.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="<?=base_url('assets/')?>sweet/sweetalert2.all.js"></script>

    </head>
            <body style="padding:0; margin:0;">
     

<div class="sidebar">
    <ul class="list-group">
        <li class="list-group-item">
            <h3 id="sanggar-senam">Kartika Bodyfit</h3>
        </li>
        <li id="name" class="list-group-item ">
            
        </li>
        <li id="name" class="list-group-item">
            <a><?=$user['name']?></a>
        </li>
        <li class="list-group-item">
            
        </li>
        <li class="list-group-item nav">
            <a href="<?= base_url('user/')?>" >Home</a>
        </li>
       
        <li class="list-group-item nav">
            <a href="<?=base_url('user/logout')?>">Keluar</a>
        </li>
    </ul>
</div>
