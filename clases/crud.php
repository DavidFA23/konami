<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_videojuegos (nombre,tipo,descripcion)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]'
											  )";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_game,
							nombre,
							tipo,
							fechaLanzamiento,
							descripcion
					from t_videojuegosjuegos 
					where id_game='$idvideojuego'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_game' => $ver[0],
				'nombre' => $ver[1],
				'tipo' => $ver[2],
				'fechaLanzamiento' => $ver[3],
				'descripcion'  =>$ver[4]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_videojuegos set nombre='$datos[0]',
										tipo='$datos[1]',
										descripcion ='$datos[2]'
						where id_game='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_videojuegos where id_game='$idjuego'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>