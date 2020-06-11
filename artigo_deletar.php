<?php
require_once "classe/lib/MyPDO.php";
use classe\lib\MyPDO;
		$id = $_GET['id'];
		$pdo = new MyPDO();
		$sql = "DELETE FROM artigos WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        echo "aqui";
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
        echo "aqui";
        $stmt->execute();
        echo "aqui";
        echo "<script>window.location.href = 'artigos.php'</script>";
        
		