<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/group.css">
        <title>グループ編集</title>

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
        <main>

            <div class="heading"><!-- 見出し -->
                <h1>グループ編集確認</h1>
            </div>

            <div id="gp_content"><!-- コンテンツ -->
                
                <h3>
                    <spam>この情報で編集を完了します。よろしいですか？</spam>
                </h3>

                <div id="ip_form">
                    <table id="ip_table">
                        <tr id="ip_gpname">
                            <th>グループ名</th>

                            <td>
                                <span>テストグループ</span><!-- edit.htmlで入力したグループ名をここに挿入する -->
                            </td>
                        </tr>

                        <tr id="ip_gpmen">
                            <th>メンバー</th>

                            <td>
                                        
                                <ul id="men_list"><!-- edit.htmlで入力されたemailに対応したアカウント名を表示させる(希望) -->
                                    <li><span>太郎</span></li>
                                    <li><span>次郎</span></li>
                                    <li><span>三郎</span></li>
                                    <li><span>四郎</span></li>
                                    <li><span>五郎</span></li>
                                </ul>

                            </td>
                        </tr>
                    </table>

                    <div class="gp_conb">
                        <button class="back_btn btn_t" type="submit" onclick="history.back()" autocomplete="off">戻る</button>
                        <button class="edi_btn btn_t" type="submit" onclick="location.href='edi_comp.php'">編集する</button>
                    </div>
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