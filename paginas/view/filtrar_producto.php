<!DOCTYPE html>
<html lang="es">
    <?php
    $ruta = "../..";
    $titulo = "Aplicacion de ventas - Filtrar producto";
    include ("../includes/cabecera.php");
    ?>
    <body>
        <?php
        include("../includes/menu.php");
        ?>

        <div class="container mt-3">
            <header>
                <h1><i class="fas fa-filter"></i>Filtrar producto</h1>
                <hr/>
            </header>

            <nav>
                <a href="listar_producto.php" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-circle-left"></i> Regresar
                </a>
            </nav>

            <section>
                <article>
                    <div class="row justify-content-center mt-3">
                        <div class="card col-md-5">
                                <form id="frm_filtrar_prod" name="frm_filtrar_prod" method="post">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <input type="text" class="form-control" id="txt_valor"
                                        name="txt_valor" maxlength="40" placeholder="Valor a buscar.."
                                        autofocus />
                                        <button class="btn btn-outline-success" type="button"
                                        id="btn_filtrar" name="btn_filtrar">Filtrar</button>
                                        <a class="btn btn-outline-primary" href="filtrar_producto.php">Nuevo</a>
                                    </div>
                                </form>
                                </div>
                            </div>
                </article>
            </section>
            <section class="mt-3">
                <div id="tabla"></div>
            </section>
            <?php
            include("../includes/pie.php")
            ?>
        </div>
    </body>

</html>