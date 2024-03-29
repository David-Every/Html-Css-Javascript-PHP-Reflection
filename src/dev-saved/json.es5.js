"use strict";

var CarouselContent = [{
  image: "img/Carousel-images/web_design_slide_1-edited.png",
  title: "Web Design",
  para: "For businesses looking to make a strong and effective first impression.",
  "class": "web",
  button: "Find out more",
  link: "#"
}, {
  image: "img/Carousel-images/it_support__slide_2.jpg",
  title: "IT Support",
  para: "Fast and cost effective IT Support services for your business.",
  "class": "it",
  button: "Find out more",
  link: "#"
}, {
  image: "img/Carousel-images/telecoms_slide _3.jpg",
  title: "Telecoms services",
  para: " A new approach to connectivity, see how we can help your business.",
  "class": "tele",
  button: "Find out more",
  link: "#"
}, {
  image: "img/Carousel-images/Bespoke_slide_4.jpg",
  title: "Bespoke Software",
  para: "Bring your business together with solutions that grow with you.",
  "class": "bespoke",
  button: "Find out more",
  link: "#"
}, {
  image: "img/Carousel-images/marketing_slide_5.jpg",
  title: "Digital Marketing",
  para: "Generating your new business through  results-driven marketing activities.",
  "class": "marketing",
  button: "See how we can help you",
  link: "#"
}, {
  image: "img/Carousel-images/cyber_slide_6.jpg",
  title: "Cyber Security",
  para: "Keeping businesses and their customers sensitive infomation protected.",
  "class": "cyber",
  button: "Find out more",
  link: "#"
}]; // let slideNum = 0;

function slideTemplate(slide) {
  return "\n        <div id = \"carousel-container\">\n        <img id = \"carousel\" class = \"carousel opacity\" src = \"".concat(slide.image, "\" alt =\"").concat(slide.title, "\">\n            <div class = \"carousel-wrapper\">\n                <div class = \"carousel-overlay\" style =\"z-index: 5000\">\n                    <h1>").concat(slide.title, "</h1>\n                    <p>").concat(slide.para, "</p>\n                    <a href = \"").concat(slide.link, "\" class =\"").concat(slide["class"], "\">\n                        <p>").concat(slide.button, "</p>\n                        <i class = \"fas fa-arrow-right\"> </i>\n                    </a>\n                    <style>\n                        .linkCol{\n                            background-color: ").concat(slide.colour, ";\n                            width:").concat(slide.width, ";\n                        } \n                    </style>\n                </div>\n            </div>\n        </div>\n        ");
}

document.getElementById("slides").innerHTML = "\n    ".concat(CarouselContent.map(slideTemplate).join(""), "\n");