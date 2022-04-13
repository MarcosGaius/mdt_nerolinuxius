//################################ NERO LINUXIUS LOADING ################################//

const loadSpinner = document.querySelector('.startup')
const loginPage = document.querySelector('.login')
var spinCount = 0;

function loadingHandler(){
    spinCount++;
    if(spinCount > 1){
        loadSpinner.parentElement.removeChild(loadSpinner);
        loginPage.style.display = 'block';
        typing();
    }
}

window.addEventListener('animationiteration', loadingHandler); 

//################################ MDT LOGIN ################################//

var i=0, j=0, loginText, passText;
var quotes = ["“O homem não é nada além daquilo que a educação faz dele.” - IMMANUEL KANT","“É mais fácil obter o que se deseja com um sorriso do que com a ponta da espada.” - WILLIAM SHAKESPEARE","“Lembre-se que as pessoas podem tirar tudo de você, menos o seu conhecimento.” - ALBERT EINSTEIN","“Geralmente aqueles que sabem pouco falam muito e aqueles que sabem muito falam pouco.” - JEAN-JACQUES ROUSSEAU","“Quanta mais vazia a carroça, maior é o barulho que ela faz.” - ZÉ PILINTRA","“A inteligência e o caráter é o objetivo da verdadeira educação.” - MARTIN LUTHER KING","“Deve-se aprender sempre, até mesmo com um inimigo.” - SIR ISAAC NEWTON","“Uma pessoa inteligente resolve um problema, um sábio o previne.” - ALBERT EINSTEIN","“A inteligência é o único meio que possuímos para dominar os nossos instintos.” - SIGMUND FREUD","“Existe apenas um bem, o saber, e apenas um mal, a ignorância.” - SÓCRATES","“Não basta adquirir sabedoria; é preciso, além disso, saber utilizá-la.” - CÍCERO","“O gênio vê a resposta antes da pergunta.” - JULIUS ROBERT OPPENHEIMER","“O bobo se acha sábio, mas o sábio se acha bobo.” - WILLIAM SHAKESPEARE","“O maior juíz de seus atos deve ser você mesmo e não a sociedade.” - DALAI LAMA","“A paz exige quatro condições essenciais: verdade, justiça, amor e liberdade.” - JOÃO PAULO II","“Há quatro características que um juiz deve possuir: escutar com cortesia, responder sabiamente, ponderar com prudência e decidir imparcialmente.” - SÓCRATES","“Não há paz sem justiça, não há justiça sem perdão.” - JOÃO PAULO II","“A necessidade não conhece leis.” - SANTO AGOSTINHO","“A injustiça em qualquer lugar é uma ameaça à justiça em todo lugar.” - MARTIN LUTHER KING","“Onde não há lei, não há liberdade.” - JOHN LOCKE","“Pensem o que quiserem de ti; faz aquilo que te parece justo.” - PITÁGORAS","“A democracia é o governo do povo, pelo povo, para o povo.” - ABRAHAM LINCOLN","“Dá o que tens para que mereças receber o que te falta.” - SANTO AGOSTINHO","“A serenidade espiritual é o fruto máximo da justiça.” - EPICURO","“O que vale não é o quanto se vive; mas como se vive.” - MARTIN LUTHER KING","“Ame a vida que você vive. Viva a vida que você ama.” - BOB MARLEY","“Quem não vive para servir, não serve para viver.” - MAHATMAN GANDHI","“Melhor acrescentar vida aos dias do que dias à vida.” - RITA LEVI-MONTALCINI","“Viva agora o que outros só terão coragem de viver no futuro.” - PAULO COELHO","“O homem que não está disposto a morrer por uma causa não é digno de viver.” - MARTIN LUTHER KING","“Erros nos preparam para a vida.” - PADRE FÁBIO DE MELO","“Os documentos são salvos em horário de Brasília” - Nero Linuxius", "“A Tropa da VK vai fazer a vingança do Poze” - TROPA DA VK", "“O Ceifador matou o Pou” - MC POZE", "“Os cria tá de radinho” - MC GL", "“gORIla rOxO” - MATUÊ", "“Espoca o caneco na câmera” - coda", "“ralf.” - LEO AMARELINHO", "“O cara que faz o Fael nos ballas era o Rage?” - Harunoo", "“trezernto laike” - MENO"];
loginText = ['Nero Lucius', 'Jottinha', 'Mc Champions', 'Urassam', 'BibiGamer011', 'pedro', 'osvaldo', 'Homem Fosgo', 'Rei do Kudairo'];
passText = "•••••••••";

function randomElement(arr){
    return arr[Math.floor(Math.random()*arr.length)];
}

var rdmTextLogin = randomElement(loginText); 
var canTypePass = false;

function typing(){ 
    if(i<rdmTextLogin.length){
        document.getElementById('login-text').innerHTML += rdmTextLogin.charAt(i);
        i++;
        setTimeout(typing, 125);
    }
    else if(i>=rdmTextLogin.length && canTypePass == false){
        canTypePass = true;
        document.getElementById('pass-text').innerHTML = ""; 
    }
    if(j<passText.length && canTypePass){
        document.getElementById('pass-text').innerHTML += passText.charAt(j);
        j++;
        setTimeout(typing, 125);
    }
    return clearTimeout(125);
}

function randomQuotes(){
    let randomQuote = randomElement(quotes);
    document.getElementById('rdm-quotes').innerHTML += randomQuote;
}

randomQuotes();

//################################ Funções úteis ################################//

const insertHTML = (element, html, replace) => { //não substitui o html por padrão
    var target;
    if(typeof element === 'string'){
        target = document.querySelector(element);
        (replace) ? target.innerHTML = html : target.innerHTML += html;
    }
    else if (typeof element === 'object'){
        (replace) ? element.innerHTML = html : element.innerHTML += html;
    }
}

const getHTML = async (url) => {
    const response = await fetch(url);
    const html = await response.text();
    return html;
}

const removeActiveLink = () => {
    menuLinks.forEach(function(element){
        if(element.classList.contains('active')){
            element.classList.remove('active');
        }
        else{
            return;
        }
    });    
}

function dynamicallyLoadScript(url, id) {
    let script = document.createElement("script");  
    script.src = url;  
    script.id = id;
     
    document.body.appendChild(script); 
}

//################################ DASHBOARD ################################//

const loadDashboardfromMenu = () => {
    let mainContent = document.querySelector('.main-content');
    let headerHTML = getHTML('/snippets/header.html');
    let dashHTML = getHTML('/snippets/dashboard.php');
    let header = document.querySelector('.header');
    let body = document.querySelector('.body');
    let time = new Date();

    Promise.all([headerHTML, dashHTML]).then((HTMLlist) => {

        window.removeEventListener('animationiteration', loadingHandler); 
        loginPage.parentElement.removeChild(loginPage); 
        mainContent.style.display = 'block'; 
        insertHTML(header, HTMLlist[0], 1);
        insertHTML(body, HTMLlist[1], 0);
        insertHTML('.current-date', dateFormatter(time), 0);
        dynamicGreetings(time);
        loadAndInsertWeatherData(openWeather);
        menuLinks = document.querySelectorAll('.nav-link');
    })
}

    ///////Carregar o Dashboard pelo botão início///////

    const loadDashboard = () => {
        let dashHTML = getHTML('/snippets/dashboard.php');
        let inicioMenu = document.getElementById('inicio-menu');
        let body = document.querySelector('.body');
        let time = new Date();
    
        Promise.all([dashHTML]).then((HTMLlist) => {
            removeActiveLink();
            inicioMenu.classList.add("active");
            insertHTML(body, HTMLlist[0], 1);
            insertHTML('.current-date', dateFormatter(time), 0);
            dynamicGreetings(time);
            loadAndInsertWeatherData(openWeather);
        })
    }

    ///////Wheater no Dashboard///////

const openWeather = {
    base: "api.openweathermap.org/data/2.5/",
    apiKey: "c9e75c3fa680ece0c62b9bb6b99c9461",
    lang: "pt_br",
    units: "metric",
    defaultCity: "São Paulo"
}

const dynamicGreetings = (time) => {
    let hours = time.getHours();
    if(18 >= hours && hours >= 12){
        insertHTML('.card-title', `Boa Tarde, ${rdmTextLogin}!`, 1);
    }
    else if(12 > hours && hours >= 6){
        insertHTML('.card-title', `Bom Dia, ${rdmTextLogin}!`, 1);
    }
    else{
        insertHTML('.card-title', `Boa Noite, ${rdmTextLogin}!`, 1);
    }
}

const dateFormatter = (time) => { //recebe o objeto Date e formata, retornando, e.g: "Segunda, 1 de Janeiro de 1970"
    let day = time.getDate();
    let weekDay = time.getDay();
    let month = time.getMonth();
    let year = time.getFullYear();

    let diasSemana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    let mesesAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    weekDay = diasSemana[weekDay];
    month = mesesAno[month];

    return `${weekDay}, ${day} de ${month} de ${year}`
}

const loadAndInsertWeatherData = (api) => {
    let hasGeolocation = false;
    let lat, lon;

    if('geolocation' in navigator){
        navigator.geolocation.getCurrentPosition(getPos, posError);
        hasGeolocation = true;
    }
    else{
        alert("Seu navegador não possui geolocalização, a cidade padrão para o clima será São Paulo.");
    }

    function getPos(pos){
        lat = pos.coords.latitude;
        lon = pos.coords.longitude;
        let loading = document.querySelector('.loading');

        if(hasGeolocation){
            fetch(`https://${api.base}weather?lat=${lat}&lon=${lon}&appid=${api.apiKey}&units=${api.units}&lang=${api.lang}`)
            .then((response) => { return response.json(); })
            .then((data) => { insertWeatherData(data); loading.innerHTML = "";})
            .catch((error) => { console.error(error); });
        }
    }

    function posError(error){
        let loading = document.querySelector('.loading');
        if(error.code != 1){
            console.error(`ERROR(${error.code}): ${error.message}`);
        }
        else if(error.code == 1){
            fetch(`https://${api.base}weather?q=${api.defaultCity}&appid=${api.apiKey}&units=${api.units}&lang=${api.lang}`)
            .then((response) => { return response.json(); })
            .then((data) => { insertWeatherData(data); loading.innerHTML = "";})
            .catch((error) => { console.error(error); });
        }
    }
}

const insertWeatherData = (data) => {
    const HTMLcity = document.querySelector('.city');
    const HTMLweather = document.querySelector('.weather');
    const HTMLweatherimg = document.querySelector('.img-weather');

    let country = data.sys.country;
    let city = data.name;
    let temp = data.main.temp.toFixed(1);
    let weather = data.weather[0].description;
    let icon = data.weather[0].icon;

    let weatherArray = weather.split(" ");
    for(i=0, n=weatherArray.length; i<n; i++){
        weatherArray[i] = weatherArray[i][0].toUpperCase() + weatherArray[i].substr(1);
    }
    weather = weatherArray.join(" ");

    let tempF = ((temp*1.8) + 32).toFixed(1);

    insertHTML(HTMLcity, `${city}, ${country}`, 1);
    insertHTML(HTMLweather, `${weather}, ${temp} °C / ${tempF} °F`, 1);
    insertHTML(HTMLweatherimg, `<img src="http://openweathermap.org/img/wn/${icon}@2x.png">`, 1)
} 

//################################ PESQUISA DE CIDADÃOS ################################//

const loadCitizen = (loadHeader) => {
    let citizen = getHTML('/snippets/citizen.php');
    let cidadaoMenu = document.getElementById('cidadao-menu');
    let body = document.querySelector('.body');
    let scriptId;
    
    if(loadHeader == null){
        Promise.all([citizen]).then((citizenHTML) => {
            removeActiveLink();
            cidadaoMenu.classList.add("active");
            insertHTML(body, citizenHTML[0], 1);
            if(scriptId = document.getElementById('citizen-script')){
                scriptId.remove();
                dynamicallyLoadScript('js/citizen_search.js', 'citizen-script');
            }
            else{
                dynamicallyLoadScript('js/citizen_search.js', 'citizen-script');        
            }
        });
    }
    else{
        let header = document.querySelector('.header');
        header.style.display = 'block';

        Promise.all([citizen]).then((citizenHTML) => {
            removeActiveLink();
            cidadaoMenu.classList.add("active");
            insertHTML(body, citizenHTML[0], 1);
            if(scriptId = document.getElementById('citizen-script')){
                scriptId.remove();
                dynamicallyLoadScript('js/citizen_search.js', 'citizen-script');
            }
            else{
                dynamicallyLoadScript('js/citizen_search.js', 'citizen-script');        
            }
        });
    }
}

const loadCitizenDetails = (data) => {
    let citizen = getHTML(`/snippets/citizen_details.php?id=${data}`);
    let body = document.querySelector('.body');
    let header = document.querySelector('.header');
    let scriptId;
        
    Promise.all([citizen]).then((citizenHTML) => {
        header.style.display = 'none';
        insertHTML(body, citizenHTML[0], 1);
        if(scriptId = document.getElementById('citizen-detail-script')){
            scriptId.remove();
            dynamicallyLoadScript('js/citizen_details.js', 'citizen-detail-script');
        }
        else{
            dynamicallyLoadScript('js/citizen_details.js', 'citizen-detail-script');
        }
    });
}

//################################ CATÁLOGO DE MULTAS ################################//

const loadFines = () => {
    let fines = getHTML('/snippets/fines.php');
    let multasMenu = document.getElementById('multas-menu');
    let body = document.querySelector('.body');
    let scriptId;

    Promise.all([fines]).then((finesHTML) => {
        removeActiveLink();
        multasMenu.classList.add("active");
        insertHTML(body, finesHTML[0], 1);
        if(scriptId = document.getElementById('fines-script')){
            scriptId.remove();
            dynamicallyLoadScript('js/fines_search.js', 'fines-script');
        }
        else{
            dynamicallyLoadScript('js/fines_search.js', 'fines-script');        
        }
    });
}

//################################ PESQUISAR VEÍCULO ################################//

const loadVehicle = () => {
    let vehicle = getHTML('/snippets/vehicles.php');
    let vehicleMenu = document.getElementById('veiculo-menu');
    let body = document.querySelector('.body');
    let scriptId;

    Promise.all([vehicle]).then((vehicleHTML) => {
        removeActiveLink();
        vehicleMenu.classList.add("active");
        insertHTML(body, vehicleHTML[0], 1);
        if(scriptId = document.getElementById('vehicle-script')){
            scriptId.remove();
            dynamicallyLoadScript('js/vehicle_search.js', 'vehicle-script');
        }
        else{
            dynamicallyLoadScript('js/vehicle_search.js', 'vehicle-script');
        }
    });
}

//################################ QUADRO DE OFICIAIS ################################//

const loadLeo = () => {
    let leo = getHTML('/snippets/leo.php');
    let leoMenu = document.getElementById('oficiais-menu');
    let body = document.querySelector('.body');

    Promise.all([leo]).then((leoHTML) => {
        removeActiveLink();
        leoMenu.classList.add("active");
        insertHTML(body, leoHTML[0], 1);
    })
}

//################################ MANDADOS ################################//

const loadWarrant = () => {
    let warrant = getHTML('/snippets/warrant.php');
    let warrantMenu = document.getElementById('mandados-menu');
    let bodyClass = document.querySelector('.body');
    let scriptId;

    Promise.all([warrant]).then((warrantHTML) => {
        removeActiveLink();
        warrantMenu.classList.add("active");
        insertHTML(bodyClass, warrantHTML[0], 1);
        if(scriptId = document.getElementById('warrant-script')){
            scriptId.remove();
            dynamicallyLoadScript('js/warrant_search.js', 'warrant-script');
        }
        else{
            dynamicallyLoadScript('js/warrant_search.js', 'warrant-script');        
        }
    });
}

const loadWarrDetails = (data) => {
    let warrDetail = getHTML(`/snippets/warrant_details.php?id=${data}`);
    let body = document.querySelector('.body');

    Promise.all([warrDetail]).then((warrDetailHTML) => {
        insertHTML(body, warrDetailHTML[0], 1)
        if(scriptId = document.getElementById('edit-warr-script')){
            scriptId.remove();
            dynamicallyLoadScript('js/warrant_edit.js', 'edit-warr-script');
        }
        else{
            dynamicallyLoadScript('js/warrant_edit.js', 'edit-warr-script');
        }
    })
}

const createWarr = () => {
    let warr = getHTML('/snippets/create_warrant.php');
    let body =  document.querySelector('.body');

    Promise.all([warr]).then((warrHTML) => {
        insertHTML(body, warrHTML[0], 1);
        if(scriptId = document.getElementById('create-warr-script')){
            scriptId.remove();
            dynamicallyLoadScript('js/create_warr.js', 'create-warr-script');
        }
        else{
            dynamicallyLoadScript('js/create_warr.js', 'create-warr-script');        
        }
    })
}