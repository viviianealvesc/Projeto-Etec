<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec - Cantina</title>
    <!--- BOOTSTRAP --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background: #F5F5F5;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
        
        }
        
        a {
            padding: 10px;
            background: blue;
            text-decoration: none;
            border-radius: 10px;
            color: #fff;
            margin: 5px;
        }

        h1 {
            margin-top: 60px;
            font-size: 2rem;
        }

    </style>
</head>
<body>
<main class="borda">
    <div>
    <h1 align="center">BEM - VINDO (A) A CANTINA DA ETEC!</h1>
    <div class="container">
    <h2 align="center">Voce é</h2>
        <div class="box">
            <a class="btn btn-primary" href="login-aluno.php">Aluno (a)</a>
            <p>ou</p>
            <a class="btn btn-primary" href="../adm/login-adm.php">Adm</a>
        </div>
    </div>
    </div>
</main>
    
</body>
</html>