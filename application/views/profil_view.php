<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
body{
    background: linear-gradient(90deg, #C0e8e8e8 50%, #3d009e 50%);
}
.portfolio{
    padding:6%;
    text-align:center;
}
.heading{
    background: #fff;
    padding: 1%;
    text-align: left;
    box-shadow: 0px 0px 4px 0px #C0545b62;
}
.heading img{
    width: 10%;
}
.bio-info{
    padding: 5%;
    background:#fff;
    box-shadow: 0px 0px 4px 0px #C0b0b3b7;
}
.name{
    font-family: 'Charmonman', cursive;
    font-weight:600;
}
.bio-image{
    text-align:center;
}
.bio-image img{
    border-radius:50%;
}
.bio-content{
    text-align:left;
}
.bio-content p{
    font-weight:600;
    font-size:30px;
}
</style>

<div class="container portfolio">
	<div class="row">
		<div class="col-md-12">
			<div class="heading">				
				<img src="https://image.ibb.co/cbCMvA/logo.png" />
			</div>
		</div>	
	</div>
	<div class="bio-info">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="bio-image">
                            <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
						</div>			
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="bio-content">
					<h1>Hi there, I'm Meswa</h1>
					<h6>Pecinta kaktus yang lucu.</h6>
					<p>P.S I have no special talent.</p>
                </div>
                <div class="panel-footer ">
                 <a href="<?php echo site_url('Login/loginUser') ?>" class="btn btn-link">Click Me!</a>
			</div>
		</div>	
	</div>
</div>