<?php include('template/headerlogin.php'); ?>
<?php
// Conexão com o banco de dados
include 'connect.php';

// Inicia a sessão
session_start();

// Variável para armazenar mensagens de erro
$errorMessage = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $email = $_POST['user'] ?? '';
    $password = $_POST['passsword'] ?? '';

    // Valida se os campos não estão vazios
    if (empty($email) || empty($password)) {
        $errorMessage = "Por favor, preencha todos os campos.";
    } else {
        // Consulta o banco de dados para verificar o e-mail
        $sql = "SELECT * FROM usuarios WHERE email = ?";  
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Usuário encontrado no banco de dado
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['senha'])) {
                
                
                // Armazena o ID e o e-mail do usuário na sessão
                $_SESSION['id'] = $user['iduser'];  
                $_SESSION['email'] = $user['email'];  
                $_SESSION['nome'] = $user['nome']; 

                // Verifica o role para saber se o usuário é admin
              
                    // Se for usuário normal, redireciona para a página principal
                    $_SESSION['role'] = 'perfil';  
                    header("Location: index?venda=");  
                    exit();  }
        } else {
            $errorMessage = "Usuário não encontrado!";
        }

        $stmt->close();
    }
}

$conexao->close();
?>

<div class="form-signin w-100 m-auto" style="color: white;">
    <form method="post" method="post" action="login.php">
        <img class="mb-4 align-items-center" src="resources/IMG/user.png" alt="" width="72"
            height="57">
        <h1 class="h3 mb-3 fw-normal center">Bem vindo</h1>
        <?php echo $errorMessage;?>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="user" placeholder="name@example.com">
            <label for="floatingInput" style="color: black;">Usuário</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="passsword" placeholder="Password">
            <label for="floatingPassword" style="color: black;">Senha</label>
        </div>

        <!--<a href="register.html" class="btn btn-bd-primary">Registre-se</a>-->
        <button class="btn btn-success " type="submit">Entrar</button>
        
    </form>
</div>
<?php include('template/footerlogin.php'); ?>