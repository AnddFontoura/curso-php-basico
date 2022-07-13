<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP básico</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="index.php">Home</a>
                <a class="p-2 link-secondary" href="about_us.php">About us</a>
                <a class="p-2 link-secondary" href="services.php">Technology</a>
                <a class="p-2 link-secondary" href="contact.php">Contact</a>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Contact
                </h3>

                <article class="blog-post">
                    <form action="enviar.php">
                        <div class="form-group">
                            <label>Nome</label>
                            <input name='name' class='form-control' type='text'>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea name='name' class='form-control'></textarea>
                        </div>
                        <input type='submit' value='Enviar contato' class='mt-3 btn btn-success'>
                    </form>
                </article>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="julho_2022.php">Julho 2022</a></li>
                            <li><a href="junho_2022.php">Junho 2022</a></li>
                            <li><a href="maio_2022.php">Maio 2022</a></li>
                            <li><a href="abril_2022.php">Abril 2022</a></li>
                            <li><a href="marco_2022.php">Março 2022</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="https://github.com/AnddFontoura" target='_blank'>GitHub</a></li>
                            <li><a href="https://www.instagram.com/anddfontoura/" target='_blank'>Intagram</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="container">
        <hr>
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>