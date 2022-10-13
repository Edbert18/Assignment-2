<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $cryptoName =  $_REQUEST['cryptoName'];
    $cryptoDesc = $_REQUEST['cryptoDesc'];
    $cryptoPrice =  $_REQUEST['cryptoPrice'];
    $cryptoID =  $_REQUEST['cryptoID'];

    // update user data
    $result = mysqli_query($conn, "UPDATE cryptocurrency SET CryptoName='$cryptoName',CryptoDesc='$cryptoDesc',CryptoPrice='$cryptoPrice' WHERE CryptoID='$cryptoID'");

    // Redirect to homepage to display updated user in list
    header("Location: Index.php");
}
?>
<?php
$cryptoID = $_GET['cryptoID'];
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM cryptocurrency WHERE CryptoID='$cryptoID'");
while ($row = mysqli_fetch_array($result)) {
    $cryptoName = $row['CryptoName'];
    $cryptoID = $row['CryptoID'];
    $cryptoDesc = $row['CryptoDesc'];
    $cryptoPrice = $row['CryptoPrice'];
}
?>
<html>

<head>
    <title>Edit Crypto Data</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<body>
        <a href="Index.php">Home</a>
        <br /><br />
        <div class="container mt-sm-5">
        <h1>Insert Crypto Data Here</h1>
        <form action="Update.php" method="post">
        <div class="form-group mb-sm-3">
            <label>Crypto Name:</label>
            <input name="cryptoName" type="text" class="form-control" value=<?php echo $cryptoName; ?>>
        </div>
        
        <div class="form-group mb-sm-3">
            <label>Crypto Description:</label>
            <input name="cryptoDesc" type="text" class="form-control" value="<?php echo $cryptoDesc; ?>">
        </div>

        <div class="form-group mb-sm-3">
            <label>Price:</label>
            <input name="cryptoPrice" type="number" class="form-control" value=<?php echo $cryptoPrice; ?>>
        </div>
        <div>
            <input type="hidden" name="cryptoID" value=<?php echo $_GET['cryptoID']; ?>>
            <input type="submit" name="update" value="Update">
        </div>
        </form>
    </div>
</body>

</html>