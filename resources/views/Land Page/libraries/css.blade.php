<style>
    {
	margin: 0;
	padding: 0;
}
.main{
	background-color: rgb(40 40 40);
	background-position: center;
	background-size: cover;
	height: 700vh;
	width: 98vw;
	margin: 0vh;
	margin-top: 0vh;
	margin-bottom: 0vh;
	padding-top: 0vh;
}
.container{
	background-color: rgb(21 32 43);
	height: 700vh;
	width: 98vw;
}
.navbar{
	width: 98vw;
	height: 15vh;
	margin: auto;
}
.icon{
	width: 30vw;
	float: left;
	height: 5vh;
}
.logo{
	width: 18vw;
	height: 10vh;
	color: #9AA0A6;
	font-size: 35px;
	font-family: Arial;
	padding-left: 2vw;
	float: left;
	margin-top: 4vh;
}
.menu{
	width: 35vw;
	float: left;
	height: 15vh;
	margin-top: 2vh;
	padding-left: 2vw;
}
ul{
	float: left;
	display: flex;
	justify-content: center;
	align-items: center;
}
ul li{
	list-style: none;
	margin: 2vw;
	margin-top: 5vh;
	font-size: 12px;
}
ul li a{
	text-decoration: none;
	color: #fff;
	font-family: Arial;
	transition: 0.4s ease-in-out;
}
ul li a:hover{
	color:rgb(0 175 49);
}

.button{
	width: 15vw;
	height:15vh;
	float: left;
	margin-left: 15vw;
	margin-top: 5vh;

}
.signup{
	font-family: Arial;
	font-size: 12px;
	font-weight: bold;
	background-color: rgb(0 175 49);
	width: 7vw;
	height: 5vh;
	padding: 1px;
	border-radius: 40px;
	text-align: center;
	border-width: 2px;
	margin-top: 3vh;
}
.signin{
	font-family: Arial;
	font-size: 12px;
	font-weight: bold;
	background-color: rgb(0 175 49);
	width: 7vw;
	height: 5vh;
	padding: 1px;
	border-radius: 40px;
	text-align: center;
	border-width: 2px;
	margin-top: 3vh;
}
.pic1{
	width: 98vw;
	height: 85vh;
}
.h1{
	font-size: 14px;
	font-family: system-ui;
	color: #fff;
	margin-top: 8vh;
}
.srch{
	display: flex;
	justify-content: center;
	margin-top: 8vh;
}
.srch form{
	display: flex;
}
input[type="text"]{
	padding: 20px;
	font-size: 17px;
	border :1px solid #232e38;
	background-color: #232e38;
	color: #797474;
	border-right: ridge;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	outline: none;
	width: 35vw;
}
select{
	padding: 20px;
	font-size: 17px;
	border :1px solid #232e38;
	background-color: #232e38;
	color: #797474;
	border-left: ridge;
	border-right: none;
	outline: none;
	width: 30vw;
	border-top-right-radius: 20px;
	border-bottom-right-radius: 20px;
}
button{
	width: 20vw;
	height: 10vh;
	padding-top: 1vh;
	font-size: 20px;
	font-weight: bold;
	border :1px solid #333;
	border-left: none;
	background-color: rgb(0 175 49);
	color: black;
	cursor: pointer;
	border-radius: 30px;
}
button:hover{
	background-color: rgb(0 175 49);
}
.pic{
	display: flex;
	float: center;
	justify-content: center;
	margin-top: 5vh;
}
.pic ul li p1{
	display: flex;
	justify-content: center;
	margin-top: 0px;
	color: white;
	font-size: 20px;
	font-family: Arial;
}
.pic ul li p{
	display: flex;
	justify-content: center;
	margin-top: 0px;
	color: rgb(0 175 49);
	font-size: 20px;
	font-family: Arial;
}
.bank{
	display: flex;
	float: center;
	margin-left: 3vw;
	margin-right: 3vw;
	border :1px solid #232e38;
	background-color: #232e38;
	border-radius: 40px;
	outline: none;
	width: 92vw;
}
.bank ul{
	width: 90vw;
	margin-top: 2vh;
	padding-left: 2vw;
	align-items: center;
}
.bank ul li{
	width: 10vw;
	height: 5vh;
	padding: 1vw;
	display: flex;
	align-items: left;
	justify-content: center;
}
.h2{
	display: flex;
	width: 95vw;
	justify-content: center;
	font-family: Arial;
	font-size: 50px;
	margin-top: 6vh;
	color: white;
}
.h3{
	display: flex;
	width: 95vw;
	justify-content: center;
	font-family: Arial;
	font-size: 20px;
	color:  #797474;
	margin-top: 2vh;
	font-style: italic;
}
.job1{
	display: flex;
	justify-content: center;
	margin-top: 6vh;
	padding: 5px;
	height: 25vh;
	margin-left: 18vw;
	margin-right: 18vw;
	border :1px solid #232e38;
	background-color: #232e38;
	border-radius: 30px;
	outline: none;
}
.j1{
	width: 20vw;
	height: 28vh;
	border-radius: 30px;
	margin-right: 45vw;
}
.job2{
	display: flex;
	justify-content: center;
	margin-top: 6vh;
	padding: 5px;
	height: 25vh;
	margin-left: 18vw;
	margin-right: 18vw;
	border :1px solid #232e38;
	background-color: #232e38;
	border-radius: 30px;
	outline: none;
}
.j2{
	width: 20vw;
	height: 28vh;
	border-radius: 30px;
	margin-right: 45vw;
}
.brws button{
	width: 15vw;
	height: 10vh;
	justify-content: right;
	margin-top: 6vh;
	font-size: 20px;
	font-weight: bold;
	border :1px solid #333;
	border-left: none;
	margin-left: 75vw;
	background-color: rgb(0 175 49);
	color: black;
	cursor: pointer;
	border-radius: 30px;
}
.para1{
	display: flex;
	justify-content: center;
	font-family: Arial;
	font-size: 50px;
	margin-top: 6vh;
	color: white;
}
.pic2{
	width: 40vw;
	height: 80vh;
	margin-top: 4vh;
}
.list ul li p{
	display: flex;
	font-family: Arial;
	font-size: 20px;
	margin-top: 8vh;
	margin-right: 5vw;
	color: white;
}
.expl button{
	width: 15vw;
	height: 10vh;
	justify-content: right;
	font-size: 20px;
	font-weight: bold;
	border :1px solid #333;
	border-left: none;
	margin-left: 75vw;
	background-color: rgb(0 175 49);
	color: black;
	cursor: pointer;
	border-radius: 30px;
	margin-top: 0vh;
}
.rev{
	display: flex;
	justify-content: left;
	font-family: Arial;
	font-size: 50px;
	margin-top: 10vh;
	margin-left: 2vw;
	color: white;
}
.testimonials{
	display: flex;
	margin-top: 10vh;
	margin-left: 15vw;
	margin-right: 15vw;
	color: white;
}
.w3-content w3-display-container{
	max-width: 70vw;
	margin: auto;
	padding: 0 15px;
}
.mySlides{
	width: 35vw;
	height:50vh;
	position: relative;
	margin-left: 15vw;
	margin-right: 15vw;
}
.swiper-slide testimonials-item{
	max-width: 30vw;
	margin: auto;
	padding: 0 15px;
}
.testimonials-item.info{
	display: flex;
	align-items: center;
}
.testimonials-item{
	background-color: white;
	width: 40vw;
	height: 50vh;
	padding: 2vw;
	border-radius: 30px;
}
.testimonials-item img{
	max-width: 4vw;
	border-radius: 50%;
	vertical-align: middle;
}
.testimonials-item .name{
	font-size: 24px;
	text-transform: capitalize;
	font-weight: 400;
	color: black;
	line-height: 1.2;
}
.testimonials-item .job{
	text-transform: capitalize;
	color: hsl(0,0%,40%);
}
.testimonials-item p{
	margin-top: 2vh;
	margin-bottom: 2vh;
	color: hsl(0,0%,40%);
}
.testimonials-item .rating{
	margin-top: 2vh;
	font-size: 14px;
	color: hsl(36,88%,66%);
}
.w3-black-w3-display-right{
	position: relative;
	width: 5vw;
	height: 6vh;
	left: 58vw;
	bottom: 25vh;
	background-color: transparent;
	border-color: transparent;
	color: white;
}
.w3-black-w3-display-left{
	position: relative;
	width: 5vw;
	height: 6vh;
	left: 5vw;
	bottom: 25vh;
	background-color: transparent;
	border-color: transparent;
	color: white;
}
#static_slide1{
	 display: block; /* Show the static first slide */
}
.detail{
	width: 90vw;
	height: 20vh;
	font-size: 16px;
	font-family: system-ui;
	color: #fff;
	margin-top: 15vh;
	margin-left: 3vw;
}
.detail h4{
	font-size: 18px;
	color: #00b132;
}
h6{
	font-size: 16px;
	color: #fff;
	font-style: italic;
}
.detail ul{
	width: 100%;
	justify-content: center;
	align-items: center;
}
.detail ul li{
	margin: 30px;
	margin-top: 5vh;
	font-size: 12px;
}
.adve{
	float: left;
	font-size: 14px;
	font-family: system-ui;
	color: #fff;
	margin-top: 10vh;
	margin-left: 1vw;
	width: 98%;
}
.adve h6{
	font-size: 14px;
	color: #fff;
}
.test{
	display: flex;
	margin-top: 5vh;
	margin-left: 1vw;
	color: white;
}
div.scroll-container {

  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
  overflow: hidden;

}
.slide{
	width: 280px;
	height: 200px;
}
</style>
