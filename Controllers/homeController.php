<?php 

Class homeController extends Controller{
    public function index()
    {
        //chama model (informaçoes do banco)
        //chama view 
        //fazer juncao do back com o front

       /* $a = new animal();
        $animais = $a->getAnimais();*/
        // /\ passo1

    $this->carregarTemplate('home'/*,$animais*/); //outros passos

    }
}