
<!DOCTYPE html>
<html lang="es">
    <?php
    $ruta = "../..";
    $titulo = "Aplicacion de ventas - Consultar producto";
    include ("../includes/cabecera.php");
    ?>
    <body>
        <?php
        include("../includes/menu.php");
        ?>

        <div class="container mt-3">
            <header>
                <h1><i class="fas fa-search"></i>Consultar producto</h1>
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
                        <div class="card col-md-6">
                            <div class="card-body">
                                <form id="frm_consultar_prod" name="frm_consultar_prod" method="post">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="txt_codprod" class="form-label">Codigo</label>
                                            <input type="text" class="form-control" id="txt_codprod" name="txt_codprod"
                                            placeholder="codigo buscar" maxlength="5" autofocus>
                                        </div>

                                        <div class="col-md-8"></div>

                                        <div class="col-md-8">
                                            <h5 class="card-title">Producto</h5>
                                            <p class="prod card-text">&nbsp;</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="card-title">Stock disponible</h5>
                                            <p class="stk card-text">&nbsp;</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="card-title">Costo</h5>
                                            <p class="cst card-text">&nbsp;</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="card-title">% Ganancia</h5>
                                            <p class="gnc card-text">&nbsp;</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="card-title">Precio</h5>
                                            <p class="prc card-text">&nbsp;</p>
                                        </div>

                                        <div class="col-md-6">
                                            <h5 class="card-title">Marca</h5>
                                            <p class="mar card-text">&nbsp;</p>
                                        </div>

                                        <div class="col-md-6">
                                            <h5 class="card-title">Categoria</h5>
                                            <p class="cat card-text">&nbsp;</p>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center mt-3">
                                    <a href="consultar_producto.php" class="btn btn-outline-primary">
                                        <i class="fas fa-file"></i> Nueva Consulta
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <?php
            include("../includes/pie.php")
            ?>
        </div>
    </body>
</html>
