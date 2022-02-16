<?php
    require_once '../config/DB.php';
    $db =  new DB();
    $conn = $db->conn;

    if (isset($_GET['prog']) && isset($_GET['c'])) {
      extract($_GET);
      
      if ($c < 2) {
        $sql = "SELECT * FROM {$prog}_courses WHERE course_id > 1 AND course_id < 2 ORDER BY course_id ASC";
        $year = 1;
      } elseif ($c > 2) {
        $sql = "SELECT * FROM {$prog}_courses WHERE course_id > 2 ORDER BY course_id ASC" ;
        $year = 2;
      }
      $courses = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
      
    } else {
        header('location: ./user'); 
    }

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
                
                <li class="breadcrumb-item"><a href="./broadsheet.php">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $prog == 'part_time' ? 'Part Time' : ucfirst($prog); ?></li>
              </ol>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Showing All Students for <?= $prog == 'part_time' ? 'Part Time' : ucwords($prog); ?><?= " (Year $year)" ?></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                        <th class="th-sm text-secondary">Full Name</th>
                        <th class="th-sm  text-secondary">Mat No</th>
                        
                        <?php foreach($courses as $course): ?>
                            <?php extract($course) ?>
                            <th class="th-sm text-secondary">PRE<?= $course_code; ?></th>
                        <?php endforeach; ?>
                        
                    </thead>
                    <?php ?>
                    <tbody>
                      <?php $students = $db->getAllStudents($prog)->fetch_all(MYSQLI_ASSOC) ?>
                      <?php foreach($students as $student): ?>
                        <?php extract($student) ?>
                        <tr>
                          <td><?= $full_name ?></td>
                          <td><?= $mat_no ?></td>
                          <?php 
                            $table_name = "{$mat_no}_table";
                            if ($c < 2) {
                              $nsql = "SELECT * FROM $table_name WHERE course_id > 1 AND course_id < 2 ORDER BY course_id ASC";
                            } elseif ($c > 2) {
                              $nsql = "SELECT * FROM $table_name WHERE course_id > 2 ORDER BY course_id ASC" ;
                            }
                            
                            $stmt = $conn->prepare($nsql);
                            $stmt->execute();
                            $nresults =  $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                            foreach($nresults as $nresult) {
                              extract($nresult);
                              $grade =  strtoupper($grade);
                              echo "<td><center>{$grade}</center></td>";
                          }
                          ?>
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