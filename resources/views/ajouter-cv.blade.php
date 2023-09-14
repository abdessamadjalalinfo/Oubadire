
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CVThéque:Liste des lauréats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!--scroll library-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--CARD-->
<link rel="stylesheet" href="https://cvtheque.enim.ac.ma/assets/css/News-Cards.css">
<link rel="icon" href="https://cvtheque.enim.ac.ma/css/ensmr_piramide1.ico" />

        
    <style>
	    html
    {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .row
    {
        color:black;
    }
    a:hover
    {
        text-decoration:none;
    }

/* Clear floats after the columns */
.etud:after {
  content: "";
  display: table;
  clear: both;
}
h1{
    opacity: .8;
    text-shadow: 0px 0px 1px black;
}
html {
    background: url('https://cvtheque.enim.ac.ma/assets/img/intro-bg.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100vh;
}

.snip1527
{
    width:20%;
}
</style>

</head>

<body id="page-top" style="background-color:transparent;">
<script>AOS.init();</script>

<div style="width:100vw;height:25px;background-color:transparent;position:fixed;top:0;left:0;box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.8);z-index:1;background: linear-gradient(to top, transparent 0%, #353535 100%);"></div>
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="https://cvtheque.enim.ac.ma"><img src="http://127.0.0.1:8000/storage/logo.png" width="100" height="100" alt="" style="border-radius:0px;filter: drop-shadow(5px 5px 5px #222);box-shadow:none;"></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto"></ul>
                <div class="row offset-2">
                    
                </div>
            </div>
        </div>
    </nav>
    <header class="masthead">
        
        <div class="intro-body">
            <div class="container-fluid">
                
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{$message}}</strong>
                </div>
                @endif
            <div class="row col-6 etud d-flex justify-content-center" style="width:100%;margin:auto;display:block;">
                


                <form method="post" action="{{ route('ajouter') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom Complet</label>
                      <input type="text" name="nom" class="form-control"  placeholder="Enter le nom complet">
                    </div>
                    <div class="form-group">
                      <label for="">Ecole</label>
                      <select name="ecole" class="form-control" id="exampleFormControlSelect1">
                        <option value="ENSMR">ENSMR</option>
                       
                      </select>                    
                    </div>
                    <div class="form-group">
                        <label for="">Formation</label>
                        <select name="formation" class="form-control" id="exampleFormControlSelect1">
                          <option value="IT">IT</option>
                          
                        </select>                    
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Expérience associative</label>
                        <input name="experienceas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter votre expérience associative">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Description de l'expérience</label>
                        <input name="descriptionas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter la description">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Votre Image</label>
                        <input name="image" type="file" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Votre CV</label>
                        <input name="file" type="file" class="form-control">
                      </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                  </form>

        
        </div>



        <br><br>
        

        <br>
            </div>
        </div>
    </header>
    <footer style="color:white;opacity:.82;">
        <div class="container text-center">
            <p>Tous droits réservés ©&nbsp;Oubadire 2023</p>
           
        </div>
    </footer>
    <script src="https://cvtheque.enim.ac.ma/assets/js/jquery.min.js"></script>
    <script src="https://cvtheque.enim.ac.ma/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cvtheque.enim.ac.ma/assets/js/grayscale.js"></script>

    <script>AOS.init();</script>
</body>

</html>

<script>
    $(document).ready(function(){
        $(".pagination").addClass("justify-content-center");
        $(".col1").addClass("column");
        $(".etud").css("padding-top",$("nav").height()+30);
    });
	$( window ).resize(function() {
  $(".etud").css("padding-top",$("nav").height()+30);
});
	document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 73) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 67) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 85) {
     return false;
  }
}
	</script>
