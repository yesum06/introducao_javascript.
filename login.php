<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main>
         <button id = "btn-tema">🌙: Ativar Tema Noturno</button>
    
        <section class="container-form">
            <h1>Login</h1>
            <form>
                <div class="form-group">
                        <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Digite seu E-mail" required>
                          </div>

                           <div class = "form-row">
                                    <div style = "margin-bottom: 20px;">
                                        <label for="senha">Senha</label>
                                    
                                        <input type="password" id="senha-login" placeholder="Digite sua senha" required>
                                        <span id = "icone-olho" style="cursor: pointer; margin-left: -31px;">👁️ </span>

                                    </div>
                          </div> 
                            <div class="form-group">
                                <button type="submit" id="botao-entrar"> Entrar</button>
                           </div>          
                    </div>
                      
              </div>
          </form>     
     </section>
  </main>     
        
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
        // 1. Pega o id do HTML
        const inputSenha = document.getElementById('senha-login');
        const iconeOlho = document.getElementById('icone-olho');

        // 2. Adiciona o evento de clique ao ícone do olho
        iconeOlho.addEventListener('click', function() {

        // Cria a lógica para alternar o tipo do input entre "password" e "text"
        if (inputSenha.type === 'password') {
            inputSenha.type = 'text'; // Mostra a senha
            iconeOlho.textContent = '🙈'; // Muda o ícone para indicar que a senha está visível
        } else {
            inputSenha.type = 'password'; // Esconde a senha
            iconeOlho.textContent = '👁️'; // Muda o ícone para indicar que a senha está oculta
        }
        });

   </script>     
</body>
</html>