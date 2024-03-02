// success alert message
let successAlert = document.getElementById('success-alert');


// success alert

function showSuccesAlert(){
    successAlert.style.display = 'block';
    setTimeout(()=>{    successAlert.style.display = 'none';},3000);
}
function hideSuccesAlert(){
    setTimeout(()=>{   successAlert.style.display = 'none';},2000);
}