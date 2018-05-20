inical = 0  
array1 = new Array ("imagens/slide/1.jpg", "imagens/slide/2.jpg", "imagens/slide/3.jpg", "imagens/slide/4.jpg", "imagens/slide/5.jpg" )

function comeco(){
document.getElementById('imgId').src = array1[0]
inical = 0
}

function mais(){
inical = Math.floor (inical+ 1)
if (inical > 4)
{inical = 0}
}

function menos(){
inical = Math.floor (inical-1)
if (inical < 0)
{inical = 4}
}

function temp(){
    setInterval("mais()", 9000)
}

function regular(){
document.getElementById('imgId').src = array1[inical]
window.setTimeout("regular()", 100)


}