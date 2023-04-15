<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>ĐĂNG KÝ</title>
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

include '../partials/nav.php';

if (isset($_SESSION['username'])) {
	unset($_SESSION['username']);
}
?>

    <div class="container">

        <div class="row">
            <div class="col-sm-8 offset-sm-2 mt-9">

                <div class="card ">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>FORM ĐĂNG KÝ TÀI KHOẢN SINH VIÊN</h3>
                    </div>
                    <div class="card-body">
                        <form id="form-dk" method="post" class="form-horizontal" action="#">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="name">Họ Tên</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Huỳnh Hảo" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="mssv">Mã Số Sinh Viên</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="mssv" name="mssv" placeholder="B2014654" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="username">Tên đăng nhập</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="haob2014654" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="email">Email</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="haob2014654@student.ctu.edu.vn" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="password">Mật khẩu</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="ít nhất 8 kí tự" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="confirm_password">Nhập lại mật khẩu</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" />
                                </div>
                            </div>

                            <div class="form-group form-check">
                                <div class="col-sm-5 offset-sm-4">
                                    <input class="form-check-input" type="checkbox" id="agree" name="agree" value="agree" />
                                    <label class="form-check-label" for="agree">Đồng ý các điều khoản của chúng tôi</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-4">
                                    <button type="submit" class="btn btn-dark" name="signup" value="Sign up">Đăng ký</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script type="text/javascript" src="jquery.validate.js"></script>
    <script type="text/javascript">
        $.validator.setDefaults({
            submitHandler: function() {
                alert("submitted!");
            }
        });
        $(document).ready(function() {
            $("#formdk").validate({
                rules: {
                    name: "required",
                    mssv: "required",
                    username: {
                        required: true,
                        minlength: 8
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    confirm_password: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: "required"
                },
                messages: {
                    name: "Bạn chưa nhập họ tên ",
                    mssv: "Bạn chưa nhập mssv",
                    username: {
                        required: "Bạn chưa nhập tên đăng nhập",
                        minlength: "Tên đăng nhập phải có ít nhất 8 ký tự"
                    },
                    password: {
                        required: "Bạn chưa nhập mật khẩu",
                        minlength: "Mật khẩu phải có ít nhất 8 ký tự"
                    },
                    confirm_password: {
                        required: "Bạn chưa nhập lại mật khẩu",
                        equalTo: "Mật khẩu không trùng khớp với mật khẩu đã nhập ",
                        minlength: "Mật khẩu phải có ít nhất 8 ký tự"

                    },
                    email: "Bạn chưa nhập email",

                    agree: "Bạn phải đồng ý các điều khoản"
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