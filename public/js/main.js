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

    if (dropdownId && dropdownElem) {
       // Toggle visibility of the dropdown (folder)
       dropdownElem.classList.toggle("is-active");
    }

    event.stopPropagation();
});

// this toggles visibility of nested folder items and controls which element have the 'clicked' CSS class
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.folder, .request').forEach(function(elem) {
        elem.addEventListener('click', function(event) {
            // the click was on the gear icon, stop here to avoid overriding the options gear funcionality
            if (event.target.closest('.dropdown-trigger')) {
                return;
            }

            const parentRequest = elem.closest('.folder, .request');
            const nestedItems = document.querySelector('.nested-items[parent-id="' + parentRequest.getAttribute('folder-id') + '"]');

            // Remove 'clicked' class from all other folders
            document.querySelectorAll('.request.clicked').forEach(function (req) {
               if (req !== parentRequest) {
                    req.classList.remove('clicked');
               }
            });

            // toggle the 'clicked' class for the current folder
            parentRequest.classList.toggle('clicked');

            // toggle visibility of nested items
            if (nestedItems != null) {
                nestedItems.classList.toggle('is-hidden');
            }

            event.stopPropagation();
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    let reqs = document.getElementById('sortableElem');
    if (reqs && window.sortable) {
        window.sortable.create(reqs, {
            animation: 150
        });
    }
});
