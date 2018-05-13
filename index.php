<?php   
session_start();
?>

<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ชื่อเว็ป -->
    <title>index</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/circle-img.css">
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="./css/stepbar.css">
    <link rel="stylesheet" href="./css/back.css">
    <link rel="stylesheet" href="./css/footer.css">
    <!-- โหลดลงเคยมาซะ  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    

</head>

<body ng-controller='pageCtrl'>

    <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-navbar text-center fixed-top custom-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://vignette.wikia.nocookie.net/logopedia/images/e/ee/Burger_King_Logo.svg.png/revision/20120422044236" width="30" height="30" alt=""> LOGO
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto p-3" id="myTab">
                    <li class="nav-item p-2">
                        <a class="nav-link " href="#!/home">หน้าแรก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">คำถามพี่พบบ่อย</a>
                    </li>
     

                                <?php if(isset($_SESSION['id'])){  ?>

                    <!-- Login แล้ว -->
                    <li class="nav-item dropdown">
                        <button class="btn btn-sm btn-outline-secondary" type="button">
                            <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                สวัสดีคุณ 

                                <?php echo $_SESSION['name'] ; ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user"></i> กระเป๋าของฉัน 2,100 บาท</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-archive"></i> รายการของฉัน</a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-calendar-alt"></i> ประวัติการทำธุระกรรม</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-undo-alt"></i> การคืนสินค้า</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs"></i> ตั้งค่า</a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-question-circle"></i> รายงานปัญหา</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
                    </li>
                    </button>

                    <?php } else { ?>

                    <!-- ยังไม่ login -->
                    <li class="nav-item mr-2 p-1">
                        <button class="btn btn-sm btn-outline-secondary" type="button">
                            <a class="nav-link " href="#!/login">
                                <i class="fa fa-user"></i> เข้าสู่ระบบ</a>
                        </button>
                    </li>
                    <li class="nav-item p-1">
                        <button class="btn btn-sm btn-outline-secondary" type="button">
                            <a class="nav-link" href="#!/register">
                                <i class="fa fa-user-plus"></i> สมัครสมาชิก</a>
                        </button>
                    </li>
                    <?php } ?>

                </ul>
                </div>
            </div>
    </nav>

    <!-- home -->
    <div ng-view></div>

        <!-- section บริการ -->
      

    <!-- footer -->

    <footer class="text-center" style="background-color: #3e4347; color: white;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-xl-4 text-left">
                    <ul>
                        <li><a href="#" style="text-decoration:none" class="f-14">เงื่อนไขการใช้บริการ </a></li>
                        <li><a href="#" style="text-decoration:none" class="f-14">นโยบายความเป็นส่วนตัว</a> </li>
                        <li><a href="#" style="text-decoration:none" class="f-14">ช่องทางการรับชำระเงิน</a></li>
                        <li><a href="#" style="text-decoration:none" class="f-14">คำถามที่พบบ่อย</a>  </li>
                    



                    </ul>
 
                </div>
            </div>
        </div>

<div class="container">
<hr class="bg-secondary">
        <div class="row">     
        <span class="p-2 f-14">COPY RIGHT @ COPY 2018 Just Buy ALL Right Reserved</span>
            <!-- <div class="social ml-auto">
                <ul>
                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li>
                </ul>
            </div> -->
            </div>
            </div>
    </footer>



    <!-- import angularjs -->
    <script src="./node_modules/angular/angular.min.js"></script>
    <script src="./node_modules/angular-route/angular-route.min.js"></script>
    <!-- jquery -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- framwork -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
  

    <!-- import js -->
    <script type="text/javascript" src="https://repuso.com/widgets/grid.js" async></script>
    <script src="https://repuso.com/widgets/collect.js" async></script>
    <script src="./controller/app.js"></script>
    <script src="./controller/homeCtrl.js"></script>
    <script src="./controller/loginCtrl.js"></script>
    <script src="./controller/navbar.js"></script>




</body>

</html>