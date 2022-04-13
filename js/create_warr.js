function saveWarrant(){
    let citizen = document.getElementById("citizen");
    let nameId = citizen.options[citizen.selectedIndex].value;
    let typeSearch = document.getElementById("busca").checked;
    let typeArrest = document.getElementById("prisao").checked;
    let involvedLeo = document.getElementById("involved-leo").value;
    let summary = document.getElementById("summary").value;
    let details = document.getElementById("inv-details").value;
    let comment = document.getElementById("comment").value;

    let nameFeedback = document.getElementById("name-invalid-feedback");
    let warrFeedback = document.getElementById("warrType-invalid-feedback");
    let leoFeedback = document.getElementById("leo-invalid-feedback");
    let summaryFeedback = document.getElementById("summary-invalid-feedback");

    nameFeedback.innerHTML = "";
    warrFeedback.innerHTML = "";
    leoFeedback.innerHTML = "";
    summaryFeedback.innerHTML = "";

    let type = 'Busca e apreensão';


    if(nameId == 0){
        nameFeedback.innerHTML = "Por favor, preencha o campo acima!";
        return;
    }
    else if(typeSearch == false){
        type = 'Prisão';
        if(typeArrest == false){
            warrFeedback.innerHTML = "Por favor, preencha o campo acima!";
            return;
        }
    }
    else if(typeSearch == false && typeSeizure == false){
        warrFeedback.innerHTML = "Por favor, preencha o campo acima!";
        return;
    }
    else if(involvedLeo == ""){
        leoFeedback.innerHTML = "Por favor, preencha o campo acima!";
        return;
    }
    else if(summary == ""){
        summaryFeedback.innerHTML = "Por favor, preencha o campo acima!";
        return;
    }

    const warrData = new FormData();
    warrData.append('disadvantaged', nameId);
    warrData.append('type', type);
    warrData.append('involved-leo', involvedLeo);
    warrData.append('summary', summary);
    warrData.append('details', details);
    warrData.append('comment', comment);

    fetch('../php/ins_warrant.php', {
        method: 'POST',
        body: warrData
    })
    .then(() => { document.getElementById('info-msg').innerHTML = "Mandado salvo com sucesso!"; return;})
    .catch((err) => { console.error(err); document.getElementById('info-msg').innerHTML = "Houve um erro ao salvar seu mandado!"})
}