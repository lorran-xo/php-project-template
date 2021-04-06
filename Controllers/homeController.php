<?php 

Class homeController extends Controller{
    public function index()
    {
        //chama um model
        // -----
        //chama a view
        $this->carregarTemplate('home');
    }
}