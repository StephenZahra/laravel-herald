let ddBtnNew = document.getElementById("dropdown-btn-new");
let newItems = document.getElementById("new-items");

ddBtnNew.addEventListener("click", function (event){
    if(!ddBtnNew.classList.contains("is-active")){
        ddBtnNew.classList.add("is-active");
    }
    else{
        ddBtnNew.classList.remove("is-active");
    }

    if (!ddBtnNew.contains(event.target) || newItems.contains(event.target)) {
        ddBtnNew.classList.remove("is-active");
    }
});

document.addEventListener("click", function (event){
    if (!ddBtnNew.contains(event.target) || newItems.contains(event.target)) {
        ddBtnNew.classList.remove("is-active");
    }
});
