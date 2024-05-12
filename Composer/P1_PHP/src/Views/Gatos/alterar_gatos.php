<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alterar Gatos</title>
  </head>
  <body>
    <main class="container">
        <h3>Alterar Gatos</h3>
        <form action="/gatos/editar" method="post">
            <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
            <div class="row">
                <div class="col-6">
                    <label for="cor_pelagem" class="form-label">Cor da Pelagem:</label>
                    <input type="text" name="cor_pelagem" class="form-control" value="<?= $resultado["cor_pelagem"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="cor_olhos" class="form-label">Cor dos Olhos:</label>
                    <input type="text" name="cor_olhos" class="form-control" value="<?= $resultado["cor_olhos"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>