<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>
<body>

    <main>
        <section class="contenedorlogica">
            <center>
                <?php
                    
                    function CalculoPago($dias, $pago){
                        if ($dias > 30){
                            echo "No puede ingresar más de 30 días";
                        }else {
                            $Totalpago = $dias * $pago;
                            $pagoincrement = 0;
                            echo "<table>";
                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b>Dias</b>";
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<b>Pago</b>";
                                    echo "</td>";
                                echo "</tr>";
                            for ($i = 1; $i <= $dias; $i++) {
                                $pagoincrement = $pagoincrement + $pago;
                                echo "<tr>";
                                    echo "<td>";
                                        echo $i;
                                    echo "</td>";
                                    echo "<td>";
                                        echo $pagoincrement;
                                    echo "</td>";
                                echo "</tr>";
                            }
                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b>Total</b>";
                                    echo "</td>";
                                    echo "<td>";
                                        echo $Totalpago;
                                    echo "</td>";
                            echo "</tr>";
                            echo "</table>";
                        }
                    }
        
                    $cargo = $_POST['cargo'];
                    $dias = $_POST['dias'];
                    
                    if ($cargo == 1){
                        if ($dias > 30){
                            echo "No puede ingresar más de 30 días";
                        }else {
                            CalculoPago($dias, 30000);
                        }
                    }elseif ($cargo == 2) {
                        if ($dias > 30){
                            echo "No puede ingresar más de 30 días";
                        }else {
                            CalculoPago($dias, 50000);
                        }
                    }elseif ($cargo == 3) {
                        if ($dias > 30){
                            echo "No puede ingresar más de 30 días";
                        }else {
                            CalculoPago($dias, 100000);
                        }
                    }else {
                        echo "Ingrese un cargo valido";
                    }
                    
                ?>
            </center>
        </section>
    </main>

</body>
</html>

