
<?php
$insert = false;
if(isset($_POST['name'])){
    // Creating Server
    $server = "localhost";
    $username = 'root';
    $password = '';

    // Making connection
     $con = mysqli_connect($server, $username,$password);

     if(!$con){
         die("Connection Failed" .mysqli_connect_error());
     }

     //Declaring Variables
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $text = $_POST['text'];
     $responded = 0;

     //Inserting into database
    $sql = "INSERT INTO `compass`.`response` (`name`, `phone`, `text`, `time`, `responded`) VALUES ('$name', '$phone', '$text', current_timestamp(), '$responded');";



    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compass</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/mobile_css.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
</head>

<body>
    <!-- HeroPage -->
    <section id="HeroPage">
        <!-- Navigation -->
        <div id="NavBar">
            <!-- logo -->
            <div id="logoArea">
                <img src="images/logo.png" alt="" id="logo">
            </div>

            <!-- navigationContent -->
            <div id="NavContent" class="textCenter">
                <div id="NavAboutUS" class="NacDecor">About Us</div>
                <div id="NavTeam" class="NacDecor">Team</div>
                <div id="NavContactUs" class="NacDecor">Contact Us</div>
                <div id="NavDownloads" class="NacDecor">Downloads</div>
            </div>
        </div>

        <div id="HeroContent">
            <div id="HeroContect-1">COMPASS-GEO</div>
            <div id="HeroContect-2">SOMETHING COMPANY TYPE</div>
        </div>

    </section>

    <!-- About Us -->
    <section id="AboutUs" class=''>
        <div id="AboutUsArea" class='sectionStyle'>
            <div id="" class="sectionHeading">
                About Us
            </div>
            <div id="AboutUsContent">
                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae cum perferendis eveniet, minima
                eligendi eos veritatis, commodi veniam quis nesciunt deleniti optio praesentium atque, omnis quaerat ex.
                Modi saepe quae odit excepturi id neque doloribus nihil, consectetur incidunt ab odio quos vel
                distinctio eaque recusandae officiis laborum commodi enim inventore. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Animi, at mollitia! Nulla repellendus perferendis voluptate. Corporis
                fugiat, minima, cum maiores quisquam ab ex deleniti nobis eum hic, nostrum esse dolorem ratione? Quas
                reiciendis cum, autem sed atque optio quae fugiat omnis in, eius dignissimos, inventore odio
                voluptatibus? Culpa, beatae vero."
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="Team" class='SectionPage'>
        <div id="TeamArea" class='sectionStyle'>
            <div id="" class="sectionHeading">
                Team
            </div>
            <div id="TeamContent">
                <div id="Team-1" class="TeamMembers">
                    <div id='TeamIcon-1' class='TeamIcon'></div>
                    <div id='' class='TeamName'>Name1</div>
                    <div id="" class="MemberDiscription">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam neque iste
                        repudiandae magnam accusamus vero tempore? Eius id a labore quas doloribus rerum cupiditate,
                        aliquam
                        mollitia eligendi saepe facilis.
                    </div>
                </div>
                <div id="Team-2" class="TeamMembers">
                    <div id='TeamIcon-2' class='TeamIcon'></div>
                    <div id='' class='TeamName'>Name2</div>
                    <div id="" class="MemberDiscription">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam neque iste
                        repudiandae magnam accusamus vero tempore? Eius id a labore quas doloribus rerum cupiditate,
                        aliquam
                        mollitia eligendi saepe facilis.
                    </div>
                </div>
                <div id="Team-3" class="TeamMembers">
                    <div id='TeamIcon-3' class='TeamIcon'></div>
                    <div id='' class='TeamName'>Name3</div>
                    <div id="" class="MemberDiscription">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam neque iste
                        repudiandae magnam accusamus vero tempore? Eius id a labore quas doloribus rerum cupiditate,
                        aliquam
                        mollitia eligendi saepe facilis.
                    </div>
                </div>
                <div id="Team-4" class="TeamMembers">
                    <div id='TeamIcon-4' class='TeamIcon'></div>
                    <div id='' class='TeamName'>Name4</div>
                    <div id="" class="MemberDiscription">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam neque iste
                        repudiandae magnam accusamus vero tempore? Eius id a labore quas doloribus rerum cupiditate,
                        aliquam
                        mollitia eligendi saepe facilis.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us -->

    <section id="ContactUs" class='SectionPage'>
        <div id="ContactUsArea" class='sectionStyle'>
            <div id="" class="sectionHeading">
                Contact Us
            </div>
            <div id="ContactUsContent">
                <!-- Map -->

                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A4a721c420b329df69d848f8c92572fba844088406caf493edaad68bec0b439c0&amp;source=constructor"
                    class="ContactUsSubElement" id='inneriframe' frameborder="0"></iframe>



                <!-- Contact Information Find Us -->
                <div id="ContactInformationArea" class="ContactUsSubElement">
                    <h4>Find Us</h4>
                    <div id="findUsInfo">
                        <!-- Find Us: email -->
                        <div id="findUsEmail" class="FindUsIconDisplay">
                            <img src='/images/Icons/icons8-email-50.png' class="icon">
                            <div id="email" class="marginfindus">
                                info@compassgeo.com
                            </div>
                        </div>

                        <!-- Find Us: address -->
                        <div id="findUsAddress" class="FindUsIconDisplay">
                            <img src='/images/Icons/icons8-address-50.png' class="icon" style='margin-top:1.96vw;'>
                            <div id="address" class="marginfindus">
                                <b>Compass Geo Pvt Ltd</b><br>
                                Ulitsa 1st Marta, D3
                                Vyazma, Smolenks Region
                                Russia
                            </div>
                        </div>

                        <!-- Find Us: phone -->
                        <div id="findUsPhone" class="FindUsIconDisplay">
                            <img src='./images/Icons/icons8-call-50.png' class="icon" style='margin-top:1.96vw;'>
                            <div id="phone" class="marginfindus">
                                <b>
                                    <a href="tel:007999999999"
                                        style='color:black; text-decoration: none;'>+7(999)-999-99-99</a><br>
                                    <a href="tel:007999999999"
                                        style='color:black; text-decoration: none;'>+7(999)-999-99-99</a>
                                </b>
                            </div>
                        </div>

                        <!-- Find Us: SocialMedia -->
                        <div id="findUsSocialMedia" class="FindUsIconDisplay">

                            <img src='images/Icons/icons8-whatsapp-50.png' class="SMicon icon">
                            <img src='images/Icons/icons8-telegram-app-50.png' class="SMicon icon">
                            <img src='images/Icons/icons8-vk.com-50.png' class="SMicon icon">
                            <img src='images/Icons/icons8-odnoklassniki-50.png' class="SMicon icon">
                            <img src='images/Icons/icons8-viber-50.png' class="SMicon icon">

                        </div>
                    </div>
                </div>



                <!-- Application -->
                <div class="ContactUsSubElement">
                    <div id="ResponseArea">
                        <h4>
                            Write to Us
                        </h4>
                        <div id='FormArea' class=''>

                          <form action="index.php" method="POST" class='' id="">
                              <!-- Name Input -->

                              <input type="text" name="name" required="required"  id="name" class='classForm' placeholder='NAME'>

                              <!-- Number Input -->

                              <input type="text" name="phone" required="required" id="phone" class='classForm' placeholder=+7(999)999-99-99 style="margin-top: 1.15vw;">

                              <!-- Write Message -->

                              <input type="text" name="text" id="text" class='classForm' placeholder='TEXT' style='margin-top: 1.15vw;'>

                              <!-- button -->
                              <button type='button' id="buttonId" class='classForm'> Send </button>
                              <!-- <button id="buttonId" class="classForm">Submit</button> -->
                          </form>
                        </div>
                    </div>
                    <div class="ResponseRecorded" style='position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); color:green; width:100%;' >
                        <center>Thank You! <br> We will call you back shortly!!</center>
                    </div>
                </div>
            </div>



        </div>
        </div>
        <!-- Footer -->
        <div id="Footer">
            <!-- Yash Madhwal CopyRight -->
            <div id="crym" class="footerContent">
                <b>© 2020 Compass Geo</b> | A product by Yash Madhwal
            </div>
            <!-- Terms and Conditions and Privacy Policy -->
            <div id="tnc" class="footerContent">
                <a href="">Terms & Conditions</a> ✦
                <a href="">Privacy Policy</a>

            </div>
        </div>
    </section>

</body>
<script src="js/js.js" type="text/javascript"></script>
</html>
