let ddBtnNew = document.getElementById("dropdown-btn-new");
let newItems = document.getElementById("new-items");

// this handles visibility of the "New" dropdown button at the top of the request list panel
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

// this toggles visibility of the gear options menu on an element
document.addEventListener('click', function(event) {
    // Check if the click is on a dropdown trigger
    let dropdownId = event.target.closest('.dropdown-trigger');
    let dropdownElem = event.target.closest('.dropdown-options');
    if (dropdownId && dropdownElem){
       // Toggle visibility of the dropdown (folder)
       if(!dropdownElem.classList.contains("is-active")){
           dropdownElem.classList.add("is-active");
       }
       else{
           dropdownElem.classList.remove("is-active");
       }

       event.stopPropagation();
    }
});

// this toggles visibility of nested folder items and controls which element have the 'clicked' CSS class
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.folder, .request').forEach(function(folder) {
        folder.addEventListener('click', function(event) {

            const parentRequest = folder.closest('.request');
            const nestedItems = document.querySelector('.nested-items[parent-id="' + parentRequest.getAttribute('folder-id') + '"]');

            // Remove 'clicked' class from all other folders
            document.querySelectorAll('.request').forEach(function (req) {
                if (req !== parentRequest) {
                    req.classList.remove('clicked');
                }
            });

            // Toggle the 'clicked' class for the current folder
            parentRequest.classList.toggle('clicked');

            // Toggle visibility of nested items
            if (nestedItems != null) {
                nestedItems.classList.toggle('is-hidden');
            }

            // Prevent the event from bubbling to nested items
            event.stopPropagation();
        });
    });
});
