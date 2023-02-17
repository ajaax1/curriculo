<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arquivos/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<script> 
    function basico(){
        const mos = document.getElementById("outra_experiencia");
        
        if(mos.classList.contains("outra_experiencia")){
            mos.classList.remove("outra_experiencia");
            }
        
        else{
            mos.classList.add("outra_experiencia")
        }
    }
    function basico2(){
        const mos = document.getElementById("outro_formaçao");
        
        if(mos.classList.contains("outro_formaçao")){
            mos.classList.remove("outro_formaçao");
            }
        
        else{
            mos.classList.add("outro_formaçao")
        }
    }
        
        
</script>
    <header>
        <h1>Gerador de Curriculo</h1>
    </header>
    
    <main>
        <form method="POST"  action="cadastro_formulario.php">
            <div id="grupo"> 
                <div class="input-group">
                    <span class="input-group-text">Nomes</span>
                    <input  class="form-control" id="validationDefault01" required type="text" name="nome" placeholder="Nome completo" aria-label="First name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" required id="validationDefault01" type="text" name="email" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
            </div>

            <div id="grupo_dois">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">CPF</span>
                    <input class="form-control" required id="validationDefault01" type="text" id="cpf" name="cpf" placeholder="CPF" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    <span  class="input-group-text"  id="addon-wrapping">CEP</span>
                    <input  class="form-control" required id="validationDefault01" type="text" placeholder="CEP" name="cep" id="cep" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping">Data de nascimento</span>
                    <input class="form-control" required id="validationDefault01" type="text"   id="data" placeholder="DATA" name="data" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">                
                </div>
                
            </div>
            <div id="grupo_tres"> 
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Telefone</span>
                    <input class="form-control" required id="validationDefault01" type="text" id="telefone" name="telefone" placeholder="(00) 0000-00000 " class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Conhecimentos</span>
                    <textarea class="form-control" id="validationDefault01" required class="form-control" name="objetivo"  aria-label="With textarea"></textarea>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Experiencias profissionais</span>
                    <textarea class="form-control" required id="validationDefault01" class="form-control" name="experiencia" aria-label="With textarea"></textarea>
                </div>

                <div class="outra_experiencia" id="outra_experiencia"  class="input-group">
                    <span class="input-group-text">Outras experiencias</span>
                    <textarea class="form-control" required name="outra_experiencia" aria-label="With textarea"></textarea>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Formação</span>
                    <textarea class="form-control" required id="validationDefault01" class="form-control" name="formaçao"  aria-label="With textarea"></textarea>
                </div>

                <div id="outro_formaçao" class="outro_formaçao" class="input-group">
                    <span class="input-group-text">Outra formação</span>
                    <textarea class="form-control" required name="outra_formaçao"  aria-label="With textarea"></textarea>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Objetivo</span>
                    <textarea class="form-control" required id="validationDefault01" class="form-control" name="objetivo"  aria-label="With textarea"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Coloque sua foto</label>
                    <input class="form-control" required id="validationDefault01" class="form-control form-control-sm" name="fotos" id="formFileSm" type="file">
                </div>
                <div id="grupo_quatro">
                    <button type="button" onclick="basico()" class="btn btn-secondary">Adicionar outra experiencia</button>
                    <button type="button"  onclick="basico2()" class="btn btn-secondary">Adicionar outro formação</button>
                    <button type="submit"   class="btn btn-primary">Enviar</button>
                </div>
                
            </div>
    
    
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="js/jquery.mask.min.js"></script>
<script>
$("#telefone").mask("(00) 0000-00009");
$("#cep").mask("00.000-000");
$("#cpf").mask("000.000.000-00")
$("#data").mask("00/00/0000")
</script>


</html>