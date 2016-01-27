<?php
include_once "header.php";

$idtblCondenser = $_GET['id'];
$idtblCustName = $_GET['custName'];
$sql = "SELECT idtblCondenser, tblCondenserName, tblCondenserCustID, tblCondenserManufacturer, tblCondenserTonnage,
tblCondenserMfgYear, tblCondenserRefrigerant, tblCondenserModel, tblCondenserSerialNumber, tblCondenserProduct,
tblCondenserVoltage, tblCondenserLineSet, tblCondenserLocation, tblCondenserPressureSwitch, tblCondenserCapacitor,
tblCondenserContactor
FROM fm_bwapps.tblCondenser where idtblCondenser =$idtblCondenser;";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $tblCondenserName = $row['tblCondenserName'];
    $tblCondenserCustID = $row['tblCondenserCustID'];
    $tblCondenserManufacturer = $row['tblCondenserManufacturer'];
    $tblCondenserTonnage = $row['tblCondenserTonnage'];
    $tblCondenserMfgYear = $row['tblCondenserMfgYear'];
    $tblCondenserRefrigerant = $row['tblCondenserRefrigerant'];
    $tblCondenserModel = $row['tblCondenserModel'];
    $tblCondenserSerialNumber = $row['tblCondenserSerialNumber'];
    $tblCondenserProduct = $row['tblCondenserProduct'];
    $tblCondenserVoltage = $row['tblCondenserVoltage'];
    $tblCondenserLineSet = $row['tblCondenserLineSet'];
    $tblCondenserLocation = $row['tblCondenserLocation'];
    $tblCondenserPressureSwitch = $row['tblCondenserPressureSwitch'];
    $tblCondenserCapacitor = $row['tblCondenserCapacitor'];
    $tblCondenserContactor = $row['tblCondenserContactor'];
}
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="UpdateCondenser.php" class="form-hoizontal" role="form">
                    <div class="form-group">
                        <label for="tblCondenserName">Name:</label>
                        <input type="text" class="form-control" name="tblCondenserName" placeholder="Enter a Name for Condenser" value="<?php echo $tblCondenserName; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tblCondenserManufacturer">Manufacturer:</label>
                        <input type="text" class="form-control" name="tblCondenserManufacturer" placeholder="Enter Mfg" value="<?php echo $tblCondenserManufacturer; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tonnage:</label>
                        <input type="text" class="form-control" name="tblCondenserTonnage" placeholder="Enter Tonnage" value="<?php echo $tblCondenserTonnage; ?>">
                    </div>
                    <div class="form-group">
                        <label>Mfg Date:</label>
                        <input type="text" class="form-control" name="tblCondenserMfgYear" placeholder="Enter Mfg Date" value="<?php echo $tblCondenserMfgYear; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Refrigerant:</label>
                        <input type="text" class="form-control" name="tblCondenserRefrigerant" placeholder="Enter Refrigerant Type" value="<?php echo $tblCondenserRefrigerant; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Model:</label>
                        <input type="text" class="form-control" name="tblCondenserModel" placeholder="Enter Model" value="<?php echo $tblCondenserModel; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Serial Number:</label>
                        <input type="text" class="form-control" name="tblCondenserSerialNumber" placeholder="Enter Serial Number" value="<?php echo $tblCondenserSerialNumber; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Product:</label>
                        <input type="text" class="form-control" name="tblCondenserProduct" placeholder="Enter Product" value="<?php echo $tblCondenserProduct; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Voltage:</label>
                        <input type="text" class="form-control" name="tblCondenserVoltage" placeholder="Enter Condenser Voltage" value="<?php echo $tblCondenserVoltage; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Line Set:</label>
                        <input type="text" class="form-control" name="tblCondenserLineSet" placeholder="Enter Line Set" value="<?php echo $tblCondenserLineSet; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Location:</label>
                        <input type="text" class="form-control" name="tblCondenserLocation" placeholder="Enter Location" value="<?php echo $tblCondenserLocation; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Pressure Switch:</label>
                        <input type="text" class="form-control" name="tblCondenserPressureSwitch" placeholder="Enter Pressure Switch" value="<?php echo $tblCondenserPressureSwitch; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Capacitor:</label>
                        <input type="text" class="form-control" name="tblCondenserCapacitor" placeholder="Enter Capicitor" value="<?php echo $tblCondenserCapacitor; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contactor:</label>
                        <input type="text" class="form-control" name="tblCondenserContactor" placeholder="Enter Contactor" value="<?php echo $tblCondenserContactor; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd"></label>
                        <input type="hidden" class="form-control" name="idtblCondenser" value="<?php echo $idtblCondenser; ?>">
                        <input type="hidden" class="form-control" name="idtblCustName" value="<?php echo $idtblCustName; ?>">
                    </div>

                    <button type="submit" class="btn btn-success" value="Submit">Update</button>
                </form>
            </div>
        </div>
    </div>

<?php include_once "./footer.php"; ?>