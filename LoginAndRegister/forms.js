document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".container");

  const signUpBtn = document.querySelector("#sign-up-btn");
  const signInBtn = document.querySelector("#sign-in-btn");

  if (signUpBtn) {
    signUpBtn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });
  }

  if (signInBtn) {
    signInBtn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });
  }
});
