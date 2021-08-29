<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD Application:Create</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark">
      <div class="container">
        <a href="#" class="navbar-brand">CRUD APPLICATION</a>
      </div>
    </div>
    <div class="container" style="">

<div class="col-6">
<h3>View Users</h3>
<hr>
</div>
<div class="col-6">

  <a href="<?php echo base_url().'index.php/users/create';?>" class="btn btn-primary" >Create </a>
</div>

    </div>
    <div class="row">
      <div class="col-md-8">
        <table class="table table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th width="60">Edit</th>
            <th width="60">Delete</th>
          </tr>
          <?php if (!empty($users)) { foreach($users as $user) {   ?>

            <tr>
              <td><?php echo $user['user_id']; ?></td>
              <td><?php echo $user['name']; ?></td>
              <td><?php echo $user['address']; ?></td>
              <td><?php echo $user['mobile']; ?></td>

<td>
<a href="<?php echo base_url().'index.php/users/edit/'.$user['user_id']; ?>" class="btn btn-primary">Edit</a>
</td>

<td>
<a href="<?php echo base_url().'index.php/users/delete/'.$user['user_id']; ?>" class="btn btn-danger">Delete</a>
</td>
          </tr>
        <?php }  } else {  ?>
        <tr>
          <td colspan="5">Record Not Found..!!</td>
        </tr>
      <?php } ?>

        </table>

      </div>

    </div>
<div>

  </body>
</html>
