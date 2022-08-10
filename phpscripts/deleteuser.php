
<?php
session_start();
include_once "dbconn.php";


if (isset($_POST['delete_user'])) {


    $id = $_POST['id'];


    $query = "DELETE FROM users WHERE id ='$id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = 'User Deleted';
        header('location: ../dashboard/admin.php?userDeleted');
    } else {
        $_SESSION['status'] = 'Error';
        header('location: ../dashboard/admin.php?error');
    }
}

?>