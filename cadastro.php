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
    <div class="register-container">
        <!-- Lado esquerdo - Branding corporativo -->
        <div class="brand-section">
            <div class="brand-content">
                <div class="logo">
                    <div class="logo-icon"></div>
                    <h1>CORPORATIVO</h1>
                </div>
                <div class="brand-text">
                    <h2>Junte-se à Nossa Plataforma</h2>
                    <p>Crie sua conta corporativa e tenha acesso a ferramentas avançadas de gestão empresarial.</p>
                </div>
                <div class="benefits">
                    <div class="benefit-item">
                        <span class="benefit-icon">✓</span>
                        <span>Acesso completo ao sistema</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">✓</span>
                        <span>Suporte técnico especializado</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">✓</span>
                        <span>Relatórios personalizados</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lado direito - Formulário de cadastro -->
        <div class="form-section">
            <div class="form-container">
                <div class="form-header">
                    <h2>Criar Conta Corporativa</h2>
                    <p>Preencha os dados para solicitar acesso</p>
                </div>
                
                <form class="register-form">
                    <div class="input-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="email">Email Corporativo</label>
                        <input type="email" id="email" name="email" placeholder="usuario@empresa.com" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="company">Empresa</label>
                        <input type="text" id="company" name="company" placeholder="Nome da empresa" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="confirm-password">Confirmar Senha</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirme sua senha" required>
                    </div>
                    
                    <div class="checkbox-group">
                        <label class="checkbox-container">
                            <input type="checkbox" id="terms" name="terms" required>
                            <span class="checkmark"></span>
                            Aceito os <a href="#" class="terms-link">termos de uso</a> e <a href="#" class="terms-link">política de privacidade</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-register">Solicitar Cadastro</button>
                </form>
                
                <div class="form-footer">
                    <p>Já possui conta? <a href="index.php" class="login-link">Fazer login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
