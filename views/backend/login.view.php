<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>
   
    <link rel="stylesheet" href="/assets/backend/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/backend/css/custom.css">
    <link rel="stylesheet" href="/assets/backend/vendors/chartjs/Chart.min.css">
    

    <link rel="stylesheet" href="/assets/backend/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/backend/css/app.css">
    <link rel="shortcut icon" href="/assets/backend/images/favicon.svg" type="image/x-icon">

</head>
<body>
<div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <h3>Sign In</h3>
                    </div>
                    <?php if(isset($_SESSION['errors'])) :?>
                        <div class="alert alert-danger"><?= $_SESSION['errors'][0] ?></div>
                        <?php endif; ?>
                    <form action="/admin/login" method="POST">   
                         <div class="form-group position-relative has-icon-left">
                         <label for="first-name-icon">Role</label>
                            <div class="position-relative mt-2 mb-2">
                            
                            <select name="is_admin" class="form-select " id="basicSelect">
                                            <option value="1">Admin</option>
                                            <option value="0">Partner</option>
                                        </select>
                            
                        </div>                   

                            <div class="form-group has-icon-left">
                                
                                <label for="email-id-icon">Email</label>
                                <div class="position-relative">
                                    <input type="text"  name="email" class="form-control" placeholder="Email" id="email-id-icon">
                                    <div class="form-control-icon">
                                        <i data-feather="mail"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password">Password</label>
                                    <a href="auth-forgot-password.html" class='float-right'>
                                        <small>Forgot password?</small>
                                    </a>
                                </div>
                                <div class="position-relative">
                                    <input name="password" type="text" class="form-control" id="password">
                                    <div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                            </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                            <div class="float-right">
                                <a href="">Don't have an account?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/assets/backend/js/pages/dashboard.js"></script>
    <script src="/assets/backend/js/feather-icons/feather.min.js"></script>
    <script src="/assets/backend/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/backend/js/app.js"></script>
    
    <script src="/assets/backend/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/backend/vendors/apexcharts/apexcharts.min.js"></script>

    <script src="/assets/backend/js/vendors.js"></script>

<script src="/assets/backend/js/main.js"></script>
</body>
</html>