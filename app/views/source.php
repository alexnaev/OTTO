<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container py-5 px-5 mt-5">
        <h2 class="border-1 border-bottom border-dark">The Code for OTTO.</h2>
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col-lg-8">
                <pre class="line-numbers"><code class="language-javascript">
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
                        returnObj.msg = `Båe Vegar! ${uString} is a plaindrome!`;
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
                </code>
                </pre>
            </div>
            <div class="col-lg-4">
                <p>The code is structed in three functions.</p>
                <h5>The Controller</h5>
                <p>The function controlling this application, getValue, will get the user input from the UI and pass it to the logic function which will return an object. This return object is then passed to the display or view function to display the results in UI.</p>
                <h5>The Logic</h5>
                <p>The logic function, checkForPalindrome, takes in the user input from the controller function, validates characters and turn them into lower case. By running backwords through the now valid string using a for loop, we can reverse the user input and check to see if it reads the same both ways. A message and a bootstrap class, depending on the result outcome, will then be added to a return object which is returned to the controller function.</p>
                <h5>The View</h5>
                <p>The view or display function, displayMessage, takes in the return object and uses a querySelector on the DOM and the object properties to display different alerts messages and alerts depending on the result values.</p>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'shared/footer.php';
?>