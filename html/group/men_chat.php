<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/group.css">
        <title>個人チャット</title>

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
                    <span>〇〇</span><!-- ここにチャットする相手を入力する -->
                    <span>さんとのチャット</span>
                </h3>

                <div id="ct_cont">

                    <div class="line-bc"><!-- 会話部分 -->

                        
                        <div class="balloon6"><!-- 相手チャット -->
                            <div class="chatting">
                                <div class="says">
                                    <p>左ふきだし文</p>
                                </div>
                            </div>
                        </div>

                      
                        <div class="mycomment"><!-- 自分チャット -->
                            <p><!-- ここに自分のチャットを入力する -->
                                右ふきだし文
                            </p>
                        </div>

                        <div class="balloon6">
                            <div class="chatting">
                                <div class="says">
                                    <p>左ふきだし文</p>
                                </div>
                            </div>
                        </div>
                        
                    </div><!--/①LINE会話終了-->
    
                    <div id="ct_input">
                        <form id="ct_ipform" action="men_chat.html">
                            <input type="text" name="chattext" placeholder="チャットを入力してください"　maxlength="200"></input>
                            <button class="ct_send" type="submit">送信</button>
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