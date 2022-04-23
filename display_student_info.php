<?php
include "header.php";
include "connection.php";
?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

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
                        <h2>Display Member info</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="x_content">
                            <form name="form1" action="" method="post">
                                <input type="text" name="t1" class="form-control" placeholder="ENTER MEMBER      ">
                                <input type="submit" name="submit1" value="SEARCH MEMBER" class="btn btn-default">
                            </form>
                            <?php
                            if (isset($_POST["submit1"])) {
                                $res = mysqli_query($link, "select * from member where firstname like('$_POST[t1]%')");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>";
                                echo "firstname";
                                echo "</th>";
                                echo "<th>";
                                echo "Lastname";
                                echo "</th>";
                                echo "<th>";
                                echo "Gender";
                                echo "</th>";
                                echo "<th>";
                                echo "Address";
                                echo "</th>";
                                echo "<th>";
                                echo "Contact";
                                echo "</th>";
                                echo "<th>";
                                echo "Type";
                                echo "</th>";
                                echo "<th>";
                                echo "Year Level";
                                echo "</th>";
                                echo "<th>";
                                echo "Status";
                                echo "</th>";
                                echo "<th>";
                                echo "action";
                                echo "</th>";

                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["firstname"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["lastname"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["gender"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["address"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["contact"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["type"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["year_level"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["status"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo '<a href="editMember.php?id=' . $row['member_id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-pencil"></span></a>';
                                    echo '<a  href="delMember.php?id=' . $row['member_id'] . '" title="Delete Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-trash"></span></a>';
                                }
                                echo "</table>";
                            } else {
                                $res = mysqli_query($link, "select * from member");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>";
                                echo "firstname";
                                echo "</th>";
                                echo "<th>";
                                echo "Lastname";
                                echo "</th>";
                                echo "<th>";
                                echo "Gender";
                                echo "</th>";
                                echo "<th>";
                                echo "Address";
                                echo "</th>";
                                echo "<th>";
                                echo "Contact";
                                echo "</th>";
                                echo "<th>";
                                echo "Type";
                                echo "</th>";
                                echo "<th>";
                                echo "Year Level";
                                echo "</th>";
                                echo "<th>";
                                echo "Status";
                                echo "</th>";
                                echo "<th>";
                                echo "action";
                                echo "</th>";

                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["firstname"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["lastname"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["gender"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["address"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["contact"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["type"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["year_level"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["status"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo '<a href="editMember.php?id=' . $row['member_id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-pencil"></span></a>';
                                    echo '<a  href="delMember.php?id=' . $row['member_id'] . '" title="Delete Record" data-toggle="tooltip" style="margin: 2px 5px;"><span class="fa fa-trash"></span></a>';
                                }
                                echo "</table>";
                            }

                            ?>

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
    <!-- /footer content -->
    <?php
    include "footer.php";
    ?>