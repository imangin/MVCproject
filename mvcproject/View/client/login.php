<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coron-login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="..\..\Public\client\assets\img\favicon.png">
		
		<!-- all css here -->
       <link rel="stylesheet" href="..\..\Public\client\assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="..\..\Public\client\assets\css\plugin.css">
        <link rel="stylesheet" href="..\..\Public\client\assets\css\bundle.css">
        <link rel="stylesheet" href="..\..\Public\client\assets\css\style.css">
        <link rel="stylesheet" href="..\..\Public\client\assets\css\responsive.css">
        <script src="..\..\Public\client\assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
           <div class="customer_login">
                            <div class="row">
                                       <!--login area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form">
                                                <h2>login</h2>
                                                <form action="login.php" method='POST'>
                                                    <p>   
                                                        <label>Username or email <span>*</span></label>
                                                        <input type="text" name="username">
                                                     </p>
                                                     <p>   
                                                        <label>Passwords <span>*</span></label>
                                                        <input type="password" name="password">
                                                     </p>   
                                                    <div class="login_submit">
                                                        <button type="submit" name="dangnhap">login</button>
                                                         <?php require '../../Controller/client/xuly_dangnhap.php';?> 
                                                        <label for="remember">
                                                            <input id="remember" type="checkbox">
                                                            Remember me
                                                        </label>
                                                        <a href="#">Lost your password?</a>

                                                    </div>
                                                   

                                                </form>
                                             </div>    
                                        </div>
                                        <!--login area start-->

                                        <!--register area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form register">
                                                <h2>Register</h2>
                                                <form action="#" method="POST">
                                                    <p>   
                                                        <label>Email address  <span>*</span></label>
                                                        <input type="text" name="username">
                                                     </p>
                                                     <p>   
                                                        <label>Passwords <span>*</span></label>
                                                        <input type="password" name="password">
                                                     </p>
                                                    <div class="login_submit">
                                                        <button type="submit">Register</button>
                                                         
                                                    </div>
                                                </form>
                                            </div>    
                                        </div>
                                        <!--register area end-->
                                    </div>
                        </div>
    </body>
</html>
