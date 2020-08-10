<?php
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost", "Bruno_02", "3409");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE idusuario = :ID;");

$id = "6";
$stmt->bindParam(":ID", $id);

$stmt->execute();


 	//$conn->rollback();

	//$conn->commit();	


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario;");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<th> $key <tr> $value </tr> </th> <br>";

	}
	echo "<br>";
}
?>



	