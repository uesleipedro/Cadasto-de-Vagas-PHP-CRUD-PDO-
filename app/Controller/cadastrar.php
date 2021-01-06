<?php

include __DIR__ . '/../../vendor/autoload.php';

define('TITLE', 'Cadastrar vaga');

use \App\Model\Vaga;
$objVaga = new Vaga;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    
    $objVaga->titulo = $_POST['titulo'];
    $objVaga->descricao = $_POST['descricao'];
    $objVaga->ativo = $_POST['ativo'];
    $objVaga->cadastrar();

    header('location: ../../index.php?status=success');
    exit;
}

include __DIR__ . '/../View/header.php';
include __DIR__ . '/../View/formulario.php';
include __DIR__ . '/../View/footer.php';
