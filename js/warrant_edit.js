function saveWarrEdit(data){
    let completed = document.getElementById('warr-completed').checked;
    let typeSearch = document.getElementById('busca').checked;
    let leo = document.getElementById('involved-leo').value;
    let summary = document.getElementById('summary').value;
    let details = document.getElementById('details').value;
    let comments = document.getElementById('comments').value;

    (completed == false) ? completed = 0 : completed = 1;

    let type = "Mandado de Busca e Apreensão";
    (typeSearch == false) ? type = "Mandado de Prisão" : type;

    const editData = new FormData();
    editData.append('completed', completed);
    editData.append('type', type);
    editData.append('leo', leo);
    editData.append('summary', summary); 
    editData.append('details', details); 
    editData.append('comments', comments);  
    editData.append('id', data);

    fetch('../php/edit_warrant.php', {
        method: 'POST',
        body: editData
    })
    .then(() => { document.getElementById('info-msg').innerHTML = "Salvo com sucesso!"; return;})
    .catch((err) => { console.error(err); document.getElementById('info-msg').innerHTML = "Houve um erro ao salvar!";})
}