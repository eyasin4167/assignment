<?php 
// -- Header 
include_once 'partial\header.php';
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php 
// -- Sidebar 
include_once 'partial\sidebar.php';
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
<?php 
// -- Navbar 
include_once 'partial\navbar.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact No</th>
                      <th>Blood Group</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Next date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact No</th>
                      <th>Blood Group</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Next date</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Eyasin</td>
                      <td>Dhaka Cantt</td>
                      <td>016******15</td>
                      <td>A+</td>
                      <td>24</td>
                      <td>01-06-2024</td>
                      <td>01-09-2024</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
<?php 
// -- Logout Modal 
include_once 'partial\logoutModal.php';
// -- Footer 
include_once 'partial\footer.php';
?>
</body>
</html>
