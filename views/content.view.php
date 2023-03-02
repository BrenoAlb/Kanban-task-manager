<!DOCTYPE html>
<html lang="en">
	
<head>
	<?php $title= "Content"; ?>
	<?php require 'head.php'; ?>
</head>

<body class="bg-info">

<header class="m-0 p-0">
	<nav class="navbar navbar-expand-lg pt-3 text-dark">
		<div class="menu container">
			<a href="index.php" class="navbar-brand">

			<span class="btn-info logo_text align-middle">Kanban</span>
			</a>
            <ul class="navbar-nav ml-auto">
                <li><span class="btn text-light mx-2"><i class="far fa-user pr-2"></i>Bem vindo <?php echo strtoupper($_SESSION['user']);?>!</li>
                <li><span class="btn text-light mx-2"><i class="far fa-calendar-alt pr-2"></i>Date:<span class="pl-2 date"></span></li>	
                <li><span class="btn text-light mr-2"><i class="far fa-clock pr-2"></i>Time:<span class="pl-2 clock"></span></li>				
            </ul>	

			<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
			<div id="navbarSupportedContent" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="logout.php" class="btn btn-outline-dark mr-2">Sair</a></li>				
				</ul>
			</div>
		</div>
	</nav>
</header>

<div class="container mt-0 mb-4">
    <div class="row d-flex m-2 mt-0">
        <div class="col-sm-4 col-md-4">
            <a class="card my-card text-dark" href="today.php">
               
               <div class="card-body d-flex justify-content-center">
                    <h3 class="card-title"></i>HOJE</h3>
               </div>
            </a>                   
        </div>

        <div class="col-sm-4 col-md-4">
            <a class="card my-card text-dark" href="projects.php">
                
               <div class="card-body d-flex justify-content-center">
                    <h3 class="card-title"></i>PROJETOS</h3>
               </div>
            </a>                   
        </div>

        <div class="col-sm-4 col-md-4">
            <a class="card my-card text-dark" href="calendar.php">
                
               <div class="card-body d-flex justify-content-center">
                    <h3 class="card-title"></i>CALENDÁRIO</h3>
               </div>
            </a>                   
        </div>        
    </div>
</div>

<!-- -------------------------- FOOTER --------------------------- -->
<?php require 'footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
    function clock() {
    var time = new Date(),          
        hours = time.getHours(),    
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    var date =time.getFullYear()+'-'+(time.getMonth()+1)+'-'+time.getDate();
        

    document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
    document.querySelectorAll('.date')[0].innerHTML = date;
    
    function harold(standIn) {
        if (standIn < 10) {
        standIn = '0' + standIn
        }
        return standIn;
    }
    }
    setInterval(clock, 1000);
</script>

</body>
</html>

