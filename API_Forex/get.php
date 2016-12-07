<?php

$curl = curl_init('https://api-2445581154346.apicast.io/positions?user_key=4f6158ef97874d8d49ead880fc6fe756');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// 
$resultats = curl_exec($curl);
curl_close($curl);

// 
$resultats = json_decode($resultats, true);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To API FOREX</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Forex - Money Push</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MASOUDI -   
                    AMARA - 
                     MOUMEN </br>
                    </div>
                 
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                     <li class="active">
                        <a href="get.php">
                            <i class="material-icons">assignment</i>
                            <span>Get</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="post.php">
                            <i class="material-icons">assignment</i>
                            <span>Post</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="put.php">
                            <i class="material-icons">assignment</i>
                            <span>Put</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="delete.php">
                            <i class="material-icons">assignment</i>
                            <span>Delete</span>
                        </a>
                    </li>


                    
                    
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    Université de la Rochelle
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
     
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Operations</h2>
                <h2> <?php
                    if ($resultats) {
                      echo "Total ".count($resultats);
                    }
                    else {
                      echo "<strong style='color: red'>Error : Server Down</strong>";
                    }
                    ?>
               </h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Liste de toutes les opérations
                            </h2>
                           
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Side</th>
                                        <th>Order Qty</th>
                                        <th>Price</th>
                                        <th>Symbol</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                <?php
                                                echo("ressss  ".$resultats);

                                        foreach ($resultats as $_resultats) {
                                          echo "<tr>";
                                          echo "<td style='text-align: center;'><strong>".$_resultats["Order"]["OrderID"]."</strong></td>";
                                          echo "<td style='text-align: center;'><strong>".$_resultats["Order"]["Side"]."</strong></td>";
                                          echo "<td style='text-align: center;'><strong>".$_resultats["Order"]["OrderQty"]."</strong></td>";
                                          echo "<td style='text-align: center;'><strong>".$_resultats["Order"]["Price"]."</strong></td>";
                                          echo "<td style='text-align: center;'><strong>".$_resultats["Order"]["Symbol"]."</strong></td>";
                                          echo "</tr>";
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
           
        </div>
    </section>

   

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>