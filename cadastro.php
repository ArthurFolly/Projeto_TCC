<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Corporativo - Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <!-- Layout split-screen empresarial para cadastro -->
    <div class="container-cadastro">
        <!-- Lado esquerdo - Branding corporativo -->
        <div class="secao-marca-cadastro">
            <div class="conteudo-marca-cadastro">
                <div class="logotipo-cadastro">
                    <div class="icone-logo-cadastro"></div>
                    <h1>CORPORATIVO</h1>
                </div>
                <div class="texto-marca-cadastro">
                    <h2>Junte-se à Nossa Plataforma</h2>
                    <p>Crie sua conta corporativa e tenha acesso a ferramentas avançadas de gestão empresarial.</p>
                </div>
                <div class="beneficios">
                    <div class="item-beneficio">
                        <span class="icone-beneficio">✓</span>
                        <span>Acesso completo ao sistema</span>
                    </div>
                    <div class="item-beneficio">
                        <span class="icone-beneficio">✓</span>
                        <span>Suporte técnico especializado</span>
                    </div>
                    <div class="item-beneficio">
                        <span class="icone-beneficio">✓</span>
                        <span>Relatórios personalizados</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lado direito - Formulário de cadastro -->
        <div class="secao-formulario-cadastro">
            <div class="container-formulario-cadastro">
                <div class="cabecalho-formulario-cadastro">
                    <h2>Criar Conta Corporativa</h2>
                    <p>Preencha os dados para solicitar acesso</p>
                </div>
                
                <form class="formulario-cadastro">
                    <div class="grupo-input-cadastro">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                    </div>
                    
                    <div class="grupo-input-cadastro">
                        <label for="email">Email Corporativo</label>
                        <input type="email" id="email" name="email" placeholder="usuario@empresa.com" required>
                    </div>
                    
                    <div class="grupo-input-cadastro">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa" placeholder="Nome da empresa" required>
                    </div>
                    
                    <div class="grupo-input-cadastro">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Mínimo 8 caracteres" required>
                    </div>
                    
                    <div class="grupo-input-cadastro">
                        <label for="confirmar-senha">Confirmar Senha</label>
                        <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Confirme sua senha" required>
                    </div>
                    
                    <div class="grupo-checkbox">
                        <label class="container-checkbox-cadastro">
                            <input type="checkbox" id="termos" name="termos" required>
                            <span>Aceito os <a href="#" class="link-termos">termos de uso</a> e <a href="#" class="link-termos">política de privacidade</a></span>
                        </label>
                    </div>
                    
                    <button type="submit" class="botao-cadastrar">Solicitar Cadastro</button>
                </form>
                
                <div class="rodape-formulario-cadastro">
                    <p>Já possui conta? <a href="index.php" class="link-login">Fazer login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>