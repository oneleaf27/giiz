<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ガルパンはいいぞカウンター</title>
        <meta name="Description" content="「ガルパンはいいぞ」をみんなで共有できるWebサービスであります！" />
        <meta name="Keywords"  content="ガルパンはいいぞ", "いいぞ", "ガルパン", "共有", "ボタン", "カウンター"/>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/iiz.css" />

        <!-- JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/iiz.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-69814974-7', 'auto');
          ga('send', 'pageview');
        </script>
    </head>
    <body>
      <div id="contents" class="contents">
        <h1>「ガルパンはいいぞ」<br>をみんなで共有できる<br>Webサービスであります！</h1>
        <button id="add" type="button" class="btn btn-success" title="ガルパンはいいぞ">いいぞ</button>

        <div id="counter"></div>
        <div>
          <ul id="onecount"></ul>
        </div>
        <div id="share">
            <a class="btn btn-info" type="button" href="http://twitter.com/share?url=http://iiz.leafcenter.net/&text=「ガルパンはいいぞ」をみんなで共有できるWebサービスであります！「ガルパンはいいぞカウンター」&hashtags=ガルパンはいいぞ" onclick="window.open(this.href, '', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" title="Twitterでツイートするであります！">ツイートするであります！</a>
            <a class="btn btn-primary" type="button" href="http://www.facebook.com/share.php?u=http://iiz.leafcenter.net/" onclick="window.open(this.href,'FBwindow','width=650,height=450,menubar=no,toolbar=no,scrollbars=yes');return false;" title="Facebookでシェアするであります！">シェアするであります！</a>
        </div>
      </div>
    </body>
</html>
