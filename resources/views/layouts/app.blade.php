<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucid Media</title>
    <!-- Styles -->
    <!-- Bootstrap stylesheet link -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
</head>
<body style="font-family: Fira Code;background-color: cornflowerblue">

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#elements">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="\" style="font-weight: 500;">LucidMedia</a>
        </div>
        <div class="collapse navbar-collapse" id="elements">
            <ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
                <a href="\add" class="btn btn-warning navbar-btn">Add Data</a>
                <a href="\view" class="btn btn-warning navbar-btn">See Birthdays</a>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
