const $top = $('#topLine');
const $mid = $('#middleLine');
const $bot = $('#bottomLine');

function bAnim(){
    console.log("called");
    // $mid.css('webkit-transform', 'rotate(+now+)');
    $mid.position("fixed");
    $mid.animate({left: "10px"},500);
}
