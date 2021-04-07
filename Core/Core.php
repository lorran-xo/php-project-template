<?php 
/*
Configurações de URL amigavel
www.siteexemplo/classe/metodoOufuncao/parametros
posicao        [0]      [1]          [2] 
*/
Class Core{
    public function __construct(){
        $this->run();
    }
    // -- PREENCHIMENTO DAS VARIAVEIS CLASSE(controller), METODO E PARAMETROS da url --
    public function run()
    {
        $parameters = array();
        if(isset($_GET['page']))
        {
            $url = htmlentities(addslashes($_GET['page']));
        }
        // -- cai nessa condicao se tiver alguma info na url dps do dominio --
        if(!empty($url))
        {
            $url = explode('/', $url); //Delimita e separa os parametros
            $controller = $url[0].'Controller';
            array_shift($url); //Salvou o valor da posicao 0 e agr reordena como 0 e 1 dnv o que restou, tirando posicao 2
            
            if(isset($url[0]) && !empty($url[0])) //condicao se tiver metodo na url
            { 
                $metodo = $url[0];
                array_shift($url);//reordena de novo
            } else //sem metodo na url, apenas a classe
            { 
                $metodo = 'index';
            }
            //agora verifica se tem parametros, se tem mais alguma coisa sobrando no array/url
            /*if(count($url) > 0)
            {
                $parametros = $url
            }*/
        } else //cai aqui se nao tem informacao nenhuma na url, só o dominio
        { 
            $controller = 'homeController';
            $metodo = 'index';
        }

        // -- Tratativa caso passarem na url uma pagina que nao existe --
        $caminho = 'php-gerenciador-canil/Controllers/'.$controller.'.php';

        if(!file_exists($caminho) && !method_exists($controller, $metodo))
        {
            $controller = 'homeController';
            $metodo = 'index';
        }
        
        $c = new $controller; //instancia o que estiver dentro de controller
        
        call_user_func_array(array($c, $metodo), $parameters);
    }
}