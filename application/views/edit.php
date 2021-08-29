<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD APPLICATION-Edit  User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
  </head>
  <body>
<div class="navbar navbar-dark bg-dark">
<div class="container">
<a href="#" class="navbar-brand">CRUD APPLICATION</a>
</div>
</div>

<div class="container" style="padding-top:10px;">
  <h3>Update User</h3>
  <hr>
  <form method="post" name="createUser" action="<?php echo base_url().'index.php/users/edit/'.$user['user_id']; ?>">

  <div class="row">
    <div class="col-md-6">

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo set_value('name',$user['name']); ?>" class="form-control">
        <?php echo form_error('name'); ?>
      </div>


      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo set_value('address',$user['address']); ?>" class="form-control">
          <?php echo form_error('email'); ?>
      </div>




      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo set_value('mobile',$user['mobile']); ?>" class="form-control">
          <?php echo form_error('address'); ?>
      </div><br><br>



      <div class="form-group">
        <button class="btn btn-primary">Update</button>
        <a href="<?php echo base_url().'index.php/users/index'; ?>"  class="btn btn-danger">Cancel</a>
      </div>

    </div>

  </div>
</form>
</div>


  </body>
</html>
