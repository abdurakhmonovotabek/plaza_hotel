<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAZA-hotel Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}
html,
body {
   font-family: sans-serif;
}
p {
    margin: 10px 0;
    font-size: 18px;
}
#navbar {
    background-color: #333;
    overflow: auto;
    padding: 10px 0;
}
a {
    color: #f4f4f4;
}
#navbar img {
    border-radius: 50%;
    width: 65px;
}
#navbar ul {
    float: right;
    list-style: none;
    color: #fff;
}

#navbar ul li {
    float: left;
    color: #fff;
}

#navbar ul li a {
    display: inline-block;
    padding: 25px;
}

#navbar ul li a:hover,
#navbar ul li a.current {
    background-color: #444;
    color: #f7c08a;
}

.container {
    max-width: 1100px;
    margin: auto;
}
/*showcase section*/
#showcase {
    background-image: url("../pexels-pixabay-164595.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 600px;
}

#showcase .showcase-content {
    text-align: center;
    color: #fff;
    padding-top: 170px;
}
#showcase h1 {
    font-size: 60px;
}
#showcase p {
    padding-bottom: 20px;
    font-size: 20px ;
}
.text-primary {
    color: #f7c08a;
}
.btn {
    transition: width 2s, height 2s, transform 2s;
    display: inline-block;
    font-size: 18px;
    color: #fff;
    background-color: #333;
    padding: 13px 20px;
    border: none;
    cursor: pointer;
}
.btn:hover {
    transform: rotate(360deg);
}
.btn-light {
    background-color: #f4f4f4;
    color: #333;

}
.btn-dark {
    background-color: #333;
    color: #fff;
}

.bg-dark {
    background-color: #333;
    color: #fff;
}
.bg-primary {
    background-color: #f7c08a;
    color: #333;
}
#home-info {
    height: 400px;
}
#home-info .info-img {
    float: left;
    width: 50%;
    background-image: url("../pexels-jean-van-der-meulen-1457842.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 400px;
}
#home-info .info-img p {
    text-align: center;
    padding: 100px 60px;
}
#home-info .info-content {
    float: right;
    width: 50%;
    height: 100%;
    text-align: center;
    padding: 50px 30px;
}
#home-info .info-content p {
    padding-bottom: 20px;
}
.box   {
    text-align: center;
    background-image: url("../11.jpg");
}
.box .fa-solid:hover{
    transform: scale(1.2); 
    color: blue;
}
.box .fa-solid {
    transition: 1s;
}
.box .fa-hotel:hover{
    transform: scale(1.2); 
    color: blue;
}
.box .fa-hotel {
    transition: 1s;
}
.box .box1 {
display: flex;
justify-content: space-between;
}
/* footer section */
footer {
    background-color: #121212;
    display: flex;
    justify-content: space-around; 
    color: #f4f4f4;
}
.container {
    margin: auto;
    width: 1100px;
}
.main {
    display: flex;
    justify-content: space-between;
}
.main1{
    width: 33.3%;
    padding: 15px;
    text-align: center;
}
.main2 {
    width: 33.4%;
    padding: 15px;
    text-align: center;
}
.main3 {
    width: 33.3%;
    padding: 15px;
    text-align: center;
}
.main3 li {
    padding: 5px;
}

    </style>
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <img src="./Без названия.png" alt="">
                <ul>
                    <li> <a href="./index.php" class="current">home</a></li>
                    <li> <a href="./about.php">about</a></li>
                    <li> <a href="./contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
        <div id="showcase">
            <div class="container">
                <div class="showcase-content">
                    <h1> <span class="text-primary">Enjoy</span> Your Stay</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat laudantium hic veniam recusandae ad praesentium ducimus
                        in aperiam aspernatur odit.</p>
                    <a href="./about.php" class="btn">About Us</a>
                </div>
            </div>
        </div>
    </header>
    <section id="home-info" class="bg-dark">
        <div class="info-img">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, necessitatibus?</p>
        </div>
        <div class="info-content">
            <h2><span class="text-primary">The History</span> of our hotel</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente unde quasi, sequi illum quod
                animi blanditiis iste temporibus iure.</p>
            <a href="./about.php" class="btn btn-light">Read More</a>
        </div>
    </section>
    <div class="box">
        <div class="container">
            <div class="box1">
                <div style="padding: 30px; font-size: 50px;"><a href="index.html" style="color: #333;"><i
                            class="fas fa-hotel"></i></a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, soluta.</p>
                </div>
                <div style="padding:30px; font-size: 50px;"><a href="about.html" style="color: #333;"><i
                            class="fa-sharp fa-solid fa-location-dot"></i></a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, soluta.</p>
                </div>
                <div style="padding: 30px; font-size: 50px;"><a href="about.html" style="color: #333;"><i
                            class="fa-solid fa-utensils"></i></a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, soluta.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="main">
                <div class="main1">
                    <h1>Biz haqimizda</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minus tempora quas
                        officia ad sit corrupti ullam debitis dignissimos illo.</p>
                </div>
                <div class="main2">
                    <h1>Manzil va aloqa uchun</h1>
                    <p> Manzil:Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="main3">
                    <h1>Sahifalar</h1>
                    <ul>
                        <li><a href="https://t.me/abdurakhmonov_otabek">Telegram</a></li>
                        <li><a href="https://instagram.com/abdurakhmonov__otabek">Instagram</a></li>
                        <li> <a href="https://www.youtube.com/channel/UCeCDsxuFwh9OBz-vWQ0_q3w">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>