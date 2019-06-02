<?php require __DIR__. '/__connect_db.php';
$page_name = 'index';




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TreeVaGO</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<link rel="stylesheet" href="css/treevago_timelify.css">
	<link rel="stylesheet" href="css/hover2.css">
	<link rel="stylesheet" href="css/hover3.css">
	<link rel="stylesheet" href="css/fristpic.css">
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
	<style>
<?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
	
		*{
			padding: 0;
			margin:0;
			box-sizing: border-box; 
		}
		body{
			font-family:'微軟正黑體',calibri;
			background:url(images/bg_main.jpg) repeat 0 0; 
		}
		a{
			text-decoration: none;
		}
		ul>li{
			list-style-type: none;
			text-decoration: none;
		}
		.clearfix:after {
    		clear: both;
    		content: ".";
    		display: block;
    		height: 0;
    		visibility: hidden;
		}
		.container{
			
			background:url(images/bg_main.jpg) repeat 0 0; 
		}
        /********************nav_bar*********************/
		.nav{
			max-width: 100%;
			height: 120px;
			background:#ff931e;
		}
		.main_menu{
			max-width: 1180px;
			height: 120px;
			margin: 0 auto;
		}
		.logo{
			width: 180px;
			height: 100px;
			background:url(images/TREEVAGO_logo.png) no-repeat 0 0 ;
			background-size: contain;
			float: left;
			margin-top:20px;
		}
		.menu_01>ul>li{
            width: 120px;
            text-align: center;
            float: left;
		}
        .menu_01>ul>li>a{
        	color: white;
        	text-decoration: none;
        	font-family: '微軟正黑體';
        	/*margin-left: 20px;*/
        	font-size: 15px;
        	padding: 20px;  	
        } 
        .menu_01{
        	position: relative;
        	float: right;
        	margin-top: 79px;
        }
        .booking{
        	margin-left:80px;
        }
        .bar_box{
        	display: none;
        }
        /******************nav_bar***********************/
        .footer_icon_last{
            margin-left:0;
            margin-top:0;
        }
        .show{
            display: block;
        }
        .hidden{
            display: none;
        }
        #gotop {
            position: fixed;
            right: 40px;
            bottom: 40px;
            z-index: 999;
        }

        #gotop img {
            width: 40px;
            height: 40px;
            overflow: hidden;
            object-fit: cover;
            cursor: pointer;
        }
        input:focus{
            outline:none
        }
.cont_btn_enter_box {
    margin: 0 auto;
    width: 200px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.cont_btn_enter{
    background: #ffffff;
    width: 120px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 20px;
    transition: all 0.5s;
}
.cont_btn_enter a{
    color:#ff931e;
    padding: 4px 10px;
}
.cont_btn_enter:hover{
    background-color: #ff931e;
    transition: all .5s;
}
.cont_btn_enter:hover a{
    color:#fff;
    transition: all .5s;
}
.btn_h2{
    text-align: center;
    width: 100%;
    height: 100px;
    line-height:100px;
}




.bg{
    display:none;
    position:fixed;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,.8);
    z-index:9999;
    top:0;
    left:0;
}
.content{
    display:none;
    width:450px;
    height:350px;
    position:fixed;
    border:2px solid #ff931e;
    top:50%;
    margin-top:-150px;
    background:#fff;
    z-index:99999;
    left:50%;
    margin-left:-250px;
}
        @media only screen and (max-width:545px){
            #gotop {
                position: fixed;
                right: 10px;
                bottom: 50px;
            }
        }
        /*********************nav_rwd************************/
			@media only screen and (max-width:1250px){
			/*		.menu_page{
						padding: 0;
						margin:0; 
						background:rgba(0,0,0,.3);
						z-index: 103;
						width: 100%;
						height: 500px;
						text-align:center; 
					}
					.menu_page_li>a{
						line-height: 80px;
						font-size: 36px;
						color: #fff;
						float: none;
						display: block;
					}*/
					.menu_01{
						display: none;
					}
					.header{
						width: 100%;
					/*	height: 180px;*/
						height: 80px;
						background: rgba(0,0,0,.5);
					}
					.logo{
						width: 200px;
						height: 80px; 
						position: absolute;
						top:1%;
						left: 50%;
						margin:10px 0 0 -80px; 
					}
					.menu_page{
						position: absolute;
						right:0;
						top:120px;
						width: 100%;
						text-align: center;
						z-index: 999;
						display: block;
						opacity: 0;
						max-height: 0px;
						overflow: hidden;
					}
					.menu_page_li>a{
						background: #ff931e;
						line-height: 100px;
						font-size: 18px;
						color: #fff;
						float: none;
						display: block;
						text-decoration: none;
					}
					.menu_page_li>a:hover{
						background: #ffaa1e;
					}
					.bar_box{
						float:right;
						/*position: absolute;
						top:10%;*/
						margin-top: 70px;
						cursor: pointer;
						display: block;
					}
					.nav_active .bar1{
						transform:rotate(-45deg) translate(-9px, 7px); 
					}
					.nav_active .bar2{
						opacity: 0;
					}
					.nav_active .bar3{
						transform:rotate(45deg) translate(-9px, -8px); 
					}
					.bar{
						width: 36px;
						height: 6px;
						background:#ccc;
						margin:6px 10px;
						border-radius: 3px;  
					}
					.bar_box .nav_active{
						opacity: 1;
						max-height: 500px;
					}
					.transition{
						transition:all .5s; 
					}
			}


/****************main-nav************************/

        /*******************sub_nav*************************/
		.menu_01>ul>li:hover .sub_nav{

  			max-height:1000px;
		}

		.sub_nav{
				
 				position: absolute;
  				background: #ff931e;
  				top:41px;
  				width:120px;
  				overflow: hidden;
  				max-height: 0px;
  				z-index: 99;
		}
		.sub_nav a{
				color: white;
				text-decoration: none;
				padding: 15px 10px;
				display: block;
		}
		.sub_nav a:hover{
			background: #ffaa1e;
		}
		.sub_transition{
			transition: .5s;
		}


        /********************sub_nav***********************/
        	@media only screen and (max-width:1250px){
				
				.main_area01{
				padding:10px;
			    max-width:100%;
			    max-height:100%;
				background:url(images/mainPage/mainpage_bg1.png) no-repeat -2px 0 ;
				background-size: contain; 
				text-align: center;
				/*filter: brightness(40%);*/
			}
				



        	}

        	/****************************first_pic*******************************/
				.frist_mask{
				      	position: absolute;
				      	z-index: 33;
						background:rgba(0,0,0,.4);
						width: 100%;
						height: 100%;
				      }
				      .first_picCover{
				      	position: absolute;
				      	max-width: 100%;
				      	z-index: 77;
				      	left: 0;
				      	bottom: -4px;
                        overflow: hidden;
				      }
                        .first_picCover>img{
                            width: 1920px;
                        }
				      .first_picCover>img{
				      	object-fit:cover;
				      	max-width:100%;
				      }
						.area01_title{
						display: block;
						max-width: 803px;
						height: 210px;
						background:url(images/mainPage/area01_title.png) no-repeat 0 0;
						background-size: contain;
						margin: 200px auto 0px;
						text-align: center;
					}
						.area01_title>p{
						line-height: 100px;
						color: white;
						font-size: 26px;
						font-weight: bold;
					}
					.main_area01_button{
					    text-align: center;
						margin: 38px auto 0;
						width: 200px;
						height: 50px;
						border: 2px solid white;
						border-radius:25px; 
					}
					.main_area01_button:hover{
						background: #ff931e;
						border: none;
						cursor: pointer;
						border: 2px solid transparent;
						transition: .1s;
					}
					.main_area01_button>a{
						color: white;
						text-decoration: none;
						line-height: 50px;
						font-size: 15px;
						font-weight: bold;
					}
        	/****************************first_pic*******************************/
        /*********************main_area01*****************************/
			/*.main_area01{
				padding:10px;
			    max-width:100%;
			    height: 160vh;
				background:url(images/mainPage/mainpage_bg1.png) no-repeat -2px 0 ;
				background-size: cover; 
				text-align: center;
				
			}
			
			.area01_title{
				display: block;
				max-width: 803px;
				height: 210px;
				background:url(images/mainPage/area01_title.png) no-repeat 0 0;
				background-size: cover;
				margin: 200px auto 0px;
			}
			.main_area01>p{
				line-height: 50px;
				color: white;
				font-size: 26px;
				font-weight: bold;
			}
			.main_area01_button{
			    text-align: center;
				margin: 38px auto 0;
				width: 200px;
				height: 50px;
				border: 2px solid white;
				border-radius:25px; 
			}
			.main_area01_button:hover{
				background: #ff931e;
				border: none;
				cursor: pointer;
				border: 2px solid transparent;
				transition: .1s;
			}
			.main_area01_button>a{
				color: white;
				text-decoration: none;
				line-height: 50px;
				font-size: 15px;
				font-weight: bold;
			}*/





        /*********************main_area01*****************************/

        /*********************main_area01-rwd*****************************/

        




        /*********************main_area01-rwd*****************************/
		@media only screen and (max-width:525px){		
					.csslider1 > ul > li.img img {
						width: 220%;
					}
					.csslider1 > ul {
						height: 400px;
					}

					.frist_mask{
				      	position: absolute;
				      	z-index: 33;
						background:rgba(0,0,0,.4);
						width: 100%;
						height: 100%;
				      }
                    /***********手機問題***********/
                    .first_picCover{
                        bottom: -7px;
                    }
					.first_picCover>img{
				      	max-width:400%;
				      }
            /***********手機問題***********/
			.area01_title{
					display: block;
					max-width: 200px;
					height: 60px;
					background:url(images/mainPage/area01_title.png) no-repeat 0 0;
					background-size: contain;
					margin: 140px auto 0px;
				}
			.area01_title>p{
					display: none;
				}
				.main_area01_button{
				    display: none;
				}
				.main_area01_button>a{
					display: none;
				}

		}

        /*********************main_area02*****************************/
			.main_area02{
				padding: 10px;
				width: 100%;
				height: 300px;
				margin-top: 0px;
				/*border: 2px solid black;*/
			}
            .area02_welcome{
            	margin: 0 auto;
            	width: 400px;
            	height: 42px;
            	text-align: center;
            	
            }
            .area02_welcome>p{
				color: #333333;
				font-weight: bold;
				font-size: 26px;
            }
            .area02_article{
            	margin: 20px auto 0;
            	width: 680px;
            	height: 300px;
            	text-align: center;
            }
			.area02_article>p{
				color: #666666;
				line-height: 42px;
				font-size: 24px;
			}
		







        /*********************main_area02*****************************/
        /*********************main_area02-rwd*****************************/
			@media only screen and (max-width:800px){
				.main_area02{
				padding: 10px;
				max-width: 100%;
				height: 300px;
			    overflow: hidden;
			    margin-top: 0px;
				/*border: 2px solid black;*/
			}
			.area02_welcome{
            	margin: 0 auto;
            	width: 150px;
            	height: 42px;
            	text-align: center;
            	
            }
            .area02_article{
            	margin: 20px auto 0;
            	width: 350px;
            	height: 200px;
            	text-align: center;
            }
            .area02_article>p{
				color: #666666;
				line-height: 32px;
				font-size: 12px;
			}



			}


        /*********************main_area02-rwd*****************************/

      
         /*********************main_area03*****************************/
		.main_area03{
			transition: all .5s;
			opacity: 0;
			margin-top: 600px;
			max-width: 100%;
		/*	border: 1px solid black;*/
	/*		height: 50%;*/
			display: flex;
			flex-wrap:nowrap;
			overflow: visible;
		/*	margin-top: -180px;*/
		}
		
		/*.area03_pic{
			float: left;
			margin-right: 20px;
			max-width: 100%;
			
		}*/
		.main_area03.show{
			margin-top: 300px;
    		opacity: .5;
    		
		}
		.main_area03.active{
			margin-top: 0px;
			opacity: 1;
   		}
		.area03_pic01, .area03_pic02, .area03_pic03, .area03_pic04{ 
			float: left;
			margin-right: 20px;
			max-width: 379px;
			max-height: 845px;
		}
        .area03_pic01{
        	margin-top:270px;
        }
        .area03_pic02{
        	margin-top:180px;
			margin-bottom: 100px;
		}	
        .area03_pic03{      	
        	margin-top:90px;
			margin-bottom: 200px;
		}	
		.area03_pic04{
			margin-bottom: 300px;
			margin-right: 0;
		}

		.area03_pic01 img{
			height: 100%;
			width: 100%;
			object-fit: cover;
		}
		.area03_pic02 img{
			height: 100%;
			width: 100%;
			object-fit: cover;
		}
		.area03_pic03 img{
			height: 100%;
			width: 100%;
			object-fit: cover;
		}
		.area03_pic04 img{
			height: 100%;
			width: 100%;
			object-fit: cover;
		}



        /*********************main_area03*****************************/
        /*********************main_area03_hover*****************************/
		  .area03-relative{
		         position: relative;
				}
			.conthover{
		      opacity: 0;
			}
			.figure2-1:hover img.apear{
				opacity: 1;
				transition: .5s;
			}
				.figure2-2:hover img.apear{
				opacity: 1;
				transition: .5s;
			}
				.figure2-3:hover img.apear{
				opacity: 1;
				transition: .5s;
			}
				.figure2-4:hover img.apear{
				opacity: 1;
				transition: .5s;
			}
		.figure2-1{
			position: absolute;
			left: 0;
			top: 299px;
			max-width: 379px;
		    max-height: 845px;
		}

		.figure2-2{
			position: absolute;
			left: 399px;
			top: 200px;
			max-width: 379px;
		    max-height: 845px;
		}
		.figure2-3{
			position: absolute;
			left: 798px;
			top: 100px;
			max-width: 379px;
		    max-height: 845px;

		}
		.figure2-4{
			position: absolute;
			left: 1196px;
			top: -2px;
			max-width: 378px;
		    max-height: 845px;
		}
		.figure2-1>img, .figure2-2>img , .figure2-3>img ,.figure2-4>img{
			object-fit: cover;
		}


        /*********************main_area03_hover*****************************/
		      
		/*********************main_area03-rwd*****************************/      
	@media screen and (max-width:525px){
				.main_area03{
					max-width: 100%;
					max-height: 800px;
					display: flex;
					flex-wrap:wrap;
					opacity: 1;
					margin-top: 0;
				}
				.main_area03.show{
					margin-top:0; 
    				opacity: 1;
    		
				}

					.area03_pic01{
						width: 180px;
						margin:30px 15px 430px 0 ;
					}
					.area03_pic02{
						width: 180px;
						margin:-20px 0 480px 0 ;
					}
					.area03_pic03{
						width: 180px;
						margin:-450px 15px 800px 0 ;
					}
					.area03_pic04{
						width: 180px;
						margin:-500px 0 850px 0 ;
					}
			.figure2-1, .figure2-2, .figure2-3, .figure2-4,{
				display: none;
			}
			.conthover{
				display: none;
			}
        .area04_article .show{
            display: none;
        }
        .area04_article .hidden{
            display: block;
            padding: 0 7px;
            text-align: justify;
        }

	}


		/*********************main_area03-rwd*****************************/


         /*********************main_area04*****************************/
         
          .main_area04{
          	text-align: center;
          	max-width: 100%;
          	height: 800px;
         /* 	border: 1px solid black;*/
      
          /*	background:white; */
          }
          .area04_title{
          	margin: 0 auto;
          	text-align: center;
          	width: 200px;
          	height: 150px;
          }
          .area04_title>p{
          	line-height: 150px;
          	font-size: 26px;
          	font-weight: bold;
          	color: #333333;
          }
          .main_area04>ul{
          	display: flex;
          	width: 100%;
          	height: 550px;
          }
          .main_area04>ul>li{
          	flex-grow: 1;	
			float: left; 
			/*background:#ccc; */
          }
          .main_area04_line{
          	border-right: 1px solid #c1c1c1;
          }
		  .area04_content{
		  	margin:0 auto; 
		  	width: 300px;
		  	height: 200px;
		  	background: #666666;
		  	margin-top: 50px;
			object-position: center;

		  }
		  .area04_content>img{
			height: 200px;
			width: 300px;

		  }
		  .area04_article{
		  	margin: 0 auto;
		  	max-width: 300px;
		  	height: 170px;
		 /* 	background: white;*/
		  	text-align: center;
		  	margin-top: 45px; 
		  }
		  .area04_article>h5{
		  	color: #333333;
		  	font-size: 16px;
		  	margin-bottom:50px;

		  }
			.area04_article>p{
				font-size:14px;
				color: #666666;
				line-height: 24px; 
			}
			.area04_con01{
				/*background: url(images/mainPage/area04_con01r.png) 0 0 no-repeat;*/
				/*background-size:cover; */
			}
			/*.area04_con01:hover{
				transform: rotate(-15deg);
				transition: .5s;
			}*/
			.area04_con02{
				/*background: url(images/mainPage/area04_con02r.png) 0 0 no-repeat;
				background-size:cover; */
			}
			/*.area04_con02:hover{
				transform: rotate(-15deg);
				transition: .5s;
			}*/
			.area04_con03{
				/*background: url(images/mainPage/area04_con03r.png) 0 0 no-repeat;
				background-size:cover; */
			}
			/*.area04_con03:hover{
				transform: rotate(-15deg);
				transition: .5s;
			}*/
			.area04_btn{
				padding:10px 50px;
				border:1px solid #ff931e;
				border-radius: 25px; 
				color: #ff931e;
				text-decoration: none; 
			}
			.area04_btn:hover{
				background: #ffaa1e;
				color: white;
				border: 1px solid #ff931e;
				transition: .5s;
			}



         /*********************main_area04*****************************/

		/*********************main_area04-rwd*****************************/
			@media screen and (max-width:525px){
				.main_area04{
				overflow: hidden;	
          		text-align: center;
          		max-width: 100%;
          		height: 800px;
         /* 	border: 1px solid black;*/
      
          /*	background:white; */
          }
           .main_area04>ul{
          	display: flex;
          	max-width: 300px;
          	flex-wrap:wrap;
          	overflow: hidden;
          	margin:0 auto;
          }
          .area04_title{
          	margin-top: 20px;
          	height: 60px
          }
          
          .main_area04>ul>li{
          	flex-grow: 1;
          	width: 100px;	
			height: 300px;
			/*background:#ccc; */
          }
          .area04_con01, .area04_con02, .area04_con03{
          	width: 100%;
          }
          .main_area04_line{
          	border-right: 1px solid transparent;
          }
          .area04_btn{
              display: none;
          }
          .main_area05{
              margin-top: -150px;
          }
          .area04_article>p{
				color: #666666;
				line-height: 20px;
				font-size: 8px;
			}
			.snip1206:hover{
				
			}
			}
		/*********************main_area04-rwd*****************************/

          /*********************main_area05*****************************/
			.main_area05{
				text-align: center;
				max-width:100%;
				height: 1400px;
				background: url(images/mainPage/area05_bg.png) no-repeat 0 0;
				background-size: cover;
                overflow: hidden;
			}
			.main_area05>ul{
				display: flex;
			}
			.main_area05>ul>li{
				flex-grow: 1;	
				float: left;

			}
			.main_area05_circle{
				margin: 0 auto;
				width: 280px;
				height: 280px;
				border:16px solid white;
				border-radius: 50%;
				margin-top: 550px;
			}
			/*.main_area05_circle:hover{
				background: #ff931e;
				transition: .5s;
			}
			.main_area05_circle:hover img{
				display: none;
			}*/
			.main_area05_circle>img{
				margin-top: 80px;
			}
			.main_area05>a{
				line-height: 300px;
				padding:10px 50px;
				border:4px solid white;
				border-radius: 25px; 
				color: white;
				text-decoration: none;
				font-weight: bold; 
			}
			.main_area05>a:hover{
				background: #ffaa1e;
				color: white;
				border: 4px solid #ffaa1e;
				transition: .5s;
			}
			.area05_rwd_show{
				opacity: 0;
			}
			.area05_title{
				position: relative;
				text-align: center;
			}
			.area05_title>p{
				position: absolute;
				top: 450px;
				left: 50%;
				margin-left: -108px;
		/*		font-family: '微軟正黑體';*/
				font-size: 26px;
          		font-weight: bold;
          		color: #333333;
			}

           /*********************main_area05*****************************/

           /****************************area05翻牌******************************/

.box img{
  width:300px;
}
.card{
	cursor: pointer;
  position: relative;
  transform-style:preserve-3d;
  float:left;
  margin: 0 50px 20px;
  width:220px;
  height:280px; 
  margin-top: -250px;
  /*height:400px;*/
}
/*.card:active{
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
}*/
.active.card{
			transform: rotateY(180deg);
			-webkit-transform: rotateY(180deg);
		}
.card img{
  width:100%;
  position: absolute;
  left:0;
  top:0;
  display: block;
  -webkit-backface-visibility: hidden;  
  backface-visibility: hidden;
  border-radius: 10px;
  overflow: hidden;
}
.front{
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
}
.back{
  
}
.transition{
  transition: all .5s;
  -webkit-transition: all .5s;
}


            /******************************area05翻牌********************************/

		/*********************main_area05-rwd*****************************/
			@media screen and (max-width:525px){
				.main_area05{
				text-align: center;
				max-width:100%;
				height: 480px;
				background: url(images/mainPage/area05_bg.png) no-repeat 0 60px;
				background-size: contain;
				overflow: hidden;
				/*margin-top:30px;*/ 

			}
				.main_area05>ul{
				display: flex;
				flex-wrap:wrap;
			}
			.main_area05>ul>li{
				flex-grow: 10;

			}
			.main_area05_circle{
				margin: 0 auto;
				width: 150px;
				height: 150px;
				border:4px solid white;
				border-radius: 50%;
				margin-top: 10px;
				background: #ff931e;
				
			}
			.main_area05_circle>img{
				margin-top: 40px;
			}
			.main_area05>a{
				
				padding:10px 50px;
				border:2px solid #ff931e;
				border-radius: 25px; 
				color: #ff931e;
				text-decoration: none;
				font-weight: bold; 
				line-height: 100px;
			}
			.area05_rwd_show{
				opacity: 1;
			}
			.card{
				display: none;
			}
			.area05_title{
				height: 60px;
				position: relative;
				text-align: center;
				margin-top:0; 
			}
			.area05_title>p{
				position: absolute;
				top: 0px;
				left: 50%;
				margin-left: -108px;
		/*		font-family: '微軟正黑體';*/
				font-size: 26px;
          		font-weight: bold;
          		color: #333333;
			}
			}
		/*********************main_area05-rwd*****************************/

           /*********************main_area06*****************************/
			.main_area06{
				position: relative;
				max-width: 100%;
				height: 800px;
			/*	border: 1px solid black;*/
			}
			.mian_area06_titlie{
				width: 130px;
				height: 30px;
				text-align: center;
				margin: 0 auto;
			}
			.mian_area06_titlie>p{
				font-size: 26px;
				font-weight: bold;
				color: #333333;
			}
			.main_area06_time{
				margin: 0 auto;
				max-width:400px;
				height: 620px; 
				background: url(images/mainPage/area06_time.png) 135px 60px no-repeat;
				position: relative;
			}
			.main_area06_article{
				width: 130px;
				height: 60px;
				text-align: center;
			/*	background: black;*/
			}
			.main_area06_article>h5{
				font-size:16px;
				color: #333333; 
			}
			.main_area06_article>p{
				font-size:14px;
				color: #666666; 
			}
			.area06_artcle01{
				position: absolute;
				left: 15px;
				top: 125px;
			}
            .area06_artcle02{
				position: absolute;
				left: 15px;
				top: 250px;	
			}
			.area06_artcle03{
				position: absolute;
				left: 15px;
				top: 375px;
			}
			.area06_artcle04{
				position: absolute;
				left: 15px;
				top: 500px;
			}
			.area06_artcle05{
				position: absolute;
				left: 260px;
				top: 200px;
			}

			.area06_artcle06{
				position: absolute;
				left: 260px;
				top: 325px;
			}
			.area06_artcle07{
				position: absolute;
				left: 260px;
				top: 450px;
			}
			.area06_pic01{
				position: absolute;
				width: 355px;
				height: 236px;
				background: url(images/mainPage/area06_pic01.png) 0 0 no-repeat;
				top:100px;
				left: 165px;
			}
			.area06_pic02{
				position: absolute;
				width: 287px;
				height: 220px;
				background: url(images/mainPage/area06_pic02.png) 0 0 no-repeat;
				top: 400px;
				left: 200px;
			}
			.area06_pic03{
				position: absolute;
				width: 233px;
				height: 310px;
				top: 80px;
				right: 208px;
				background: url(images/mainPage/area06_pic03.png) 0 0 no-repeat;
			}
			.area06_pic04{
				position: absolute;
				width: 338px;
				height: 253px;
				top: 440px;
				right: 150px;
				background: url(images/mainPage/area06_pic04.png) 0 0 no-repeat;
			}

           /*********************main_area06*****************************/
	/*********************main_area06-rwd*****************************/
		@media screen and (min-width:525px){
			.main_area06{
				display: none;
			}
		}
			@media screen and (max-width:525px){
				.area06_classtime{
					display: none;
				}
			.main_area06{

					max-width: 100%;
					height: 500px;
					overflow: hidden;
					margin-top:30px; 
				}
			.main_area06_time{
				margin: 0 auto;
				max-width:300px;
				height: 400px; 
				background: url(images/mainPage/area06_time.png) 110px 50px no-repeat;
				background-size: contain;
				position: relative;
			}
			.area06_pic01{
				display: none;
			}
			.area06_pic02{
				display: none;
			}
			.area06_pic03{
				display: none;
			}
			.area06_pic04{
				display: none;
			}
			.area06_artcle01{
				position: absolute;
				left: 0;
				top: 100px;
			}
            .area06_artcle02{
				position: absolute;
				left: 0;
				top: 180px;	
			}
			.area06_artcle03{
				position: absolute;
				left: 0;
				top: 280px;
			}
			.area06_artcle04{
				position: absolute;
				left: 0;
				top: 350px;
			}
			.area06_artcle05{
				position: absolute;
				left: 60%;
				top: 140px;
			}
			.area06_artcle06{
				position: absolute;
				left: 60%;
				top: 220px;
			}
			.area06_artcle07{
				position: absolute;
				left: 60%;
				top: 305px;
			}

			}
		/*********************main_area06-rwd*****************************/
/*************************************main_area06_timeline_css*********************************************/
			.area06_classtime{
				max-width:100%;
				height: 20px;
				text-align: center;
			}
			.area06_classtime>h2{
				line-height: 40px;
				color: #666666;
			}
				.pic01, .pic02, .pic03, .pic04{
						margin:10px auto; 
						max-width: 370px;
						height: 300px;
						overflow: hidden;
						/*background-size: cover;*/
					}
					.pic01 img, .pic02 img, .pic03 img, .pic04 img{
						object-fit: cover;
					}
					.pic01{
						/*background: url(img/2.png) 0 0 no-repeat;*/
					}
					.pic02{
						/*background: url(img/3.png) 0 0 no-repeat;*/
					}
					.pic03{
						/*background: url(img/4.png) 0 0 no-repeat;*/
					}
					.pic04{
						/*background: url(img/5.png) 0 0 no-repeat;*/
					}

					.class_title>h2{
						padding: 3px;
						font-size: 18px;
						font-weight: normal;
						font-family: '微軟正黑體';
						line-height: 45px;	
					}
					.timeline-item>p{
						font-family: '微軟正黑體';
					}
					.container{
						background: url(img/bg_main.jpg) 0 0 ;
					}
					.timeline-item>a{
						color: lightblue;
					}
					.area06_timeline{
						max-width: 1000px;
						margin:0 auto; 
					}
									
					@media screen and (max-width:700px){
						.area06_timeline{
							display: none;
						}
					}
/*************************************main_area06_timeline_css*********************************************/

		/*******************main_footer*********************/
		  .main_footer{
		  	overflow: hidden;
		  	position: relative;
           	max-width: 100%;
           	height: 900px;
           	background: #ff931e;   	
           }
           .main_footer_bg{
			position: absolute;
			z-index:33;          	
   			width: 100%;
			height: 390px;
			background: url(images/mainPage/main_footer_bg.png) 0 0 no-repeat;           }
           .main_footer>ul{
           	display: flex;
           	max-width:100%;
           	height: 800px; 
           }
           .main_footer>ul>li{
           	flex-grow: 1;	
			float: left; 
           }
           .main_footer_map{
           margin-top:120px;
           }
           .main_contact{
           	position: relative;
           	width: 520px;
           	height: 375px;
      /*     	background: #ccc;*/
           	margin: 0 auto;
           	margin-top: 160px;
           	margin-right:10px;
           }
           .main_footer_content{
           	width: 520px;
           	height: 340px;
           /*	background: black;*/
           	margin: 0 auto;
           	margin-left: 115px;
           	margin-top: 25px;
           }
           .main_footer_logo{
           	width: 200px;
			height: 100px;
			background: url(images/TREEVAGO_logo.png) no-repeat 0 0;
			background-size: contain;
           }
           .main_footer_menu>ul>li{
           	float: left;
           	padding: 5px;
           	margin-top: -20px;
           }
           .main_footer_menu>ul>li>a{
           	color: white;
           	text-decoration: none;
           	font-size:10px; 
           }
           .main_footer_address>p{
           	color: white;
           	margin-top: 40px;
           }
           .main_footer_icon>ul>li{
			float: left;
			padding: 5px;
			margin-top: 30px;
           }
           .main_footer_right{
           	width: 300px;       
           	height: 50px;
           	margin-top: 110px;  	
           }
           .cantact_submit{
           	color: white;
           	padding: 10px 50px;
           	border: 1px solid white;
			background: transparent;
			border-radius:25px;
			font-weight: bold;
			margin-top: 15px;
			margin-left: 180px;
            cursor: pointer;
           }
           .cantact_submit:hover{
           	background: white;
           	border: 1px solid white;
			color: #ff931e;
			transition: .5s;
           }
           .cantact_submit>p{
           	color: white;
           }
           .footer_contact_title{
           	width: 350px;
           	height: 67px;
           }
           .footer_contact_title>h6{
           	font-size:60px;
           	color: white; 
           }
           .main_contact>form{
           	position: absolute;
           	z-index: 99;
           	margin-top: 20px;
           }
           .main_contact_form>h4{
			color: white;
			font-size:18px; 
			font-weight: normal;
			line-height: 40px;
           }
           .main_contact_textline{
           	width: 300px;
           	height: 30px;
           	background: transparent;
           	border: 0px;
           	border-bottom: 1px solid white;
           	
         }
		/********************************main_footer************************************/
	/***************************main_footer_rwd*************************************/
        @media only screen and (max-width:1250px){
        	.main_footer_bg{
        		display: none;
        	}
        	.main_footer{
        		    max-width: 100%;
					height: 250px;
					background: #ff931e;
        	}
        	.main_footer_map{
        		width: 0;
        		display: none;
        	}
        	.main_contact{
        		display: none;
        	}
        	.main_footer_menu{
        		display: none;
        	}
        	.main_footer_content{
        		max-width:300px;
        		margin: 0 auto;
        	}
        	.main_footer_logo{
        		width: 150px;
				height: 75px;
        		margin: 0 auto;
        		margin-top:20px; 
        	}
        	.main_footer_address>p{
        		font-size:14px; 
        	}
        	.main_footer_address{
        		text-align: center;
        		margin-top:-40px; 
        	}
        	.main_footer_icon>ul>li{
				float: left;
           }
           .main_footer_icon>ul{
           		padding: 10px;
           }
           .main_footer_icon{
           		width: 270px;
           		margin: 0 auto;
           		margin-top: -30px;
           }
           .main_footer_right{
        /*   	background: black;*/
           	width: 300px;       
           	height: 30px;
           	margin-top: 60px;
           	text-align: center;  	
           }
           .main_footer_right>p{
           	font-size:10px; 
           }
        }
	/***************************mainfooter_rwd*************************************/
	

	</style>
<?php include __DIR__. '/_navbarWithMember.php'; ?>
</head>
<body>



    <div class="container">
    	<div class='csslider1 autoplay '>
		<div class="frist_mask">
				<div class="area01_title">
				 	<br><br><br><br><br><br><br><br><br><br>
			    		<p>找到您心目中理想的樹屋</p>
			    </div>	
		</div>	    	
	<div class="first_picCover"><img src="img/mainpage_bg1_2.png" alt=""></div>
		<input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
		<input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor' >
		<ul>
			<div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
				<img src="http://cssslider.com/sliders/pen/images/buns.jpg" style="width: 100%;">
			</div>
			<li class='num0 img'>
				 <a href="http://cssslider.com" target=""><img src='img/bonbibi-1.png' alt='Buns' title='Buns' /> </a> 
			</li>
			<li class='num1 img'>
				 <a href="http://cssslider.com" target=""><img src='img/burl-banner.png' alt='Croissant' title='Croissant'/> </a> 
			</li>
			<li class='num2 img'>
				 <a href="http://cssslider.com" target=""><img src='img/lodge-1.jpg' alt='Lemon pie' title='Lemon pie' /> </a> 
			</li>
		
		</ul>
		<div class='cs_description'>
			<label class='num0'>
				<span class="cs_title"><span class="cs_wrapper">Bonbibi</span></span>
			</label>
			<label class='num1'>
				<span class="cs_title"><span class="cs_wrapper">Burl</span></span>
			</label>
			<label class='num2'>
				<span class="cs_title"><span class="cs_wrapper">Cader</span></span>
			</label>
		</div>
	

		</div>
    	<!-- <div class="main_area01 ">
    		<div class="area01_title"></div>
    		<p>找到您心目中理想的樹屋</p>
    		<div class="main_area01_button" href="">
    			<a href="">馬上預定</a>
    		</div>
    	</div> --><!--area01-->
    	<div class="main_area02">
    		<div class="area02_welcome">
    			<p>歡迎光臨</p>
    		</div>
    		<div class="area02_article">
    			<p>充滿芬多精的林間小路，腳踏舊木，到達屬於自己的樹屋。<br>綠意盎然的環境，孩童的嘻笑聲不絕於耳。<br>逃離都市叢林緊迫的生活節奏，肩上的壓力也一掃而空，<br>季節雖會遞嬗，<br>但牽著孩子的手的那一刻，卻恆久如新。</p>
    		</div>
    	</div><!--area02-->
    	 <!-- <div class="main_area03">
    		<ul>
    			<li  class="area03_01"></li>
    			<li  class="area03_02"></li>
    			<li  class="area03_03"></li>
    			<li  class="area03_04"></li>
    		</ul>
    	</div> --> <!--area03--> 
    	<div class="main_area03 area03-relative">
    		<div class="area03_pic area03_pic01"><img src="images/mainPage/area03_01.png" alt=""></div>
			<figure class="figure2-1 display-b">
			<a href="/treevago/treevago_roomdetail.php?sid=2">
<!--            <img class="conthover apear transition" src="images/mainPage/area03_hover/myR1hover1.png" alt="">-->
			</a>
            <!-- hover1-->
             </figure>

    		<div class="area03_pic area03_pic02"><img src="images/mainPage/area03_02.png" alt=""></div>
			 <figure class="figure2-2 display-b">
			 <a href="/treevago/treevago_roomdetail.php?sid=4">
<!--            <img class="conthover apear transition" src="images/mainPage/area03_hover/myR1hover2.png" alt="">-->
            </a>
            <!-- hover2-->
             </figure>

    		<div class="area03_pic area03_pic03"><img src="images/mainPage/area03_03.png" alt=""></div>
			 <figure class="figure2-3 display-b">
			 <a href="/treevago/treevago_roomdetail.php?sid=1">
<!--            <img class="conthover apear transition" src="images/mainPage/area03_hover/myR1hover3.png" alt="">-->
			</a>
            <!-- hover2-->
             </figure>

    		<div class="area03_pic area03_pic04"><img src="images/mainPage/area03_04.png" alt=""></div>
			 <figure class="figure2-4 display-b">
			 <a href="/treevago/treevago_roomdetail.php?sid=3">
<!--            <img class="conthover apear transition" src="images/mainPage/area03_hover/myR1hover4.png" alt="">-->
			</a>
            <!-- hover2-->
             </figure>

    	</div><!-- cont2 -->
		<div class="main_area04">
			<div class="area04_title"><p>園內簡介</p></div>
			<ul>
				<li class="main_area04_line">
					 	<a >
							<div class="area04_content area04_con01 snip1206">
							
								<img src="images/mainPage/area04_con01r.png" alt="">
								<figcaption>
		                            <h2>精緻會館</h2>
		                            <br>
		                            <br>
		                      
		                        </figcaption>
							</div>
						</a>
					<div class="area04_article">
						<h5>精緻會館</h5>
						<p class="show">太平山區的主要餐飲住宿區，住宿房型依紅檜、香杉、台灣杉建造，太平山以南湖大山為最高峰3,740公尺。地勢西南高而東北，地形多變，兼具高山與河谷之美。</p>
                        <p class="hidden">太平山區的主要餐飲住宿區，住宿房型依紅檜、香杉、台灣杉建造</p>
                    </div>
				</li>
				<li class="main_area04_line">
						<a >
							<div class="area04_content area04_con02 snip1206">
								<img src="images/mainPage/area04_con02r.png" alt="">
								<figcaption>
		                            <h2>親友同樂</h2>
		                            <br>
		                            <br>
		                      
		                        </figcaption>
							</div>
						</a>	
					<div class="area04_article">
						<h5>森林餐廳</h5>
						<p class="show">提供午、晚餐套餐式異國美食饗宴，早餐為中式自助式，提供精緻排餐、甜點、飲品、下午茶、咖啡等餐飲服務。(供餐時間：早餐 6:30-8:30、午餐 11:30-13:30、晚餐 17:30-19:30)</p>
                        <p class="hidden">提供午、晚餐套餐式異國美食饗宴，早餐為中式自助式</p>
					</div>
				</li>
				<li>
					<a >
						<div class="area04_content area04_con03 snip1206">
							<img src="images/mainPage/area04_con03r.png" alt="">
							<figcaption>
	                            <h2>親近自然</h2>
	                            <br>
	                            <br>
	                      
	                        </figcaption>	
						</div>
					</a>
					<div class="area04_article">
						<h5>自然生態</h5>
						<p class="show">本區海拔高差甚大，因此可見亞熱帶至冷熱帶氣候之林相。從土場開始的亞熱帶雨林、白嶺附近針闊葉混合林、到太平山與翠峰湖一帶的溫帶針葉林，可以見到十分完整林相。</p>
                        <p class="hidden">本區海拔高差甚大，因此可見亞熱帶至冷熱帶氣候之林相</p>

					</div>
				</li>
			</ul>
			<a href="" class="area04_btn">
			查看更多
			</a>
			
		</div><!--area04-->
		<div class="main_area05">
		 	<div class="area05_title"><p>豐富的親子藝術課程</p></div>
			<ul >
				<li><div class="main_area05_circle area05_rwd_show">
						<img src="images/mainPage/area05_icon01.png" alt="">
					</div>
					<div class="card transition">
				      <div class="card_wrap">
				        <img class="back" src="images/mainPage/area05_circle01.png">
				        <img class="front" src="images/mainPage/area05_circle01_back.png" alt="">
				      </div>
				</li>
				<li>
					<div class="main_area05_circle area05_rwd_show">
						<img src="images/mainPage/area05_icon02.png" alt="">
					</div>
					<div class="card transition">
				      <div class="card_wrap">
				        <img class="back" src="images/mainPage/area05_circle02.png">
				        <img class="front" src="images/mainPage/area05_circle02_back.png" alt="">
				      </div>
				</li>
				
				<li>
					<div class="main_area05_circle area05_rwd_show">
						<img src="images/mainPage/area05_icon03.png" alt="">
					</div>
					<div class="card transition">
				      <div class="card_wrap">
				        <img class="back" src="images/mainPage/area05_circle03.png" >
				        <img class="front" src="images/mainPage/area05_circle03_back.png" alt="">
				      </div>
				</li>
				
				<li>
					<div class="main_area05_circle area05_rwd_show">
						<img src="images/mainPage/area05_icon04.png" alt="">
					</div>
					<div class="card transition">
				      <div class="card_wrap">
				        <img class="back" src="images/mainPage/area05_circle04.png">
				        <img class="front" src="images/mainPage/area05_circle04_back.png" alt="">
				      </div>
				</li>
			</ul>
			<a href="treevago_class_info.php">查看更多</a>
		</div><!--area05-->
		<div class="main_area06">
			<div class="mian_area06_titlie">
				<p>課程時間表</p>
			</div>
			<div class="main_area06_time">
				<div class="main_area06_article area06_artcle01">
					<h5>小小捏捏塗鴉課</h5>
					<p>上午10:00-1200<br>	
					   下午14:00-16:00
					</p>
				</div>
				<div class="main_area06_article area06_artcle02">
					<h5>小孩陶土課</h5>
					<p>上午10:00-1200<br>	
					   下午14:00-16:00
					</p>
				</div>
				<div class="main_area06_article area06_artcle03">
					<h5>兒童藝術美感課</h5>
					<p>上午10:00-1200<br>	
					   下午14:00-16:00
					</p>
				</div>
				<div class="main_area06_article area06_artcle04">
					<h5>多元藝術課</h5>
					<p>上午10:00-1200<br>	
					   下午14:00-16:00
					</p>
				</div>
				<div class="main_area06_article area06_artcle05">
					<h5>寒暑假藝術營</h5>
				</div>
				<div class="main_area06_article area06_artcle06">
					<h5>預約包班</h5>
				</div>
				<div class="main_area06_article area06_artcle07">
					<h5>媽媽寶寶藝術遊戲</h5>
				</div>
			</div>
			<div class="area06_pic01"></div>
			<div class="area06_pic02"></div>
			<div class="area06_pic03"></div>
			<div class="area06_pic04"></div>
		</div><!--area06-->
    <!--area06timeLine-->
    <div class="area06_classtime"><h2>課程時間表</h2></div>
	<div class="area06_timeline">
		<div class="timeline class_title">
		<ul class="timeline-items ">
			<li class="is-hidden timeline-item "> <!-- Normal block, positionned to the left -->
				<h3>小小塗鴉課</h3>
				<hr>
				<p>上午10:00-12:00<br>
				   下午14:00-16:00
				</p>
				<hr>
				
			</li>
		</ul>
		
		<ul class="timeline-items">
			<li class="is-hidden timeline-item inverted timeline_title01"> <!-- Normal block, positionned to the right  -->
			
				
				<div class="pic01">
					<a href="treevago_class_info.php">
                    <div class="snip1206"><img src="img/2.png" alt="">
                        <figcaption>
                             <h2>小小塗鴉課</h2>
		                            <br>
		                            <br>
                        </figcaption>
                    </div>
                    </a>
				</div>
			
				
				
			</li>
			<li class="is-hidden timeline-item centered"> <!-- Centered block, positionned in the middle -->
				<h3>課程內容</h3>
				<hr>
				<p>我們的小小捏捏塗鴉課是設計給3-4歲孩子的課程，在五感啟發中進行藝術體驗與創作。
				此課程以提供孩子感官探索與素材運用為主要訴求。
				</p>
				<p>讓孩子能夠藉由體驗、故事或遊戲來熟悉藝術材料，並提升感官與小肌肉發展。媒材會穿插藝術材料、陶土⋯等基本素材，結合不同主題創作喔！除了熟悉各種藝術材料外，最重要的是希望孩子們能夠喜歡上藝術課，透過藝術形式來自由地表現自己。</p>
				
				<p><a
						href="treevago_class_info.php#sec1">查看更多...</a>
				</p>
				<hr>
				
			</li>

		</ul>
		
		<ul class="timeline-items">
			<li class="is-hidden timeline-item">
				
				
				<div class="pic02">
					<a href="treevago_class_info.php">
					<div class="snip1206"><img src="img/3.png" alt="">
					
                        <figcaption>
                            <h2>小孩陶土課</h2>
		                            <br>
		                            <br>
                        </figcaption>
                    </div>
                    </a>
				</div>
			
				
				
			</li>
			<li class="is-hidden timeline-item inverted">
				<h3>小孩陶土課</h3>
				<hr>
				<p>上午10:00-12:00<br>
				   下午14:00-16:00
				</p>
				<hr>
				
			</li>
			<li class="is-hidden timeline-item centered"> <!-- Centered block, positionned in the middle -->
				<h3>課程內容</h3>
				<hr>
				<p>媒材以陶土為主要課程，其中穿插各類不同觸感的土類（樹脂土、油土⋯等）讓孩子有機會發現不同土質捏塑的感覺。配合不同主題進行土的遊戲和創作。
				</p>
				<p>能讓孩子們發展出自己的藝術符號，透過「想法」來嘗試各種解決問題的「方法」‧進而完成屬於自己的藝術創作</p>
				
				<p><a href="treevago_class_info.php#sec2">查看更多...</a>
				</p>
				<hr>
				
			</li>
		</ul>


	
		<ul class="timeline-items">
			<li class="is-hidden timeline-item">
				<h3>小小藝術家</h3>
				<hr>
				<p>上午10:00-12:00<br>
				   下午14:00-16:00
				</p>
				<hr>
			
			</li>
			<li class="is-hidden timeline-item">
				
				
				<div class="pic03">
					<div class="snip1206"><img src="img/4.png" alt="">
                        <figcaption>
                            <h2>小小藝術家</h2>
		                            <br>
		                            <br>
                        </figcaption>
                    </div>
				</div>
			
			
				
			
			</li>
			<li class="is-hidden timeline-item centered">
				<h3>小小藝術家</h3>
				<hr>
				<p>4-6歲孩子為主。以不同引導方式進行藝術課程，讓孩子能夠藉由各類引導自主地進入每一堂課程，創作方式會依照不同單元使用不同的藝術材料進行創作。
				</p>
				<p>讓孩子們能夠在多元媒材之間發展出自己的藝術性。最重要的是，孩子除了學習不同的藝術表現方法，也能夠藉由藝術課表達自我，而我們相信，每一種表達方式都是珍貴而重要的。</p>
				<p><a href="treevago_class_info.php#sec3">查看更多...</a></p>
				<hr>
			
			</li>


		</ul>

		
		<ul class="timeline-items ">
			<li class="is-hidden timeline-item"> <!-- Normal block, positionned to the left -->
				<h3>媽&寶藝術遊戲</h3>
				<hr>
				<p>上午10:00-12:00<br>
				   下午14:00-16:00
				</p>
				<hr>
				<time>January 2013</time>
			</li>
		</ul>
		
		<ul class="timeline-items">
			<li class="is-hidden timeline-item inverted"> <!-- Normal block, positionned to the right  -->
				
				<div class="pic04">
				<a href="treevago_class_info.php">
					<div class="snip1206"><img src="img/5.png" alt="">
                        <figcaption>
                            <h2>媽&寶藝術遊戲</h2>
		                            <br>
		                            <br>
                        </figcaption>
                    </div>
                </a>    
				</div>
			
			
				
			</li>
			<li class="is-hidden timeline-item centered"> <!-- Centered block, positionned in the middle -->
				<h3>課程內容</h3>
				<hr>
				<p>是針對1.8-3歲的孩子進行不同藝術材料配合主題進行體驗遊戲！會是以比較簡單有趣的玩法來讓孩子有更多藝術性刺激。
				</p>
				<p>從認識不同素材的特性和玩法，來進行藝術性的體驗和遊戲。是親子一起玩的體驗課程，所以不一定每次課程都會有具體作品，希望每個孩子都可以玩一些和家裡不一樣的，體驗不同的藝術材料遊戲。</p>
				
				<p><a
						href="treevago_class_info.php#sec4">查看更多...</a>
				</p>
				<hr>
				
			</li>

	</div>
  </div>
 	<!--area06timeLine-->
        <div class="bg"></div>
        <div class="content">
            <h2 class="btn_h2">會員中心</h2>
            <div class="cont_btn_enter_box">
                <div class="cont_btn_enter"><a href="order-member.php">尚未結帳訂單</a></div>
                <div class="cont_btn_enter"><a href="edit_user.php">編輯會員資料</a></div>
                <div class="cont_btn_enter"><a href="history.php">歷史訂單查詢</div></a>
            </div>
        </div>
	



<!--****************************************************main_footer*******************************************-->

	<div class="main_footer footer">
		<div class="main_footer_bg"></div>
		<ul>
			<li class="main_footer_map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.900160576886!2d121.51450861484558!3d24.523536864718178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346870de7779b2bd%3A0x48586a843785487d!2zMjY35a6c6Jit57ij5aSn5ZCM6YSJ5aSq5bmz5p6X6YGTNTjomZ8!5e0!3m2!1szh-TW!2stw!4v1507799012126" width="800" height="980" frameborder="0" style="border:0" allowfullscreen></iframe></li>
			<li class="main_footer_form">
				<div class="main_contact">
					 <div class="footer_contact_title">
					 	<h6>Contact us</h6>
					 </div>
					<form action="get.php" method="get" class="main_contact_form">
						<h4>姓名：</h4><br><input type='text' class="main_contact_textline"><br>
						<h4>電話：</h4><br><input type='text' class="main_contact_textline"><br>
						<h4>請輸入您想說的話：</h4><br><input type='text' class="main_contact_textline"><br>
						<p><input type='button' value='送出' class="cantact_submit"  onclick="location.href='treevago_index.php'"></p>
					</form>
				</div>
				<div class="main_footer_content">
						<div class="main_footer_logo"></div>
							<div class="main_footer_menu">
								<ul>
                                    <li><a href="treevago_room.php">房型介紹</a></li>
                                    <li><a href="treevago_class_info.php">親子課程</a></li>
                                    <li><a href="treevago_parkGuide.php">園區總覽</a></li>
                                    <li><a href="treevago_activity.php">限時活動</a></li>
								</ul>
							</div>
						<div class="main_footer_address">
							<p>
								T : 08-886-2345 F : 08-886-222 <br>
								ADD : 宜蘭縣大同鄉太平村太平巷58號 <br>
								E-mail : Treevago@treevago.com.tw <br>
							</p>
						</div>
						<div class="main_footer_icon">
							<ul>
								<li><a href=""><img src="images/line-01.png" alt="" width="25px"></a></li>
								<li><a href=""><img src="images/line-02.png" alt="" width="25px"></a></li>
								<li><a href=""><img src="images/note.png" alt="" width="80px" class="cooking_logo"></a></li>
								<li><a href=""><img src="images/inneed_logo.svg" alt="" width="80px" class="cooking_logo footer_icon_last"></a></li>
								
							</ul>
					</div>
					<div class="main_footer_right">
						<p>© 2017 Treevago.,Ltd All right reserved.</p>
					</div>	
				</div>
			</li>
		</ul>
	</div><!--main_footer-->
</div><!--container-->
    <div id="gotop"><img src="images/go_top.svg" alt=""></div>
<!--************************script************************-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.timelify.js"></script>
<!--************************script************************-->
<!--****************************nav_rwd(script)*****************************-->
  <script>
    $(".bar_box").click(function(){
      $(this).toggleClass("nav_active");
    });    
  </script>
  <script>
    $(".bar_box").click(function(){
      $(".menu_page").toggleClass("nav_active");
    });    
 </script>
<!--****************************nav_rwd*****************************-->
<!--****************************area05 翻牌*****************************-->

<script>
    $(".card").click(function(){
      $(this).toggleClass("active");
  });
    </script>
    <!--****************************area05 翻牌*****************************-->

    <!--****************************area06 timelineJS*****************************-->

<script>
	$('.timeline').timelify({
			animLeft: "fadeInLeft",
		animCenter: "fadeInUp",
		animRight: "fadeInRight",
		animSpeed: 600,
		offset: 150
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <!--****************************area06 timelineJS*****************************-->

    <script>
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       if(st>500){
        $(".main_area03").addClass('show');
       }else{
        $(".main_area03").removeClass('show');
       }
       if(st>1000){
        $(".main_area03").addClass('active');
       }else{
        $(".main_area03").removeClass('active');
       }
    });
    $("#gotop").click(function(){
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });

    $('.cantact_submit').click(function(){
        alert('感謝您的意見');
    });
    
  </script>
    <script>
        $(function(){
            $('.booking_lightbox').click(function(){
                $('.bg').fadeIn(200);
                $('.content').fadeIn(600);
            });
            $('.bg').click(function(){
                $('.bg').fadeOut(800);
                $('.content').fadeOut(800);
            });
        });
    </script>
</body>
</html>