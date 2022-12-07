window.addEventListener('scroll', () =>{
 let content =document.querySelectorAll('.phone');
 let contentPosition = content.getBoundingClientRect().top;
 let screenPosition = window.innerHeight;
 if(contentPosition < screenPosition){
  content.classList.add('action');
 }else{
   content.classList.remove('action')
 }
})

let registers = document.querySelectorAll(".register");
let logins = document.querySelectorAll(".login");

document.getElementById("signUp_link").addEventListener("click", () => {
  registers.forEach((i) => {
    i.classList.remove("d-none");
    i.classList.add("d-block");
  });
  logins.forEach((i) => {
    i.classList.remove("d-block");
    i.classList.add("d-none");
  });
});

document.getElementById("login_link").addEventListener("click", () => {
  logins.forEach((i) => {
    i.classList.remove("d-none");
    i.classList.add("d-block");
  });
  registers.forEach((i) => {
    i.classList.remove("d-block");
    i.classList.add("d-none");
  });
});
