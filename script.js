var i = 0;
var hinhanh = new Array("anh3.jpg", "anh2.jpg", "anh1.jpg", "anh4.jpg");
function SlideShow() {
	anh = document.getElementById("anh_slide");//l?y tham chi?u d? th? c� id=anh_slide
	anh.src = hinhanh[i];//thay src d? hi?n th? ?nh m?i
	i++;//tang ?nh 1 don v?
	n = hinhanh.length;//l?y s? ph?n t? c?a m?ng hinhanh;
	if (i == n)//n?u i vu?t qu� s? ph?n t? (n-1) c?a m?ng th� quay l?i = 0
		i = 0;
	window.setTimeout("SlideShow();", 2000);//sau 2 gi�y g?i l?i h�m SlideShow
}