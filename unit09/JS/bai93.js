var change = document.getElementsByTagName("p")[0];

document.getElementsByClassName("default")[0].addEventListener("click", function(){
	var fontsize = change.style.fontSize;
	change.style.fontSize="20px";
});

document.getElementsByClassName("big")[0].addEventListener("click", function(){
	var fontsize = change.style.fontSize;
	fontsize= parseFloat(fontsize);
	fontsize =fontsize*1.4;
	change.style.fontSize=fontsize+"px";
});

document.getElementsByClassName("small")[0].addEventListener("click", function(){
	var fontsize = change.style.fontSize;
	fontsize= parseFloat(fontsize);
	fontsize =fontsize/1.4;
	change.style.fontSize=fontsize+"px";
});
