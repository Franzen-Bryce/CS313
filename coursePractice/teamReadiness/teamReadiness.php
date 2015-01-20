<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Team 5</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name</label><br/>
        <input type="text" name="name" placeholder="Enter Your Name"><br/>
        
        <label for="email">Email</label><br/>
        <input type="email" name="email" placeholder="Enter Your Email"><br/>
       
        <label for="major">Major</label><br/>
        <input type="radio" name="major" value="CS">CS<br/>
        <input type="radio" name="major" value="CIT">CIT<br/>
        <input type="radio" name="major" value="WDD">WDD<br/>
        <input type="radio" name="major" value="CE">CE<br/>
        
        <label for="placesVisisted">Places Visited</label><br/>
        <input type="checkbox" name="NA" value="North America">North America<br/>
        <input type="checkbox" name="SA" value="South America">South America<br/>
        <input type="checkbox" name="Eu" value="Europe">Europe<br/>
        <input type="checkbox" name="As" value="Asia">Asia<br/>
        <input type="checkbox" name="Au" value="Australia">Australia<br/>
        <input type="checkbox" name="Af" value="Africa">Africa<br/>
        <input type="checkbox" name="An" value="Antartica">Antartica<br/>

        <label for="comment"></label>  <br/>      
        <textarea name="comment" placeholder="Enter Your Comment Here..."></textarea>
        
        <input type="submit" onsubmit="action">
        
    </form>
    
</body>
</html>