function cl(e)
{
    let result=confirm('more');
    let id=e.target.id;
    if(result)
    {
        let url="entity.php?id="+id
        window.location.href = url;
    }
    else
    {
        document.getElementById(id).removeEventListener('click', cl, false);
    }

}

for (let index = 1; index < 3; index++) 
{
    document.getElementById(index).addEventListener('click',cl,false);
}