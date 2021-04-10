<?php //Singleton: Cria apenas uma instancia de conexao com o banco para consumir menos

Class Connection{
	private static $conn;
	
	private function __construct(){}

	public static function getConn()
	{
		if(!isset(self::$conn))
		{
			$dbname = 'canil';
			$host = 'localhost';
			$user = 'root';
			$senha = '';

			try{
				self::$conn = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
			}catch(Exception $error)
			{
				echo 'Erro: '.$error;
			}
		}

		return self::$conn;
	}
}

?>