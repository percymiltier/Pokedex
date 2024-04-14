<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000px, initial-scale=1.0">
    <title>Login</title>
    <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">

</head>

<body>
    <!-- main -->
    <div class="main">
        <div style="display:flex; flex-flow:column;">
            <!-- button to use as a guest -->
            <button class="yesbutton" ahref="/guest.html" style="width:50%;">View as Guest</button>

            <h1 style="color:#3E51A5; text-align:center;">OR</h1>
    
            <div style="display:flex; flex-flow:row;">
                <div style="display:flex; flex-flow:column; justify-content: center;">
                    <!-- User login -->
                    <p>Login:</p>
                    <p >
                        Username: 
                        <input type="text" id="username">
                    </p>
                    <p>
                        Password:
                        <input type="password" id="password">
                    </p>
                    <button class="yesbutton" ahref="" style="width: 40%;">Login</button>
                </div>
                <div style="height: 200px; border:1px solid #3E51A5; margin:15px"></div>
                <div style="display:flex; flex-flow:column; justify-content: center;">
                    <!-- Register -->
                    <p>Register:</p>
                    <p>
                        Username: 
                        <input type="text" id="username">
                    </p>
                    <p>
                        Password:
                        <input type="password" id="password">
                    </p>
                    <button class="yesbutton" ahref="" style="width: 40%;">Register</button>
                    
                </div>
            </div>
        </div>
    </div>
</body>
