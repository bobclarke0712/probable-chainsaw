<?php
include_once "header.php";
$id = $_GET['id'];
$custName = $_GET['name'];
echo '<body>
<div class="row">
    <div class="text-center">
        <div class="col-sm-12"><div class="fa fa-bank">
            ' . ' ' . $custName . '</div>
</div>
</div>
</div>';

$sql = "select 'Condenser' as type
  ,idtblCondenser
  ,tblCondenserName
  ,tblCondenserCustID
  ,tblCondenserManufacturer
  ,tblCondenserTonnage
  ,tblCondenserMfgYear
  ,tblCondenserRefrigerant
  ,tblCondenserModel
  ,tblCondenserSerialNumber
  ,tblCondenserProduct
  ,tblCondenserVoltage
  ,tblCondenserLineSet
  ,tblCondenserLocation
  ,tblCondenserPressureSwitch
  ,tblCondenserCapacitor
  ,tblCondenserContactor
 from fm_bwapps.tblCondenser where tblCondenserCustID = '$id';";



$result = mysqli_query($con, $sql);



$table = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Type</th><th>Manufacturer</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $condenserID = $row['idtblCondenser'];
    $condenserName = $row['tblCondenserName'];
    $condenserManufacturer = $row['tblCondenserManufacturer'];
    $type = $row['type'];
    $table .= "<tr><td><a href='unitDetail.php?id=$custID'>$condenserName</a></td><td>$type</td><td>$condenserManufacturer</td></tr>";

}
$table .= "</tbody></table></div>";
echo $table;
?>
<script>
    $(function () {
        $('#table').DataTable({
            "order": [[1, "Name"]]
        });
    });
</script>



</body>