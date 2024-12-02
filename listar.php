<?php //carrega o template;
include('template/header.php');
include 'connect.php';
//faz o select no banco de dados
$sql = "SELECT * FROM carrinho";
$result = $conexao->query($sql);
// fecha a conexao com o banco de dados
$conexao->close();
?>

<div class="container text-center" style="color: whitesmoke">
    <div class="row">
        <div class="col-sm-12 border border-primary bg-info-subtle  text-info-emphasis"> </br> </br> </br>
            <h1>Vendas Realizadas</h1>
            <div class="position-relative m-4">
                 </div>
            
        </div>
    </div>
    
    <div class="row border border-primary bg-info-subtle  text-info-emphasis">

        <div class="col-sm-6 border border-primary bg-info-subtle  text-info-emphasis ">
            <h1> Produtos</h1>
            <div class="col-sm-6 ">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th scope="col">Venda N°</th>
                            <th scope="col">Status</th>
                            <th scope="col">Data da Venda</th>
                            <th scope="col">Detalhes</th>
                        </tr>
                    </thead>

                    <tbody><?php //carrega os itens do carrinho
                   
                    while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"> <?php echo $row['idVenda']; ?></th>
                                <td><?php echo $row['status'];?></td>
                                <td><?php echo $row['dtvenda'];?></td>
                                <td><a href="financeiro?venda=<?php echo $row['idVenda']  ?>" class="btn btn-success">Detalhes</a></td>
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