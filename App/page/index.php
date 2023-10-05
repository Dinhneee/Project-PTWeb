<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Web Quan Ly Ca Kieng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script type="text/javascript" src="../js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
            
            
            
        <div class="header">
            <div class="header-2">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown">Menu</button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a claa="test" tabindex="-1" href="freshwater_fish.php">Các giống cá kiểng</a>
                        </li>
                        <li><a tabindex="-1" href="sanpham.php">Các giống cá</a></li>
                        <li><a tabindex="-1" href="sanpham.php">Thức ăn</a></li>
                        <li></li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            Menu<img class="iconmenu" src="../public/image/iconMenu1.png" width="13px" height="10px">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Các giống cá kiểng</a></li>
                            <li><a class="dropdown-item" href="#">Các giống cá</a></li>
                            <li><a class="dropdown-item" href="#">Thức ăn</a></li>
                    </div>
                </div>
                    <div class="name">
                        <p>F I S H</p>
                    </div>
                    <img class="logo" src="../public/image/logo.png" alt="logo" title="Logo FISH" width="55px" height="40px">
            </div>

            <div class="header-3">
                <button><img src="../public/image/iconSearch.png" alt="icon" width="10px" height="9px"></button>
                <input type="text" placeholder="Search">
        
                <div class="login">
                    <button >Login <img  src="../public/image/iconNguoi.png" alt="icon" title="Login" width="20px" height="15px"></button>
                    <button >Buy <img  src="../public/image/iconGiohang.png" alt="icon" title="Buy" width="15px" height="13px"></button>
                    <button class="language"><img src="../public/image/CoNcAnh.png" alt="CNA" title="Language" width="27px" height="15px"></button>
                    <button class="language"><img src="../public/image/CoNcViet.png" alt="CNV" title="language" width="20px" height="15px"></button>
                </div>        
            </div>
        </div>
    </header>
    <br>
    <main>
        <?php 
           include './home.php';
        //    include './contact.php';
        ?>
    </main>
    <footer>
        <p>Hi</p>
    </footer>
</body>
</html>
