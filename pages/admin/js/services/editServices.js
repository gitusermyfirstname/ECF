const editService1 = document.getElementById("editService1");
const serviceTitle = document.getElementById("selectService");
const serviceDescription = document.getElementById("serviceDescription");
const service1 = getService(serviceTitle, serviceDescription);

editService1.innerHTML = service1;


function getService(serviceTitle ="", serviceDescription="") {

    serviceTitle = sanitizeHtml(serviceTitle);
    serviceDescription = sanitizeHtml(serviceDescription);
    
    return `<div class="col text-justify">
                    <h3 class="text-white p-3">${serviceTitle}</h3>
                    <p class="text-justify text-white p-3">${serviceTitle}</p>
            </div>`;
}