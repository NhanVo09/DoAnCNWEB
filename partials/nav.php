<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../partials/function.php';
?>
<body>
    <div class="header fixed-top">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <?php


            if ( (is_administrator() && (basename($_SERVER['PHP_SELF']) != 'logout.php'))
            || ! (empty($loggedin)) ) {

                echo '
                    <a class="navbar-brand" href="index.php">Logo</a>


                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Thông tin sách</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sinhvien.php">Thông tin sinh viên</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Tài khoản
                        </a>
                            <div class="dropdown-menu bg-dark">
                                <a class="dropdown-item bg-dark text-white" href="dangky.php">Đăng ký</a>
                                <a class="dropdown-item bg-dark text-white" href="logout.php">Thoát</a>';
                        

            } else {
                echo '
                
                    <a class="navbar-brand" href="index.php">Logo</a>
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Tài khoản
                        </a>
                            <div class="dropdown-menu bg-dark">
                                <a class="dropdown-item bg-dark text-white" href="dangky.php">Đăng ký</a>
                                <a class="dropdown-item bg-dark text-white" href="dangnhap.php">Đăng nhập</a>'; 
            }

                            ?>
                        
                    </div>
                </li>
            </ul>


        </nav>

    </div>  