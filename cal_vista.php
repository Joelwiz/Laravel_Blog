<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Calculator</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<style>
    .btn-group button {
    background-color: #04AA6D; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    font-family: 'Orbitron', sans-serif; /*Font to use */
    width: 100px; /*Their width */
    text-align:center; /*Text alignment */
    float: center; /* Float the buttons side by side */
    }

    /* Clear floats (clearfix hack) */
    .btn-group:after {
    content: "";
    clear: both;
    display: table;
    }

    .btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
    }
    body{
        text-align:center;
        font-family: 'Orbitron', sans-serif;
    }
    .forma{
        background-color:rgb(235, 207, 52);
        width:fit-content;
        text-align:center;
        margin-left:auto;
        margin-right:auto;
        font-family: 'Orbitron', sans-serif;
    }

    .formdiv{
        background-color:rgb(109, 230, 48);
        width:15em;
        min-height:21em;
        max-height:22em;
        text-align:center;
        margin-left:auto;
        margin-right:auto;
    }

    /* Add a background color on hover */
    .btn-group button:hover {
    background-color: #3e8e41;
    }
</style>
<body>
    <div class="formdiv">
        <form method="GET"  action="cal.php" class="forma">
            <p>First Value:<br/>
            <input type="text" id="first" name="first" value="<?= $first ?>"></p>
            <p>Second Value:<br/>
            <input type="text" id="second" name="second" value="<?= $second ?>"></p>
            <div class="btn-group">
            <button type="submit" name="operadores" value="+">+</button>
            <button type="submit" name="operadores" value="-">-</button>
            </div>
            <div class="btn-group">    
            <button type="submit" name="operadores"  value="*">*</button>
            <button type="submit" name="operadores" value="/">/</button>
            </div>
            <div class="btn-group">    
            <button type="submit" name="operadores"  value="sqrt">sqrt</button>
            <button type="submit" name="operadores" value="log">logarithm</button>
            </div>
            <div class="btn-group">    
            <button type="submit" name="operadores"  value="power">power</button>
            <button type="submit" name="operadores" value="clear">clear</button>
            </div>
            <p>Result:<br/>
            <input type="text" id="third" name="resultado" value="<?= $resultado ?>">
            </p>   
        </form>
    </div>
</body>
</html>