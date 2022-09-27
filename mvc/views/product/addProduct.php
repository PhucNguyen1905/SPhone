<?php
$title = 'Phone';
$activeNav = "phone";
require_once('mvc/views/blocks/header_admin.php');

?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
    <div class="col-md-12 table-responsive">
        <h3>Add new phone</h3>
        <a href="http://localhost/BKPhone/ProductAdmin" class="btn btn-outline-primary">Back to Phone list</a>
        <div class="panel panel-primary">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="http://localhost/BKPhone/ProductAdmin/PostAdd">
                    <div class="row">
                        <div class="col-md-9 col-12">
                            <div class="form-group">
                                <label for="usr">Name:</label>
                                <input required="true" type="text" class="form-control" id="usr" name="title">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Description:</label>
                                <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail:</label>
                                <input type="text" class="form-control" id="thumbnail" name="thumbnail">
                                <img id="thumbnail_img" src="" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="usr">Category:</label>
                                <select class="form-control" name="category_id" id="category_id" required="true">
                                    <option value="">-- Select --</option>
                                    <?php
                                    $countCategory = count($data["category"]);
                                    for ($i = 0; $i < $countCategory; $i++) {
                                        echo '<option value="' . $data["category"][$i]['id'] . '">' . $data["category"][$i]['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Base Price:</label>
                                <input required="true" type="number" class="form-control" id="price" name="price">
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount:</label>
                                <input type="text" class="form-control" id="discount" name="discount">
                            </div>
                            <button class="btn btn-success">Add</button>
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