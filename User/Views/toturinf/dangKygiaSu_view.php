
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style type="text/css">
   input {
      margin-bottom: 10px;
   }
</style>
   <div class="text-center">
   <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"> <img src="http://edubox.vn/wp-content/uploads/2018/12/dongho.png" class="img-thumbnail" alt="...">
         <p>Tiết kiệm thời gian</p></div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/money.png" class="img-thumbnail" alt="...">
         <p>Gia sư chất lượng</p> </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/handshake.png" class="img-thumbnail" alt="...">
         <p>Uy tín tuyệt đối</p> </div>
      </div>
      <div> 
   </div>
   <br>
   <br>  

   <form action="" method="post" enctype="multipart/form-data">
   <div class="container">
           <h4><i>Hãy để chúng tôi đồng hành cùng con của bạn!</i></h4>
           <br>
      <div class="col-md-12 col-sm-6 col-xs-12">
        
            
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Tên phụ huynh" name="tenphuhuynh" id=""></div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Địa chỉ" name="diachi" id=""> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Số điện thoại" name="sdtphuhuynh" id=""> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Hiện con em đang học lớp" name="lophoc" id=""> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Lịch học mong muốn" name="lichhoc" id=""> </div>
      </div>

        
      </div> 
      
     
       <button type="submit" name="submit" class="btn btn-primary w-50 container mt-2">Gửi</button>

   </div>

   </div>

</form>
<?php 
      if(isset($thanhcong) && in_array('add_success', $thanhcong)) {
         echo "Thêm mới thành công ";
      }
       ?>
</div>
