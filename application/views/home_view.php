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
        font-size: 0;
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
        /*float: left;*/
        height: 80px;
    }
    #header .logo-box .logo {
        width: 182px;
        height:36px;
        margin:22px 9px;
    }
    #header .tools-box {
        float: right;
    }
    #header .tools-box .icon {
        display: inline-block;
        margin-left: 16px;
        width: 16px;
        height: 16px;
        background-size: 16px 16px;
    }
    .github-icon {
       background-image: url(/public/images/github-logo@2x.png);
    }
    .linkedin-icon {
        background-image: url(/public/images/linkedin-logo@2x.png);
    }
    .search-icon {
        background-image: url(/public/images/magnifying-glass@2x.png);
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
        margin-top: 48px;
        width:852px;
    }
    #article-list {
        margin-bottom: 31px;
        border:1px solid var(--charcoal-grey-two);
    }
    #article-list .title {
        font-size: 20px;
        letter-spacing: 1px;
        color: var(--pale-grey);
    }


    #sidebar {
        float:right;
        margin-top: 48px;
        width:278px;
    }

    #sidebar .block {
        margin-bottom: 32px;
    }
    #sidebar .block .title {
        border: solid 1px var(--slate-grey);
        font-size: 18px;
        line-height: 48px;
        text-align: center;
        color: var(--pale-grey);
    }
    #sidebar .body {
        margin-top: 16px;
    }

    #about .photo {
        margin: 0 auto;
        width: 120px;
        height: 120px;
        border-radius: 120px;
        background-image: url(/public/images/photo.jpg);
        background-size: 120px 120px;
    }
    #about .name {
        margin-top: 16px;
        line-height: 24px;
        font-size: 18px;
        text-align: center;
        color: var(--pale-grey);
    }
    #about .name2 {
        margin-top: 4px;
        line-height: 24px;
        font-size: 16px;
        text-align: center;
        color: var(--light-grey-blue);
    }

    #about .icons {
        text-align: center;
    }
    #about .icons .icon {
        display: inline-block;
        margin:0 8px;
        width: 16px;
        height: 16px;
        background-size: 16px 16px;
    }

    #categories {
        margin-top: 8px;
    }
    #categories .category, #categories .sub-category {
        padding: 0 24px;
        font-size: 16px;
        color: var(--light-grey-blue);
        line-height: 24px;
    }
    #categories .category {
        background-size: 8px 8px;
        background-repeat: no-repeat;
        background-position: 8px 8px;
    }
    #categories .category[collapse="0"] {
        background-image: url(/public/images/arrowhead-pointing-to-the-down@2x.png);
    }
    #categories .category[collapse="1"] {
        background-image: url(/public/images/arrowhead-pointing-to-the-right@2x.png);
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
        <div class="tools-box">
            <div class="icon github-icon"></div>
            <div class="icon linkedin-icon"></div>
            <div class="line"></div>
            <div class="icon search-icon"></div>
        </div>
        <div class="logo-box">
            <img class="logo" src="/public/images/logo@2x.png" alt="">
        </div>
    </div>

    <div id="main" class="clearfix">
        <div id="content">
            <div id="article-list">
                <div class="article">
                    <div class="title">[php] 錯誤訊息：php_network_getaddresses: getaddrinfo failed: Name or service not known</div>
                    <div class="info"></div>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div id="about" class="block clearfix">
                <div class="title">About Me</div>
                <div class="body">
                    <div class="photo"></div>
                    <div class="name">Leo Kuo</div>
                    <div class="name2">Fishingboy</div>
                    <div class="icons">
                        <div class="icon github-icon"></div>
                        <div class="icon linkedin-icon"></div>
                    </div>
                </div>
            </div>

            <div id="menu" class="block clearfix">
                <div class="title">Categories</div>
                <div class="body">
                    <div id="categories">
                        <div class="category" collapse="0">程式設計</div>
                        <div class="sub-category">PHP (50)</div>
                        <div class="sub-category">MySQL (24)</div>
                        <div class="sub-category">JavaScript (36)</div>
                        <div class="sub-category">網路元件 (8)</div>
                        <div class="sub-category">Sublime Text (7)</div>
                        <div class="sub-category">Oracle (2)</div>

                        <div class="category" collapse="1">我的函式庫</div>
                        <div class="category" collapse="1">其他</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    <div id="coming-soon">Coming Soon ...</div>-->

</div>
<div id="footer">© 2020 Leo Kuo , design by Evonne Chen</div>
</body>
</html>