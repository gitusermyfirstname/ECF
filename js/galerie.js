const galerieImgs = document.getElementById("ImgsGalerie");
const titre = '<link rel="stylesheet" href="./test.html">';
const imgSrc = "../imgs/platter-2009590_640.jpg";

const imgs = getImgs(titre, imgSrc);

galerieImgs.innerHTML = imgs;


function getImgs(titre, urlImgs) {

    titre = sanitizeHtml(titre);
    urlImgs = sanitizeHtml(urlImgs);
    
    return ` <div class="col p-3">
                <div class="image-card text-white">
                    <img class="w-100 rounded" src=${urlImgs} alt="">
                    <p class="titre-image">${titre}</p>
                    <div class="action-image-buttons" data-show="admin">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                </div>
            </div>`;
}