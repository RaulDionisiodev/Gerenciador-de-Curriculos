<div class="jumbotrom">
        <form action="curriculo.php" method="get">
            <label for="membro">Selecione um dos membros para ver seu curriculo </label>
            <select class="form-control" name="membro" >
                <?php foreach ($membros as $membro) : ?>
                <option value="<?= $membro ?>"> <?=ucwords($membro) ?> </option>
                <?php endforeach; ?>     
            </select>

            <button class="btn btn-primary">Mostrar Currículo</button>
            
        </form>
</div>
