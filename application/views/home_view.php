<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Leo's Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/public/css/global.css"/>
<style type="text/css">
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    body {
        padding: 0;
        margin: 0;
        background-color: var(--charcoal-grey-two);
    }
    #base {
        margin: 0 auto;
        width:1180px;
    }
    #header {
        line-height:80px;
        height: 80px;
        border-bottom: 1px solid var(--slate-grey);
        vertical-align: middle;
    }
    #header .logo-box {
        float: left;
    }
    #header .logo-box .logo {
        width: 182px;
        height:36px;
        margin:22px 9px;
    }
    #header .tools-box {
        float: right;
    }
    #header .tools-box .btn {
        display: inline-block;
        margin-left: 16px;
    }
    #header .tools-box .btn .icon {
        width: 16px;
        height: 16px;
    }
    #header .tools-box .line {
        display: inline-block;
        margin-left: 16px;
        width: 1px;
        height: 16px;
        border: solid 1px var(--battleship-grey);
    }
    #footer {
        width: 100%;
        position: fixed;
        bottom: 0;
        height: 46px;
        background-color: var(--charcoal-grey);
        line-height: 46px;
        text-align: center;

        font-family: PingFangTC;
        font-size: 12px;
        color: var(--pale-grey);
    }

    #main {
        width:100%;
    }
    #content {
        float:left;
        width:852px;
    }
    #menu {
        float:right;
        width:278px;
    }

    #coming-soon {
        font-family: PingFangTC;
        font-size: 100px;
        text-align: center;
        color: var(--pale-grey);
        height:80vh;
        line-height: 80vh;
        text-shadow:5px 5px 30px #BBF;
    }

    @media (max-width:1179px) {
        #base {
            margin: 0 auto;
            width:360px;
        }
        #header .logo-box .logo {
            width: 152px;
            height:28px;
            margin:18px 16px;
        }
        #coming-soon {
            font-size: 20px;
            text-align: left;
            text-shadow:5px 5px 30px #BBF;
        }
    }
</style>
</head>
<body>
<div id="base">
    <div id="header" class="clearfix">
        <div class="logo-box">
            <img class="logo" src="/public/images/logo@2x.png" alt="">
        </div>
        <div class="tools-box">
            <div class="btn"><img class="icon" src="/public/images/github-logo@2x.png" alt=""></div>
            <div class="btn"><img class="icon" src="/public/images/linkedin-logo@2x.png" alt=""></div>
            <div class="line"></div>
            <div class="btn"><img class="icon" src="/public/images/magnifying-glass@2x.png" alt=""></div>
        </div>
    </div>

    <div id="main" class="clearfix">
        <div id="content">

        </div>
        <div id="menu">

        </div>
    </div>

    <div id="coming-soon">Coming Soon ...</div>

</div>
<div id="footer">© 2020 Leo Kuo , design by Evonne Chen</div>
</body>
</html>