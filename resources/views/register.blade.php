<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form SanberBook</title>
</head>

<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="fName">First Name :</label> <br>
        <input type="text" name="f_name"><br><br>

        <label for="lName">Last Name :</label><br>
        <input type="text" name="l_name"><br><br>

        <Label>Gender : </Label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <Label>Nationality :</Label><br>
        <select name="nationality"><br>
            <option value="Indonesia">Indonesia</option>
            <option value="Indonesia">Malaysia</option>
            <option value="Indonesia">Singapura</option>
            <option value="Indonesia">Other</option>
        </select><br><br>

        <Label>Language Spoken :</Label><br>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br><br>

        <Label>Bio :</Label><br>
        <textarea name="bio" cols="30" rows="10">

        </textarea>
        <br><br>

        <button type="submit">Sign Up


    </form>
</body>

</html>
