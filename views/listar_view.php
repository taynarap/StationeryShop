<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">

                <p class="login-titulo">ORDEM DA LISTA</p>

                <form action="" method="POST">

                    <label class="text-dark" for="coluna">Coluna: </label>

                    <select class="mb-3" name="coluna" required="required">
                        <option value="id">ID</option>
                        <option value="nome">NOME</option>
                        <option value="preco">PREÇO</option>
                        <option value="quantidade">QUANTIDADE</option>
                    </select>

                    <br>

                    <label for="ASC" class="text-dark ordenar me-3">Ascendente
                        <input type="radio" name="ordem" value="ASC" required="required" checked id="ASC">
                    </label>
                    <label for="DESC" class="text-dark ordenar">Descendente
                        <input type="radio" name="ordem" value="DESC" required="required" id="DESC">
                    </label>
                    <br>
                    <input class="mt-3 mb-4" type="submit" value="LISTAR">
                    <br>

                </form>

                <?php require_once("templates/table.php"); ?>
                
            </div>
        </div>
    </div>

</main>