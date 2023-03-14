<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Static Navigation</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <p class="mb-0">
                    This page is an example of using static navigation. By removing the
                    <code>.sb-nav-fixed</code>
                    class from the
                    <code>body</code>
                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                </p>
            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
    </div>
</main>

<?php
require_once "layouts/footer.php";
?>