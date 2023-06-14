<section class="contact-section" id="contact">
        <div class="row">
            <div class="col span-1-of-3">
                <ul class="information">
                    <li><i class="fas fa-map-marker-alt small-icon"></i>Address: 21A, SelfTaught street, Ha Noi</li>
                    <li><i class="fas fa-envelope small-icon"></i>Email: selftaughtteam@edu.com</li>
                    <li><i class="fas fa-phone small-icon"></i>SĐT: (+084 )099-923-232-320</li>
                </ul>
                <ul class="social-icons">
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-twitter-square"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-google-plus-square"></i></li>
                </ul>
            </div>
            <div class="col span-2-of-3">
                <form action="" method="POST">
                    <?php
                        include('connect/connect.php');
                        require('mail/sendmail.php');

                        //$conn = mysqli_connect('localhost','root','','project_yopaz');

                        if(isset($_POST['send'])){

                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            if(empty($name) || empty($email) || empty($message)){
                            ?>
                                <div class="notett">
                                    <?php echo "All inputs are required!" ?>
                                </div>
                            <?php 
                            }else {

                                // Kiểm tra địa chỉ email hợp lệ
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                ?>
                                    <!-- display an alert message if somehow mail can't be sent -->
                                    <div class="notett">
                                        <?php echo "Invalid email address." ?>
                                    </div>
                                <?php
                                }else {
                                    $insert = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
                                    //$row = mysqli_query($conn, $insert);
                                    $row = mysqli_query($mysqli, $insert);
            
                                    $sql = "SELECT * FROM contact WHERE email='".$email."' AND name='".$name."' LIMIT 1";
                                    $result = mysqli_query($mysqli,$sql);
                                    $doi = mysqli_fetch_array($result);
                                    //$doi = mysqli_fetch_array($row);
            
                                //print_r($doi);
                                //Gửi mail đến người nhận
                                    $tieude = "Thông tin về Website SELFTAUGHT";
                                    $noidung = "<p>Xin chào ".$doi['name']."!</p>
                                                <p>Cảm ơn bạn đã quan tâm đến chương trình của chúng tôi</p>
                                                <p>Dưới đây là file đính kèm thông tin về chương trình của chúng tôi</p>
                                                <p>Xin cảm ơn.</p>";
                                    $maildoi = $doi['email'];
                                    $mail = new Mailer();
                                    $mail->maildoimk($tieude, $noidung, $maildoi);
                                ?>
                                    <div class="notett" style="padding-bottom: 20px; margin-top: -10px; text-align: center; color: yellow; font-size: 130%;">
                                        <?php echo "Your mail successfully sent to $maildoi"?>
                                    </div>
                                <?php
                                }
                                //echo "<p>Xin chào ".$doi['name']."!</p>";

                                //header('location:contact.php');
                            }
                        }
                    ?>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" placeholder="Your Email" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea  placeholder="Your Message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn" name="send" value="Send It">
                    </div>
                </form>
            </div>
        </div>
</section>