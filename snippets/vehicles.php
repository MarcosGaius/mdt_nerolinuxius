<div class="dashboard d-flex flex-column flex-grow-1 p-4 w-100">
    <div class="container-fluid d-flex flex-column flex-fill" style="max-height: 80vh;">
        <div class="d-flex flex-column my-2">
            <p class="h5 text-light">Pesquisa de veículos</p>
            <p class="h6 text-muted">Digite abaixo os dados do veículo que deseja buscar no banco de dados.</p>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="vehicle-search" id="vehicle-search" placeholder="proprietário, placa ou modelo.">
        </div>
        <div class="table-responsive">
            <table class="table table-borderless table-light table-striped table-hover mb-0">
                <thead>
                  <tr>
                    <th scope="col">Proprietário</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Tipo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("../php/list_vehicles.php");

                    while($vehicle = mysqli_fetch_assoc($result)){

                      echo "<tr>";
                            echo "<td>".$vehicle['firstname'].' '.$vehicle['lastname']."</td>";
                            echo "<td>".$vehicle['plate']."</td>";
                            echo "<td>".$vehicle['vehicle']."</td>";
                            echo "<td>".$vehicle['type']."</td>";
                        echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
              <?php
                  include("../php/list_vehicles.php");

                  if(mysqli_num_rows($result) == 0){
                    echo '<p class="h5 text-light text-center m-4">Nenhum registro encontrado!</p>';
                  }
                
              ?>
        </div>
    </div>
</div>        