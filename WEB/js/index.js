let profile_paas = document.querySelector("body > div > div.content-container > div > div > div.first-row > div.first-column > input[type=text]");
let profile_email = document.querySelector("body > div > div.content-container > div > div > div.first-row > div.second-column > input[type=text]");
let profile_first = document.querySelector("body > div > div.content-container > div > div > div.second-row > div.first-column > input[type=text]");
let profile_last = document.querySelector("body > div > div.content-container > div > div > div.second-row > div.second-column > input[type=text]");
let profile_phone = document.querySelector("body > div > div.content-container > div > div > div.third-row > div.first-column > input[type=text]");
let profile_age = document.querySelector("body > div > div.content-container > div > div > div.third-row > div.second-column > input[type=text]");
let profile_adresse = document.querySelector("body > div > div.content-container > div > div > div.forth-row > div > input[type=text]");




const result = fetch("http://localhost/brief04/inc/index.php", {
    headers: {
        // 'Accept': 'application/json',
        'Content-Type': 'application/json'
    },


}).then(response => response.json()).then(
    data => {
        


        profile_paas.value=data['pass'];
        profile_email.value=data['email'];
        profile_first.value=data['first'];
        profile_last.value=data['last'];
        profile_phone.value=data['phone'];
        profile_age.value=data['age'];
        profile_adresse.value=data['adresse'];

    }
)

