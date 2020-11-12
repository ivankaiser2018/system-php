<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet"  href="css/cadastrar-css.css">
    </head>


    <img src="img/seta-curva.png">  <a id="page"href="index.php"> Pagina Inicial</a>



    <div id="corpo-form">

        <form   method="POST"  action="dados_formularios.php" >
            <h1 id="h1"> Cadastrar </h1>
            <input type="text"  name="nome"placeholder="Nome Completo">
            <input type="tel"  name="email"placeholder="Telefone">
            <input type="email"  name="email"placeholder="Email">
            <input type="password"  name="senha"placeholder="Senha">
            <input type="password"  name="confirmarSenha"placeholder="ConfirmarSenha">
            <input type="submit"  value="Cadastrar">



        </form>

    </div>









</body>
</html>