  	<style>
    
	.arrow {
		display: inline-block;
		position: relative;
		width: 0;
		height: 0;
		margin-left: 5px;
		border-left: 50px solid transparent;
		border-right: 50px solid transparent;
		border-bottom: 50px solid white;
		transform: rotate(180deg);
		transition: all 0.2s ease-in-out;
		text-align: center;
		animation: pointing 3s ease-in-out infinite;
	}


	@keyframes pointing {
		0% {
			transform: rotate(180deg);
		}

		50% {
			transform: rotate(360deg);
		}

		100% {
			transform: rotate(180deg);
		}
	}	
	.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #2C3E50 0%,
    #4CA1AF 29%,
    #009FFF 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

      </style>
    <!-- user  -->
  	<!-- notification message -->
  	<?php if (isset($_SESSION["success"])): ?>
        <div class="alert show" role="alert">
		    <div class="alert success-alert">
		    <h3>
             <?php
                echo $_SESSION["success"];
                unset($_SESSION["success"]);
             ?>
      	   </h3>
			<a class="close">&times;</a>
			</div>
		</div>
  	<?php endif; ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['name'])) : ?>
    	<div id="logo">
				<h1>Welcome To NXS !</h1><br>
				<strong><h1 class="animate-charcter"><?php echo $_SESSION['name']; ?></h1></strong>
                <p><i class="arrow"></i></p>
			    </div>
    <?php endif ?>






                                                