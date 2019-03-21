function nhapDuLieu(n){
	var m;
	do{
		m = prompt("Nhập "+n+":");
		m = parseInt(m);
	}
	while (isNaN(m) || m<=0); 
	return m;

}
while (true) {
	var n; tong=0;
	m = nhapDuLieu("M");
	n = nhapDuLieu("N");
	k = nhapDuLieu("K");
	while (n <= m)
		{
			if ((n % k) == 0) {
				tong = tong +n;
			}
			n++;
		}
alert("Tổng là: "+tong);
}