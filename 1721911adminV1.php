<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "spms");

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sadia - SPMS</title>
	<link rel="stylesheet" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>

  <div class="wrapper">
      <div class="sidebar">
          <h2>SPMS</h2>
          <ul>
              <li style="background-color: #594f8d;"><a href="admin.php"><i class="fas fa-home"></i>Home</a></li>
              <li><a href="Adminview-studentreportform.php"><i class="fas fa-address-card"></i>Student Report</a></li>
              <li><a href="VC1_report.php"><i class="fas fa-project-diagram"></i>VC1 Report</a></li>
              <li><a href="VC2_report.php"><i class="fas fa-project-diagram"></i>VC2 Report</a></li>
              <li><a href="dept_report.php"><i class="fas fa-project-diagram"></i>Dept Report</a></li>
              <li><a href="school_report.php"><i class="fas fa-project-diagram"></i>School Report</a></li>
              <li><a href="program_report.php"><i class="fas fa-project-diagram"></i>Program Report</a></li>
              <li><a href="enrollmentreport.php"><i class="fas fa-project-diagram"></i>Enrollment Report</a></li>
              <li><a href="course_report.php"><i class="fas fa-project-diagram"></i>Course Report</a></li>
              <li><a href="login.php"><i class="fas fa-map-pin"></i>Log Out</a></li>
          </ul> 
      </div>
  </div>
  <div class="container">
    <h2>Welcome To Dashboard</h2> <hr>
    <div class="card-warp">
    
      <div class="card">
        <h3>Total Student of Computer Science and Engineering: </h3>
        <h4>
          <?php
          $con = mysqli_connect("localhost", "root", "", "spms");
          $sql = '
              SELECT
                COUNT(student.StudentID) AS total
              FROM student 
              INNER JOIN 
                department ON department.DepartmentID = student.DepartmentID
              INNER JOIN 
                school ON school.SchoolID = department.SchoolID
              WHERE school.SchoolName = "School of Computer Science and Engineering"';
          $fire = mysqli_query($con, $sql);

          $result = mysqli_fetch_assoc($fire);
          echo $result['total'];
          ?>
        </h4>
      </div>

      <div class="card">
        <h3>Total number of department in SPMS: </h3>
        <h4>
          <?php
          $con = mysqli_connect("localhost", "root", "", "spms");
          $sql = '
              SELECT
                COUNT(department.DepartmentID) AS total
              FROM department
              WHERE 1';
          $fire = mysqli_query($con, $sql);

          $result = mysqli_fetch_assoc($fire);
          echo $result['total'];
          ?>
        </h4>
      </div>

    </div>


    <!-- start -->

    <div class="card-warp">
    
      <div class="card">
        <h3>Total number of school in SPMS: </h3>
        <h4>
        <?php
          $con = mysqli_connect("localhost", "root", "", "spms");
          $sql = '
              SELECT
                COUNT(school.SchoolID) AS total
              FROM school
              WHERE 1';
          $fire = mysqli_query($con, $sql);

          $result = mysqli_fetch_assoc($fire);
          echo $result['total'];
          ?>
        </h4>
      </div>

      <div class="card">
        <h3>Total number of students in SPMS: </h3>
        <h4>
          <?php
          $con = mysqli_connect("localhost", "root", "", "spms");
          $sql = '
              SELECT
                COUNT(student.StudentID) AS total
              FROM student
              WHERE 1';
          $fire = mysqli_query($con, $sql);

          $result = mysqli_fetch_assoc($fire);
          echo $result['total'];
          ?>
        </h4>
      </div>

    </div>

    <!-- end -->

  </div>
  
</body>

</html>




