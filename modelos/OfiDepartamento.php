<?php 

require "../config/conexion.php";

	Class OfiDepartamento{
		//Constructor para instancias
		public function __construct(){

		}
		
		public function insertar($idoficina,$iddepartamento){
			$sql="INSERT INTO oficina_departamento (idoficinas, iddepartamento) VALUES ('$idoficina', '$iddepartamento')";
			return ejecutarConsulta_retornarID($sql);
		}
		
		/*
		public function editar($idascensor,$fabricante,$region,$codigo){
			$sql="UPDATE ascensor SET fabricante='$fabricante', region='$region', codigo='$codigo', updated_time=CURRENT_TIMESTAMP WHERE idascensor='$idascensor'";
			return ejecutarConsulta($sql);
		}

		public function desactivar($idascensor){
			$sql="UPDATE ascensor SET condicion='0' WHERE idascensor='$idascensor'";
			return ejecutarConsulta($sql);
		}

		public function activar($idascensor){
			$sql="UPDATE ascensor SET condicion='1' WHERE idascensor='$idascensor'";
			return ejecutarConsulta($sql);
		}

		public function mostrar($idascensor){
			$sql="SELECT * FROM ascensor WHERE idascensor='$idascensor'";
			return ejecutarConsultaSimpleFila($sql);
		}

		public function listar(){
			$sql="SELECT * FROM instructor";
			return ejecutarConsulta($sql);
		}

		public function selectinstructor(){
			$sql="SELECT * FROM instructor WHERE condicion=1"; 
			return ejecutarConsulta($sql);
		}
		*/

		public function id_ofidepartamento($idoficina,$iddepartamento){
			$sql="SELECT idoficina_departamento FROM oficina_departamento WHERE idoficinas='$idoficina' AND iddepartamento='$iddepartamento'";
			return ejecutarConsultaSimpleFila($sql);
		}

	}
?>