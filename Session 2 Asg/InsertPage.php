<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crypto Currency</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<body>
    <div class="container mt-sm-5">
        <h1>Insert Crypto Data Here</h1>
        <form action="Insert.php" method="post">
        <div class="form-group mb-sm-3">
            <label>Crypto Name:</label>
            <input name="cryptoName" type="text" class="form-control" placeholder="Enter Crypto Name">
        </div>
        
        <div class="form-group mb-sm-3">
            <label>Crypto Description:</label>
            <input name="cryptoDesc" type="text" class="form-control" placeholder="Enter Crypto Description">
        </div>

        <div class="form-group mb-sm-3">
            <label>Price:</label>
            <input name="cryptoPrice" type="number" class="form-control" placeholder="Enter Crypto Price">
        </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</body>
</html>