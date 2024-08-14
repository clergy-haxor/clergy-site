<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta content="Home | Clergy" property="og:title" />
    <meta content="In the shadows of history, a conflict of wits and whispers unfolded, veiled in secrecy and mystique. Minds clashed in unseen battles, with both noble and malevolent forces leaving indelible marks. We honor those who played this enigmatic game. Godspeed." property="og:description" />
    <meta content="https://cler.gy" property="og:url" />
    <meta content="https://files.offshore.cat/tIHxkoH1.png" property="og:image" />
    <meta content="#000001" data-react-helmet="true" name="theme-color" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clergy</title>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: black;
            font-family: 'Marcellus', sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            margin-top: 10px;
            color: darkred;
            font-size: 200px;
            font-weight: 200;
            font-family: 'Crusades', sans-serif;
            -webkit-animation: flicker 3s infinite;
            z-index: -1;
        }
        .textbox {
            width: 700px;
            color: #FFFFFFB3;
            font-size: 18px;
            font-weight: 200;
            line-height: 30px;
            margin: 20px 0;
            text-align: center;
            position: relative;
        }
        .textbox p {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 0 40px;
        }
        .textbox #cross1, .textbox #cross2 {
            font-family: 'Crusades', sans-serif;
            font-weight: 600;
            font-size: 24px;
            color: #FF9999;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .textbox #cross1 {
            left: 0;
        }
        .textbox #cross2 {
            right: 0;
        }
        .links {
            color: #FFFFFFB3;
            text-align: center;
            width: 700px;
            margin: 10px 0;
            position: relative;
        }
        .links h2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .links #cross3 {
            font-family: 'Crusades', sans-serif;
            font-weight: 600;
            font-size: 24px;
            color: #FF9999;
            margin-right: 10px;
        }
        .links #cross4 {
            font-family: 'Crusades', sans-serif;
            font-weight: 600;
            font-size: 24px;
            color: #FF9999;
            margin-left: 10px;
        }
        .links a {
            text-decoration: none;
            color: #FFFFFFB3;
            font-weight: 600;
            font-size: 20px;
        }
        .links a:hover {
            color: white;
        }
        .members {
            width: 700px;
            text-align: center;
            color: #FFFFFFB3;
            font-size: 18px;
            font-weight: 200;
            line-height: 30px;
            margin: 20px 0;
        }
        .members a {
            text-decoration: none;
            color: #FFFFFFB3;
        }
        .members a:hover {
            color: white;
        }
        .divider {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 20px 0;
        }
        .divider-hr-left {
            width: 60px;
            border-style: solid;
            border-color: darkred;
            border-width: 2.5px;
        }
        .divider-hr-right {
            width: 600px;
            border-style: solid;
            border-color: darkred;
            border-width: 2.5px;
        }
        .divider-title {
            color: #FF9999;
            margin: 0 10px;
            font-size: 26px;
        }
        #mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            color: white;
            display: none;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            z-index: 1000;
        }
        @font-face {
            font-family: 'Crusades';
            src: url('Crusades.ttf') format('truetype');
        }
        @keyframes flicker {
            0% {opacity:0;}
            9% {opacity:0;}
            10% {opacity:.5;}
            13% {opacity:0;}
            20% {opacity:.5;}
            25% {opacity:1;}
        }
        .donate-button {
            background-color: darkred;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .donate-button:hover {
            background-color: red;
        }
        #donation-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #333;
            color: white;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            display: none;
            z-index: 1001;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        #donation-popup h3 {
            margin-bottom: 10px;
        }
        #donation-popup form {
            display: flex;
            flex-direction: column;
        }
        #donation-popup input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #444;
            background: #222;
            color: white;
            font-size: 16px;
            step: 0.01;
        }
        #donation-popup button {
            background-color: darkred;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        #donation-popup button:hover {
            background-color: red;
        }
        .result {
            margin-top: 10px;
            font-size: 16px;
            text-align: center;
        }
        .result p {
            margin: 5px 0;
            cursor: pointer;
            color: #FF9999;
            word-break: break-word;
        }
        .result p:hover {
            text-decoration: underline;
        }
        .overlay-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 1000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Clergy</h1>
    <div class="textbox">
        <p><span id="cross1">+</span> Support our mission and help us continue our work. Click the button below to donate. <span id="cross2">+</span></p>
        <button class="donate-button" id="donate-btn">Donate</button>
    </div>
    <div class="links">
        <h2><span id="cross3">+</span> <a href="https://t.me/TheClerg" target="_blank">Join Our Channel</a> <span id="cross4">+</span></h2>
    </div>
    <div class="divider">
        <span style="font-family: 'Crusades', sans-serif; color: darkred; font-size: 40px; font-weight: 600;">+</span>
        <hr class="divider-hr-left">
        <h2 class="divider-title">Clergy</h2>
        <hr class="divider-hr-right">
        <span style="font-family: 'Crusades', sans-serif; color: darkred; font-size: 40px; font-weight: 600;">+</span>
    </div>
</div>
<div id="donation-popup">
    <h3>Donate XMR</h3>
    <form id="donation-form">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter amount" step="0.01" required>
        <button type="submit">Donate</button>
    </form>
    <div class="result" id="result" style="display: none;">
        <p id="result-amount" onclick="copyToClipboard('result-amount')"></p>
        <p id="result-address" onclick="copyToClipboard('result-address')"></p>
    </div>
</div>
<div class="overlay-background" id="overlay-background"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var donateBtn = document.getElementById('donate-btn');
        var donationPopup = document.getElementById('donation-popup');
        var overlayBackground = document.getElementById('overlay-background');
        var resultSection = document.getElementById('result');
        var resultAmount = document.getElementById('result-amount');
        var resultAddress = document.getElementById('result-address');

        donateBtn.addEventListener('click', function() {
            donationPopup.style.display = 'block';
            overlayBackground.style.display = 'block';
        });

        overlayBackground.addEventListener('click', function() {
            donationPopup.style.display = 'none';
            overlayBackground.style.display = 'none';
        });

        document.getElementById('donation-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            var amount = document.getElementById('amount').value;

            // Validate amount
            if (!amount || amount <= 0) {
                alert('Please enter a valid amount.');
                return;
            }

            // Call the PHP script to handle the donation
            fetch('donations.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    amount: amount
                })
            })
            .then(response => response.json())
            .then(data => {
                // Show donation details
                resultAmount.textContent = `Amount: ${data.fromAmount}`;
                resultAddress.textContent = `Address: ${data.payinAddress}`;
                resultSection.style.display = 'block';
            })
            .catch(error => console.error('Error:', error));
        });

        function copyToClipboard(elementId) {
            var text = document.getElementById(elementId).textContent;
            navigator.clipboard.writeText(text)
                .then(() => {
                    alert(`${text} copied to clipboard!`);
                })
                .catch(err => console.error('Failed to copy: ', err));
        }
    });

    function checkDevice() {
        if (window.innerWidth < 1024) {
            document.getElementById('mobile-overlay').style.display = 'flex';
        } else {
            document.getElementById('mobile-overlay').style.display = 'none';
        }
    }

    window.onload = checkDevice;
    window.onresize = checkDevice;
</script>
</body>
</html>
