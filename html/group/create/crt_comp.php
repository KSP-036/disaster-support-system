<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/group.css">
        <title>グループ作成</title>

    </head>

    <body>
    <header id="header">
        <div class="main_visual">
            <div class="acount">
                <a href="../../account.php"><img src="../../images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
            </div>
        </div>
        
        <nav>
            <ul>
                <li class="current"><a href="../../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>

        <!--メイン-->
        <main id="">

            <div class="heading"><!-- 見出し -->
                <h1>グループ作成完了</h1>
            </div>

            <div id="gp_content"><!-- コンテンツ部分 -->
                
                <h3>
                    <spam>グループを作成しました！</spam>
                </h3>

                <div class="gp_conb">
                    <button class="back_btn btn_t" type="submit" onclick="location.href='../../home.php'">ホーム画面に戻る</button>
                    <button class="crt_btn btn_t" type="submit" onclick="location.href='../../group.php'">グループ一覧へ</button>
                    <!-- 作成したグループの詳細画面へ行く(希望) -->
                </div>

            </div>
            
        </main>
        <!--/メイン-->

        <!-- フッター -->
        <footer id="footer">
            <div id="footer_nav">
                <ul>
                <li><a href="../../home.php">HOME</a></li>
                <li><a href="../../report.html">災害</a></li>
                <li><a href="../../map.php">避難所</a></li>
                <li><a href="../../group.php">グループ</a></li>
                </ul>
            </div>
            <small>
                2021 災害
            </small>
        </footer>
        <!-- /フッター -->

    </body>
</html>
