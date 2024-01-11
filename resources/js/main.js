const panoramaImage = new PANOLENS.ImagePanorama("images/panorama.jpg");
const imageContainer = document.querySelector(".image-container");

const viewer = new PANOLENS.Viewer ({
    container: imageContainer,
});

viewer.add(panoramaImage);

