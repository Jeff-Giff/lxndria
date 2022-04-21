<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
        <link rel="stylesheet" href="/../../css/banner.css">
        <?php echo e($links); ?>

    </head>
    <body>
        <div id="banner">
            <div class="nav">PROBLEMS</div><div class="nav">DISCUSSIONS</div><div class="nav">PROJECTS</div><div class="nav">HOME</div><div class="nav">ADD POST</div>
        </div>
        <?php echo e($content); ?>

    </body>
</html>