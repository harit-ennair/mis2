<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">

@csrf
<input type="text" name="name" placeholder="name">
<input type="email" name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
<button type="submit" name="submit" >login</button>


</form>
    
</body>
</html>