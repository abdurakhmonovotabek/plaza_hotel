<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
#navbar {
    background-color: #333;
    overflow: auto;
    padding: 10px 0;
}
#navbar img {
    border-radius: 50%;
    width: 65px;
}
#navbar ul {
    float: right;
    color: #fff;
}
#navbar ul li {
    float: left;
    color: #fff;
}
#navbar ul li a {
    display: inline-block;
    padding: 25px;
    color: #fff;
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
.item {
    background-image: url("../pexels-jean-van-der-meulen-1457842.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
section h2 {
    text-align: center;
    padding-top: 80px;
    color: #fff;
}
span {
    color:#f7c08a;
}
.info {
    display: flex;
    justify-content: space-around;
   margin-top: 30px;
}
.box1 {
    background-image: url("../11.jpg");
    padding: 10px;
     max-width: 300px;
     max-height: 400px;
     border: 2px solid black;
     border-radius: 5px;
}
.box1 img {
    width: 100%;
    padding: 5px;
}
.box1 p {
    text-align: center;
}
.box1 li {
    padding: 50px;
    font-family: initial;
    text-align: center;
}
.box1 a {
    color: black;
}
.person {
    margin: 20px;
    background-color: moccasin;
    display: flex;
    justify-content: space-around;
    padding: 25px;
}
.person img {
    border: 2px solid black;
    border-radius: 50%;
    width: 110px;
    height: 110px;
}
.person p {
    float: right;
    text-align: center;
    max-width:800px;
    min-width: auto;
}
.person-items {
    float: left;
    text-align: center;
}
.floor {
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
.main3 a {
    color: #fff;
}
    </style>
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <img src="./Без названия.png" alt="">
                <ul>
                    <li> <a href="./index.php">home</a></li>
                    <li> <a href="./about.php" class="current">about</a></li>
                    <li> <a href="./contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="item">
        <section>
            <div class="container">
                <h2><span>Bizning</span> mehmonxonamiz haqidagi malumotlar bo'limiga <span>XUSH KELIBSIZ!</span></h2>
                <div class="info">
                    <div class="box1">
                        <img src="./1.jpg" alt="">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, nam!</p>
                        <li> <a target="_blank" href="./Microsoft Word Document.docx">YUKLASH</a>
                        </li>
                    </div>
                    <div class="box1">
                        <img src="./2.jpg" alt="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, placeat!</p>
                        <li> <a target="_blank" href="./Microsoft Word Document.docx">YUKLASH</a>
                        </li>
                    </div>
                    <div class="box1">
                        <img src="./3.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, excepturi.</p>
                        <li> <a target="_blank" href="./Microsoft Word Document.docx">YUKLASH</a>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="person">
                    <div class="person-items">
                        <img src="./person1.jpg" alt="">
                        <h1>Anna</h1>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugit corporis, blanditiis
                        quidem eos cumque dicta, libero id porro optio reiciendis voluptates? Sequi repellat officiis a
                        quod quis id, non accusamus temporibus illum illo quia aspernatur et error voluptatibus quasi.
                    </p>
                </div>
                <div class="person">
                    <div class="person-items">
                        <img src="./person2.jpg" alt="">
                        <h1>Jon</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ipsam ipsum excepturi placeat magni
                        quam, inventore fugit earum vero ratione delectus. Quaerat voluptate mollitia maxime deserunt
                        quibusdam doloremque ratione facilis.</p>
                </div>
                <div class="person">
                    <div class="person-items">
                        <img src="./person3.jpg" alt="">
                        <h1>Martin</h1>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eius reiciendis sit error sed
                        provident, maiores beatae illum quisquam mollitia. Vel incidunt suscipit numquam expedita
                        dolores error voluptate fugiat inventore, quibusdam officia quasi quis beatae nisi animi in eius
                        exercitationem tenetur maxime neque doloremque. Odio.</p>
                </div>
                <div class="person">
                    <div class="person-items">
                        <img src="./person4.jpg" alt="">
                        <h1>Jorj</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius explicabo, provident maiores
                        reiciendis fugiat temporibus delectus repellendus nemo ipsum iste pariatur labore accusamus non
                        reprehenderit cupiditate. Totam unde magni beatae aperiam, rem veniam deleniti nemo quaerat!
                        Incidunt itaque rerum voluptatum provident quis quam repellat! Exercitationem consectetur et
                        alias tenetur!</p>
                </div>

            </div>
            <div class="floor">
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
            </div>
        </footer>
    </div>
</body>

</html>