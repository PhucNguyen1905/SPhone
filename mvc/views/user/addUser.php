<?php
$title = 'Add account';
$activeNav = "user";
require_once('mvc/views/blocks/header_admin.php');
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Add account</h3>
		<a href="http://localhost/BKPhone/UserAdmin" class="btn btn-outline-primary">Back to User list</a>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h5 style="color: red;"></h5>
			</div>
			<div class="panel-body">
				<form method="post" action="http://localhost/BKPhone/UserAdmin/PostAdd/">
					<div class="form-group">
						<label for="usr"> Name:</label>
						<input required="true" type="text" class="form-control" id="usr" name="fullname">
						<input type="text" name="id" hidden="true">
					</div>
					<div class="form-group">
						<label for="usr">Role:</label>
						<select class="form-control" name="role_id" id="role_id" required="true">
							<option value="">-- Select --</option>
							<?php
							$countRole = count($data["role"]);
							for ($i = 0; $i < $countRole; $i++) {
								echo '<option value="' . $data["role"][$i]['id'] . '">' . $data["role"][$i]['name'] . '</option>';
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="phone_number">Phone:</label>
						<input required="true" type="tel" class="form-control" id="phone_number" name="phone_number">
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<input required="true" type="text" class="form-control" id="address" name="address">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input required="true" type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
require_once('mvc/views/blocks/footer_admin.php');
?>