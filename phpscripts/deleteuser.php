
<?php
include_once "startsession.php";
include_once "dbconn.php";


if(isset($_POST['delete_user'])){
    

    $id = $_POST['id'];
   

    $query = "DELETE FROM users WHERE id ='$id' ";
    $query_run = mysqli_query($conn, $query); 

    if($query_run){
        $_SESSION['success'] = 'Cilent Deleted';
        header('location: ../admin.php?CilentDeleted');
    }else{
        $_SESSION['status'] = 'Error';
        header('location: ../admin.php?error');
    }
 

}

?>