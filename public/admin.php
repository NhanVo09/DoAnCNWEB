<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
<<<<<<< HEAD:public/admin.php
    <title>QUẢN LÝ SÁCH</title>
=======
    <title>BOOK</title>
>>>>>>> e9b978fc5b57b8d139e37fd258baa3c41968391a:public/admin.html
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        .mt-9 {
            margin-top: 80px;
        }
        
        .ml-100 {
            margin-left: 100px;
        }
        
        .ml-250 {
            margin-left: 250px;
        }
        
        .carousel-caption h3 {
            color: red;
        }
    </style>
</head>
<?php
include '../partials/nav.php'
?>
    <div class="container ">
        <h1 class="mt-9">QUẢN LÝ SÁCH </h1>


        <div class="card">
            <div class="card-header text-center bg-dark text-white">
                <h3>THÔNG TIN CHI TIẾT</h3>
            </div>
            <div class="card-body">

                <form action="" class="form-horizontal add-form">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="idsach">ID Sách</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="idsach" name="idsach" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="namebook">Tên Sách</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="namebook" name="namebook" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="theloai">Thể Loại</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="theloai" name="theloai" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tacgia">Tác Giả</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tacgia" name="tacgia" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="nxb">Nhà Xuất Bản</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nxb" name="nxb" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="picField">Ảnh </label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="picField" name="picField" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 offset-sm-4">
                            <button type="submit" class="btn btn-dark btn-add" name="" value="">Thêm Sách</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>


        <div class="card mt-4">
            <div class="card-header text-center bg-dark text-white">
                <h3>DANH MỤC SÁCH</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Sách</th>
                            <th>Tên Sách</th>
                            <th>Tác Giả</th>
                            <th>Thể Loại</th>
                            <th>Nhà Xuất Bản</th>
                            <th>Ảnh</th>

                        </tr>
                    </thead>
                    <tbody id="result">
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>


</html>