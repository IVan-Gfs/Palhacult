<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap">
    <title>Adicionar Evento</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/addEvento.css">
</head>

<body>
    <header>
        <img id="capa" src="../images/Header.png" alt="Fundo">
        <nav id="menu">
            <div class="item">
                <a href="../index.html"><img id="logo" src="../images/Logo.png" alt="logo"></a>

                <p id="legend">A agenda cultural da região de Araçatuba</p>
            </div>
            <ul>
                <li><a href="">Artigos</a></li>
                <li><a href="">Notícias</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="../pages/addEvento.php">Adicionar evento</a></li>
                <li><img src="../images/Frame.png" alt="perfil"></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Preencha o formulário do evento</h1>
        <form action="../pages/cadEvento.php" method="post" id="formulario-evento" enctype="multipart/form-data">
            <div class="form-group full-width">
                <label for="ctitulo">Nome do evento:</label>
                <input type="text" name="titulo" id="ctitulo">
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <label for="scategoria">Categoria</label>
                    <select name="categoria" id="scategoria">
                        <option value="Festival">Festival</option>
                        <option value="Comemoracao">Comemoração</option>
                        <option value="Musica">Música</option>
                        <option value="Teatro">Teatro</option>
                        <option value="Esporte_e_jogos">Esporte e Jogos</option>
                        <option value="Cinema">Cinema</option>
                    </select>
                </div>

                <div class="form-group half-width">
                    <label for="cduracao">Duração(min):</label>
                    <input type="text" name="duracao" id="cduracao">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <label for="setaria">Faixa Etária</label>
                    <select name="etaria" id="setaria">
                        <option value="L">Livre</option>
                        <option value="A12">A12</option>
                        <option value="A16">A16</option>
                        <option value="A18">A18</option>
                    </select>
                </div>

                <div class="form-group half-width">
                    <label for="cmunicipio">Município:</label>
                   
                    <select name="municipio" id="cmunicipio">
                        <option value="">Selecione..</option>
                        <option value="Araçatuba">Araçatuba</option>
                        <option value="Araraquara">Araraquara</option>
                        <option value="Birigui">Birigui</option>
                        <option value="Buritama">Buritama</option>
                        <option value="Clementina">Clementina</option>
                        <option value="Penápolis">Penápolis</option>
                    </select>
                </div>
            </div>

            <div class="form-group full-width">
                <label for="cendereco">Endereço:</label>
                <input type="text" name="endereco" id="cendereco">
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <label for="smodalidade">Modalidade</label>
                    <select name="modalidade" id="smodalidade">
                        <option value="comum">Presencial</option>
                        <option value="destacado">Online</option>
                    </select>
                </div>

                <div class="form-group half-width">
                    <label for="stipo">Tipo de evento</label>
                    <select name="tipo" id="stipo">
                        <option value="Gratuito">Entrada gratuita</option>
                        <option value="beneficente">Entrada mediante doação</option>
                        <option value="pago">Entrada paga</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <label for="cdata">Data</label>
                    <input type="date" name="data" id="cdata">
                </div>

                <div class="form-group half-width">
                    <label for="chorario">Horário</label>
                    <input type="time" name="horario" id="chorario">
                </div>
            </div>

            <div class="form-group full-width">
                <label for="atext">Descrição do evento:</label>
                <textarea name="text" id="atext"></textarea>
            </div>

            <div class="form-group full-width">
                <label for="cimg">Imagem de capa:</label>
                <div class="file-upload-wrapper">
                    <input type="file" name="Imagem" id="cimg">
                    <label for="cimg">Escolher arquivo</label>
                </div>
            </div>

            <div class="form-group full-width">
                <button type="submit" id="badicionar">ADICIONAR EVENTO</button>
            </div>
        </form>
    </main>
</body>

</html>