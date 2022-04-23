<?php
include "header.php";
include_once 'connection.php';
if (count($_POST) > 0) {
    $book_title = $_POST["book_title"];
    $category_id = $_POST["category"];
    $book_copies = $_POST["book_copies"];
    $author = $_POST["author"];
    $book_pub = $_POST["book_pub"];
    $copyright_year = $_POST["copyright_year"];
    $date_added = $_POST["date_added"];
    $isbn = $_POST["isbn"];
    $status = $_POST["status"];
    // mysqli_query($link, " INSERT INTO book (book_title, author,book_pub ,isbn , copyright_year) VALUES($book_title, $author, $book_pub, $isbn,  $copyright_year)");
    mysqli_query($link, " INSERT INTO book (book_title, author, book_pub ,isbn , copyright_year, category_id, book_copies, date_added, status ) VALUES('$book_title', '$author', '$book_pub', '$isbn',  '$copyright_year', '$category_id', '$book_copies', '$date_added', '$status')");
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
                        <h2>Add Books Info</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form1" method="post" class="col-lg-6" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Book name" name="book_title" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Category id, e.g: 2" name="category" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Book author name" name="author" required="">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Number of copies to be added" name="book_copies" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Book publication name" name="book_pub" required="">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="ISBN e.g: 1-85435-628-3" name="isbn" required="">
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Book publication date" name="copyright_year" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Book addedd date e.g: 2013-12-11 06:59:00" name="date_added" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Status e.g: new, old, damage or archive" name="status" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit1" class="btn btn-default submit" value="insert book details" style="background-color: blue;color:white">

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