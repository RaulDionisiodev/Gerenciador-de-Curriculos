
  <div class="jumbotron clearfix">
    <h1>Olá, eu sou <?= $nome ?>.<span class='small'><br /> Eu sou um <?= $profissao?> com foco em <?= $especialidade ?></span></h1>
    
  

       <div class="pull-right">
            <?php foreach ($contato as $canal => $url): ?>     
            <a class="btn btn-lg btn-primary" href="<?= $url ?>"><?= $canal ?></a>
            <?php endforeach; ?>      
        </div>
     </div>

     <div class="row">
     <div class="col-md-4">
        <h2>Formação</h2>
            <?php foreach ($fomracao as $curso): ?>
                <?php if(!$curso['termino']) {$curso['termino'] = 'Atual';} ?>
                <h3><?= $curso['instituicao'] ?><h3>
                <span class = "small"><?=$curso['inicio']. ' &mdash; '. $curso['termino'].' : '.$curso['curso'] ?></span>
            <?php endforeach ?> 
        </div>

     <div class="col-md-4">
        <h2>Experiência</h2>
            <?php foreach ($experiencia as $curso):?>           
                <h3><?= $curso['empresa'] ?><h3>
                <?php if(!$curso['termino']) {$curso['termino'] = 'Atual';} ?>
                <span class="small"><?=$curso['inicio']. ' &mdash; '. $curso['termino'].' '.$curso['ocupacao'] ?></span>
            <?php endforeach ?> 
     </div>

        <div class="col-md-4"> 
            <h2>Proficiências e habilidades<h2>
                <?php foreach ($habilidades as $habilidade): ?>
                    <div>
                    <p><?= $habilidade ?></p>
                    </div>         
                <?php endforeach?>
         </div>   
     </div>              
</div>
