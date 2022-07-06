<?php
require_once '../config/DB.php';
$db = new DB();
$conn = $db->conn;

// $userId = $_GET['id'];
$msg = "";
$msgClass = "";

$student;
if (isset($_GET['id'])) {
  $userId = $_GET['id'];
  $stmt = $conn->prepare('select * from students where id = ?');
  $stmt->bind_param('i', $userId);
  $stmt->execute();
  $student = $stmt->get_result()->fetch_assoc();
  extract($student);
}

if (isset($_POST['submit'])) {
  // $db = new DB();
  $oldDb = strtolower(htmlentities($_POST['oldDb']));
  $fullName = $_POST['fullname'];
  $mat = $_POST['mat'];
  $newDb = strtolower($mat);
  $dept = $_POST['dept'];
  $programme = strtolower($_POST['programme']) == 'part-time' ? 'part_time' : strtolower($_POST['programme']);
  $updated_id = (int)$_POST['updated_id'];

  // $level = $_POST['level'];

  if (!empty($fullName) && !empty($mat)) {
    $sql = "UPDATE `students` SET `full_name` = ?, `mat_no` = ?, `programme` = ? WHERE `students`.`id` = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $fullName, $mat, $programme, $updated_id);
    if ($stmt->execute()) {
      $oldDb = "${oldDb}_table";
      $newDb = "${newDb}_table";
      $sql = "RENAME TABLE `students`.`$oldDb` TO `students`.`$newDb`;";
      $conn->query($sql);
      header('Location: ./user.php');
    }
  } else {
    $msg = "Please fill in all fields!";
    $msgClass = "alert-danger";
  }
}

?>


<?php include '../inc/head.php'; ?>

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
      <?php include '../inc/navbar.php' ?>
      <!-- End Navbar -->

      <div class="content">

        <?php if ($msg !== "") : ?>
          <div class="col-md-8">
            <div class="alert <?= $msgClass ?>" role="alert">
              <?= $msg; ?>
            </div>
          </div>
        <?php endif; ?>


        <div class="row">

          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Record</h5>
              </div>
              <div class="card-body">
                <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input name="fullname" value="<?= $full_name ?>" type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Matric No.</label>
                        <input type="text" value="<?= $mat_no ?>" class="form-control" name="mat">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Department</label>
                        <!-- <input type="text" class="form-control" name="dept" > -->
                        <select name="dept" class="form-control" id="exampleFormControlSelect1">
                          <option>PRE</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Programme</label>
                        <!-- <input type="text" class="form-control" name="dept" > -->
                        <select name="programme" class="form-control" id="exampleFormControlSelect2">
                          <option>Masters</option>
                          <option>Diploma</option>
                          <option>Part-Time</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Score</label>
                        <input type="number" name="score" id="score" class="form-control" placeholder="Input Score">
                      </div>
                    </div>

                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Grade</label>
                        <input type="text" id="grade" class="form-control" name="grade">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Courses</label>
                        <select name="course" class="form-control" id="exampleFormControlSelect1">
                          <option>701</option>
                          <option>711</option>
                          <option>721</option>
                          <option>731</option>
                          <option>741</option>
                          <option>751</option>
                        </select>
                        
                      </div>
                    </div>
                  </div> -->
                  <input type="hidden" name="updated_id" value="<?= $userId ?>">
                  <input type="hidden" name="oldDb" value="<?= $mat_no ?>">
                  <div class="_row">
                    <div class="_update ml-auto _mr-auto">
                      <button name="submit" type="submit" class="btn btn-block btn-primary ">Edit Record</button>
                    </div>
                  </div>
                </form>
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

  <script src="../assets/js/grade.js"></script>

</body>

</html>