<?php include "layouts/header.php" ?>
<style>
    /* About */

.about-section {
    margin: 0px 100px;
    width: 80%;
    display: flex;
}
.content {
    line-height: 40px;
}
.content li {
    color: white;
}
.content-section {
    width: 100%;
    color:#F9004D ;
}
.about-img img {
    width: 100%;
    object-fit: cover;
    object-position: center;
    height: 70%;
    margin-top: 20%;
    margin-left: 10%;
    border-radius: 10px;
}

.about-img {
    width: 50%;
}

.content-section h5 {
    color: #F9004D;
    font-size: 50px;
}

@media (max-width: 992px) {
    .about-section {
        flex-wrap: wrap;
        margin-left: 40px;
    }

    .about-img img {
        height: 100%;
        width: 100%;
    }
}
.navbar-title a.active-about {
    background: linear-gradient(#F9004D, #F9004D);
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: bottom left;
}

</style>
  <!-- About -->
  <section></section>

<div class="about-section">
    <div class="container">
        <div class="content-section">
            <div class="title">
                <h5 class="text-white">About us</h5>
            </div>
            <div class="content">
                <h1> Voice is willing you to better life and more succeed life and lifestyle forever</h1>
                <p class="text-white">We were sure for your choices , willingness , forwared,and helpful Website for your needs.
                    <span> What we can provide</span>
                    <li> We can find updated news and information</li>
                    <li> We can help what you looking for</li>
                    <li> We were suggest what you need for your futher steps and</li>
                    <li> We willing you to be our life partnership</li>
                </p>
                <h2>What we can promise your trustworthy and fastest finder,seeker</h2>
                <span class="text-white">As we announced we willing to grow with you,business,consult,advice,suggestion,guideline and
                    your cool partner.</span>
            </div>
        </div>
    </div>
    <div class="about-img">
        <img src="Photos/About.jpg" alt="">
    </div>
</div>
</div>

<?php include "layouts/footer.php" ?>