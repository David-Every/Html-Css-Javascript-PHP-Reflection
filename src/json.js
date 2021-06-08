var CarouselContent  = 
    [{
        image : "img/Carousel-images/web_design_slide_1-edited.png",
        title: "Web Design",
        para: "For businesses looking to make a strong and effective first impression.",
        colour: "#926fb1",
        hover :"#7e57a0",
        button:"Find out more",
        width: "220px",
        link: "#",
    },
    {
        image: "img/Carousel-images/it_support__slide_2.jpg",
        title:"IT Support" ,
        para:"Fast and cost effective IT Support services for your business.",
        colour: "#4183d7",
        hover :"#286abd",
        button:"Find out more",
        width: "220px",
        link: "#",
    },
    {
        image: "img/Carousel-images/telecoms_slide _3.jpg",
        title:"Telecoms services" ,
        para:" A new approach to connectivity, see how we can help your business.",
        colour: "#d64541",
        hover :"#bc2c28",
        button:"Find out more",
        width: "220px",
        link: "#",
    },
    {
        image: "img/Carousel-images/Bespoke_slide_4.jpg",
        title:"Bespoke Software" ,
        para:"Bring your business together with solutions that grow with you.",
        colour: "#67809f",
        hover :"#526781",
        button:"Find out more",
        width: "220px",
        link: "#",
    },
    {
        image: "img/Carousel-images/marketing_slide_5.jpg",
        title:"Digital Marketing" ,
        para:"Generating your new business through  results-driven marketing activities.",
        colour: "#2ecc71",
        hover :"#25a25a",
        button:"See how we can help you",
        width: "370px",
        link: "#",
    },
    {
        image: "img/Carousel-images/cyber_slide_6.jpg",
        title:"Cyber Security" ,
        para:"Keeping businesses and their customers sensitive infomation protected.",
        colour: "#f62459",
        hover :"#de093f",
        button:"Find out more",
        width: "220px",
        link: "#",
    }]
    
let slideNum = 0;
    function slideTemplate(slide){
        // console.log(slideNum);
        // slideNum++;
        return `
        <div id = "carousel-container">
            <img id = "carousel" class = "carousel opacity" src = "${slide.image}">
            <div class = "carousel-wrapper">
                <div class = "carousel-overlay" style ="z-index: 5000">
                    <h1>${slide.title}</h1>
                    <p>${slide.para}</p>
                    <a href = "${slide.link}" style ="background-color:${slide.colour}; width:${slide.width}">
                        <p>${slide.button}</p>
                        <i class = "fas fa-arrow-right"> </i>
                    </a>
                </div>
            </div>
        </div>
        `;
    }

document.getElementById("slides").innerHTML = `
    ${CarouselContent.map(slideTemplate).join("")}
`;

$("#slides").css("cursor", "grab");
