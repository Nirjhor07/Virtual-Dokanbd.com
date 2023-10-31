<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>About Us - Virtual DokanBD.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1877f2;
            color: #fff;
            padding: 1rem 0;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .about-section {
            text-align: center;
            padding: 50px 0;
        }

        .about-us {
            background-color: #fff;
            padding: 30px;
            text-align: left;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .about-us h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
        }

        footer {
            background-color: #f0f2f5;
            padding: 15px 0;
            text-align: center;
        }

        footer p {
            font-size: 14px;
            color: #888;
        }
    </style>
    <script>
        function loadAboutContent() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "about_us.txt", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("about-us").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <header>
        
    </header>

    <section class="about-section">
        <div class="about-us" id="about-us">
            <h2>About Us</h2>
            <p>Loading content...</p>
        </div>
    </section>

    <footer>
        <p>&copy; Virtual DokanBD.com. Engage in professional trading.</p>
    </footer>
    
    <script>
        loadAboutContent(); // Load the content when the page loads
    </script>
</body>
</html>
