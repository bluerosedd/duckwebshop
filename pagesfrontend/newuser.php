<?php require_once("./pagesfrontendcontroller/newuser.php");?>

<div clas="row">
    <div class="card-panel">
        <span class="flow-text">
<h2>Create New User</h2>
            <p>You will need to create a new user to be able to purchase our products and/or save into favourites.</p>

<form action="" method="post">
    Username:
    <input placeholder="Username" type="text" name="user" maxlength="30" value="" />
    Password:
    <input placeholder="Password" type="password" name="pass" maxlength="30" value="" />
    First name:
    <input placeholder="First name" type="text" name="firstName" maxlength="30" value="" />
    Last name:
    <input placeholder="Last name" type="text" name="lastName" maxlength="40" value="" />
    e-mail:
    <input placeholder="e-mail address" type="text" name="emailAddress" maxlength="255" value="" />
    Birth date:
    <ul>
    <li><input placeholder="Day" type="number" name="birthDay" maxlength="2" value="" /></li>
    <li><input placeholder="Month" type="number" name="birthMonth" maxlength="2" value="" /></li>
    <li><input placeholder="Year" type="number" name="birthYear" maxlength="4" value="" /></li>
    </ul>
    <li class="divider"></li></br>
    Street name:
    <input placeholder="Street name" type="text" name="streetName" maxlength="40" value="" />
    Number:
    <input placeholder="Number" type="number" name="streetNumber" maxlength="11" value="" />
    City:
    <input placeholder="city" type="text" name="city" maxlength="30" value="" />
    Zip code:
    <input placeholder="Zip code" type="number" name="zipCode" maxlength="10" value="" />



    <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="Create" /></a>
</form>

    </span>
    </div>
</div>
