// let viewList = document.getElementById('section1');
// let formWrapper = document.getElementById('section2');
let closeForm = document.getElementById('close-form');

// // veriable for input that would be used to update the table data in the database
// let tableDataId = document.getElementById('tableId');


// let viewForm = document.getElementsByClassName('edith-form');

closeForm.addEventListener('click',()=>{
    document.location = document.referrer;
});

// for(let i =0; i < viewForm.length; i++){
//     viewForm[i].addEventListener('click',()=>{
//     // tableDataId.value = viewForm[i].name;

//         formWrapper.style.display = "flex";
//         viewList.style.display = "none";
        
//     });
// }