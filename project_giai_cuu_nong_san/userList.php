<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<!--<form method="post">
    <table>
        <tr>
            <td>sort:<input type="number" name="sort"></td>
            <td>name:<input type="text" name="name"></td>
            <td>price:<input type="text" name="price"></td>
            <td>img:<input type="text" name="img"></td>
            <td>
                <button type="submit" name="Add">Add</button>
            </td>
        </tr>
    </table>
</form>-->
<table>
    <thead>
    <caption><h1>User List</h1></caption>
    <tr>
        <th>name</th>
        <th>age</th>
        <th>address</th>
        <th>img</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $filename = 'user.json';
    $json = file_get_contents($filename);
    $jsonData = json_decode($json);
    foreach ($jsonData as $user) {
        echo "
    <tr>
     <td>$user->name</td>
     <td>$user->age</td>
     <td>$user->address</td>
     <td>$user->img</td> 
     </tr>   
     ";
    }
    ?>
    </tbody>
</table>
</body>
</html>
