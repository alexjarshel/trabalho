<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script> <!-- Caso conflito do script, baixar css próprio-->

    <link rel="stylesheet" href="styles.css"> <!-- Ligar CSS caminho relativo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Cadastro</title>
</head>
<body class="bg-[#150E2B]">

    <div class="flex justify-center items-center h-[100vh]">
        <div class="bg-[#241847] p-10 flex flex-col items-center rounded">

            <div class="logo-title">Math Solver</div>

            <div class="flex items-center justify-center h-full">
                <form name="form-login" class="login-form flex flex-col gap-4 items-center">
                    <input type="text" placeholder="E-mail">
                    <input type="password" placeholder="Senha">
                    <input type="password" placeholder="Confirmar senha">
                    <button onsubmit="" class="card bg-[#150E2B] text-white w-fit">Cadastro</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>