var loginforma=document.getElementById("ulogovanje");
var registerforma=document.getElementById("registracija");

var noise1=document.getElementById("footercontents");

var guide=document.getElementById("guide2");

 
var noise2=document.getElementById("nomatchs");
// const registerforma=document.getElementById("registracija");

var sifvar=document.getElementById("lozinka2");
function showlogin(){
  //  registerforma.style.display="none";
  guide.style.display="none";
  sifvar.style.display="none";
    registerforma.style.display="none";
    loginforma.style.display="flex";
    noise1.style.display="none";
    console.log("clicked");
}

function showregister(){
  guide.style.display="none";
  sifvar.style.display="none";
    loginforma.style.display="none";
    registerforma.style.display="flex";
    noise2.style.display="none";
    
}

function promjenisifru(){
  guide.style.display="none";
  loginforma.style.display="none";
  registerforma.style.display="none";
  sifvar.style.display="block";
 

}
