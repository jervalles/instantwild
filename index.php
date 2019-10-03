<!DOCTYPE html>
<html> 
<?php
include ('header.html');
include ('codephp/data.php');
require_once ('codephp/form.php');
?>

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
                        <li>Wildest</li>
                        <li>Not so wild</li>
                        <li>Most recent</li>
                        <li>Oldest</li>
                        <li>Random</li>
                </div>
                    </ul>
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
                <!-- Licorn DesktopMode Toggle -->
                <div class="toggle-container"><p>try me</p>
                    <input type="checkbox" id="switch" name="theme" /><label id="licornLabel" for="switch">Toggle</label>
                </div>
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
                <?php

                foreach ($wildPost as $tittle => $contenu)
                {

                ?>
                <article>
                    <h3><?=$tittle?></h3>
                    <img src="<?=$contenu[0]?>" title="<?=$contenu[1]?>" alt="<?=$contenu[2]?>">
                    <div class='postInfos'>
                        <p><?=$contenu[3]?></p><p><?=$contenu[4]?></p>
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
                <?php
                }
                ?>
                
            <section class="modal">
                <div class="modal_content">
                    <div id="closebuttonconteneur">
                        <img src="./images/croix.png" alt="">
                    </div>
                    <h1>Submit a post </h1>
                           
                    <form action="*" method="post">
                        <div>
                            <label for="title">Title <span>*</span></label>
                            <input type="text" id="title" name="title" placeholder="Type your title here">
                            <?=$formErrors['title']?>
                        </div>
                        
                        <div id="content">
                        
                            <p>Choose your content <span>*</span></p>
                        
                            <label for="url_content">Enter an url :</label>
                            <input type="url" id="url_content" name="url_content" placeholder="http://wild_img_hosting.com/">
                            <?=$formErrors['url_content']?>


                            <label for="file_content">Or upload a file :</label>
                            <input type="file" id="file_content" name="file_content">
                            <?=$formErrors['file_content']?>
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
        <script src="random.js"></script>
        <script src="modal.js"></script>
        <script src="gotopbutton.js"></script>
        <script src="voteButton.js"></script>
        <script src="licorn.js"></script>
    </body>
</html>