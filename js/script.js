var heading=document.getElementById("toolbar");
function initScroll(){
    if(window.pageYOffset>600)
	{heading.style.width="300px"}
else{heading.style.width="400px";}

}

window.addEventListener("scroll",initScroll);