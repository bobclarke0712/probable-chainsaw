<!---->
<!--<div class="row">-->
<!--    <div class="col-sm-2"></div>-->
<!--    <div class="col-sm-8">-->
    <?php
include_once "./header.php";
$sql = "SELECT * FROM fm_bwapps.tblCustomers;";
$result = mysqli_query($con, $sql);
$table = "<table id= \"table\" class=\"table table-striped\" border='1'><thead><tr><th>Name</th><th>Phone</th><th>Email</th></tr></thead><tbody>";
while ($row = mysqli_fetch_array($result)) {
    $custID = $row['idtblCust'];
    $custName = $row['tblCustName'];
    $phoneNum = $row['tblCustPhone'];
    $email = $row['tblCustEmail'];
    $table .= "<tr><td><a href='customerDetail.php?id=$custID'>$custName</a></td><td>$phoneNum</td><td>$email</td></tr>";
}
$table .= "</tbody></table>";
echo "<br>" . $table;

?>
<!--    </div>-->
<!--    <div class="col-sm-2"></div>-->
<!--</div>-->
<script>
    $(function(){
        $('#table').DataTable( {
            "order": [[ 1, "Name" ]]
        } );
    });
</script>
