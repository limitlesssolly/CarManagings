<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
    }

    body {
        display: flex;
        min-height: 100vh;
        justify-content: center;
        align-items: center;
        background: white;
    }

    .container {
        width: 680px;
    }

    .area {
        position: relative;
        height: 80px;
        line-height: 80px;
    }

    input {
        position: absolute;
        width: 100%;
        outline: none;
        font-size: 2.2em;
        padding: 0 30px;
        line-height: 80px;
        border-radius: 10px;
        border: 2px solid #c5c7cc63;
        background: transparent;
        transition: 0.1s ease;
        z-index: 1111;
    }

    .label {
        position: absolute;
        font-size: 1.6em;
        color: #c5c7cc63;
        padding: 0 12px;
        margin: 0 20px;
        background-color: white;
        transition: 0.2s ease;
    }

    input:focus,
    input:valid {
        color: #002138;
        border: 4px solid #002138;
    }

    input:focus+.label,
    input:valid+.label {
        color: #002138;
        height: 30px;
        line-height: 30px;
        transform: translate(-15px, -16px) scale(0.88);
        z-index: 1111;
    }
</style>


<body>
    <div class="container">
        <div class="area">
            <input type="text" >
            <div class="label">name</div>
        </div>
    </div>
</body>

</html>