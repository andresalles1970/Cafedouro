<?php 
include('template/header.php');
include 'connect.php';
if ($_GET['venda'] == '') {
    $venda = '';
} else
    $venda = "&venda=" . $_GET['venda'];
$sql = "SELECT * FROM produto";
$result = $conexao->query($sql);
$conexao->close();
?>

<div class="container text-center " style="color: whitesmoke">
    <div class="row">
        <div class="col-sm-12 border border-primary  border border-primary bg-info-subtle  text-info-emphasis"> </br>
            </br> </br>

            <h1>Caixa Livre</h1>
            <div class="position-relative m-4">
                <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100" style="height: 1px;">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <a href="#" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">1</a>
                <button type="button"
                    class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill"
                    style="width: 2rem; height:2rem;">2</button>
                <button type="button"
                    class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                    style="width: 2rem; height:2rem;">3</button>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-6 border border-primary ">
            <h1> Produtos</h1>
            <div class="col-sm-6 border border-primary">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Produtos</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Adicionar</th>
                        </tr>
                    </thead>
                    <tbody><?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><img src="resources/IMG/<?php echo $row['img']?>" width="100" height="50"></td>
                                <th scope="row"> <?php echo $row['nomeProduto']; ?></th>
                                <td>1</td>
                                <td>R$<?php echo $row['valor']; ?></td>
                                <td class="center"><a
                                        href="carrinho.php?id=<?php echo $row['idProduto'] . "&venda=" . $_GET['venda'] ?>"
                                        lass="btn btn-success"><i class='bi bi-basket'></i> Comprar</a></td>
                            <?php }
                    ?>
                        </tr>
            </div>

        </div>

    </div>
    <?php include('template/footer.php'); ?>