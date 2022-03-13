<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In </title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            
        }
    </style>
</head>

<body>

    <form action="signindb.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="phone" placeholder="Phone">
        <textarea rows="5" type="text" name="address" placeholder="address" ></textarea>
        <input type="password" name="password" placeholder="password">
    </form>

</body>

</html>