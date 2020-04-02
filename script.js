let movieName = document.getElementById("create-button");
let createForm = document.getElementById("create-form");
let isFormShowing = false;


let editRecord = document.getElementById("update-button");
let updateForm = document.getElementById("update-form");
let isUpdateFormShowing = false;

let deleteRecord = document.getElementById("delete-record");
let deleteForm = document.getElementById("delete-form");
let isDeleteFormShowing = false;

// Create button
    movieName.onclick = () => {
        if(isFormShowing == false){
            createForm.style.display = "block";
            isFormShowing = true;
        }
        else{
            createForm.style.display = "none";
            isFormShowing = false;
        }
    }
// Edit button
    editRecord.onclick = () =>{
        if(isUpdateFormShowing == false)
        {
            updateForm.style.display = "block";
            isUpdateFormShowing = true;
        }
        else{
            updateForm.style.display = "none";
            isUpdateFormShowing = false;
        }
    }

// Delete button
    deleteRecord.onclick = ()=>{
        if(isDeleteFormShowing == false)
        {
            deleteForm.style.display = "block";
            isDeleteFormShowing = true;
        }    
        else
        {
            deleteForm.style.display = "none";
            isDeleteFormShowing = false;
        }
        
    }