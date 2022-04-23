<?php
include "header.php";

include_once 'connection.php';
if (count($_POST) > 0) {
  mysqli_query($link, "UPDATE member set member_id='" . $_POST['id'] . "', gender='" . $_POST['gender'] . "', address='" . $_POST['address'] . "', contact='" . $_POST['contact'] . "', type='" . $_POST['type'] . "', year_level='" . $_POST['year_level'] . "', status='" . $_POST['status'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . " ' WHERE member_id='" . $_POST['id'] . "'");
  $message = "Record Modified Successfully";
}
$result = mysqli_query($link, "SELECT * FROM member WHERE member_id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>


<body>
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
              <h2>Edit Member</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form name="form1" method="post" class="col-lg-6" enctype="multipart/form-data">
                <table class="table table-bordered">
                  <tr>
                    <td>
                      <h5>
                        member id
                      </h5>
                      <input type="text" name="id" value="<?php echo $row['member_id']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        First Name
                      </h5>
                      <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Last Name
                      </h5>
                      <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Gender
                      </h5>
                      <input type="text" name="gender" class="form-control" value="<?php echo $row['gender']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Address
                      </h5>
                      <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Contact Number
                      </h5>
                      <input type="text" name="contact" class="form-control" value="<?php echo $row['contact']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Type
                      </h5>
                      <input type="text" name="type" class="form-control" value="<?php echo $row['type']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Year Level
                      </h5>
                      <input type="text" name="year_level" class="form-control" value="<?php echo $row['year_level']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Status
                      </h5>
                      <input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="submit" name="submit1" class="btn btn-default submit" value="edit member" style="background-color: blue;color:white">
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

</body>

</html>