<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  </head>
  <body>
  <div class="container" id="form">
    <div class="container-fluid">
      <h1 align="center">Now it's your turn to talk!</h1>
      <br>
    </div>
    <div class="container">
      <form>
        <div class="form-group">
          <label for="inputName">Spell out your Name!</label>
          <input type="text" class="form-control" id="member_name" placeholder="John Doe or Jane Doe">
        </div>
        <div class="form-group">
          <label for="inputdept">Which clan do you belong to?</label>
          <input type="text" class="form-control" id="department" placeholder="Department">
        </div>
        <div class="form-group">
          <label for="inputrollno">Can I have your number ;)</label>
          <input type="number" class="form-control" id="rollno" placeholder="Roll Number">
        </div>
        <div class="form-group">
          <label for="inputposition">What is that you do for your team...</label>
          <input type="text" class="form-control" id="position" placeholder="Position">
        </div>
        <div class="form-group">
          <label for="inputaboutme">Go on! Brag about yourself</label>
          <textarea class="form-control" rows="7" id="aboutme" placeholder="About Me"></textarea>
        </div>
        <div class="form-group">
          <label for="image">Let's see that million dollar face!</label>
          <input type="file" id="image">
          <p><br>Upload a recent image here</p>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>