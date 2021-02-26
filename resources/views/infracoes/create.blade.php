<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Infrações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Infrações</h1>

            <form action="/infracoes/criar" method="post">

            <div class="form-group">    
                <label for="tipo">Tipo</label>
                <select name="tipo" class="form-control">
                    <option value="">-- Selecione -- </option>
                    <option value="Internet">Internet</option>
                    <option value="Presencial">Presencial</option>
                </select>
            </div>
            <div class="form-group">    
                <label for="tipo_produto">Tipo</label>
                <select name="tipo_produto" class="form-control">
                    <option value="">-- Selecione -- </option>
                    <option value="formula-infantil">Formula Infantil</option>
                    <option value="Leites">Leites</option>
                    <option value="Composto Lacteo">Composto Lacteo</option>
                </select>
            </div>

            <div class="form-group">    
                <label for="empresa">Empresa</label>
                <input type="text" name="empresa" id="empresa" class="form-control" />
                <small>(ex: Nestlé, Danone)</small>
            </div>

            <div class="form-group">    
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" />
                <small>(ex: Ninho, Max)</small>
            </div>


            <?php $estados = array( 'AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará', 'DF'=>'Distrito Federal', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins' ); ?>

            <div class="form-group">    
                <label for="estado">Tipo</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="">-- Selecione -- </option>
                    @foreach ($estados as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                                          
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Adicionar
            </button>

            </form>
            </div>
    </div>

</body>
</html>

