<?php
     require_once '../config/DB.php';
     $db = new DB();
     $programme = 'masters';
     $results = $db->getAllStudents($programme);
     $students = $results->fetch_all(MYSQLI_ASSOC);
    
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
            <a href="./user">
              <i class="nc-icon nc-single-02"></i>
              <p>User</p>
            </a>
          </li>
          <li class="active">
            <a href="./masters">
              <i class="nc-icon nc-hat-3"></i>
              <p>Masters</p>
            </a>
          </li>
          <li>
            <a href="./part-time">
              <i class="nc-icon nc-hat-3"></i>
              <p>Part-Time</p>
            </a>
          </li>
          <li>
            <a href="./diploma">
              <i class="nc-icon nc-hat-3"></i>
              <p>Diploma</p>
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
                <h4 class="card-title">Showing Results for <?= $results->num_rows ?> Students</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="th-sm text-secondary">Full Name</th>
                      <th class="th-sm text-secondary">Matriculation number</th>
                      <th class="th-sm text-secondary">Department</th>
                      <!-- <th class="th-sm">Course</th>
                      <th class="th-sm">Score</th>
                      <th class="th-sm">Grade</th> -->
                      <th class="th-sm"></th>
                    </thead>
                    <tbody>
                        <?php foreach($students as $student): ?>
                          <?php extract($student) ?>
                            <tr>
                              <td><?= $full_name ?></td>
                              <td><?= "<span class='text-info'>PG/</span><a href=student?mat=$mat_no&prog=$programme>$mat_no</a>" ?></td>
                              <td><?= $department ?></td>
                              <!-- <td><?= "PRE$course" ?></td>
                              <td><?= $score ?></td>
                              <td><?= $grade ?></td> -->
                              
                              <td>
                                <a href="edit?id=<?= $id; ?>" type="button" rel="tooltip" class="btn btn-small btn-success">
                                    <!-- <i class="material-icons">edit</i> -->
                                    <span>Edit</span>
                                </a>
                              </td>

                            </tr>
                        <?php endforeach; ?>
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