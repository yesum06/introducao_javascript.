<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <script>
        // 1. Pergunta ao usuário e guarda a resposta em uma variável
        let resposta = prompt(" Quantos usuários você deseja cadastrar?");
        // 2. Converte o texto do usuário para um número real
        let quantidade = Number(resposta);
        // 3. Cria um laço de repetição que roda a quantidade de vezes que o usuário informou
        for (let i = 1; i <= quantidade; i++) {

        // Mostra o processo apenas no F12 (Console do navegador)
        console.log("Processando os dados do usuário " + i + "....");
        }
        // 4. Mostra um aviso final na tela do usuário
        alert ("Pronto! Aperte F12 para ver o relatório completo no Console!");
    </script>
</body>
</html>