<?php
require_once('controller.php');
?>

<!DOCTYPE html>
<html lang="Es-es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="David De La Puente">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
</head>

<body>
    <div class="container">
        <input type="button" class="btn btn-primary" href="http://curso_obj.test/PHP/practicasGenericas/practica4/controller.php?name=david&accion=ENVIAR_FORM" value="GET">
        <form action="" class="form-control" method="post">
            <div class="form-group">
                <label for="name">Nombre: </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Escribe tu nombre...">
                <input type="hidden" name="accion" value="ENVIAR_FORM">
                <input class="btn btn-success" type="submit" value="ENVIAR">
                <input type="reset" class="btn btn-danger" value="RESET">
            </div>

        </form>

    </div>


    <div id="respuesta"><?php if (isset($name)) echo 'Hola SR. ' . $name; ?></div>

    <?php $color = "blue";
    echo '<script>document.getElementById("respuesta").style.color="' . $color . '";</script>'; ?>

    <script>
        // var btn1 =document.getElementById('btn-1');
        // btn1.addEventListener('click', Mifuncion);

        // function Mifuncion(){
        //     var texto = document.getElementById('mytexto').value;
        //     alert(texto);
        // }

        // $('#btn-1').on('click',function(){
        //     alert($('#mytexto').value)
        // })

        $('btn-1').on('click', function() {
            var ciudad = document.getElementById('mytexto').value;
            data = {'accion':'AJAX','ciudad':ciudad}
            $.post('controller.php',data,function(res){
                $('#res').html('div class="alert alert-info">'+res+'</div>')
                $('#res').css({'color':'red','width':'250px'})
            })
        })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>