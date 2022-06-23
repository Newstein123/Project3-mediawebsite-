
<?php include "layouts/header.php" ?>
<style>
    
/* Message Aleart */

.alert-success {
    z-index: 1;
    background: #F9004D;
    font-size: 18px;
    padding: 20px 40px;
    min-width: 420px;
    position: fixed;
    right: 0;
    top: 10px;
    border-left: 8px solid #3ad66e;
    border-radius: 4px;
}

.alert-error {
    z-index: 1;
    background: #F9004D;
    font-size: 18px;
    padding: 20px 40px;
    min-width: 420px;
    position: fixed;
    right: 0;
    top: 10px;
    border-left: 8px solid #ffa502;
    border-radius: 4px;
}

    /* Contact Us */

.contactus {
    min-height: 100vh;
    background-image: url('Photos/telephone-612061_1920.jpg');
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-section {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-info {
    color: white;
    max-width: 500px;
    line-height: 65px;
    padding-left: 50px;
    font-size: 18px;
}

.contact-info {
    margin-right: 40%;
    font-size: 25px;
    margin-bottom: 10%;
}

.contact-form {
    max-width: 70%;
    margin-right: 20%;
}

.contact-info .contact-form {
    flex: 1;
}

.contact-form h2 {
    color: white;
    text-align: center;
    font-size: 35px;
    text-transform: uppercase;
    margin-bottom: 30px;
}

.contact-form .text-box {
    background: black;
    color: white;
    border: none;
    width: calc( 50% - 10px);
    height: 50px;
    padding: 12px;
    border-radius: 5px;
    box-shadow: 0 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .text-box:first-child {
    margin-right: 15px;
}

.contact-form textarea {
    background: black;
    color: white;
    border: none;
    width: 100%;
    padding: 12px;
    font-size: 15px;
    min-height: 200px;
    max-height: 400px;
    resize: vertical;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .send-btn {
    float: right;
    background-color: #F9004D;
    color: white;
    border: none;
    width: 120px;
    height: 40px;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3;
    transition-property: background;
}

.contact-form .send-btn:hover {
   transform: scale(1.1);
}

@media screen and (max-width:950px) {
    .contact-section {
        flex-direction: column;
    }
    .contact-info .contact-form {
        margin: 30px 50px;
    }
    .contact-form h2 {
        font-size: 30px;
    }
    .contact-form .text-box {
        width: 100%;
    }
}

    .navbar-title a.active-contact {
    background: linear-gradient(#F9004D, #F9004D);
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: bottom left;
}
</style>
<!-- Contact us -->

<section></section>
    <div class="contactus">
        <div class="contact-section">
            <div class="contact-info">
                <div><i class="fa-solid fa-location-dot"></i>No.123 Building A , Mingalar Street,Pabedan,Township,Yangon,Myanmar
                </div>
                <div><i class="fa-solid fa-envelope"></i>contact@mail.com</div>
                <div><i class="fa-solid fa-phone"></i>Hotline(+959500100223)</div>
                <div><i class="fa-solid fa-clock"></i>Monday To Friday 09:00-17:00</div>
            </div>

        </div>

        <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="send">
            </form>
        </div>
    </div>
    </div>
    <?php include "layouts/footer.php" ?>
