<?php //carrega o template;
include('template/header.php');
include 'connect.php';
//faz o select no banco de dados
$sql = "SELECT * FROM carrinho inner join produto on carrinho.idProduto = produto.idProduto  where idVenda = " . $_GET['venda'] . " ";
$sql1 = "SELECT sum(valor) as total FROM carrinho inner join produto on carrinho.idProduto = produto.idProduto  where idVenda = " . $_GET['venda'] . "";
$result = $conexao->query($sql);
$result1 = $conexao->query($sql1);
// fecha a conexao com o banco de dados
$conexao->close();
?>

<div class="container text-center" style="color: whitesmoke">
<div class="row">
        <div class="col-sm-12 border border-primary bg-info-subtle  text-info-emphasis"> </br> </br> </br>
            <h1>Cliente em Atendimento</h1>
            <div class="position-relative m-4">
            </div>
            <a href="listar" class="btn btn-warning">Voltar</a>
        </div>
    </div>
    <div class="row  border border-primary bg-info-subtle  text-info-emphasis">
        <div class=" col-sm-12 border border-primary">
       <?php while ($row1 = $result1->fetch_assoc()) { ?>
                            
                                <?php $total = $row1['total']; ?></th>
                                
                            <?php }
                    ?>
            <h1>Total pago:<?php echo 'R$'.$total; ?></th> </h1>
        </div>
    </div>
    <div class="row border border-primary bg-info-subtle  text-info-emphasis">

        <div class="col-sm-6 border border-primary bg-info-subtle  text-info-emphasis ">
            <h1> Venda N°: <?php echo $_GET['venda'] ?></h1>
            <div class="col-sm-6 ">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th scope="col">Produtos</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Tipo do pagamento</th>
                        </tr>
                    </thead>

                    <tbody><?php //carrega os itens do carrinho
                   
                    while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"> <?php echo $row['nomeProduto']; ?></th>
                                <td>1</td>
                                <td><?php echo 'R$'.$row['valor'];
                                ?></td>
                                <td><?php echo $row['TipoPg'];
                                ?></td>
                            <?php }
                    ?>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

<?php include('template/footer.php'); ?>