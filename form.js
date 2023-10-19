document.getElementById("main_form").addEventListener("submit", cleakForm);

function cleakForm(event)
{   
    var el = document.getElementById("main_form");
    event.preventDefault();
    var name = el.fname.value;
    var lname = el.lname.value;
    var vk = el.vk.value;
    console.log("name: " + name + "\nlast name: " + lname + "\nVK: " + vk)
}