<?php include('template/header.php'); ?>


<div class="container text-center" style="color: whitesmoke">
    <div class="row">
        <div class="col-sm-12 border border-primary bg-info-subtle  text-info-emphasis"> </br> </br> </br>
            <h1>Cliente em Atendimento</h1>
            <h4>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button">Finalizar Atendimento</button>

                </div>
            </h4>
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
                        class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                        style="width: 2rem; height:2rem;">3</button>
            </div>
        </div>
        </br></br></br>
    </div>
    <div class="row">
        <div class="col-sm-12 border border-primary">
            <h1>Bebidas</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-6 border border-primary">
            <form method="get" action="carrinho?cliente=<?php echo $_GET['cliente']; ?>&">
                <img src="resources/IMG/capuccino.jpg" width="200" height="150">
                <h5> Cappucino</h5>

                <input type=hidden name=cappucino value=15>
                $15</br>
                <button type="subimit" class="btn btn-success">Adicionar</button>
            </form>

        </div>
        <div class="col-sm-6 border border-primary">
            <form method="get" action="atendimento?cliente=<?php echo $_GET['cliente']; ?>&">
                <img src="resources/IMG/espresso.jpeg" width="200" height="150">
                <h5> Espresso</h5>
                <input type=hidden name=espresso value=5>
                $5</br>
                <button type="subimit" class="btn btn-success">Adicionar</button>
            </form>



        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 border border-primary">
            <h1>Sanduiches</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-6 border border-primary">
            <img src="resources/IMG/folhados.webp" width="200" height="150">
            <h5> Folheados</h5>
            $5</br>
            <button type="button" class="btn btn-success">Adicionar</button>

        </div>
        <div class="col-sm-6 border border-primary">
            <img src="resources/IMG/Croissants.webp" width="200" height="150">
            <h5> Croissants</h5>
            $15
            <!--</br>
                    Quantidade: <input class="center" type="number" placeholder="" aria-label="default input example" style="width: 3em;">-->
            </br>
            <button type="button" class="btn btn-success">Adicionar</button>

        </div>
    </div>

    <?php include('template/footer.php'); ?>