<?php
     require_once '../config/DB.php';
     $db = new DB();
     $programme = 'diploma';
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
          
          <?php include '../inc/nav_links.php' ?>
          
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
                <h4 class="card-title">Showing Results for <?= $results->num_rows ?> Student(s)</h4>
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
                              <td><?= "<span class='text-info'>PG/</span><a href=student.php?mat=$mat_no&prog=$programme>$mat_no</a>" ?></td>
                              <td><?= $department ?></td>
                              <!-- <td><?= "PRE$course" ?></td>
                              <td><?= $score ?></td>
                              <td><?= $grade ?></td> -->
                              
                              <td>
                                <a href="edit.php?id=<?= $id; ?>" type="button" rel="tooltip" class="btn btn-small btn-success">
                                    <!-- <i class="material-icons">edit</i> -->
                                    <span>Edit</span>
                                </a>
                              </td>
                              <td>
                                <a href="delete.php?id=<?= $id; ?>&p=<?= basename($_SERVER['PHP_SELF']) ?>" type="button" rel="tooltip" class="btn btn-small btn-danger">
                                    <!-- <i class="material-icons">edit</i> -->
                                    <span>Delete</span>
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