
<div class="container d-flex justify-content-center">
        <div class="form d-flex align-items-center py-4 m-2">
<!-- form -->

    <form method="post" action="../crud/insert_data.php" >

    <img class="mb-4" src="../img/logo_1.png" alt="www" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="username" name="username"
      placeholder="User name" required>
      <label for="floatingInput">User name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3 mb-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 mb-3" type="submit">Sign in</button>
    
</form>    
    </div>
</div>
