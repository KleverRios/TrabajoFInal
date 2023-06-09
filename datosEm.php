<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font: 20px Arial;
        }

        .c1 {
            border: 1px solid;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            height: 80px;

        }

        h1{
            font-size: 30px;
        }

        .c2{
            width: 1000px;
            margin-left: 3%;
            margin-top: 25px;
        }

        a{
            margin: 25px;
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body>
    <div class="c1">
        <h1>Registro de envio</h1>
    </div>
    <div class="c2">
        <?php if ($_POST) {
            //echo
            
            echo "Nombre:";echo "<br>";
            echo $_POST['nombre'];
            echo "<br><br><br><hr>";
            echo "Correo:";echo "<br>";
            echo $_POST['correo'];
            echo "<br><br><br><hr>";
            echo "Asunto:";echo "<br>";
            echo $_POST['asunto'];
            echo "<br><br><br><hr>";
            echo "Comentario:";echo "<br>";
            echo $_POST['coment'];
            echo "<br>";
            echo "<br><br>";

            /*
    include("Conex.php");
    if (isset($_POST['btn'])) {
        echo "si";
        if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['asunto']) >= 1 &&
        strlen($_POST['coment']) >= 1) {
            $name = ($_POST['nombre']);
            $asunto =($_POST['correo']);
            $correo =($_POST['asunto']);
            $coment =($_POST['coment']);

            $consulta = "INSERT INTO emprende(nombre, asunto, comentario, texto) VALUES ('$name','$asunto','$correo,'$coment')";
            $result = mysqli_query($conex, $consulta);
            if ($result) {
                echo "dsfsdfdf";
            }
        }
    }*/
        }
        ?>
    </div>
    <br><br>
    <hr>
    <a href="Emprende.html">Regresar</a>
</body>

</html>
