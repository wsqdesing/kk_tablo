<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Document</title>
</head>
<body class="bg-dark">
    <?php
        require_once "lib/db.php";
        require_once "lib/functions.php";
        $category_list= $db->query("SELECT * from category", PDO::FETCH_OBJ)->fetchAll();
    ?>
    <div class="container">
        <div class="row p-4"></div>
        <div class="row">
            <div class="col-md-6 card card-body bg-light">
                <h4 class="text-center">Kategori Ekleme</h4>
                <hr>
                <form action="lib/category_db.php" method="post">
                    <div class="form-group">
                        <label>Kategori Adı</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Varsa Üst Kategori</label>
                        <select name="parent_id" class="form-control">
                            <option selected value="0">Yok</option>
                            <?php foreach ($category_list as $category) { ?>
                                <option value="<?php echo $category->id; ?>">
                                    <?php echo $category->title; ?>
                                </option>
                         <?php  } ?>
                        </select>
                    </div>
                    <button type="submit" name="ekle" class="btn btn-primary btn-sm">Kaydet</button>
                    <button type="reset" class="btn btn-danger btn-sm">İptal</button>
                </form>
                
                <h4 class="text-center">Kategori Silme</h4>
                <hr>
                <form action="lib/category_db.php" method="post">
                    <div class="form-group">
                        <label>Kategori Adı</label>
                        <select name="parent_id" class="form-control">
                            <option selected value="0">Yok</option>
                            <?php foreach ($category_list as $category) { ?>
                                <option value="<?php echo $category->id; ?>">
                                    <?php echo $category->title; ?>
                                </option>
                         <?php  } ?>
                        </select>
                    </div>
                    <button type="submit" name="sil" class="btn btn-warning btn-sm">Sil</button>
                    <button type="reset" class="btn btn-danger btn-sm">İptal</button>
                </form>

                <h4 class="text-center">Kategori Güncelleme</h4>
                <hr>
                <form action="lib/category_db.php" method="post">
                <div class="form-group">
                        <label>Kategori</label>
                        <select name="old_title" class="form-control">
                            <option selected value="0">Yok</option>
                            <?php foreach ($category_list as $category) { ?>
                                <option value="<?php echo $category->id; ?>">
                                    <?php echo $category->title; ?>
                                </option>
                         <?php  } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Yeni Kategori Adı</label>
                        <input type="text" class="form-control" name="new_title">
                    </div>
                 
                    <button type="submit" name="guncelle" class="btn btn-success btn-sm">Güncelle</button>
                    <button type="reset" class="btn btn-danger btn-sm">İptal</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="col-md-11 card card-body bg-light">
                    <h4 class="text-center">Kategori Listesi</h4>
                    <hr>
                    <?php drawElements(buildTree($category_list)); ?>
                </div>
            </div>
            
        </div>
    
    </div>
    .
</body>
</html>