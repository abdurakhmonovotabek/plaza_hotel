<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
section {
    background-image: url("../pexels-pixabay-279746.jpg");
   background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
form {
    padding: 20px 20px 20px 0px;
    display: flex;
    flex-direction: column;
    width: 50%;
}
textarea{
    resize: vertical;
}
input {
    padding: 15px;
    margin-bottom: 20px;
}
.button {
    background-color: dimgrey;
    color: black;
    font-size: 18px;
    border: 3px;
    padding: 10px 25px;
    border-radius: 50px;
    margin:  10px;
}
textarea {
    padding: 20px;
}
.form {
    display: flex;
    justify-content: space-around;
}
.mycontact {
    display: block;
    margin: 20px;
    background-image: url("../11.jpg");
    margin-bottom: 80px;
    width: 50%;
    padding: 10px;
    text-align: center;
}
.mycontact  p {
    padding: 10px;
    text-align: center;
}
.fa-brands {
    text-align: center;
    padding: 10px;
    font-size: 30px;
    margin-top: 30px;
    color: black;
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
                <img src="../Без названия.png" alt="">
                <ul>
                    <li> <a href="../index.php">home</a></li>
                    <li> <a href="../about.php">about</a></li>
                    <li> <a href="../contact.php" class="current">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="form">
                <form action="">
                    <input type="text" placeholder="Ismingiz:">
                    <input type="email" placeholder="shaxsiy emailingizni yozing:">
                    <input type="number" placeholder="shaxsiy raqamingiz:">
                    <input type="url" placeholder="telegram accaunt">
                    <textarea name="" id="" cols="30" rows="10">send message...</textarea>
                    <a href="contact.html"><button class="button">submit</button></a>
                </form>
                <div class="mycontact">
                    <h1>My Contact</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, cupiditate. Obcaecati
                        accusantium
                        quisquam quae quas velit ut blanditiis atque sapiente.
                    </p>
                    <a href="https://t.me/abdurakhmonov_otabek"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://instagram.com/abdurakhmonov__otabek"><i
                            class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCeCDsxuFwh9OBz-vWQ0_q3w"><i
                            class="fa-brands fa-youtube"></i></a>
                    <a href="https://wa.me/qr/5PP4VGV4XBKWG1"><i class="fa-brands fa-square-whatsapp"></i></a>
                    <a href="https://github.com/abdurakhmonovotabek"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
    </section>
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
</body>

</html>