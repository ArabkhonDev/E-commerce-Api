<form action="{{route('au')}}" method="post">
    @csrf
    <input type="text" placeholder="name" name="first_name">
    <input type="text" placeholder="name" name="last_name">
    <input type="email" name="email" placeholder="email">
    <input type="number" name="phone" placeholder="phone">
    <input type="password" placeholder="password">
    <input type="c_password" placeholder="password">
    <input type="submit" value="Register">
</form>