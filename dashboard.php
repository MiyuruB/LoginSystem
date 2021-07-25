<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;}
        table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}
        td, th {border: 1px solid #dddddd;text-align:center;padding: 8px;}
        .zd1{width: 1200px;margin: 0 auto;}
        .zh1{text-align: center;font-size: 54px;margin: 20px 0;}
        .zbt1{ width: 36px;border: none;background: white;}
        .zi1{    width: 21px;}
    </style>
</head>
<body>
    <div class="zd1">
        <h1 class="zh1">Doctor List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>BRANCH</th>
                
            </tr>
            <?php
                
                $p = $conn->prepare("SELECT * FROM `users` WHERE 1 ORDER BY `userId`");
                $p->execute([1]);
                $res = $p->fetchAll();
                $counter = 0;
                if(count($res)>0){
                    foreach($res as $r){
            ?>
            <tr>
                <td><?php echo $r['userId'] ; ?></td>
                <td><?php echo $r['userName'] ; ?></td>
                <td><?php echo $r['userEmail'] ; ?></td>
            </tr>
            <?php } } ?>
        </table>

    </div>  
</body>
</html>