<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{ margin:0; padding: 0;}
        /* visual do modo claro,padrão */
        body{
            background-color: #ffffff;
            color: #333;
            font-family: Arial, sans-serif;
            transition:0.5s;/* Deixa a troca de cor menos brusca, mais suave */
        }
        .modo-escuro{
            background-color: #1a1a1a;
            color: #f1f1f1;
        }
    </style>
    <title>noturno</title>
</head>
<body>
    <h1> Configurações do Sistema</h1>
    <p> Seja bem-vinda(o) ao painel de preferências.</p>

    <button id = "btn-tema">🌙: Ativar Tema Noturno</button>
    <script>
        // 1. O JS procura o botão na página usando o ID e guarda ele em uma variável
        let botao = document.getElementById("btn-tema");

        // 2. Adiciona o evento de clique ao botão, para que quando o usuário clicar, a função seja executada
        botao.addEventListener("click", function() {

            // 3. O JS pega o elemento body da página e acessa a lista de classes dele para alternar a classe "modo-escuro"
            // usa o toggle (alternar).
            // o toggle é inteligente: se a classe não existe, ele coloca. Se a classe já existe, ele tira.
            document.body.classList.toggle("modo-escuro");

            //verifica se o body AGORA contém a classe "modo-escuro" para atualizar o texto do botão de acordo com o tema ativo
            if(document.body.classList.contains("modo-escuro")) {
                // se tem, muda o texto para Modo Claro
                botao.innerHTML = "☀️: Ativar Tema Claro";
            } else {
                // se não tem, muda o texto para Modo Noturno
                botao.innerHTML = "🌙: Ativar Tema Noturno";
            }
        });
    </script>
    
</body>
</html>