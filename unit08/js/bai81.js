function nhapDuLieu(n){
	var m;
	do{
		m = prompt("Nhập "+n+":");
		m = parseInt(m);
	}
	while (isNaN(m) || m<=0); 
	return m;

}

	var n; tong=0;dem=0;j=0;
	var arry=[];
n = nhapDuLieu("n");
var mang = new Array(n);
for (var i = 0; i < n; i++) {
	mang[i] = nhapDuLieu("phần tử thứ "+(i+1));
	if(mang[i] % 3==0 || mang[i] % 7 ==0){
		dem++;
		arry[j]=mang[i];
		j++;
	}
}
alert("số lượng các số nguyên chia hết cho 3 hoặc 7 : "+dem);
for (var i = 0; i <dem; i++) {
	alert(" "+arry[i]);
}
