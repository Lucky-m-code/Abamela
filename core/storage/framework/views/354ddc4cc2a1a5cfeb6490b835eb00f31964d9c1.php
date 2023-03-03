<?php $__env->startSection('content'); ?>



﻿<!DOCTYPE html>
<html>

<head>
	<title>In-demand talent on demand.</title>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
<style>

.banner{
	width: 100%;
	height: 500px;
	background: #184153;
	display: flex;
	align-items: center;
	justify-content:space-around;
}
.banner h2{
	color: #6fda44;
	font-size: 50px;
	font-family: 'Orbitron', sans-serif;
	line-height:70px;
}
.banner h2 span{
	color: #ffff;
} 
.banner p{
	color: #fff;
	font-size: 18px;
	margin-top: 10px;
	line-height: 30px;
	margin-bottom: 20px;

}
.banner a{
	text-decoration: none;
	font-size: 14px;
}
.banner .hire{
	margin-top: 20px;
	padding: 10px 35px;
	background:#6fda44;
	color: #ffff;
	text-transform: capitalize; 
	font-weight: bold;
	transition: .5s;
}
.banner .find{
	margin-top: 20px;
	padding: 10px 35px;
	color:#6fda44;
	background:  #ffff;
	text-transform: capitalize; 
	font-weight: bold;
	margin-left: 20px;
}
.banner .hire:hover{
	background: #008329;
}
.banner .right img{
	width: 500px;
	height: 500px;
}
/*========================*/

.services{
	width: 100%;
	height: 100vh;
	padding: 50px;
	background: #F5F5F5;
    
}
.heading{
	margin-left: 100px;
}
.content{
	width:auto;
	margin:20px auto;
	display: flex;
	justify-content:center;
	align-items: center;
	flex-wrap: wrap;
}
.card{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	width: 270px;
	height: 220px;
	box-shadow:1px 1px 8px grey;
	margin:20px 12px;
	cursor: pointer;
}
.icon{
	width: 100%;
	height: 180px;
	background: #184153;
}
.title{
	width: 100%;
	height: 70px;
	display: flex;
	justify-content: center;
	align-items: center;
	background: #fff;
}

.title h2{
	font-size: 15px;
	font-weight: 600;
	line-height: 1.5;
	text-transform: capitalize;
}



/*==============================*/


.brands{
	width: 100%;
	height: 200px;
	background: #ffff;
}
.brands p{
	margin-top: 20px;
	font-weight: bold;
	text-align: center;
	font-size: 20px;
}
.brands-logos{
	display: flex;
	justify-content:space-around;
	align-items:center;
	flex-wrap: wrap;
	width: 100%;
	height: 100%;
}
.brands-logos img:nth-child(1){
	width: 180px;
	height: 35px;
	margin-left:5px;
}
.brands-logos img:nth-child(2){
	width: 170px;
	height: 40px;
	margin-left: 5px;
}
.brands-logos img:nth-child(3){
	width: 250px;
	height: 90px;
	margin-left: 5px;
}
.brands-logos img:nth-child(4){
	width: 100px;
	height: 24px;
	margin-left: 5px;
}

/*++++++++++++++++++=*/


.scope{
	width: 100%;
	height: 300px;
	background: #F5F5F5;
	margin-top: 40px;
	display: flex;justify-content:all;
	align-items: center;
}
.scope-left{
	width: 400px;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.scope-left p{
	font-weight: bold;
}
.scope-right{
    width: 850px;
    height: 200px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 50px;
    border: 1px solid lightgrey;
}
.scope-right .box{
    display: flex;
    justify-content:center;
    align-items: flex-start;
    flex-direction: column;
    width: 280px;
    height:150px;
    margin: 0 20px;
    border-left: 1px solid lightgrey;
    padding: 20px;
}
.scope-right .box:nth-child(1){
	border-left: none;
}
.scope-right .box span{
	width: 30px;
	height: 4px;
	background:#008329;
	margin:10px 0;
}
.scope-right .box .scope-text h4{
     font-size: 15px;
     font-weight: bold;
     line-height: 1.5;
}
.scope-right .box .scope-text p{
	font-size: 13px;
	margin-top: 4px;
	line-height: 1.4;
	transition: .3s;

}
.scope-right .box .scope-text p:hover{
	font-weight: bolder;
	transform: scale(1.1);
}

/*========================*/



.how{
	width: 100%;
	height: 500px;
	padding: 50px;
}
.section-title{
	width: 50%;
	margin:10px auto;
	height: 80px;
	text-align: center;
	font-size: 25px;
	font-weight: bold;
}
.how-content{
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	flex-wrap: wrap;
}
.how-card{
         width: 300px;
         height:100%;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         text-align: center;
         margin: 0 10px;
         padding: 20px;
}
.how-card .how-icon{
	width: 100px ;
	height: 100px;
	border-radius: 50%;
	background:  #184153;
	margin-bottom: 20px;
}
.how-card .card-content h4{
    font-weight: bolder;
    line-height: 1.5;
    font-size: 16px;
    margin-bottom: 5px; 
}
.how-card .card-content p{
	  width: 230px;
      font-size: 12px;
      line-height: 1.7;
      word-break: normal; 
      letter-spacing: .4px;
      color: #333;

}



/*========================*/
.pricing{
	width: 100%;
	height: 100vh;
	background: #F5F5F5;
	padding: 50px;
}
.pricing-heading{
	text-align: center;
}
.pricing-heading h1{
	line-height: 2;
	font-size: 37px;
	font-weight: 700;
	font-family:sans-serif;
}
.pricing-heading p{
	font-size: 15px;
	height: 2px;
}
.picing-content{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	width: 100%;
	height: 100%;
}
.plan-box{
	width: 260px;
	height: 500px;
	text-align: center;
	background: #fff;
	margin:0 20px;
	box-shadow:1px 1px 10px grey;
}
.plan-box .cost{
	width: 100%;
	height: 200px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	border-bottom: 1px solid #ccc;
}
.plan-box .cost h4{
	font-weight: bolder;
}
.plan-box .cost p{
	font-weight: bold;
}
.plan-box .cost p span{
	font-size: 10px;
	font-weight: 300;
}
.plan-box .cost button{
	background:#008329 ;
	padding: 13px 30px;
	border: none;
	outline: none;
	color: #fff;
	margin:18px 0;
	text-transform: capitalize;
	opacity: 3;
	cursor: pointer;
}
.plan-box .details ul{
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 100%;
	height: 300px;
}
.details li{
	list-style:asterisks;
	line-height: 2;
	font-size: 13px;
	margin: 5px;
	font-weight: 500;
}

/*==========================*/


.insta-page{
	width: 100%;
	height: 500px;
	background: #333;
	margin-top:50px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.insta-content{
	width: auto;
	height: 400px;
	display: flex;
	justify-content:center;
	align-items: center;
	flex-wrap: wrap;
}
.insta-left{
	width: 500px;
	height: 400px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	margin: 20px;
}
.insta-left h1{
	color: #fff;
	font-size: 40px;
    margin-bottom:10px;
    font-family: sans-serif; 

}
.insta-left q{
	color: #ccc;
	margin: 0;
}
.insta-right{
	width: 600px;
	height: 400px;
	display: flex;
	justify-content: center;
	align-items: center;
	margin: 20px;
}
.insta-right iframe{
     width: 500px;
     height: 350px;
}

.user-detail{
	width: 500px;
	height: 100px;
	display: flex;
	align-items: center;
	color: #ffff;
}
.image{
	font-size: 20px;
	display: flex;justify-content: center;
	align-items: center;
	width: 60px;
	height: 60px;
	background: green;
	border-radius: 50%;
	margin-right: 20px;
}


/*==========================*/



.top-skills{
	width:100%;
	height: 100%;
}
.skills{
	width: auto;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
}
.top-skills-head{
	margin-left: 120px;
	margin-top: 40px;
	text-transform: capitalize;
}
.skills ul{
	margin: 20px;
}
.skills ul a{
	text-decoration:none;
	color: #111;
	font-size: 15px;
	font-weight: 400;
}
.skills ul li{
	list-style: none;
	color: #111;
	margin-top: 10px;
}


/*=========*/

.trend{
	width: 100%;
	height:100%;
	margin-top: 50px;
}
.trend-head{
	width: auto;
	margin: 0 120px;
}
.trend-skills{
	width: auto;
	margin: 10px auto;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
}
.trend-skills ul {
	margin: 20px;
}
.trend-skills ul li{
	list-style: none;
	color: #111;text-decoration: none;
	margin-top: 10px;
}
.trend-skills ul a{
	text-decoration: none;
	font-size: 15px;
	color: #111;
	font-weight: 400;
}


/*=================*/

footer{
	width: 100%;
	height: 500px;
	background: #184153;
	margin-top: 50px;
}
.footer-top{
	width: 80%;
	height: 60px;
	margin: 0 auto;
	display: flex;
	justify-content: space-around;
	align-items: center;
	flex-direction: column;
	border-bottom: 1px solid #2B5468;
}
.footer-top p{
	color: #fff;
	font-size: 12px;
	height: 2px;
	line-height: 1.5;
}

.footer-content{
	display: flex;
	justify-content: center;
	align-items: center;
	margin: 30px;

}
.footer-content .links{
	margin-left: 140px;
	margin-right: 140px;
	color: #fff;
}
.footer-content .links h4{
	margin-bottom: 30px ;
	text-transform: uppercase;
	font-size: 14px;
	height: 2px;
	font-weight: 600;
	letter-spacing: .3px;
}
.footer-content .links ul{
	margin-top: 25px;
}
.footer-content .links li{
	margin-top: 15px;
	font-size: 13px;
	list-style: none;
	cursor:pointer;
	text-transform: capitalize;
	font-weight: 500;
}
.footer-content .links li:hover{
	text-decoration: underline;
}


.for-public{
	width: 80%;
	height: 60px;
	border-top: 1px solid #2B5468;
	border-bottom:  1px solid #2B5468;
	margin: 40px auto;
	display: flex;
	justify-content: space-between;
	align-items: center;
	color: #fff;

}
.copyright{
    font-size: 12px;
    color: #fff;
    width: 100%;
    height:auto;
    display: flex;justify-content: center;
    align-items: center;

}


/*============
  media  query fo mobbile devices
==============*/

@media (max-width: 600px){
	header{
		height: 100%;
	}
	.logo{
		width: 100%;
		height: 60px;
		flex-wrap: wrap;
	}
	.logo h3{
		font-size: 30px;
		width:30%;
		}
	.logo input{
		display: none;
	}
	.h-links{
		display: none;
	}
	.menu{
		display: none;
	}
	.account-btns{
		width: 35%;
		margin: 0 10px;
		display: block;
	}
	.account-btns a{
		font-size: 12px;
		padding: 10px 14px;
		border-radius: 3px;
		color: #fff;
		text-transform: capitalize;
		text-decoration: none;background:#008329;

	}
	.toggle-icon {
 	    visibility:visible;
 	    width: 18%;
     }
    /* .close-icon{
     	width: 18%;
     	display: none;
     }*/
	.mobile-menu{
		display: block;
		position: fixed;
		top: 60px;
		left: -100%;
		width: 100%;
		height: 100%;
		background: #fff;
		transition: .4s;

}
	.mobile-menu ul input{
		width:90%;
		height: 40px;
		padding: 10px;
		align-self: center;
		margin: 10px;
		border: 1px solid green;
	}
    .mobile-menu ul li{
    	width: auto;
    	margin: 10px;
    	margin-top: 20px;
    	font-size: 14px;
    	list-style: none;
    	border-bottom:1px solid #F5F5F5;
    }
    .mobile-menu ul li a{
    	text-decoration: none;
    	color: #111;
    	letter-spacing: 1px;
    	height: 2px;
    	text-transform:capitalize;

    }
    .active{
    	left: 0;
    }

    .transfom span{
         position: absolute;
         transition: 0;
  }
.transfom span:nth-child(1){
	transform: rotate(45deg);
	transition: .4s;
}
.transfom span:nth-child(3){
	transform: rotate(135deg);
	transition-delay: .3s;
	transition: .4s;
}
.transfom span:nth-child(2){
	visibility: hidden;
}

   /*================*/
   .banner{
   	width: 100%;
   	height:300px;
   }
   .right{
   	display: none;
   }
   .left{
   	width: 100%;
   	margin:0 20px;
   }
   .left h2{
      font-size: 25px;
      line-height: 30px;
   }
   .left p{
   	font-size: 14px;
   	font-weight: 500;
   }
   .banner-btns{
   	display: flex;
   	align-items:flex-start;
   	flex-wrap: wrap;
   	width: 100%;
   	height: 100%;
   }
   .banner-btns a{
   	padding: 8px 18px;
   }
 /*==============*/
     .services{
     	width: 100%;
     	height: 100%;
     	padding: 10px;
     }
  .heading{

  	margin: 10px;
  	font-size: 14px;
  }
   .card {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    width: 100%;
    height: 60px;
    margin: 5px 10px;
    cursor: pointer;
    background:#fff;
    box-shadow:1px 1px 5px grey;

}
 .icon {
    width: 80px;
    height:100%;
    background: #184153;
}
.title{
	display: flex;
	width:all;
	height:100%;
    align-items: center;
    justify-content: space-between;
}
.title h2{
	font-size: 13px;
	margin-left: 20px;
	text-transform: capitalize;
}

/*==================*/
  .brands{
  	width: 100%;
  	height: 100%;padding: 0;

  }
 .brands p{
 	font-size: 14px;
 	margin-bottom: 10px;
 }
  .brands-logos{
     width:auto;
     height: 100%;
     padding:10px;
     display: flex;
     justify-content:space-between;
     align-items: center;
     flex-wrap: wrap;

  }
  .brands-logos img{
  	width: 70px!important;
  	height: 30px!important;
  }
  /*==============*/

   .scope{
	width: 100%;
	height:100%;
	background: #F5F5F5;
	margin-top: 40px;
	display: flex;
	justify-content:all;
	align-items: center;
	flex-direction: column;
}
.scope-left{
	margin-top: 50px;
	margin-bottom: 30px;
}
  .scope-right{
    width:90%;
    margin: 20px;
    padding:0;
    height:100%;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items:flex-start;
    flex-direction: column;
    border: 1px solid lightgrey;
    
}
    .scope-right .box{
    	width:auto;
    	height: 100%;
    	border-left: none;
    	border-bottom: 1px solid lightgrey;
    }
    .scope-right .box:nth-child(3){
	border-bottom: none;
}
.scope-right .box span{
	height: 5px;
}
   .scope-text{
   	margin: 0;
   }
   .scope-text br{

   }

   /*=========================*/


.how{
	height: 100%;
	padding: 0;
}
   .section-title h2{
   	font-size: 20px;
   	text-transform: uppercase;
   	font-weight: bolder;
   	margin-top: 30;
   }
/*===============*/
 .pricing{
 	height: 100%;
 }
.pricing-heading{
    margin-bottom: 50px;
}
 .pricing-heading h1{
 	font-size: 20px;
 }
 .pricing-heading p{
 	font-size: 12px;
 }
 .picing-content{
 	margin-top: 50px;
 }
 .picing-content .plan-box{
    width:100%;
    margin: 20px;
 }
 /*=====================*/

.insta-page{
display: none;}

/*========================*/
.top-skills{
	width: 100%;
	height: 100%;
	padding: 10px;
}
.top-skills-head{
	margin: 10px;
	font-size: 20px;
}
.skills{
	padding: 0;
	display:block;
}
.skills ul{
	margin-bottom: 20px;
}
.skills ul a{
	font-size: 13px;
}

.trend{
	width: 100%;
	height: 100%;
	padding: 10px;
}
.trend-head{
	margin: 10px;
	font-size: 20px;
}
.trend-skills{
	padding: 0;
	display:block;
}
.trend-skills ul{
	margin-bottom: 20px;
}
.trend-skills ul a{
	font-size: 13px;
} 

footer{
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
}
.footer-top{
	display: none;
}
.footer-content{
	display:none;
}
.for-public{
	display: none;
}
.copyright{
	padding: 30px;
}
}
</style>
</head>
<body onload="hideload()">  
  <div class="preloader" id="hideloader">
      <div class="dots"></div>
      <div class="dots"></div>
      <div class="dots"></div>
      <div class="dots"></div>
    </div>
                
           
              <div class="banner">
              	       
              	       <div class="left">

                       <h2>In-demand talent<br>on demand<sup style="font-size:15px;">TM</sup>.<br>
                       	<span>Upwork is how.</span></h2>

                       	<p>Hire proven pros with confidence using the world’s largest,<br>
                         remote talent platform.</p>

                       <div class="banner-btns">	<a href="#" class="hire">hire talent</a>
                       	      <a href="#" class="find">find jobs</a></div>

                       </div>

                       <div class="right">
   <img src="<?php echo e(asset('https://abamela.fgsystem.net/image/banner.png')); ?>">
</div>

              </div>


         <section class="services">
         	 <div class="heading">
         	 	<h3>Find quality talent or agencies</h3>
         	 </div>

         	 <div class="content">
         	 	     <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>web,mobile & softwar dev</h2>
         	 	     	</div>
         	 	     </div>

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	    </div>
         	 	     	<div class="title">
         	 	     		<h2>Design and creative</h2>
         	 	     	</div>
         	 	     </div>

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>writing</h2>
         	 	     	</div>
         	 	     </div>

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>Sales & marketing</h2>
         	 	     	</div>
         	 	     </div>

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>Admin support</h2>
         	 	     	</div>
         	 	     </div>

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>Customer service</h2>
         	 	     	</div>
         	 	     </div>

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>Data science </h2>
         	 	     	</div>
         	 	     </div> 

         	 	      <div class="card">
         	 	     	<div class="icon">
         	 	     		
         	 	     	</div>
         	 	     	<div class="title">
         	 	     		<h2>Architecture</h2>
         	 	     	</div>
         	 	     </div>
         	 </div>


         </section>



            <!-- =========================== -->


            <section class="brands">

            	<p>Trusted by 5M+ businesses</p>

              <div class="brands-logos">
                <img src="https://abamela.fgsystem.net/image/mslogo.png">
                <img src="https://abamela.fgsystem.net/image/arblogo.png">
                <img src="https://abamela.fgsystem.net/image/atmtlogo.png">
                <img src="https://abamela.fgsystem.net/image/cotylogo.png">
              </div>
            	
            </section>




        <section class="scope">
               <div class="scope-left">
                 <p>hire for any scope</p>
               </div>
               <div class="scope-right">
                     <div class="box">
                       <span></span>
                       <div class="scope-text">
                         <h4>Complex project</h4>
                         <p>Find specialized experts and agencies for large projects.</p>
                       </div>
                     </div>
                     <div class="box">
                       <span></span>
                       <div class="scope-text">
                         <h4>Longer-term contract</h4>
                         <p>Expand your team with a skilled resource.</p>
                       </div>
                     </div>
                     <div class="box">
                       <span></span>
                       <div class="scope-text">
                         <h4>Short term</h4>
                         <p>Build a pool of diverse experts for one-off tasks.</p>
                       </div>
                     </div>
               </div>
        </section>


        <section class="how">
             <div class="section-title">
               <h2>how it works</h2>
             </div>
             <div class="how-content">
                     <div class="how-card">
                       <div class="how-icon"></div>
                       <div class="card-content">
                         <h4>Post a job (it’s free)</h4>
                          <p>Tell us about your project. Upwork connects you with top talent and agencies around the world, or near you.</p>
                       </div>
                     </div>
                     <div class="how-card">
                       <div class="how-icon"></div>
                       <div class="card-content">
                         <h4>Bids come to you</h4>
                          <p>Get qualified proposals within 24 hours. Compare bids, reviews, and prior work. Interview favorites and hire the best fit</p>
                       </div>
                     </div>
                     <div class="how-card">
                       <div class="how-icon"></div>
                       <div class="card-content">
                         <h4>Collaborate easily</h4>
                          <p>Use Upwork to chat or video call, share files, and track project milestones from your desktop or mobile.</p>
                       </div>
                     </div>
                     <div class="how-card">
                       <div class="how-icon"></div>
                       <div class="card-content">
                         <h4>Payment simplified</h4>
                          <p>Pay hourly or fixed-price and receive invoices through Upwork. Pay for work you authorize.</p>
                       </div>
                     </div>
             </div>
        </section>
<br>
<br>
<br>
<br>
        <section class="pricing">
              <div class="pricing-heading">
                <h1>Choose the offering that works best for you</h1>
                <P>All options include access to Upwork’s talent pool of quality talent and agencies.</P>
              </div>
              <div class="picing-content">
                    <div class="plan-box">
                      <div class="cost">
                         <h4>Basic</h4>
                         <button>select basic</button>
                         <p>Free*</p>
                      </div>
                      <div class="details">
                         <ul>
                           <li>Verified work history and<br> reviews</li>
                           <li>Unlimited proposals</li>
                           <li>Built-in collaboration tools<br> and easy payments</li>
                          
                         </ul>
                      </div>
                    </div>
                     <div class="plan-box">
                      <div class="cost">
                         <h4>Plus</h4>
                         <button>select plus</button>
                         <p>$4.99/<span>month</span></p>
                      </div>
                      <div class="details">
                         <ul>
                           <li>Verified work history and<br> reviews</li>
                           <li>Unlimited proposals</li>
                           <li>Built-in collaboration tools<br> and easy payments</li>
                          
                         </ul>
                      </div>
                    </div>
                     <div class="plan-box">
                      <div class="cost">
                         <h4>Enterprice</h4>
                         <button>Contact us</button>
                         <p><span>Price varies - contact us for a demo</span></p>
                      </div>
                      <div class="details">
                         <ul>
                           <li>Verified work history and<br> reviews</li>
                           <li>Unlimited proposals</li>
                           <li>Built-in collaboration tools<br> and easy payments</li>
                          
                         </ul>
                      </div>
                    </div>
              </div>
        </section>

        <section class="insta-page">
          <div class="insta-content">
            <div class="insta-left">
                 <h1>Instapage saved $2.3M with Upwork</h1>
                 <q>Upwork took a lot of stress off of growing with minimal resources</q>
                 <div class="user-detail">
                        <div class="image">S</div>
                        <div class="details">
                          <h2>shoaib khan</h2>
                          <p> Web developer</p>
                        </div>
                 </div>
            </div>
            <div class="insta-right">
               <iframe  src="https://www.facebook.com/profile.php?id=100013602459277">MyProfile</iframe>
            </div>
          </div>
        </section>


        <section class="top-skills">
              <div class="top-skills-head">
                <h4>top skills</h4>
              </div>
           <div class="skills">
             <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative/li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul> 

              <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative</li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul>

              <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative/li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul>

             <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative/li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul>

           </div>
        </section>

        <section class="trend">
            <div class="trend-head">
              <h4>trending skills</h4>
            </div>
               <div class="trend-skills">
                     <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative</li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul> 

              <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative</li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul>

              <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative</li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul>

             <ul>
               <a href="#"><li>Android Developer</li></a>
               <a href="#"><li>Customer Service Representative</li></a>
               <a href="#"><li>Front-End Developer</li></a>
               <a href="#"><li>Ios Developer</li></a>
               <a href="#"><li>Mobile app Developer</li></a>
               <a href="#"><li>Sale consultants</li></a>
             </ul>
               </div>
        </section>




        <footer>
          <div class="footer-top">
            <div><p>Looking to hire for long-term or full-time assignments? See how Upwork Payroll simplifies admin.</p></div>
            </div>
             

             <div class="footer-content">
                  <div class="links">
                    <h4>company</h4>
                    <ul>
                      <li>about us</li>
                      <li>Investor Relations</li>
                      <li>aCareers</li>
                      <li>Upwork Foundations</li>
                      <li>Press</li>
                      <li>Trust, Safety & Security</li>
                    </ul>
                  </div>
                    <div class="links">
                    <h4>RESOURCES</h4>
                    <ul>
                      <li>Resources</li>
                      <li>Customer Support</li>
                      <li>Customer Stories</li>
                      <li>Business Resources</li>
                      <li>Payroll Services</li>
                      <li>Upwork Reviews</li>
                    </ul>
                  </div>
                    <div class="links">
                    <h4>BROWSE</h4>
                    <ul>
                      <li>Freelancers by Skill</li>
                      <li>Freelancers in USA</li>
                      <li>Freelancers in UK</li>
                      <li>Freelancers in Canada</li>
                      <li>Jobs in USA</li>
                      <li>Find Jobs</li>
                    </ul>
                  </div>
              </div>
              <div  class="for-public">
                <div class="follow-us">
                   <h5>follow us</h5>
                    
                </div>
                <div class="mobile-app">
                  <h5>mobile apps</h5>

                </div>
              </div>

             <div class="copyright">
               copyights&copy all rights reserved Upwork.com and developer Shoaib khan 
             </div> 
        </footer>


        <script type="text/javascript">
          function sidemenu(){
             document.getElementById('mobile-menu').classList.toggle('active');
             document.getElementById('toggle-icon').classList.toggle('transfom');
             
          
          };
          function hideload(){
           document.getElementById('hideloader').style.display ="none";
          };

          
        </script>
</body>
</html>
<?php echo $__env->make($activeTemplate.'partials.end_ad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        'use strict';
        $('#defaultSearch').on('change', function(){
            this.form.submit();
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/up/core/resources/views/templates/basic/home.blade.php ENDPATH**/ ?>