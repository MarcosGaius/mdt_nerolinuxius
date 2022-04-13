searchInput = document.getElementById('fines-search');
body = document.querySelector('.body');

function inputHandler(e){
    if (e.key == "Enter"){
        let search = getHTML(`/snippets/fines.php?search=${searchInput.value}`);
        let script = document.getElementById('fines-script');
        Promise.all([search]).then((newHTML) => {        
            insertHTML(body, newHTML[0], 1);
            script.remove();
            dynamicallyLoadScript('js/fines_search.js', 'fines-script');        
        });
    }
}

searchInput.addEventListener('keydown', inputHandler);
