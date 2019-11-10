<!Doctype html>
<html lang="eng">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/style.scss"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        <div class="header">
			<nav>	
				<ul class="navbar">
					<li><a href="#">Blog Manage</a></li>	
					<li><a href="#" >Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Sign Up</a></li>
					<li style="float:right;"><a href="#" class="loginlink">Sign Up</a></li>				
                </ul>
			</nav>
        </div>

        <div class="logincontainer">
                <div class="loginform">  
                    <h3>Login Here</h3>
                        <form action="#">
                    <table> 
                          
                            <tr>
                                <td>Username/Email</td>
                                <td><input type="input" name="id"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="pwd"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <select name="logintype">
                                    <option>Login Type</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="sadmin">Super Admin</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit">Sign In</button></td>
                            </tr>
                           
                    </table>
                    </form>
                </div>
                
                <div class="loginbrand">
                        <p>If Not Registrated !!<br><a href="#">Sign up Here</a></p>
                </div>
        </div>
    </body>
</html>