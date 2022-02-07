var hinhanh = Array("slider1.jpg","slider2.jpg","slider3.jpg","slider4.jpg");
var i=0;

function show_slider()
{
    anh = document.getElementById("anh_slider");
    anh.src = "images/" + hinhanh[i];
    i++;
    if(i==hinhanh.length)
        i=0;
    window.setTimeout("show_slider();",2000);
}

