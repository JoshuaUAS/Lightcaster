# EasyWorship Clone - Church Presentation Software

A comprehensive desktop presentation software for church services built with Laravel 12, NativePHP/Electron, MySQL, Tailwind CSS, and Flowbite UI components.

## 📋 Table of Contents

- [Features](#features)
- [Technology Stack](#technology-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Running the Application](#running-the-application)
- [Project Structure](#project-structure)
- [Usage Guide](#usage-guide)
- [Keyboard Shortcuts](#keyboard-shortcuts)
- [Troubleshooting](#troubleshooting)
- [License & Copyright](#license--copyright)

## ✨ Features

### Core Features (MVP)
- ✅ **Dual Window System**: Control Panel + Presentation Window
- ✅ **Song Management**: Create, edit, delete, and search worship songs
- ✅ **Bible Verse Display**: Local database with FULLTEXT search
- ✅ **Presentation Control**: Next/Previous navigation with keyboard shortcuts
- ✅ **Live Preview**: Real-time preview in control panel
- ✅ **Text Formatting**: Customizable themes with font, color, and shadow options
- ✅ **Background Images**: Support for custom backgrounds per song
- ✅ **Schedule Builder**: Create and manage service schedules
- ✅ **Settings Panel**: Configure display and application preferences

### Database Features
- Complete Bible books metadata (all 66 books)
- Sample Bible verses (KJV translation, public domain)
- Pre-loaded worship songs (classic hymns, public domain)
- Default presentation themes
- FULLTEXT search on Bible verses

## 🛠 Technology Stack

- **Framework**: Laravel 12
- **Desktop**: NativePHP/Electron
- **Database**: MySQL 8.0+
- **Frontend**:
  - Tailwind CSS
  - Flowbite UI Components
  - Alpine.js (included with Laravel)
- **PHP**: 8.4+
- **Node.js**: 18+ (for building assets)

## 📦 Requirements

Before installation, ensure you have:

1. **PHP 8.4 or higher**
   ```bash
   php --version
   ```

2. **Composer** (latest version)
   ```bash
   composer --version
   ```

3. **Node.js 18+** and NPM
   ```bash
   node --version
   npm --version
   ```

4. **MySQL 8.0 or higher**
   ```bash
   mysql --version
   ```

5. **MySQL Server running** with root access or appropriate credentials

## 🚀 Installation

### Step 1: Clone the Repository

```bash
cd /path/to/your/projects
git clone https://github.com/YourUsername/Lightcaster.git
cd Lightcaster
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

### Step 3: Install Node Dependencies

```bash
npm install
```

### Step 4: Environment Configuration

The `.env` file should already be configured, but verify these settings:

```env
APP_NAME="EasyWorship Clone"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lightcaster
DB_USERNAME=root
DB_PASSWORD=
```

**Important**: Update `DB_USERNAME` and `DB_PASSWORD` to match your MySQL credentials.

### Step 5: Generate Application Key (if not already set)

```bash
php artisan key:generate
```

## 💾 Database Setup

### Step 1: Create the Database

Open MySQL command line or phpMyAdmin and create the database:

```sql
CREATE DATABASE lightcaster CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Or use the command line:

```bash
mysql -u root -p -e "CREATE DATABASE lightcaster CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

### Step 2: Run Migrations

```bash
php artisan migrate
```

This will create all the required tables:
- `bible_books` - Metadata for all 66 Bible books
- `bible_verses` - Bible verse content with FULLTEXT index
- `songs` - Worship songs with structured lyrics
- `themes` - Text formatting presets
- `backgrounds` - Background image metadata
- `schedules` - Service planning data
- `settings` - Application settings
- `users` - User accounts
- Laravel system tables (migrations, cache, sessions, etc.)

### Step 3: Seed the Database

This is **critical** - it populates the database with sample data:

```bash
php artisan db:seed
```

This will create:
- ✅ All 66 Bible books with accurate metadata
- ✅ 4 default presentation themes
- ✅ 3 placeholder backgrounds
- ✅ 5 classic hymns with complete lyrics (public domain)
- ✅ ~53 Bible verses in KJV translation (public domain)
  - Complete Genesis 1
  - Complete Psalm 23
  - John 1:1-14 and John 3:16-17
  - Popular memory verses

**To reset and reseed everything:**

```bash
php artisan migrate:fresh --seed
```

⚠️ **Warning**: This deletes all data and recreates tables!

## 🖥 Running the Application

### Development Mode (Web Browser)

1. **Build frontend assets:**
   ```bash
   npm run build
   ```

2. **Start the Laravel development server:**
   ```bash
   php artisan serve
   ```

3. **Open your browser:**
   ```
   http://localhost:8000
   ```

### Desktop Mode (NativePHP/Electron)

1. **Build assets for production:**
   ```bash
   npm run build
   ```

2. **Install NativePHP:**
   ```bash
   php artisan native:install
   ```

3. **Run as desktop app:**
   ```bash
   php artisan native:serve
   ```

   This will open two windows:
   - **Control Panel** (1400x900) - Main interface for operators
   - **Presentation Window** (fullscreen) - Output for projector/screen

## 📁 Project Structure

```
Lightcaster/
├── app/
│   ├── Http/Controllers/      # All controllers
│   │   ├── DashboardController.php
│   │   ├── SongController.php
│   │   ├── BibleController.php
│   │   ├── PresentationController.php
│   │   ├── ScheduleController.php
│   │   ├── BackgroundController.php
│   │   ├── ThemeController.php
│   │   └── SettingController.php
│   ├── Models/                # Eloquent models
│   │   ├── Song.php
│   │   ├── BibleVerse.php
│   │   ├── BibleBook.php
│   │   ├── Background.php
│   │   ├── Theme.php
│   │   ├── Schedule.php
│   │   └── Setting.php
│   └── Services/              # Business logic
│       ├── BibleService.php
│       └── PresentationService.php
├── database/
│   ├── migrations/            # Database schema
│   └── seeders/              # Sample data
│       ├── BibleBooksSeeder.php
│       ├── BibleVersesSeeder.php
│       ├── SongsSeeder.php
│       ├── ThemesSeeder.php
│       └── BackgroundsSeeder.php
├── resources/
│   ├── views/                # Blade templates (to be created)
│   ├── css/app.css          # Tailwind CSS + custom styles
│   └── js/app.js            # Flowbite + keyboard shortcuts
├── routes/
│   └── web.php              # Application routes
├── public/                   # Public assets
└── storage/
    └── app/public/
        └── backgrounds/      # Background images
```

## 📖 Usage Guide

### Managing Songs

1. Navigate to **Songs** in the sidebar
2. Click **Add New Song**
3. Enter song details:
   - Title
   - Author (optional)
   - Category (optional)
   - Lyrics (structured as verses/chorus)
   - Select background and theme
4. Click **Save**

### Searching Bible Verses

1. Navigate to **Bible** in the sidebar
2. Enter search term (e.g., "love", "faith") or reference (e.g., "John 3:16")
3. Select translation (KJV available by default)
4. Click **Search**
5. Click **Load to Presentation** to display verses

### Creating a Service Schedule

1. Navigate to **Schedule** in the sidebar
2. Click **New Schedule**
3. Enter schedule name and date
4. Drag and drop songs/verses into the schedule
5. Reorder items as needed
6. Click **Save**

### Presenting

1. Click **Start Presentation** (F5) to open presentation window
2. Use keyboard shortcuts to navigate:
   - **Spacebar** or **Right Arrow**: Next slide
   - **Backspace** or **Left Arrow**: Previous slide
   - **Escape**: Clear/blank screen
3. Preview pane shows current slide
4. Slide counter shows position (e.g., "3 of 12")

### Managing Themes

1. Navigate to **Themes** in the sidebar
2. Create new themes with:
   - Font family, size, color
   - Background color
   - Text alignment
   - Shadow and outline effects
3. Apply themes to songs

### Managing Backgrounds

1. Navigate to **Media** in the sidebar
2. Upload background images (JPG, PNG)
3. Images stored in `storage/app/public/backgrounds`
4. Assign backgrounds to songs

## ⌨️ Keyboard Shortcuts

### During Presentation

| Shortcut | Action |
|----------|--------|
| `F5` | Start/Resume Presentation |
| `Spacebar` | Next Slide |
| `Right Arrow` | Next Slide |
| `Backspace` | Previous Slide |
| `Left Arrow` | Previous Slide |
| `Escape` | Clear/Blank Screen |

### Control Panel

| Shortcut | Action |
|----------|--------|
| `Ctrl+N` | New Song |
| `Ctrl+F` | Search |
| `Ctrl+S` | Save |

## 🐛 Troubleshooting

### Database Connection Failed

**Problem**: Can't connect to MySQL database

**Solutions**:
1. Verify MySQL is running:
   ```bash
   sudo service mysql status  # Linux
   # or
   mysql.server status        # macOS
   ```

2. Check credentials in `.env` file
3. Ensure database exists:
   ```bash
   mysql -u root -p -e "SHOW DATABASES LIKE 'lightcaster';"
   ```

### Migrations Failed

**Problem**: Error running `php artisan migrate`

**Solutions**:
1. Check MySQL version (must be 8.0+):
   ```bash
   mysql --version
   ```

2. Drop and recreate database:
   ```bash
   mysql -u root -p -e "DROP DATABASE IF EXISTS lightcaster; CREATE DATABASE lightcaster CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
   ```

3. Run migrations again:
   ```bash
   php artisan migrate
   ```

### FULLTEXT Search Not Working

**Problem**: Bible verse search returns no results

**Solutions**:
1. Ensure you've run the seeders:
   ```bash
   php artisan db:seed --class=BibleVersesSeeder
   ```

2. Verify FULLTEXT index exists:
   ```sql
   SHOW INDEX FROM bible_verses WHERE Key_name = 'text';
   ```

3. Check MySQL InnoDB FULLTEXT settings (minimum word length):
   ```sql
   SHOW VARIABLES LIKE 'innodb_ft_min_token_size';
   ```

### NativePHP Window Issues

**Problem**: Desktop windows not opening correctly

**Solutions**:
1. Rebuild native app:
   ```bash
   php artisan native:install --force
   ```

2. Clear cache:
   ```bash
   php artisan cache:clear
   php artisan config:clear
   ```

### Missing Styles (Tailwind)

**Problem**: Application looks unstyled

**Solutions**:
1. Build assets:
   ```bash
   npm run build
   ```

2. For development with auto-reload:
   ```bash
   npm run dev
   ```

3. Clear browser cache and refresh

### Seeder Issues

**Problem**: Seeders fail or create incomplete data

**Solutions**:
1. Fresh migration and seed:
   ```bash
   php artisan migrate:fresh --seed
   ```

2. Run specific seeder:
   ```bash
   php artisan db:seed --class=BibleVersesSeeder
   ```

## 📜 License & Copyright

### Application Code
This application code is provided as-is for educational and church use.

### Content Licensing

#### Bible Verses
- **KJV (King James Version)**: Public domain
- **Modern translations** (NIV, ESV, NLT, etc.): **REQUIRE LICENSING**
  - Contact: Biblica, Crossway, Tyndale
  - You must obtain permission before adding these translations

#### Worship Songs
- **Included songs**: Public domain hymns (pre-1928)
- **Contemporary songs**: **REQUIRE CCLI OR OTHER LICENSING**
  - Get CCLI license: https://www.ccli.com
  - Songs like "10,000 Reasons", "Way Maker", "What A Beautiful Name" need licensing
  - Add licensed songs through the admin interface

### Important Copyright Notice

⚠️ **You are responsible for obtaining proper licensing for:**
1. Modern Bible translations (NIV, ESV, NLT, etc.)
2. Contemporary worship songs (anything under copyright)
3. Background images (use licensed or royalty-free images)

**Do not use copyrighted content without permission!**

## 🎯 Next Steps

### Immediate Actions
1. ✅ Obtain CCLI license for contemporary worship songs
2. ✅ Add your licensed songs through the application
3. ✅ Obtain Bible translation licenses if you want NIV/ESV
4. ✅ Add custom background images
5. ✅ Create your first service schedule

### Development Roadmap

#### Phase 2 (Enhanced Features)
- Complete UI implementation with Flowbite components
- Advanced schedule builder with drag-and-drop
- Multiple Bible translation support
- Song categories and collections
- Verse ranges display
- Custom text formatting per slide

#### Phase 3 (Polish)
- Export/Import schedules
- Dark mode toggle
- Media library with better image management
- Presentation history
- Advanced search filters
- Custom keyboard shortcut configuration

## 🤝 Support

For issues and questions:
1. Check the [Troubleshooting](#troubleshooting) section
2. Review Laravel documentation: https://laravel.com/docs
3. Review NativePHP documentation: https://nativephp.com/docs
4. Review Flowbite documentation: https://flowbite.com/docs

## 📝 Version

- **Current Version**: 1.0.0-alpha
- **Laravel**: 12.x
- **NativePHP**: 1.3.x
- **PHP**: 8.4.14

---

Built with ❤️ for church worship teams.

**Remember**: Always respect copyright and obtain proper licensing for Bible translations and contemporary worship songs!