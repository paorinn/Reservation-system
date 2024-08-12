<h1>Rese(予約システム)</h1>
<h2>環境構築</h2>
<h3>Dockerビルド</h3>
<ol>
  <li><pre>git clone git@github.com:coachtech-material/laravel-docker-template.git</pre>でクローン</li>
  <li><pre>mv laravel-docker-template Reservation-system</pre>で名前を変更</li>
  <li>DockerDesktopアプリを立ち上げる</li>
  <li><pre>docker-compose up -d --build</pre></li>
</ol>

<h3>Laravel環境構築</h3>
<ol>
  <li><pre>docker-compose exec php bash</li>
  <li><pre>composer install</li>
  <li>「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
  <li>.envに以下の環境変数を追加
    <pre>
      DB_CONNECTION=mysql
      DB_HOST=mysql
      DB_PORT=3306
      DB_DATABASE=laravel_db
      DB_USERNAME=laravel_user
      DB_PASSWORD=laravel_pass</pre>
  <li>アプリケーションキーの作成</li>
  <pre>php artisan key:generate</pre>
<li>マイグレーションの実行</li>
<pre>php artisan migrate</pre>
<li>シーディングの実行</li>
<pre>php artisan db:seed</pre>

</ol>
