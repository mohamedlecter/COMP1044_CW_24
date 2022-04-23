<?php
session_start();
include "header.php";
include "connection.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> </h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row" style="min-height:500px">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Member Info</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
              <table class="table table-bordered">
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="first name" name="fname" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="last name" name="lname" required="">

                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="Gender" name="gender" required="">

                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="Address" name="address" required="">

                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="Contact Number" name="contact" required="">

                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="Type" name="type" required="">

                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="Year level" name="year_level" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" name="status" class="form-control" placeholder="Status">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="submit1" class="btn btn-default submit" value="insert member details" style="background-color: blue;color:white">

                  </td>
                </tr>

              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php
if (count($_POST) > 0) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $type = $_POST['type'];
  $year_level = $_POST['year_level'];
  $status = $_POST['status'];
  // $sql = "INSERT INTO member (firstname, lastname, gender, address, contact, type, year_level )
  //    VALUES ('$fname','$lname','$gender', '$address', '$contact', '$type', '$year_level')";
  mysqli_query($link, "INSERT INTO member (firstname, lastname, gender, address, contact, type, year_level, status )
    VALUES ('$fname','$lname','$gender', '$address', '$contact', '$type', '$year_level', '$status')");
  $message = "Record Modified Successfully";
}

?>

<!-- ?> -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    Library Management System
  </div>
  <div class="clearfix"></div>
</footer>


<?php
include "footer.php"
?>