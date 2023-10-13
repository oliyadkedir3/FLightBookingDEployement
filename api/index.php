
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conteNT="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Hub</title>
    <!--css-->
    <link rel="stylesheet" href="stylet.css">
    <style>
        @import url(https://fonts.google.com/specimen/Architects+Daughter);

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Architects Daughter", sans-serif;
    text-decoration: none;
    list-style: none;
    scroll-behavior: smooth;
}
:root{
    --bg-color: #fff;
    --text-color: #221314;
    --second-color: #af27b9b6;
    --main-color:rgb(75,1,75);
    --big-font: 1.5rem;
    --h2-font: 2.5rem;
    --p-font: 1.1rem;
}
/*body*/
body {
    background: var(--bg-color);
    color: var(--text-color);
    }
/*header*/
header{
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1000;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 20px 18%;
    transition: background-color 0.3s ease-in-out;
}
.header.scrolled {
    background-color: white;
}
.header.scrolled a {
    color: black;
}
.header.scrolled .dropdown{
  color: black;
}
.header.scrolled a:hover {
  background: var(--bg-color);
  color: var(--text-color);
  box-shadow: 5px 10px 30px rgba(218, 138, 230, 0.708);
  border-radius: 4;
}
 
.logo{
    Font-size: 35px;
    font-weight: 600;
    background: linear-gradient(58.2deg, #6ff9e4, #fcfe6d, #c2197f ,rgb(159, 3, 167), rgb(75, 1, 75));
    background-clip: text;
    -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;
    pointer-events:none;
    border: none;
}

.navbar{
    display: flex; /*row by default*/
    }
.navbar a{
    color:  #6ff9e4;
    font-size: var(--p-font);
    font-weight: 500;
    padding: 10px 22px;
    border-radius: 4px;
    }
.navbar a:hover {
    background: var(--bg-color);
    color: var(--text-color);
    box-shadow: 5px 10px 30px rgba(218, 138, 230, 0.708);
    border-radius: 4;
    }
    .dropdown {
      position: relative;
      display: inline-block;
      color:  #6ff9e4;
      font-size: var(--p-font);
      font-weight: 500;
      padding: 10px 22px;
      border-radius: 4px;
    }
    #user {
      margin-left: 15px;
    }
    .dropdown-text {
      cursor: pointer;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background: var(--bg-color);
      color: var(--text-color);
      box-shadow: 5px 10px 30px rgba(218, 138, 230, 0.708);
      border-radius: 4;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    
section {
    padding: 80px 18%;
}
/*background img */
.home {
    position: relative;
    width: 100%;
    height: 100vh;
    background: url(u/plane6.jpg);
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: flex-start;
}
.home-text {
    align-self: center;
}
.home-text h1 {
    font-size: var(--big-font); 
    color: var(--bg-color);
}
.home-text p {
    color: var(--bg-color);
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 50px;
}
.home-btn{
    display: inline-block;
    font-size: 16px;
    padding: 15px 15px;
    background: #ffffffbf;
    color: var(--main-color);
    border-radius: 4px;
    transition: ease 0.5s;
}
.home-btn:hover{
    background: var(--bg-color);
    transform:scale(1.1);
}

/*container*/
section .slider{
    display: absolute;
    width: 100%;
    height: 600px;
}

.text h2{
    font-size: var(--h2-font);
    line-height: 1.1;
    padding-bottom:50px;
}
.container-img { 
    margin-bottom: 50px;
    padding: 15px;
    color: #fff;
    transition: transform 0.3s ease; 
}
.container-img:hover{
    transform: scale(1.4);
    color: var(--main-color);
}
.container-box h4 {
    font-weight: 500; 
    margin-bottom: 30px;
    font-size: 48px;
    color: #fff;
} 
.container-box p {
    font-size: 25px;
    color: #fff;
}

.container-box {
  position: relative;
  height: 400px;
  text-align: center;
  padding: 20px;
  background-size: cover;
  background-position: center;
  border-radius: 15px;
}
  
h4,
p {
  margin: 10px 0;
}
  
.slick-active {
  display: block;
}
.slick-dots {
  display: flex;
  justify-content: center;
  list-style: none;
  padding: 0;
  margin: 20px 0;
}

.slick-dots li {
  margin: 0 5px;
}

.slick-dots li button {
  display: block;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: none;
  background-color: #ccc;
  text-indent: -9999px;
  overflow: hidden;
  transition: background-color 0.3s ease;
  cursor: pointer;
}

/* Active dot style */
.slick-dots li.slick-active button {
  background-color: #555;
}
 
/* services */
/* #secLogo{
  font-size:80px;
  margin-top: 15%;
  margin-bottom: 15%;
  margin-right: 5%;  
} */

.rotate-animation {
  animation: rotate 3s ease-in-out;
  animation-fill-mode: forwards;
}

@keyframes rotate {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(360deg);
  }
}

#services {
    max-width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100vh;
    padding: 80px 5%;
    border-radius: 10px;
    margin-top: -200px;
    background: linear-gradient(180deg, #310538, #350628);
}

#serve{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
#serve #lgs{
  display: flex;
  align-self: left;
  max-width: 30%;
}
#serve #lgs #secLogo {
  margin-left: 100px;
  font-size: 80px;
}
#ds {
  display: block;
  padding: 10px 5%;
}
#serve #ds .first{
  display: block;
  width: 100%;
  max-width: 500px;
  margin-top: 15px;
  border-radius: 5px;
}

#tType, #dpt, #arr {
    display: block;
    margin: 1px;
    width: 100%;
    margin-bottom: 20px;
    padding: 5px; 
  }
#tType {
    height: 50px;
    border: 1px solid black;
    border-radius: 8px;
    font-size: 16px;
    overflow-x: visible;
  }
  
option {
    background-color: rgb(246, 219, 251);
    color: rgb(0, 0, 0);
  }

#dpt{
    height: 50px;
    border: 1px solid black;
    border-radius: 8px;
    font-size: 16px;
  }
#arr{
    height: 50px;
    border: 1px solid black;
    border-radius: 8px;
    font-size: 16px;
  }
  #tType:hover{
    background-color: #fbe7fa;
  }
  #dpt:hover{
    background-color: #fbe7fa;
  }
  #arr:hover{
    background-color: #fbe7fa;
  }
#serve #ds .second{
  display: block;
  width: 100%;
  max-width: 500px;
  margin-top: 15px;
  border-radius: 5px;
}
label {
  font-size: 15px;
  color: var(--bg-color);
}
#dates, #Pslct {
  display: block;
  margin-bottom: 2px;
  margin-top: 2px;
  border-radius: 5px;
  }
#dates {
    width: 100%;
    height: 50px;
    padding: 10px;
    border: 1px solid black;
    font-size: 16px;
    align-self: left;
  }
#dates:hover {
    background-color: #fbe7fa;
  }

#Pslct {
    width: 100%;
    height: 50px;
    padding: 5px;
    border: 1px solid black;
    font-size: 16px;
    background-color: #ffffff;
  }
#passangers {
    width: 80%;
    padding: 10px;
    border: 1px solid #92098e;
    background-color: #fff;
    margin:1px;
    cursor: pointer;
    border-radius: 4px;
}
#passangers:hover {
  background-color: #fbe7fa;
}
#sp {
    width: 15%;
    height: 38px;
    padding: 10px;
    border: 1px solid #92098e;
    margin:1px;
    border-radius: 4px;
}

#search-button{
    width: 50%;
    height: 50px;
    font-size: 25px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 0; 
    border: 1px solid #92098e;
    border-radius: 8px;
    margin-top: 7%;
}
#search-button:hover {
    background-color: rgb(135, 3, 161);
    color: rgb(255, 255, 255);
    cursor: pointer;
    transition: background-color 1s;
  }
  #search-button #sic{
    position: relative;
    padding-left: 0;
  }
/*testimonials*/
#reviews{
    display: flex;
    flex-wrap: nowrap;
    padding: 80px 18%;
}
.outerdiv {
    width: 100%;
    min-height: 100vh;
    background: var(--bg-color);
    display: flex;
    align-items: center;
    justify-content: center;
}
.innerdiv {
    display: grid;
    grid-gap: 2%;
    grid-template-rows: repeat(2,49%);
    grid-template-columns: repeat(4, 28%);
}
.elements {
    padding:1rem 2rem ;
    border-radius: 0.8rem;
    box-shadow:5px 5px 20px rgb(75, 1, 75);
    color: var(--bg-color);
}
.Tone {
    background: #733FC8;
    grid-column: 1/3;
    grid-row: 1/2;
}
.Ttwo {
    background: #49556B;
    grid-column: 3/4;
    grid-row: 1/2;
}
.Tthree {
    background: rgb(255, 255, 255);
    grid-column: 4/5;
    grid-row: 1/3;
    color: black;
}
.Tfour {
    background: rgb(255, 255, 255);
	grid-column: 1/2;
    grid-row: 2/3;
    color: rgb(181, 5, 5);
}
.Tfive {
    background: #18202D;
	grid-column: 2/4;
    grid-row: 2/3;
}
.Tcontent {
	display: flex;
}
.Timgbox
{
	margin-right: 20px;
}
.Timgbox img {
    border-radius: 50%;
    width: 40px;
    border: 2px solid rgb(148, 100, 148);
}
.Tdetails {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.Tdetails p {
    margin: 0;
}
.Tdetails .name {
    color:hsl(0, 100%, 89%);
    font-size: 0.9 rem;
    margin-bottom: 0.1 rem;
    font-weight: 600;
} 
.Tdetails .cred {
    color: hsl(0, 39%, 83%);
    opacity: 50%;
    font-size: 0.8 rem;
}
.review h4 {
	font-size: 1.4rem;
	color: #eaccb7;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 0.8rem;
}
.review p {
	font-size: 0.95rem;
    color: #F3DEFF;
    font-weight: 500;
    opacity: 50%;
    line-height: 1.5;
}
/*for 3 and 4 */
.Tdetail .name {
    color:hsl(0, 74%, 24%);
    font-size: 0.9 rem;
    margin-bottom: 0.1 rem;
    font-weight: 600;
} 
.Tdetail .cred {
    color: hsl(0, 38%, 29%);
    opacity: 45%;
    font-size: 0.8 rem;
}
.reviews h4 {
	font-size: 1.4rem;
	color: #9551c0;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 0.8rem;
}
.reviews p { 
    font-size: 0.95rem;
    color: #000000;
    font-weight: 500;
    opacity: 45%;
    line-height: 1.5;
}
/* Footer Styles */

footer {
    display: grid; 
    background-color: #ccc6c6;
    padding: 30px 0;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
  }
  
  .footer-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .about-section,
  .follow-section,
  .partners-section {
    flex-basis: 33.33%;
  }
  
  h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  p {
    font-size: 14px;
    line-height: 1.5;
    color: #666;
  }
  
  ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  ul li {
    margin-bottom: 10px;
  }
  
  ul li a {
    color: #000;
    text-decoration: none;
    transition: 0.2s ease-in-out;
  }
  ul li a:hover{
    font-size: 20px;
    color: var(--main-color);
  }
  .social-media{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .icon {
    position: relative;
    display: inline-block;
    cursor: pointer;
  }
 .footer-container .contacts .social-media{
    display: flex;
    justify-content: space-between;
 }
  .icon:hover .icon-text {
    display: block;
  }

  .icon-text {
    display: none;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    padding: 10px;
    background-color: #f1f1f1;
    border-radius: 4px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .partner-logos {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .footer-container .partners-section hr{
    display: flex;
    background-color: blue;
    width: 70%;
    height: 4px;
    border: none;
    margin: 30px 0;
    margin-left: 30px;
    border-radius: 3px;
  }
  .footer-container .about-section h3{
    margin-left: 40px;
  }
  .footer-container .partners-section h3{
    margin-left: 40px;
  }
  .footer-container .contacts .fh3 h3{
    margin-left: 150px;
    margin-top: 50px;
  }
  .partner-logos img {
    background: transparent;
    max-width: 100px;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 15px;
  }
  .footer-container .contacts{
    margin-left: 10px;
  }
  .footer-container .links {
    margin-top: 40px;
  }
  
  .additional-info {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    margin-left: 300px;
    font-size: 12px;
    color: #999;
  }
  
  /* Responsive Styles */
  
  @media (max-width: 768px) {
    .footer-container {
      flex-wrap: wrap;
    }
    
    .about-section,
    .follow-section,
    .partners-section {
      flex-basis: 100%;
      margin-bottom: 20px;
    }
  }
  .havail h1{
    color: white;
  }
  .availflight{
    position: relative;
    margin-top: 100px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background: hsla(10, 82%, 65%, 1);

background: linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF745C", endColorstr="#34073D", GradientType=1 );
  }
  
  .availflight .divavail {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr; /* 4 columns */
    grid-template-rows: auto auto auto; /* 3 rows */
    gap: 10px; /* Adjust the gap value as per your preference */
    border-radius: 40px;
    padding: 20px;
    background: hsla(333, 100%, 53%, 1);

background: linear-gradient(90deg, hsla(333, 100%, 53%, 1) 0%, hsla(33, 94%, 57%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(333, 100%, 53%, 1) 0%, hsla(33, 94%, 57%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(333, 100%, 53%, 1) 0%, hsla(33, 94%, 57%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#FF0F7B", endColorstr="#F89B29", GradientType=1 );
    margin-top: 50px;
  }
  
  .airline-img {
    grid-area: 1 / 1 / 2 / 2; /* top left, spanning 3 rows and 1 column */
    border-radius: 20px;
  }
  
  .price {
    grid-area: 1 / 3 / 2 / 4; /* top, starting from column 2 to column 4 */
  }
  div p{
    color: black;
    font-size: 20px;
  }
  .price p{
    color: red;
  }
  .deptdatetime {
    grid-area: 2 / 1 / 3 / 2; /* middle left, spanning 1 row and 1 column */
  }
  
  .planeicon {
    grid-area: 2 / 2 / 3 / 3; /* middle middle, spanning 1 row and 1 column */
  }
  .planeicon img {
    width: 100%;
  }
  .arrivdatetime {
    grid-area: 2 / 3 / 3 / 4; /* middle right, spanning 1 row and 1 column */
  }
  
  .deptcity {
    grid-area: 3 / 1 / 4 / 2; /* bottom left, spanning 1 row and 1 column */
  }
  
  .arrivcity {
    grid-area: 3 / 3 / 4 / 4; /* bottom right, spanning 1 row and 1 column */
  }
  
  .book {
    grid-area: 2 / 4 / 3 / 5; /* right of all elements, spanning 2 rows and 1 column */
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background-color: #000;
    width: 70%;
    height: 70%;
    border-radius: 10px;
    text-align: center;
    font-size: 25px;
    padding: 40px;
    margin-left: 30px;
  }
  .book a{
    text-decoration: none;
    color: #fff;
    align-self: center;
  }
  
aside{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding: 20px;
  color: #fff;
  margin-top: 90px;
  width: 300px;
  min-height: 100vh;
  background-color: black;
  border-top-right-radius: 40x;
  border-bottom-right-radius: 40px;
  z-index: -1000;
}
aside ul,li{
  list-style:none;
  margin: 20px 0;
  cursor: pointer;
}
aside .admindiv{
  align-self: center;
  margin-top: -100px;
  margin-left: 40px;
  margin-bottom: 80px;
}
li{
  font-size: 20px;
  font-weight: 300;
  transition: margin-left 0.3s ease;
}
li:hover{
  margin-left: 10px;
}
.ficon{
  margin-right: 10px;
}
.nested-dropdown {
  display: none;
}
.nested-dropdown li{
  list-style: none;
  font-size: 15px;
  text-align: left;
}
.nested-dropdown li:hover{
  font-size: 20px;
  color: purple;
}

.open .nested-dropdown {
  display: block;
}
.body-content {
  display: none;
}

.body-content.active {
  display: flex;
}
#statistics{
  position: absolute;
  top:110px;
  left: 400px;
}
#notifications{
  position: absolute;
  top:110px;
  left: 400px;
}
#add-flight{
  position: absolute;
  top:100px;
  left: 350px;
  background-color: black;
  width: 70%;
  height: 100%;
  border-radius: 20px;
  background: hsla(10, 82%, 65%, 1);

background: linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF745C", endColorstr="#34073D", GradientType=1 );
}
#add-flight h1{
  text-align: center;
  font-size: 40px;
  font-weight: 400;
  color: #fff;
}
#edit-flight{
  position: absolute;
  top:100px;
  left: 350px;
  background-color: black;
  width: 70%;
  height: 100%;
  border-radius: 20px;
  background: hsla(10, 82%, 65%, 1);

background: linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF745C", endColorstr="#34073D", GradientType=1 );
}
#edit-flight h1{
  text-align: center;
  font-size: 40px;
  font-weight: 400;
  color: #fff;
}
#delete-flight{
  position: absolute;
  top:100px;
  left: 350px;
  background-color: black;
  width: 40%;
  height: 30%;
  border-radius: 20px;
  background: hsla(10, 82%, 65%, 1);

background: linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF745C", endColorstr="#34073D", GradientType=1 );
}
#view-bookings{
  position: absolute;
  top:110px;
  left: 300px;
}
#update-status{
  position: absolute;
  top:110px;
  left: 400px;
}
#manage-availability{
  position: absolute;
  top:110px;
  left: 400px;
}
#view-accounts{
  position: absolute;
  top:110px;
  left: 400px;
}
#activity-tracking{
  position: absolute;
  top:110px;
  left: 400px;
}
#statistics-body p{
  color: #92098e;
  font-size: 50px;
}
  
.flight-container{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.flight-container .flight-content{
  width: 40%;
  height: 50%;
  margin: 10px;
}
.flight-container .flight-content input{
  width: 100%;
  height: 70%;
  padding: 15px;
  background-color: #fff;
  border: none;
  outline: none;
  border-radius: 10px;
  color: black;
  font-size: 15px;
  font-weight: 200;
  transition: background-color 0.3s ease;
}
.flight-container .flight-content input:hover{
  background-color: #ccc6c6;
}
.flight-container .flight-content label{
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 300;
  color: black  ;
}
.flight-container .flight-content button{
  margin-left: 37%;
  margin-top: 30px;
  width: 60%;
  height: 50px;
  color: white;
  font-size: 25px;
  font-weight: 300;
  background-color: green;
  border: none;
  outline: none;
  border-radius: 10px;
  transition: background-color 0.3s ease;
}
.flight-container .flight-content button:hover{
  background-color: black;
}

#delete-flight h1{
  text-align: center;
  font-size: 40px;
  font-weight: 400;
  color: #fff;
  margin-top: 50px;
}
.delete-container{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.delete-container .delete-content{
  width: 40%;
  height: 50%;
  margin: 10px;
  margin-top: 50px;
}
.delete-container .delete-content input{
  width: 100%;
  height: 70%;
  padding: 15px;
  background-color: #fff;
  border: none;
  outline: none;
  border-radius: 10px;
  color: black;
  font-size: 15px;
  font-weight: 200;
  transition: background-color 0.3s ease;
}
.delete-container .delete-content input:hover{
  background-color: #ccc6c6;
}
.delete-container .delete-content label{
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 300;
  color: black  ;
}
.delete-container .delete-content button{
  margin-left: 37%;
  margin-top: 20px;
  width: 70%;
  height: 50px;
  color: white;
  font-size: 25px;
  font-weight: 300;
  background-color: green;
  border: none;
  outline: none;
  border-radius: 10px;
  transition: background-color 0.3s ease;
}
.delete-container .delete-content button:hover{
  background-color: black;
}

.booking-container{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin: 20px;
  width: 400px;
  border-radius: 20px;
  color: white;
  background: hsla(10, 82%, 65%, 1);

background: linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF745C", endColorstr="#34073D", GradientType=1 );
}
.booking-container .profile-img-container{
  display: block;
  width: 50%;
  margin-top: 20px;
  margin-left: 10px;
}
.booking-container .profile-img-container img{
  width: 100%;
  height: 100%;
  align-self: center;
  border: 1px solid peru;
  border-radius: 250px;
}
.booking-container .profile-img-container p{
  text-align: left;
  font-size: 10px;
  color: white;
}
.booking-container .airline-logo-container{
  width: 40%;
  display: block;
  height: auto;
  margin-top: 20px;
  margin-left: 20px;
}
.booking-container .airline-logo-container img{
  width: 100%;
  height: 100%;
  align-self: center;
  border: 1px solid peru;
  border-radius: 50px;
}
.booking-container .flight-content-container{
  width: 100%;
  display: block;
  margin-top: 15px;
  margin-left: 15px;
}
.booking-container .flight-content-container p{
  font-size: 10px;
  padding: 5px, 10px;
  color: white;
}

.booking-section-container{
  display: block;
}
.divavail1{
  display: block;
  justify-content: center;
  text-align: left;
  width: 500px;
  height: 400px;
  padding: 30px;
  margin-left: 200px;
  border-radius: 40px;
  flex-wrap: wrap;
  margin: 20px;
  margin-left: 200px;
  padding-top: 20px;
  background: hsla(10, 82%, 65%, 1);

background: linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(10, 82%, 65%, 1) 0%, hsla(290, 79%, 13%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF745C", endColorstr="#34073D", GradientType=1 );
}
.divavail1 .airline-img{
  border-radius: 250px;
  margin-bottom: 50px;
}
.booking-section-container form .fromdiv2{
  width: 100%;
  margin-top: 30px;
  height: 200px;
  display: block;
}
.fromdiv2 label{
  display: block;
  font-size: 25px;
  font-weight: 300;
  color: black;
  width: 100%;
  text-align: left;
  margin-bottom: 10px;
}
.fromdiv2 select{
  width: 100%;
  height: 50px;
  outline: none;
  border:none ;
  background-color: #0c0202;
  color: white;
  font-size: 20px;
  border-radius: 30px;
  padding: 10px;
}
.fromdiv2 .anchdiv{
  position: relative;
  margin-left: 300px;
  width: 250px;
  height: 120px;
  margin-top: 30px;
  font-size: 30px;
  font-weight: 250;
  color: black;
  border-radius: 20px;
  padding: 40px;
  padding-left: 60px;
  background-color: #92098e;
  cursor: pointer;
  transition:.5s ease all;
}
.fromdiv2 .anchdiv:hover{
  transform: scale(1.1);
  background-color: #310538;
  color: #fff;
}

.userprofile .img-container{
  display: block;
  align-items: center;
  width: 250px;
  height: 250px;
  margin-top: 30px;
  margin-bottom: 40px;
}
.userprofile .img-container img{
  width: 100%;
  height: 100%;
  border-radius: 250px;
}
.userprofile .user-info{
  display: block;
}
.userprofile .user-info label{
  width: 100%;
  font-size: 30px;
  font-weight: 250;
  color: black;
  margin-bottom: 10px;
}
.userprofile .user-info input{
  width: 100%;
  height: 50px;
  background-color: #ccc;
  outline: none;
  border: none;
  padding: 10px;
  color: black;
  font-size: 20px;
  font-weight: 200;
  margin-bottom: 20px;
  border-radius: 20px;
}
.userprofile .edit{
  text-decoration: none;
  position: absolute;
  background-color: red;
  width: 80px;
  height: 50px;
  padding: 20px;
  padding-bottom: 25px;
  margin-top: 10px;
  margin-bottom: 80px;
  border-radius: 15px;
  text-align: center;
  transition: .5s ease all;
}
.userprofile .edit a{
  color: #fff;  
  font-size: 20px;
  font-weight: 200;
  margin-bottom: 5px;
  align-items: center;
}
.userprofile .edit:hover{
transform: scale(1.1);
color: black;
}
.buttonclass{
  display: flex;
  justify-content: center;
}
.buttonclass .sucanc{
  cursor: pointer;
  width: 40%;
  height: auto;
  background-color: green;
  align-self: left;
  border-radius: 20px;
}
.buttonclass .faianc{
  cursor: pointer;
  width: 40%;
  height: auto;
  background-color: green;
  align-self: right;
  border-radius: 20px;
}
</style>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
<!--Header-->
    <header class="header">
            <a href="#" class="logo">FLIGHT HUB
                <div class='bx bxs-plane-alt' id="plane icon" ></div>
            </a>
                <uL class="navbar">
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </uL>
                <div class="dropdown">
                    <div class="dropdown-text">Someone<div class="fas fa-user" id="user"></div></div>
                    <div class="dropdown-content">
                        <a href="userprofilepage.php">Profile</a>
                        <a href="availflights.php">Flights</a>
                        <a href="logoutlogic.php">Logout</a>
                    </div>
                </div>

    </header>
<!--home page-->
 <section class="home" id="home">
        <div class="home-text">
            <h1>The sky's the limit!</h1>
            <p>We strive for your satisfaction. Choose us, and
            find the best flights <br> to your destination.</p>
            <a href="#" class="home-btn" id="exp">EXPLORE</a>
            <!--form id="form">
               
            </form-->
        </div>
</section>

<!--container-->
<section class="container">
    <div class="text">
        <h2>Start your trip<br> by choosing one of our services!</h2>
    </div>
    <div class="slider">
        <div class="container-box" data-bg-image="u/pexels-benjamin-suter-2700532.jpg">
          <div class="container-img">
            <i class='bx bxs-briefcase-alt-2 bx-lg'></i>
          </div>
          <h4>For every business type</h4>
          <p>We can take the stress out of business<br> travel,
            so you can focus on what's important.</p>
        </div>
        <div class="container-box" data-bg-image="u/pexels-cameron-casey-1157255.jpg">
          <div class="container-img">
            <i xclass='bx bx-money bx-lg'></i>
          </div>
          <h4>For every budget</h4>
          <p>We offer a wide range of travel <br> services
            to meet your budget and needs.</p>
        </div>
        <div class="container-box" data-bg-image="u/pexels-stefan-stefancik-127905.jpg">
          <div class="container-img">
            <i class='bx bxs-map bx-lg'></i>
          </div>
          <h4>For every option</h4>
          <p>We offer over 150 travel <br> destinations
            to fulfill your desires.</p>
        </div>
      </div>
      
</section>
<!--services-->
<section id="services">
    <form id="serve">
    <div id="lgs">
        <a href="#" class="logo" id="secLogo" >FLIGHT HUB
            <div class='bx bxs-plane-alt fly-animation' id="planeicon"></div>
        </a>
    </div>
    <div id="ds">
         
        <div class="First">
            <label for="tType">Type</label>
            <select name="travelType" id="tType">
                <option value="Round" selected>Round Trip</option>
                <option value="oneWay">One-Way</option>
                <option value="multi">Multi-City</option>
            </select>
            <label for="dpt">Departing From</label>
            <select name="departing" id="dpt" required>
                <option value="Novalidate">Departing From</option>
                <option value="dc1">Pyongyang, North Korea</option>
                <option value="dc2">Scranton, Pennsylvania, United States</option>
                <option value="dc3">Hogwarts School of Witchcraft and Wizardry, United Kingdom</option>
                <option value="dc4">Quahog, Rhode Island, United States</option>
                <opyion value="dc5">Wadiya, somehwere in the middle-east</opyion>
                <option value="dc6">Asgard, planet</option>
                <option value="dc7">Winterfell, castle</option>
                <option value="dc8">District 12, Panem</opuion>
                <option value="dc9">Gotham City, Ethiopia</opuion>
                <option value="dc10">Narnia, Some land</opuion>
            </select>
            <label for="arr">Arriving At</label>
            <select name="ariving" id="arr" required>
                <option value="Novalidate">Arriving At </option>
                <option value="ac1">Pyongyang, North Korea</option>
                <option value="ac2">Scranton, Pennsylvania, United States</option>
                <option value="ac3">Hogwarts School of Witchcraft and Wizardry, United Kingdom</option>
                <option value="ac4">Quahog, Rhode Island, United States</option>
                <opyion value="ac5">Wadiya, somehwere in the middle-east</opyion>
                <option value="ac6">Asgard, planet</option>
                <option value="ac7">Winterfell, castle</option>
                <option value="ac8">District 12, Panem</option>
                <option value="ac9">Gotham City, Ethiopia</option>
                <option value="ac10">Narnia, Some land</option>
            </select>
        </div>
        <div class="second">
            <label for="dates"> Date</label>
            <input name="Tdate" id="dates" type="date"> 
            <br>
            <label for="passangers">Passangers</label>
            <div id="Pslct">
                <select name="passangersOn" id="passangers">
                    <option value="p1">Infant(0-24 months)</option>
                    <option value="p2">Child(2-11 years)</option>
                    <option value="p3">Teenagers(12-18 years)</option> 
                    <option value="p4" selected>Adult(18-70 years)</option>
                    <option value="p5">Seinor(70 and older)</option>
                </select>
                <input name="spin" id="sp" type="number" value="1" step="1" min="0" max="10"> 
            </div>
            <button id="search-button" type="summit">
                <i class="fas fa-search fa-1x" id="sic"></i>  Search Flight</button>
        </div>
    </div>
    </form>
</section>
<!--testimonials-->
<section id="reviews">
    <div class="outerdiv">
        <div class="innerdiv">
            <!--first review-->
            <div class="Tone elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://media.newyorker.com/photos/5aeb586479f6430aaa0f9d19/1:1/w_1111,h_1111,c_limit/Wright-Kim-Jong-Un-Profile.jpg" alt=""> 
                    </div>
                    <div class="Tdetails">
                        <p class="name">Kim Jung Un</p>   
                        <p class="cred">Leisure traveler</p>  
                    </div>
                </div>
                <div class="review">
                    <h4>Too easy to use </h4>
                    <p>
                        "I am very happy with your services. I would highly recommend Flight Hub to anyone who is looking to book a flight.
                        However, there is one small problem. Your website is so easy to use that I have been spending all of my time booking flights and none of my time ruling my country. As a result, my people are starting to get restless.
                        I am not sure what to do. I love your website, but I also need to focus on my work.
                        Any suggestions?""
                    </p>
                </div>
            </div>
            <!--second review-->
            <div class="Ttwo elements">
            <div class="Tcontent">
                <div class="Timgbox">
                    <img src="https://i.pinimg.com/originals/09/b3/fb/09b3fbfe0ce5a4857f53d97690e9cb61.jpg" alt="">
                </div>
                <div class="Tdetails">
                    <p class="name">Dwight K.Schrute</p>
                    <p class="cred">Avid travler</p>
                </div>
            </div>
            <div class="review">
                <h4>Guter Service</h4>
                <p>
                    "I love this flight booking website! I booked a flight to Scranton in just a few minutes, and I didn't even have to call Jim for help."
                </p>
            </div>
            </div>
            <!--third review-->
            <div class="Tthree elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://i.pinimg.com/564x/e4/85/21/e48521a0921130886b08c82336031256--alan-rickman-severus-snape-professor-severus-snape.jpg" alt="">
                    </div>
                    <div class="Tdetail">
                        <p class="name">Professor Severus Snape</p>
                        <p class="cred">First time customer</p>
                    </div>
                </div>
                <div class="reviews">
                    <h4>Snape's seal of approval</h4>
                    <p>
                        "Me and Lily, my wife, have been using this flight booking website for years now and we have never been disappointed.
                        Flight Hub is so easy to use, even a potions master like me can figure it out. The prices are competitive, and the customer 
                        service is excellent. We would highly recommend this website to anyone who is looking to book a flight, even if they are a Death Eater."
                    </p>
                </div>
            </div>
            <!--fourth--> 
            <div class="Tfour elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRduPeo0BOfr38ReiQqSaQk4Wt_Bj1Sx2QX_w&usqp=CAU" alt="">
                    </div>
                    <div class="Tdetail">
                        <p class="name">Stewie Grifin</p>
                        <p class="cred">Business Traveler</p>
                    </div>
                </div>
                <div class="reviews">
                    <h4>Trust me!</h4>
                    <p>
                        "I'm Stewie Griffin, from my travles, I can sat Flight Hub is the best flight booking website out there. 
                        It's so easy to use, even a baby could do it."
                    </p>
                </div>
            </div>
            <!--fifth-->
            <div class="Tfive elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://arktimes.com/wp-content/uploads/2019/04/2247958-movie_review1-1.jpg" alt="">
                    </div>
                    <div class="Tdetails">
                        <p class="name">Admiral General Aladeen</p>
                        <p class="cred">Premium customer</p>
                    </div>
                </div>
                <div class="review">
                    <h4>Service fit for a king!</h4>
                    <p>
                        "I am Admiral General Aladeen, the supreme ruler of Wadiya. I am also a frequent flyer,
                         and I have used many different flight booking websites. I can honestly say that Flight Hub is the best of the best. The website is easy to use, the prices are competitive,
                          and the customer service is excellent. I highly recommend Flight Hub to anyone who is looking to book a flight."
                    </p>
                </div>
            </div>
        </div>
    </div> 
</section>
<!--idk yet maybe footer yay-->
<footer>
    <div class="footer-container">
      <div class="about-section">
        <h3>The sky's the limit!</h3>
        <p>Compare and book cheap flights from anywhere, to everywhere</p>
      
      <div class="links">
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Cookie policy</a></li>
        </ul>
      </div>
        </div>
      <div class="partners-section">
        <h3>Some of Our Air-line Partners</h3>
        <hr>
        <div class="partner-logos">
          <img src="/u/ethlogo.png">
          <img src="/u/kisspng-addis-ababa-ethiopian-airlines-charles-de-gaulle-a-airline-5ac4d65a96f561.1409619115228493706183.png" alt="Partner 2">
          <img src="/u/turkish.png" alt="Partner 3">
          <img src="/u/unitedairlin.png" alt="Partner 4">
          <img src="/u/flyemirates.png" alt="Partner 5">
        </div>
      </div>
      <div class="contacts">
        <div class="contact-us">
            <h3>Contact Us</h3>
            <h3>Platform 9<sup>3</sup>/<sub>4</sub>, King's Cross Station</h3>
            <p>Phone +251-9876543</p>
            <p>Email: support@flighthub.com</p>
        </div>
        <div class="fh3"><h3>Follow Us</h3></div>
        <div class="social-media">
            <div class="icon">
            <i class="fab fa-facebook fa-3x"></i>
            <span class="icon-text">Facebook</span>
          </div>
        
          <div class="icon">
            <i class="fab fa-instagram fa-3x"></i>
            <span class="icon-text">Instagram</span>
          </div>
        
          <div class="icon">
            <i class="fab fa-twitter fa-3x"></i>
            <span class="icon-text">Twitter</span>
          </div>   
        </div>
    </div>
    <div class="additional-info">
      <p>&copy; 2023 FlightHub ltd 1600 - the future. All rights reserved.</p>
      <p>Terms of Service | Privacy Policy</p>
    </div>
  </footer>
  
<!--js script-->
<script src="script.js"></script>
</body>
</html>