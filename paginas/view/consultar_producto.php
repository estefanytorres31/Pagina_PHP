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
                                <a href="javascript:void(0);" id="btn_nueva_consulta" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#dataModal">
        <i class="fas fa-file"></i> Nueva Consulta
    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataModalLabel">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Producto:</strong> <span class="modal-prod">&nbsp;</span></p>
        <p><strong>Stock disponible:</strong> <span class="modal-stk">&nbsp;</span></p>
        <p><strong>Costo:</strong> <span class="modal-cst">&nbsp;</span></p>
        <p><strong>% Ganancia:</strong> <span class="modal-gnc">&nbsp;</span></p>
        <p><strong>Precio:</strong> <span class="modal-prc">&nbsp;</span></p>
        <p><strong>Marca:</strong> <span class="modal-mar">&nbsp;</span></p>
        <p><strong>Categoría:</strong> <span class="modal-cat">&nbsp;</span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
            <?php
            include("../includes/pie.php")
            ?>
        </div>
    </body>
    <script>
$(document).ready(function() {
    $("#btn_nueva_consulta").click(function() {
        $(".modal-prod").text($(".prod").text());
        $(".modal-stk").text($(".stk").text());
        $(".modal-cst").text($(".cst").text());
        $(".modal-gnc").text($(".gnc").text());
        $(".modal-prc").text($(".prc").text());
        $(".modal-mar").text($(".mar").text());
        $(".modal-cat").text($(".cat").text());
    
     $("#dataModal").on('show.bs.modal', function () {
            $(".prod").hide();
            $(".stk").hide();
            $(".cst").hide();
            $(".gnc").hide();
            $(".prc").hide();
            $(".mar").hide();
            $(".cat").hide();
        });

        $("#dataModal").on('hidden.bs.modal', function () {
            $(".prod").show();
            $(".stk").show();
            $(".cst").show();
            $(".gnc").show();
            $(".prc").show();
            $(".mar").show();
            $(".cat").show();
        });
    });
});
</script>
</html>