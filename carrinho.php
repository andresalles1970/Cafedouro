<?php //carrega o template;
include('template/header.php');
if ($_GET['venda'] == '') {
    //gere um Id para a venda
    $id = date('yymmdds');
} else {
    $id = $_GET['venda'];
}
include 'connect.php';
$sql = "insert into carrinho(idProduto,idUser,idVenda,dtvenda) values(" . $_GET['id'] . ",".$_SESSION['id']."," . $id . ", '".date('d/m/y')."')";
$result = $conexao->query($sql);
//faz o select no banco de dados
$sql = "SELECT * FROM carrinho inner join produto on carrinho.idProduto = produto.idProduto  where idVenda = " . $id . " ";

$result = $conexao->query($sql);
// fecha a conexao com o banco de dados
$conexao->close();
?>

<div class="container text-center" style="color: whitesmoke">
    <div class="row">
        <div class="col-sm-12 border border-primary bg-info-subtle  text-info-emphasis"> </br> </br> </br>
            <h1>Cliente em Atendimento</h1>
            <div class="position-relative m-4">
                <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100" style="height: 1px;">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <<button type="button"
                    class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">1</button>
                    <button type="button"
                        class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                        style="width: 2rem; height:2rem;">2</button>
                    <button type="button"
                        class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill"
                        style="width: 2rem; height:2rem;">3</button>

            </div><a href="finalizar?venda=<?php echo $id ?>&status=pagamento" class="btn btn-success">Finalizar</>
            <a href="index?venda=<?php echo $id ?>" class="btn btn-info">Adicionar</a>
        </div>
    </div>
    <div class="row  border border-primary bg-info-subtle  text-info-emphasis">
        <div class=" col-sm-12 border border-primary">
            <h1>Produtos</h1>
        </div>
    </div>
    <div class="row border border-primary bg-info-subtle  text-info-emphasis">

        <div class="col-sm-6 border border-primary bg-info-subtle  text-info-emphasis ">
            <h1> Produtos</h1>
            <div class="col-sm-6 ">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th scope="col">Produtos</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>

                    <tbody><?php //carrega os itens do carrinho
                    while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"> <?php echo $row['nomeProduto']; ?></th>
                                <td>1</td>
                                <td>R$ <?php echo $row['valor'];
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