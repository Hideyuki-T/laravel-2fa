# DB不要のDocker環境で実現するLaravel 2段階認証

# 概要
- 2段階認証だけをシンプルに実装。
- DB を使わず、固定シークレットを利用した Google Authenticator 互換の TOTP 認証を実装


# 技術一覧
![docker Badge](https://img.shields.io/badge/-Docker-%230000.svg?style=flat&logo=docker)
![nginx Badge](https://img.shields.io/badge/-Nginx-%23009639.svg?style=flat&logo=nginx)
![laravel Badge](https://img.shields.io/badge/-Laravel-%230000.svg?style=flat&logo=laravel)
![php Badge](https://img.shields.io/badge/-PHP-%237777.svg?style=flat&logo=php)
![composer Badge](https://img.shields.io/badge/-Composer-%23885630.svg?style=flat&logo=Composer)
![googleauthenticator Badge](https://img.shields.io/badge/-GoogleAuthenticator-%234289.svg?style=flat&logo=GoogleAuthenticator)

# 使用技術
- Laravel: PHP フレームワーク
- Docker & Docker Compose: 開発環境のコンテナ化
- Nginx: リバースプロキシとしてのWebサーバ
- PHP-FPM: PHP の高速実行環境
- Google2FA (pragmarx/google2fa-laravel): 2FA 認証ライブラリ


# 学んだこと
## 1.Docker の基本
#### ・コンテナのビルド、ボリュームマウント、ネットワーク設定の方法を学んだ。
#### ・Docker Compose を用いたサービス間の依存関係の管理と、環境変数の活用方法。
## 2.Laravel のセットアップ
#### ・Laravel プロジェクトの構成
#### ・コンテナ内での環境構築
#### ・権限の調整など実践的な設定を経験。
## 3.2FAの実装
#### ・Google Authenticator の仕組み（TOTP）の理解
#### ・pragmarx/google2fa-laravel ライブラリを用いた実装方法を学んだ。
#### ・ミドルウェアやコントローラーを利用した責務の分離
#### ・セッション管理の方法
## 4.GitHub へのデプロイ
#### ・プロジェクトをGitHubにアップロードし、リモートリポジトリとして管理する方法。



