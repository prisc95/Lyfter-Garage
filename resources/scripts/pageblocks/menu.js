const dropdown = document.getElementById("dropdown");
const dropdownContent = document.getElementById("dropdown-content");

dropdown.addEventListener("click", function(){

    if (dropdownContent.classList.contains("show")){
        dropdownContent.classList.remove("show");
    } else (dropdownContent.classList.add("show"));
})