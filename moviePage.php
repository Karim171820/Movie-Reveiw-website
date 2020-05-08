<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include './includes/header.php';   ?>

<body>


    <div id="container2">

    </div>


    <!-- body block        -->

    <div class="rating-area">
        <div class='ratings text-center'>
            <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Good' data-value='3'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
            </ul>
        </div>
        <div class='success-box'>
            <div class='clearfix'></div>
            <img alt='tick image' width='32' src='Images/Logo/successicon.png' />
            <div class='text-message'></div>
            <div class='clearfix'></div>
        </div>
    </div>
    <!--         Icons-->
    <a href="https://www.imdb.com/title/tt7286456/">
        <img class="icons" alt="imdb" src="Images/Logo/imdb3.png">
    </a>
    <a href="https://www.rottentomatoes.com/m/joker_2019">
        <img class="icons" alt="rotten tomattoes" src="Images/Logo/rotten.png">
    </a>
    <!--        comment section-->

    <div class="commentSection">
        <form action="#" id="commentForm">
            <p> Add a comment :</p>
            <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter text here..."></textarea>
            <button>sumbit</button>
        </form>



        <div id="hidden">



            <div id="comments">
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here long comment here long comment here long comment here long comment here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
                <p>comment appears here</p>
                <p>user name </p>
            </div>
        </div>
        <button id="showBtn">Show more</button>
    </div>



    <script src="includes/167565.js"></script>
    <script src="includes/ratings.js"></script>
    <script src="includes/script.js"></script>
    <script src="includes/AboutUs.js"></script>
</body>
<!--    ______________________________________________________________________________________________-->
<?php include './includes/footer.php';?>


</html>
