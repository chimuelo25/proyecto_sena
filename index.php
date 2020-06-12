<?php
    $mysqli=new mysqli("localhost","root","toor","covid_19");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>
</head>
<body>
    <form action="conexion.php" method="GET">
        Nombre <input type='text' name='nombre'><br><br>
        Apellido <input type='text' name='apellido'><br><br>
        Tipo de documento  <select name="id_tipo_documento" id="id_tipo_documento">
            <option value="null">Seleccione documento</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM tipo_documento");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['tipo'].'</option>';
                }
            ?>
        </select><br><br>
        Documento <input type='text' name='documento'><br><br>
        Edad<input type="number" name="edad">
        Sexo <select name="sexo" id="sexo">
            <option value="null">Seleccione sexo</option>
            <option value="1">Mujer</option>
            <option value="2">Hombre</option>
        </select><br><br>
        Fecha de reporte <input type='date' name='fecha_reporte'><br><br>
        Estado <select name="id_estado" id="id_estado">
            <option value="null">Seleccione estado</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM estados");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['estado'].'</option>';
                }
            ?>
        </select><br><br>
        Pais de procedencia <select name="pais_procedencia" id="pais_procedencia">
            <option value="null">Seleccione pais de procedencia</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM paises");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['pais'].'</option>';
                }
            ?>
        </select><br><br>
        Pais <select name="id_pais" id="id_pais">
            <option value="null">Seleccione pais</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM paises");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['pais'].'</option>';
                }
            ?>
        </select><br><br>
        Departamento <select name="departamento" id="departamento">
            <option value="null">Seleccione departamento</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM departamentos");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['departamento'].'</option>';
                }
            ?>
        </select><br><br>
        Municipio <select name="id_municipio" id="id_municipio">
            <option value="null">Seleccione municipios</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM municipios");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['municipios'].'</option>';
                }
            ?>
        </select><br><br>
        Lugar de atencion <select name="id_lugar_atencion" id="id_lugar_atencion">
            <option value="">Seleccione lugar de atencion</option>
            <?php
                $query=$mysqli -> query ("SELECT * FROM lugar_atencion");
                while ($valores=mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['id'].'">'.$valores['lugar_atencion'].'</option>';
                }
            ?>
        </select><br><br>


        <input type='submit' value='Registrar'>
        <input type='submit' value='Limpiar'>

    </form>
</body>
</html>