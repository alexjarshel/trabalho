<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://cdn.tailwindcss.com"></script> <!-- Caso conflito do script, baixar css próprio-->

    <link rel="stylesheet" href="../../styles.css"> <!-- Ligar CSS caminho relativo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Area do Circulo</title>
</head>
<body class="bg-[#150E2B]">

<header class="flex bg-[#241847] color-white">
        <div class="bordas w-full py-4 flex justify-between items-center">
            <div class="text-[2rem] text-white"><a href="../../home.html">Math Solver</a></div>
            <div class="flex gap-2">
                <a href="login.php" class="text-white underline text-bold"> </a>
                <img src="img\../perfil.png" alt="" class="w-8 invert">
            </div>
        </div>
        
</header>

<h1 class="text-[2rem] text-white">Area do Circulo</h1>

    <form method="POST">

     <input type="text" name="circulo" placeholder="insira o raio">
     <input type="submit" value="calcular" >

    </form>

    <?php

    if(isset($_POST['circulo']))

        if(!empty($_POST['circulo'])){

            if(is_numeric($_POST['circulo'])){
                $resultado = $_POST['circulo'] * 3.1416;
            
                echo ("o resultado é ". $resultado);
            }
            else{
                 echo("insira um vaor valido");
            }
        }
        else{
            echo("insira um valor");
        }
    

    ?>

</body>

</html>