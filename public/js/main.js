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

document.addEventListener('click', function(event) {
    // Check if the click is on a dropdown trigger
    let dropdownId = event.target.closest('.dropdown-trigger');
    let dropdownElem = event.target.closest('.dropdown-options');
    if (dropdownId && dropdownElem){
       // Toggle visibility of the dropdown
       if(!dropdownElem.classList.contains("is-active")){
           dropdownElem.classList.add("is-active");
       }
       else{
           dropdownElem.classList.remove("is-active");
       }

       event.stopPropagation();
    } else {
        // Hide any visible dropdowns if click is outside
        //document.querySelectorAll('.dropdown-options.is-active').forEach(function(dropdown) {
            //dropdown.classList.remove('is-active');
        //});
    }
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.folder-toggle').forEach(function(folder) {
        folder.addEventListener('click', function() {
            const parentRequest = folder.closest('.request');
            const nestedItems = document.querySelector('.nested-items[parent-id="' + parentRequest.getAttribute('folder-id') + '"]');
            console.log(parentRequest);
            console.log(nestedItems);
            console.log(parentRequest.getAttribute('folder-id'));
            parentRequest.classList.toggle('clicked');
            nestedItems.classList.toggle('is-hidden');
        });
    });
});
