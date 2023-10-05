<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/user.css" />
</head>

<body>
    <div class="container">
        <!-- header -->
        <?php include "_header.php";?>
        <!-- menu -->
        <?php include "_menu.php";?>

        <!-- main -->
        <?php 
            // Các biến chung
            $dssp = danhsach_sanpham();
            $dsdm = danhsach_danhmuc();
            $top10 = top10_sanpham_luotxem();
            // Controller
            if(isset($_GET['act']) && $_GET['act'] != ""){
                $act = $_GET['act'];
                switch($act){
                    case "login":{
                        include "login.php";
                        break;
                    }
                    case "detailsp": {
                        if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                            $sanpham = getone_sanpham($_GET['idsp']);
                            $sanpham_lq = sanpham_lienquan($_GET['idsp']);
                            tangluotxem($_GET['idsp']);
                        }
                        include "detail.php";
                        break;
                    }
                    case "searchdm":{
                        if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                            $dssp = sanpham_themdanhmuc($_GET['iddm']);
                        }
                        include "home.php";
                        break;
                    }
                    default: {
                        include "home.php";
                        break;
                    }
                }
            }else{
                include "home.php";
            }
        ?>

        <!-- footer -->
        <?php include "_footer.php";?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>