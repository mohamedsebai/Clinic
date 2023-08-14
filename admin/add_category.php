<?php require_once('templates/header.php'); ?>
<body>
<?php require_once('templates/navbar.php'); ?>
<!-- Start Main Body -->
  <div class="main-body">
   <div class="container">
    <div class="row">
      <div class="form-box">
        <h2 class="text-center">Add New Category</h2>

        <form action="" method="POST">
          <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Category Name">

          </div>
          <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" type="text" name="description" placeholder="Category description"></textarea>

          </div>
          <input type="submit" class="btn btn-primary" value="add category">
         </form>
       </div>
      </div>
    </div>
  </div>
<!-- End Main Body -->
<?php require_once('templates/footer.php');
