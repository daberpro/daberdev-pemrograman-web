<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daberdev | Home</title>
    <link rel="stylesheet" href="css/index.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav style="background-color:#142d4c;" class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Daberdev</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="products/">Course</a>
                        <a class="dropdown-item" href="#"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
                </li>
                <li style="margin-right:20px;" class="nav-item active">
                    <a class="nav-link" href="#">Github <i class="bi bi-github"></i> <span
                            class="sr-only">(current)</span></a>
                </li>
                <li style="margin-right:20px;" class="nav-item active">
                    <a class="nav-link" href="login">Login Or Register</a>
                </li>

            </ul>
        </div>
    </nav>
    <div style="text-align:center;" id="header" class="jumbotron">
        <img style="width: 100px;height:100px;border-radius:100%;"
            src="https://avatars.githubusercontent.com/u/61648689?v=4" />
        <div class="container">
            <p style="font-size: calc(1.5rem + 1vw); font-weight:bold;" class="text-light text-center">
                Start to learn
            </p>
            <p style="font-size: calc(1rem + 0.3vw);color:silver;margin:0px;padding:0px;" class="text-center">
                find out our courses and start your own project
            </p>
        </div>
        <button class="mbutton">
            Start the journey
        </button>
    </div>
    <div class="saparate-content">
        <img src="assets/a.svg" />
    </div>
    <div class="container">
        <h1 style="margin-bottom: 40px;">Our Product</h1>
        <!-- Example row of columns -->
        <div id="prd">
            <div class="card">
                <img src="assets/a.png" class="card-img-top thumbnail thumbnail" />
                <div class="card-body">
                    <h5 class="card-title">Javascript</h5>
                    <p class="card-text">
                        Learn basic of javascript and create dynamic web
                    </p>
                    <a href="#" class="btn btn-dark">Detail</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/b.png" class="card-img-top thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CSS 3</h5>
                    <p class="card-text">
                        Styling your website and give it different look
                    </p>
                    <a href="#" class="btn btn-dark">Detail</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/c.png" class="card-img-top thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">HTML</h5>
                    <p class="card-text">
                        Create your own website and how it's structure
                    </p>
                    <a href="#" class="btn btn-dark">Detail</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/d.png" class="card-img-top thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Typescript</h5>
                    <p class="card-text">
                        Javascript with types
                    </p>
                    <a href="#" class="btn btn-dark">Detail</a>
                </div>
            </div>
        </div>

    </div>
    <footer id="footer" class="container py-5" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12 col-md text-center">
                <img style="width: 100px;height:100px;border-radius:100%;"
                    src="https://avatars.githubusercontent.com/u/61648689?v=4" />
                <small class="d-block mb-3 text-muted">&copy; 2023-2024</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Courses</a></li>
                    <li><a class="text-muted" href="#">Framework</a></li>
                    <li><a class="text-muted" href="#">Private Course</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Github <i class="bi bi-github"></i></a></li>
                    <li><a class="text-muted" href="#">Youtube <i class="bi bi-youtube"></i></a></li>
                    <li><a class="text-muted" href="#">Twitter <i class="bi bi-twitter"></i></a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Contact</a></li>
                    <li><a class="text-muted" href="#">Privacy & Terms</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Get our updates</h5>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Subsribe</button>
                </form>
            </div>
        </div>
    </footer>
</body>

</html>