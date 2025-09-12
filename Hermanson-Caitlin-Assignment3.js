// Homwork 3 - Write a function in JavaScript to test the 
// strength of a proposed password.

function isStrongPassword(userPass) {
    let length = userPass.length;
    if(!(length >= 8)) {
        console.log("No good. Password must be at least 8 characters long.");
        return false;
    }
    
    if(!((userPass.indexOf("password") || userPass.indexOf("1234")) == -1)) {
        console.log("No good. Password cannot contain the word 'password' or 1234.");
        return false;
    }

    for(let i = 0; i < userPass.length; i++) {
        let unicodeChar = userPass.charCodeAt(i);
        if(unicodeChar >= 48 && unicodeChar <= 57) {
            console.log("Number found!");
        }
        else {
            //only checks first index when I return false
            console.log("No good. Password must contain at least one number.");
            return false;
        }
    }

    //IF ALL ARE TRUE: means that password is good --> return true & "Good password!"
    console.log("Good password!");
    return true;
}


isStrongPassword("qwerty1");           // false - Too short
isStrongPassword("qwertypassword1");   // false - Contains "password"
isStrongPassword("qwertyABC");         // false - Needs at least one number
isStrongPassword("qwerty123");         // true