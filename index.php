<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden; /* Hides the overflow to prevent horizontal scrolling */
        }
        .logo-container {
            flex: 1; /* Takes up remaining vertical space */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img {
            max-width: 50%; /* Adjust the maximum width as needed */
            max-height: 70vh; /* Adjust the maximum height as needed */
            user-select: none;
        }
        .button-container {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
        }
        .button {
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            text-decoration: underline;
            font-size: 1em;
            transition: color 0.3s;
            background: none;
            border: none;
            outline: none;
        }
        .button:hover {
            color: #aaa; /* Change color on hover */
        }
        .top-left-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="logo.png" alt="VOLTAGE">
    </div>

    <div class="button-container">
        <button class="button top-left-button" onclick="window.location.href='/aboutus.php'">About VOLTAGE</button>
        <button class="button" onclick="window.open('https://steamcommunity.com/id/phnmhvh/', '_blank')">phnm</button>
        <button class="button" onclick="window.open('https://steamcommunity.com/profiles/76561198928347788', '_blank')">squags</button>
        <button class="button" onclick="window.open('https://steamcommunity.com/profiles/76561198889358706', '_blank')">serban</button>
    </div>

    <script>
        // JavaScript code to dynamically update the website tab title
        const titleText = "VOLTAGE";
        let index = 0;
        let expanding = true;

        setInterval(() => {
            if (expanding) {
                index++;
                if (index >= titleText.length) {
                    expanding = false;
                }
            } else {
                index--;
                if (index <= 0) {
                    expanding = true;
                }
            }
            const newText = titleText.substring(0, index);
            document.title = newText;
        }, 500); // Adjust the interval as needed for desired speed
    </script>
</body>
</html>
