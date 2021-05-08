    <?php
        include 'header.php';
        // $a = "Hello world";
        // echo str_replace("Hello","You are",$a);

        // //REPEAT STRING
        // $fruit = "Banana";
        // echo str_repeat($fruit,3);

        // //string position
        // $b = "Hello World!";
        // $chars = "lo";
        // echo stripos($b,$chars);

        $x = 5;

        
        function displayName($name){
            echo "My name is $name";
            echo $GLOBALS['x'];
        }

        //setcookie("name","Hairi",time() + 86400);
        setcookie("name","Hairi",time() - 86400);  //DESTROY a cookie; set a negative variable
        $_SESSION['username'] = "zekeleton"; // Can set it into a person_id in database
        
        if (!isset($_SESSION['username'])){
            echo "You are not logged in";
        }else{
            echo "You are logged in";
        }
    ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
            
            <form method="GET">
                <input type="hidden" name="name" value="hazeeq">
                <button type="submit">PRESS ME</button>

            </form>
            <?php
                //echo $_GET['name'];
            ?>

        </nav>
    </header>

    <section>
        <h1>I AM HAZEEQ</h1>
        <p> paragraph1 </p>
    </section>

    <footer>
        <p>
            Footer
        </p>
    </footer>
    
    

    
</body>
</html>