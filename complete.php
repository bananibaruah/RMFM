<?php require_once("config.php");
require_once("header.php"); ?>
<div class="container-fluid" style="margin-top:5px">
    <div class="card">
        <div class="card-body">
            <h5 align="center"> Complete Data
            </h5>
            <hr />
            <table class="table table-striped table-bordered" style="font-size:14px">
                <tr class="sticky-top bg-dark text-white">
                    <th>User ID</th>
                    <th>UserName</th>
                    <?php for ($j = 1; $j <= 5; $j++) { ?>
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
                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <td><?php echo $row["COL" . $i]; ?></td>
                    <?php
        }?>
                </tr>
                <?php
    }
}?>
            </table>
        </div>
    </div>
</div>
<?php require_once("footer.php"); ?>