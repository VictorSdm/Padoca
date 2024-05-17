<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container position-relative">
        <div class="col"></div>
        <div class="col position-relative py-2 px-4 text-bg-dark border border-dark ">
            <form action="autenticar.php" method="post">
                <label for="" class="form-label">Usuario</label><br>
                <input class="form-control"type="text" name="usuario" id=""><br>
                <label for="" class="form-label">Senha</label><br>
                <input class="form-control" type="text" name="senha" id=""><br>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label position-absolute top-90 start-50- " for="exampleCheck1">Check me out -></label>
                <input class="btn btn-info position-absolute top-85 start-50 "type="submit" value="Login">
            </form>
        </div>
        <div class="col"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>