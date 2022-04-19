<?php require_once("config.php");
require_once("header.php");

$q = $_GET["q"];
if ($q == "") 
{
?>

<div class="container-fluid" style="margin-top:5px">
    <div class="card">
        <div class="card-body">
            <h5 align="center"> L2 Data Updating Please Wait.....
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
            </h5>
            <hr />
            <table class="table table-striped table-bordered" style="font-size:14px">
                <tr class="sticky-top bg-dark text-white">
                    <th>User ID</th>
                    <th>UserName</th>
                    <th>L1 ID</th>
                    <th>L1 UserName</th>
                </tr>
                <?php
    $sql = "SELECT * FROM data_db";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $col1 = $row['COL1'];
            $col2 = $row['COL2'];
            $col3 = $row['COL3'];
            $col4 = $row['COL4'];
?>
                <tr>
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <td><?php echo $row["COL" . $i]; ?></td>
                    <?php
            }?>
                </tr>
                <?php
            $sql1 = "UPDATE data_db SET COL5 = '$col3', COL6 = '$col4' WHERE COL3 = '$col1'";
            $conn->query($sql1);
?>
                <?php
        }
    }?>
            </table>
        </div>
    </div>
</div>
<?php echo "<script> window.open('http://localhost/RMFM/data.php?q=3', '_self');</script>";
}?>
<?php
if ($q == 3) 
{
?>

<div class="container-fluid" style="margin-top:5px">
    <div class="card">
        <div class="card-body">
            <h5 align="center"> L2 Data updating completed <br />L3 Data UPdating Please Wait.....
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
            </h5>
            <hr />
            <table class="table table-striped table-bordered" style="font-size:14px">
                <tr class="sticky-top bg-dark text-white">
                    <th>User ID</th>
                    <th>UserName</th>
                    <?php for ($j = 1; $j <= 2; $j++) { ?>
                    <th>L<?php echo $j; ?> ID</th>
                    <th>L<?php echo $j; ?> UserName</th>
                    <?php
    }?>
                </tr>
                <?php
    $sql = "SELECT * FROM data_db";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $col1 = $row['COL1'];
            $col2 = $row['COL2'];
            $col3 = $row['COL3'];
            $col4 = $row['COL4'];
            $col5 = $row['COL5'];
            $col6 = $row['COL6'];
?>
                <tr>
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <td><?php echo $row["COL" . $i]; ?></td>
                    <?php
            }?>
                </tr>
                <?php
            //COL5 = '$col3', COL6 = '$col4' WHERE COL3 = '$col1'
            $sql1 = "UPDATE data_db SET COL7 = '$col5', COL8 = '$col6' WHERE COL5 = '$col3'";
            $conn->query($sql1);

?>
                <?php
        }
    }?>
            </table>
        </div>
    </div>
</div>
<?php echo "<script> window.open('http://localhost/RMFM/data.php?q=4', '_self');</script>";
}?>
<?php
if ($q == 4) 
{
?>

<div class="container-fluid" style="margin-top:5px">
    <div class="card">
        <div class="card-body">
            <h5 align="center"> L3 Data updating completed <br />L4 Data UPdating Please Wait.....
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
            </h5>
            <hr />
            <table class="table table-striped table-bordered" style="font-size:14px">
                <tr class="sticky-top bg-dark text-white">
                    <th>User ID</th>
                    <th>UserName</th>
                    <?php for ($j = 1; $j <= 3; $j++) { ?>
                    <th>L<?php echo $j; ?> ID</th>
                    <th>L<?php echo $j; ?> UserName</th>
                    <?php
    }?>
                </tr>
                <?php
    $sql = "SELECT * FROM data_db";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $col1 = $row['COL1'];
            $col2 = $row['COL2'];
            $col3 = $row['COL3'];
            $col4 = $row['COL4'];
            $col5 = $row['COL5'];
            $col6 = $row['COL6'];
            $col7 = $row['COL7'];
            $col8 = $row['COL8'];
?>
                <tr>
                    <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <td><?php echo $row["COL" . $i]; ?></td>
                    <?php
            }?>
                </tr>
                <?php
            //COL7 = '$col5', COL8 = '$col6' WHERE COL5 = '$col3'
            $sql1 = "UPDATE data_db SET COL9 = '$col7', COL10 = '$col8' WHERE COL7 = '$col5'";
            $conn->query($sql1);

?>
                <?php
        }
    }?>
            </table>
        </div>
    </div>
</div>
<?php echo "<script> window.open('http://localhost/RMFM/data.php?q=5', '_self');</script>";
}?>
<?php
if ($q == 5) 
{
?>

<div class="container-fluid" style="margin-top:5px">
    <div class="card">
        <div class="card-body">
            <h5 align="center"> L4 Data updating completed <br />L5 Data UPdating Please Wait.....
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
                <div class="spinner-grow spinner-grow-sm"></div>
            </h5>
            <hr />
            <table class="table table-striped table-bordered" style="font-size:14px">
                <tr class="sticky-top bg-dark text-white">
                    <th>User ID</th>
                    <th>UserName</th>
                    <?php for ($j = 1; $j <= 4; $j++) { ?>
                    <th>L<?php echo $j; ?> ID</th>
                    <th>L<?php echo $j; ?> UserName</th>
                    <?php
    }?>
                </tr>
                <?php
    $sql = "SELECT * FROM data_db";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $col1 = $row['COL1'];
            $col2 = $row['COL2'];
            $col3 = $row['COL3'];
            $col4 = $row['COL4'];
            $col5 = $row['COL5'];
            $col6 = $row['COL6'];
            $col7 = $row['COL7'];
            $col8 = $row['COL8'];
            $col9 = $row['COL9'];
            $col10 = $row['COL10'];
?>
                <tr>
                    <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <td><?php echo $row["COL" . $i]; ?></td>
                    <?php
            }?>
                </tr>
                <?php
            //COL9 = '$col7', COL10 = '$col8' WHERE COL7 = '$col5'
            $sql1 = "UPDATE data_db SET COL11 = '$col9', COL12 = '$col10' WHERE COL9 = '$col7'";
            $conn->query($sql1);

?>
                <?php
        }
    }?>
            </table>
        </div>
    </div>
</div>
<?php echo "<script> window.open('http://localhost/RMFM/complete.php', '_self');</script>";
}?>
<?php require_once("footer.php"); ?>