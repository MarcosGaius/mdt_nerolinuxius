function sendImgData(id, phpfile){
    let photoLink = document.getElementById('photo-link').value;

    if(photoLink.length > 100){
        msg = document.getElementById('info-msg');
        msg.classList.add("text-danger");
        msg.innerHTML = "A entrada possui mais de 100 caracteres!";
        return;
    }
    
    const inputData = new FormData();
    inputData.append('id', id);
    inputData.append('photo-link', photoLink);

    fetch(phpfile, {
        method: 'POST',
        body: inputData
    })
    .then( (response) => {return response.text(); })
    .then( () => {
        document.getElementById('info-msg').innerHTML = "Imagem enviada com sucesso!";
        photoLink.value = '';
    })
    .catch( (err) => {
        console.error(err);
        document.getElementById('info-msg').innerHTML = "Houve um erro ao processar sua imagem.";
    });
}

textArea = document.getElementById('floatingTextarea');
citizenId = document.getElementById('citizenDetailId').innerHTML; //dá pra mudar pelo inspecionar, não deveria, mas não achei outra maneira

function textAreaHandler(){
    let text = textArea.value;
    const textData = new FormData();
    textData.append('id', citizenId);
    textData.append('rec-desc', text);

    fetch('../php/edit_rec_desc.php', {
        method: 'POST',
        body: textData
    })
    .catch( (err) => { console.error(err); });
}

textArea.addEventListener('focusout', textAreaHandler);

function addFine(data){
    let fineId = document.getElementById("inputGroupSelect01").selectedIndex;
    let sender = rdmTextLogin;

    const fineData = new FormData();
    fineData.append('id', data);
    fineData.append('fine-id', fineId);
    fineData.append('sender', sender);


    fetch('../php/citizen_add_fine.php', {
        method: 'POST',
        body: fineData
    })
    .then( () => {return;})
    .then( () => { loadCitizenDetails(data); })
    .catch( (err) => {console.error(err); });
}

function delFine(fineId, citId){
    const delData = new FormData();
    delData.append('id', fineId);

    fetch('../php/del_fine.php', {
        method: 'POST',
        body: delData
    })
    .then( () => {return;})
    .then( () => { loadCitizenDetails(citId); })
    .catch( (err) => {console.error(err); });
}