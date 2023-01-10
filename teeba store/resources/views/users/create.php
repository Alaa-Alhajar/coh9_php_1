
<form action="/users/store" method="POST" class="w-50">
<h1>Create User</h1>

    <div class="mb-3">
        <label for="display-name" class="form-label">Display Name</label>
        <input type="text" class="form-control" id="display-name" name="display_name">
    </div>
    <div class="mb-3">
        <label for="user-email" class="form-label">Email</label>
        <input type="email" class="form-control" id="user-email" name="email">
    </div>
    <div class="mb-3">
        <label for="user-username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username-email" name="username">
    </div>
    <div class="mb-3">
        <label for="user-password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password-email" name="password">
    </div>
    <button type="submit" class="btn btn-success mt-4">Create</button>
    <a href="/users" class="btn btn-danger ms-3 mt-4">Cancel</a>
</form>
<style>
 form{   height: 66%;

width:35rem;

margin: auto;

color:whitesmoke;

backdrop-filter: blur(16px) saturate(180%);

-webkit-backdrop-filter: blur(16px) saturate(180%);

background-color: rgb(70 70 70);

border-radius: 12px;

border: 2px solid rgba(255, 255, 255, 0.125);

padding: 20px 25px;}
</style>