function showData(id)
{
    console.log(id + document.getElementById("name"+id).getAttribute("data"));
    document.getElementById("id").value=document.getElementById("id"+id).getAttribute("data");
    document.getElementById("name").value=document.getElementById("name"+id).getAttribute("data");
    document.getElementById("type").value=document.getElementById("type"+id).getAttribute("data");
    document.getElementById("price").value=document.getElementById("price"+id).getAttribute("data");
    document.getElementById("quantite").value=document.getElementById("quantite"+id).getAttribute("data");
    document.getElementById("owner").value=document.getElementById("id_admin"+id).getAttribute("data");
    document.getElementById("description").value=document.getElementById("description"+id).getAttribute("data");

}