<?php include 'header.php'; ?>
<?php include 'usuario.php'; ?>


    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-4">

                <div class="card bg-light shadow my-5">
                    <img src="https://media.licdn.com/dms/image/v2/D5612AQHKSQXKGwXFCg/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1700249650754?e=2147483647&v=beta&t=3_9d7m52zD_FCW1vVkQSSMe7Y2EtvfeYlEOd-hnKFIY" alt="">
                    <div class="card-body">
                        <form action="./cadastro.php" method="post">
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

    <?php
    $usuario = new Usuario();

    $usuario->inserir($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['confirmar_senha'], $_POST['tipo'],);
    echo var_dump($_POST['nome']);
    ?>

<?php include 'footer.php'; ?>