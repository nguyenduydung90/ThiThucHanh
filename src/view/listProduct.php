<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/menu.css">
</head>
<body>
<div class="container">
    <form action="index.php?page=search" method="post" style="padding-bottom: 10px">
        <input type="text" name="search" placeholder="search">
        <button type="submit" class=" btn btn-primary">Search</button>
    </form>
    <a href="index.php?page=add" class="btn btn-success" >Thêm Sản Phẩm</a>

    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Danh sách sản phẩm</h3>

            </div>
            <table class="table">
                <thead>
                <tr class="filters">
                    <th>STT</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Loại Hàng</th>
                    <th
                    colspan="2">Hành Động</th>
                </tr>
                </thead>
                <tbody>
                <?php if (empty($products)):?>
                <tr>
                    <td>NO DATA</td>
                </tr>
                <?php else:?>
                <?php foreach ($products as $key => $item):?>
                <tr>
                    <td><?php echo ++$key;?></td>
                    <td><?php echo $item->getProductName()?></td>
                    <td><?php echo $item->getProductType()?></td>
                    <td><a href="index.php?page=edit&id=<?php echo $item->getId()?>">Sửa</a></td>
                    <td><a href="index.php?page=delete&id=<?php echo $item->getId()?>">Xóa</a></td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>
