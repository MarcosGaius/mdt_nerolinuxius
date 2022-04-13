<div class="dashboard d-flex flex-column flex-grow-1 p-4 w-100">
    <div class="container-fluid d-flex flex-column flex-fill" style="max-height: 80vh;">
        <div class="d-flex flex-column my-2">
            <p class="h5 text-light">Pesquisa de cidadãos</p>
            <p class="h6 text-muted">Digite abaixo o que deseja buscar no banco de dados.</p>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="citizen-search" id="citizen-search" placeholder="nome, sobrenome, id, etc.">
        </div>
        <div class="table-responsive">
            <table class="table table-borderless table-light table-striped table-hover mb-0">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Ficha</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("../php/list_citizens.php");
                    
                    while($citizen = mysqli_fetch_assoc($result)){
                      if($citizen['sex'] == 'm'){
                        $citizen['sex'] = "Masculino";
                      }
                      else{
                        $citizen['sex'] = "Feminino";
                      }

                      $id = $citizen['id'];

                      echo "<tr>";
                          echo "<td>".$citizen['id']."</td>";
                          echo "<td>".$citizen['firstname']."</td>";
                          echo "<td>".$citizen['lastname']."</td>";
                          echo "<td>".$citizen['sex']."</td>";
                          echo "<td>".'<p class="fst-italic text-decoration-underline link-primary m-0" onclick="loadCitizenDetails('.$id.');" style="cursor: pointer;">Ver mais</p>'."</td>";
                      echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
              <?php
                  include("../php/list_citizens.php");

                  if(mysqli_num_rows($result) == 0){
                    echo '<p class="h5 text-light text-center m-4">Nenhum registro encontrado!</p>';
                  }
                
              ?>
        </div>
    </div>
</div>        