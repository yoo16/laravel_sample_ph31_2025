# PHP 8.4 の環境を使用
FROM php:8.4-cli

# 必要なパッケージとPostgreSQL用の拡張をインストール
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    && docker-php-ext-install pdo_pgsql

# Composerをコピー
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# 1. ライブラリのインストール (ビルド時に実行)
RUN composer install --no-dev --optimize-autoloader

# 2. 実行権限の付与
RUN chmod -R 777 storage bootstrap/cache

# 3. 最適化 (ビルド時に実行)
RUN php artisan optimize

# 4. 起動時にマイグレーションを実行してからサーバーを立てる
CMD php artisan migrate --force && php artisan serve --host 0.0.0.0 --port $PORT