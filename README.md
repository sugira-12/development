# Smart Student Visitor Management System (SSVMS) - Internet Deployment Version

## Overview
This project is prepared for deployment on internet hosting services (shared hosting, VPS, cloud).

## Setup Instructions
1. Upload all files to your web hosting root directory or subfolder.
2. Import the database schema from `database/init_db.sql` into your MySQL server.
3. Edit `.htaccess` or server config if needed to enable pretty URLs.
4. Set environment variables or edit `includes/config.php` to match your remote database credentials:
   - `DB_HOST`
   - `DB_NAME`
   - `DB_USER`
   - `DB_PASS`
5. Ensure PHP sessions are working on your server.
6. Access `register_visitor.php` to register visitors and `view_visitors.php` to view records.
7. Use `chatbot_ui.php` for the chatbot assistant interface.

## Face Detection
- face-api.js library is loaded from CDN.
- Pre-trained models are expected to be in `assets/models` directory.
- Upload the models folder to your server for face detection to work.

## Security Tips
- Use HTTPS on your hosting provider for secure data transfer.
- Consider setting permissions and access controls on your directories.
- Sanitize and validate all inputs for security.

## Extending AI Features
- You can connect `categorize_reason.php` and `chatbot.php` to cloud AI APIs like OpenAI or others.
- Replace simple keyword logic with advanced ML models or external APIs.

## Contact
For help or feature requests, reach out to your developer or community resources.
