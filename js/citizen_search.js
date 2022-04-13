searchInput = document.getElementById('citizen-search');
body = document.querySelector('.body');

function inputHandler(e){
    if (e.key == "Enter"){
        let search = getHTML(`/snippets/citizen.php?search=${searchInput.value}`);
        let script = document.getElementById('citizen-script');
        Promise.all([search]).then((newHTML) => {        
            insertHTML(body, newHTML[0], 1);
            script.remove();
            dynamicallyLoadScript('js/citizen_search.js', 'citizen-script');        
        });
    }
}

searchInput.addEventListener('keydown', inputHandler);
