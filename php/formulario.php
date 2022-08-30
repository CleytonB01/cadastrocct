<?php

  if (isset($_POST['submit']))
      
    {
        print_r($_POST['nome']);
        print_r($_POST['apelido']);
        print_r($_POST['contato1']);
        print_r($_POST['contato2']);
        print_r($_POST['email']);
        print_r($_POST['cpf']);
        print_r($_POST['data_nasc']);
        print_r($_POST['est_civ']);
        print_r($_POST['sexo']);
        print_r($_POST['endereço']);
        print_r($_POST['cidade']);
        print_r($_POST['estado']);
        print_r($_POST['ponto_ref']);
        print_r($_POST['obs']);
       // include_once('config.php');

       /* $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $contato1 = $_POST['contato1'];
        $contato2 = $_POST['contato2'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nasc'];
        $est_civ = $_POST['est_civ'];
        $sexo = $_POST['sexo'];
        $endereco = $_POST['endereço'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $ponto_ref = $_POST['ponto_ref'];
        $obs = $_POST['obs'];*/
 
      // $result = mysqli_query($conexao,"INSERT INTO formulario(nome,apelido,contato1,contato2,email,cpf,data_nasc,est_civ,sexo,endereço,cidade,estado,ponto_ref,obs) VALUES('$nome','$apelido','$contato1', '$contato2','$email','$cpf','$data_nasc','$est_civ','$sexo','$endereco','$cidade','$estado','$ponto_ref','$obs')");//
    }
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | CCT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color:  rgb(197, 95, 5);
    }
    .box{
        color: rgb(250, 164, 58);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
    }
    fieldset{
        border: 3px solid rgb(218, 165, 33);
    }
    legend{
        border: 1px solid rgb(252, 252, 252);
        padding: 10px;
        text-align: center;
        background-color: rgb(146, 109, 17);
        border-radius: 8px;
    }
    
    </style>
</head>
<body>
        <div class="container">
            <form action="php/config.php" method="POST">
                <fieldset class="m-2 p-4">
                    <legend><b>Dados Cadastrais</b></legend>
                    <br>
                    <div class="row pb-2">
                        <div class="col-sd-12 col-md-6">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                        <div class="col-sd-12 col-md-6">
                            <label for="apelido" class="form-label">Apelido (Se houver)</label>
                            <input type="text" name="apelido" id="apelido" class="form-control"required>
                        </div>
                    </div>

                    <div class="row pb-2">
                        <div class="col-sd-12 col-md-4">
                            <label for="whatsapp" class="form-label">Contato 1 (WhatsApp)</label>
                            <input class="form-control" type="tel" name="contato1" id="contato1" required>
                        </div>
                    
                        <div class="col-sd-12 col-md-4">
                            <label for="contato" class="form-label">Contato 2</label>
                            <input class="form-control" type="tel" name="contato2" id="contato2" required>
                        </div>
                        <div class="col-sd-12 col-md-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="row pb-2">

                        <div class="col-md-6">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="number" name="cpf" id="cpf" required class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="data_nasc" class="form-label">Data de Nascimento:</label>
                            <input type="date" name="data_nasc" id="data_nasc" required class="form-control" />
                        </div>
                        <div class="col-sd-12 col-md-6">
                            <label for="est_civ" class="form-label"> Estado Civil:</label>
                                <select type="select" name="est_civ" id="est_civ" required class="form-select">
                                        <option value="Selecione">Selecione</option>
                                        <option value="Solteiro">Solteiro(a)</option>
                                        <option value="Casado">Casado(a)</option>
                                        <option value="Divorciado">Divorciado(a)</option>
                                        <option value="Viúvo">Viúvo(a)</option>
                                </select>
                        </div>
                        <div class="col-sm-3">
                            <p>Sexo: </p>
                                <label for="masculino">Masculino</label>
                                <input class="inputUser" type="radio" name="sexo" id="masculino"value="masculino" required />
                                <label for="masculino">Feminino</label>
                                <input class="inputUser" type="radio" name="sexo" id="feminino"value="feminino" required />
                        </div>
                    </div>

                    <div class="row pb-2">
                        <div class="col-sm-4">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" name="endereco" id="endereco"  placeholder="Rua/Av/Lorgadouro, Nº, Bairro" required class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" name="cidade" id="cidade" placeholder="Sua Cidade" required class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <label for="estado" class="form-label">Estado:</label>
                                <select type="select" name="estado" id="estado" required class="form-select">
                                    <option value="Selecione"></option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value=" Espírito Santo	">  Espírito Santo	</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso	do Sul">  Mato Grosso do Sul<option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará"> Pará</option>
                                    <option value="Paraíba "> Paraíba</option>
                                    <option value="Paraná"> Paraná</option>
                                    <option value="Pernambuco"> Pernambuco</option>
                                    <option value="Piauí"> Piauí</option>
                                    <option value=" Rio de Janeiro">  Rio de Janeiro</option>
                                    <option value=" Rio Grande do Norte">  Rio Grande do Norte<option>
                                    <option value=" Rio Grande do Sul">  Rio Grande do Sul</option>
                                    <option value="Rondônia"> Rondônia</option>
                                    <option value="Roraima"> Roraima</option>
                                    <option value=" Santa Catarina 	">  Santa Catarina</option>
                                    <option value="São Paulo"> São Paulo</option>
                                    <option value="Sergipe"> Sergipe</option>
                                    <option value="Tocantins"> Tocantins</option>
                                </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 pb-2">
                            <label for="ref" class="form-label">Ponto de Referência</label>
                            <textarea type="text" name="ponto_ref" id="ponto_ref" rows="2"  placeholder="Por favor, informe um ou mais pontos de referência próximos ao local de entrega!" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 pb-2">
                            <label for="obs" class="labelInput"> Observações </label>
                            <textarea name="obs" type="text" id="obs" rows="5"  placeholder="Escreva quaisquer observações necessárias para facilitar a entrega do seu pedido!" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 pb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault"> Desejo receber novidades, promoções e informações pelo WhatsApp.</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 pb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault"> Desejo receber novidades, promoções e informações pelo E-mail.</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 pb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault"> Aceito os Termos e Condições.</label>
                        </div>
                    </div>

                    <hr>

                    <div class="inputBox mb-5">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="index.html"><button  type="button" class="btn btn-outline-secondary"> Voltar </button></a>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"></a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
</body>
</html>