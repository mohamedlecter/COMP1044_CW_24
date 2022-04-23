<?php
include "header.php";
include_once 'connection.php';
if (count($_POST) > 0) {
  mysqli_query($link, "UPDATE book set book_id='" . $_POST['id'] . "', status='" . $_POST['status'] . "', isbn='" . $_POST['isbn'] . "', book_pub='" . $_POST['book_pub'] . "', copyright_year='" . $_POST['copyright_year'] . "', date_added='" . $_POST['date_added'] . "', book_copies='" . $_POST['book_copies'] . "', book_title='" . $_POST['book_title'] . "', author='" . $_POST['author'] . " ' WHERE book_id='" . $_POST['id'] . "'");
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
                      <h5>
                        Book id
                      </h5>
                      <input type="text" name="id" value="<?php echo $row['book_id']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Book title
                      </h5>
                      <input type="text" name="book_title" class="form-control" value="<?php echo $row['book_title']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Category id
                      </h5>
                      <input type="text" class="form-control" placeholder="Category id, e.g: 2" name="category" required="" value="<?php echo $row['category_id']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>
                        Author
                      </h5>
                      <input type=" text" name="author" class="form-control" value="<?php echo $row['author']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Number of Book copies</h5>
                      <input type="text" class="form-control" placeholder="Number of copies to be added" name="book_copies" required="" value=" <?php echo $row['book_copies']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Publisher</h5>
                      <input type="text" class="form-control" placeholder="Publisher" name="book_pub" required="" value=" <?php echo $row['book_pub']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>ISBN</h5>
                      <input type="text" class="form-control" placeholder="ISBN" name="isbn" required="" value=" <?php echo $row['isbn']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Copyright Year</h5>
                      <input type="text" class="form-control" placeholder="Copyright Year" name="copyright_year" required="" value=" <?php echo $row['copyright_year']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Added date</h5>
                      <input type="text" class="form-control" placeholder="Added date" name="date_added" required="" value=" <?php echo $row['date_added']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Status</h5>
                      <input type="text" class="form-control" placeholder="Status" name="status" required="" value=" <?php echo $row['status']; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="submit" name="submit1" class="btn btn-default submit" value="edit book" style="background-color: blue;color:white">
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

</body>

</html>