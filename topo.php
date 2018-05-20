<?php 
    session_start();
    include_once 'config.php';
    function __autoload($classe){
        require_once 'classes/'.$classe.'.class.php';
    }
    BD::conn();
    $site = new site();
    $carrinho = new Carrinho();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html" charset="utf-8" />
        <link href="<?php echo PATH;?>/css/style.css" rel="stylesheet" media="screen" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark" rel="stylesheet">
        <script src='<?php echo PATH;?>/js/jquery.min.js'></script>
        <script src='<?php echo PATH;?>/js/plugins.js'></script>
        <script src='<?php echo PATH;?>/js/sly.js'></script>
        <script src="<?php echo PATH;?>/js/index.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo PATH;?>/js/jquery.simpleGal.js"></script>
        <script src="<?php echo PATH;?>/js/slide.js"></script>
        <script src="<?php echo PATH;?>/js/produtos.js"></script>
    </head>
    <body onLoad="comeco();regular();temp();">
<div id ="topo_total"> <!-- Inicio da div topo, vai em todas as paginas, na rolagem aparece um botão para abrir o menu -->
            <div id="topo">
                <a href="<?php echo PATH;?>" title="Xô-vê eventos">
                    <img src="<?php echo PATH;?>/imagens/xove.png" border="0" alt="" id="logo" title="Xô-vê eventos"/>
                </a>

                <div id="topo_carrinho"> <!-- Começo da div de login e cadastro-->
                    <a href="carrinho">
                    <button id="car">
                        <img src="<?php echo PATH;?>/imagens/carrinho.png" border="0" alt="" id="carrinho_img"/>
                        Meu carrinho
                    </button>
                    </a>
                </div><!-- Fim da div carrinho-->

                <div id="topo_login"> <!-- Começo da div carrinho-->
                    <img src="<?php echo PATH;?>/imagens/user.png" border="0" alt="" id="user_img"/>
                    <span><a href="#" id="link_entre">Entre</a><a href="#" id="link_cadastro"> ou cadastre-se</a></span>               
                </div> <!-- Fim da div de login e cadastro-->
                <div id="busca"><!-- Começo do buscador-->
                    <form action="<?php echo PATH;?>" method="GET" class="search" enctype="multipart/form-data">
                            <input type="text" name="s" value="" placeholder="O que deseja procurar?"/>
                            <button type="submit">Buscar</button>
                    </form>					
                </div> <!-- Fim do buscador-->
                
                <div id="acima_busca"> <!-- Começo da div acima da busca-->
                    <span id="tel">Telefone: (75)99955-0195</span><span><a href="#" id="ajuda_link">Atendimento ao cliente</a></span>
                </div> <!-- Fim da div acima da busca-->
                <div id="menu_top">
                    <img src="<?php echo PATH;?>/imagens/menu.png">
                    <ul id="menu_ul">
                        <li><a href="#" id="menu_top">Menu</a>
                            <div id="bloco2">
                                <ul>
                                    <?php $site->getMenu_cat(); ?>
                                </ul>
                            </div>
                    </ul>
                </div>
                     
                
            </div>
        </div> <!-- Fim da div topo -->
        
        <div id="menu_total"><!-- Inicio da div menu, na rolagem a div desaparecer -->
            <div id="menu">
                <ul id="menu_ul">                    
                    <?php $site->getMenu(); ?>
                </ul>
            </div>
        </div> <!-- Fim da div menu -->

