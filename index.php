<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Corporativo - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Layout split-screen empresarial -->
    <div class="container-login">
        <!-- Lado esquerdo - Branding corporativo -->
        <div class="secao-marca">
            <div class="conteudo-marca">
                <div class="logotipo">
                    <div class="icone-logo"></div>
                    <h1>CORPORATIVO</h1>
                </div>
                <div class="texto-marca">
                    <h2>Sistema de Gestão Empresarial</h2>
                    <p>Plataforma integrada para otimizar processos e impulsionar resultados corporativos com segurança e eficiência.</p>
                </div>
                <div class="recursos">
                    <div class="item-recurso">
                        <span class="icone-recurso">🔒</span>
                        <span>Segurança Avançada</span>
                    </div>
                    <div class="item-recurso">
                        <span class="icone-recurso">📊</span>
                        <span>Analytics em Tempo Real</span>
                    </div>
                    <div class="item-recurso">
                        <span class="icone-recurso">⚡</span>
                        <span>Performance Otimizada</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lado direito - Formulário de login -->
        <div class="secao-formulario">
            <div class="container-formulario">
                <div class="cabecalho-formulario">
                    <h2>Acesso ao Sistema</h2>
                    <p>Entre com suas credenciais corporativas</p>
                </div>
                
                <form class="formulario-login">
                    <div class="grupo-input">
                        <label for="email">Email Corporativo</label>
                        <input type="email" id="email" name="email" placeholder="usuario@empresa.com" required>
                    </div>
                    
                    <div class="grupo-input">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    
                    <div class="opcoes-formulario">
                        <label class="container-checkbox">
                            <input type="checkbox" name="lembrar">
                            <span>Manter conectado</span>
                        </label>
                        <a href="#" class="link-esqueci">Esqueceu a senha?</a>
                    </div>
                    
                    <button type="submit" class="botao-entrar">Entrar no Sistema</button>
                </form>
                
                <div class="rodape-formulario">
                    <p>Não possui acesso? <a href="cadastro.php" class="link-cadastro">Solicitar Cadastro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>