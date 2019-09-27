<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Instants Wild, where you can share your wildest moments.">
    <title>Instants Wild</title>
    <link rel="stylesheet" href="submit_style.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <!-- menu burger -->
            <div id="burger">
                <input type="checkbox" />
                <div id="burgerIcon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <ul>
                    <li>Dev</li>
                    <li>Data</li>
                    <li>WTF</li>
                    <li>Daily life</li>
                    <li>Fail</li>
                </ul>
            </div>
            <!-- Instant Wild Logo and Title -->
            <a href="index.php" id="logolink" title="Homepage">
                <img src="./images/logo.png" alt="Logo Instant Wild">
                <h1 id="h1reduced">IW</h1>
                <h1 id="h1full">Instants Wild</h1>
            </a>
            <!-- Search Bar -->
            <form class="search-container" action="">
                <input type="text" placeholder="#Lille" name="search2">
                <button type="submit"><img src="./images/icon_loupe.png">
                </button>
            </form>
            <!-- Git Post Buttom -->
            <a class="buttonpostgif" href="submit.html">
                <p>Submit</p><img src="./images/rondplus.png">
            </a>
        </nav>
    </header>
    <main>
        <h1>Submit a post </h1>

        <form action="*" method="post">
            <div>
                <label for="title">Title <span>*</span></label>
                <input type="text" id="title" name="title" placeholder="Type your title here" required>
            </div>

            <div id="content">

                <p>Choose your content <span>*</span></p>

                <label for="url_content">Enter an url :</label>
                <input type="url" id="url_content" name="url_content" placeholder="http://wild_img_hosting.com/">

                <label for="file_content">Or upload a file :</label>
                <input type="file" id="file_content" name="file_content">
            </div>

            <p>Choose your categories : </p>

            <div id="categories">

                <div>
                    <input type="checkbox" id="dev" name="dev" value="dev" checked>
                    <label for="dev">Dev</label>
                </div>
                <div>
                    <input type="checkbox" id="data" name="data" value="data">
                    <label for="data">Data</label>
                </div>
                <div>
                    <input type="checkbox" id="wtf" name="wtf" value="wtf">
                    <label for="wtf">WTF</label>
                </div>
                <div>
                    <input type="checkbox" id="fail" name="fail" value="fail">
                    <label for="fail">Fail</label>
                </div>
                <div>
                    <input type="checkbox" id="daily" name="daily" value="daily">
                    <label for="daily">Dailylife</label>
                </div>
            </div>

            <div>
                <label for="username">Your username <span>*</span></label>
                <input type="text" id="username" name="username" placeholder="Your username goes here" required>
            </div>

            <div>
                <label for="mail">Your email</label>
                <input type="email" id="mail" name="mail" placeholder="wilder@wild.com">
            </div>

            <p id="required">* required</p>

            <div>
                <input type="submit" value="Submit" id="submit_button">
            </div>
            
        </form>
    </main>
</body>

</html>