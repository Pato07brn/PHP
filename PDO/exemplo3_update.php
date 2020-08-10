<?php
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost", "Bruno_02", "3409");


$stmt = $conn->prepare("UPDATE tb_usuarios SET dessenha = :SENHA, deslogin = :LOGIN WHERE idusuario = :ID;");

$login = "PAAAAAAAAAAAAATO";
$senha = "05122014";
$id = "2";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);


$stmt->execute();


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
