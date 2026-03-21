lucide.createIcons();

const toggle = document.getElementById("menuToggle");
const menu = document.getElementById("mobileMenu");

toggle.addEventListener("click", () => {
  menu.classList.toggle("active");
});

// cerrar al hacer click fuera
document.addEventListener("click", (e) => {
  if (!menu.contains(e.target) && !toggle.contains(e.target)) {
    menu.classList.remove("active");
  }
});
