<?php
include_once "header.php";
$id = $_GET['id'];
$custName = $_GET['name'];
echo '';
?>

<?php


$sqlCondenser = "select idtblCondenser ,tblCondenserName ,tblCondenserModel ,tblCondenserManufacturer from fm_bwapps.tblCondenser where tblCondenserCustID = '$id';";
$result = mysqli_query($con, $sqlCondenser);
$CondensersTable = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Manufacturer</th><th>Model</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $condenserID = $row['idtblCondenser'];
    $condenserName = $row['tblCondenserName'];
    $condenserManufacturer = $row['tblCondenserManufacturer'];
    $condenserModel = $row['tblCondenserModel'];
    $CondensersTable .= "<tr><td><a href='unitDetail.php?id=$custID'>$condenserName</a></td><td>$condenserManufacturer</td><td>$condenserModel</td></tr>";
}
$CondensersTable .= "</tbody></table></div>";


$sqlHeatPump = "SELECT * FROM fm_bwapps.tblHeatPump where tblHeatPumpCustID = '$id';";
$result = mysqli_query($con, $sqlHeatPump);
$HeatPumpTable = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Manufacturer</th><th>Model</th><th>Serial Number</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $HeatPumpID = $row['idtblHeatPump'];
    $HeatPumpName = $row['tblHeatPumpName'];
    $HeatPumpManufacturer = $row['tblHeatPumpManufacturer'];
    $HeatPumpModel = $row['tblHeatPumpModel'];
    $HeatPumpSerial = $row['tblHeatPumpSerialNumber'];
    $HeatPumpTable .= "<tr><td><a href='unitDetail.php?id=$custID'>$HeatPumpName</a></td><td>$HeatPumpManufacturer</td><td>$HeatPumpModel</td><td>$HeatPumpSerial</td></tr>";
}
$HeatPumpTable .= "</tbody></table></div>";


$sqlGasFurnace  = "SELECT * FROM fm_bwapps.tblGasFurnace where tblGasFurnaceCustID = '$id';";
$result = mysqli_query($con, $sqlGasFurnace);
$GasFurnaceTable = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Manufacturer</th><th>Model</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $GasFurnaceID = $row['idtblGasFurnace'];
    $GasFurnaceName = $row['tblGasFurnaceName'];
    $GasFurnaceManufacturer = $row['tblGasFurnaceManufacturer'];
    $GasFurnaceModel = $row['tblGasFurnaceModel'];
    $GasFurnaceTable .= "<tr><td><a href='unitDetail.php?id=$custID'>$GasFurnaceName</a></td><td>$GasFurnaceManufacturer</td><td>$GasFurnaceModel</td></tr>";
}
$GasFurnaceTable .= "</tbody></table></div>";


$sqlAirHandler = "SELECT * FROM fm_bwapps.tblAirHandler where tblAirHandlerCustID = '$id';";
$result = mysqli_query($con, $sqlAirHandler);
$AirHandlerTable = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Manufacturer</th><th>Model</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $AirHandlerID = $row['idtblAirHandler'];
    $AirHandlerName = $row['tblAirHandlerName'];
    $AirHandlerManufacturer = $row['tblAirHandlerManufacturer'];
    $AirHandlerModel = $row['tblAirHandlerModel'];
    $AirHandlerTable .= "<tr><td><a href='unitDetail.php?id=$custID'>$AirHandlerName</a></td><td>$AirHandlerManufacturer</td><td>$AirHandlerModel</td></tr>";
}
$AirHandlerTable .= "</tbody></table></div>";


$sqlRooftop = "SELECT * FROM fm_bwapps.tblRooftop where tblRooftopCustID = '$id';";
$result = mysqli_query($con, $sqlRooftop);
$RooftopTable = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Manufacturer</th><th>Model</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $RooftopID = $row['idtblRooftop'];
    $RooftopName = $row['tblRooftopName'];
    $RooftopManufacturer = $row['tblRooftopManufacturer'];
    $RooftopModel = $row['tblRooftopModel'];
    $RooftopTable .= "<tr><td><a href='unitDetail.php?id=$custID'>$RooftopName</a></td><td>$RooftopManufacturer</td><td>$RooftopModel</td></tr>";
}
$RooftopTable .= "</tbody></table></div>";

$sqlEvapUnit = "SELECT * FROM fm_bwapps.tblEvapUnit where tblEvapUnitCustID = '$id';";
$result = mysqli_query($con, $sqlEvapUnit);
$EvapUnitTable = "<div class='table-responsive'><table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Manufacturer</th><th>Model</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $EvapUnitID = $row['idtblEvapUnit'];
    $EvapUnitName = $row['tblEvapUnitName'];
    $EvapUnitManufacturer = $row['tblEvapUnitManufacturer'];
    $EvapUnitModel = $row['tblEvapUnitModel'];
    $EvapUnitTable .= "<tr><td><a href='unitDetail.php?id=$custID'>$EvapUnitName</a></td><td>$EvapUnitManufacturer</td><td>$EvapUnitModel</td></tr>";
}
$EvapUnitTable .= "</tbody></table></div>";




?>
<body>
<div class="container-fluid">
<div class="row">
    <div class="text-center">
        <div class="col-sm-12"><div class="fa fa-bank"> <?php echo $custName ?> </div>
        </div>
    </div>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Condensers">Condensers</a></li>
    <li><a data-toggle="tab" href="#HeatPumps">Heat Pumps</a></li>
    <li><a data-toggle="tab" href="#GasFurnaces">Gas Furnaces</a></li>
    <li><a data-toggle="tab" href="#AirHandlers">Air Handlers</a></li>
    <li><a data-toggle="tab" href="#RooftopUnits">Rooftop Units</a></li>
    <li><a data-toggle="tab" href="#EvapCoils">Evap Coils</a></li>
</ul>

<div class="tab-content">
    <div id="Condensers" class="tab-pane fade in active">
        <p><?php echo $CondensersTable; ?></p>
    </div>
    <div id="HeatPumps" class="tab-pane fade">
        <p><?php echo $HeatPumpTable; ?></p>
    </div>
    <div id="GasFurnaces" class="tab-pane fade">
        <p><?php echo $GasFurnaceTable; ?></p>
    </div>
    <div id="AirHandlers" class="tab-pane fade">
        <p><?php echo $AirHandlerTable; ?></p>
    </div>
    <div id="RooftopUnits" class="tab-pane fade">
        <p><?php echo $RooftopTable; ?></p>
    </div>
    <div id="EvapCoils" class="tab-pane fade">
        <p><?php echo $EvapUnitTable; ?></p>
    </div>
</div>

</div>
</body>



<?php include_once "./footer.php"; ?>