<div class="dashboard d-flex flex-column flex-grow-1 p-4 w-100">
    <div class="container-fluid d-flex flex-column flex-fill" style="max-height: 80vh;">
        <div class="d-flex flex-column my-2">
            <p class="h5 text-light">Mandados</p>
            <p class="h6 text-muted">Abaixo estão listadas todas os mandados em aberto, com ID do mandado, tipo e o desfavorecido.</p>
            <p class="h6 text-muted">Se deseja criar um novo mandado, clique no botão abaixo.</p>
            <div class="d-flex">
                <button class="btn btn-primary btn-sm" onclick="createWarr();">Criar mandado</button>
            </div>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="warrant-search" id="warrant-search" placeholder="id, tipo ou desfavorecido.">
        </div>
        <div class="table-responsive">
            <table class="table table-borderless table-light table-striped table-hover mb-0">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Desfavorecido</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detalhes</th>
                    <th scope="col">Excluir</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        include("../php/list_warrants.php");

                        while($warrant = mysqli_fetch_assoc($result)){
                            if($warrant['completed'] == 0){
                                $warrant['completed'] = "Expedido";
                            }
                            else{
                                $warrant['completed'] = "Cumprido";
                            }

                            $id = $warrant['identifier'];

                            echo "<tr>";
                                echo "<td id='warrant-id'>".$warrant['identifier']."</td>";
                                echo "<td>".$warrant['firstname'].' '.$warrant['lastname']."</td>";
                                echo "<td>".$warrant['type']."</td>";
                                echo "<td>".$warrant['completed']."</td>";
                                echo "<td>".'<p class="fst-italic text-decoration-underline link-primary m-0" onclick="loadWarrDetails('.$id.');" style="cursor: pointer;">Ver mais</p>'."</td>";
                                echo '<td><button type="button" class="btn btn-danger btn-sm" onclick="delWarr('.$id.')"><i class="bi bi-x-lg"></i></button></td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <?php
                  include("../php/list_warrants.php");

                  if(mysqli_num_rows($result) == 0){
                    echo '<p class="h5 text-light text-center m-4">Nenhum registro encontrado!</p>';
                  }
              ?>
        </div>
    </div>
</div>