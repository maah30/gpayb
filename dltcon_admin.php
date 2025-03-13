<?php
session_start();
include("connect.php");


if(isset($_SESSION['username'])) 
{
    if(isset($_GET['id']))
    {
        $admin_ID = $_GET['id'];

        $dlt_query_info = "DELETE FROM admin WHERE admin_ID = ?";
        $dlt_mng_info = mysqli_prepare($conn, $dlt_query_info);

        if(!$dlt_mng_info) 
        {
            $error_message = "Error: " . mysqli_error($conn);
            error_log($error_message); 
            echo "Error deleting record. Please try again later."; 
            exit(); 
        }

        mysqli_stmt_bind_param($dlt_mng_info, "i", $admin_ID);
        mysqli_stmt_execute($dlt_mng_info);

    

        if(mysqli_stmt_affected_rows($dlt_mng_info) > 0) 
        {
            header("Location: db1.php");
            exit();     
        }
         else 
        {
            header("Location: error.php");
            exit();
        }

    } 
    else 
    {
        header("Location: error.php");
        exit(); 
    }
} 
else 
{
    header("Location: login.php");
    exit(); 
}
?>