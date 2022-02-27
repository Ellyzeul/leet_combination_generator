<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>Leet Combinations Generator</title>
</head>
<body>
    <nav id="main_nav">
        <h1>1337 Combination Generator</h1>
        <div>
            <button disabled>Symbol suggestion</button>
            <button disabled>Report an error</button>
        </div>
    </nav>
    <hr id="main_hr">
    <main id="main_main">
        <div id="main_input">
            <input type="text" placeholder="Insert here a word">
            <button id="main_generate_btn">Generate!</button>
        </div>
        <textarea name="main_response" id="main_response" cols="30" rows="27"><?php
            $lim = count($combinations)-1;
            foreach($combinations as $key => $word) {
                echo $word . ($key == $lim ? "" : ", ");
            }
        ?></textarea>
    </main>
    <div id="main_loading">
        <img src="/img/loading.gif" alt="Loading...">
    </div>
    <script src="/js/main.js"></script>
</body>
</html>