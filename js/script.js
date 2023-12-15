const sidebar = document.querySelector(".sidebar");
const btn = document.querySelector("#btn");

btn.onclick = function () {
  sidebar.classList.toggle("active");
};

const content = document.querySelector(".content");
const sidebarMobile = document.querySelector("sidebar_mobile");

content.addEventListener("click", function () {
  sidebar.classList.remove("active");
});
