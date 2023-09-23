<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng ký</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/1147679ae7.js"></script>
        <style>
            :root{
                --bg2: #3498db;
            }
            *{
                 padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                display: flex;
                width: 100vw;
                height: 100vh;
                background: url(../User/Public/img/bia2.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .container{
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
            }
            form{
                width: 350px;
                height: 400px;
                background: #fff;
                background: transparent;
                color: #fff;
            }
            form h1{
                
                position: relative;
                margin: 5px 0 10px;
                padding-bottom: 12px;
                width: fit-content;
                font-size: 20px;

            }
            form h1::before{
                
                content: "";
                position: absolute;
                display: block;
                width: 100%;
                height: 5px;
                background:var(--bg2);
                bottom: 0;
            }
            form button{
                width: 100%;
                height: 35px;
                border: 2px solid var(--bg2);
                cursor: pointer;
                background: transparent;
                color: #fff;
            }
            .form-field{
                margin-bottom: 30px;
                position: relative;
            }
            .form-field input{
                width: 100%;
                height: 30px;
                padding-left: 30px;
                border: none;
                border-bottom: 2px solid var(--bg2);
                outline: none;
                font-size: 16px;
                background: transparent;
            }
            .form-field input::placeholder{
                color: #fff;
            }
            .col-sm-6 input{
                width: 90%;
                height: 30px;
                padding-left: 30px;
                border: none;
                border-bottom: 2px solid var(--bg2);
                outline: none;
                font-size: 16px;
                background: transparent;
            }
            .col-sm-6 input::placeholder{
                color: #fff;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="">
                <h1>Đăng ký</h1>
                <div class="form-field">
                    <div class="col-sm-6">
                        <input type="text" name ="ho" placeholder="Họ ">
                      </div>
                      <div class="col-sm-6" >
                        <input type="text" name ="ten" placeholder="Tên">
                      </div> <br>
                    
                </div>
                <div class="form-field">
                    <input type="text" name= "gioitinh" placeholder="Giới tính">
                </div>
                <div class="form-field">
                    <input type="text" name="sdt" placeholder="Số điện thoại">
                </div>
                <div class="form-field">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-field">
                    <input type="text" name="diachi" placeholder="Địa chỉ">
                </div>
                <div class="form-field">
                    <input type="text" name="taikhoan" placeholder="Tên đăng nhập">
                </div>
                <div class="form-field">
                    <input type="text" name="matkhau" placeholder="Mật khẩu">
                </div>
               <button type="submit" name="submitt" value="register" style="color: #fff;">Đăng ký</a></button>
              <p style="padding-top: 10px;">Nếu đã có tài khoản? Đăng nhập <a href="?controller=gia-su&action=register" style="color: rgb(48, 216, 228);"> Tại đây </a></p>
                
                
            </form>

        </div>
    </body>
</html>