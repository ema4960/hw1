

let city = document.querySelector("#city");
city.addEventListener("blur",changeCity);
changeCity();

function changeCity(){
    let inputcity = document.querySelector("#city").value;
    let city= inputcity;
    console.log("ciao");
    fetch("https://api.weatherstack.com/current?access_key=&query="+city+"&unit=m").then(response => response.json()).then(json => {
        temp=document.querySelector("#temp");
        temp.innerHTML =json.current.feelslike+"°C in "+json.location.name;
    }); 
}


fetch("http://data.fixer.io/api/latest?access_key=").then(response => response.json()).then(json => {
    footerSocial=document.querySelector("#social");
    nuovoParagrafo = document.createElement("p");
    nuovoParagrafo.innerHTML ="quote di conversione giornaliere:<br>EUR 1 in AUD "+json.rates.AUD+"<br>EUR 1 in USD "+json.rates.USD+"<br>EUR 1 in GBP "+json.rates.USD;

    footerSocial.appendChild(nuovoParagrafo);
})








let buttonLoginds = document.querySelector("#login_button");
buttonLoginds.addEventListener("click", onClickLoginds);
let start =true;

function onClickLoginds(){
    let loginds = document.querySelector("#loginds");
    loginds.classList.remove("displayNone");
    loginds.classList.add("displayBlock");
    if(start){
        let body = document.querySelector("body");
        let elemento = document.createElement("div");
        elemento.setAttribute("id","shadow");
        body.appendChild(elemento);
        start=false;
    }else{
        let shadow = document.querySelector("#shadow")
        shadow.classList.remove("displayNone");
        shadow.classList.add("displayFixed");
    }
}




let mailButton = document.querySelector("#mailBt");
mailButton.addEventListener("click", onClickMailBt);

function onClickMailBt(){
    let mail = document.querySelector("#mailInput").value;
    console.log(mail);
    fetch("http://localhost/hw1/scriptPhp/isEmail.php?email="+mail).then((response) => {return response.text()}).then((data) => {
        console.log(data);
        isEmail=data;

        if(isEmail){
            let loginds = document.querySelector("#loginds");
            loginds.classList.remove("displayBlock");
            loginds.classList.add("displayNone");
            let login = document.querySelector("#login");
            login.classList.remove("displayNone");
            login.classList.add("displayBlock");
        }else{
            let loginds = document.querySelector("#loginds");
            loginds.classList.remove("displayBlock");
            loginds.classList.add("displayNone");
            let register = document.querySelector("#register");
            register.classList.remove("displayNone");
            register.classList.add("displayBlock");
        }
    });   
}

let loginBt = document.querySelector("#loginBt");
loginBt.addEventListener("click", onClickLoginBt);

function onClickLoginBt(){
    let email = document.querySelector("#mailInputLog").value;
    let password = document.querySelector("#passwordInputLog").value;

    fetch("http://localhost/hw1/scriptPhp/login.php?email="+email+"&password="+password).then((response) => {return response.text()}).then((data) => {
        isLogged=data;
        if(isLogged){ 
            buttonLoginds.classList.remove("displayBlock");
            buttonLoginds.classList.add("displayNone");
            let loggeddDiv = document.querySelector("#logged");
            loggeddDiv.classList.remove("displayNone");
            loggeddDiv.classList.add("displayBlock");
            window.location.replace("/hw1/index.php");
        }else{
            alert("Credenziali errate");
        }
    })
}

fetch("http://localhost/hw1/scriptPhp/onSession.php").then((response) => {return response.text()}).then((data) => {
    console.log(data);
    if(data==1){
            buttonLoginds.classList.remove("displayBlock");
            buttonLoginds.classList.add("displayNone");
            let loggeddDiv = document.querySelector("#logged");
            loggeddDiv.classList.remove("displayNone");
            loggeddDiv.classList.add("displayBlock");
    }
})

let logout = document.querySelector("#logout");
logout.addEventListener("click", onClickLogout);

function onClickLogout(){
    fetch("http://localhost/hw1/scriptPhp/logout.php").then((response) => {
            buttonLoginds.classList.remove("displayNone");
            buttonLoginds.classList.add("displayBlock");
            let loggeddDiv = document.querySelector("#logged");
            loggeddDiv.classList.remove("displayBlock");
            loggeddDiv.classList.add("displayNone");
    })
}

let closeLoginds = document.querySelector("#closeLoginds");
closeLoginds.addEventListener("click", onClickCloseLoginds);

function onClickCloseLoginds(){
    let loginds = document.querySelector("#loginds");
    loginds.classList.remove("displayBlock");
    loginds.classList.add("displayNone");
    let shadow = document.querySelector("#shadow")
    shadow.classList.remove("displayFixed");
    shadow.classList.add("displayNone");
}

let closeLogin = document.querySelector("#closeLogin");
closeLogin.addEventListener("click", onClickCloseLogin);

function onClickCloseLogin(){
    let login = document.querySelector("#login");
    login.classList.remove("displayBlock");
    login.classList.add("displayNone");
    let shadow = document.querySelector("#shadow")
    shadow.classList.remove("displayFixed");
    shadow.classList.add("displayNone");
}

let closeRegister = document.querySelector("#closeRegister");
closeRegister.addEventListener("click", onClickCloseRegister);

function onClickCloseRegister(){
    let register = document.querySelector("#register");
    register.classList.remove("displayBlock");
    register.classList.add("displayNone");
    let shadow = document.querySelector("#shadow")
    shadow.classList.remove("displayFixed");
    shadow.classList.add("displayNone");
}

let button1 = document.querySelector("#button1");
let img1 = document.querySelector("#img1");
button1.addEventListener("mouseover", onMouseOverBt1);
button1.addEventListener("mouseleave", onMouseLeaveBt1);
button1.addEventListener("click", onClickBt1);
triggered1=false;

let button2 = document.querySelector("#button2");
let img2 = document.querySelector("#img2");
button2.addEventListener("mouseover", onMouseOverBt2);
button2.addEventListener("mouseleave", onMouseLeaveBt2);
button2.addEventListener("click", onClickBt2);
triggered2=false;

let button3 = document.querySelector("#button3");
let img3 = document.querySelector("#img3");
let meg = document.querySelector("#meg")
button3.addEventListener("mouseover", onMouseOverBt3);
button3.addEventListener("mouseleave", onMouseLeaveBt3);
button3.addEventListener("click", onClickBt3);
triggered3=false;

let button4 = document.querySelector("#button4");
let img4 = document.querySelector("#img4");
button4.addEventListener("mouseover", onMouseOverBt4);
button4.addEventListener("mouseleave", onMouseLeaveBt4);
button4.addEventListener("click", onClickBt4);
triggered4=false;



function onMouseOverBt1 (){
    if(triggered1!=true){
            img1.src = "/hw1/scorri-giù.png";
            triggered1 = true;
    }
}

function onMouseLeaveBt1 (){
    if(triggered1){
        if(img1.getAttribute("src") === "/hw1/scorri-giù.png"){
            img1.src = "/hw1/scorri-giù-white.png";
            triggered1 = false
        }
    }
    
    
}

function onClickBt1 (){
    if(img1.getAttribute("src") === "/hw1/scorri-giù.png"){
        img1.src = "/hw1/scorri-su.png";
        button1.classList.add("headerbtClicked");
        button2.classList.remove("headerbtClicked");
        button3.classList.remove("headerbtClicked");
        button4.classList.remove("headerbtClicked");
        meg.classList.remove("displayBlock");
        meg.classList.add("displayNone");
        img2.src = "/hw1/scorri-giù-white.png";
        img3.src = "/hw1/scorri-giù-white.png";
        img4.src = "/hw1/scorri-giù-white.png";
        triggered2 = false
        triggered3 = false
        triggered4 = false
    }else{
        img1.src = "/hw1/scorri-giù.png";
        button1.classList.remove("headerbtClicked");
    }

}




function onMouseOverBt2 (){
    if(triggered2!=true){
            img2.src = "/hw1/scorri-giù.png";
            triggered2 = true;
    }
}

function onMouseLeaveBt2 (){
    if(triggered2){
        if(img2.getAttribute("src") === "/hw1/scorri-giù.png"){
            img2.src = "/hw1/scorri-giù-white.png";
            triggered2 = false
        }
    }
    
    
}

function onClickBt2 (){
    if(img2.getAttribute("src") === "/hw1/scorri-giù.png"){
        img2.src = "/hw1/scorri-su.png";
        button2.classList.add("headerbtClicked");
        button1.classList.remove("headerbtClicked");
        button3.classList.remove("headerbtClicked");
        button4.classList.remove("headerbtClicked");
        meg.classList.remove("displayBlock");
        meg.classList.add("displayNone");
        img1.src = "/hw1/scorri-giù-white.png";
        img3.src = "/hw1/scorri-giù-white.png";
        img4.src = "/hw1/scorri-giù-white.png";
        triggered1 = false
        triggered3 = false
        triggered4 = false
    }else{
        img2.src = "/hw1/scorri-giù.png";
        button2.classList.remove("headerbtClicked");
    }
}


function onMouseOverBt3 (){
    if(triggered3!=true){
            img3.src = "/hw1/scorri-giù.png";
            triggered3 = true;
    }
}

function onMouseLeaveBt3 (){
    if(triggered3){
        if(img3.getAttribute("src") === "/hw1/scorri-giù.png"){
            img3.src = "/hw1/scorri-giù-white.png";
            triggered3 = false
        }
    }
    
    
}

function onClickBt3 (){

        
    if(img3.getAttribute("src") === "/hw1/scorri-giù.png"){
        img3.src = "/hw1/scorri-su.png";
        button3.classList.add("headerbtClicked");
        button1.classList.remove("headerbtClicked");
        button2.classList.remove("headerbtClicked");
        button4.classList.remove("headerbtClicked");
        img1.src = "/hw1/scorri-giù-white.png";
        img2.src = "/hw1/scorri-giù-white.png";
        img4.src = "/hw1/scorri-giù-white.png";
        triggered1 = false;
        triggered2 = false;
        triggered4 = false;
        meg.classList.remove("displayNone");
        meg.classList.add("displayBlock");
        
    }else{
        img3.src = "/hw1/scorri-giù.png";
        button3.classList.remove("headerbtClicked");
        meg.classList.remove("displayBlock");
        meg.classList.add("displayNone");
        
    }
}






function onMouseOverBt4 (){
    if(triggered4!=true){
            img4.src = "/hw1/scorri-giù.png";
            triggered4 = true;
    }
}

function onMouseLeaveBt4 (){
    if(triggered4){
        if(img4.getAttribute("src") === "/hw1/scorri-giù.png"){
            img4.src = "/hw1/scorri-giù-white.png";
            triggered4 = false
        }
    }
    
    
}

function onClickBt4 (){
    if(img4.getAttribute("src") === "/hw1/scorri-giù.png"){
        img4.src = "/hw1/scorri-su.png";
        button4.classList.add("headerbtClicked");
        button1.classList.remove("headerbtClicked");
        button2.classList.remove("headerbtClicked");
        button3.classList.remove("headerbtClicked");
        meg.classList.remove("displayBlock");
        meg.classList.add("displayNone");
        img1.src = "/hw1/scorri-giù-white.png";
        img2.src = "/hw1/scorri-giù-white.png";
        img3.src = "/hw1/scorri-giù-white.png";
        triggered1 = false
        triggered2 = false
        triggered3 = false
    }else{
        img4.src = "/hw1/scorri-giù.png";
        button4.classList.remove("headerbtClicked");
    }
}

