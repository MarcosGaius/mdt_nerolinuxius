searchInput = document.getElementById('warrant-search');
body = document.querySelector('.body');

function inputHandler(e){
    if (e.key == "Enter"){
        let search = getHTML(`/snippets/warrant.php?search=${searchInput.value}`);
        let script = document.getElementById('warrant-script');
        Promise.all([search]).then((newHTML) => {        
            insertHTML(body, newHTML[0], 1);
            script.remove();
            dynamicallyLoadScript('js/warrant_search.js', 'warrant-script');
        });
    }
}

searchInput.addEventListener('keydown', inputHandler);

function delWarr(data){
    let identifier = data;
    const delData = new FormData();
    delData.append('id', identifier);

    let discordHook = "";
    const hookData = JSON.stringify({
        "content": `${rdmTextLogin} deletou o Mandado de ID ${identifier}!`,
        "avatar_url": 'https://thumbs.dreamstime.com/b/x-red-mark-cross-sign-graphic-symbol-crossed-brush-strokes-red-mark-cross-sign-graphic-symbol-154904211.jpg'
    });
    

    fetch('../php/del_warr.php', {
        method: 'POST',
        body: delData
    })
    .then(() => {
        fetch(discordHook, {
            headers: {
                'Content-Type': 'application/json',
            },
            method: 'POST',
            body: hookData
        })
        .then(() => {return;})
        .catch((err) => {console.error(err);} )    
        loadWarrant(); 
        return;
    })
    .catch((err) => {console.error(err);} )
}
