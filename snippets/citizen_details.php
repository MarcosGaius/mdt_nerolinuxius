     <div class="d-md-flex flex-column min-vh-100 w-100" style="background-color: #000c2c;">
        
        <div class=" d-flex p-3 p-md-2 text-white bg-primary" style="border-bottom: white 1px solid;">
            <div class="col-10 text-start">
                <h5 class="m-0 ps-md-3"><b>FICHA CRIMINAL -</b> Los Santos Police Departament</h5>
            </div>
            <div class="col-2 d-flex">
                <div class="d-flex flex-fill justify-content-end m-auto">
                    <button type="button" id="button-close" class="btn-close btn-close-white" aria-label="Fechar" onclick="loadCitizen(1);"></button>
                </div>
            </div>
        </div>
        
        <div class="d-md-flex flex-fill">

            <div class="col-12 col-md-8 d-flex flex-column">

                    <div class="d-md-flex">
                        <div class="d-flex justify-content-center p-3">
                            <div>
                                <figure class="d-flex justify-content-center mb-0 bg-secondary" style="max-height: 300px; max-width: 200px;">
                                    <?php
                                        include_once('../php/config.php');
                                        $data = $_GET['id'];

                                        $image_sql = "SELECT img_link FROM users_record WHERE users_record.citizen_id LIKE '%$data%'";
                                        $image_result = mysqli_query($conn,$image_sql);

                                        if(mysqli_num_rows($image_result) == 0){
                                            echo '<img src="../images/photo.png" alt="imagem padrão" class="img-fluid">';
                                        }
                                        else{
                                            while($img = mysqli_fetch_assoc($image_result)){
                                                echo '<img src='.'"'.$img['img_link'].'"'.' alt="Imagem do cidadão. (Cheque se o link está correto)" class="img-fluid text-white text-center" style="height: 300px; width= 200px;">';
                                            }
                                        }
                                    ?>
                                </figure>
                                <div class="d-flex flex-fill justify-content-center pt-2">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Alterar Foto</button>
                                </div>
            
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Insira o link da imagem</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="document.getElementById('info-msg').innerHTML = '' "></button>
                                        </div>
                                            <div class="modal-body">
                                                <p>Dê preferência para imagens do Imgur, com o tamanho 215x300 para não haver cortes.</p>
                                                <div class="input-group input-group-sm mb-3">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Link</span>
                                                    <?php
                                                        include_once('../php/config.php');

                                                        $data = $_GET['id'];

                                                        $sql = "SELECT img_link FROM users_record WHERE users_record.citizen_id = $data";
                                                        $result = mysqli_query($conn,$sql);
                                                        
                                                        if(mysqli_num_rows($result) > 0){
                                                            while($img = mysqli_fetch_assoc($result)){
                                                                echo '<input type="text" class="form-control" id="photo-link" name="photo-link" placeholder="https://i.imgur.com/exemplo.png" value="'.$img['img_link'].'">';
                                                                }        
                                                        }
                                                        else{
                                                            echo '<input type="text" class="form-control" id="photo-link" name="photo-link" placeholder="https://i.imgur.com/exemplo.png">';

                                                        }
                                                    ?>                                                
                                                </div>
                                                <div id="info-msg" class="d-flex justify-content-center"></div>
                                            </div> 
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('info-msg').innerHTML = '' ";>Fechar</button>
                                                <?php
                                                    include_once('../php/config.php');

                                                    $data = $_GET['id'];
                                                    echo "<button type='submit' class='btn btn-primary' name='save'  onclick='sendImgData(".$data.", \"../php/edit_img.php\");'>Salvar</button>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="d-flex flex-column flex-fill py-3 mx-3 overflow-auto">
                                <h4 class="d-flex ps-3 text-white ps-3 py-1 bg-primary fw-bold">Dados</h4>
                                <hr class="bg-white m-0 ">
                                <ul class="d-flex list-group list-group-flush px-3 lh-sm">
                                    <?php
                                        include_once("../php/search_citizen.php");

                                        while($user = mysqli_fetch_assoc($result)){
                                            $dateStr = $user['dateofbirth'];
                                            $date = date_create($dateStr);

                                            if($user['sex'] == 'm'){
                                                $user['sex'] = "Masculino";
                                            }
                                            else{
                                                $user['sex'] = "Feminino";
                                            }

                                            echo '<li class="list-group-item bg-transparent text-white"><b>ID: </b><span id="citizenDetailId">'.$user['id'].'</span></li>';
                                            echo '<li class="list-group-item bg-transparent text-white"><b>Nome completo: </b>'.$user['firstname'].' '.$user['lastname'].'</li>';
                                            echo '<li class="list-group-item bg-transparent text-white"><b>Data de nascimento: </b>'.date_format($date,"d/m/Y").'</li>';
                                            echo '<li class="list-group-item bg-transparent text-white"><b>Sexo: </b>'.$user['sex'].'</li>';
                                            echo '<li class="list-group-item bg-transparent text-white"><b>Altura: </b>'.$user['height'].' cm'.'</li>';
                                        }
                                    ?>
                                </ul>
                                <hr class="bg-white m-0">
                        </div>
                    </div>
    
                    <div class="d-flex flex-fill">
                        <div class="d-flex flex-column flex-fill py-3 overflow-auto mx-3" style="height: 100%;">
                            <h4 class="d-flex ps-3 py-1 text-white fw-bold bg-primary">MULTAR</h4>
                            <hr class="bg-white m-0">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Multas:</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Escolha a multa...</option>
                                    <?php
                                        include_once("../php/search_citizen.php");

                                        while($fine = mysqli_fetch_assoc($resultFines)){
                                            echo "<option value=".$fine['id'].">".$fine['label']." | R$ ".$fine['amount']."</option>";
                                        }
                                    ?>
                                </select>
                                <?php
                                    include_once('../php/config.php');
                                    
                                    $data = $_GET['id'];

                                    echo '<button class="btn btn-primary" type="button" id="button-addon2" onclick="addFine('.$data.');">Multar</button>';
                                ?>
                            </div>
                            <ul class="d-flex list-group list-group-flush overflow-auto" id="fine-list">
                                <?php
                                    include_once('../php/config.php');

                                    $data = $_GET['id'];
                                    $sql = "SELECT `id`, `identifier`, `sender`, `target`, `label`, `amount`, `date` FROM billing WHERE billing.target = $data and billing.identifier = 'Fine' ORDER BY `date` DESC";
                                    $result = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($result) == 0){
                                        echo '<p class="my-auto text-center">Nenhuma multa encontrada!</p>';
                                    }
                                    else{
                                        while($cit_fines = mysqli_fetch_assoc($result)){
                                            $dateStr = $cit_fines['date'];
                                            $date = date_create($dateStr);
    
                                            echo '<li class="list-group-item p-0 py-1 px-2 d-flex border rounded border-dark justify-content-between">';
                                            echo '<p class="my-auto">'.$cit_fines['label'].' - R$ '.$cit_fines['amount'].' ('.date_format($date,"d/m/Y").') | Agente: '.$cit_fines['sender'].'</p>';
                                            echo '<button type="button" class="btn btn-danger btn-sm" onclick="delFine('.$cit_fines['id'].','.$data.')"><i class="bi bi-x-lg"></i></button>';
                                            echo '</li>';
                                        }
                                    }
                                ?>
                                </li>
                            </ul>
                            <hr class="bg-white m-0">
                        </div>  
                    </div>
                
            </div>
            
            <div class="col-12 col-md-4 d-flex flex-column overflow-auto">
                <div class="d-flex flex-column py-3 mx-3 overflow-auto">
                    <h4 class="d-flex ps-3 text-white ps-3 py-1 bg-primary fw-bold">Licenças</h4>
                    <hr class="bg-white m-0 ">
                    <ul class="d-flex list-group list-group-flush px-3 lh-sm">
                        <?php
                            include_once('../php/config.php');
                            $data = $_GET['id'];

                            $license_sql = "SELECT * FROM user_licenses INNER JOIN licenses ON user_licenses.user_license_type = licenses.license_type WHERE user_licenses.license_owner LIKE '%$data%'";
                            $license_result = mysqli_query($conn,$license_sql);

                            if(mysqli_num_rows($license_result) == 0){
                                echo '<li class="list-group-item bg-transparent text-white">Nenhuma licença encontrada.</li>';
                            }
                            else{
                                while($license = mysqli_fetch_assoc($license_result)){
                                    echo '<li class="list-group-item bg-transparent text-white"><b>'.$license['license_label'].': </b>'.$license['user_license_type'].'</li>';
                                }
                            }
                        ?>
                    </ul>
                    <hr class="bg-white m-0">
                </div>
                <div class="d-flex flex-column py-3 mx-3 overflow-auto">
                    <h4 class="d-flex ps-3 text-white ps-3 py-1 bg-primary fw-bold">Veículos</h4>
                    <hr class="bg-white m-0 ">
                    <ul class="d-flex list-group list-group-flush px-3 lh-sm">
                        <?php
                            include_once('../php/config.php');
                            $data = $_GET['id'];

                            $veh_sql = "SELECT * FROM owned_vehicles WHERE owned_vehicles.owner LIKE '%$data%'";
                            $veh_result = mysqli_query($conn,$veh_sql);

                            if(mysqli_num_rows($veh_result) == 0){
                                echo '<li class="list-group-item bg-transparent text-white">Nenhum veículo encontrado.</li>';
                            }
                            else{
                                while($veh = mysqli_fetch_assoc($veh_result)){
                                    echo '<li class="list-group-item bg-transparent text-white">'.$veh['vehicle'].' - '.$veh['plate'].'</li>';
                                }
                            }
                        ?>
                    </ul>
                    <hr class="bg-white m-0">
                </div>
                <div class="d-flex flex-column flex-fill py-3 mx-3 overflow-auto">
                    <h4 class="d-flex ps-3 text-white ps-3 py-1 bg-primary fw-bold">Descrição</h4>
                    <hr class="bg-white m-0 ">
                    <div class="form-floating" style="height: 100%;">
                        <?php
                            include_once('../php/config.php');
                            $data = $_GET['id'];

                            $desc_sql = "SELECT rec_desc FROM users_record WHERE users_record.citizen_id LIKE '%$data%'";
                            $desc_result = mysqli_query($conn,$desc_sql);

                            if(mysqli_num_rows($desc_result) == 0){
                                echo '<textarea class="form-control" placeholder="Deixe o comentário" id="floatingTextarea" style="height: 100%;"></textarea>';
                            }
                            else{
                                while($desc = mysqli_fetch_assoc($desc_result)){
                                    $str_desc = $desc['rec_desc'];
                                    echo '<textarea class="form-control" placeholder="Deixe o comentário" id="floatingTextarea" style="height: 100%;">'.$str_desc.'</textarea>';
                                }

                            }
                        ?>
                        <label for="floatingTextarea">Insira a descrição</label>
                    </div>
                    <hr class="bg-white m-0">
                </div>
            </div>
        </div>

    </div>
    