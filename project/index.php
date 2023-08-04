<?php
require_once 'backend/sdbh.php';
require_once 'backend/calculator.php';
$dbh = new sdbh();
?>
<html>
<head>
<!--    <script defer src="js/index.js" type="module"></script>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>


    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <link href="style_form.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        .container {
            margin-top: 50px;
            border-radius: 15px;
            border: 3px solid #333;
        }

        .col-3 {
            background-color: #FF9A00;
            border-radius: 0;
            border-top-left-radius: 13px;
            border-bottom-left-radius: 13px;
            display: flex;
            align-items: center;
            flex-flow: column;
            justify-content: center;
            font-size: 26px;
            font-weight: 900;
        }

        label:not([class="form-check-label"]) {
            font-size: 16px;
            font-weight: 600;
        }

        .form-check-input:checked {
            background-color: #FF9A00;
            border-color: #FF9A00;
        }

        .col-9 {
            padding: 25px;
        }

        .btn-primary {
            color: #fff;
            background-color: #FF9A00;
            border-color: #FF9A00;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row row-header">
        <div class="col-12">
            <img src="assets/img/logo.png" alt="logo" style="max-height:50px"/>
            <h1>Прокат</h1>
        </div>
    </div>
    <div class="row row-body">
        <div class="col-12">
            <h4>Дополнительные услуги:</h4>
        </div>
    </div>
    <?php
    $services =  unserialize($dbh->mselect_rows('a25_settings', ['set_key' => 'services'], 0, 1, 'id')[0]['set_value']);
    $products = unserialize($dbh->mselect_rows('a25_products', ['NAME' => 'Авто 1'], 0, 1, 'id')[0]['TARIFF']);

    if ($products === false) {

        $products[0] = $dbh->mselect_rows('a25_products', ['NAME' => 'Авто 1'], 0, 1, 'id')[0]['PRICE'];
    }
    include_once '../form/form.php';
    ?>
    <!-- TODO: реализовать форму расчета -->
    <!-- <div class="row row-form">
        <div class="col-12">
            <h4>Форма расчета:</h4>
            <p></p>
        </div>
    </div> -->
</div>
</body>
</html>

