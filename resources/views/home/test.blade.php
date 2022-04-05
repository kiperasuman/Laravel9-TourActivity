<!DOCTYPE html>
<html>
<head>
    <title>
        Page Title
    </title>

</head>
<body>
 <h1>
     This is test page
 </h1>

<p>
    This is a paragraph
</p>

<form action="/save",method="post">
    @csrf
    <label for = "fname"> First Name: </label>
    <input type = "text" id = "fname" name="fname"><br>
    <label for =" lname "> Last Name : </label>
    <input type = "text " id = "lname" name = "lname">
    <input type = "submit" value="save">
</form>

</body>
</html>
