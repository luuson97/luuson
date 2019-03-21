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
	var n; tong=0;dem=0;
n = nhapDuLieu("n");
var mang = new Array(n);
for (var i = 0; i < n; i++) 
{
	mang[i] = nhapDuLieu("Phan tử thứ "+(i+1));
	if (mang[i] % 2 ==0 && dem < 10) {
		tong = tong+mang[i];
		dem++
	}
}
alert("Tổng là: "+tong);
}