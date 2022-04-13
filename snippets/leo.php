<div class="dashboard d-flex flex-column flex-grow-1 p-4 w-100">
    <div class="container-fluid d-flex flex-column flex-fill" style="max-height: 80vh;">
        <div class="d-flex flex-column my-2">
            <p class="h5 text-light">Quadro de oficiais</p>
            <p class="h6 text-muted">Abaixo estão listados todos os oficiais em ordem crescente de patente.</p>
        </div>
        <div class="table-responsive-md">
            <table class="table table-borderless table-light table-striped table-hover mb-0">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Patente</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Distintivo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("../php/list_leo.php");

                    while($grade = mysqli_fetch_array($resultGrade)){
                        $grades[] = $grade; 
                    }

                    while($cop = mysqli_fetch_assoc($resultCop)){
                        if($cop['sex'] == 'm'){
                          $cop['sex'] = "Masculino";
                        }
                        else{
                          $cop['sex'] = "Feminino";
                        }

                        echo "<tr>";
                            echo "<td>".$cop['firstname'].' '.$cop['lastname']."</td>";
                            echo "<td>".$grades[$cop['job_grade']]['label']."</td>";
                            echo "<td>".$cop['sex']."</td>";
                            echo "<td>".$cop['height']."</td>";
                            echo "<td>".$cop['badge']."</td>";
                        echo "</tr>";
                    }     
                  ?>
                </tbody>
              </table>
        </div>
    </div>
</div>        