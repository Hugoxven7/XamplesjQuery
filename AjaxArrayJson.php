<?php

?>

<script type="text/JavaScript">

    $(document).ready(function()
    {
        /* CARGAR DATOS PERSONAL DE EQUIPO */
        $('#bttsendall').click(function()
        {
            /* DECALRACIÓN VARIABLES VACÍAS */
            var i = 0;
            var name = '';
            var idperso = '';

            /* DECLARACIÓN VARIABLES ARRAY */
            var nombres = new Array();
            var ids = new Array();

            /* CONTADOR DE INFROMACIÓN INTEGRADA DENTRO DE DIV ESPECIFICO */
            $('#divgroup').find('.input-group').find('#dividperso').find('#idperso').each(function()
            {
                // idperso = $(this).html();
                idperso = $(this).val();

                ids[i] = idperso;
                alert(idperso+' VARIABLE '+i + ' ID: '+ ids[i]);
                i = i + 1;      
            });
            
            /* EJEMPLO DE LLAMADO DE FUNCIÓN MODIFICADA -- ANULAR LOS PARAMETROS FALTANTES */
            AjaxPedido(ids, precios, cant, date, time, identi, folio, total, tipopago;
        });
    });

</script>

<script type="text/JavaScript">
    function AjaxPedido(ids, precios, cant, date, time, identi, folio, total, tipopago)
    {
        $.ajax({
            type: 'POST', 
            datatype: 'json',
            url:'../CostanzoPHP/POSTPedidosManPed.php',
            data:{'ident' : ids, 'precios' : precios, 'cantidad' : cant, 'date' : date, 'time' : time, 'idfranq' : identi, 'folio' : folio, 'total' : total, 'tipopago' : tipopago},
            error: function()
            {
                alert("ERROR AJAX-PID SE REQUIERE REVISIÓN!");
            },
            success: function(data) 
            {
                $('.divpedidos').html(data);
                      
            }
            });
    }
</script>