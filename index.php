<?php

include __DIR__ . '/banco.php';
include __DIR__ . '/cadastro.php';

$nome = ler($pdo);

echo '<ul class="list-group d-flex justify-content-center align-items-center pt-3">';

foreach ($nome as $nomes) {
    echo '<li class="w-50 list-group-item gap-2 d-flex justify-content-between align-items-center">' . $nomes['nome'] .
        '<form action="?page=Deletar" method="post">
            <input type="hidden" name="id" value="' . $nomes['id'] . '">
            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
            <button type="button" class="btn btn-primary btn-sm" onclick="editar(\'' . $nomes['nome'] . '\', ' . $nomes['id'] . ')">Editar</button>
        </form>' .
        '</li>';
}

echo '</ul>';

$page = $_GET['page'] ?? '';

switch ($page) {
    case 'Salvar':
        salvar($pdo);
        break;
    case 'Deletar':
        delete($pdo);
        break;
}
echo '</html>';