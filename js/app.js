const picture = document.getElementById("js--headshot");


picture.addEventListener("mouseenter", event => {
    picture.setAttribute("src", "../src/images/dejorden2.jpg")
});

picture.addEventListener("mouseleave", event => {
    picture.setAttribute("src", "../src/images/dejorden.jpg")
});


