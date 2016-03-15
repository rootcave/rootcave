<style>
    /*
        loading style css
    */
    * {
        -webkit-box-sizing: border-box;
        -moz-   box-sizing: border-box;
                box-sizing: border-box;
    }
/*
    html,body {
        height: 100%
    }
*/
    .back-load {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #222;
        z-index: 99999999999999;
    }

    .loading {
        width: 200px;
        height: 50px;
        margin: 10px auto;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -70px;
        margin-top: -25px;
    }

    .loading img {
        position: absolute;
        width: 200px;
        display: inline-block;
        left: 50%;
        margin-left: -150px;
        top: -235%;
    }

    .loading span {
        display: block;
        position: absolute;
        bottom: 0;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background-color: #3498db;
        opacity: 0.5;
        -webkit-animation: snake 1.5s infinite ease-in-out;
        animation: snake 1.5s infinite ease-in-out;
    }

    .loading span:nth-of-type(2) {
        left: 20px;
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    .loading span:nth-of-type(3) {
         left: 40px;
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .loading span:nth-of-type(4) {
         left: 60px;
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .loading span:last-of-type {
         left: 80px;
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }
    @-webkit-keyframes snake {
        0% {
            opacity: .3;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            box-shadow: 0 0 3px 0 rbga(0,0,0,1)
        }
        50% {
            opacity: 1;
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
            background-color: #0079b9;
            box-shadow: 0 20px 3px 0 rbga(0,0,0,0.5)
        }
        100% {
            opacity: .3;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            box-shadow: 0 0 3px 0 rbga(0,0,0,1)
        }
    }
    @keyframes snake {
        0% {
            opacity: .3;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            box-shadow: 0 0 3px 0 rbga(0,0,0,1)
        }
        50% {
            opacity: 1;
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
            background-color: #0079b9;
            box-shadow: 0 20px 3px 0 rbga(0,0,0,0.5)
        }
        100% {
            opacity: .3;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            box-shadow: 0 0 3px 0 rbga(0,0,0,1)
        }
    }
</style>
<div class="back-load">
    <div class="loading">
        <img class="img-reponsive" src="assets/img/Logo.png" alt="...">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

