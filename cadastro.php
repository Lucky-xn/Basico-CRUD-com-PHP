<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="vh-100 text-white">
    <div class="d-flex justify-content-center align-items-center pt-5">
        <form class="d-flex justify-content-center align-items-end gap-2" action="?page=Salvar" method="post">
            <div class="d-flex flex-column">
                <input id="Principal" type="hidden" name="id">
                <label class="form-label">Nome</label>
                <input class="form-control" id="NomePrincipal" type="text" name="nome">
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </div>
        </form>
    </div>

    <script>
        function editar(nome, id) {
            event.preventDefault();
            let valor = document.getElementById('Principal');
            valor.value = id;
            let elemento = document.getElementById('NomePrincipal');
            elemento.value = nome;
            addBotao();
        }

        function addBotao() {
            const html = '<button id="BotaoDelete" type="button" class="btn btn-danger btn-sm" onclick="cancelar()">Cancelar</button>';
            let form = document.getElementsByTagName('form')[0];
            form.appendChild(document.createRange().createContextualFragment(html));
        }

        function cancelar() {
            let valor = document.getElementById('Principal');
            valor.value = '';
            let elemento = document.getElementById('NomePrincipal');
            elemento.value = '';
            let botao = document.getElementById('BotaoDelete');
            botao.remove();
        }
    </script>

</body>