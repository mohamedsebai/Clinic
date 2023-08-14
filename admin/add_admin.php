<?php require_once('templates/header.php'); ?>
<body>
<?php require_once('templates/navbar.php'); ?>

<!-- Start Main Body -->
  <div class="main-body">
   <div class="container">
    <div class="row">
      <div class="form-box">
        <h2 class="text-center">Add New Admin</h2>

       <form action="" method="POST" enctype="multipart/form-data">
         <div class="form-group">
           <input class="form-control" type="text" name="fullname" placeholder="enter fullname">

         </div>
         <div class="form-group">
           <input class="form-control" type="email" name="email" placeholder="enter email">

         </div>
         <div class="form-group">
           <input class="form-control" type="text" name="password" placeholder="enter password">

         </div>
         <div class="form-group">
           <select class="form-control" name="gender">
             <option value="male">male</option>
             <option value="female">female</option>
           </select>
         </div>
         <div class="form-group">
           <select class="form-control" name="country">
             <option value="egypt">Egypt</option>
             <option value="england">England</option>
             <option value="spain">spain</option>
           </select>
         </div>
         <div class="form-group">
           <input class="form-control" type="file" name="profile_img">
         </div>
         <input type="submit" class="btn btn-primary" value="add admin">

        </form>
       </div>
      </div>
    </div>
  </div>
<!-- End Main Body -->
<?php require_once('templates/footer.php'); ?>
