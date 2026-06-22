<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/group.css">
        <title>掲示板</title>

    </head>

    <body>
    <header id="header">
        <div class="main_visual">
            <div class="acount">
                <a href="../account.php"><img src="../images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
            </div>
        </div>
        
        <nav>
            <ul>
                <li class="current"><a href="../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>
    
        <!--メイン-->
        <main>

            <div class="heading"><!-- 見出し -->
                <h1>個人チャット</h1>
            </div>

            <div id="gp_content"><!-- コンテンツ部分 -->
                
                <h3>
                    <span>掲示板</span><!-- グループ内での掲示板の場合「(グループ名)+の掲示板」と記入 -->
                </h3>

                <div id="bb_cont">

                    <div id="bb_history">

                        <div class="bbhis_text"><!-- 1スレッド -->
                            <p>
                                <span class="name">風吹けば名無し</span><!-- 名前 -->
                                <span class="days">2021/12/10 12:30:44</span><!-- 日付 -->
                            </p>
                            <span class="text">これこれこういう情報が出回っているらしい</span><!-- 投稿内容 -->
                        </div>

                        <div class="bbhis_text">
                            <p>
                                <span class="name">風吹けば名無し</span>
                                <span class="days">2021/12/10 12:30:44</span>
                            </p>
                            <span class="text">これこれこういう情報が出回っているらしい</span>
                        </div>

                        <div class="bbhis_text">
                            <p>
                                <span class="name">風吹けば名無し</span>
                                <span class="days">2021/12/10 12:30:44</span>
                            </p>
                            <span class="text">これこれこういう情報が出回っているらしい</span>
                        </div>
                    </div>
    
                    <div id="bb_input">
                        <form id="bb_ipform" action="men_chat.html">
                            <p>
                                <input class="bb_name" type="text" name="bbname" placeholder="ハンドルネームを入力してください" maxlength="20"><!-- 入力していなければ「名無し」に指定 -->
                            </p>
                            <p>
                                <textarea class="bb_text" name="bbname" placeholder="チャットを入力してください" maxlength="200" required></textarea>
                                <button class="bb_send" type="submit" onclick="location.href='送信'">送信</button>
                            </p>
                        </form>
                    </div>

                </div>

            </div>
            
        </main>
        <!--/メイン-->

        <!-- フッター -->
        <footer id="footer">
            <div id="footer_nav">
                <ul>
                    <li><a href="../home.php">HOME</a></li>
                    <li><a href="../report.html">災害</a></li>
                    <li><a href="../map.php">避難所</a></li>
                    <li><a href="../group.php">グループ</a></li>
                </ul>
            </div>

            <small>
                2021 災害
            </small>
        </footer>
        <!-- /フッター -->

    </body>
</html>