<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="src/js/index.js"></script>
    <link href="src/css/index.css" rel="stylesheet" >
    <link rel="icon" type="imagem/png" href="https://icons.iconarchive.com/icons/graphics-vibe/developer/16/php-icon.png" />
    <title>Gerador de Currículos</title>
</head>
<body>
    
    <div class="container">
        <div class="page-title">
            <h1 class="display-3 text-center">Gerador de Currículos</h1>
        </div>

        <div class="row">
            <form action="src/controllers/ResumeController.php?action=index" method="post">
                
                <!--INFORMAÇÕES BÁSICAS CARD-->
                <div class="card">
                    <div class="card-header">
                        Informações Básicas
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="nameInput" class="form-label">Nome:</label>
                                <input type="text" class="form-control" name="nome" id="nameInput" placeholder="João da Silva">
                            </div>
                            <div class="col-4">
                                <label for="emailInput" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="emailInput" placeholder="exemplo@dominio.com">
                            </div>
                            <div class="col-2">
                                <label for="dateInput" class="form-label">Data de Nascimento:</label>
                                <input type="date" class="form-control" name="data_nascimento" id="dateInput">
                            </div>
                            <div class="col-2">
                                <label for="telInput" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" maxlenght="15" id="telInput" placeholder="(xx) xxxxx-xxxx">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5">
                                <label for="addressInput" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" id="addressInput" placeholder="Rua das Flores">
                            </div>
                            <div class="col-4">
                                <label for="addressInput" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="addressInput">
                            </div>
                            <div class="col-1">
                                <label for="numberInput" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="numberInput" maxlength="4" placeholder="1234">
                            </div>
                            <div class="col-2">
                                <label for="cepInput" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cepInput" maxlength="8" placeholder="12345-678">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="picInput" class="form-label">Adicione uma foto:</label>
                                <input class="form-control" type="file" id="picInput">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="aboutInput" class="form-label">Sobre você:</label>
                                <textarea class="form-control" id="aboutInput" rows="3" placeholder="..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------->
                <br>
                <!--INFORMAÇÕES PROFISSIONAIS CARD-->
                <div class="card">
                    <div class="card-header">
                        Informações Profissionais
                    </div>
                    <div class="card-body">
                        <section class="professionalInfoSection">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="occupationInput" class="form-label">Cargo:</label>
                                    <input type="text" class="form-control" id="occupationInput">
                                </div>
                                <div class="col-6">
                                    <label for="companyInput" class="form-label">Empresa:</label>
                                    <input type="text" class="form-control" id="companyInput">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="startDateInput" class="form-label">Data Inicial:</label>
                                    <input type="date" class="form-control" id="startDateInput">
                                </div>
                                <div class="col-6">
                                    <label for="endDateInput" class="form-label">Data Final:</label>
                                    <input type="date" class="form-control" name="endDateInput">
                                </div>
                            </div>
                            <div class="row mb-3 ms-2">
                                <div class="col-12 form-check">
                                    <input type="checkbox" class="form-check-input" value="" id="currOcupInput" name="currOcupInput">
                                    <label for="currOcupInput" class="form-check-label">Este é meu cargo atual</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="attrInput" class="form-label">Atribuições:</label>
                                    <textarea class="form-control" id="attrInput" rows="3" placeholder="..."></textarea>
                                </div>
                            </div>
                        </section>
                        <div class="row">
                            <div class="col-12">
                                <input id="btnAddExp" class="btn btn-secondary" type="button" value="Adicionar outra experiência">
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------->
                <br>
                <!--INFORMAÇÕES ACADÊMICAS CARD-->
                <div class="card">
                    <div class="card-header">
                        Informações Acadêmicas
                    </div>
                    <div class="card-body">
                        <section class="academicInfoSection">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="gradInput" class="form-label">Graduação:</label>
                                    <input type="text" class="form-control" id="gradInput">
                                </div>
                                <div class="col-6">
                                    <label for="uniInput" class="form-label">Instituição:</label>
                                    <input type="text" class="form-control" id="uniInput">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="levelInput" class="form-label">Nível:</label>
                                    <select class="form-select" id="levelInput">
                                        <option selected value="1">Selecione...</option>
                                        <option value="2">Fundamental</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Superior</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="startGradDateInput" class="form-label">Data Inicial:</label>
                                    <input type="date" class="form-control" id="startGradDateInput">
                                </div>
                                <div class="col-4">
                                    <label for="endGradDateInput" class="form-label">Data Final:</label>
                                    <input type="date" class="form-control" id="endGradDateInput">
                                </div>
                            </div>
                        </section>
                        <div class="row">
                            <div class="col-12">
                                <input id="btnAddExpAcad" class="btn btn-secondary" type="button" value="Adicionar outra formação">
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------->

                <input id="btnSubmit" class="btn btn-success mt-3 mb-3" type="submit" value="Gerar Currículo">

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>