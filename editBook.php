<?php
include "header.php";

include_once 'connection.php';
if (count($_POST) > 0) {
  mysqli_query($link, "UPDATE book set book_id='" . $_POST['id'] . "', book_title='" . $_POST['book_title'] . "', author='" . $_POST['author'] . " ' WHERE book_id='" . $_POST['id'] . "'");
  $message = "Record Modified Successfully";
}
$result = mysqli_query($link, "SELECT * FROM book WHERE book_id='" . $_GET['id'] . "'");
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
              <h2>Edit Book</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form name="form1" method="post" class="col-lg-6" enctype="multipart/form-data">
                <table class="table table-bordered">
                  <tr>
                    <td>
                      <input type="hidden" name="id" class="form-control"" value=" <?php echo $row['book_id']; ?>">
                      <input type="text" name="id" value="<?php echo $row['book_id']; ?>">
                      <!-- <input type="text" class="form-control" name="id" value="<?php echo $row['member_id']; ?>"> -->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="book_title" class="form-control" value="<?php echo $row['book_title']; ?>">

                      <!-- <input type="text" class="form-control" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>"> -->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="author" class="form-control" value="<?php echo $row['author']; ?>">

                      <!-- <input type="text" class="form-control" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>"> -->
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
  <!-- <form name="frmUser" method="post" action="">
    <div><?php if (isset($message)) {
            echo $message;
          } ?>
    </div>
    Username: <br>
    <input type="hidden" name="id" class="txtField" value="<?php echo $row['book_id']; ?>">
    <input type="text" name="id" value="<?php echo $row['book_id']; ?>">
    <br>
    Book title: <br>
    <input type="text" name="book_title" class="txtField" value="<?php echo $row['book_title']; ?>">
    <br>
    Author:<br>
    <input type="text" name="author" class="txtField" value="<?php echo $row['author']; ?>">
    <br>

    <input type="submit" name="submit" value="Submit" class="buttom">

  </form> -->
</body>

</html>