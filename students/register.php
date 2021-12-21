<?php
    require_once '../config/DB.php';
    $db = new DB();
    
    if (isset($_GET['mat']) && isset($_GET['prog']))  {
        $mat = $_GET['mat'];
        // $programme = $_GET['prog'];
        $programme = $_GET['prog'] == "part-time" ? 'part_time' : $_GET['prog'];
    }

    

    // $sql = "select programme from students where mat_no = ?";
    // $stmt = $db->conn->prepare($sql);
    // $stmt->bind_param('s', strtoupper($mat));
    // $stmt->execute();
    // $stmt->bind_result($programme);
    // $stmt->fetch();
    // $programme = strtolower($programme);


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
                <li class="breadcrumb-item"><a href="tables">Tables</a></li>
                <li class="breadcrumb-item"><a href="student?mat=<?= $mat ?>">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register</li>
              </ol>
            </div>

            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Register Courses</h5>
              </div>
              <div class="card-body">
                <?php $courses = $db->getCourses($programme)->fetch_all(MYSQLI_ASSOC) ?>
                <table class="table">
                    <thead>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Load</th>
                        <th><center>Score</center></th>
                        <th>Grade</th>

                    </thead>
                    <tbody>
                        <?php foreach($courses as $course): ?>
                        <?php extract($course) ?>
                            <form class="_form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                <tr>
                                    <td>PRE<?= $course_code ?></td>
                                    <input type="hidden" name="course_code" value="<?= $course_code ?>">

                                    <td><?= $course_name ?></td>
                                    <input type="hidden" name="course_name" value="<?= $course_name ?>">

                                    <td><center><?= $credit_load ?></center></td>
                                    <input type="hidden" name="course_id" value="<?= $course_id ?>">

                                    <td>
                                        <div class="form-group">
                                            <input class="form-control score" autocomplete="off" type="number" name="score" id="">
                                        </div>
                                    </td>
                                    <div>
                                        <input type="hidden" name="mat" value="<?= $mat; ?>">
                                    </div>
                                    <td>
                                        <div class="form-group">
                                            <input class="form-control grade" autocomplete="off" type="text" name="grade" id="">
                                        </div>
                                    </td>
                                    <td>
                                        <button type="submit" name="submit"  class="_add btn btn-info">Add</button>
                                    </td>
                                </tr>
                            </form>
                        <?php endforeach; ?>    
                            
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
  <script src="../assets/js/forms.js"></script>
  
</body>

</html>