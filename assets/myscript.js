function showData(id)
{
    //for validation
    document.getElementById("save").style.display="none";
    document.getElementById("edit").style.display="block";
    document.getElementById("delete").style.display="block";
    document.getElementById('name').setCustomValidity('');
    document.getElementById("nameinvalid").style.display="none";
    document.getElementById('price').setCustomValidity('');
    document.getElementById("priceinvalid").style.display="none";
    document.getElementById("quantite").setCustomValidity('');
    document.getElementById("quantiteinvalid").style.display="none";
    document.getElementById("description").setCustomValidity('');
    document.getElementById("descriptioninvalid").style.display="none";

       // get data
    console.log(id + document.getElementById("name"+id).getAttribute("data"));
    document.getElementById("id").value=document.getElementById("id"+id).getAttribute("data");
    document.getElementById("name").value=document.getElementById("name"+id).getAttribute("data");
    document.getElementById("type").value=document.getElementById("type"+id).getAttribute("data");
    document.getElementById("price").value=document.getElementById("price"+id).getAttribute("data");
    document.getElementById("quantite").value=document.getElementById("quantite"+id).getAttribute("data");
    document.getElementById("owner").value=document.getElementById("id_admin"+id).getAttribute("data");
    document.getElementById("description").value=document.getElementById("description"+id).getAttribute("data");
    document.getElementById("file").value=document.getElementById("img"+id).getAttribute("data");



}




//for validation error
document.getElementById("name").oninvalid=function()
{
    document.getElementById("nameinvalid").style.display="block";
    document.getElementById("name").style.border = '2px solid red';
    document.getElementById('name').style.boxShadow = '0px 0px 10px red';
    document.getElementById('name').setCustomValidity(' Name is required');
}
document.getElementById("name").oninput=function()
{
    document.getElementById("nameinvalid").style.display="none";
    document.getElementById("name").style.border = '2px solid green';
    document.getElementById('name').style.boxShadow = '0px 0px 10px green';
    document.getElementById('name').setCustomValidity('');
}
document.getElementById("price").oninvalid=function()
{
    document.getElementById("priceinvalid").style.display="block";
    document.getElementById("price").style.border = '2px solid red';
    document.getElementById('price').style.boxShadow = '0px 0px 10px red';
    document.getElementById('price').setCustomValidity(' Name is required');
}
document.getElementById("price").oninput=function()
{
    document.getElementById("priceinvalid").style.display="none";
    document.getElementById("price").style.border = '2px solid green';
    document.getElementById('price').style.boxShadow = '0px 0px 10px green';
    document.getElementById('price').setCustomValidity('');
}
document.getElementById("quantite").oninvalid=function()
{
    document.getElementById("quantiteinvalid").style.display="block";
    document.getElementById("quantite").style.border = '2px solid red';
    document.getElementById('quantite').style.boxShadow = '0px 0px 10px red';
    document.getElementById('quantite').setCustomValidity(' Name is required');
}
document.getElementById("quantite").oninput=function()
{
    document.getElementById("quantiteinvalid").style.display="none";
    document.getElementById("quantite").style.border = '2px solid green';
    document.getElementById('quantite').style.boxShadow = '0px 0px 10px green';
    document.getElementById('quantite').setCustomValidity('');
}
document.getElementById("description").oninvalid=function()
{
    document.getElementById("descriptioninvalid").style.display="block";
    document.getElementById("description").style.border = '2px solid red';
    document.getElementById("description").style.boxShadow = '0px 0px 10px red';
    document.getElementById("description").setCustomValidity(' Name is required');
}
document.getElementById("description").oninput=function()
{
    document.getElementById("descriptioninvalid").style.display="none";
    document.getElementById("description").style.border = '2px solid green';
    document.getElementById('description').style.boxShadow = '0px 0px 10px green';
    document.getElementById('description').setCustomValidity('');
}




//for darkmode
let myswitch=document.getElementById("dark-check");
myswitch.onclick=function()
{
    document.body.classList.toggle("dark-theme");
}
document.getElementById("btn-add").onclick=function()
{
    document.getElementById('name').setCustomValidity('');
    document.getElementById("edit").style.display="none";
    document.getElementById("delete").style.display="none";
    document.getElementById("nameinvalid").style.display="none";
    document.getElementById("priceinvalid").style.display="none";
    document.getElementById("quantiteinvalid").style.display="none";
    document.getElementById("descriptioninvalid").style.display="none";

}
