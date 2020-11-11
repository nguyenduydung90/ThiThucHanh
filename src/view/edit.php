<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/add.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form_main">
                <h4 class="heading"><strong>Thêm Sản Phẩm </strong><span></span></h4>
                <div class="form">
                    <form  method="post" id="contactFrm" name="contactFrm">
                        <h3>Tên Sản Phẩm:</h3><input type="text"   value="<?php echo $products->getProductName()?>" name="productName" class="txt">
                        <h3>Loại Hàng:</h3><input type="text"  value="<?php echo $products->getProductType()?>" name="productType" class="txt">
                        <h3>Giá:</h3><input type="text"   value="<?php echo $products->getPriceEach()?>" name="priceEach" class="txt">
                        <h3>Số lượng:</h3><input type="text"   value="<?php echo $products->getQuantity()?>" name="quantity" class="txt">
                        <h3>Mô tả:</h3><input type="text"   value="<?php echo $products->getStatus()?>" name="status" class="txt">


                        <input type="submit" value="Sửa Sản Phẩm" name="submit" class="txt2">
                    </form>
                </div>
            </div>
        </div
    </div>
</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>
