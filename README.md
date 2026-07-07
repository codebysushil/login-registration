## ***`Project Auth`***

A `PHP` project on How to working a login registration authentication system with `SQL` and `SQLite3` database using `PDO`.

---

### Requirement 
1. PHP 8.3+ or later 
2. CSS/Lesscss
3. JavaScript
4. SQL/SQLite3
5. composer v2.10

---

### Features
- [x] `CSRF` protection token
- [x] Session and Cookie 
- [x] Password hashing with `bcrypt` using `password_hash()` & `password_verify()` not by `md5()` or `sha1()`.
- [x] OTP Verification
- [x] Caching for fast `view` rendering
- [x] Logs files (store errors files)

---

### Setup
```bash
git clone https://github.com/codebysushil/login-registration.git
cd login-registration
composer setup
```

### Start & run

```bash
composer serve
```
---

### Tables
Create `Users` table.

```sql
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE COLLATE NOCASE,
    password_hash TEXT NOT NULL,
    is_active INTEGER NOT NULL DEFAULT 1,
    email_verified INTEGER NOT NULL DEFAULT 0,
    last_login_at TEXT,
    created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CHECK (is_active IN (0, 1)),
    CHECK (email_verified IN (0, 1)),
    CHECK (length(name) BETWEEN 1 AND 100)
);
```
