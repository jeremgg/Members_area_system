# Members_area_system
Create a user account system in PHP part 1


<br><br>


<p>Create a procedural PHP member system. Our system will consist of the following features:</p>
<ul>
    <li>One part registration with confirmation by email</li>
    <li>A connection / disconnection part, with a "Remember me" option</li>
    <li>A system of recall and modification of password</li>
    <li>A member-only page</li>
</ul>




<br><br>




<h3>The basic structure of our member space:</h3>

<ul>
    <li>Folder css: contains all our css</li>      
    <li>Inc folder: contains all files to include in our pages</li>       
    <ul>
        <li>header.php : defines the header of our pages</li>
        <li>footer.php : defines the footer of our pages</li>
        <li>functions.php: defines all functions of the site</li>
        <li>db.php : defines the connection to the database</li>
    </ul>
</ul>
<ul>
    <li>At the root of the site:</li>
    <ul>
        <li>register.php: allows the user to register</li>  
        <li>confirm.php: processing page that validates user registration</li>  
        <li>login.php: allows the user to connect</li>    
        <li>forget.php: page that handles the forget password functionality</li>    
        <li>reset.php: processing page that updates the user's password. Continues on page forget.php</li>     
        <li>logout.php: allows the user to disconnect</li>    
        <li>account.php: view the user's personal page</li>   
    </ul>
</ul>
