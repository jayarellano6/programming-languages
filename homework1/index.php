<!DOCTYPE html>
<html>
    <head>
        <title>
            Programming Languages
        </title>
        
        <style>
        body{
            margin: 0;
            font-family: "Source Code Pro";
        }
        h1{
            margin: 0;
            padding-top: 25px;
            padding-bottom: 45px;
            text-align: center;
            font-size: 48px;
            background-color:black;
            color: white;
            text-decoration: underline;
        }
        nav{ 
            text-align:center;
            padding-top:20px;
            background-color: #333333;
            padding: 10px;
            overflow: visible;
            
            
        }
        nav a{
            padding: 10px;
            font-size: 21px;
            color: white;
            text-decoration: none;
        }
        nav a:hover, #current{
            border-bottom:2px #00ffff solid;
            color: #00ffff;
            padding:9px;
            font-size: 21px;
            transition: .5s;
        }
        section{
            padding-top:15px;
            text-align: center;
        }
        img{
            margin: 0;
            width: 100%;
        }
        ul{

            text-align:left;
            font-size: 25px;
            padding-left: 225px
        }
        #overview{
            margin: 0;
            padding-left:150px;
            font-size:40px;
            text-decoration:underline;
        }
        hr{
            width:30%;
        }
        footer{
            padding-top: 25px;
            font-size:15px;
            text-align:center;
        }
        #foot a{
            text-decoration: underline;
            color:#cc0000;
        }
        #foot a:hover{
            color: #ff8080;
        }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <h1> Programming Languages </h1>
        </header>
        
        <nav>
            <!--<hr width= "50%">-->
            <a href= "php.html">PHP</a>
            <a href= "python.html">Python</a>
            <a href= "index.php" id= "current">Home</a>
            <a href= "c++.html">C++</a>
            <a href= "java.html">Java</a>
        </nav>
        <br>
        <div>
            <main id= "over">
                <p id= "overview"> Overview </p>
                <ul>
                    <li>There are hundereds of programming languages in existance</li>
                    <li>Many different programming languages are used for purposes</li>
                    <li>Programming languages consist of instructions for a computer</li>
                    <li>Programming languages can be used to create programs that implement specific algorithms</li>
                    <li>The description of a programming language is usually split into the two components of syntax(form) and semantics(meaning)</li>
                </ul>
            </main>
            <section>
                <img src= "./img/piclang.png" alt= "programming languages">
            </section>
        </div>
        
        <footer>
            <hr>
            <p id= "foot"><a href= "https://en.wikipedia.org/wiki/Programming_language">{all information is from here}</a></p>
        </footer>
    </body>
</html>