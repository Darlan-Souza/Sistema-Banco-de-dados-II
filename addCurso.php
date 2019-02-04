<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Curso - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Cadastra Cursos
        </div>
                    <form action="cadastraCurso.php" method="POST">
                        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

            <tr>
                <td>
                    ID professor: <input type="number" name="id_professor">
                </td>
                <td>
                    Nome curso: <input type="text"  name="nome_curso">
                </td>
            <input type="hidden" name="id_registro" >

            </tr>

            <tr>
                <td>
                    Quantidade de alunos: <input type="number" name="qtd_alunos">
                </td>
                <td>
                    Valor da Mensalidade: <input type="number" name="mensalidade"  
                </td>
            </tr>

        </table><br><br>

                        <center><input type="submit" value="Registrar Curso"></center>
                    </form>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>
