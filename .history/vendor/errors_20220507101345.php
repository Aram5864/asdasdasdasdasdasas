<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errors</title>
</head>

<body>
    <div style="display:flex;justify-content:center;">
        <div style="text-align:center">
            <h1 style="color:red"><?=  $e->getCode();  ?> </h1>
            <h2 style="color: gray;"><?=  $e->getMessage();  ?></h2>
        </div>

    </div>

</body>

</html>