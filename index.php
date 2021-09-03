
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <title>Prueba Principal</title>
    </head>
    <body>
        <div id="ingreso">
            <h2>Ingreso de paises</h2>
            <form action="" method="post">
                <label for="id" >ID</label>
                <input type="text" id="id_i">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre_i">
                <label for="capital">Capital</label>
                <input type="text" id="capital_i">
                <label for="codigo">Codigo</label>
                <input type="text" id="codigo_i">
                <label for="poblacion">Poblacion</label>
                <input type="text" id="poblacion_i">
                <label for="moneda">Moneda</label>
                <input type="text" id="moneda_i">
                <label for="continente">Continente</label>
                <input type="text" id="continente_i">
                <button type="submit" id="ingresar">Ingresar</button>
            </form>
        </div>
        
        <div id="busqueda">
            <h2>Busqueda</h2>
            <input type="text" name="busqueda" id="busqueda" >
        </div>

        <div id="resultado"></div>

        <div id="reportes">
            <h2>Reportes</h2>
            <a href="">Generar reporte</a>
        </div>
        <div id="mostrar"></div>


        <script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./app/js/ingreso.js"></script>
        <script src="./app/js/buscar.js"></script>
    </body>
</html>





