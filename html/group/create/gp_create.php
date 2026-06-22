<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/group.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
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
        <main>

            <div class="heading">
                <h1>グループ作成</h1>
            </div>

            <div id="gp_content">
                
                <h3>
                    <spam>作成するグループ情報を入力してください</spam>
                </h3>

                <form id="ip_form" method='POST' action="crt_check.php">
                    <table id="ip_table">
                        <tr id="ip_gpname">
                            <th>グループ名</th>

                            <td><!-- 作成したいグループ名を入力 -->
                                <input class="cp_iptxt gp_name" type="text" name="name" placeholder="グループ名を入力" maxlength="20" required>
                            </td>
                        </tr>

                        <tr id="ip_gpmen">
                            <th>加入者メールアドレス</th>

                            <td>
                                    
                                <ul id="men_list"><!-- 加入させるメンバーのメールアドレスを入力するフォーム -->
                                    <li><input class="cp_iptxt" type="email" name="1" placeholder="メールアドレスを入力" maxlength="50" required></li>
                                    <li><input class="cp_iptxt" type="email" name="2" placeholder="メールアドレスを入力" maxlength="50"></li>
                                    <li><input class="cp_iptxt" type="email" name="3" placeholder="メールアドレスを入力" maxlength="50"></li>
                                    <li><input class="cp_iptxt" type="email" name="4" placeholder="メールアドレスを入力" maxlength="50"></li>
                                    <li><input class="cp_iptxt" type="email" name="5" placeholder="メールアドレスを入力" maxlength="50"></li>
                                    <li><input class="cp_iptxt" type="email" name="6" placeholder="メールアドレスを入力" maxlength="50"></li>
                                    <li><input class="cp_iptxt" type="email" name="7" placeholder="メールアドレスを入力" maxlength="50"></li>
                                    <li><input class="cp_iptxt" type="email" name="8" placeholder="メールアドレスを入力" maxlength="50"></li>

                                </ul>

                            </td>
                        </tr>
                    </table>

                    <div class="gp_conb">
                        <button class="back_btn btn_t" type="button" onclick="location.href='../../group.php'" autocomplete="on">戻る</button>
                        <button class="crt_btn btn_t" type="submit" formaction="crt_check.php">作成</button>
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