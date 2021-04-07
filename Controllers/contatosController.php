<?php 

Class contatosController extends Controller{
    public function index()
    {
        //chama model (informaçoes do banco)
        //chama view 
        //fazer juncao do back com o front

       /* $a = new animal();
        $animais = $a->getAnimais();*/
        // /\ passo1

        $this->carregarTemplate('contatos'); //outros passos

    }

    public function getContato()
    {
        //chama model (informaçoes do banco)
        //chama view 
        //fazer juncao do back com o front

       /* $a = new animal();
        $animais = $a->getAnimais();*/
        // /\ passo1

        $this->carregarTemplate('getContato'); //outros passos

    }
    
}