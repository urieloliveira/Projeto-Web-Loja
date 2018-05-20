<?php class Carrinho{
	private $pref = 'media_';
	
	private function existe($id){
		if(!isset($_SESSION[$this->pref.'produto'])){
			$_SESSION[$this->pref.'produto'] = array();
		}
		
		if(!isset($_SESSION[$this->pref.'produto'][$id])){
			return false;
		}else{
			return true;	
		}
	}//verifica a existencia do produto e da session como um array
	
	public function verificaAdiciona($id){
		if(!$this->existe($id)){
			$_SESSION[$this->pref.'produto'][$id] = 1;
		}else{
			$_SESSION[$this->pref.'produto'][$id] += 1;
		}
	}//verifica e adiciona mais um produto ao carrinho
	
	private function prodExiste($id){
		if(isset($_SESSION[$this->pref.'produto'][$id])){
			return true;
		}else{
			return false;
		}
	}//verifica se o produto existe
	
	public function deletarProduto($id){
		if(!$this->prodExiste($id)){
			return false;
		}else{
			unset($_SESSION[$this->pref.'produto'][$id]);
			return true;
		}
	}//deletar produto do carrinho de compras
	
	private function isArray($post){
		if(is_array($post)){
			return true;
		}else{
			return false;
		}
	}//verifica se o post passado por parametro é ou não um array
	
	public function atualizarQuantidades($post){
		if($this->isArray($post)){
			foreach($post as $id => $qtd){
				$id = (int)$id;
				$qtd = (int)$qtd;
				
				if($qtd != ''){
					$_SESSION[$this->pref.'produto'][$id] =  $qtd;
				}else{
					unset($_SESSION[$this->pref.'produto'][$id]);
				}
			}
			return true;
		}else{
			return false;
		}//se não for um array
	}//deleta ou atualiza quantidades referente a um produto no nosso carrinho de compras
	
	public function qtdProdutos(){
            return count($_SESSION[$this->pref.'produto']);
	}
}
?>