<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Pagina</title>
    <style>
        table, tr, td {
            border: 2px solid #000000;
            background: #89d5e7;
        }
        .draggable {
            position: absolute;
            cursor: move;
        }
    </style>
</head>
<body style="background: url(FONDO.jpg);">
    <?php
        $nombre = "Juan Pérez";
        $mensaje = "Hola, Juan";
        $datos = "Juan,Pérez,25";

        $a = 'strlen($nombre)';
        $longitud = strlen($nombre); 
        $b = 'strtolower($nombre)';
        $nombre_minusculas = strtolower($nombre); 
        $c = 'strtoupper($nombre)';
        $nombre_mayusculas = strtoupper($nombre); 
        $d = 'str_replace("Juan", "María", $mensaje)';
        $mensaje_nuevo = str_replace("Juan", "María", $mensaje); 
        $e = 'trim($nombre)';
        $nombre_limpio = trim($nombre); 
        $f = 'explode(",", $datos)';
        $datos_arreglo = explode(",", $datos); 
        $g = 'implode(",", $datos_arreglo)';
        $datos_arreglo = array("Juan", "Pérez", "25");
        $datos = implode(",", $datos_arreglo); 
        $h = 'strpos($mensaje, "Juan")';
        $posicion = strpos($mensaje, "Juan"); 
        $i = 'substr($nombre, 5)';
        $apellido = substr($nombre, 5); 
        $j = 'ucfirst($nombre)';
        $nombre_nuevo = ucfirst($nombre); 
        $k = 'ucwords($nombre)';
        $nombre_nuevo = ucwords($nombre); 
        $l = 'strcasecmp($nombre1, $nombre2)';
        $nombre1 = "Juan Pérez";
        $nombre2 = "juan perez";
        $comparacion = strcasecmp($nombre1, $nombre2); 
        $m = 'strrev($mensaje)';
        $mensaje_revertido = strrev($mensaje); 
        $n = 'nl2br($mensaje)';
        $mensaje_con_br = nl2br($mensaje); 
        $o = 'htmlspecialchars($mensaje)';
        $mensaje_html = htmlspecialchars($mensaje); 
    ?>

    <div style="text-align: center; background: aquamarine; width: auto; height: auto;">
        <div class="op draggable" style="text-align: center; left: 171px; top: 302px;">
            <table style="background: cornflowerblue;">
                <tr>
                    <td colspan="3" style="background: aqua;">
                        <h1>Mi CADENA DE TEXTO</h1>
                    </td>
                </tr>
                <tr>
                    <td>SINTAXIS:</td>
                    <td>RESULTADO</td>
                    <td>TEXTO</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($a); ?></td>
                    <td><?php echo $longitud; ?></td>
                    <td>Esta función se utiliza para obtener la longitud de una cadena de caracteres.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($b); ?></td>
                    <td><?php echo $nombre_minusculas; ?></td>
                    <td>Convierte todos los caracteres de una cadena a minúsculas.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($c); ?></td>
                    <td><?php echo $nombre_mayusculas; ?></td>
                    <td>Convierte todos los caracteres de una cadena a mayúsculas.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($d); ?></td>
                    <td><?php echo $mensaje_nuevo; ?></td>
                    <td>Reemplaza todas las apariciones de una subcadena dentro de una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($e); ?></td>
                    <td><?php echo $nombre_limpio; ?></td>
                    <td>Elimina los espacios en blanco (u otros caracteres) del inicio y el final de una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($f); ?></td>
                    <td><?php print_r($datos_arreglo); ?></td>
                    <td>Divide una cadena en un array.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($g); ?></td>
                    <td><?php echo $datos; ?></td>
                    <td>Une elementos de un array en una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($h); ?></td>
                    <td><?php echo $posicion; ?></td>
                    <td>Encuentra la posición de la primera aparición de una subcadena en una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($i); ?></td>
                    <td><?php echo $apellido; ?></td>
                    <td>Devuelve una parte de una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($j); ?></td>
                    <td><?php echo $nombre_nuevo; ?></td>
                    <td>Convierte el primer carácter de una cadena a mayúscula.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($k); ?></td>
                    <td><?php echo $nombre_nuevo; ?></td>
                    <td>Convierte a mayúscula el primer carácter de cada palabra en una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($l); ?></td>
                    <td><?php echo $comparacion; ?></td>
                    <td>Compara dos cadenas sin distinguir mayúsculas y minúsculas.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($m); ?></td>
                    <td><?php echo $mensaje_revertido; ?></td>
                    <td>Invierte una cadena.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($n); ?></td>
                    <td><?php echo $mensaje_con_br; ?></td>
                    <td>Convierte los saltos de línea en etiquetas HTML <br>.</td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($o); ?></td>
                    <td><?php echo $mensaje_html; ?></td>
                    <td>Convierte caracteres especiales en entidades HTML.</td>
                </tr>
            </table>
        </div>
    </div>

    <script>
        // Hace que el elemento Div se pueda arrastrar
        dragElement(document.querySelector(".draggable"));

        function dragElement(elmnt) {
            var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
            if (document.getElementById(elmnt.id + "header")) {
                /// si está presente, el encabezado es desde donde mueves el DIV:
                document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
            } else {
                // de lo contrario, mueva el DIV desde cualquier lugar dentro del DIV:
                elmnt.onmousedown = dragMouseDown;
            }

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                // OBTINE la posicion del cursor del mouse
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                // Llamar una funcion cada vez que se mueve el mouse
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                // Calcula la nueva posicion del mouse
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                // cambia la nueva posicion de la tabla a la del mouse 
                elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                // Deja de moverse cuando se suelta el mouse
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }
    </script>
</body>
</html>
