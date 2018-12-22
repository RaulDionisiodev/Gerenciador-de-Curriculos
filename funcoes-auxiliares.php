<?php 
    function itens_atuais($itens){
        $atuais = array();

        foreach($itens as $item){
            if(empty($item['termino'])){
                $atuais[] = $item;
            }
        }

        return $atuais;
    }


?>