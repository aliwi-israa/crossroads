document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.getElementById("promoPopup").style.display = "block";
        document.getElementById("popupOverlay").style.display = "block";
    }, 2000);

    document.querySelector(".close-btn").addEventListener("click", function () {
        closePopup();
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closePopup();
        }
    });
});

function closePopup() {
    document.getElementById("promoPopup").style.display = "none";
    document.getElementById("popupOverlay").style.display = "none";
}
