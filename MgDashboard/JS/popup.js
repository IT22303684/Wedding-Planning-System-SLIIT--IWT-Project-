// Get the button that opens the popup
var openButton = document.getElementById("addService");

// Get the popup container
var popup = document.getElementById("popup");

// Get the close button
var closeButton = document.getElementById("closePopup");

// Show the popup when the button is clicked
openButton.addEventListener("click", function() {
    popup.style.display = "block";
});

// Close the popup when the close button is clicked
closeButton.addEventListener("click", function() {
    popup.style.display = "none";
});

// Close the popup if the user clicks outside of it
window.addEventListener("click", function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
});


// Get the button that opens the popup
var updateButton = document.getElementById("update");

// Get the popup container
var editPopup = document.getElementById("editPopup");

// Get the close button
var editClose = document.getElementById("editClose");

// Show the popup when the button is clicked
updateButton.addEventListener("click", function() {
    editPopup.style.display = "block";
});

// Close the popup when the close button is clicked
editClose.addEventListener("click", function() {
    editPopup.style.display = "none";
});

// Close the popup if the user clicks outside of it
window.addEventListener("click", function(event) {
    if (event.target == editPopup) {
        editPopup.style.display = "none";
    }
});
