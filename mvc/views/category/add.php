<?php
$title = 'Add';
$activeNav = 'category';
require_once('mvc/views/blocks/header_admin.php');
?>

<!-- MAIN SECTION -->
<main>
    <h4>Add New Category</h4>
    <a href="http://localhost/SPhone/CategoryAdmin" class="btn btn-outline-primary">Back to Category list</a>
    <form class="addForm" method="POST" action="http://localhost/SPhone/CategoryAdmin/PostAdd">
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" require class="form-control" name="name" placeholder="New Category">
        </div>
        <button class="btn btn-primary mt-2">Add</button>

    </form>
</main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</script>
<script src="public/js/admin_index.js"></script>
</body>

</html>