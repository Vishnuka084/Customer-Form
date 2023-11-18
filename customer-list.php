<?php
    include 'header.php';
    include 'mysql_connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Customer-List</title>
</head>
<body>

<div class="container">
    <br>
    <h4>Customer Form</h4>
    <hr>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nic</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($con,$sql);
            if ($result){
                while ($raw=mysqli_fetch_assoc($result)){
                    $nic =  $raw['nic'];
                    $name =  $raw['name'];
                    $address =  $raw['address'];
                    $salary =  $raw['salary'];

                    echo '
                        <tr>
                            <td>'.$nic.'</td>
                            <td>'.$name.'</td>
                            <td>'.$address.'</td>
                            <td>'.$salary.'</td>
                            <td>
                                <a href="customer-update.php?customerNic='.$nic.'" class="btn btn-success btn-sm">Updated</a>
                                <a href="customer-delete.php?customerNic='.$nic.'" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    ';
                }
            }

        ?>



        </tbody>
    </table>
</div>

</body>
</html>