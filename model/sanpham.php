<?php 
//hiển thị 9 sản phẩm mới nhất
function loadall_sanpham_home(){
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id_san_pham DESC LIMIT 0,9"; //Sắp xếp từ dưới lên
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($keyw = "", $id_danh_muc = 0){
    $sql = "SELECT * FROM san_pham WHERE 1";
    if($keyw != ""){
        $sql .= " AND ten_san_pham LIKE '%".$keyw."%'";
    }
    if($id_danh_muc > 0){
        $sql .= " AND id_danh_muc = '".$id_danh_muc."'";
    }
    $sql .= " ORDER BY id_san_pham DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// 
function loadone_sanpham($id_san_pham){
    $sql = "SELECT * FROM san_pham WHERE id_san_pham = $id_san_pham";
    $result = pdo_query_one($sql);
    return $result;
}


function insert_sanpham($ten_san_pham,  $img,$gia,  $mau,$mo_ta_sp, $id_danh_muc){
    $sql= " INSERT INTO `san_pham`(`ten_san_pham`,`img`, `gia`,`mau`,  `mo_ta_sp`,`id_danh_muc`) VALUES ('$ten_san_pham', '$img','$gia','$mau', '$mo_ta_sp', '$id_danh_muc');";
    pdo_execute($sql);
}

function delete_sanpham($id_san_pham){
    $sql="delete from san_pham where id_san_pham=".$id_san_pham;
    pdo_execute($sql);
}

function update_sanpham($id_san_pham,$id_danh_muc,$ten_san_pham,$gia,$mau,$mo_ta_sp, $img){
    if($img!=""){
        $sql=  "UPDATE `san_pham` SET `name` = '{$ten_san_pham}', `gia` = '{$gia}',`mau` = '{$mau}', `mo_ta_sp` = '{$mo_ta_sp}',`img` = '{$img}', `id_danh_muc` = '{$id_danh_muc}' WHERE `san_pham`.`id_san_pham` = $id_san_pham";
    }else{
        $sql=  "UPDATE `san_pham` SET `name` = '{$ten_san_pham}', `gia` = '{$gia}',  `mau` = '{$mau}',  `mo_ta_sp` = '{$mo_ta_sp}', `id_danh_muc` = '{$id_danh_muc}' WHERE `san_pham`.`id_san_pham` = $id_san_pham";
    }
    pdo_execute($sql);
}