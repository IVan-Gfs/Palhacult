<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/eventos.css">
    <title>Eventos</title>
</head>

<body>

    <header>
        <img id="capa" src="../images/Header.png" alt="Fundo" />
        <nav id="menu">
            <div class="item">
                <img id="logo" src="../images/Logo.png" alt="logo" />
                <p id="legend">A agenda cultural da região de Araçatuba</p>
            </div>

            <ul>
                <li><a href="">Artigos</a></li>
                <li><a href="">Notícias</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Adcionar evento</a></li>
                <li><img src="../images/Frame.png" alt="perfil" /></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="search">
            <h1>Procure por um evento</h1>
            <form action="" method="get">
                <label for="nome" class="nome">Nome do evento <br />
                    <input type="text" name="nome" />
                    <button type="submit" class="search-btn">
                        <img src="../images/lupa.png" alt="lupa-pesquisa" style="width: 20px;">
                    </button>

                </label>

                <label for="cat">Categoria <br />
                    <select name="categoria" id="cat">
                        <option value="teatro">Teatro</option>
                        <option value="jogos e esporte">Jogos e Esportes</option>
                        <option value="musica">Música</option>
                    </select>
                </label>

                <label for="loc">Localização <br />
                    <select name="loc" id="loc">
                        <option value="araraquara">Araçatuba</option>
                        <option value="aracatuba">Araraquara</option>
                        <option value="birigui">Birigui</option>
                        <option value="buritama">Buritama</option>
                        <option value="coroados">Coroados</option>
                        <option value="clementina">Clementina</option>
                    </select>
                </label>

                <label for="data" class="data">Data <br />
                    <input type="date" name="data" />
                </label>
            </form>
        </div>

        <div id="eventos">

        <?php
   

   include '../conn.php';

   $sql = "SELECT * FROM evento";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    
       // Exibir dados de cada linha
       while ($row = $result->fetch_assoc()) {

        $dataInicio = new DateTime($row['dataInicio']);
        $dataFim = $row['dataFim'] ? new DateTime($row['dataInicio']) : null;
        $dataI = $dataInicio->format('d/m/y');
        $dataF = $dataFim ? $dataFim->format('d/m/y') : '';
       
           echo   '<article>
                       <a href="./detalhes.html"><img src="'.$row["imgEvento"].'" alt="" /></a>

                       <a href="./detalhes.html">
                           <div class="titulo">'.$row["nome"].'</div>
                       </a>

                       <div class="localizacao">
                           <h4 class="cidade">'.$row["cidade"].'</h4>
                           <div class="circle"></div>
                           <h4 class="lugal">'.$row["localEvento"].'</h4>
                       </div>
                       <div class="infoBottom">
                           <div class="about">
                               <p class="data">'. ($dataFim ? $dataI . " e " . $dataF : $dataI) . '</p>
                               <p class="categoria">'.$row["categoria"].'</p>
                           </div>
                           <a href="detalhes.php?evento=' . $row['idEvento'] . '" class="detalhes">DETALHES</a>
                       </div>
                   </article>';
       }
   } else {
       echo "0 resultados";
   }

   ?>

        </div>
    </main>


    <footer></footer>
</body>

</html>
