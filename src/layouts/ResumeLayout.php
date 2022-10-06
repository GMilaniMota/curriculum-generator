<?php

    $data = $_SESSION['data'];
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo | <?php echo $data->nome; ?></title>
        <link rel="stylesheet" type="text/css" href="/public/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="container">

            <!-- Lado Esquerdo do currículo. -->

            <div class="left-Side"> <!-- Abre div lado esquerdo. -->
                <div class="profileText">
                    <div class="imgBx">
                        <img src="<?php echo "/public/uploads$data->picture" ?>" width="300" height="250" width="180">
                    </div>
                    <h2><?php echo $data->nome ?><br><span><?php echo $data->email ?></span></h2>
                </div>

                <!-- Parte de contato. -->

                <div class="contactInfo">
                    <h3 class="title">Contato</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            <span class="text"><?php echo $data->telefone; ?></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            <span class="text"> <?php echo $data->email;?></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i>
                            </span>
                            <span class="text">vitorbelo.github.io/Portfolio-VitorBelo/</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i>
                            </span>
                            <span class="text">linkedin.com/in/vitor-belo</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-github" aria-hidden="true"></i>
                            </span>
                            <span class="text">github.com/vitorbelo</span>
                        </li>
                    </ul>
                </div>

                <!-- Fim da parte de contato. -->

                <!-- Parte de educação. -->

                <div class="contactInfo education">
                    <h3 class="title">Formação acadêmica:</h3>
                    <ul>
                        <?php foreach($data->graduacoes as $graduacao) { ?>
                        <li>
                            <h5><?php echo $graduacao->data_inicial . ' - '. $graduacao->data_final ?></h5>
                            <h4><?php echo $graduacao->nome?></h4>
                            <h4><?php echo $graducao->instituicao?></h4>
                        </li>
                        <?php }?>
                    </ul>
                </div>

                <!-- Fim da parte de educação.  -->

                <!-- Parte de linguagem. -->

            </div> <!-- Fecha div lado esquerdo. -->

            <!-- Fim da parte de linguagem. -->

            <!-- Fim do lado esquerdo. -->

            <!-- Lado direito do currículo. -->

            <div class="right-Side"> <!-- Abre div lado direito. -->
                <div class="about">
                    <h2 class="title2">Sobre mim</h2>
                    <p>
                    <?php echo $data->sobre ?>
                    </p>
                </div>
                <div class="about">
                    <h2 class="title2">Experiências profissionais</h2>
                    <div class="box">
                        <?php foreach($data->exeperiencias as $experiencia) ?>
                        <div class="tempo">
                            <h5><?php echo $experiencia->data_inicial . ' - ' . $experiencia->data_final ?></h5>
                            <h5><?php echo $experiencia->empresa ?></h5>
                        </div>
                        <div class="text">
                            <h4><?php echo $experiencia->cargo ?></h4>
                            <p> <?php echo $experiencia->atribuicoes ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!-- Fecha div lado direito. -->


    </body>
</html>