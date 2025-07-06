<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="small.php" method="post" target="_blank">
        <h1>Register</h1>
  
    <input type="text" value="" name="Username">
    <label for="Username">Username</label><br>

    <input type="password" value="" name="password">
    <label for="password">Password</label><br>

    <input type="number" value="" name="Age">
    <label for="Age">Age</label><br>

    <input type="Email" value="" name="Email">
    <label for="Email">Email</label><br>

    <input type="time" value="" name="Time">
    <label for="Time">Time</label><br>

    <input type="range" value="0" name="range" min="0" max="100" step="5">
    <label for="Range">Range</label><br>

    <input type="date" value="date" name="date">
    <label for="Date">Date</label><br>

    <input type="color" value="color" name="color">
    <label for="color">color</label><br>



    <select value="select option" id="Option" name="Options">
       <option value="Option1">Option 1</option>
       <option value="Option2">Option 2</option>
       <option value="Option3">Option 3</option>
    </select>
    <label for="Options">Options</label><br>

    <input type="file" id="profilePic" name="profilePic" accept="image/*">
    <label for="profilePic">Profile Picture</label><br>

    <label for="Gender">Gender</label>
    <input type="radio" value="Male" name="Gender"> Male <br>
    <input type="radio" value="Female" name="Gender"> Female <br>
    <input type="radio" value="Rather not say" name="Gender"> Rather not say <br>
    <input type="radio" value="Others" name="Gender"> Others <br>

    <textarea id="bio" name="bio" rows="5" placeholder="Tell us about yourself" maxlength="1000"></textarea><br>

    <input type="checkbox" value="I agree with all the terms and Conditions" name="conditions"> I agree with all the terms and Conditions<br>
    <input type="checkbox" value="I don't Agree at all" name="conditions"> I don't Agree at all
    
</div>
<div class="submit">
   <input type="submit" value="submit" name="submit">
</div>
</form>
</body>
</html>
