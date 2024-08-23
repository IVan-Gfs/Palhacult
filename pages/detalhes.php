<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/detalhes.css">
    <title>Detalhes</title>
</head>

<body>
    <header>
        <img id="capa" src="../images/Header.png" alt="Fundo">
        <nav id="menu">

            <div class="item">
                <img id="logo" src="../images/Logo.png" alt="logo">
                <p id="legend">A agenda cultural da região de Araçatuba</p>
            </div>

            <ul>
                <li><a href="">Artigos</a></li>
                <li><a href="">Notícias</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Adcionar evento</a></li>
                <li><img src="../images/Frame.png" alt="perfil"></li>
            </ul>
        </nav>
    </header>
    <main>

    
        <?php
        include '../conn.php';


        if (isset($_GET['evento'])) {

            $id = intval($_GET['evento']);
            $sql = "SELECT * FROM evento WHERE idEvento = " . $id;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $dataInicio = new DateTime($row['dataInicio']);
                $dataFim = $row['dataFim'] ? new DateTime($row['dataInicio']) : null;
                $dataI = $dataInicio->format('d/m/y');
                $dataF = $dataFim ? $dataFim->format('d/m/y') : '';
                echo '<div id="catLoc">
                        <a href="./eventos.html"><p id="cat">'.$row["categoria"].'</p></a>
            
                        <div class="circle"></div>
                        <a href="./eventos.html"><p id="loc">'.$row["cidade"].'</p></a>
                      </div> 
                      <div id="container">
                      <div id="left">
                            <h2>'.$row["nome"].'</h2>
                            <div id="detalhes">
                                <p id="compartilhar">Compartilhar</p>
                                <div id="Icons">
                                    <img src="../images/iconFace.png" alt="facebook">
                                    <img src="../images/iconInsta.png" alt="instagram">
                                    <img src="../images/IconWhats.png" alt="whatsapp">
                                    <img src="../images/IconMail.png" alt="mail">
                                    <img src="../images/IconLink.png" alt="link">
                                </div>
                                <div class="divRow"></div>
                                <div id="duracao">Duração: <strong>'.$row["duracao"].'</strong></div>
                                <img src="../images/'.$row["classificacao"].'.png" alt="">
                                <div class="divRow"></div>
                                <h2><u>'.$row["cidade"].'</u></h2>
                                <div id="modalidade">
                                    <p>Presencial</p>
                                    <div class="circle" ></div>
                                    <p>'.$row["tipoEvento"].'</p>
                                </div>
                                <p id="Local"><strong>Local: </strong>'.$row["localEvento"].'</p>
                                <h4>Endereço: </h4>
                                <p>'.$row["endereco"].'</p>

                                <div class="divRow"></div>
                                <p id="data">'. substr($dataI, 0, -3).' e '.substr($dataF, 0, -3).'</p>
                                <p id="hora">Sexta-feira e sábado, às '.substr($row["horario"], 0, -3) .'</p>
                                <a href="./eventos.html"><img src="../images/backSeta.png" alt="voltar" id="seta"></a>
                                
                            </div>

                        </div>
                        <div id="right">
                            <img src="../images/CapaEvento2.png" alt="Imagem" width="100%">
                            <p id="descricao">
                             '.$row['descricao'].'
                            </p>

                     </div>
                    </div>';
            }
        }


        ?>
    </main>
</body>

</html>