function nhapDuLieu(){
	var m;
	do{
		m = prompt("Nhap n : ");
		m = parseInt(m);
	}
	while (isNaN(m) || m<=0); 
	return m;

}

while (true) {
	var n; S=0.0;i=1.0;
	n = nhapDuLieu();
	
	while (i <= n) {
		S =S + (1 / i);
		// alert("Tổng "+i+" là: "+S);
		i=i+1;
	}
	alert("Tổng S là: "+S);
}