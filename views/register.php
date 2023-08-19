<?php

?>

<h1>Registracija</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name">First name</label>
                <input class="form-control"
                       name="first_name"/>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="name">Last name</label>
                <input class="form-control"
                       name="last_name"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control"
               name="email"
               aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll
            never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-form-label">Password</label>
        <input type="password" class="form-control"
               name="password">
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-form-label">Confirm
            Password</label>
        <input type="password" class="form-control"
               name="confirm_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit
    </button>
</form>
