# WordPress (Docker)

## Quick start (local)

1. Pastikan Docker Desktop sudah running.
2. Jalankan:

```bash
cp .env.example .env
docker compose up -d
```

3. Buka WordPress:
- `http://localhost:${WP_PORT}` (default: `http://localhost:8080`)

Kalau port bentrok, ubah `WP_PORT` di `.env` (mis. `8081`, `8090`) lalu:

```bash
docker compose up -d
```

## Akses database via DBBeaver

- **Host**: `127.0.0.1`
- **Port**: `DB_PORT` dari `.env` (default `33060`)
- **Database**: `MYSQL_DATABASE`
- **Username**: `MYSQL_USER`
- **Password**: `MYSQL_PASSWORD`

## Folder yang dikomit

- `wp-content/`: tempat custom theme/plugin kamu.
  - Theme skeleton ada di `wp-content/themes/sofie-store/`.
