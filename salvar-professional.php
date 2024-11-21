<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $especializacao = $_POST["especializacao"];
            $telefone = $_POST["telefone"];

            $sql = "INSERT INTO profissionais (nome, email, especializacao, telefone) VALUES ('{$nome}', '{$email}', '{$especializacao}', '{$telefone}')";

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possivel concluir o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $especializacao = $_POST["especializacao"];
            $telefone = $_POST["telefone"];

            $sql = "UPDATE profissionais SET
                    nome='{$nome}',
                    email='{$email}',
                    especializacao='{$especializacao}',
                    telefone='{$telefone}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Editado com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possivel concluir a edição');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM profissionais WHERE id=".$_REQUEST["id"];
            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Excluido com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possivel concluir a exclusão');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }
    