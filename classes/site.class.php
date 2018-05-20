<?php
    class site extends BD{
        public function getMenu_cat(){
            $executar = self::conn()->prepare('SELECT * FROM categorias');
            $executar->execute();
            if($executar->rowCount() == 0){}else{
                while ($categorias = $executar->fetchObjecT()){
                    echo '<li> <a href="'.PATH.'/categoria/'.$categorias->slug.'"  id="tit">'.$categorias->titulo.'</a> </li>';  
                }
            }
        }
        
        public function getMenu(){
            $executar = self::conn()->prepare('SELECT * FROM categorias');
            $executar->execute();
            if($executar->rowCount() == 0){}else{
                while ($categorias = $executar->fetchObjecT()){
                    $pegar_sub_categorias = "SELECT * FROM lo_sub_categorias WHERE id_categoria = ?";
                    $executar_sub = self::conn()-> prepare($pegar_sub_categorias);
                    $executar_sub-> execute(array($categorias->id));
                    echo '<li> <a href="'.PATH.'/categoria/'.$categorias->slug.'"  id="nome_menu">'.$categorias->titulo.'</a> <div id="bloco">';                   
                    if($executar_sub->rowCount() == 0){ echo '</li>'; }else{
                        echo '<ul>';
                        while ($sub_categorias = $executar_sub->fetchObjecT()){
                            echo '<li> <a href="'.PATH.'/categoria/'.$categorias->slug.'/'.$sub_categorias->slug.'" id="tit">'.$sub_categorias->titulo.'</a></li>';
                        }
                        echo '</ul> </div> </li>';
                    }                    
                }
            }
        }
        
        public function getProdutosHome($limit = false){
		if($limit == false){
			$query = "SELECT * FROM `loja_produtos`";
		}else{
			$query = "SELECT * FROM `loja_produtos` LIMIT $limit";
		}
		return self::conn()->query($query);
	}
    }
?>

