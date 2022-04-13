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
