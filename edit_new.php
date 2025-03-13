<?php
if(isset($_GET['id']))
 {
    include("session_check.php");
    include("connect.php");

    $voters_ID = $_GET['id'];

    $query_info = "SELECT * FROM register WHERE voter_ID = ?";
    $mng_info = mysqli_prepare($conn, $query_info);
    mysqli_stmt_bind_param($mng_info, "i", $voters_ID);
    mysqli_stmt_execute($mng_info);
    $result_info = mysqli_stmt_get_result($mng_info);
    
    if(mysqli_num_rows($result_info) == 1)
    {
        $row_info = mysqli_fetch_assoc($result_info);
        $fname = $row_info['firstname'];
        $lname = $row_info['lastname'];
        $age = $row_info['age'];
        $email = $row_info['email'];
        $address = $row_info['address'];
    } 
    else 
    {
        header("Location: new_voters.php?id=".$voters_ID);
        exit();
    }
 } 
 else 
 {
    header("Location: new_voters.php");
    exit();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student Information</title>
    
<style>            
        body 
        {
            background-color: #7469B6;
        }

        .container 
        {
            width: 30%;
            height: 400px;
            position: absolute;
            top: 300px;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
 
        }

        h1 
        {
            text-align: center;
            font-family: Georgia Pro Black;
            font-size: 25px;
        }

        form 
        {
            margin-top: 20px;
        }

        label 
        {
            display: inline-block;
            width: 100px; 
            margin-bottom: 5px;
            font-family: 'times new roman';
            font-size: 20px;
        }

        input[type="text"], input[type="email"], select[type="text"] 
        {
            width: calc(90% - 105px); 
            padding: 8px;
            margin-bottom: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            vertical-align: middle; 
            font-family: 'calibri';
            font-size: 18px;
        }
        

        input[type="submit"] 
        {
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            position: absolute;
            right: 40px;
        }

        input[type="submit"]:hover 
        {
            background-color: skyblue;
        }

        .tbl_contain 
        {
            width: 100%;
            display: flex;
            justify-content: center; 
            margin-top: 60px; 
        }
        
</style>
</head>

<body>
<div class="tbl_contain">
    <div class="container">
        <h1>Edit Student Information</h1>
        <form action="update_new.php" method="post">
            <input type="hidden" name="voter_ID" value="<?php echo $voters_ID; ?>">
            <label for="fname"> Firstname :</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $fname; ?>" required><br><br>
            <label for="lname">Lastname :</label>
            <input type="text" id="lastname" name="lastname" value="<?php echo $lname; ?>" required><br><br>
            <label for="age">age :</label>
            <input type="text" id="age" name="age" value="<?php echo $age; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>
            <label for="username">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>" required><br><br>
             

            <p style="position: absolute; right: 100px; margin-top: 2px; font-size:20px;"><input type="submit" value="Update">
            <p style="position: absolute; right: 10px; margin-top: 1px; font-size:20px;"><a href="new_voters.php "><input type="submit" value="BACK"></a></p>  
            
              
        </form>
    </div>
</div>

</body>
</html>
