<form method="post">
@csrf

    <input type="text" name="email">
    <input type="text" name="senha">
    <input type="submit" value="submit">
</form>
<h1>{{$email}}</h1>