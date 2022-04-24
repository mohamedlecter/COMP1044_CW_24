<?php
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
                        <h2>Display Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form1" action="" method="post">
                            <input type="text" name="t1" class="form-control" placeholder="ENTER BOOK NAME">
                            <input type="submit" name="submit1" value="SEARCH BOOK" class="btn btn-default">
                        </form>

                        <?php
                        if (isset($_POST["submit1"])) {
                            $res = mysqli_query($link, "select * from book where book_title like('$_POST[t1]%')");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Book Title";
                            echo "</th>";
                            echo "<th>";
                            echo "Author";
                            echo "</th>";
                            echo "<th>";
                            echo "Number of copies";
                            echo "</th>";
                            echo "<th>";
                            echo "Book publication";
                            echo "</th>";
                            echo "<th>";
                            echo "Book Publisher";
                            echo "</th>";
                            echo "<th>";
                            echo "ISBN";
                            echo "</th>";
                            echo "<th>";
                            echo "Copyright Year";
                            echo "</th>";
                            echo "<th>";
                            echo "Added date";
                            echo "</th>";
                            echo "<th>";
                            echo "Status";
                            echo "</th>";
                            echo "<th>";
                            echo "Action";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["book_title"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["author"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["book_copies"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["book_pub"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["publisher_name"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["isbn"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["copyright_year"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["date_added"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["status"];
                                echo "</td>";
                                echo "<td>";
                                echo '<a href="borrowBook.php?id=' . $row['book_id'] . '" class="borrowBtn" title="borrow book"><div class="borrow">Borrow</div></a>';
                                echo '<a href="editBook.php?id=' . $row['book_id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delBook.php?id=' . $row['book_id'] . '" title="Delete Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-trash"></span></a>';
                            }
                            echo "</table>";
                        } else {
                            $res = mysqli_query($link, "select * from book");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Book Title";
                            echo "</th>";
                            echo "<th>";
                            echo "Author";
                            echo "</th>";
                            echo "<th>";
                            echo "Number of copies";
                            echo "</th>";
                            echo "<th>";
                            echo "Book publication";
                            echo "</th>";
                            echo "<th>";
                            echo "Book Publisher";
                            echo "</th>";
                            echo "<th>";
                            echo "ISBN";
                            echo "</th>";
                            echo "<th>";
                            echo "Copyright Year";
                            echo "</th>";
                            echo "<th>";
                            echo "Added date";
                            echo "</th>";
                            echo "<th>";
                            echo "Status";
                            echo "</th>";
                            echo "<th>";
                            echo "Action";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["book_title"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["author"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["book_copies"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["book_pub"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["publisher_name"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["isbn"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["copyright_year"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["date_added"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["status"];
                                echo "</td>";
                                echo "<td>";
                                echo '<a href="borrowBook.php?id=' . $row['book_id'] . '" class="borrowBtn" title="borrow book"><div class="borrow">Borrow</div></a>';
                                echo '<a href="editBook.php?id=' . $row['book_id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delBook.php?id=' . $row['book_id'] . '" title="Delete Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-trash"></span></a>';
                            }
                            echo "</table>";
                        } ?>
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