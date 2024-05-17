<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coletar os dados do formulário
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // validar os dados do formulário
    // ...

    // enviar o e-mail
    // ...

    // redirecionar para uma página de confirmação
    header("Location: confirmation.php");
    exit;
}
?>

<!-- código HTML do formulário -->
<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-group">
            <div class="input-box">
                <label for="firstname">Primeiro Nome</label>
                <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
            </div>

            <div class="input-box">
                <label for="lastname">Sobrenome</label>
                <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
            </div>

            <div class="input-box">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="input-box">
                <label for="number">Celular</label>
                <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
            </div>

            <div class="input-box">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
            </div>

            <div class="input-box">
                <label for="confirmPassword">Confirme sua Senha</label>
                <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
            </div>

            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
