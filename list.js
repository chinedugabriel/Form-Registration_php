let viewList = document.getElementById('section1');
let formWrapper = document.getElementById('section2');
let closeForm = document.getElementById('close-form');

let viewForm = document.getElementsByClassName('edith-form');

closeForm.addEventListener('click',()=>{
    formWrapper.style.display = "none";
    viewList.style.display = "block";
});

for(let i =0; i < viewForm.length; i++){
    viewForm[i].addEventListener('click',()=>{
        formWrapper.style.display = "flex";
        viewList.style.display = "none";

    });
}