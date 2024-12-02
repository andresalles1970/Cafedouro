<?php 
include 'connect.php';
$sql = "update carrinho set status = 'pago' , TipoPg = '" . $_GET['status'] . "'  where (idVenda = " . $_GET['venda'] . " )";
$result = $conexao->query($sql);   
$conexao->close();
echo "<script>
alert('Venda Realizada com Sucesso');
window.location.href='index?venda=';
</script>";?>
 