function nhapDuLieu(n){
	var m;
	do{
		m = prompt("Nhap "+n+":");
		m = parseInt(m);
	}
	while (isNaN(m) || m<=0); 
	return m;

}
while (true) {
	var n; tong=0;i=0;
	n = nhapDuLieu("n");
	var mang = new Array(n);
	while (i < n) {
		 mang[i] = i+1;
		tong = tong + mang[i];
		i++;
	}
	alert("Tổng là: "+tong);
}