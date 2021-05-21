function sidebarToggle()
{
    let sidebar = document.getElementById("sidebar");
    let content = document.getElementById("content");
    let btn = document.getElementById("sidebarToggleBtn");
    let btn2 = document.getElementById("sidebarToggleBtn2");

    sidebar.classList.toggle('active');
    content.classList.toggle('active');
    btn.classList.toggle('active');
    btn2.classList.toggle('active');
}