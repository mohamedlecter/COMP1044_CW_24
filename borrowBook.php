<?php
include "header.php";
include_once 'connection.php';
if (count($_POST) > 0) {
  $book_id = $_GET['id'];
  $member_id = $_POST['member_id'];
  $data_borrow = $_POST["data_borrow"];
  $due_date = $_POST["due_date"];
  // mysqli_query($link, " INSERT INTO book (book_title, author,book_pub ,isbn , copyright_year) VALUES($book_title, $author, $book_pub, $isbn,  $copyright_year)");
  mysqli_query($link, " INSERT INTO borrow (book_id, data_borrow, due_date, member_id) VALUES('$book_id', '$data_borrow', '$due_date', '$member_id')");
  $message = "Record Modified Successfully";
}

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
            <h2>Add borrow book Info</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form name="form1" method="post" class="col-lg-6" enctype="multipart/form-data">
              <table class="table table-bordered">
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="Member ID" name="member_id" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="borrow date in datetime, e.g: 2014-03-20 23:50:00" name="data_borrow" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="due date, e.g: 2014-03-21" name="due_date" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="submit1" class="btn btn-default submit" value="borrow book" style="background-color: blue;color:white">

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