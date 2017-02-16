var Validate = {
    first_name: new RegExp(/^[a-zA-Zèéàòìù\s]{1,}$/),
    last_name: new RegExp(/^[a-zA-Zèéàòìù\s]{1,}$/),
    email: new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)
};

document.addEventListener("submit", function(e){
    e.preventDefault();    
    clearAll();
    var form = document.getElementById('newsletter-form');
    var fields = form.querySelectorAll('input');
    var errors = [];
    for (var i in fields){
        validateField = Validate[fields[i].name];
        if(validateField !== undefined){            
            if(!validateField.test(fields[i].value.trim())){
                errorField = {
                    field : fields[i].name,
                    message : "Il valore del campo non è valido"
                } 
                errors.push(errorField);
            }
        }
    }        
    if(errors.length !== 0){
        for (var err in errors){
            printError(errors[err]);
        }
    }else{
        printSuccess(form);
    }
}); 

function printError(error){
        
    var input = document.getElementById(error.field);
    var parentInput = input.parentNode;
    parentInput.classList.add("has-error");
    var errorField = document.createElement("small");
    errorField.innerHTML = error.message;
    errorField.classList.add("text-danger");
    parentInput.appendChild(errorField);
}

function printSuccess(target){
        

    var successField = document.createElement("div");
    successField.id = "form-success";
    successField.innerHTML = "Iscrizione avvenuta con successo!";
    successField.classList.add("alert","alert-custom", "text-center");
    target.parentNode.appendChild(successField);
}


function clearAll(){
    
    var errorFields = document.getElementsByClassName('has-error');    
    if(errorFields.length > 0){
        while(errorFields.length > 0) {
            errorFields[0].classList.remove("has-error");
        }        
    }
    var errorTextFields = document.getElementsByClassName('text-danger');    
    if(errorTextFields.length > 0){
        while(errorTextFields.length > 0) {
            errorTextFields[0].remove();
        }        
    }
    var successFied = document.getElementById('form-success');
    if(successFied){
        successFied.remove();       
    }
}

