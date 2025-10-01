<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
</head>
<body>
    <h1>Thank you</h1>
    <p>Thank you for registering. Here is the info you submitted:</p>
    <dl>
        <dt>First name</dt>
        <dd><?php echo $_POST["firstName"]?></dd>
        <dt>Last name</dt>
        <dd><?php echo $_POST["lastName"]?></dd>
        <dt>Password</dt>
        <dd><?php echo $_POST["password1"]?></dd>
        <dt>Retyped Password</dt>
        <dd><?php echo $_POST["password2"]?></dd>
        <dt>Gender</dt>
        <dd><?php echo $_POST["gender"]?></dd>
        <dt>Favorite Widget</dt>
        <dd><?php echo $_POST["favoriteWidget"]?></dd>
        <dt>Receive Newsletter</dt>
        <dd><?php echo $_POST["newsletter"]?></dd>
        <dt>Comments</dt>
        <dd><?php echo $_POST["comments"]?></dd>
    </dl>
</body>
</html>