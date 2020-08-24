<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>
<link rel="stylesheet" type="text/css" href="/public/css/colors.css"/>

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
        /*border: 1px solid #000;*/
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
</style>
</head>
<body>
<div id="base">
    <div id="header">
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
</div>
</body>
</html>