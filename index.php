<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Instants Wild</title>
        <link rel="stylesheet" href="general.css">
        <link rel="stylesheet" href="nav.css">
        <link rel="stylesheet" href="submit.css">
        <link rel="stylesheet" href="index.css">

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
                        <li>Sort by</li>
                        <li>Wildest</li>
                        <li>Not so wild</li>
                        <li>Most recent</li>
                        <li>Oldest</li>
                        <li>Random</li>
                    </ul>
                </div>
                <!-- Instant Wild Logo and Title -->
                <a href="index.html" id="logolink" title="Homepage">
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
                <button class="buttonpostgif" >
                    <p>Submit</p><img src="./images/rondplus.png">
                </button>
            </nav>
        </header>
        
        <main>
            <!-- Desktop Menu -->
            <section class="leftMenuSection">
                <div>
                        <ul>
                            <li>Wildest</li>
                            <li>Not so wild</li>
                            <li>Most recent</li>
                            <li>Oldest</li>
                            <li>Random</li>
                        </ul>
                </div>
            </section>
            <section>

                
                <h2>Wild instant of the day :</h2>


                <article>
                    
                    <h3>When you need a break after Git merge :</h3>
                    <img src="photos/resized/meditation.jpg" title="sleeping wilder" alt="slepping wilder">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>

                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>

                </article>  
            </section>
            
            <hr>

            <section>
                
                <h2> Latest posts :</h2>
          
                <article>
                    <h3>When you have a problem on your code :</h3>
                    <img src="photos/resized/projet.jpg" title="Group in front of a computer" alt="A team in front of a computer">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>
                </article>
                
                <article>
                    <h3>When you need coffee to survive :</h3>
                    <video src="videos/prendre_cafe.mp4" controls loop muted autoplay></video>
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>
                </article>
                
                <article>
                    <h3>Once again struck by Tchoupi :</h3>
                    <img src="photos/resized/tchoupi.jpg" alt="tchoupi video" title="tchoupi video">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>

                </article>
                
                <article>
                    <h3>Two weeks, first project...</h3>
                    <img src="photos/resized/dormir.jpg" alt="slepping wilder" title="slepping wilder" >
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>

                </article>
                
                <article>
                    <h3>Dead for the wild :</h3>
                    <img src="photos/resized/mort.jpg" alt="Sleeping wilder" title="Valentin slepping">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>

                </article>
                
                <article>
                    <h3>Error 404 :</h3>
                    <img src="photos/resized/eror.jpg" alt="slepping wilder" title="slepping wilder">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>

                </article>
                
                <article>
                    <h3>PHP or JS that is the question: </h3>
                    <img src="photos/resized/choix.jpg" alt="wilders need to do a choice" title="Loic and Benjamin make a presentation">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>
                </article>
                
                <article>
                    <h3>The come back:</h3>
                    <img src="photos/resized/leretour.jpg" alt="thoupi" title="tchoupi">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>

                </article>
                
                <article>
                    <h3>The truth about dev junior:</h3>
                    <img src="photos/resized/true.jpg" alt="dev junior picture" title="Loic and benji present dev junior reality">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>
                </article>
                
                <article>
                    <h3>Sleeping beauty after a git push :</h3>
                    <img src="photos/resized/slepping.jpg" alt="Wilder sleeping" title="wilder sleeping">
                    <div class='postInfos'>
                        <p>#dev #Lille #WCS</p><p>18/09/2019</p>
                    </div>
                    <div class="vote">
                        <button type="button">
                            <img src="images/wild.png"/>  <p>Wild</p> <span>0</span>
                        </button>
                        <button type="button">
                            <span>0</span> <p>Not Wild</p> <img src="images/notwild.png"/>    
                        </button>
                    </div>
                </article>
                
            </section>

            <section class="modal">
                <div class="modal_content">
                    <div id="closebuttonconteneur">
                        <img src="./images/croix.png" alt="">
                    </div>
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
                        
                        <p id="required">* required</p>
                        
                        <div>
                            <input type="submit" value="Submit" id="submit_button">
                        </div>  
                    </form>
                </div>
            </section>



            <a class="gotopbutton" href="#"><img src="./images/backtotop.png"></a>
        </main>
        <script src="modal.js"></script>
        <script src="gotopbutton.js"></script>
        <script src="voteButton.js"></script>
    </body>
</html>