<!DOCTYPE html>
<html lang="en">



<title>Omansh</title>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<style>
* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
}

#notfound {
    position: relative;
    height: 100vh;
    background-color: #222;
}

#notfound .notfound {
    position: absolute;
    background-color: #004b2ab3;
    left: 50%;
    top: 50%;
    height: 100vh;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.notfound {

    width: 100%;
    text-align: center;
    line-height: 1.4;
}


.notfound .notfound-404 h1 {
    font-family: 'Josefin Sans', sans-serif;
    color: #222;
    font-size: 220px !important; 
    letter-spacing: 10px;
    margin: 0px;
    font-weight: 700;
    line-height: 261px !important;

}

.notfound .notfound-404 h1>span {}

.notfound p {
    font-family: 'Josefin Sans', sans-serif;
    color: #c9c9c9;
    font-size: 16px;
    font-weight: 400;
    margin-top: 0px;
    margin-bottom: 15px;
}

.notfound a {
    font-family: 'Josefin Sans', sans-serif;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    background: transparent;
    color: #c9c9c9;
    border: 2px solid #c9c9c9;
    display: inline-block;
    padding: 10px 25px;
    font-weight: 700;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
}

.notfound a:hover {
    color: #ffab00;
    border-color: #ffab00;
}

@media only screen and (max-width: 480px) {
    .notfound .notfound-404 {
        height: 122px;
        line-height: 122px;
    }

    .notfound .notfound-404 h1 {
        font-size: 122px;
    }
}
</style>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="main-div">
                <div class="notfound-404">
                    <h1>4<span>0</span>4</h1>
                    <p>PAGE NOT FOUND</p>
               

                <a href="https://omansh.org/">home page</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>