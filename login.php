<!--Original Author: Mason Simonton -->
<?php 
    include 'php/mainHeader.php';
    if(isset($_COOKIE['id']) && $_COOKIE['id'] != NULL){
        setcookie('user', $_SESSION['user'], time() + (86400 * 30), "/");
        setcookie('id', $_SESSION['id'], time() + (86400 * 30), "/");
        setcookie('name', $_SESSION['name'], time() + (86400 * 30), "/");
        header("location: index.php");
    }
$msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $user = $_POST["username"];
    $stmt = $conn->prepare("select fname, user_id, username, password from user where username = ?");
    $stmt->execute([$user]);
    $login = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($_POST['username'] == $login["username"] && $_POST['password'] == $login["password"]) {
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['id'] = $login['user_id'];
        $_SESSION['name'] = $login['fname'];
        if($_POST['remember'] == 'yes'){
            setcookie('user', $_SESSION['user'], time() + (86400 * 30), "/");
            setcookie('id', $_SESSION['id'], time() + (86400 * 30), "/" );
            setcookie('name', $_SESSION['name'], time() + (86400 * 30), "/");
        }
        header("location: index.php");
    }else{
        echo "Incorrect Login Information";
    }
        $msg = "User Logged In";
    }
   
?>
        <main>
    <h1 style="text-align:center;">Login</h1>
    <br>
    <div class="form" style="text-align:center;">
        <form method='post' action ="<?php  echo $_SERVER['PHP_SELF']?>">
            <input type="text" placeholder="Username" name = "username" required />
            <br>
            <br>
            <input type="password" placeholder="Password" name = "password" required />
            <br>
            <br>
            <input type="checkbox" name="remember" id="remember" value="yes"/> <label for="remember-me">Remember me</label>
            <br>
            <br>
            <input type="submit" name = "submit" value ="Submit"/>   
        </form>
        <br>
            <br>
        <br>
            <br>
        
        <br>
            <br>
        </div>
            <div class="but" style="text-align:center;">
              <p>Not already a user?</p>
              <button id="user">Create User</button>
            </div>
        </main>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
    var user = document.getElementById("user");
    user.addEventListener('click', function(){
        window.location.href = 'create.php';
    });
</script> 
    </body>
</html>