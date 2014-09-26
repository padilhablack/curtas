<?php ?>
<!DOCTYPE html>
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
                    $.post("classes/recebe_form.php",
                            {
                                ra: $("#ra").val(),
                                genero: $("#genero").val(),
                                sinopse: $("#sinopse").val(),
                                tematica: $("#tematica").val(),
                                ficha: $("#ficha").val(),
                                email: $("#email").val(),
                                telefone: $("#telefone").val(),
                                video: $("#video").val()
                            },
                    function(data, status) {
                        $('#resposta').html("Data: " + data + "\nStatus: " + status);
                    });
                });
            });</script>
        <form method="post"action="" id="contact-form">
            <label for="">RA:</label>
            <input type="text" id="ra" name="ra" class="ra"  />
            <br>
            <label for="">Gênero:</label>
            <input type="text"  id="genero" name="genero" />  
            <br>
            <label for="">Sinopse:</label>
            <input type="text" id="sinopse" name="sinopse" class="sinopse"  />
            <br>
            <label for="">Temática:</label>
            <input type="text"  id="tematica" name="tematica" />  
            <br>
            <label for="">Ficha Técnica:</label>
            <input type="text" id="ficha" name="ficha" class="ficha"  />
            <br>
            <label for="">Email:</label>
            <input type="text"  id="email" name="email" />  
            <br>
            <label for="">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="telefone"  />
            <br>
           <label for="">Link Vídeo:</label>
            <input type="text" id="video" name="video" class="video"  />
            <br>
            <input type="button" id="enviar" value="enviar" />
        </form>

        <div id="resposta"></div>
        <script src="js/valida_cpf.js" charset="utf-8"></script>
        <script src="js/jquery-1.7.1.min.js" charset="utf-8"></script>
        <script src="js/jquery.validate.min.js" charset="utf-8"></script>
        <script src="js/script.js" charset="utf-8"></script>
        <script src="js/jquery.maskedinput.js" charset="utf-8"></script>
    </body>
</html>