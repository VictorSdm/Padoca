<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/cadastre-se.css">
    <title>Cadastre-se</title>
    <link rel="shortcut icon" href="../padoca/Imagens/icons8-bread-50.png">
    <style>
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
    
<body>

    <div class="container">
        
        <div class="form-image">
            <img src="Imagens/pão.svg">
        </div>
        <div class="form">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se na Padoca</h1>
                </div>
            </div>
            <form action="form.php" method="post">
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                        <small>Formato: 000.000.000-00</small>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Continuar</button>
                </div>
                <br> 
                <div class="form-check">
                    <input type="checkbox" value="" id="invalidCheck" required>
                    <label for="invalidCheck">
                      concorda com os 
                      <a href="termosdeusos.html">termos de usos</a>
                    </label>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="login"> 
                    <h4>Já tem uma conta?
                        <a href="login.php">Entrar</a>
                    </h4>
                </div>
            </form>
        </div>
    </div>

    <!-- O Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalMessage"></p>
        </div>
    </div>

    <script>
        document.getElementById('cpf').addEventListener('input', function(event) {
            var input = event.target;
            var value = input.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
            var formattedValue = '';

            if (value.length > 0) {
                formattedValue += value.substring(0, 3);
                if (value.length >= 4) {
                    formattedValue += '.' + value.substring(3, 6);
                }
                if (value.length >= 7) {
                    formattedValue += '.' + value.substring(6, 9);
                }
                if (value.length >= 10) {
                    formattedValue += '-' + value.substring(9, 11);
                }
            }

            input.value = formattedValue;
        });

        // Obter o modal
        var modal = document.getElementById("modal");

        // Obter o elemento <span> que fecha o modal
        var span = document.getElementsByClassName("close")[0];

        // Quando o usuário clica em <span> (x), fecha o modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Quando o usuário clica em qualquer lugar fora do modal, fecha-o
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Verificar se há uma mensagem de sucesso ou erro
        <?php if (isset($_GET['error'])): ?>
            var errorMessage = "<?php echo htmlspecialchars($_GET['error']); ?>";
            document.getElementById('modalMessage').innerText = errorMessage;
            document.getElementById('modalMessage').classList.add('error');
            modal.style.display = "block";
        <?php elseif (isset($_GET['success'])): ?>
            var successMessage = "<?php echo htmlspecialchars($_GET['success']); ?>";
            document.getElementById('modalMessage').innerText = successMessage;
            document.getElementById('modalMessage').classList.add('success');
            modal.style.display = "block";
            setTimeout(function() {
                window.location.href = 'login.php'; // Substitua pela página de destino
            }, 2000); // Redireciona após 2 segundos
        <?php endif; ?>
    </script>

</body>

</html>
