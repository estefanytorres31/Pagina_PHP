<!DOCTYPE html>
<html lang="es">
    <?php
    $ruta = "../..";
    $titulo = "Lista de Empleados";
    include "../includes/cabecera.php";
    ?>
    <body>
        <?php
            include "../includes/cargar_clases.php";
            include "../includes/menu.php";
            
            $crudempleado = new CRUDEmpleado();
            $rs_emp = $crudempleado->ListarEmpleado();
        ?>
        <div class="container mt-3">
        <header>
                <h1><i class="fas fa-list-alt"></i><?=$titulo?></h1>
                <hr/>
            </header>

            <section>
                <article>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-6">
                        <table class="table table-hover table-sm table-sucess">
                            <tr class="table-primary text-center">
                                    <th>N°</th>
                                    <th>Código</th>
                                    <th>Empleado</th>
                                    <th>DNI</th>
                                    <th>Dirección</th>
                                    <th>Correo electrónico</th>
                                    <th>Código distrito</th>
                                </tr>
                                <?php
                                    $i = 0;
                                    foreach($rs_emp as $emp){
                                        $i++;
                                ?>
                                <tr class="reg_empleado">
                                    <td><?=$i?></td>
                                    <td class="codemp"><?=$emp->codigo_empleado?></td>
                                    <td class="emp"><?=$emp->apodo?></td>
                                    <td class="emp"><?=$emp->dni?></td>
                                    <td class="emp"><?=$emp->direccion?></td>
                                    <td class="emp"><?=$emp->correo_electronico?></td>
                                    <td class="emp"><?=$emp->empleado_codigo_distrito?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
                </article>
            </section>
            <?php
            include "../includes/pie.php";
            ?>
        </div>
    </body>
</html>