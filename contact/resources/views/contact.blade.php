<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - CPS530</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>

      body{
          background-color:#303030;
          color:white;
          font-family: 'Roboto', sans-serif;

      }


      .header {
            padding: 8.5px;
          
            background: #212121;
            color: white;
            font-size: 30px;
            
        }



      .invalid-feedback {
          display: block;

      }


.rightSide{
        margin-left:1200px;
}

.topT {

    margin-top: -350px;
}

      




      </style>


</head>
<body>

     
        <div class="header">
        <a href="https://cps530wasiq.herokuapp.com/" class="btn btn-dark" role="button" style="color:orange">Return</a>


        <p style="margin-left: 5px; margin-top: 2px; font-size: 25px; font-weight: 450; display:inline;">CPS</p><p style="display:inline; font-size: 25px; font-weight: 300;">530</p>
        <p style="display:inline; font-size: 25px; font-weight: 300; color:orange;"> FINAL PROJECT</p> 
        
        </div>

    <div class="container"> 
        <br>
        <br>
        <h1 style="margin-left: 170px; color:orange">Contact Us</h1>
        
        <div class="row">
            <div class="col-md-6">

                @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
    <form style="text-align:center;" method="post" action="{{ route('contact.store') }}">
    {{ csrf_field() }}
        

        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" class="form-control" name="name">
            @if ($errors->has('name'))
            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
    </div>





        <div class="form-group">
            <label>Email Address:</label>
            <input type="text" class="form-control" name="email">
            @if ($errors->has('email'))
            <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            
            @endif
    </div>


        <div class="form-group">
            <label>Message:</label>
            <textarea name="message" class="form-control"></textarea>
            @if ($errors->has('message'))
            <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
            @endif
    </div>



    <button class="btn btn-primary" style="color:orange">Submit</button>
   

    </form>
    </div>
    </div>
    </div>

<div class ="rightSide">
    <div class="topT">
 <img src="contact.png" alt="Smiley face">
</div>
</div>





</body>
</html>