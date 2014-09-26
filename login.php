<!DOCTYPE html>

<?php
?>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <link rel="stylesheet" href="" />
        <meta charset="utf-8">
        <title>jQuery Example</title>
        <script>
        </script>
    </head>
    <body>
        <script>
            $(document).ready(function() {
                $("#enviar").click(function() {
                    $.post('classes/recebe_login.php',
                            {
                                ticket: $('#ticket').val(),
                            },
                    function(data, status) {
                        $('#resposta').html("Data: " + data + "\nStatus: " + status);
                    });
                    
                });
            })
        </script>
        <form name="login" action="" method="POST">
            <label for="login">
                Entre com seu ticket:
            </label>
            <input type="text" name="ticket" id="ticket" />
            <input type="button" value="enviar" id="enviar" />
        </form>
       <div id="resposta"></div>
    </body>
</html>