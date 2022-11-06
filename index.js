//small alert box, for welcome message
// function loadpage() {
//   var name = prompt("Please Enter your Name", "");
//   var t = new Date();
//   var h = t.getHours();
//   var m = t.getMinutes();
//   alert("Hello " + name + ", Welcome to this site! Time right now is " + h + " : " + m);
// }

//mouse over event
function mouseen() {
  $("#mh").css({
    "color": "rgb(137, 138, 166)",
    "font-weight": "bold"
  });
}

function mousele() {
  $("#mh").css({
    "color": "rgb(201, 187, 207)",
    "font-weight": "bold"
  });
}

//fade in, fade out effect function for html p elements - NOT WORKING

$(document).ready(function(){
  $("p.aboutus").mouseover(function(){
    $(this).fadeTo("slow",1);
  });
  $("p.aboutus").mouseleave(function(){
    $(this).fadeTo("slow",0.4);
  });

});

// function fadeoutfunc() {
// 	// $("p").fadeIn("slow");
//   $("p.aboutus").css({
//   "opacity": "0.5",
//   "transform": "translate(0,1)",
//   "transition": "all 1s"
// });
// }

// function fadeinfunc() {
// 	// $("p").fadeIn("slow");
//   $("p.aboutus").css({
//   "opacity": "1",
//   "transform": "translate(0,0)",
//   "transition": "all 1s"
// });
// }


//scrolling animation


//image animation function - NOT WORKING
const toggleCon = () => {
  const container = $('.category');
  container.classList.toggle('active');
};


//console logging when user reaches end of page
window.onscroll = () => {
  if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
    console.log("You have reached the end of this page!");
  }
}

//moving to top of this site
const toTop = () => window.scrollTo({
  top: 0,
  behavior: 'smooth'
});
