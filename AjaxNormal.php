<?php

?>
<script type="text/javaScript">

    function formplant(idtick, dateup, quien, lugar, afec, title, descrip, equip)
    {
        $.ajax({
            type: 'POST',
            datatype: 'html',
            url: 'jQuery/Ajaxform8DSE2.php',
            data: 'idtick='+idtick + '&dateup='+dateup + '&quien='+quien + '&lugar='+lugar + '&afec='+afec + '&title='+title + '&descrip='+descrip + '&idequip='+equip,
            success: function(resul)
            {
                $('.divreturn').html(resul);
                // clean();
            }
        });

        function clean()
        {
            document.getElementById('title').value = "";
            document.getElementById('lugar').value = "";
            document.getElementById('quien').value = "";
            document.getElementById('idtick').value = "";
            document.getElementById('dateup').value = "";
            document.getElementById('descrip').value = "";
            document.getElementById('afectados').value = "";
        }
    }
    
</script>
