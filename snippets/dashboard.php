<div class="dashboard d-flex text-white justify-content-around flex-grow-1 overflow-auto">
    <div class="row w-100">
        
        <div class="d-flex flex-column col-12 col-lg-6 py-3">
            <div class="card border border-0 bg-transparent shadow-lg flex-fill pb-3">
                <div class="card-body box-info d-flex flex-column">
                    <h5 class="card-title">Bom dia, oficial!</h5>
                    <h6 class="card-subtitle text-muted current-date">Hoje é </h6>
                    <div class="loading">
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-white m-4" role="status"><span class="visually-hidden">Carregando...</span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 justify-content-between">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="city m-0 fs-6"></div>
                            <div class="weather m-0 fs-4"></div>
                        </div>
                        <div class="d-flex flex-column img-weather img-fluid justify-content-center"></div>
                    </div>
                    <h6 class="text-muted mb-0 fst-italic" style="font-size: 0.6rem;">Caso a cidade apresentada não corresponder a sua, certifique-se que a geolocalização está ativada no seu dispositivo/navegador.</h6>
                </div>
            </div>
            <div class="card border border-0 bg-transparent shadow-lg flex-fill pb-3">
                <div class="card-body box-info d-flex flex-column">
                    <h5 class="card-title">Contagem de cidadãos</h5>
                    <p class="citizen-count fs-2 fw-bold flex-grow-1"><i class="fa-solid fa-person me-3 fa-xs"></i>
                        <?php
                             include("../php/veh_citizen_count.php");
                             echo $citizenCount;
                        ?>
                    </p>
                    <h6 class="text-muted mb-0 fst-italic" style="font-size: 0.6rem;">Estimativa de acordo com dados da prefeitura.</h6>
                </div>
            </div>
            <div class="card border border-0 bg-transparent shadow-lg flex-fill">
                <div class="card-body box-info d-flex flex-column">
                    <h5 class="card-title">Contagem de veículos</h5>
                    <p class="vehicles-count fs-2 fw-bold flex-grow-1"><i class="fa-solid fa-car me-3 fa-xs"></i>
                        <?php
                             include("../php/veh_citizen_count.php");
                             echo $vehicleCount;
                        ?>
                        </p>
                    <h6 class="text-muted mb-0 fst-italic mt-2" style="font-size: 0.6rem;">Estimativa de acordo com dados da prefeitura.</h6>
                </div>
            </div>        
        </div>
    
        <div class="d-flex flex-column col-12 col-lg-6 pb-3 py-lg-3">
            <div class="card border border-0 bg-transparent shadow-lg flex-fill pb-3">
                <div class="card-body box-info">
                    <h5 class="card-title pb-4">OFICIAIS EM SERVIÇO</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm table-responsive text-white m-0">
                            <caption>Lista de quais oficiais estão com o ponto aberto neste momento.</caption>
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Patente</th>
                                    <th scope="col">Distintivo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include("../php/clocked_leo.php");

                                    while($grade = mysqli_fetch_array($resultGrade)){
                                        $grades[] = $grade; 
                                    }

                                    while($cop = mysqli_fetch_assoc($resultCop)){
                                        echo "<tr>";
                                            echo "<td>".$cop['firstname'].' '.$cop['lastname']."</td>";
                                            echo "<td>".$grades[$cop['job_grade']]['label']."</td>";
                                            echo "<td>".$cop['badge']."</td>";
                                        echo "</tr>";
                                    }                                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-fill card border border-0 bg-transparent shadow-lg">
                <div class="card-body box-info">
                    <h5 class="card-title pb-4">MULTAS RECENTES</h5>
                    <div class="table-responsive-md">
                        <table class="table table-borderless table-sm text-white m-0">
                            <caption>Detalhes sobre as mais recentes multas aplicadas.</caption>
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Agente</th>
                                    <th scope="col">Infrator</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include("../php/list_last_fines.php");

                                    $i = 0;

                                    while($bills = mysqli_fetch_assoc($result)){
                                        $i++;
                                        if($i<4){
                                            $dateStr = $bills['date'];
                                            $date = date_create($dateStr);

                                            echo "<tr>";
                                                echo "<td>".$bills['sender']."</td>";
                                                echo "<td>".$bills['firstname'].' '.$bills['lastname']."</td>";
                                                echo "<td>".date_format($date,"d/m/Y")."</td>";
                                                echo "<td>".$bills['label']."</td>";
                                                echo "<td>".'R$ '.$bills['amount']."</td>";
                                            echo "</tr>";
                                        }
                                        else{
                                            return;
                                        }
                                    }                                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>