const images = document.querySelectorAll(".slider .hiddenPhoto");
const slide = document.querySelector(".slide");
let photos = new Array;
let count = 0;

images.forEach(item => {
    photos.push(item.src);
});

slide.src = photos[0]

document.querySelector(".btn-left").onclick = () => {
    console.log("ok");
    count--;
    if (count < 0) {
        count = 4;
    }
    slide.src = photos[count];
}

document.querySelector(".btn-right").onclick = () => {
    console.log("ok");
    count++;
    if (count > 4) {
        count = 0;
    }
    slide.src = photos[count];
}


