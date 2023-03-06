let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview(){
    imageContainer.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} datoteka odabrana`;

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}

let fileInput1 = document.getElementById("file-input1");
let imageContainer1 = document.getElementById("images1");
let numOfFiles1 = document.getElementById("num-of-files1");

function preview1(){
    imageContainer1.innerHTML = "";
    numOfFiles1.textContent = `${fileInput1.files.length} datoteka odabrana`;

    for(i of fileInput1.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer1.appendChild(figure);
        reader.readAsDataURL(i);
    }
}

let fileInput2 = document.getElementById("file-input2");
let imageContainer2 = document.getElementById("images2");
let numOfFiles2 = document.getElementById("num-of-files2");

function preview2(){
    imageContainer2.innerHTML = "";
    numOfFiles2.textContent = `${fileInput2.files.length} datoteka odabrana`;

    for(i of fileInput2.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer2.appendChild(figure);
        reader.readAsDataURL(i);
    }
}

let fileInput3 = document.getElementById("file-input3");
let imageContainer3 = document.getElementById("images3");
let numOfFiles3 = document.getElementById("num-of-files3");

function preview3(){
    imageContainer3.innerHTML = "";
    numOfFiles3.textContent = `${fileInput3.files.length} datoteka odabrana`;

    for(i of fileInput3.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer3.appendChild(figure);
        reader.readAsDataURL(i);
    }
}


