<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="GloverSantos1@";
		private $dbname="albanileria";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		public function create($nombres,$telefono,$direccion,$correo_electronico, $contraseña, $rol){
			$sql = "INSERT INTO `usuarios` (nombre,telefono,direccion,correo, password, tipo_usuario) VALUES ('$nombres', '$telefono', '$direccion', '$correo_electronico', '$contraseña','$rol')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT * FROM usuarios";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM usuarios where idusuario='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombres,$telefono,$direccion,$correo_electronico, $id){
			$sql = "UPDATE usuarios SET nombre='$nombres', telefono='$telefono', direccion='$direccion', correo='$correo_electronico' WHERE idusuario=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM usuarios WHERE idusuario=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}
?>	
<?php
	class Database_tra{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="GloverSantos1@";
		private $dbname="albanileria";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		public function read(){
			$sql = "SELECT * FROM trabajos";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM trabajos where idtrabajo='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}

		public function delete($id){
		    $sql3= "DELETE FROM solicitud WHERE idtrabajo_f=$id";
			$res3 = mysqli_query($this->con, $sql3);
			$sql2= "DELETE FROM trabajo_actual WHERE trabajos_idtrabajo=$id";
			$res2 = mysqli_query($this->con, $sql2);
			$sql = "DELETE FROM trabajos WHERE idtrabajo=$id";
			$res = mysqli_query($this->con, $sql);
			if($res && $res2 && $res3){
				return true;
			}else{
				return false;
			}
		}
	}
?>	

