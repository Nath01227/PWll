<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-4">

                <div class="card bg-light shadow my-5">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nome"class="label-control">Nome completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="senha"class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha">
                            </div>

                            <div class="mb-3">
                                <label for="confirmar_senha"class="label-control">Confirmar senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha">
                            </div>

                            <div class="mb-3">
                                <p>Já possui conta? <a href="login.php">Clique Aqui</a></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>