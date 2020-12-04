var i = 0;
var txt = 'Smarter way to donate and receive blood';
var speed = 90;


function typeWriter() {
  if (i < txt.length) {
    document.getElementById("welcome_quote_text").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}



typeWriter()


/*Collapse Navbar*/
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});