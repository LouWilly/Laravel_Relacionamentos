<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <form action="/cadastrar-produto" method=""POST>
        
        <label for="labelNome">Nome:</label>
        <input type="text" name="nome">
        <br>    
        <label for="labelValor">Valor:</label>
        <input type="text" name="valor">
        <br>    
        <label for="labelQtd">quantidade:</label>
        <input type="text" name="estoque">
        <br>    
        <button>Cadastrar</button>
    </form>
</body>
</html>