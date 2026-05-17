!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
</head>
<body>
    <script>
        // 1. Pergunta ao usuário e guarda a resposta em uma variável
        let resposta = prompt(" Quantas categorias você deseja cadastrar?");
        // 2. Converte o texto do usuário para um número real
        let quantidade = Number(resposta);
        // 3. Cria um laço de repetição que roda a quantidade de vezes que o usuário informou
        for (let i = 1; i <= quantidade; i++) {

        let nomecateg = prompt("Digite o nome da categoria " + ":");
          
        if (nomecateg == "") {
            console.log("Erro: O nome da categoria não pode ser vazio. Por favor, tente novamente.");
        } else {
            console.log("Categoria: " + nomecateg + " cadastrada com sucesso!");
        }
        }
        // 4. Mostra um aviso final na tela do usuário
        alert ("Finalizado! Verifique o log de cadastros no F12.");
    </script>
</body>
</html>