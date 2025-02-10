function openModal() {
    document.getElementById('profile-modal').style.display = 'block';
}

function closeModal() {
    document.getElementById('profile-modal').style.display = 'none';
}

window.onclick = function(event) {
    const modal = document.getElementById('profile-modal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};