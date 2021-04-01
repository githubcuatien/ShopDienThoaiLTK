var kichthuoc = document.getElementsByClassName("slide")[0].clientWidth;
var chuyenslide = document.getElementsByClassName("chuyen-slide")[0];
var chuyenhuong = 0;
var img = chuyenslide.getElementsByTagName("img");
var max = kichthuoc * img.length;
max -= kichthuoc;

function next() {
    if (chuyenhuong < max)
        chuyenhuong += kichthuoc;
    else chuyenhuong = 0;
    chuyenslide.style.marginLeft = "-" + chuyenhuong + "px";
}

function back() {
    if (chuyenhuong == 0) chuyenhuong = max;
    else chuyenhuong -= kichthuoc;
    chuyenslide.style.marginLeft = "-" + chuyenhuong + "px";
}

setInterval(function() { next(); }, 3000)