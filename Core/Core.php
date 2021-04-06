<?php //Configuraçõpes de URL amigavel

Class Core{
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        $parameters = array();
        if(isset($_GET['page']))
        {
            $url = htmlentities(addslashes($_GET['page']));
        }
        if(!empty($url) && $url != '/') //existe o metodo
        {
            $url = explode('/', $url);

            $controller = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url[0]))
            {
                $metodo = $url[0];
                array_shift($url);
            } else {
                
            }
        }
    }
}

?>