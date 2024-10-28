var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btns = document.querySelectorAll(".detail-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

btns.forEach(function(btn) {
    btn.onclick = function() {
        modal.style.display = "block";
    }
});

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// Remove the window.onclick event that closes the modal when clicking outside
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }