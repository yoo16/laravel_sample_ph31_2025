# PHP 8.2 の環境を使用
FROM php:8.2-cli

# 必要なパッケージとPostgreSQL用の拡張をインストール
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    && docker-php-ext-install pdo_pgsql

# Composerをコピー
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# ライブラリのインストール
RUN composer install --no-dev --optimize-autoloader

# 実行権限の付与
RUN chmod -R 777 storage bootstrap/cache

# ポートを指定して起動（Renderの$PORT環境変数に対応）
CMD php artisan serve --host 0.0.0.0 --port $PORT