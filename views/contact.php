<?php

?>

<h1>Contact</h1>

<form action="" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name"/>
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
        <label for="subject">Subject</label>
        <textarea class="form-control" name="subject">
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit
    </button>
</form>