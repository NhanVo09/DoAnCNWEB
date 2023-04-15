<?php
    include "../bootstrap.php";
    include "../src/information.php";
    
    use CT275\Labs\information;
    $contact = new information($PDO);
    $mssv = isset($_REQUEST['mssv']);
    

	if(!($contact->find($mssv))){
		echo '$mssv';
	}
    $errors = [];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($contact->update($_POST)){
            redirect(BASE_URL_PATH);
        }
        $errors = $contact->getValidationErrors();
    }
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>QUẢN LÝ SÁCH</title>
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
<body>
    <div class="container ">
        <h1 class="mt-9">QUẢN LÝ SINH VIÊN</h1>


        <div class="card">
            <div class="card-header text-center bg-dark text-white">
                <h3>THÔNG TIN CHI TIẾT</h3>
            </div>
            <div class="card-body">

                <form name="frm" id="frm" action="" method ="POST" class="form-horizontal add-form">
                    <div class="form-group row ">
                        <label class="col-sm-4 col-form-label" for="mssv">MSSV</label>
                        <div class="col-sm-5">
                            <p><?= htmlspecialchars($contact->mssv) ?></p>
                        </div>
                    </div>
                    <div class="form-group row <?= isset($errors['hoten']) ? ' has-error' : '' ?>">
                        <label class="col-sm-4 col-form-label" for="hoten">Họ và tên</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="hoten" name="hoten" placeholder="" value="<?= htmlspecialchars($contact->hoten) ?>" />
                            <?php if (isset($errors['hoten'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['hoten']) ?></strong>
									</span>
								<?php endif ?>
                        </div>
                    </div>
                    <div class="form-group row <?= isset($errors['sdt']) ? ' has-error' : '' ?>">
                        <label class="col-sm-4 col-form-label" for="sdt">Số điện thoại</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="" value="<?= htmlspecialchars($contact->sdt) ?>"/>
                            <?php if (isset($errors['sdt'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['sdt']) ?></strong>
									</span>
								<?php endif ?>
                        </div>
                    </div>
                    <div class="form-group row <?= isset($errors['email']) ? ' has-error' : '' ?>">
                        <label class="col-sm-4 col-form-label" for="email">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="email" name="email" placeholder="" value="<?= htmlspecialchars($contact->email) ?>"/>
                            <?php if (isset($errors['email'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['email']) ?></strong>
									</span>
								<?php endif ?>
                        </div>
                    </div>
                    <div class="form-group row <?= isset($errors['makhoa']) ? ' has-error' : '' ?>">
                        <label class="col-sm-4 col-form-label" for="makhoa">Mã Khoa</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="makhoa" name="makhoa" placeholder="" value="<?= htmlspecialchars($contact->makhoa) ?>"/>
                            <?php if (isset($errors['makhoa'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['makhoa']) ?></strong>
									</span>
								<?php endif ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 offset-sm-4">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Sửa sinh viên</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
 </body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="<?= BASE_URL_PATH . "js/wow.min.js" ?>"></script>
<script>
    $(document).ready(function() {
        new WOW().init();
        $('#contacts').DataTable();
    });
</script>
</html>