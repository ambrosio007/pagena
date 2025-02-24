<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="stylle.css"></script>
    <link rel="stylesheet" href="stylle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="fun.js"></script>
    <title>Document</title>
</head>

<body class="cad">

    <header class="header">

    <nav class="nav">

    <i class="fa-solid fa-dumbbell" id="nav-log">Lab 7</i>

    <button class="hamburger"></button>

    <ul class="nav-list">

        <li class="nav-item">
            <a href="#home">Inicio</a>
        </li>

        <li class="nav-item">
            <a href="#sobre">Sobre</a>
        </li>

        <li class="nav-item">
            <a href="#projetos">Projetos</a>
        </li>

        <li class="nav-item">
            <a href="#contato">Contato</a>
        </li>

    </ul>

    <h1 class="date-h" id="data_hora"></h1>

    </nav>

    </header>

    <main>

    <div class="container_resul">
        <form action="form_fun.php" method="POST">
            <h1>Cadastre-se</h1>
            <p>Preencha todos os campos</p>

            <div class="inp-single">
                <input type="text" class="inp" name="nome" id="id_name" autocomplete="off" required>
                <label for="id_name">Nome completo</label>
                </div>

            <div class="inp-single">
                <input type="number" class="inp" name="num_tel" id="id_num" autocomplete="off" required>
                <label for="id_num">Número para contato</label>
            </div>

            <input type="date" class="inp_dma" name="dma" id="id_dma" required>
            
            <div class="inp-single">
                <input type="email" class="inp" name="email" id="id_email" autocomplete="off" required>
                <label for="id_email">E-mail</label>
            </div>

            <div class="inp-single">
                <input type="password" class="inp" name="senha" id="id_senha" autocomplete="off" required>
                <label for="id_senha">Senha</label>
            </div> 

                <input type="file" name="file" class="btn_arq" >
                <br><br>
                <input type="submit" class="btn_sub" name="sub_env">
            </div>

            <div class="date-h">
            
            </div>
    </main>



        </form>
    </div>

</body>
</html>