<?php
$title = 'Quản Lý Danh Mục Sản Phẩm';
$activeNav = "category";
require_once('mvc/views/blocks/header_admin.php');
?>


<div class="container-fluid px-4">
	<h3 class="fs-4 mb-3">Category Management</h3>
	<p class="d-none" id="deleteSuccess"><?= $data["deleteSuccess"] ?></p>
	<a href="http://localhost/BKPhone/CategoryAdmin/Add" class="btn btn-outline-primary">Add New Brand</a>
	<div class="row mt-3">
		<div class="col">
			<table id="brandList" class="table bg-white rounded shadow-sm  table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Brand Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $countCategory = count($data["category"]);
					for ($i = 0; $i < $countCategory; $i++) { ?>
						<tr>
							<td><?php echo $i + 1; ?></td>
							<td><?php echo  $data["category"][$i]['name']; ?></td>
							<td><a href="<?php echo 'http://localhost/BKPhone/CategoryAdmin/ViewEdit/' . $data["category"][$i]["id"]; ?>" class="editLink">Edit</a></td>
							<td><a href="<?php echo 'http://localhost/BKPhone/CategoryAdmin/Delete/' . $data["category"][$i]["id"]; ?>" class="delLink" style="color: #ff7782;">Delete</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- ===========Main Content============ -->
</div>
</div>
<!-- ===========Page Content============ -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
		$('#brandList').DataTable();
	});

	jQuery(".delLink").on("click", function(e) {
		e.preventDefault();
		var clicked = jQuery(this);
		var clicked_url = clicked.attr("href");

		var msg = confirm("Are you sure you want to delete this brand?");
		if (msg == true) {
			window.location.href = clicked_url;
		}
	});
</script>
<script type="text/javascript">
	if (deleteSuccess == 1) {
		alert("Xóa thất bại!!! Vui lòng xóa hết sản phẩm của danh mục!!!")
	}
</script>
<?php
require_once('mvc/views/blocks/footer_admin.php');
?>