<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">UsuarioId</th>
                    <th scope="col">LastName</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>

            <tbody>
                <?php require_once 'Usuario.php';

                $Obj = new Usuario('Rojas', 'Josue', 'paredesjosue77', 'admin123');
                $Obj->SelectUsers(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>