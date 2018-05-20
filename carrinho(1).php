<?php
$total = 0;
    if(isset($param[1]) && $param[1] == 'add' && isset($param[2]) && $param[2] != '0'){
        $idProd = (int)$param[2];
        $carrinho->verificaAdiciona($idProd);
    }
    if(isset($_SESSION['media_produto'][0])){unset($_SESSION['media_produto'][0]);}
    
    if(isset($param[1]) && $param[1] == 'del' && isset($param[2])){
        $idDel = (int)$param[2];
        if($carrinho->deletarProduto($idDel)){
            echo '<script>alert("Produto deletado do carrinho");location.href="'.PATH.'/carrinho"</script>';
        }else{
            echo '<script>alert("Erro ao deletar produto");location.href="'.PATH.'/carrinho"</script>';
        }
    }
    
//FRETE
    $cep = strip_tags(filter_input(INPUT_POST, 'cep'));
    foreach($_SESSION['media_produto'] as $id => $qtd){
        $selecionar_produto = BD::conn()->prepare("SELECT peso FROM `loja_produtos` WHERE id = ?");
        $selecionar_produto->execute(array($id));
        $fetch_produto = $selecionar_produto->fetchObject();
        
    }
    $parametros = array();
	
	// Código e senha da empresa, se você tiver contrato com os correios, se não tiver deixe vazio.
	$parametros['nCdEmpresa'] = '';
	$parametros['sDsSenha'] = '';
	
	// CEP de origem e destino. Esse parametro precisa ser numérico, sem "-" (hífen) espaços ou algo diferente de um número.
	$parametros['sCepOrigem'] = '96010140';
	$parametros['sCepDestino'] = $cep;
	
	// O peso do produto deverá ser enviado em quilogramas, leve em consideração que isso deverá incluir o peso da embalagem.
        if(isset($fetch_produto -> peso)){
            $peso = $fetch_produto -> peso;
        }else{
            $peso = 0.05;
        }
	$parametros['nVlPeso'] = $peso;
        
	
	// O formato tem apenas duas opções: 1 para caixa / pacote e 2 para rolo/prisma.
	$parametros['nCdFormato'] = '1';
	
	// O comprimento, altura, largura e diametro deverá ser informado em centímetros e somente números
	$parametros['nVlComprimento'] = '16';
	$parametros['nVlAltura'] = '5';
	$parametros['nVlLargura'] = '15';
	$parametros['nVlDiametro'] = '0';
	
	// Aqui você informa se quer que a encomenda deva ser entregue somente para uma determinada pessoa após confirmação por RG. Use "s" e "n".
	$parametros['sCdMaoPropria'] = 's';
	
	// O valor declarado serve para o caso de sua encomenda extraviar, então você poderá recuperar o valor dela. Vale lembrar que o valor da encomenda interfere no valor do frete. Se não quiser declarar pode passar 0 (zero).
	$parametros['nVlValorDeclarado'] = '200';
	
	// Se você quer ser avisado sobre a entrega da encomenda. Para não avisar use "n", para avisar use "s".
	$parametros['sCdAvisoRecebimento'] = 'n';
	
	// Formato no qual a consulta será retornada, podendo ser: Popup – mostra uma janela pop-up | URL – envia os dados via post para a URL informada | XML – Retorna a resposta em XML
	$parametros['StrRetorno'] = 'xml';
	
	// Código do Serviço, pode ser apenas um ou mais. Para mais de um apenas separe por virgula.
	$parametros['nCdServico'] = '40010,41106';
	
	
	$parametros = http_build_query($parametros);
	$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
	$curl = curl_init($url.'?'.$parametros);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$dados = curl_exec($curl);
	$dados = simplexml_load_string($dados);
        $valor = array();
	$prazo = array();
        $acr = 0;
        
	foreach($dados->cServico as $linhas) {          
            $valor[$acr] = $linhas->Valor;
            $prazo[$acr] = $linhas->PrazoEntrega.' Dias';
            $acr++;
	}     
?>
<div id="tudo"> 
    <h1 id="h1_car">MEU CARRINHO</h1>
    
    <table border="0px" cellspacing="0" id="car">
        <tr> 
            <th align="left" >Item(s)</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
        </tr>
        <?php
            if($carrinho->qtdProdutos() == 0){
                echo '<tr><td colspan="4" align="center">Não existem produtos em seu carrinho!</td></tr>';
            }else{ 
                
                foreach($_SESSION['media_produto'] as $id => $quantidade){
                    $id = (int)$id;
                    $selecao = BD::conn()->prepare("SELECT * FROM `loja_produtos` WHERE id = ?");
                    $selecao->execute(array($id));
                    $fetchProduto = $selecao->fetchObject();
        ?>
        <tr> 
            <td align="left"><img src="<?php echo PATH;?>/imagens/<?php echo $fetchProduto->img_padrao;?>" width="100" title="" alt="" border="0" ><br><span id="nome_prod"><?php echo $fetchProduto->titulo;?></span></td>
            <td align="center"><span id="valor">R$<?php echo number_format($fetchProduto->valor_atual, 2, ',','.');?></span></td>  
            <td align="center">  
                <form action="<?php echo PATH.'/carrinho/atualizar';?>" method="post" enctype="multipart/form-data">
                    <input type="text" name="<?php echo $id;?>" value="<?php echo $quantidade;?>" size="1" align="center"><br>
                    <a href="<?php echo PATH.'/carrinho/del/'.$id;?>">remover</a>
                    <button type="submit">Atualizar</button>
                </form>
            </td>
            <td align="center"><span id="valor">R$<?php echo number_format($fetchProduto->valor_atual*$quantidade, 2, ',','.');?></span></td>
        </tr>
            <?php $total += $fetchProduto->valor_atual *$quantidade;}} ?>
        <tr>
            <td id="cor" align="right" colspan="4">
                <form method="POST" class="cep" action="">
                    <input type="text" name="cep" maxlength="9" placeholder="Digite se CEP" >
                    <button type="submit">OK</button>
                </form> 
                <?php  
        
                    
                        if(isset($_POST['cep'])){
                            echo "<div id='aparece'>
                                    ";if($carrinho->qtdProdutos() == 0){
                                        echo "<p align = 'center'>Não existem produtos em seu carrinho!</p>";
                                    }else{
                                        echo"
                                        <form method='post' id='form_aparece'>
                                            PAC | ".$valor[1]." | ".$prazo[1]." | <input type='radio' name='frete' value='".$valor[1]."'/><br>
                                            SEDEX | ".$valor[0]." | ".$prazo[0]." | <input type='radio' name='frete' value='".$valor[0]."'/><br>
                                            <button type='submit' id='but_frete'>enviar</button>
                                        </form>
                                    ";}echo"
                                  </div>";
                        }
                    
                    if(!isset($_POST['frete'])){
                        $frete = 0.00;                  
                    }else{
                        $frete = $_POST['frete'];
                    } 
                    
                    $total += $frete;
                ?>
            </td>
        </tr>
        <tr>
            <td id="cor" align="right" colspan="4"><h1 id="v_tot">Valor total:<span id="valor"> R$<?php echo number_format($total,2,',','.'); ?></span></h1></td>
        </tr>
    </table>
    <div id="ab_comp">
        <div id="fin_compr">
            <a href="index.php">Ecolher mais produtos </a>ou<button type="submit">Finalizar compra</button>
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
</div>