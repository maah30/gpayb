<?php
session_start();
include("connect.php");

if(isset($_SESSION['username'])) 
{
    $username = $_SESSION['username'];
    $query = "SELECT * FROM register";

    $mng = mysqli_prepare($conn, $query);
    mysqli_stmt_execute($mng);
    $result = mysqli_stmt_get_result($mng);

    if(mysqli_num_rows($result) > 0) 
    {
    } 
    else 
    {
        echo "<br><center><tr><p style='font-size: 20px; color: white; font-family: times new roman'; colspan='4'>No student information found.</p></tr></center>";
    }

} 
else
 {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONLINE VOTING SYSTEM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: url("dt.jpg");
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            background-color: lightcoral;
            width: 80%;
            margin: 0 auto;
            display: flex;
            border: 1px solid #ddd;
            border-color: black;
            border-radius: 8px;
            overflow: hidden;
        }

        .panel {
            background-color: bisque;
            padding: 20px;
            flex: 1;
            border-right: 1px solid #ddd;
        }

        .panel:last-child {
            border-right: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-color: black;
        }

        th {
            background-color: skyblue;
        }

        .tbl_contain {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 55px;
        }

        .options-panel button {
            display: block;
            margin-bottom: 1px;
            background-color: lightcoral;
            border: 0px solid #ddd;
            border-radius: 5px;
            border-width: 1px;
            height: 55px;
            border-color: lightcoral;
            font-family: 'Georgia Pro Black';
            font-size: 20px;
        }

        .options-panel button.selected {
            background-color: purple;
            color: khaki;
        }

        img {
            border-radius: 10px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div class="tbl_contain">
    <div class="container">
        <div class="panel" id="studinfo_panel">
            <h3 align="center" style="font-family: 'times new roman'; font-size: 25px"><b><br> NEW ACCOUNT REGISTERED </b></h3>
            <table>
                <thead>
                    <tr>
                        <th>Voters ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Picture</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['voter_ID'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>";
                    if (!empty($row['profile_picture'])) {
                        echo "<img src='data:image/jpeg;base64," . base64_encode($row['profile_picture']) . "' alt='Profile Picture' style='width: 100px; height: 100px;'>";
                    } else {
                        echo "No Image";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='transfer.php?id=" . $row['voter_ID'] . "' class='btn btn-info'><i class='bi bi-arrow-right-circle' style='color: black;'>ADD-OLD<br></i></a>";
                    echo "<a href='view_new.php?id=" . $row['voter_ID'] . "' class='btn btn-info'><i class='bi bi-eye' style='color: black;'> </i></a>";
                    echo "<a href='edit_new.php?id=" . $row['voter_ID'] . "' class='btn btn-info'><i class='bi bi-pen' style='color: black;'> </i></a>";
                    echo "<a href='dlt_new.php?id=" . $row['voter_ID'] . "' class='btn btn-info'><i class='bi bi-trash3' style='color: black;'></i></a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            <p style="position: absolute; right: 180px; top: 140px;"><a href="db.php"><input type="button" value="BACK"></a></p>
        </div>
    </div>
</div>
</body>
</html>
