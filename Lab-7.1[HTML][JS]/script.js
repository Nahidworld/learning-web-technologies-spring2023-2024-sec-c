
function nameCheck() {
    let name=document.getElementById('name').value;
            let nameLength=name.split(' ');
            if(!name){
                document.getElementById('message').innerHTML="name should not be null";
            }else if(!checkFirstChar(name[0])){
                document.getElementById('message').innerHTML = "name must start with a letter";
            }
            else if(nameLength.length <2){
                document.getElementById('message').innerHTML="Name should have 2 word";
            }
            for(let i=0; i<name.length; i++){
                if(checkChar(name[i])){}
                else document.getElementById('message').innerHTML = "name can only contain a-z or A-Z or dot or dash";
            }  
            
            function checkChar(ch){
            if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z' || ch == '.' || ch == '_' || ch == ' ') return true;
            }
            function checkFirstChar(ch){
            if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z') return true;
            }
  }
  
  function emailCheck() {
    let mail = document.getElementById('email').value;
                let atPos = mail.indexOf('@');
                let dotPos = mail.lastIndexOf('.');
    
                if(!mail) document.getElementById('message').innerHTML = "email can not be empty";
                else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === mail.length - 1) {
                    document.getElementById('message').innerHTML = "invalid email address";
                }
  }
  
  function genderCheck() {
    let isMaleChecked = document.getElementById("male").checked;
    let isFemaleChecked = document.getElementById("female").checked;
    let isOtherChecked = document.getElementById("other").checked;

    if (!isMaleChecked && !isFemaleChecked && !isOtherChecked) {
        alert("Please select a gender option.");
    } else {
        alert("Form submitted successfully!");
    }
  }
 
  function checkdate(){
            
    let day = document.getElementById("day").value;
    let month = document.getElementById("month").value;
    let year = document.getElementById("year").value;

    if (!day|| !month|| !year)
    {
        document.getElementById('message').innerHTML = "Date can not be empty";
    
    for (let i = 0; i < day.length; i++) {
        if (!checkChar(day[i])) {
            document.getElementById('message').innerHTML = "Day can only contain digits.";
            return;
        }
    }
    for (let i = 0; i < month.length; i++) {
        if (!checkChar(month[i])) {
            document.getElementById('message').innerHTML = "Month can only contain digits.";
            return;
        }
    }
    for (let i = 0; i < year.length; i++) {
        if (!checkChar(year[i])) {
            document.getElementById('message').innerHTML = "Year can only contain digits.";
            return;
        }
    }
    }

    else if (day > 31 || day < 1 || day === "") {
        document.getElementById('message').innerHTML = "Invalid day";
        return;
    }

   else if (month > 12 || month < 1 || month === "") {
    document.getElementById('message').innerHTML = "Invalid Month";
        return;
    }

   else if (year.length !== 4 || year === "") {
    document.getElementById('message').innerHTML = "Invalid Year";
        return;
    }else{
        document.getElementById('message').innerHTML = "Form Submitted Successfully";  
    }

   
}
function checkChar(ch) {
    if(ch >= '0' && ch <= '9'){
        return true;
    }
    
}

function degreeCheck() {
    let sscChecked = document.getElementById("SSC").checked;
            let hscChecked = document.getElementById("HSC").checked;
            let brChecked = document.getElementById("BSc").checked;

            if (!sscChecked && !hscChecked && !brChecked) {
                document.getElementById('message').innerHTML = "Please select at least one degree.";
            } else {
                document.getElementById('message').innerHTML = "Form submitted successfully!";       
            }
}
  
function bloodGroupCheck() {
    let selectedOption = document.getElementById("Blood").value;

            if (selectedOption === "") {
                document.getElementById('message').innerHTML = "Please select a Blood Group";
                
            } else {
                document.getElementById('message').innerHTML = "Form submitted successfully!";
                
            }
}
  
  function proPicCheck() {
    let userIdInput = document.getElementById("uId").value;
            let pictureInput = document.getElementById("propic").value;

            if (userIdInput === "" || isNaN(parseInt(userIdInput)) || parseInt(userIdInput) <= 0) {
            document.getElementById('message').innerHTML = "User Id cannot be empty and must be a positive number.";
            return;
            }else if (pictureInput === "") {
                document.getElementById('message').innerHTML = "Picture cannot be empty.";
                return;
            }else{
                document.getElementById('message').innerHTML = "Form Submitted Successfully.";
            }    
  }