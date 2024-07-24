document.addEventListener('DOMContentLoaded', function () {
    loadPhotos();
});

function loadPhotos() {
    fetch('backend/controllers/getPhotos.php')
        .then(response => response.json())
        .then(photos => {
            const photoFeed = document.getElementById('photo-feed');
            photos.forEach(photo => {
                const photoDiv = document.createElement('div');
                photoDiv.classList.add('photo');
                photoDiv.innerHTML = `
                    <img src="backend/${photo.file_path}" alt="${photo.username}">
                    <p>Uploaded by: ${photo.username}</p>
                `;
                photoFeed.appendChild(photoDiv);
            });
        })
        .catch(error => console.error('Error loading photos:', error));
}
