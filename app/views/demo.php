<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container mt-5">
        <div class="row row-cols-1 rowcols-lg-2">
            <div class="col-lg-4 col border-end border-2">
                <h1>OTTO: A Coding Project</h1>
                <h4 class="lead">
                    Write a program to determine if the word or phrase entered is a palindrome. A palindrome is a word or phrase that reads the same backward as forward.
                </h4>
                <h2 class="mt-5 border-bottom border-2">Instructions</h2>
                <p>Enter a word or phrase. Press the button and the app will tell you if it`s a palindrome.</p>
            </div>
            <div class="col-lg-8 col">
                <div>
                    <h5>Enter a phrase or word to check</h5>
                    <form class="row gy-2 gx-3">
                        <div class="col">
                            <input type="text" id="phrase" class="form-control" placeholder="Enter Phrase" aria-label="Phrase">
                        </div>
                        <div class="col-12 d-flex justify-content-start">
                            <button id="btnSubmit" type="button" class="btn btn-dark btn-lg">Check It!</button>
                        </div>
                    </form>
                    <div class="alert mt-5 invisible fade show" id="alert">
                        <h4 id="alertHeader" class="alert-heading"></h4>
                        <hr>
                        <p id="msg" class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/site.js"></script>
<script>
    document.querySelector('#btnSubmit').addEventListener('click', getValue);
</script>
<?php
require_once 'shared/footer.php';
?>