<?php
    require_once '../config/DB.php';
    $db = new DB();
    // $courses = $db->getCourses('masters')->fetch_all(MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($courses);
    // echo "</pre>";
?>

<?php include '../inc/head.php' ?>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          Student Records
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
        <li class="">
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User</p>
            </a>
          </li>
          <li class="">
            <a href="./masters.php">
              <i class="nc-icon nc-hat-3"></i>
              <p>Masters</p>
            </a>
          </li>
          <li>
            <a href="./part-time.php">
              <i class="nc-icon nc-hat-3"></i>
              <p>Part-Time</p>
            </a>
          </li>
          <li class="">
            <a href="./diploma.php">
              <i class="nc-icon nc-hat-3"></i>
              <p>Diploma</p>
            </a>
          </li>
          <li class="active">
            <a href="./broadsheet">
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>Broadsheet</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">

      <!-- Navbar -->
      <?php include '../inc/navbar.php'; ?>
      <!-- End Navbar -->


      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="th-sm text-secondary">Programme</th>
                      <th class="th-sm text-secondary">Year</th>
                      <th class="th-sm text-secondary">Semester</th>
                      
                      <!-- <th class="th-sm"></th> -->
                    </thead>
                    <tbody>
                      <tr>
                        <td>Masters (M.Sc ENG)</td>
                        <td>
                          <a href="result.php?prog=masters&c=1.1" type="button" class="btn btn-small btn-success">
                            <span>Year 1</span>
                          </a>
                        </td>
                        <td>
                          <a href="result.php?prog=masters&c=2.1" type="button" class="btn btn-small btn-success">
                            <span>Year 2</span>
                          </a>
                        </td>
                        
                      </tr>
                      <tr>
                        <td>Diploma</td>
                        <td>
                          <a href="result.php?prog=diploma&c=1.1" type="button" class="btn btn-small btn-success">
                            <span>Year 1</span>
                          </a>
                        </td>
                        <td>
                          <a href="result.php?prog=diploma&c=2.1" type="button" class="btn btn-small btn-success">
                            <span>Year 2</span>
                          </a>
                        </td>
                        
                      </tr>
                      <tr>
                        <td>Part Time</td>
                        <td>
                          <a href="result.php?prog=part_time&c=1.1" type="button" class="btn btn-small btn-success">
                            <span>Year 1</span>
                          </a>
                        </td>
                        <td>
                          <a href="result.php?prog=part_time&c=2.1" type="button" class="btn btn-small btn-success">
                            <span>Year 2</span>
                          </a>
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <?php include '../inc/footer.php' ?>
    </div>
  </div>
  
  <?php include '../inc/scripts.php'; ?>
  
</body>

</html>