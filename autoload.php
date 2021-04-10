<?php //Automatiza os imports/require/conexoes pq todas paginas usam o mesmo
spl_autoload_register(function($nome_arquivo)
{
    require_once('banco/conexao.php');
    if(file_exists('Controllers/'.$nome_arquivo.'.php'))
    {
        require 'Controllers/'.$nome_arquivo.'.php';

    }elseif(file_exists('Models/'.$nome_arquivo.'.php'))
    {
        require 'Models/'.$nome_arquivo.'.php';

    }elseif (file_exists('Core/'.$nome_arquivo.'.php'))
    {
        require 'Core/'.$nome_arquivo.'.php';
    }
});
?>