<div class="dashboard d-flex flex-column container-fluid text-white">
    <div class="d-flex m-2">
        <div class="d-flex flex-column mt-2">
            <?php
                include_once('../php/config.php');

                $id = $_GET['id'];
                
                $sql = "SELECT `type`, `identifier` FROM warrants WHERE warrants.identifier = $id";
                $result = mysqli_query($conn, $sql);

                while($warr = mysqli_fetch_assoc($result)){
                    echo '<h3 class="m-0 text-uppercase">MANDADO DE '.$warr['type'].'</h3>';
                    echo '<p class="m-0 lead">ID do Mandado: '.$warr['identifier'].'</p>';
                }
            ?>
        </div>
        <div class="d-flex flex-fill justify-content-end m-auto">
            <p class="m-0 d-flex align-items-center" id="info-msg"></p>
            <?php
                include_once('../php/config.php');
                
                $id = $_GET['id'];
                
                echo '<button type="submit" class="btn btn-primary mx-2" onclick="saveWarrEdit('.$id.');">Salvar</button>';
            ?>
            <button type="button" class="btn btn-secondary mx-1" onclick="loadWarrant();">Voltar</button>
        </div>
    </div>
    <div class="d-flex flex-wrap flex-grow-1">
        <div class="d-flex flex-grow-1 m-2 p-3 border border-primary" style="background-color: #0a122b;">
            <div class="d-flex flex-column justify-content-center justify-content-xxl-start">
                <h5>Desfavorecido</h5>
                <figure class="m-0" style="max-height: 300px; max-width: 200px;">
                    <?php
                        include_once('../php/config.php');
                        $data = $_GET['id'];

                        $disav_sql = "SELECT disadvantaged FROM warrants WHERE warrants.identifier = $id";
                        $result = mysqli_query($conn, $disav_sql);

                        $cit_id = mysqli_fetch_assoc($result);
                        $cit_id = $cit_id['disadvantaged'];

                        $image_sql = "SELECT img_link FROM users_record WHERE users_record.citizen_id = $cit_id";
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
            </div>
            <div class="d-flex flex-column justify-content-center justify-content-xxl-start mt-lg-4">
                <ul class="d-flex list-group list-group-flush lh-sm ps-2">
                    <?php
                        include_once('../php/config.php');

                        $id = $_GET['id'];
                        
                        $disav_sql = "SELECT disadvantaged FROM warrants WHERE warrants.identifier = $id";
                        $result = mysqli_query($conn, $disav_sql);

                        $cit_id = mysqli_fetch_assoc($result);
                        $cit_id = $cit_id['disadvantaged'];

                        $cit_info_sql = "SELECT id, firstname, lastname, dateofbirth, sex, height FROM users WHERE users.id = $cit_id ";
                        $result = mysqli_query($conn, $cit_info_sql);

                        while($cit_info = mysqli_fetch_assoc($result)){
                            $dateStr = $cit_info['dateofbirth'];
                            $date = date_create($dateStr);

                            if($cit_info['sex'] == 'm'){
                                $cit_info['sex'] = "Masculino";
                            }
                            else{
                                $cit_info['sex'] = "Feminino";
                            }
                            echo '<li class="list-group-item bg-transparent text-white">ID: '.$cit_info['id'].'</li>';
                            echo '<li class="list-group-item bg-transparent text-white">Nome: '.$cit_info['firstname'].' '.$cit_info['lastname'].'</li>';
                            echo '<li class="list-group-item bg-transparent text-white">Data de Nascimento: '.date_format($date,"d/m/Y").'</li>';
                            echo '<li class="list-group-item bg-transparent text-white">Sexo: '.$cit_info['sex'].'</li>';
                            echo '<li class="list-group-item bg-transparent text-white">Altura: '.$cit_info['height'].' cm</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div class="d-flex flex-column flex-grow-1 m-2 p-3 border border-primary" style="background-color: #0a122b;">
            <h5>Detalhes</h5>
            <?php
                include_once('../php/config.php');

                $id = $_GET['id'];

                $sql = "SELECT completed FROM warrants WHERE warrants.identifier = $id";
                $result = mysqli_query($conn, $sql);

                while($status = mysqli_fetch_assoc($result)){
                    if($status['completed'] == 0){
                        echo '<div class="form-check mb-2">';
                        echo '<label for="warr-completed" class="form-check-label">Mandado Completo</label>';
                        echo '<input type="checkbox" value="" id="warr-completed" class="form-check-input">';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="form-check mb-2">';
                        echo '<label for="warr-completed" class="form-check-label">Mandado Completo</label>';
                        echo '<input type="checkbox" value="" id="warr-completed" class="form-check-input" checked>';
                        echo '</div>';
                    }
                }
            ?>
            <div class="text-white" id="warr-types">
                <label for="warr-types" class="text-white form-label">• Tipo de mandado</label>
                <?php
                    include_once('../php/config.php');

                    $id = $_GET['id'];

                    $sql = "SELECT `type` FROM warrants WHERE warrants.identifier = $id";
                    $result = mysqli_query($conn, $sql);
                    $type = mysqli_fetch_assoc($result);
                    $type = $type['type'];

                    if($type == "Prisão"){
                        echo '<div class="form-check">';
                        echo '<label for="busca" class="form-label">Mandado de Busca e Apreensão</label>';
                        echo '<input type="radio" name="warr-type" id="busca" class="form-check-input">';
                        echo '</div>';
                        echo '<div class="form-check">';
                        echo '<label for="prisao" class="form-label">Mandado de Prisão</label>';
                        echo '<input type="radio" name="warr-type" id="prisao" class="form-check-input" checked>';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="form-check">';
                        echo '<label for="busca" class="form-label">Mandado de Busca e Apreensão</label>';
                        echo '<input type="radio" name="warr-type" id="busca" class="form-check-input" checked>';
                        echo '</div>';
                        echo '<div class="form-check">';
                        echo '<label for="prisao" class="form-label">Mandado de Prisão</label>';
                        echo '<input type="radio" name="warr-type" id="prisao" class="form-check-input">';
                        echo '</div>';
                    }
                    
                ?>                
            </div>
            <div class="d-flex flex-column flex-grow-1">
                <label for="involved-leo" class="form-label">• Oficiais responsáveis</label>
                <div class="flex-grow-1">
                    <?php
                        include_once('../php/config.php');

                        $id = $_GET['id'];

                        $sql = "SELECT leo FROM warrants WHERE warrants.identifier = $id";
                        $result = mysqli_query($conn, $sql);

                        while($leo = mysqli_fetch_assoc($result)){
                            echo '<textarea name="involved-leo" id="involved-leo" class="form-control h-100">'.$leo['leo'].'</textarea>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-grow-1 m-2 p-3 border border-primary" style="background-color: #0a122b;">
            <h5>Resumo dos Fatos</h5>
            <p class="text-muted">Insira a descrição dos fatos que levaram à abertura do mandado</p>
            <div class="d-flex flex-column flex-grow-1">
                <label for="involved-leo" class="form-label">• Resumo</label>
                <div class="flex-grow-1">
                <?php
                    include_once('../php/config.php');

                    $id = $_GET['id'];

                    $sql = "SELECT summary FROM warrants WHERE warrants.identifier = $id";
                    $result = mysqli_query($conn, $sql);

                    while($summary = mysqli_fetch_assoc($result)){
                        echo '<textarea name="summary" id="summary" class="d-flex form-control h-100">'.$summary['summary'].'</textarea>                            ';
                    }
                ?>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-grow-1 m-2 p-3 border border-primary" style="background-color: #0a122b;">
            <h5>Detalhes da investigação</h5>
            <p class="text-muted">Insira a descrição e os resultados da investigação.</p>
            <div class="d-flex flex-column flex-grow-1">
                <label for="involved-leo" class="form-label">• Detalhes (opcional)</label>
                <div class="flex-grow-1">
                    <?php
                        include_once('../php/config.php');

                        $id = $_GET['id'];

                        $sql = "SELECT details FROM warrants WHERE warrants.identifier = $id";
                        $result = mysqli_query($conn, $sql);

                        while($details = mysqli_fetch_assoc($result)){
                            echo '<textarea name="details" id="details" class="d-flex form-control h-100">'.$details['details'].'</textarea>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-grow-1 m-2 p-3 border border-primary" style="background-color: #0a122b;">
            <h5>Comentários</h5>
            <p class="text-muted">Insira informações gerais adicionais</p>
            <div class="d-flex flex-column flex-grow-1">
                <label for="involved-leo" class="form-label">• Comentário (opcional)</label>
                <div class="flex-grow-1">
                    <?php
                        include_once('../php/config.php');

                        $id = $_GET['id'];

                        $sql = "SELECT comments FROM warrants WHERE warrants.identifier = $id";
                        $result = mysqli_query($conn, $sql);

                        while($comments = mysqli_fetch_assoc($result)){
                            echo '<textarea name="comments" id="comments" class="d-flex form-control h-100">'.$comments['comments'].'</textarea>';
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
