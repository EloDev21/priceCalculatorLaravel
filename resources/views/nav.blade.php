<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <a class="navbar-brand" href="/"><img width="120"  src="http://www.intergate-group.com/wp-content/uploads/2017/11/intergate-group.png" alt="Intergate Group"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/calculator') }}">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/partners">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mails">Mails</a>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0 ms-auto">
                    <li class="nav-item my-2 my-sm-0" style = "display: inline;width: 80px;text-align: center; float: right;">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>