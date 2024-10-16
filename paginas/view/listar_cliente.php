<!DOCTYPE html>
<html lang="es">
    <?php
    $ruta = "../..";
    $titulo = "Listas de Clientes";
    include "../includes/cabecera.php";
    ?>
    <body>
        <?php
            include "../includes/cargar_clases.php";
            include "../includes/menu.php";
            
            $crudcliente = new CRUDCliente();
            $rs_cli = $crudcliente->ListarCliente();
        ?>
        <div class="container mt-3">
        <header>
                <h1><i class="fas fa-university"></i><?=$titulo?></h1>
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
                                    <th>Nombre</th>
                                    <th>A. Paterno</th>
                                    <th>A. Materno</th>
                                </tr>
                                <?php
                                    $i = 0;
                                    foreach($rs_cli as $cli){
                                        $i++;
                                ?>
                                <tr>
                                    <td class="text-center"><?=$i?></td>
                                    <td class="text-center"><?=$cli->codigo_cliente?></td>
                                    <td><?=$cli->nombre?></td>
                                    <td><?=$cli->ap_paterno?></td>
                                    <td><?=$cli->ap_materno?></td>
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
