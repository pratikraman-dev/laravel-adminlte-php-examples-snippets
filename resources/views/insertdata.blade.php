<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <form action="insert" method="post">
        <table>
            <tr>
                {{ csrf_field() }}
                <td> First Name :</td>
                <td><input type="text" name="firstName"></td>
            </tr>
            <tr>
                <td> Last Name :</td>
                <td><input type="text" name="lastName"></td>
            </tr>
            <tr>
                <td> Mobile :</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>