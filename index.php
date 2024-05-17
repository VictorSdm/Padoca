<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Padoca</title>
    <link rel="shortcut icon" href="../padoca/Imagens/icons8-bread-50.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/index.css">
    <style>
        /* Estilo para ajustar o tamanho do card à altura da imagem */
        .image-card {
            height: auto;
            max-height: 100%;
            border-radius: 0;
        }
    </style>
</head>
<body>

<div class="mh-auto" style="height: 53px;"></div> <!--Espaçamento-->

<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-lg p-3 mb-5 bg-white rounded"> <!--Barra Superior-->
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="index.php">Padoca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="termosdeusos.html">Termos</a>
                </li>
              
            </ul>
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#notifications">
                Notificações <span class="badge text-bg-success">3</span>
            </button>
            <div class="mw-auto" style="width: 7px;"></div>
            <a class="btn btn-outline-success" href="login.php">Login</a>
            <div class="mw-auto" style="width: 7px;"></div>
            <a class="btn btn-outline-success" href="cadastre-se.php">Cadastre-se</a>
        </div>
    </div>
</nav>

<!--Aquela mensagem de login que aparece-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div class="mh-auto" style="height: 10px;"></div>
                <a href="Login.html" class="btn btn-outline-success">Esqueci a senha</a>
            </div>
            <div class="modal-footer">
                <a href="Cadastre-se.php" class="btn btn-outline-success">Cadastre-se</a>
                <a href="login.php" class="btn btn-outline-success">Entrar</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="notifications" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Notificações</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="modal-dialog">Agora nós temos a área de suporte ao usuário</p>
                <p class="modal-dialog">Você pode conferir quem são os criadores na aba Criadores</p>
                <p class="modal-dialog">Faça seu login ou cadastro para conferir suas informações</p>
            </div>
            <div class="modal-footer">
                <!--Fundo onde tá os botões no outro-->
            </div>
        </div>
    </div>
</div>

<div class="card mx-auto border-success border-bottom image-card" style="width: 100%;"> <!--Card inicial grande-->
    <img src="Imagens/padoca2.jpeg" class="card-img img-fluid" alt="...">
    <div class="card-img-overlay">
    </div>
</div>

<div class="mh-auto" style="height: 30px;"></div> <!--Espaçamento-->

<div class="card-group border-success mb-3 mx-auto" style="width: 96%"> <!--Grupo de Cards que aparecem com imagem-->
    <div class="card border-success mb-3"> <!--Card 1-->
        <div class="card-body">
            <h5 class="card-title">Facilidade</h5>
            <p class="card-text">Muito mais fácil para gerenciar seus produtos, com a ferramenta amiga dos padeiros, tá esperando o que? faça o seu cadastro também na Padoca para ter todos esses privilegios gratuitamente.</p>
            <p class="card-text"><small class="text-body-secondary">Para todos os usuarios</small></p>
            <img src="Imagens/facil.png" class="card-img-bottom align-center" alt="...">
        </div>
    </div>
    <div class="card border-success mb-3"> <!--Card 2-->
        <div class="card-body">
            <h5 class="card-title">Confiança</h5>
            <p class="card-text">Projeto feito para poder ter a confiança de todos a todo momento, sempre mantendo suas informações apenas com você e nunca as compartilhando com ninguem para obter a sua confiança em nós.</p>
            <p class="card-text"><small class="text-body-secondary">Sempre confiável</small></p>
            <img src="Imagens/confianca.png" class="card-img-bottom align-center" alt="...">
        </div>
    </div>
    <div class="card border-success mb-3"> <!--Card 3-->
        <div class="card-body">
            <h5 class="card-title">Velocidade</h5>
            <p class="card-text">Focando para sempre obter o melhor desempenho para acompanhar o seu crescimento de perto, e sempre eficaz e rapido para poder fazer seu gerenciamento do dia a dia.</p>
            <p class="card-text"><small class="text-body-secondary">Melhor desempenho</small></p>
            <img src="Imagens/pngwing.com.png" class="card-img-bottom align-center" alt="...">
        </div>
    </div>
</div>

<div class="mh-auto" style="height: 30px;"></div> <!--Espaçamento-->

<div class="card text-center mx-auto" style="width: 96%;"> <!--Area de destaques-->
    <div class="card-header">
        Destaque
    </div>
    <div class="card-body">
        <p class="card-text text-center">Agora temos uma aba para acessar os termos de usos.</p>
        <a href="termosdeusos.html" class="btn btn-outline-success">Visitar</a>
    </div>
    <div class="card-footer text-muted">
        29/04/2024
    </div>
</div>

<div class="mh-auto" style="height: 30px;"></div> <!--Espaçamento-->

<div class="card text-center mx-auto" style="width: 96%;"> <!--Area de destaques-->
    <div class="card-header">
        Precisa de ajuda?
    </div>
    <div class="card-body">
        <button class="btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Suporte ao usuario</button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Aba de Suporte ao usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
          
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Minha senha não está funcionando.
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Entre contato com o suporte do site</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Não está carregando a página
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Limpe a memoria cache </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                O site não responde.
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Verifique sua conexão</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        Caso não tenha conseguido a resposta contate um de nós na área Criadores
    </div>
</div>

<div class="mh-auto" style="height: 30px;"></div> <!--Espaçamento-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
