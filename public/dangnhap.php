<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>ĐĂNG NHẬP</title>
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
include '../partials/check_login'
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 mt-9">

                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>ĐĂNG NHẬP</h3>
                    </div>
                    <div class="card-body">
                        <form id="form-dn" method="post" class="form-horizontal" action="#">


                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="username">Tên đăng nhập</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="haob2014654" />
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="password">Mật khẩu</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="ít nhất 8 kí tự" />
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-5 offset-sm-4">
                                    <button type="submit" class="btn btn-primary" name="signin" value="Sign In">Đăng nhập</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class=""><a href="#">Forgot your password?</a></div>
                </div>
            </div>

        </div>


    </div>

    <script type="text/javascript" src="jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#form-dn").validate({
                rules: {

                    username: {
                        required: true,
                        minlength: 8
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },



                },
                messages: {

                    username: {
                        required: "Bạn chưa nhập tên đăng nhập",
                        minlength: "Tên đăng nhập phải có ít nhất 8 ký tự"
                    },
                    password: {
                        required: "Bạn chưa nhập mật khẩu",
                        minlength: "Mật khẩu phải có ít nhất 8 ký tự"
                    },

                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.siblings("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid")
                },
                unhightlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid")
                }
            })
        })
    </script>
</body>

</html>