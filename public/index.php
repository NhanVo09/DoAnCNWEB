<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Trang Chủ</title>
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
        <form class="form-inline mt-9" action="timkiem.html">
            <input class="form-control mr-sm-2" type="text" placeholder="tìm kiếm sách tại đây">
            <button class="btn btn-success" type="submit">Search</button>
        </form>


        <div id="myCarousel" class="carousel slide mt-5" data-ride="carousel" style="height: 500px;">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner ml-100">
                <div class="item active row">
                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/5e/18/24/2a6154ba08df6ce6161c13f4303fa19e.jpg.webp" alt="" style="height:500px; width: 50%;" class="col-2">
                    <div class="carousel-caption col-4 ml-250 text-dark">
                        <h3>CÂY CAM NGỌT CỦA TÔI</h3>
                        <p>Những câu chuyện tuổi thơ luôn biết cách lấy đi nước mắt của người đọc hay đẩy cảm xúc lên cao trào bằng những hồi tưởng về thời thơ ấu đầy kỉ niệm. Cây Cam Ngọt Của Tôi của tác giả Jose Mauro là một cuốn sách như vậy. Cùng tìm
                            về thế giới tuổi thơ, lắng đọng với câu chuyện của chú bé Zeze bất hạnh nhưng vô cùng đáng yêu và giữ lại trong mình những bài học đáng quý về cuộc sống.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../img/sach2.jpg" alt="" style="height:500px; width: 50%;" class="col-2">
                    <div class="carousel-caption col-4 ml-250 text-dark">
                        <h3>GHI CHÉP PHÁP Y - NHỮNG CÁI CHẾT BÍ ẨN</h3>
                        <p>Có lẽ câu “Người chết không biết nói” sẽ không còn mấy hiệu nghiệm khi đứng trước một bác sĩ pháp y. Lời khai nhân chứng có thể giả nhưng bằng chứng thì không. Một khi hung thủ phạm tội thì mọi dấu vết sẽ được lưu lại.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../img/sach3.jpg" alt="" style="height:500px; width: 50%;" class="col-2">
                    <div class="carousel-caption col-4 ml-250 text-dark">
                        <h3>CÀNG BÌNH TĨNH CÀNG HẠNH PHÚC</h3>
                        <p>Càng bình tĩnh càng hạnh phúc, đây không phải là cuốn sách đầu tiên của Vãn Tình mà tôi đọc nhưng đây là cuốn sách đầu tiên của Vãn Tình được tôi mua về nhà. Nghe có vẻ khó hiểu nhỉ? Sự thật là, những cuốn sách khác của Vãn Tình
                            được tôi “đọc” dưới dạng sách nói trên Youtube. Chúng cũng là những cuốn sách đầu tiên dẫn dắt tôi tìm được niềm vui với sách. Thật trân quý biết bao!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control " href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left "></span>
                <span class="sr-only ">Previous</span>
            </a>
            <a class="right carousel-control " href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right "></span>
                <span class="sr-only ">Next</span>
            </a>
        </div>

        <div class="row mt-5">

            <div class="col l-3 m-6 c-12">
                <div class="box">

                    <div class="box-item">
                       <a href ="#"> <img src="../img/sach1.jpg"> </a>
                        <h3 class="namebook">Cây Cam Ngọt Của Tôi</h3>
                        <!-- Sao -->
                        <div>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                    </div>
                    </a>

                    <div class="tacgia ">
                        <span>José Mauro de Vasconcelos</span>
                    </div>
                    <div class="theloai">
                        <span>Thể Loại: </span>
                        <span>Tâm Lí</span>
                    </div>

                    <div class="btn-xemthongtin">

                        <i>Xem Chi Tiết</i>
                    </div>
                </div>
            </div>

            <div class="col l-3 m-6 c-12">
                <div class="box">

                    <div class="box-item">
                        <img src="../img/sach2.jpg">
                        <h3 class="namebook">Ghi Chép Pháp Y- Những cái Chết Bí Ẩn</h3>
                        <!-- Sao -->
                        <div>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                    </div>
                    </a>

                    <div class="tacgia">
                        <span>Lưu Hiểu Huy</span>
                    </div>
                    <div class="theloai">
                        <span>Thể Loại: </span>
                        <span>Trinh Thám</span>
                    </div>

                    <div class="btn-xemthongtin">

                        <i>Xem Chi Tiết</i>
                    </div>
                </div>
            </div>

            <div class="col l-3 m-6 c-12">
                <div class="box">

                    <div class="box-item">
                        <img src="../img/sach3.jpg">
                        <h3 class="namebook">Càng Bình Tĩnh Càng Hạnh Phúc</h3>
                        <!-- Sao -->
                        <div>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                    </div>
                    </a>

                    <div class="tacgia">
                        <span>Vãn Tình</span>
                    </div>
                    <div class="theloai">
                        <span>Thể Loại: </span>
                        <span>Tình cảm</span>
                    </div>

                    <div class="btn-xemthongtin">

                        <i>Xem Chi Tiết</i>
                    </div>
                </div>
            </div>

            
        </div>

    </div>


</body>

</html>