<?php

include "include/databse.php";
?>


<?php

if(isset($_GET['deletesup'])){

$delete_id = $_GET['deletesup'];

$delete_pro = "delete from supliment where id='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Equipment Has been deleted')</script>";

echo "<script>window.open('viewSuppliments.php?viewSuppliments','_self')</script>";

}

}

?>

