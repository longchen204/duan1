<div class="content-wrapper">
          <!-- Content -->

          <div class="card">
            <h5 class="card-header">DANH SÁCH SẢN PHẨM </h5>
            <div class="table-responsive text-nowrap">
            <form action="index.php?act=listsp" method="POST"style="display:flex; margin:0 0 10px 18px; "> 
                  <div class="navbar-nav align-items-center" style="margin-right: 5px"> 
                    <div class="nav-item d-flex align-items-center">
                        <input type="text" name="keyw" id="tkiem" class="form-control border-0 shadow-none bg-body" placeholder="Tìm kiếm..." 
                        />
                        <input  type="submit" name="clickOK" value="Tìm" style=" height:36px;background: green; color: white; border: 0.5px pink">
                    </div>  
                  </div>
                  <select class="form-control border-0 shadow-none bg-body" name="id_danh_muc" id="" style="width: 300px ;height:36px; ">
                      <option value="0" selected >Tất cả</option>
                      <?php
                          foreach ($listdanhmuc as $danhmuc){
                              extract($danhmuc);
                              echo'<option value="'.$id_danh_muc.'">'.$ten_danh_muc.'</option>';
                          }
                      ?>
                  </select>
                    <input  type="submit" name="clickOK" value="GO" style=" height:36px;background: green; color: white; border: 0.5px pink">
              </form>
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá </th>
                    <th>Màu </th>
                    <th>Hình</th> 
                   <th>Lựa chọn</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php
                  foreach($listsanpham as $sanpham){
                      extract($sanpham);
                      $suasp="index.php?act=suasp&id=".$id_san_pham;
                      $xoasp="index.php?act=xoasp&id=".$id_san_pham;

                      $hinhpath="../upload/".$img;
                      if(is_file($hinhpath)){
                          $hinhpath="<img src= '".$hinhpath."' width='100px' height='100px'>";
                      }else{
                          $hinhpath="NO file img!";
                      }
                      echo' <tr>
                      <td>'.$id_san_pham.'</td>
                      <td>'.$ten_san_pham.'</td>
                      <td>'.$gia.'đ</td>
                      <td>'.$mau.'</td>
                      <td>'.$hinhpath.'</td>

                      <td><a href="'.$suasp.'"><i class="mdi mdi-pencil" style=" height:36px;margin: 15px; color: #f29dab"></i></a> <a href="'.$xoasp.'"> <i class="mdi mdi-delete" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" style="color: #f29dab"></i> </a></td>
                      
                      </tr>';
                  }
                  ?>
          
                </tbody>
              </table>
              <div class="row mb10 ">
                <a href="?act=addsp"> <input class="mr20" type="button" value="THÊM SẢN PHẨM"style=" height:36px;background: green; color: white; border: 0.5px pink;margin: 15px"></a>
            </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
       

          <div class="content-backdrop fade"></div>
        </div>