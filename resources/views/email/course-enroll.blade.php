<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Enroll Confirmation</title>
</head>
<body>
    <h1>Congratulation Mr. {{$data['name']}}, Your course registration successfully.</h1>
    <h3>Your Login Credential is given below.</h3>
    <p>User ID: {{$data['user_id']}}</p>
    <p>Password: {{$data['password']}}</p>

</body>
</html>
