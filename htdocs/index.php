# http://localhost

<ul>
    <li><a href="http://example-site1.jp.localhost/">example-site1.jp.localhost</a></li>
    <li><a href="http://example-site2.jp.localhost/">example-site2.jp.localhost</a></li>
    <li><a href="http://example-site3.jp.localhost/">example-site3.jp.localhost</a></li>
</ul>
<ul>
    <li><a href="http://localhost:3000/">phpMyAdmin</a><br>
        user：root<br>pass：rootpwd@12345<br><br>
        <small>★ WPなど導入時、DBホスト名は localhost でなく <strong>php73-apache-mysql</strong> をお使いください（これは container_name なので任意のものに変更可） ★ </small>
        <br>
        <small>★ バーチャルホスト（及びサイトディレクトリ）を増やしたい時は  <strong>docker-compose.yml</strong> & <strong>.webserver/httpd.conf</strong> を編集後、コンテナを再起動してください（ docker-compose up -d --build コマンド ） ★ </small>
        <br>
        <small>★ デフォルトでdockerホストにWP.ver5.8.1がDLされますが使わないようでしたら消してしまって構いません（あくまでテストに用いるものなので） ★ </small>
    </li>
</ul>