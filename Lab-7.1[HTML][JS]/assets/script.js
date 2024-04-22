function formValidation() {
    //variables
    var name = document.getElementsByName('name')[0].value;
    var age = document.getElementsByName('age')[0].value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var email = document.getElementsByName('email')[0].value;
    var username = document.getElementsByName('username')[0].value;
    var password = document.getElementsByName('password')[0].value;
    var confirm_password = document.getElementsByName('confirm_password')[0].value;
    var pp = document.getElementsByClassName('pp')[0];

    // Validation Conditions
    //------name-------------
    if (name === "") {
        alert("Name must not be empty");
        return false;
    }
    //Contains at least two words
    else if (name.length <2) {
        alert("Name must contain 2 letter");
        return false;
    }
    //stat letter
    if (!(name[0] >= 'a' && name[0] <= 'z') && !(name[0] >= 'A' && name[0] <= 'Z') ) {
        alert("Name must start with a letter");
        return false;
    }
    //Can contain a-z or A-Z or dot(.) or dash(-)
    for (var i = 0; i < name.length; i++) {
        var ch = name[i];
        if (!(ch >= 'a' && ch <= 'z') && !(ch >= 'A' && ch <= 'Z') && ch != '-'&& ch != '.') {
            alert("Invalid character in the name");
            return false;
        }
    }
    //----email-----
    if (email === "") {
        alert("Email must not be empty");
        return false;
    }
    //Must be a valid email address (i.e anything@example.com)


    //--------age---------
    if (age === "") {
        alert("age must not be empty");
        return false;
    }else if(age <= 18){
        alert("No child Labour");
    }
    //gender
    if (gender === "") {
        alert("age must not be empty");
        return false;
    }

    //username
    if (username === "") {
        alert("username must not be empty");
        return false;
    }

    //password
    if (password === "") {
        alert("password must not be empty");
        return false;
    }
    //profile pic
    if(pp)


    return true; 
}