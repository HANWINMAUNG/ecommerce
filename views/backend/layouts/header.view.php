<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="/assets/backend/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/backend/css/custom.css">
    <link rel="stylesheet" href="/assets/backend/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="/assets/backend/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/backend/css/app.css">
    <link rel="shortcut icon" href="/assets/backend/images/favicon.svg" type="image/x-icon">

</head>
<body>
    <div id="app">
        <?php include(base_path("views/backend/layouts/sidebar.view.php")); ?>

        <div id="main">
        <?php include(base_path("views/backend/layouts/navbar.view.php")); ?>

       <div class="main-content container-fluid">

        <?php if(isset($_SESSION['success'])):?>
            <div  id ="success_message"class="alert alert-success"><?= $_SESSION['success']?></div>
            <?php endif ?>
