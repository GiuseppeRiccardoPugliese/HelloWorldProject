<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>Hello World!</title>
</head>

<body>
    <div>
        <h1>Ciaoooo mondoo!!🤯</h1>
    </div>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        width: 100vw;
        background-color: black;
    }

    div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    h1 {
        color: red;
        transition: color 0.5s ease;
        text-shadow: 2px 2px 6px rgba(255, 255, 255, 0.8);
        cursor: pointer;
        animation: rotate 5s linear infinite;
    }

    h1:hover {
        color: orange;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>