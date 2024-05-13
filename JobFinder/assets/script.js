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
    if (email === '') {
        alert('Please enter your email.');
        return false;
    } else if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
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

    //
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

/*----------------Login-----------*/

function isUserRegistered(username, password) {
    var registeredUsers = [
        { username: "nahid", password: "nahid" },
        { username: "Nahid", password: "Nahid" },
        { username: "alamin", password: "alamin" },
        { username: "admin", password: "admin" }
    ];

    for (var i = 0; i < registeredUsers.length; i++) {
        if (registeredUsers[i].username === username && registeredUsers[i].password === password) {
            return true;
        }
    }

    return false;
}

function loginValidation() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (!username.trim() || !password.trim()) {
        alert("Username and password must not be empty");
        return false;
    }

    if (username.length < 2 || password.length < 4) {
        alert("Username must be at least 2 characters long and password must be at least 4 characters long");
        return false;
    }


    if (!(username[0] >= 'a' && username[0] <= 'z') && !(username[0] >= 'A' && username[0] <= 'Z') ) {
        alert("Name must start with a letter");
        return false;
    }
    //Can contain a-z or A-Z or dot(.) or dash(-)
    for (var i = 0; i < username.length; i++) {
        var ch = username[i];
        if (!(ch >= 'a' && ch <= 'z') && !(ch >= 'A' && ch <= 'Z') && ch != '-'&& ch != '.') {
            alert("Invalid character in the name");
            return false;
        }
    }

    if (!isUserRegistered(username, password)) {
        alert("Invalid username or password. Please try again.");
        return false;
    }
    window.location.href = "../view/postjob.html";
    return false;
}

/* ------------Contact----------*/
function contactValidation() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();

    if (name === '') {
        alert('Please enter your name.');
        return false;
    }

    if (email === '') {
        alert('Please enter your email.');
        return false;
    } else if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    if (message === '') {
        alert('Please enter your message.');
        return false;
    }

    return true;
}

function validateEmail(email) {
    if (email.indexOf('@') === -1) {
        return false;
    }
    var parts = email.split('@');

    if (parts.length !== 2) {
        return false;
    }

    if (parts[0].length === 0 || parts[1].length === 0) {
        return false;
    }

    if (parts[1].indexOf('.') === -1) {
        return false;
    }

    return true;
}