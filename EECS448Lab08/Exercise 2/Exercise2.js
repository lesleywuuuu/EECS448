var previous_slides = document.getElementById("previous");
var next_slides = document.getElementById("next");
var init_slides = document.getElementById("start");
var my_slides = document.getElementsByClassName("slides");
for (let i = 0; i < my_slides.length; i++)
    {
        console.log("don't display");
        my_slides[i].style.display = "none";
    }

var page = 1;
init_slides.onclick = function()
{
    showSlides(0);
}
previous_slides.onclick = function()
{
    page--;
    if(page<1)
    {
        page = 5;
    }
    showSlides(page-1);
}
next_slides.onclick = function()
{
    page++;
    if(page>5)
    {
        page = 1;
    }
    showSlides(page-1);
}

function showSlides(my_page)
{
    for (let i = 0; i < my_slides.length; i++)
    {
        console.log("don't display");
        my_slides[i].style.display = "none";
    }
    my_slides[my_page].style.display = "block";
}