<div id="tudo">
    <div id="left_prod">
        <div class="main-image">
            <img id="prod_img" src="<?php echo PATH;?>/imagens/img-01.jpg" alt="Placeholder" class="custom">
        </div>

          <ul id="prod_ul" class="thumbnails">
            <li><a href="<?php echo PATH;?>/imagens/img-01.jpg"><img id="prod_img" src="<?php echo PATH;?>/imagens/img_01_tn.jpg" alt="Thumbnails"></a></li>
            <li><a href="<?php echo PATH;?>/imagens/img-02.jpg"><img id="prod_img" src="<?php echo PATH;?>/imagens/img-02-tn.jpg" alt="Thumbnails"></a></li>
            <li><a href="<?php echo PATH;?>/imagens/img-03.jpg"><img id="prod_img" src="<?php echo PATH;?>/imagens/img-03-tn.jpg" alt="Thumbnails"></a></li>
          </ul>
    </div>

    <div id="rigth_prod">
        <h1>Smartphone Motorola Moto G 4 Play Dtv Preto Tela 5" Android™ 6.0.1 Marshmallow Câm 8Mp Dualchip 16Gb</h1>
        <h2>Motorola</h2>
        <hr>
        <div id="prec">
            <nav><span><s><i><b>R$ 843,33</b></i></s></span><p>R$ 843,33</p><span>Até 5X sem juros</span></nav>
            <form method="GET" class="cep" action="">
                <input type="text" name="cep" maxlength="9" placeholder="Digite se CEP" OnKeyPress="formatar('#####-###', this)" >
                <button type="submit">OK</button>
            </form> 
        </div>
        <div id="compr">
            <a href="<?php echo PATH;?>/carrinho/add/1"><button type="submit">Comprar</button></a>
            <p>Formas de pagamento</p>
            <img src="<?php echo PATH;?>/imagens/pagseguro.png">
        </div>
    </div>
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
    <div id="tit_produtos">
        <p id="m_vendidos">SEMELHANTES A ESTE ITEM</p>
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
    <div id="descricao_prod">
        <div>
            <h1>INFORMAÇÕES DOS PRODUTO</h1>
                <p>Escova Magica Alisadora Elétrica Lcd ¨ 230°C ¨ - ¨ Bivolt ¨ Hair Straightener ¨ Pronta Entrega ¨ A Escova Elétrica Alisadora 230ºC Lcd É Um Produto De Última Geração Que Vai Desembaraçar E Alisar Seus Cabelos De Forma Mais Eficiente, Rápida E Versátil. Escova Elétrica Alisadora 230ºC Lcd Pode Ser Usada Da Mesma Forma Que Você Faz Todos Os Dias Ao Se Pentear, Basta Ligar A Escova E Pronto - Cabelos Lisos Em Segundos!!! Com A Escova Elétrica Alisadora 230ºC Lcd Você Pode Escolher Facilmente A Temperatura Utilizando Os Botões De Controle, Visualizando No Display. Você Nunca Mais Irá Perder Seu Tempo Com Baixa Temperatura Ou Se Queimar Com A Temperatura Muito Alta!! Escova Elétrica Alisadora 230ºC Lcd Não Danifica Os Fios E Garante Cabelos Lisos, Com Aparência Natural. Escova Elétrica Alisadora 230ºC Lcd É A Opção Ideal Para Os Que Estão Insatisfeitos Com Os Cachos E Frizz. Proporciona Cabelos Lisos O Tempo Todo E Grande Versatilidade Para O Seu Dia-A-Dia. Sua Utilização É Muito Fácil E Pode Ser Comparada Ao Que Você Fas Todos Os Dias Quando Vai Se Pentear, Com Exceção De Que Agora Somente Terá De Ligar A Escova E Pronto - Cabelos Lisos Em Segundos!!!! Já Pensou Nisso? Seus Botões De Aumentar E Disminuir Temperatura Ajudam No Processo De Alisamento. Seu Design Com Display Para Visualização De Temperatura Dá Precissão Para Un Acabamento Liso Perfeito. Não Danifica Os Fios E Garante Cabelos Lisos, Com Ar De Natural. Diâmetro Da Chapa Térmica: Variável, De 21 A 30 Mm Temperatura Da Chapa: De 60 A 230ºC Tempo De Aquecimento: 30-45 Segundos Tempo Para Alisamento: 5 Segundos Voltagem: De 110v A 220v ( Bivolt ) Comprimento Do Fio: 2,30m Cores Disponíveis No Momento: Rosa
                Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor.
                Imagens Meramente Ilustrativas.
                Ao apresentar sintomas de alergia, pare o uso e consulte seu médico.</p>
            <hr>
        </div>
        <div id="info_tec">
            <h1>INFORMAÇÕES TÉCNICAS</h1>
            <table border="0px" cellspacing="0" ID="alter">
                <tr> 
                    <td>Célula 1-1 </td>
                    <td>Célula 1-2</td>
                </tr>
                <tr class="dif"> 
                    <td>Célula 2-1 </td>
                    <td>Célula 2-2</td>                                
                </tr>
                <tr> 
                    <td>Célula 3-1 </td>
                    <td>Célula 3-2</td>
                </tr>
                <tr class="dif"> 
                    <td>Célula 4-1 </td>
                    <td>Célula 4-2</td>
                </tr>
                <tr> 
                    <td>Célula 5-1 </td>
                    <td>Célula 5-2</td>
                </tr>
            </table>
        </div>
    </div>
</div>
            
        
        
        

