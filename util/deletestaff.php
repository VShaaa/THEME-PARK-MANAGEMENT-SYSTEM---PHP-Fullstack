<?php

session_start();

include "../Database/db_conn.php";

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id='$id' ";
$data = mysqli_query($conn, $query);
if ($data) {
    echo "<script>alert('Record deleted successfully')</script>";
	echo "<script>window.location.href = '../stafflist.php'</script>";
?>

    

<?php

} else {
    echo "<script>alert('Failed to Delete')</script>";
}
?>