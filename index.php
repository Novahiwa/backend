<?php

$code1 = "wam" . bin2hex(random_bytes(1));
$code2 = bin2hex(random_bytes(4));
$code3 = bin2hex(random_bytes(3));

$code = $code1 . " - " . $code2 . " - " . $code3;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            display: flex;
            padding: 1rem;
        }

        .code {
            padding: 1rem;
            margin: .1rem;
            border-radius: 5px;
            border: none;
            background: #ccccccaf;
            font-size: 1.1rem;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 5px;
            border: none;
            background: red;
            color: white;
            font-size: 1rem
        }
    </style>
</head>

<body>
    <form>
        <input type="text" value="<?php echo $code; ?>" disabled class="code" id="code">
        <button class="btn" id="copybtn" onclick="handleCopy(event)">copy</button>
        <button type="submit" hidden></button>
    </form>

    <script>
        const code = document.getElementById("code");
        const copybtn = document.getElementById("copybtn");

        async function handleCopy(event) {
            event.preventDefault();
            try {
                await navigator.clipboard.writeText(code.value);
                copybtn.style.backgroundColor="green";
                copybtn.innerHTML="copied!";
            } catch (err) {
                console.log(err);

            }
        }
    </script>

</body>

</html>