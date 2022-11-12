<?php
$title = 'Phone';
$isActive = "ProductAdmin";
require_once('mvc/views/blocks/header_admin.php');

?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
    <div class="col-md-12 table-responsive">
        <h3>Sửa thông tin Sản Phẩm</h3>
        <div class="panel panel-primary">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="http://localhost/SPhone/ProductAdmin/PostEdit/'..'">
                    <div class="row">
                        <div class="col-md-9 col-12">
                            <div class="form-group">
                                <label for="usr">Tên Sản Phẩm:</label>
                                <input required="true" type="text" class="form-control" id="usr" name="title" value="<?= $data["title"] ?>">
                                <input type="text" name="id" value="<?= $data["id"] ?>" hidden="true">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Nội Dung:</label>
                                <textarea class="form-control" rows="5" name="description" id="description"><?php echo $data["description"]; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail:</label>
                                <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?= $data["thumbnail"] ?>">
                                <img id="thumbnail_img" src="" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="usr">Danh Mục Sản Phẩm:</label>
                                <select class="form-control" name="category_id" id="category_id" required="true">
                                    <option value="">-- Chọn --</option>
                                    <?php
                                    $countCategory = count($data["category"]);
                                    for ($i = 0; $i < $countCategory; $i++) {
                                        if ($data['category'][$i]['id'] == $data["category_id"]) {
                                            echo '<option selected value="' . $data["category"][$i]['id'] . '">' . $data["category"][$i]['name'] . '</option>';
                                        } else echo '<option value="' . $data["category"][$i]['id'] . '">' . $data["category"][$i]['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá:</label>
                                <input required="true" type="number" class="form-control" id="price" name="price" value="<?= $data["price"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="discount">Giảm Giá:</label>
                                <input type="text" class="form-control" id="discount" name="discount" value="<?= $data["discount"] ?>">
                            </div>
                            <button class="btn btn-success">Lưu Sản Phẩm</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once('mvc/views/blocks/footer_admin.php');
?>