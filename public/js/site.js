//Get user input
function getValue() {
    document.querySelector('#alert').classList.add('invisible');
    //get user string from UI
    let userString = document.querySelector('#phrase').value;

    //check if palindrome
    let returnObj = checkForPalindrome(userString);

    //display result
    displayMessage(returnObj);
}

function checkForPalindrome(uString) {
    uString = uString.toLowerCase();

    //remove spaces and special chars.
    let regex = /[^a-zæøå0-9]/gi;
    uString = uString.replace(regex, "");

    let revString = [];
    let returnObj = {};

    for (let index = uString.length - 1; index >= 0; index--) {
        revString += uString[index];

    }

    if (revString == uString) {
        returnObj.msg = `Båe Vegar! ${uString} is a palindrome!`;
        returnObj.className = "alert-success";
    } else {
        returnObj.msg = `Sorry! ${uString} doesn\`t work both ways!`;
        returnObj.className = "alert-danger";
    }

    returnObj.reversed = revString;
    returnObj.userString = uString;

    return returnObj;
}

function displayMessage(returnObj) {
    document.querySelector('#alertHeader').innerHTML = returnObj.msg;
    document.querySelector('#msg').innerHTML = `Your phrase: ${returnObj.userString} is ${returnObj.reversed} backwords.`;
    document.querySelector('#alert').classList.remove('alert-danger');
    document.querySelector('#alert').classList.remove('alert-success');
    document.querySelector('#alert').classList.add(returnObj.className);
    document.querySelector('#alert').classList.remove('invisible');
}