function nhapDuLieu(){
	var m;
	do{
		m = prompt("Nhap n : ");
		m = parseInt(m);
	}
	while (isNaN(m) || m<=0); 
	return m;

}
function giaiThua(n){
	var i=1;a=1;
	while(i<=n){
		a=a*i;
		i++;
	}
	return a;
}
while (true) {
	var n; S=0;i=1;
	n = nhapDuLieu();
	
	while (i <= n) {
		S =S + i / (giaiThua(i));
		// alert("Tổng "+i+" là: "+S);
		i=i+1;
	}
	alert("Tổng S là: "+S);
}