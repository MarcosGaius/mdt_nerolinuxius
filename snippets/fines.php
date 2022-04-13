<div class="dashboard d-flex flex-column flex-grow-1 p-4 w-100">
    <div class="container-fluid d-flex flex-column flex-fill" style="max-height: 80vh;">
        <div class="d-flex flex-column my-2">
            <p class="h5 text-light">Catálogo de multas</p>
            <p class="h6 text-muted">Abaixo estão listadas todas as multas, com descrição, valores e tipos.</p>
            <p class="h6 text-muted" style="font-size: 0.8rem;">Você pode preencher o campo abaixo em busca de multas específicas!</p>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="fines-search" id="fines-search" placeholder="descrição, valor ou tipo.">
        </div>
        <div class="table-responsive">
            <table class="table table-borderless table-light table-striped table-hover mb-0">
                <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Categoria</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        include("../php/list_fines.php");

                        while($fines = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td>".$fines['label']."</td>";
                                echo "<td>".$fines['amount']."</td>";
                                echo "<td>".$fines['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <?php
                  include("../php/list_fines.php");

                  if(mysqli_num_rows($result) == 0){
                    echo '<p class="h5 text-light text-center m-4">Nenhum registro encontrado!</p>';
                  }
                
              ?>
        </div>
    </div>
</div>