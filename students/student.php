<?php
     require_once '../config/DB.php';
     $db = new DB();


     if (isset($_GET['mat']) && isset($_GET['prog']) ) {
       $mat = $_GET['mat'];
       $programme = $_GET['prog'];
     }
     
      // $conn = $db->conn;
      // $tableName = "{$mat}_table";
      // $sql = "select * from $tableName";
      // $stmt = $conn->prepare($sql);
      // $stmt->execute();
      // $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

      // $db->createStudentProfile($mat);
    
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
          <li>
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
          <li>
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
            <div >
              <ol class="breadcrumb">
                
                <li class="breadcrumb-item"><a href="<?= $programme !== 'part_time' ? "{$programme}.php" : 'part-time.php'  ?>">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Student</li>
              </ol>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Showing Registered Courses for PG/<?= $mat ?></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <?php $results =  $db->getRegisteredCourses($mat); ?>
                    <?php if(!$results->num_rows): ?>
                      <thead class="text-primary">
                        <th class="th-sm">Course Code</th>
                        <th class="th-sm">Course Name</th>
                        <th class="">Year</th>
                        <th class="">Semester</th>
                        <th class="">Grade</th>
                        <th class=""></th>
                        <th class=""></th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>No Registered Courses</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                          <a href="register?mat=<?= $mat; ?>&prog=<?= $programme; ?>" type="button" rel="tooltip" class="btn btn-small btn-warning">
                              <span>Register</span>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    

                      <?php else: ?>
                        <thead>
                        <th class="th-sm">Course Code</th>
                            <th class="th-sm">Course Name</th>
                            <th class="">Year</th>
                            <th class="">Semester</th>
                            <th class="">Grade</th>
                            <th class="">Score</th>
                            <th class=""></th>
                        </thead>
                        <tbody>
                        <?php foreach($results->fetch_all(MYSQLI_ASSOC) as $result): ?>
                            <?php extract($result) ?>
                              <tr>
                                <td><?= "PRE$course_code"; ?></td>
                                <td><?= $course_name ?></td>
                                <td> <center><?= explode('.', $course_id)[0] ?></center> </td>
                                <td> <center><?= explode('.', $course_id)[1] ?></center> </td>
                                <td><center><?= strtoupper($grade) ?></center></td>
                                <td><center><?= $score ?></center></td>
                                <td class="_remark">
                                  <a href="editCourse.php?id=<?= $id; ?>&matno=<?= $mat; ?>&prog=<?= $programme ?>" type="button" rel="tooltip" class="btn btn-small btn-info">
                                    <!-- <i class="material-icons">edit</i> -->
                                    <span>Edit</span>
                                  </a>
                                </td>
                              </tr>
                          <?php endforeach; ?>

                        </tbody>
                    <?php endif; ?>
                      
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