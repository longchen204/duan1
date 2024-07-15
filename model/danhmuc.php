<?php
//hiển thị tất cả danh mục ra
function loadall_danhmuc(){
    $sql = 'SELECT * FROM danh_muc ORDER BY id_danh_muc ASC'; // sắp xếp theo cột id_danh_muc
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function load_ten_dm($id_danh_muc){
    if($id_danh_muc > 0){
        $sql = 'SELECT * FROM danh_muc WHERE id_danh_muc = '.$id_danh_muc;
        $ten_danh_muc = pdo_query_one($sql); // lấy ra tên danh mục
        extract($ten_danh_muc);
        return $ten_danh_muc;
    } else {
        return "";
    }
}

?>