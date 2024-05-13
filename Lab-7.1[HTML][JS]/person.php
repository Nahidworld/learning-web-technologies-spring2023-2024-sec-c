<!DOCTYPE html>
<html lang="en">
<head>
    <title>Person Profile</title>
</head>
<body>
    <form method="post">
        <table border="1">
            <tr><th colspan="2">
                PERSON PROFILE
            </th></tr>
            <tr><td>
                Name:</td><td>
                <input type="text" id="name" name="name" value=""/>
            </td></tr>
            <tr><td>
                Email:</td><td>
                <input type="email" id="email" name="email" value=""/>
            </td></tr>
            <tr><td>
                Gender:</td><td>
                <input type="radio" id="male" name="gender" value="Male" />Male
                <input type="radio" id="female" name="gender" value="Female" />Female
                <input type="radio" id="other" name="gender" value="Other" />Other
            </td></tr>
            <tr><td>
                Date of Birth:</td><td>
                <input type="text" id="day" name="day" value="" style="width: 50px;"/>/
                <input type="text" id="month" name="month" value="" style="width: 50px;"/>/
                <input type="text" id="year" name="year" value="" style="width: 70px;"/> (dd/mm/yyyy)
            </td></tr>
            <tr><td>
                Blood Group:</td><td>
                <select id="Blood" name="blood_group">
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                </select>
            </td></tr>
            <tr><td>
                Degree:</td><td>
                <input type="checkbox" id="SSC" name="check[]" value="SSC" />SSC
                <input type="checkbox" id="HSC" name="check[]" value="HSC" />HSC
                <input type="checkbox" id="BSc" name="check[]" value="BSc" />BSc
                <input type="checkbox" id="MSc" name="check[]" value="MSc" />MSc
            </td></tr>
            <tr><td>
                Photo:</td><td>
                <input type="file" id="propic" name="propic"/>
            </td></tr>
            <tr><td colspan="2">
                <br>
            </td></tr>   
            <tr><td colspan="2" >
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <input type="button" name="submit" value="submit" onclick="allCheck()"/>
                <input type="reset" name="reset" value="reset"/>
            </td></tr>
        </table>
        <h4 id="message"></h4>
    </form>

<script>
function allCheck() {
    let name = document.getElementById('name').value;
    let nameLength = name.split(' ');
    if (!name) {
        document.getElementById('message').innerHTML = "Name should not be null";
        return;
    } else if (!checkFirstChar(name[0])) {
        document.getElementById('message').innerHTML = "Name must start with a letter";
        return;
    } else if (nameLength.length < 2) {
        document.getElementById('message').innerHTML = "Name should have 2 words";
        return;
    } else {
        for (let i = 0; i < name.length; i++) {
            if (!checkChar(name[i])) {
                document.getElementById('message').innerHTML = "Name can only contain letters, dots, or dashes";
                return;
            }
        }
    }

    let mail = document.getElementById('email').value;
    let atPos = mail.indexOf('@');
    let dotPos = mail.lastIndexOf('.');

    if (!mail) {
        document.getElementById('message').innerHTML = "Email can not be empty";
        return;
    } else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === mail.length - 1) {
        document.getElementById('message').innerHTML = "Invalid email address";
        return;
    }

    let isMaleChecked = document.getElementById("male").checked;
    let isFemaleChecked = document.getElementById("female").checked;
    let isOtherChecked = document.getElementById("other").checked;

    if (!isMaleChecked && !isFemaleChecked && !isOtherChecked) {
        alert("Please select a gender option.");
        return;
    } else {
        let day = document.getElementById("day").value;
        let month = document.getElementById("month").value;
        let year = document.getElementById("year").value;

        if (!day || !month || !year) {
            document.getElementById('message').innerHTML = "Date can not be empty";
            return;
        } else {
            for (let i = 0; i < day.length; i++) {
                if (!checkDChar(day[i])) {
                    document.getElementById('message').innerHTML = "Day can only contain digits.";
                    return;
                }
            }
            for (let i = 0; i < month.length; i++) {
                if (!checkDChar(month[i])) {
                    document.getElementById('message').innerHTML = "Month can only contain digits.";
                    return;
                }
            }
            for (let i = 0; i < year.length; i++) {
                if (!checkDChar(year[i])) {
                    document.getElementById('message').innerHTML = "Year can only contain digits.";
                    return;
                }
            }
        }

        if (day > 31 || day < 1 || day === "") {
            document.getElementById('message').innerHTML = "Invalid day";
            return;
        } else if (month > 12 || month < 1 || month === "") {
            document.getElementById('message').innerHTML = "Invalid Month";
            return;
        } else if (year > 2016 || year < 1900 || year.length !== 4 || year === "") {
            document.getElementById('message').innerHTML = "Invalid Year";
            return;
        }

        let selectedOption = document.getElementById("Blood").value;

            if (selectedOption === "") {
                document.getElementById('message').innerHTML = "Please select a Blood Group";
                return; 
            } 

        let sscChecked = document.getElementById("SSC").checked;
        let hscChecked = document.getElementById("HSC").checked;
        let bscChecked = document.getElementById("BSc").checked;
        let mscChecked = document.getElementById("MSc").checked;

        if (!sscChecked && !hscChecked && !bscChecked && !mscChecked) {
            document.getElementById('message').innerHTML = "Please select at least one degree.";
            return;
        } else {
                let pictureInput = document.getElementById("propic").value;

                if (pictureInput === "") {
                    document.getElementById('message').innerHTML = "Picture cannot be empty.";
                    return;
                } else {
                    document.getElementById('message').innerHTML = "Form Submitted Successfully.";
                }
            }
        }
    }


    function checkChar(ch) {
        if ((ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z') || ch === '.' || ch === '-' || ch === ' ') {
            return true;
        }
    }

    function checkFirstChar(ch) {
        if ((ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z')) {
            return true;
        }
    }

    function checkDChar(ch) {
        if (ch >= '0' && ch <= '9') {
            return true;
        }
    }
</script>

</body>
</html>