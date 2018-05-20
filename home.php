<!--Slide Show--> 
<div id="slide">
    <a id="slider">
        <div id="slider">
            <div id="img"><img id="imgId"></div>
            <div id="prev"><a id="prev" href="javascript:menos()"><img class="click" src="<?php echo PATH;?>/imagens/ante_slide.png"/></a></div>
            <div id="next"><a id="next" href="javascript:mais()"><img class="click" src="<?php echo PATH;?>/imagens/prox_slid.png"/></a></div>
        </div>
    </a>
</div>
<!--End Slide Show-->
<div id="tudo">                
    <div id="tit_produtos">
        <p id="m_vendidos">MAIS VENDIDOS</p> <hr id="m_vendidos">
    </div> <!--Titulo dos produtos-->
    <div class="frame" id="basic">
        <ul>
            <?php
                foreach($site->getProdutosHome(50) as $produto){
                    include 'produtos.php';                        
                }
            ?>
        </ul>
    </div>
    <div id="controls">
        <button id="le" class="btn prevPage"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i><img src="<?php echo PATH;?>/imagens/ante.png"></button>
        <button id="ri" class="btn nextPage"><i class="icon-chevron-right"></i><i class="icon-chevron-right"></i><img src="<?php echo PATH;?>/imagens/prox.png"></button>
    </div>
    <div id="tit_ofertas">
        <hr id="le"><p>OFERTAS</p><hr id="ri">
    </div>
        <div class="frame" id="basic">
            <ul>
                <?php
                    foreach($site->getProdutosHome(10) as $produto){
                        include 'produtos.php';                        
                    }
                ?>
            </ul>
        </div>
</div>                              
            