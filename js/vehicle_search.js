searchInput = document.getElementById('vehicle-search');
body = document.querySelector('.body');

function inputHandler(e){
    if (e.key == "Enter"){
        let search = getHTML(`/snippets/vehicles.php?search=${searchInput.value}`);
        let script = document.getElementById('vehicle-script');
        Promise.all([search]).then((newHTML) => {        
            insertHTML(body, newHTML[0], 1);
            script.remove();
            dynamicallyLoadScript('js/vehicle_search.js', 'vehicle-script');
        });
    }
}

searchInput.addEventListener('keydown', inputHandler);
