const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const sign_windows_btn = document.querySelector("#sign-windows-btn");
const sign_windows_in_btn = document.querySelector("#sign-windows-in-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

sign_windows_btn.addEventListener("click", () => {
  container.classList.add("sign-app-mode");
});

sign_windows_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-app-mode");
});

