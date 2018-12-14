function generate() {
    
    var name=document.getElementById("name").value;
    var sub=document.getElementById("sub").value;
    var book=document.getElementById("book").value;
    var info=document.getElementById("info").value;
    var year=document.getElementById("year").value;
    var pub=document.getElementById("pub").value;
    var bcolor = document.querySelector("#upper2");
    var bcolor2 = document.querySelector("#bottom2");

    var ccolor=document.getElementById("color").value;

    bcolor.style.backgroundColor = ccolor;
    bcolor2.style.backgroundColor = ccolor;



    if(!name.match(/^[A-Za-z ]+$/))
    {
        alert("Please enter a valid author name");
        document.getElementById("name").focus(); 
        return false;
    }

    if(!book.match(/^[A-Za-z ]+$/))
    {
        alert("Please enter a valid book title");
        document.getElementById("book").focus(); 
        return false;
    }

    if(!pub.match(/^[A-Za-z ]+$/))
    {
        alert("Please enter a valid publisher");
        document.getElementById("pub").focus(); 
        return false;
    }

    if (!year.match(/^[0-9]+$/))
    {
        alert("Please enter a valid publication year");
        document.getElementById("year").focus(); 
        return false;
    }

    if(info=="") info = "A New York Times Best Seller";
 
    document.getElementById('rname').innerHTML = name;
    document.getElementById('rsub').innerHTML = sub;
    document.getElementById('rbook').innerHTML = book;
    document.getElementById('rinfo').innerHTML = info;
    document.getElementById('rpub').innerHTML = pub+ " presents:";
    document.getElementById('ryear').innerHTML = year;

}