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
                <h1>グループ編集</h1>
            </div>

            <div id="gp_content"><!-- コンテンツ部分 -->
                
                <h3>
                    <spam>編集するグループ情報を入力してください</spam>
                </h3>

                <form id="ip_form" action="">
                    <table id="ip_table">
                        <tr id="ip_gpname">
                            <th>グループ名</th>

                            <td><!-- 変更するグループ名を入力 -->
                                <input class="text" type="text" name="name" placeholder="グループ名を入力" value="テストグループ" maxlength="20" required>
                            </td>
                        </tr>

                        <tr id="ip_gpmen">
                            <th>加入者メールアドレス</th>

                            <td>
                                    
                                <ul id="men_list"><!-- 加入させるメンバーのメールアドレスを入力するフォーム -->
                                    <li><input class="mail" type="email" name="member1" placeholder="メールアドレスを入力" maxlength="200"></li>
                                    <li><input class="mail" type="email" name="member2" placeholder="メールアドレスを入力" maxlength="200"></li>
                                    <li><input class="mail" type="email" name="member3" placeholder="メールアドレスを入力" maxlength="200"></li>
                                    <li><input class="mail" type="email" name="member4" placeholder="メールアドレスを入力" maxlength="200"></li>
                                    <li><input class="mail" type="email" name="member5" placeholder="メールアドレスを入力" maxlength="200"></li>
                                </ul>

                            </td>
                        </tr>
                    </table>

                    <div class="gp_conb">
                        <button class="back_btn btn_t" type="submit" onclick="history.back()" autocomplete="off">戻る</button>
                        <button class="edi_btn btn_t" type="submit" formaction="edi_check.php">変更する</button>
                    </div>

                </form>

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