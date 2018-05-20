<?php
    include_once 'topo.php';
?>
<div id="tudo_total"> <!-- Inicio da div tudo, vai em todas as paginas -->
<?php
    $url = (isset($_GET['url'])) ? htmlentities(strip_tags($_GET['url'])) : '';
    $param = explode('/', $url);
    $pages_permitidas = array('produto','login','carrinho','busca');
    
    
    
    if(isset($_GET['s']) && $_GET['s'] != ''){
        include_once 'busca.php';
    }else{
        if($url == ''){
            include_once 'home.php';
        }elseif (in_array($param[0],$pages_permitidas)) {
            include_once $param[0].'.php';
        }elseif($param[0] == 'categoria'){
            include_once "categoria.php";
        }else{
            include_once 'error404.php';
        }        
    }
?>
<?php
    include 'rodape.php';
?>
