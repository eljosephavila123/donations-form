<!DOCTYPE html>
<html>

<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/table-style.css">
</head>

<body>

    <div class="container">
        <form id="filter" action ="filtroDonaciones.php" method="get">
            <input type="text" name="valueToSearch" placeholder="Buscar de donaciones"><br><br>
            <input type="submit" name="search" value="Buscar"><br><br>
        </form>
        <?php 
        
        ?>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefóno</th>
                        <th>Email</th>
                        <th>Donaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
             include("table.php");
    

             
        ?>

                <tbody>
            </table>
        </div>
    </div>
</body>

</html>