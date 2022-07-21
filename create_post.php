<?php

$title = "Criação de Post";
require('include/header.php');
?>

<body>
    <?php require('include/menu.php'); ?>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <form action="save_post.php" method="POST">
                    <div class="form-group mt-3">
                        <span> Nome da Publicação </span>
                        <input type="text" class="form-control" name="publicationName" maxlength="254"> </input>
                    </div>
                    
                    <div class="form-group mt-3">
                        <span> Texto da Publicação </span>
                        <textarea class="form-control"  name="publicationDescription"> </textarea>
                    </div>

                    <input type="submit" class="btn btn-success mt-3" value="Salvar Publicação"> </input>
                </form>
            </div>
        </div>
    </main>
    <?php
    require('include/footer.php');
    ?>