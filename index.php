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
    <div class="login-container">
        <!-- Lado esquerdo - Branding corporativo -->
        <div class="brand-section">
            <div class="brand-content">
                <div class="logo">
                    <div class="logo-icon"></div>
                    <h1>CORPORATIVO</h1>
                </div>
                <div class="brand-text">
                    <h2>Sistema de Gestão Empresarial</h2>
                    <p>Plataforma integrada para otimizar processos e impulsionar resultados corporativos com segurança e eficiência.</p>
                </div>
                <div class="features">
                    <div class="feature-item">
                        <span class="feature-icon">🔒</span>
                        <span>Segurança Avançada</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">📊</span>
                        <span>Analytics em Tempo Real</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">⚡</span>
                        <span>Performance Otimizada</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lado direito - Formulário de login -->
        <div class="form-section">
            <div class="form-container">
                <div class="form-header">
                    <h2>Acesso ao Sistema</h2>
                    <p>Entre com suas credenciais corporativas</p>
                </div>
                
                <form class="login-form">
                    <div class="input-group">
                        <label for="email">Email Corporativo</label>
                        <input type="email" id="email" name="email" placeholder="usuario@empresa.com" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    
                    <div class="form-options">
                        <label class="checkbox-container">
                            <input type="checkbox" name="lembrar">
                            <span class="checkmark"></span>
                            Manter conectado
                        </label>
                        <a href="#" class="forgot-link">Esqueceu a senha?</a>
                    </div>
                    
                    <button type="submit" class="btn-login">Entrar no Sistema</button>
                </form>
                
                <div class="form-footer">
                    <p>Não possui acesso? <a href="cadastro.php" class="register-link">Solicitar Cadastro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
