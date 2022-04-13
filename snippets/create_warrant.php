<div class="dashboard container-fluid">
    <div class="d-flex flex-column align-items-center text-white m-4 text-center">
        <h4 class="m-0 fw-bold">Criar Mandado</h4>
        <p class="m-0 lead">Preencha os dados abaixo para criar um mandado.</p>
    </div>

    <div class="d-flex justify-content-center">
        <form class="d-flex flex-wrap justify-content-between w-75">
            <fieldset class="d-flex flex-wrap flex-fill justify-content-between">
                <div class="text-white m-2 flex-fill" id="name-input">
                    <label for="citizen" class="form-label">Nome do desfavorecido</label>
                    <select name="citizen" id="citizen" class="form-select" required>
                        <?php
                            include('../php/config.php');

                            $sql = "SELECT id, firstname, lastname FROM users ORDER BY firstname ASC";
                            $result = mysqli_query($conn, $sql);

                            echo "<option>Escolha o nome.</option>";

                            while($citizen = mysqli_fetch_assoc($result)){
                                echo "<option value='".$citizen['id']."'>".$citizen['firstname']." ".$citizen['lastname']."</option>";
                            }
                        ?>
                    </select>
                    <div id="name-invalid-feedback" class="invalid-feedback" style="display:block;"></div>
                </div>
                
                <div class="text-white m-2" id="warr-types">
                    <label for="warr-types" class="text-white form-label">Tipo de mandado</label>
                    <div class="form-check">
                        <label for="busca" class="form-label">Mandado de Busca e Apreensão</label>
                        <input type="radio" name="warr-type" id="busca" class="form-check-input" required>
                    </div>
                    <div class="form-check">
                        <label for="prisao" class="form-label">Mandado de Prisão</label>
                        <input type="radio" name="warr-type" id="prisao" class="form-check-input" required>
                    </div>
                    <div id="warrType-invalid-feedback" class="invalid-feedback" style="display:block;"></div>
                </div>
            </fieldset>
            
            <fieldset class="d-flex flex-wrap flex-grow-1 justify-content-between">
                <div class="text-white m-2 flex-fill" id="leo-input">
                    <label for="involved-leo" class="form-label">Oficiais responsáveis</label>
                    <textarea name="involved-leo" id="involved-leo" class="form-control" rows="4" required></textarea>
                    <div id="leo-invalid-feedback" class="invalid-feedback" style="display:block;"></div>
                </div>

                <div class="text-white m-2 flex-fill" id="summary-input">
                    <label for="summary" class="form-label">Resumo dos fatos</label>
                    <textarea name="summary" id="summary" class="form-control" rows="4" required></textarea>
                    <div id="summary-invalid-feedback" class="invalid-feedback" style="display:block;"></div>
                </div>

                <div class="text-white m-2 flex-fill" id="details-input">
                    <label for="inv-details" class="form-label">Detalhes da investigação</label>
                    <textarea name="inv-details" id="inv-details" class="form-control" rows="4" required></textarea>
                    <div id="details-invalid-feedback" class="invalid-feedback" style="display:block;"></div>
                </div>

                <div class="text-white m-2 flex-fill" id="comment-input">
                    <label for="comment" class="form-label">Comentários</label>
                    <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="d-flex flex-fill justify-content-center text-white p-2" id="info-msg"></div>
    <div class="d-flex flex-fill justify-content-center py-2">
        <button type="submit" class="btn btn-primary mx-2" onclick="saveWarrant();">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1" onclick="loadWarrant();">Voltar</button>
    </div>
</div>