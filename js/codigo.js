
$(function() {

    $(".reg_producto .btn_mostrar").click(function(e) {
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();

        location.href = "mostrar_producto.php?codprod="+codprod;
    });

    $(".reg_producto .btn_editar").click(function(e){
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();

        location.href = "editar_producto.php?codprod="+codprod;
    })

    $(".reg_producto .btn_borrar").click(function(e) {
        let codprod =  $(this).closest(".reg_producto").children(".codprod").text();
        let prod =  $(this).closest(".reg_producto").children(".prod").text();

        $("#md_borrar .lbl_codprod").text(codprod);
        $("#md_borrar .lbl_prod").text(prod);

        $("#md_borrar .btn_borrar").attr("href","../controller/ctr_borrar_prod.php?cod_prod="+codprod);
        
        $("#md_borrar").modal("show");
    })


    $("#frm_consultar_prod #txt_codprod").focusout(function(e){
        // alert("hola");
        e.preventDefault();

        let codprod = $(this).val();

        if (codprod != "") {
            $.ajax({
                url:"../controller/ctr_consultar_prod.php",
                type: "POST",
                data: {cod_prod: codprod},
                success: function(rpta) {
                    let rp = JSON.parse(rpta);
                    console.log("Respuesta:",rpta);

                    if(rp) {
                        $(".prod").html(rp.producto);
                        $(".stk").html(rp.stock_disponible);
                        $(".cst").html("S/" + rp.costo);
                    } else {
                        alert("El codigo " + codprod + "no existe");

                        $("#txt_codprod").val("");

                        let vacio = "&nbsp;";

                        $(".prod").html(vacio);
                        $(".stk").html(vacio);
                        $(".cst").html(vacio);

                        $("#txt_codprod").focus();
                    }
                }
            });
        }
    });

});

