function sidebarToggle()
{
    let sidebar = document.getElementById("sidebar");
    let content = document.getElementById("content");
    let btn = document.getElementById("sidebarToggleBtn");
    let btn2 = document.getElementById("sidebarToggleBtn2");
    sidebar.classList.toggle('active');
    btn.classList.toggle('active');
    btn2.classList.toggle('active');
}

//Get the button
let mybutton = document.getElementById("btn-back-to-top");
//let section = document.getElementById("section");
let section = document.getElementById("section");


// When the user scrolls down 20px from the top of the document, show the button
section.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    section.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  // section.scrollTop = 0;
  document.getElementById("sidebarToggleBtn").scrollIntoView({ 
    behavior: 'smooth' 
  });
}