// let closeForm = document.getElementById('close-form');

// success alert message
let successAlert = document.getElementById('success-alert');

// closeForm.addEventListener('click',()=>{
//     document.location = document.referrer;
// });

// success alert

function showSuccesAlert(){
    successAlert.style.display = 'block';
    setTimeout(()=>{    successAlert.style.display = 'none';},3000);
}
function hideSuccesAlert(){
    setTimeout(()=>{   successAlert.style.display = 'none';},3200);
}