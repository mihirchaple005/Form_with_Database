<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="assigncss.css">
</head>
<body>

<div class="container">
    <div class="text">
        Collecting Your Data
    </div>

<form action="index.php" method="post" class="t1">
        <div class="form-row">
            <div class="input-data">
                <div class="underline"></div>
                <label for="name"><h2 class="text1">Enter Your Name</h2></label>
            </div>
            <div class="input-data">
                <input type="text" name="name">
                <div class="underline"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <div class="underline"></div>
                <label for=""><h2>Enter Your E-mail</h2></label>
            </div>
            <div class="input-data">
                <input type="text" name="email">
                <div class="underline"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <div class="underline"></div>
                <label for="gender"><h2>Enter Your Gender</h2></label>
            </div>
            <div class="container">
                <label>
                    <input type="radio" name="gender" value="male">
                </label>
                <label for="male">Male</label>
                <br>
                <label>
                    <input type="radio" name="gender" value="female">
                </label>
                <label for="female">Female</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <div class="underline"></div>
                <label for=""><h2>Enter Your City </h2></label>
            </div>
            <div class="input-data">
                <label for="city" class="submit-btn">
                    <select name="city">
<!--                        <option>Select City</option>-->
                        <option>Nagpur</option>
                        <option>Mumbai</option>
                        <option>Pune</option>
                        <option>Kerala</option>
                    </select>
                </label>
            </div>
        </div>

        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="submit">
            </div>
        </div>

</form>
</div>

</body>
</html>
