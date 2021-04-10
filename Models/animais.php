<?php

	class Animais{
		private $con;

		
		public function __construct()
		{
			$this->con = Connection::getConn();
		}

		public function getAvaiableAnimals()
		{
			$data = array();
			$sql = $this->con->query("SELECT
            can.id,
            can.tipo, 
            can.sexo, 
            can.idade,
            cap.cor, 
            cap.porte, 
            cap.peso,
            cid.codigo,
            cid.apelido,
            cra.raca,
            cra.comportamento,
            csi.descricao,
            csi.nome_responsavel_resgate,
            csi.data_resgate
          FROM
            canil.animais can
              INNER JOIN canil.aparencia cap ON can.id = cap.id_animal
              INNER JOIN canil.identificacao cid ON can.id = cid.id_animal
              INNER JOIN canil.raca cra ON can.id = cra.id_animal
              INNER JOIN canil.situacao csi ON can.id = csi.id_animal
          WHERE csi.adotado = 0");
			$data = $sql->fetchall(PDO::FETCH_ASSOC);
			return $data;
		}

		public static function getAvaiableAnimalsById($id)
		{
			$con = Connection::getConn(); //conecta no banco

			$result = array();

			$sql = $this->Connection->prepare("SELECT * from animais WHERE id= :id");
			$sql->bindValue(':id',$id);
			$sql->execute();
			$result = $sql->fetch();
			
			return $result;
		}

		/*public static function selecionaPorId($idPost)
		{
			$con = Connection::getConn();

			$sql = "SELECT * FROM postagem WHERE id = :id";
			$sql = $con->prepare($sql);
			$sql->bindValue(':id', $idPost, PDO::PARAM_INT);
			$sql->execute();

			$resultado = $sql->fetchObject('Postagem');

			if (!$resultado) {
				throw new Exception("Não foi encontrado nenhum registro no banco");	
			} else {
				$resultado->comentarios = Comentario::selecionarComentarios($resultado->id);
			}

			return $resultado;
		}

		public static function insert($animalData)
		{
			if (empty($animalData['codigo']) OR empty($animalData['tipo']) OR empty($animalData['raca'])
				OR empty($animalData['sexo']) OR empty($animalData['cor']) OR empty($animalData['porte'])){
				throw new Exception("Preencha todos os campos obrigatórios!");

				return false;
			}

			$con = Connection::getConn();

			$sql = $con->prepare('START TRANSACTION;
				INSERT INTO canil.animais(tipo, sexo, idade) VALUES (:type, :sex, :age);
				INSERT INTO canil.aparencia(cor, porte, peso, id_animal) VALUES (:color, :size, :height, :id);
				INSERT INTO canil.identificacao(codigo, apelido, id_animal) VALUES ('9185', 'Teste', 10);
				INSERT INTO canil.raca(raca, comportamento, id_animal) VALUES ('vira-lata', 'calmo', 10);
				INSERT INTO canil.situacao(adotado, descricao, nome_responsavel_resgate, data_resgate, nome_responsavel_adocao, cpf_responsavel_adocao, data_adocao, id_animal) VALUES (0,'encontrado sozinho','Cassio Texeiras', NOW(), NULL, NULL, NULL, 10);
		 	COMMIT;');
			$sql->bindValue(':type', $animalData['tipo']);
			$sql->bindValue(':sex', $animalData['sexo']);
			$sql->bindValue(':age', $animalData['idade']);

			$res = $sql->execute();

			if ($res == 0) {
				throw new Exception("Falha ao cadastrar animal");

				return false;
			}

			return true;
		}

		public static function update($params)
		{
			$con = Connection::getConn();

			$sql = "UPDATE postagem SET titsulo = :tit, conteudo = :cont WHERE id = :id";
			$sql = $con->prepare($sql);
			$sql->bindValue(':tit', $params['titulo']);
			$sql->bindValue(':cont', $params['conteudo']);
			$sql->bindValue(':id', $params['id']);
			$resultado = $sql->execute();

			if ($resultado == 0) {
				throw new Exception("Falha ao alterar publicação");

				return false;
			}

			return true;
		}

		public static function delete($id)
		{
			$con = Connection::getConn();

			$sql = "DELETE FROM postagem WHERE id = :id";
			$sql = $con->prepare($sql);
			$sql->bindValue(':id', $id);
			$resultado = $sql->execute();

			if ($resultado == 0) {
				throw new Exception("Falha ao deletar publicação");

				return false;
			}

			return true;
		}*/

	}