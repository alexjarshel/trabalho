<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script> <!-- Caso conflito do script, baixar css próprio-->

    <link rel="stylesheet" href="../styles.css"> <!-- Ligar CSS caminho relativo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Calculo Area</title>
</head>
<body class="bg-[#150E2B]">
    <header class="flex bg-[#241847] color-white">
        <div class="bordas w-full py-4 flex justify-between items-center">
            <div class="text-[2rem] text-white">Math Solver</div>
            <div class="flex gap-2">
                <a href="../login.php" class="text-white underline text-bold"> </a>
                <img src="../img\perfil.png" alt="" class="w-8 invert">
            </div>
        </div>
        
        
    </header>

    <main class="px-28 pt-20 w-full">
        <div class="bg-[#241847] w-full rounded">
            <div class="flex justify-center">
                <div class="title">Lançamentos</div>
            </div>
            <div class="flex flex-wrap">
                <!-- Conteudo padrão para os livros-->
                <a href ="area/quadrado.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">quadrado</div>
                    </div>
                </a>
                <!--fim Conteudo padrão para os livros-->
                <a href ="area/trapezio.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">trapezio</div>
                    </div>
                </a>
                <a href ="area/retangulo.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">retangulo</div>
                    </div>
                </a>
                <a href ="area/triangulo.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">triangulo</div>
                    </div>
                </a>
                <a href ="area/paralelogramo.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">paralelogramo</div>
                    </div>
                </a>
                <a href ="area/losangulo.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">losangulo</div>
                    </div>
                </a>
                <a href ="area/circulo.php" class="spotBox">
                    <div class="spot">
                        <img src="../img\calculo.jpg">
                        <div class="nome">circulo</div>
                    </div>
                </a>
                
            </div>
        </div>
    </main>
    
</body>
</html>

