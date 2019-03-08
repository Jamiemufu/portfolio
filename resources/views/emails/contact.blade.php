<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
   <table>
       <tr>
           <td>
              Jamie,<br/>
              You have a received an email from <br/>
              {{ $name }} <br/>
              {{ $email }} <br/>
              From {{ $location }} with a budget of {{ $budget }}. <br/>
              Comments : {{ $comments }}
           </td>
       </tr>
   </table>
</body>
</html>