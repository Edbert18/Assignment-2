<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div style="width:70%;margin: 20px 15%;">
        <h1 class="text-center" style="font-size: 26px;">Crypto Currency</h1>
        <a href='./InsertPage.php'>Insert Crypto Here</a>
        <table class="table table-striped table-bordered" style="margin-top: 3%;">
            <thead>
                <tr>
                    <th scope="col">Crypto Name</th>
                    <th scope="col">Crypto Desc</th>
                    <th scope="col">Crypto Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM cryptocurrency";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<th scope='col'>{$row['CryptoName']}</th>";   
                        echo "<th scope='col'>{$row['CryptoDesc']}</th>";
                        echo "<th scope='col'>{$row['CryptoPrice']}</th>";
                        echo "<td scope='col'><a href='Update.php?cryptoID=$row[CryptoID]'>Edit</a> | <a href='Delete.php?cryptoID=$row[CryptoID]'>Delete</a></th>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='5'>No Crypto data inputted, Please Click <a href='./index.php'>Here</a> to Input Crypto Data</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>