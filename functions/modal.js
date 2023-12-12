// Function to open the modal
function openModal() {
    document.getElementById('myModal').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

// Function to close the modal
function closeModal() {
    document.getElementById('myModal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

// Event listener to open the modal when the paragraph is clicked
document.getElementById('openModal').addEventListener('click', openModal);