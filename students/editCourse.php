<?php
    require_once '../config/DB.php';
    $db = new DB();
    
    if (isset($_GET['matno']) && isset($_GET['id']) & isset($_GET['prog']) )  {
        $mat = $_GET['matno'];
        $id = $_GET['id'];
        $programme = $_GET['prog'] == "part-time" ? 'part_time' : $_GET['prog'];
    }

    
    if (isset($_POST['update'])) {
        
        $i = $_POST['id'];
        $m = $_POST['matNo'];
        $p = $_POST['programme'];
        $s = $_POST['score'];
        $g = $_POST['grade'];

        $table = "{$m}_table";
        $sql = "UPDATE `$table` SET `score` = ?, `grade` = ? WHERE `$table`.`id` = ?;";
        $stmt = $db->conn->prepare($sql);
        $stmt->bind_param('isi', $s, $g, $i);
        if ($stmt->execute()) {
            header("Location: student.php?mat=$m&prog=$p");
        }
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
          <li>
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
          <li>
            <a href="./diploma.php">
              <i class="nc-icon nc-hat-3"></i>
              <p>Diploma</p>
            </a>
          </li>
          <li class="active">
            <a href="./broadsheet.php">
              <i class="nc-icon nc-alert-circle-i"></i>
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

            <div >
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Tables</a></li>
                <li class="breadcrumb-item"><a href="">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
              </ol>
            </div>

            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Course</h5>
              </div>
              <div class="card-body">
              <table class="table">
                    <thead>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <!-- <th>Credit Load</th> -->
                        <th>Score</th>
                        <th>Grade</th>

                    </thead>
                    <tbody>
                            <?php $course = $db->fetchCourse($id, $mat, $programme)->fetch_assoc(); ?>
                            <?php extract($course); ?>
                            <form class="_form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                <tr>
                                    <td>PRE<?= $course_code ?></td>
                                    <td><?= $course_name ?></td>
                                    <td>
                                        <div class="form-group">
                                            <input class="form-control score" autocomplete="off" type="number" name="score" value="<?= $score ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input class="form-control grade" autocomplete="off" type="text" name="grade" value="<?= $grade ?>">
                                        </div>
                                    </td>
                                    <div>
                                        <input type="hidden" name="matNo" value="<?= $mat; ?>">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="hidden" name="programme" value="<?= $programme ?>">
                                    </div>
                                    <td>
                                        <button type="submit" name="update"  class="_add btn btn-info">Update</button>
                                    </td>
                                </tr>
                            </form>
                        
                            
                    </tbody>
                </table>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include '../inc/footer.php'; ?>
      </div>
  </div>
  
  <?php include '../inc/scripts.php'; ?>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  <!-- <script src="../assets/js/grade.js"></script> -->
  <!-- <script src="../assets/js/forms.js"></script> -->
  
</body>

</html>