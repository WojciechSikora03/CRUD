let updBtn=document.getElementById("updBtn");
updBtn.addEventListener("click", function(){
    var updForm = document.getElementById("updating");
    for (var i=0; i< (document.querySelectorAll('.forms')).length; i++ ) {
        document.querySelectorAll('.forms')[i].style.display = "none"
    }
    if (updForm.style.display === "none") {
        updForm.style.display = "block";
    } else {
        updForm.style.display = "none";
    }
})

let delBtn=document.getElementById("delBtn");
delBtn.addEventListener("click", function(){
    var delForm = document.getElementById("deleting");
    for (var i=0; i< (document.querySelectorAll('.forms')).length; i++ ) {
        document.querySelectorAll('.forms')[i].style.display = "none"
    }
    if (delForm.style.display === "none") {
        delForm.style.display = "block";
    } else {
        delForm.style.display = "none";
    }
})

let addBtn=document.getElementById("addBtn");
addBtn.addEventListener("click", function(){
    var addForm = document.getElementById("adding");
    for (var i=0; i< (document.querySelectorAll('.forms')).length; i++ ) {
        document.querySelectorAll('.forms')[i].style.display = "none"
    }
    if (addForm.style.display === "none") {
        addForm.style.display = "block";
    } else {
        addForm.style.display = "none";
    }
})

