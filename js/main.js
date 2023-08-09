var fala = 0;
function continuar(){
    if(fala==1){
        document.getElementById("resultado").style.display="block";
        document.getElementById("fala2").style.display="none";
        document.getElementById("fala3").style.display="block"; 
    }
    document.getElementById("fala").style.display="none";
    document.getElementById("fala2").style.display="block";
    fala = 1;
}