<?php 
    session_start();
    ob_start();

    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";

    
    include "header.php";        
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch($act){   
            case "listsp":
                if(isset($_POST['clickOK']) && ($_POST['clickOK'])){
                    $keyw = $_POST['keyw'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                }else{
                    $keyw = "";
                    $id_danh_muc = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $id_danh_muc);
                include "sanpham/list.php";
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>