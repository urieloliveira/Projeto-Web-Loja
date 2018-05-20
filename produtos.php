<li>                         
    <a href="<?php echo PATH.'/produto/'.$produto['slug'];?>" id="link_produtos">                   
        <div id="produto">                    
            <div id="top_produto">                        
                <div id="img"><img width="220" src="<?php echo PATH.'/imagens/'.$produto['img_padrao'];?>"></div>
                <?php
                    if(100-(($produto['valor_atual']*100)/$produto['valor_anterior'])>=5){
                ?>
                <div id="desconto"> <!--Essa div aparece só se ouver desconto-->
                    <div id="desconto_up"><p><?php echo '-'.round(100-(($produto['valor_atual']*100)/$produto['valor_anterior'])).'%';?></p></div>
                    <div id="img_down"><img src="<?php echo PATH;?>/imagens/desconto_down.png"></div>
                </div>
                <?php } ?>
            </div>
            <div id="down_produto">
                <p id="descricao"><?php echo $produto['titulo'];?></p><br>
                <p id="preco">R$ <?php echo number_format($produto['valor_atual'], 2,',','.');?> <span id="preco_antigo" style="text-decoration:line-through;">R$ <?php echo number_format($produto['valor_anterior'], 2,',','.');?></span> 
                <p id="preco_parcela"><?php echo $produto['max_parcela'];?>x de R$ <?php echo number_format($produto['valor_atual']/$produto['max_parcela'], 2,',','.');?></p>
                <?php
                    if($produto['frete_gratis'] == 1){
                ?>
                <hr>
                <span id="frete">Frete Grátis</span>
                <?php } ?>
            </div>                    
        </div>
    </a>                     
</li>
                

