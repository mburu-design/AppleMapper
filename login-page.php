<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	    <title>Login Page</title>

	    <!--link to css-->
        <link rel="stylesheet" href="styles.css"> 
    </head> 
    <body>
        
    <div class="container">
        <div class="legend">
            <img src="images/apple.jpg" alt="Apple Logo">
        </div>
        <h1>Sign in</h1> 
        <form action="process-login.php" method="POST">
            <div class="input-text">
                <div class="input-group">
                    <label for="email" class="email">Email:</label>
                    <input type="text" name="email" placeholder="Enter your email"  required>
                </div>
                <div class="input-group">
                    <label for="password" class="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter your password"  required>
                </div>
            </div>
            <input type="submit" class="btn" name="login" value="Login">
            <!-- <p class="sign-up">Don't have an account? <a href="admin-register-page.php">Sign up</a></p> -->
        </form>              
    </div>        
    </body>
</html>
	
