<?php include_once('templates/header.php'); ?>
<body>
<?php include_once('templates/navbar.php'); ?>
<!-- Start Main Body -->
<div class="main-body">
 <div class="container">
  <div class="row">
    <div class="responsive-table m-auto">
      <h2 class="text-center">Categories List</h2>

      <table class="table-bordered">
       <thead class="text-center">
         <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>created at</th>
          <th>updated at</th>
          <th>option</th>
        </tr>
       </thead>
        <tbody class="text-center">

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="" class="btn btn-success custom-btn"><i class="fa fa-edit"></i>Edit</a>
                <a href="" class="btn btn-danger custom-btn"><i class="fa fa-close"></i>Delete</a>
              </td>
            </tr>

            <div class="alert alert-info">there is no categories</div>

        </tbody>
      </table>
    </div>
   </div>
 </div>
</div>
<!-- End Main Body -->
<?php require_once('templates/footer.php');
