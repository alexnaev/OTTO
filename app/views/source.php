<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container py-5 px-5 mt-5">
        <h2 class="border-1 border-bottom border-dark">The Code for APP NAME.</h2>
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col-lg-8">
                <pre class="line-numbers"><code class="language-javascript">
                    //Call Hello World
                    function helloWorld() {
                        alert('Hello World!');
                    }
                </code>
                </pre>
            </div>
            <div class="col-lg-4">
                <p>The code is structed in one function.</p>
                <h5>Hello World</h5>
                <p>helloWorld is a function that displays an alert with a message of "Hello World!"</p>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'shared/footer.php';
?>