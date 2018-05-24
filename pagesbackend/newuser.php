<?php require_once("./pagesbackendcontroller/newuser.php");?>

<br><br>
<div class="col s12 m3">
    <div class=" center">
        <div class="tittlecolor">
            <h4>Create a new admin user</h4>
            <p>Here you will be able to create a new user with powers to be in the backend of your website.</p>
        </div>
    </div>
</div>
<br>

<div class="col s12 m3">
    <div class="card">
        <div class="card-content">
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
                Phone number:
                <input placeholder="Phone number" type="number" name="phone" maxlength="11" value="" />
                Employee role:
                <input placeholder="Employee role" type="text" name="role" maxlength="40" value="" />
                <li class="divider"></li></br>

                <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="Create" /></a>
            </form>
        </div>
    </div>
</div>
