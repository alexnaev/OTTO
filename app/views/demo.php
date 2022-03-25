<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container mt-5">
        <div class="row row-cols-1 rowcols-lg-2">
            <div class="col-lg-4 col border-end border-2">
                <h1>OTTO: A Coding Project</h1>
                <h4 class="lead">
                    Live life one loop at a time. A javascript coding exercise using loops. Write a program that displays the numbers from 0 to 100. Display the even numbers in <strong>BOLD.</strong>
                </h4>
                <h2 class="mt-5 border-bottom border-2">Instructions</h2>
                <p>Enter a starting value and an ending value. Press the button and the values will appear.</p>
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
                    <div class="container">
                        <p>Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/site.js"></script>
<script>
    document.querySelector('#btnSubmit').addEventListener('click', getValues);
</script>
<?php
require_once 'shared/footer.php';
?>