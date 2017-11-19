<html>
<head>
    <title>Document</title>
</head>

<body>
<br>

    <h1>Send Mail</h1>

    <form action="send" method="post">
     {{csrf_field()}}
       to:<input type="text" name="to">
       message:<textarea name="message" cols="30" rows="10"></textarea>
       <button  type="submit" value= "send">Submit</button>
    </form>

</body>

</html>