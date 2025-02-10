document.addEventListener("DOMContentLoaded", function() { 
    const cookiePopup = document.getElementById("cookie-popup"); 
    const acceptBtn = document.getElementById("accept"); 
    const rejectBtn = document.getElementById("reject");
        acceptBtn.addEventListener("click", function() {
            localStorage.setItem("cookieConsent", "true");
            cookiePopup.style.display = "none";
            cookiePopup.remove();
        });
        rejectBtn.addEventListener("click", function() {
            localStorage.setItem("cookieConsent", "false");
            cookiePopup.style.display = "none";
            cookiePopup.remove();
        });
        const cookieConsent = localStorage.getItem("cookieConsent");
    
        if (cookieConsent !== "true" && cookieConsent !== "false") {
            cookiePopup.style.display = "block";
        } else {
            cookiePopup.remove();
        }
    });