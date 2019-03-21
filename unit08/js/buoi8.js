// // // function test() {
// // // 	alert('Hello world');
// // // }
// // // alert('Hello world');
// // // var val;

// // // val= confirm("Hello")
// // // if (val) {
// // // 	alert('Yes');
// // // }
// // // else alert('No');
// // var val;
// // val = prompt("Nhạp tên:")
// // if (val != null) 
// // 	//console.log(val);
// // //	alert("Tên của bạn là: "+val);
// // document.write("<b style='color:red'>+val+</b>");
// // else alert("Nhập tên đi");
// // switch(var) {
// // 	case :
		
// // 		break;
// // 	case :
		
// // 		break;
// // }
// // ax +b =0
// var a;
// var b;
// do{
// 	a = prompt("Nhập a: ");
// 	a = parseFloat(a);
// }while (isNaN(a)) 
// do{
// 	b = prompt("Nhập b: ");
// 	b = parseFloat(b);
// }while (isNaN(b)) 

// // a = parseFloat(a);
// // while (isNaN(a)){//is not a number	
// // 	alert("Nhập lại đi!");
// // }
// // b = parseFloat(b);
// // while (isNaN(b)){
// // 	alert("Nhập lại đi!");

// if (a==0 &&b==0){
// 	alert("Phương trình vô số nghiệm");break;
// }
// else if (a==0 && b!=0) {
// 	alert("Phuuowng trình vô nhghiem");break;
// }
// // else alert("Phương trình có 1 nghiệm" +(-b/a));break;
// while (true) {
// var n;
// var tong=0.0;
// do{
// 	n = prompt("Nhập n:");
// 	n = parseInt(n);
// }
// while (isNaN(n) || n<=0) 
// for (var i = 0; i < n; i++) {
// 	tong = tong +(i+1)/(i+2);
// }
// alert(tong);
// // }
// var array = [];
// mang.push(3);
// mang.push(4);


// console.log(mang);
// // mang = new Array(10);
// // mang[0],....,mang[9];
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
	var n; tong=0;
n = nhapDuLieu("n");
var mang = new Array(n);
for (var i = 0; i < n; i++) {
	mang[i] = nhapDuLieu("Phan tử thứ "+(i+1));
	tong = tong+mang[i];
}
alert("Tổng là: "+tong);
}