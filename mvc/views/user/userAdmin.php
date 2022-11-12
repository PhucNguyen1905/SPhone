<?php
$title = 'User Management';
$activeNav = "user";
require_once('mvc/views/blocks/header_admin.php');
?>

<!-- ===========Main Content============ -->
<div class="container-fluid px-4">
	<h3 class="fs-4 mb-3">User Management</h3>
	<a href="http://localhost/SPhone/UserAdmin/ViewAdd" class="btn btn-outline-primary">Add New Account</a>
	<div class="row mt-3">

		<div class="col">
			<table id="phoneList" class="table bg-white rounded shadow-sm table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Phone number</th>
						<th>Address</th>
						<th>Role</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data["allUser"] as $user) { ?>
						<tr>
							<td><?php echo $user['id']; ?></td>
							<td><?php echo $user['fullname']; ?></td>
							<td><?php echo $user['email']; ?></td>
							<td><?php echo $user['phone_number']; ?></td>
							<td><?php echo $user['address']; ?></td>
							<td><?php echo $user['role_name']; ?></td>



							<td><a href="<?php echo 'http://localhost/SPhone/UserAdmin/ViewEdit/' . $user['id']; ?>" class="editLink">Edit</a></td>
							<td><a class="delLink" href="<?php echo 'http://localhost/SPhone/UserAdmin/deletedUser/' . $user['id']; ?>" style="color: #ff7782;">Delete</a></td>
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
		$('#phoneList').DataTable();
	});
	jQuery(".delLink").on("click", function(e) {
		e.preventDefault();
		var clicked = jQuery(this);
		var clicked_url = clicked.attr("href");

		var msg = confirm("Are you sure you want to delete this account?");
		if (msg == true) {
			window.location.href = clicked_url;
		}
	});
</script>
<?php
require_once('mvc/views/blocks/footer_admin.php');
?>