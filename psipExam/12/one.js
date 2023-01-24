// document.getElementById("d").attributes.getNamedItem("max")=new Date();
function addEntity()
{
    if(!allGood()){return false;}

    const n=document.getElementById("n").value;
    const t=document.getElementById("t").value;
    const tel=document.getElementById("tel").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "addEntity.php?n="+n+"&t="+t+"&tel="+tel, true);
    xmlhttp.send();
}   
function allGood()
{
    let n=document.getElementById("n").value;
    let tel=document.getElementById("tel").value;
    let t=document.getElementById("t").value;
    if(n=="" || n.length<2)
    {
        alert("n field empty or small");
        return false;
    }
    if((/\d/.test(t)))
    {
        alert("t field have number");
        return false
    }
    for(var i =0;i<n.length;i++)
    {
        // console.log(i);
        // alert(n[i]);
        if(Number(n[i]))
        {
            alert("n field have number");
            return false
        }
    }
    if(!(/[0-9]{3}-[0-9]{2}-[0-9]{3}/.test(tel)))
    {
        alert("wrong telephone");
        return false
    }
    return true;
}