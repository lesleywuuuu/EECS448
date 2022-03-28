var mytext = document.getElementById("my_text");

function colorset(inp)
{
    return (inp >= 0 && inp <= 255);
}

function rgb(r, g, b)
{
    return "rgb("+r+","+g+","+b+")";
}

function text_B_colorset()
{
    var border_red = document.getElementById("B_red").value
    var border_green = document.getElementById("B_green").value
    var border_blue = document.getElementById("B_blue").value
    
    console.log(border_red,"+",border_green,"+",border_blue);
    if (colorset(border_red) && colorset(border_green) && colorset(border_blue))
    {
        mytext.style.borderColor = rgb(border_red, border_green, border_blue);
    }
    else alert("Color setting range (0,255)");
}

function text_B_widthset()
{
    var border_width = document.getElementById("B_width").value
    mytext.style.borderWidth = String(border_width) + "px";
}

function text_Bg_colorset()
{   
    var bg_red = document.getElementById("Bg_red").value
    var bg_green = document.getElementById("Bg_green").value
    var bg_blue = document.getElementById("Bg_blue").value
    
    console.log(border_red,"+",border_green,"+",border_blue);
    if (colorset(bg_red) && colorset(bg_green) && colorset(bg_blue))
    {
        mytext.style.background = rgb(bg_red, bg_green, bg_blue);
    }
    else alert("Color setting range (0,255)");
}

