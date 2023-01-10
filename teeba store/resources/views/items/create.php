
<form action="/items/store" method="POST" class="w-50">
<h1>Create Item</h1>
    <div class="mb-3">
        <label for="post-title" class="form-label">Item </label>
        <input type="text" class="form-control" id="post-title" name="item_name">
    </div>
    <div class="mb-3">
    <label for="post-content">Cost</label>
        <input class="form-control"  id="post-content"  name="cost"></textarea>
        
    </div>
    <div class="mb-3">
        <label for="post-title" class="form-label">Price </label>
        <input type="text" class="form-control" id="post-title" name="price">
    </div>
    <div class="mb-3">
        <label for="post-quantity" class="form-label">quantity </label>
        <input type="text" class="form-control" id="post-quantity" name="quantity">
    </div>

    <button type="submit" class="btn btn-success mt-4">Create</button>
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