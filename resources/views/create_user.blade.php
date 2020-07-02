<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
  </head>
  <body>

  <form action="/update-user" method="POST">
  @csrf


  <div>
    <label>Name</label>
    <input type="text" name="name">
  </div>
  <button type="submit" value="submit" >Submit</button>
</form>
    
  </body>
</html>