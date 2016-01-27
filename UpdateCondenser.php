<?php
include_once "header.php";
session_start();
$custName = $_GET['idtblCustName'];
$idtblCondenser = $_GET['idtblCondenser'];
$tblCondenserName = $_GET['tblCondenserName'];
$tblCondenserCustID = $_GET['tblCondenserCustID'];
$tblCondenserManufacturer = $_GET['tblCondenserManufacturer'];
$tblCondenserTonnage = $_GET['tblCondenserTonnage'];
$tblCondenserMfgYear = $_GET['tblCondenserMfgYear'];
$tblCondenserRefrigerant = $_GET['tblCondenserRefrigerant'];
$tblCondenserModel = $_GET['tblCondenserModel'];
$tblCondenserSerialNumber = $_GET['tblCondenserSerialNumber'];
$tblCondenserProduct = $_GET['tblCondenserProduct'];
$tblCondenserVoltage = $_GET['tblCondenserVoltage'];
$tblCondenserLineSet = $_GET['tblCondenserLineSet'];
$tblCondenserLocation = $_GET['tblCondenserLocation'];
$tblCondenserPressureSwitch = $_GET['tblCondenserPressureSwitch'];
$tblCondenserCapacitor = $_GET['tblCondenserCapacitor'];
$tblCondenserContactor = $_GET['tblCondenserContactor'];
echo $idtblCondenser . $custName



?>

<form action="customerDetail.php?id=<?php echo $idtblCondenser; ?>&name=<?php echo $custName; ?>"><input type="submit" value="submit"> </form>







<?php include_once "./footer.php"; ?>
