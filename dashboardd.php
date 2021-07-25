<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>User ID</th>
        </tr>
        <?php
        include 'includes/dbh.inc.php';

        $sql = "SELECT userId, userName, userEmail, userUid FROM users";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0) {
            echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
            echo error_reporting(E_ALL);
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["userId"] ."</td><td>". $row["userName"]. "</td><td>". $row["userEmail"]."</td><td>". $row["userUid"]."</td><td>";
            }
            echo "</table>";    
        }
        else {
            echo "0 result";


        }
        $conn-> close();
?>
</table>
</body>
</html>