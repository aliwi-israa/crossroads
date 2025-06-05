document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.getElementById("promoPopup").style.display = "block";
    }, 2000);

    // Close popup when clicking the close button
    document.querySelector(".close-btn").addEventListener("click", function () {
        closePopup();
    });

    // Close popup when pressing Escape key
    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closePopup();
        }
    });
});

function closePopup() {
    document.getElementById("promoPopup").style.display = "none";
}
