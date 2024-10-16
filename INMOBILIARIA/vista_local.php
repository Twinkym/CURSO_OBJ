<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="David De La Puente">
    <title>Local</title>
    <link rel="stylesheet" href="inmuebles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-5" id="container" >
        <h2 class="mb-4 text-center" id="Ftitulo" >Crear un Local</h2>
        <form action="controller_local.php" method="post" id="Fimage" class="p-4 border rounded-3 shadow-sm bg-light " >
            <div class="mb-3" >
                <label for="refCatastral" class="form-label" >Referencia Catastral: </label>
                <input type="text" class="form-control" name="refCatastral" id="refCatastral" required><br>
            </div>
            
            <div class="mb-3">
                <label for="planta" class="form-label" >Planta: </label>
                <input type="text" class="form-control" name="planta" id="planta" required><br>
            </div>

            <div class="mb-3">
                <label for="puerta" class="form-label" >Puerta: </label>
                <input type="text" class="form-control" name="puerta" id="puerta" required><br>
            </div>
            
            <div class="mb-3">
                <label for="numAmbientes" class="form-label" >Número de Ambientes: </label>
                <input type="number" class="form-control" name="numAmbientes" id="numAmbientes" required><br>
            </div>
            

            <div class="mb-3">
                <label for="numAseos" class="form-label" >Número de Aseos: </label>
                <input type="number" class="form-control" name="numAseos" id="numAseos" required><br>
            </div>
            

            <div class="mb-3">
                <label for="superficie" class="form-label" >Superficie (m2): </label>
                <input type="number" class="form-control" name="superficie" id="superficie" required><br>
            </div>
            
            <div class="mb-3">
                <label for="coefPropiedad" class="form-label" >Coeficiente de Propiedad: </label>
                <input type="number" class="form-control" name="coefPropiedad" id="coefPropiedad" required><br>
            </div>
            

            <div class="mb-3">
                <label for="precio" class="form-label" >Precio: </label>
                <input type="number" class="form-control" name="precio" id="precio" required><br>
            </div>
            
            
            <div class="mb-3">
                <label for="salidaHumos" class="form-label">¿Tiene salida de humos? (1=Sí, 0=No): </label>
                <input type="number" class="form-control" name="salidaHumos" id="salidaHumos" min="0" max="1" required><br>
            </div>
            

            <div class="mb-3">
                <label for="cedulaHabitabilidad" class="form-label" >¿Tiene Cédula de Habitabilidad? (1=Sí, 0=No): </label>
                <input type="number" class="form-control" name="cedulaHabitabilidad" id="cedulaHabitabilidad"  min="0" max="1" required><br>
            </div>
            

            <input type="submit" class="btn btn-primary w-50 position-relative top-50 start-50 translate-middle " value="Crear Local">
        </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>