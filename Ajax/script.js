function formValidation(event) {

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
        alert("Name must contain 2 letters");
        return false;
    }
    //start letter
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
    //--------age---------
    if (age === "") {
        alert("Age must not be empty");
        return false;
    } else if(age <= 18){
        alert("No child labour");
        return false;
    }
    //gender
    if (!gender) {
        alert("Please select a gender");
        return false;
    }

    //username
    if (username === "") {
        alert("Username must not be empty");
        return false;
    }

    //password
    if (password === "") {
        alert("Password must not be empty");
        return false;
    }

    //confirm password
    if (confirm_password === "") {
        alert("Confirm Password must not be empty");
        return false;
    } else if (password !== confirm_password) {
        alert("Password and Confirm Password must match");
        return false;
    }

    var data = "name=" + encodeURIComponent(name) +
               "&age=" + encodeURIComponent(age) +
               "&gender=" + encodeURIComponent(gender.value) +
               "&email=" + encodeURIComponent(email) +
               "&username=" + encodeURIComponent(username) +
               "&password=" + encodeURIComponent(password) +
               "&confirm_password=" + encodeURIComponent(confirm_password);

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('message').innerHTML = this.responseText;
        }
    }
    xhttp.send(data);
}
