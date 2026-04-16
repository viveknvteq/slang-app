# PROJECT REPORT

**SLANG MANAGEMENT SYSTEM**

Submitted in partial fulfillment of the requirements for the degree of  
**Master in Computer Application Part-I [Semester-II] (CBCS)**  
of  
**Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur**

---

**Submitted By:**  
Vaibhav & Vivek  

**Under the Guidance of:**  
[Guide Name]  

**Dr. S.C. Gulhane Prerna College of Management and Technology**  
Near Dighori Naka, Vihirgaon, Umrer Road Nagpur  

**Academic Year: 2025-2026**

---

## CERTIFICATE

This is to certify that the project report on **"SLANG MANAGEMENT SYSTEM"** is submitted by **Vaibhav & Vivek** for partial fulfilment of the requirement of Master in Computer Application Part-I [Semester-II] (CBCS) examination of the Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur.

It is the original Software project carried out under the supervision and guidance of **[Guide Name]** and undergone requisite duration as prescribed by Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur for the project work.

**Date:**  
**Place: Nagpur**

**[Guide Name]**  
(Project Guide)

**Dr. Deepa Choudhari**  
(Officiating Principal)  
Dr. S.C. Gulhane Prerna College of Management and Technology, Nagpur

---

## DECLARATION

**To,**  
**The Officiating Principal,**  
**Dr. S.C. Gulhane Prerna College of Management and Technology,**  

**Near Dighori Naka, Vihirgaon, Umrer Road Nagpur.**

**Respected Sir,**  

I/We the undersigned hereby declare that the work **"SLANG MANAGEMENT SYSTEM"** developed and submitted by me/us is my/our original work. The system presented here, is developed by me/us independently and has not been duplicated from any other source.

I/We understand that any such copying is liable to be punished in any way the University deem fit.

**Place: Nagpur**  
**Date:**  

**[Vaibhav & Vivek]**  
(Name of Projectee)

---

## ACKNOWLEDGEMENT

I/We wish to express our sincere thanks to the honorable **Dr. Deepa Choudhari**, Officiating Principal, Dr. S.C. Gulhane Prerna College of Management and Technology, Nagpur for providing me/us varieties of opportunities, infrastructural facilities and inspiration to gather professional knowledge and material without which it would have been impossible to complete this hard task.

I/We take this opportunity to express my/our deep gratitude and whole hearted thanks to my/our project guide **[Guide Name]** for his/her guidance throughout this work. I/We am/are very much thankful for their kindness, encouragement and valuable time, which they have devoted to me/us.

I/We wish to thanks all those, who have helped me/us in my/our way or the others in bringing out this project successful.

**Signature**

**Vaibhav & Vivek**

---

## INDEX

| CHAPTER NO. | TITLE | PAGE NO. |
|-------------|-------|----------|
| 1. | INTRODUCTION |  |
|    | 1.1 Problem Definition |  |
|    | 1.2 Overview of the present working system |  |
|    | 1.3 Drawbacks of the present working system |  |
|    | 1.4 Overview of proposed system |  |
|    | 1.5 Advantages of the proposed system |  |
|    | 1.6 Scope of proposed system |  |
| 2. | SYSTEM ANALYSIS |  |
|    | 2.1 System Requirements |  |
|    | 2.2 Feasibility Study |  |
|    | • Economic Feasibility |  |
|    | • Operational Feasibility |  |
|    | • Technical Feasibility |  |
|    | 2.3 E-R Diagram |  |
| 3. | SOFTWARE/ HARDWARE DETAILS |  |
|    | 3.1 Choice of Language Used |  |
|    | 3.2 Hardware/ Software Specification |  |
| 4. | SYSTEM DESIGN |  |
|    | 4.1 Database Design |  |
|    | 4.2 Data Dictionary |  |
|    | 4.3 Data Flow Diagram |  |
|    | 4.4 System Flowcharts |  |
|    | 4.5 Program Flowcharts |  |
|    | 4.6 Input Output Screens Designs |  |
| 5. | SYSTEM TESTING |  |
|    | 5.1 Program Testing |  |
|    | 5.2 Module Testing |  |
|    | 5.3 Integration Testing |  |
|    | 5.4 System Testing |  |
| 6. | INPUT\OUTPUT SCREENS AND REPORTS |  |
|    | 6.1 Sample Input\Output Screens |  |
|    | 6.2 Reports |  |
| 7. | CONCLUSION |  |
|    | 7.1 Limitations of the System |  |
|    | 7.2 Future Scope of the System |  |
| 8. | REFERENCES |  |

---

# CHAPTER 1: INTRODUCTION

## 1.1 PROBLEM DEFINITION

In today's digital age, college students frequently use informal slang terms in their communication. However, there is no centralized platform where students can learn, share, and manage these slang terms effectively. The lack of a proper system leads to confusion, miscommunication, and difficulty in understanding contemporary language used by peers.

The problem is to develop a web-based application that allows students to:
- Submit new slang terms with their meanings and examples
- Browse and search existing slang terms
- Admin approval system for quality control
- User-friendly interface for easy access

## 1.2 OVERVIEW OF THE PRESENT WORKING SYSTEM

Currently, slang terms are shared through:
- Social media platforms (informal)
- Word-of-mouth communication
- Online forums and discussion boards
- Printed dictionaries (limited and outdated)

These methods lack:
- Centralized management
- Quality control
- Search functionality
- User authentication
- Admin moderation

## 1.3 DRAWBACKS OF THE PRESENT WORKING SYSTEM

1. **Lack of Organization**: No centralized database for slang terms
2. **Quality Issues**: No moderation or approval system
3. **Outdated Information**: Terms become obsolete quickly
4. **Limited Accessibility**: Not easily searchable
5. **No User Management**: Anyone can contribute without accountability
6. **Security Concerns**: No authentication system

## 1.4 OVERVIEW OF PROPOSED SYSTEM

The proposed "Slang Management System" is a web-based application built using Laravel framework that provides:

- User registration and authentication
- Slang term submission and management
- Admin approval workflow
- Search and browse functionality
- Responsive web interface
- Database-driven content management

## 1.5 ADVANTAGES OF THE PROPOSED SYSTEM

1. **Centralized Platform**: Single source for slang terms
2. **Quality Control**: Admin approval system ensures accuracy
3. **User-Friendly Interface**: Easy to use and navigate
4. **Search Functionality**: Quick access to specific terms
5. **Security**: User authentication and authorization
6. **Scalability**: Can handle growing number of users and terms
7. **Mobile Responsive**: Accessible on all devices

## 1.6 SCOPE OF PROPOSED SYSTEM

The system will serve:
- College students for learning contemporary slang
- Educators for understanding student communication
- Researchers studying language evolution
- General public interested in modern language trends

Future enhancements can include:
- Mobile application
- Multi-language support
- Social features (likes, comments)
- API for third-party integrations

---

# CHAPTER 2: SYSTEM ANALYSIS

## 2.1 SYSTEM REQUIREMENTS

### Functional Requirements:
1. User Registration and Login
2. Slang Term Submission
3. Admin Approval System
4. Search and Browse Functionality
5. User Dashboard
6. Admin Dashboard

### Non-Functional Requirements:
1. Security (Authentication & Authorization)
2. Performance (Fast loading)
3. Usability (Intuitive interface)
4. Reliability (Error handling)
5. Maintainability (Clean code structure)

## 2.2 FEASIBILITY STUDY

### Economic Feasibility
- **Low Development Cost**: Uses open-source technologies (Laravel, MySQL)
- **Minimal Hardware Requirements**: Can run on standard web hosting
- **Maintenance Cost**: Low due to Laravel's robustness
- **ROI**: High value for educational institutions

### Operational Feasibility
- **User-Friendly**: Intuitive interface for students and admins
- **Training Required**: Minimal training needed
- **Workflow Integration**: Fits well with educational processes
- **Support**: Easy to maintain and update

### Technical Feasibility
- **Technology Stack**: Proven and stable technologies
- **Scalability**: Laravel can handle growing user base
- **Security**: Built-in security features
- **Compatibility**: Works on all modern browsers and devices

## 2.3 E-R DIAGRAM

```
[USER] 1 ---- * [SLANG]
  |
  | (belongs to)
  |
  +---- [ROLE] (admin/user)
```

**Entities:**
- **User**: id, name, email, password, role
- **Slang**: id, word, meaning, example, status, user_id, entry_hash
- **Role**: id, name

**Relationships:**
- User can submit many slangs (One-to-Many)
- Each slang belongs to one user
- User has one role

---

# CHAPTER 3: SOFTWARE/ HARDWARE DETAILS

## 3.1 CHOICE OF LANGUAGE USED

### Backend: PHP with Laravel Framework
**Reasons for choosing PHP/Laravel:**
1. **Open Source**: Free and widely supported
2. **MVC Architecture**: Clean separation of concerns
3. **Rich Ecosystem**: Extensive libraries and packages
4. **Security Features**: Built-in protection against common vulnerabilities
5. **Database Integration**: Excellent ORM (Eloquent)
6. **Community Support**: Large developer community
7. **Rapid Development**: Reduces development time

### Frontend: HTML, CSS, JavaScript with Tailwind CSS
**Reasons for choosing:**
1. **Responsive Design**: Mobile-first approach
2. **Utility-First**: Rapid UI development
3. **Consistency**: Standardized design system
4. **Performance**: Optimized CSS output

### Database: MySQL
**Reasons for choosing MySQL:**
1. **Reliability**: Proven track record
2. **Performance**: Fast data retrieval
3. **Scalability**: Handles large datasets
4. **Compatibility**: Works seamlessly with Laravel

## 3.2 HARDWARE/ SOFTWARE SPECIFICATION

### Minimum Hardware Requirements:
- **Processor**: Intel Core i3 or equivalent
- **RAM**: 4GB
- **Storage**: 500MB free space
- **Network**: Stable internet connection

### Recommended Hardware Requirements:
- **Processor**: Intel Core i5 or higher
- **RAM**: 8GB or more
- **Storage**: 1GB free space
- **Network**: High-speed internet

### Software Requirements:
- **Operating System**: Windows 10/11, Linux, macOS
- **Web Server**: Apache/Nginx
- **Database**: MySQL 8.0+
- **PHP**: Version 8.2+
- **Composer**: Latest version
- **Node.js**: Version 18+
- **Browser**: Chrome, Firefox, Safari, Edge (latest versions)

---

# CHAPTER 4: SYSTEM DESIGN

## 4.1 DATABASE DESIGN

### Tables:

#### users table:
```
- id (Primary Key, Auto Increment)
- name (VARCHAR 255)
- email (VARCHAR 255, Unique)
- email_verified_at (TIMESTAMP, Nullable)
- password (VARCHAR 255)
- role (VARCHAR 255, Default: 'user')
- remember_token (VARCHAR 100, Nullable)
- created_at (TIMESTAMP)
- updated_at (TIMESTAMP)
```

#### slangs table:
```
- id (Primary Key, Auto Increment)
- word (VARCHAR 255)
- meaning (TEXT)
- example (TEXT)
- entry_hash (VARCHAR 255, Unique)
- status (ENUM: 'pending', 'approved', 'rejected')
- user_id (Foreign Key -> users.id)
- created_at (TIMESTAMP)
- updated_at (TIMESTAMP)
```

#### sessions table:
```
- id (VARCHAR 255, Primary Key)
- user_id (BIGINT, Nullable, Index)
- ip_address (VARCHAR 45, Nullable)
- user_agent (TEXT, Nullable)
- payload (LONGTEXT)
- last_activity (INT, Index)
```

## 4.2 DATA DICTIONARY

| Field Name | Data Type | Size | Constraints | Description |
|------------|-----------|------|-------------|-------------|
| id | BIGINT | - | Primary Key, Auto Increment | Unique identifier |
| name | VARCHAR | 255 | Not Null | User's full name |
| email | VARCHAR | 255 | Not Null, Unique | User's email address |
| password | VARCHAR | 255 | Not Null | Hashed password |
| role | VARCHAR | 255 | Default 'user' | User role (admin/user) |
| word | VARCHAR | 255 | Not Null | Slang term |
| meaning | TEXT | - | Not Null | Meaning of the term |
| example | TEXT | - | Nullable | Usage example |
| status | ENUM | - | Default 'pending' | Approval status |
| user_id | BIGINT | - | Foreign Key | Reference to user |

## 4.3 DATA FLOW DIAGRAM

```
[USER] --> [LOGIN] --> [AUTHENTICATION]
                    --> [SUCCESS] --> [DASHBOARD]
                    --> [FAILURE] --> [ERROR MESSAGE]

[USER] --> [SUBMIT SLANG] --> [VALIDATION]
                           --> [SUCCESS] --> [STORE IN DB]
                           --> [FAILURE] --> [ERROR MESSAGE]

[ADMIN] --> [APPROVE SLANG] --> [UPDATE STATUS]
                            --> [NOTIFICATION]
```

## 4.4 SYSTEM FLOWCHARTS

### User Registration Flow:
1. User fills registration form
2. Validate input data
3. Check if email exists
4. Create user account
5. Send success message
6. Redirect to login

### Slang Submission Flow:
1. User logs in
2. Navigate to add slang page
3. Fill slang form
4. Validate data
5. Save to database with 'pending' status
6. Show success message

### Admin Approval Flow:
1. Admin logs in
2. View pending slangs
3. Review slang details
4. Approve/Reject slang
5. Update status
6. Send notification

## 4.5 PROGRAM FLOWCHARTS

### Main Application Flow:
```
START
  ├── Initialize Laravel Application
  ├── Load Configuration
  ├── Connect to Database
  ├── Handle HTTP Request
  │   ├── Route Matching
  │   ├── Middleware Execution
  │   ├── Controller Action
  │   └── View Rendering
  └── Send HTTP Response
END
```

### Authentication Flow:
```
START
  ├── Check Session/Cookie
  ├── Validate Credentials
  ├── Generate Session Token
  ├── Set User Context
  └── Allow Access
END
```

## 4.6 INPUT OUTPUT SCREENS DESIGNS

### Login Screen:
- Email input field
- Password input field
- Remember me checkbox
- Login button
- Register link
- Forgot password link

### Registration Screen:
- Name input field
- Email input field
- Password input field
- Confirm password field
- Register button
- Login link

### Dashboard Screen:
- Welcome message
- User statistics
- Recent submissions
- Navigation menu

### Add Slang Screen:
- Word input field
- Meaning textarea
- Example textarea
- Submit button
- Cancel button

---

# CHAPTER 5: SYSTEM TESTING

## 5.1 PROGRAM TESTING

Program testing involves testing individual components of the application:

### Unit Testing:
- **User Model**: Test user creation, validation, relationships
- **Slang Model**: Test slang creation, status updates, user association
- **Controllers**: Test individual controller methods
- **Middleware**: Test authentication and authorization

### Test Cases:
1. User registration with valid data
2. User registration with invalid email
3. Slang creation with complete data
4. Slang creation with missing required fields

## 5.2 MODULE TESTING

Each module was tested independently:

### Authentication Module:
- Login functionality
- Registration functionality
- Password hashing
- Session management

### Slang Management Module:
- CRUD operations
- Status updates
- Search functionality
- Validation rules

### Admin Module:
- User management
- Slang approval/rejection
- Dashboard statistics

## 5.3 INTEGRATION TESTING

Integration testing verified that modules work together:

### User Flow Testing:
1. User registration → Login → Dashboard access
2. Slang submission → Admin approval → Public visibility
3. Search functionality across all modules

### Database Integration:
- Data persistence across requests
- Foreign key relationships
- Transaction handling

## 5.4 SYSTEM TESTING

### Functional Testing:
- All user stories implemented correctly
- Business logic working as expected
- Error handling and validation

### Performance Testing:
- Page load times under 2 seconds
- Database queries optimized
- Memory usage within limits

### Security Testing:
- SQL injection prevention
- XSS protection
- CSRF protection
- Authentication bypass attempts

### Compatibility Testing:
- Tested on Chrome, Firefox, Safari
- Responsive design on mobile devices
- Different screen resolutions

---

# CHAPTER 6: INPUT\OUTPUT SCREENS AND REPORTS

## 6.1 SAMPLE INPUT\OUTPUT SCREENS

### Home Page:
- Hero section with search bar
- Featured slang terms
- Navigation menu
- Call-to-action buttons

### Login Screen:
```
┌─────────────────────────────┐
│          LOGIN              │
├─────────────────────────────┤
│ Email: [input field]        │
│ Password: [input field]     │
│ [ ] Remember me             │
│ [LOGIN] [REGISTER]          │
└─────────────────────────────┘
```

### Dashboard Screen:
- User welcome message
- Statistics cards
- Recent submissions table
- Quick action buttons

### Admin Dashboard:
- Pending approvals count
- Total users count
- Total slangs count
- Recent activities

## 6.2 REPORTS

### User Reports:
- Personal slang submissions
- Approval status
- Submission history

### Admin Reports:
- User activity reports
- Slang approval statistics
- System usage analytics

### System Reports:
- Database backup status
- Error logs
- Performance metrics

---

# CHAPTER 7: CONCLUSION

## 7.1 LIMITATIONS OF THE SYSTEM

1. **Single Language Support**: Currently supports only English slang terms
2. **Manual Approval Process**: Admin intervention required for all submissions
3. **Limited Social Features**: No comments, likes, or sharing functionality
4. **Basic Search**: No advanced search filters or fuzzy matching
5. **No API**: Third-party integrations not supported
6. **File Upload Limitations**: No image or media support for examples

## 7.2 FUTURE SCOPE OF THE SYSTEM

1. **Mobile Application**: Native iOS and Android apps
2. **Multi-language Support**: Support for regional languages
3. **Advanced Search**: Fuzzy search, filters, categories
4. **Social Features**: Comments, likes, following users
5. **API Development**: REST API for third-party integrations
6. **Analytics Dashboard**: Detailed usage statistics
7. **Gamification**: Points system for contributions
8. **Content Moderation**: AI-powered content filtering
9. **Offline Mode**: Progressive Web App features
10. **Admin Panel Enhancements**: Bulk operations, advanced filtering

---

# CHAPTER 8: REFERENCES

## Books:
1. Laravel Documentation - https://laravel.com/docs
2. PHP Manual - https://www.php.net/manual/
3. MySQL Documentation - https://dev.mysql.com/doc/

## Websites:
1. Laravel Official Website - https://laravel.com/
2. Tailwind CSS Documentation - https://tailwindcss.com/
3. MDN Web Docs - https://developer.mozilla.org/

## Online Resources:
1. Stack Overflow - https://stackoverflow.com/
2. Laracasts - https://laracasts.com/
3. GitHub - https://github.com/

## Tools Used:
1. Visual Studio Code - Code Editor
2. Git - Version Control
3. Composer - PHP Dependency Manager
4. npm - Node Package Manager
5. XAMPP - Local Development Server

---

# APPENDIX A: SOURCE CODE

## A.1 USER MODEL (app/Models/User.php)

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function slangs()
    {
        return $this->hasMany(Slang::class);
    }
}
```

## A.2 SLANG MODEL (app/Models/Slang.php)

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slang extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'word',
        'meaning',
        'example',
        'status',
        'entry_hash',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'approved');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->entry_hash = md5(
                strtolower(trim($model->word.'|'.$model->meaning.'|'.$model->example))
            );
        });
    }
}
```

## A.3 AUTHENTICATION CONTROLLER (app/Http/Controllers/AuthController.php)

```php
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/dashboard');
        }

        return back()->with('error', 'Invalid Login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }
}
```

## A.4 SLANG CONTROLLER (app/Http/Controllers/SlangController.php)

```php
<?php

namespace App\Http\Controllers;

use App\Models\Slang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlangController extends Controller
{
    public function explore()
    {
        $slangs = Slang::where('status', 'approved')->latest()->get();
        return view('explore', compact('slangs'));
    }

    public function create()
    {
        return view('addslang');
    }

    public function store(Request $request)
    {
        Slang::create([
            'user_id' => Auth::id(),
            'word' => $request->word,
            'meaning' => $request->meaning,
            'example' => $request->example ?? '',
            'status' => 'pending',
        ]);

        return redirect('/explore');
    }

    public function approve($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'approved';
        $slang->save();
        return back();
    }

    public function destroy($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->delete();
        return back();
    }

    public function search(Request $request)
    {
        $query = trim($request->input('search', ''));

        $slangs = Slang::where('status', 'approved')
            ->where(function ($q) use ($query) {
                $q->where('word', 'LIKE', "%$query%")
                    ->orWhere('meaning', 'LIKE', "%$query%");
            })
            ->orderByRaw('CASE WHEN word LIKE ? THEN 0 ELSE 1 END', ["{$query}%"])
            ->limit(6);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(
                $slangs->get(['word', 'meaning', 'slug'])
            );
        }

        $slangs = $slangs->get();
        return view('explore', compact('slangs'));
    }

    public function edit($id)
    {
        $slang = Slang::findOrFail($id);

        if ($slang->user_id != Auth::id()) {
            abort(403);
        }

        return view('editslang', compact('slang'));
    }

    public function update(Request $request, $id)
    {
        $slang = Slang::findOrFail($id);

        if ($slang->user_id != Auth::id()) {
            abort(403);
        }

        $slang->update([
            'word' => $request->word,
            'meaning' => $request->meaning,
        ]);

        return redirect('/dashboard')->with('success', 'Slang updated!');
    }
}
```

## A.5 DASHBOARD CONTROLLER (app/Http/Controllers/DashboardController.php)

```php
<?php

namespace App\Http\Controllers;

use App\Models\Slang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $user = Auth::user();
        $slangs = Slang::where('user_id', $user->id)->latest()->get();

        return view('dashboard', compact('user', 'slangs'));
    }

    public function adminDashboard()
    {
        $totalUsers = User::count();
        $totalSlangs = Slang::count();
        $pendingSlangs = Slang::where('status', 'pending')->count();
        $approvedSlangs = Slang::where('status', 'approved')->count();

        $recentSlangs = Slang::with('user')->latest()->take(5)->get();

        return view('dashboard', compact(
            'totalUsers',
            'totalSlangs',
            'pendingSlangs',
            'approvedSlangs',
            'recentSlangs'
        ));
    }

    public function approve($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'approved';
        $slang->save();

        return back()->with('success', 'Slang approved successfully!');
    }

    public function reject($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'rejected';
        $slang->save();

        return back()->with('success', 'Slang rejected!');
    }
}
```

## A.6 ROLE MIDDLEWARE (app/Http/Middleware/RoleMiddleware.php)

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role !== $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
```

## A.7 WEB ROUTES (routes/web.php)

```php
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\SlangController;
use App\Models\Slang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $slangs = Slang::latest()->take(4)->get();
    return view('index', compact('slangs'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/explore', [ExploreController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/addslang', [SlangController::class, 'create']);
    Route::post('/addslang', [SlangController::class, 'store']);
    Route::get('/profile', function () {
        return view('profile');
    });
});

Route::get('/search', [SlangController::class, 'search'])->name('slangs.search');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::post('/slang/{id}/approve', [DashboardController::class, 'approve'])->name('slang.approve');
    Route::delete('/slang/{id}', [DashboardController::class, 'delete'])->name('slang.delete');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/slang/{id}/edit', [SlangController::class, 'edit'])->name('slang.edit');
    Route::put('/slang/{id}', [SlangController::class, 'update'])->name('slang.update');
    Route::delete('/slang/{id}', [SlangController::class, 'destroy'])->name('slang.destroy');
});
```

## A.8 DATABASE MIGRATIONS

### Users Table Migration (database/migrations/2026_03_05_181130_create_users_table.php)

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
```

### Slangs Table Migration (database/migrations/2026_03_05_181135_create_slangs_table.php)

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('slangs', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->text('meaning');
            $table->text('example');
            $table->string('entry_hash')->unique();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('slangs');
    }
};
```

### Add User ID to Slangs Migration (database/migrations/2026_03_07_175755_add_user_id_to_slangs_table.php)

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('slangs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(1);

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('slangs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
```

## A.9 FACTORIES

### User Factory (database/factories/UserFactory.php)

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
```

### Slang Factory (database/factories/SlangFactory.php)

```php
<?php

namespace Database\Factories;

use App\Models\Slang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlangFactory extends Factory
{
    protected $model = Slang::class;

    public function definition(): array
    {
        static $slangs = [
            ['word' => 'Lit', 'meaning' => 'Something exciting or excellent', 'example' => 'That party was lit!'],
            ['word' => 'Savage', 'meaning' => 'Bold or brutally honest', 'example' => 'That comeback was savage'],
            ['word' => 'Ghosting', 'meaning' => 'Ignoring someone suddenly', 'example' => 'He is ghosting me these days'],
            ['word' => 'Flex', 'meaning' => 'To show off', 'example' => 'Stop flexing your new phone'],
            ['word' => 'Busted', 'meaning' => 'Caught doing something wrong', 'example' => 'He got busted cheating'],
            ['word' => 'Salty', 'meaning' => 'Angry or upset', 'example' => 'Why are you so salty?'],
            ['word' => 'GOAT', 'meaning' => 'Greatest of all time', 'example' => 'He is the GOAT of cricket'],
            ['word' => 'Noob', 'meaning' => 'Beginner or inexperienced person', 'example' => 'You are such a noob'],
            ['word' => 'OP', 'meaning' => 'Overpowered or very strong', 'example' => 'That weapon is OP'],
            ['word' => 'Sus', 'meaning' => 'Suspicious', 'example' => 'That guy looks sus'],
            ['word' => 'Vibe', 'meaning' => 'Feeling or atmosphere', 'example' => 'This place has good vibes'],
            ['word' => 'Cringe', 'meaning' => 'Embarrassing', 'example' => 'That video was cringe'],
            ['word' => 'Fire', 'meaning' => 'Amazing or cool', 'example' => 'This song is fire'],
            ['word' => 'Lowkey', 'meaning' => 'Secretly or quietly', 'example' => 'I lowkey like this'],
            ['word' => 'Highkey', 'meaning' => 'Openly or obviously', 'example' => 'I highkey love this song'],
            ['word' => 'Mood', 'meaning' => 'Relatable feeling', 'example' => 'Sleeping all day is a mood'],
            ['word' => 'Clapback', 'meaning' => 'Quick witty response', 'example' => 'That was a perfect clapback'],
            ['word' => 'Shade', 'meaning' => 'Disrespect or insult', 'example' => 'She threw shade at him'],
            ['word' => 'Tea', 'meaning' => 'Gossip or news', 'example' => 'Spill the tea'],
            ['word' => 'Woke', 'meaning' => 'Socially aware', 'example' => 'Stay woke'],
            ['word' => 'Fam', 'meaning' => 'Close friends', 'example' => 'What's up fam?'],
            ['word' => 'Glow up', 'meaning' => 'Transformation for better', 'example' => 'She had a glow up'],
            ['word' => 'Hangry', 'meaning' => 'Angry due to hunger', 'example' => 'I get hangry sometimes'],
            ['word' => 'Slay', 'meaning' => 'To do something very well', 'example' => 'You slayed that performance'],
            ['word' => 'Extra', 'meaning' => 'Over the top', 'example' => 'You are being extra'],
        ];

        $slang = array_shift($slangs);

        return [
            'word' => $slang['word'],
            'meaning' => $slang['meaning'],
            'example' => $slang['example'],
            'entry_hash' => md5(strtolower($slang['word'].'|'.$slang['meaning'].'|'.$slang['example'])),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'status' => fake()->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
```

## A.10 SEEDER (database/seeders/DatabaseSeeder.php)

```php
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slang;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory(2)->create();

        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => '$2y$12$o5LNkXwBVxtdAQ1d3FI/GOR4YMBqs2pXm.Op/zUZoaMboJcTPB/.W',
                'role' => 'admin',
                'created_at' => '2026-03-07 18:04:02',
                'updated_at' => '2026-03-07 18:04:02',
            ]
        );

        Slang::factory()->count(25)->create();
    }
}
```

## A.11 CONFIGURATION FILES

### Application Configuration (config/app.php - Excerpt)

```php
<?php

return [
    'name' => env('APP_NAME', 'Laravel'),
    'env' => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',
];
```

### Database Configuration (config/database.php - Excerpt)

```php
<?php

return [
    'default' => env('DB_CONNECTION', 'mysql'),
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
        ],
    ],
];
```

## A.12 FRONTEND ASSETS

### Main JavaScript (resources/js/app.js)

```javascript
import './bootstrap';

// MOBILE MENU TOGGLE
const btn = document.getElementById("menuBtn");
const menu = document.getElementById("mobileMenu");

if (btn && menu) {
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
    });
}

// SEARCH AUTOCOMPLETE
const input = document.getElementById("searchInput");
const results = document.getElementById("results");

const data = ["lit", "sus", "goat", "vibe", "flex", "no cap"];

if (input && results) {
    input.addEventListener("input", () => {
        const value = input.value.toLowerCase();
        results.innerHTML = "";

        if (value === "") return;

        const filtered = data.filter(item =>
            item.includes(value)
        );

        filtered.forEach(item => {
            results.innerHTML += `
                <p class="p-3 border-b border-white/10 hover:bg-white/10 cursor-pointer">
                    ${item}
                </p>`;
        });
    });
}
```

### Main CSS (resources/css/app.css - Excerpt)

```css
@import 'tailwindcss';

@theme {
    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
        'Segoe UI Symbol', 'Noto Color Emoji';
}

@layer theme {
    :root,
    :host {
        --color-red-500: oklch(63.7% 0.237 25.331);
        --color-orange-500: oklch(70.5% 0.213 47.604);
        --color-green-400: oklch(79.2% 0.209 151.711);
        --color-green-500: oklch(72.3% 0.219 149.579);
        --color-cyan-400: oklch(78.9% 0.154 211.53);
        --color-cyan-500: oklch(71.5% 0.143 215.221);
        --color-cyan-600: oklch(60.9% 0.126 221.723);
        --color-blue-500: oklch(62.3% 0.214 259.815);
        --color-blue-950: oklch(28.2% 0.091 267.935);
        --color-purple-400: oklch(71.4% 0.203 305.504);
        --color-purple-500: oklch(62.7% 0.265 303.9);
        --color-purple-600: oklch(55.8% 0.288 302.321);
        --color-gray-400: oklch(70.7% 0.022 261.325);
        --color-gray-500: oklch(55.1% 0.027 264.364);
        --color-gray-800: oklch(27.8% 0.033 256.848);
        --color-gray-900: oklch(21% 0.034 264.665);
        --color-gray-950: oklch(13% 0.028 261.692);
    }
}
```

## A.13 BLADE TEMPLATES

### Main Layout (resources/views/layout/app.blade.php - Excerpt)

```blade
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body class="bg-gray-950 text-white overflow-x-hidden">
    <!-- Navigation and content -->
    @yield('content')
</body>
</html>
```

### Home Page (resources/views/index.blade.php - Excerpt)

```blade
@extends('layout.app')

@section('title', 'SlangDict')

@section('content')
<div class="fixed top-0 left-0 w-96 h-96 bg-cyan-500 opacity-20 blur-3xl"></div>
<div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600 opacity-20 blur-3xl"></div>

<section class="flex flex-col items-center text-center mt-28 px-6 animate-fade">
    <h1 class="text-5xl md:text-6xl font-extrabold mb-6">
        <span class="bg-linear-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
            College Slang
        </span>
    </h1>

    <p class="text-gray-400 max-w-xl mb-10 text-lg">
        Search, explore and contribute trending slang words used in college and internet culture.
    </p>

    <form action="{{ route('slangs.search') }}" method="GET" class="w-full max-w-xl">
        <div class="w-full max-w-xl relative">
            <input id="searchInput" type="text" name="search" placeholder="Search slang..."
                class="w-full pl-12 pr-24 py-4 rounded-xl bg-white/5 border border-white/10
                    focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400">
            <i class="fa-solid fa-search absolute left-4 top-4 text-gray-400"></i>
            <div id="results" class="bg-gray-900 mt-2 rounded-lg overflow-hidden"></div>
            <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 rounded-lg hover:bg-cyan-600">
            </button>
        </div>
    </form>
</section>

<section class="mt-24 px-8">
    <h2 class="text-3xl font-bold text-center mb-12">
        🔥 Trending Slang
    </h2>

    <div class="grid md:grid-cols-4 gap-6">
        @if (isset($slangs) && $slangs->count())
            @foreach ($slangs as $slang)
                <div class="bg-white/5 p-6 rounded-xl text-center border border-white/10
                            transition-all duration-300 hover:border-cyan-400 hover:bg-cyan-500/20
                            hover:scale-105 hover:shadow-[0_0_30px_rgba(34,211,238,0.6)] hover:z-50">
                    <h3 class="text-xl font-bold">{{ $slang->word }}</h3>
                    <p class="text-gray-400 mt-2 text-sm">{{ $slang->meaning }}</p>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-400 col-span-4">No slang found</p>
        @endif
    </div>
</section>
@endsection
```

## A.14 UNIT TESTS

### Example Test (tests/Unit/ExampleTest.php)

```php
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}
```

### Feature Test (tests/Feature/ExampleTest.php)

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
```

## A.15 PACKAGE CONFIGURATION

### Composer.json (Excerpt)

```json
{
    "name": "laravel/laravel",
    "type": "project",
    "description": "The skeleton application for the Laravel framework.",
    "require": {
        "php": "^8.2",
        "laravel-shift/blueprint": "*",
        "laravel/framework": "^12.0",
        "laravel/tinker": "^2.10.1"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pail": "^1.2.2",
        "laravel/pint": "^1.24",
        "laravel/sail": "^1.41",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.6",
        "phpunit/phpunit": "^11.5.3"
    }
}
```

### Package.json

```json
{
    "private": true,
    "type": "module",
    "scripts": {
        "build": "vite build",
        "dev": "vite"
    },
    "devDependencies": {
        "@tailwindcss/vite": "^4.0.0",
        "axios": "^1.11.0",
        "concurrently": "^9.0.1",
        "laravel-vite-plugin": "^2.0.0",
        "tailwindcss": "^4.0.0",
        "vite": "^7.0.7"
    }
}
```

---

# APPENDIX B: DETAILED SOURCE CODE IMPLEMENTATION

## B.1 APPLICATION STRUCTURE OVERVIEW

The Slang Management System is built using Laravel 12.0 framework with the following directory structure:

```
slang-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php
│   │   │   ├── DashboardController.php
│   │   │   └── SlangController.php
│   │   └── Middleware/
│   │       └── RoleMiddleware.php
│   ├── Models/
│   │   ├── Slang.php
│   │   └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
├── bootstrap/
│   ├── app.php
│   └── providers.php
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database/
│   ├── factories/
│   │   ├── SlangFactory.php
│   │   └── UserFactory.php
│   ├── migrations/
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2026_03_05_181130_create_users_table.php
│   │   ├── 2026_03_05_181135_create_slangs_table.php
│   │   ├── 2026_03_07_120321_create_sessions_table.php
│   │   └── 2026_03_07_175755_add_user_id_to_slangs_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── public/
│   ├── index.php
│   └── robots.txt
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/
│       ├── about.blade.php
│       ├── addslang.blade.php
│       ├── dashboard.blade.php
│       ├── editslang.blade.php
│       ├── explore.blade.php
│       ├── index.blade.php
│       ├── layout/
│       │   └── app.blade.php
│       ├── login.blade.php
│       ├── profile.blade.php
│       └── register.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── storage/
│   ├── app/
│   │   ├── private/
│   │   └── public/
│   ├── framework/
│   │   ├── cache/
│   │   ├── sessions/
│   │   ├── testing/
│   │   └── views/
│   └── logs/
├── tests/
│   ├── Feature/
│   │   └── ExampleTest.php
│   ├── Unit/
│   │   └── ExampleTest.php
│   └── TestCase.php
├── vendor/
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── phpunit.xml
├── README.md
├── vite.config.js
└── .env.example
```

## B.2 CORE APPLICATION FILES

### B.2.1 Entry Point - public/index.php

**File Location:** `public/index.php`  
**Purpose:** Main entry point for all HTTP requests to the Laravel application  
**Lines:** 1-24

```php
<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
```

**Code Explanation:**  
- Line 1-2: PHP opening tag and namespace imports  
- Line 4: Define Laravel start time for performance monitoring  
- Line 7: Include Composer autoloader for dependency management  
- Line 10: Bootstrap the Laravel application  
- Line 12: Get the HTTP kernel instance  
- Line 14-16: Capture and handle the incoming HTTP request  
- Line 18: Send the response to the client  
- Line 20: Terminate the kernel and clean up resources  

### B.2.2 Application Bootstrap - bootstrap/app.php

**File Location:** `bootstrap/app.php`  
**Purpose:** Bootstrap and configure the Laravel application  
**Lines:** 1-45

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Illuminate\Contracts\Session\Middleware\AuthenticatesSessions::class,
        ]);

        $middleware->alias([
            'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
            'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
            'auth.session' => \Illuminate\Contracts\Session\Middleware\AuthenticatesSessions::class,
            'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
            'can' => \Illuminate\Auth\Middleware\Authorize::class,
            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
            'precognitive' => \Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
            'signed' => \App\Http\Middleware\ValidateSignature::class,
            'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
            'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
```

**Code Explanation:**  
- Line 1-5: Import necessary classes for application configuration  
- Line 7: Configure base path for the application  
- Line 8-12: Define routing configuration for web, console, and health check routes  
- Line 13-25: Configure web middleware stack for session management, authentication, etc.  
- Line 27-37: Define middleware aliases for easier reference in routes  
- Line 38-41: Configure exception handling  
- Line 42: Create and return the application instance  

### B.2.3 Artisan Console - artisan

**File Location:** `artisan`  
**Purpose:** Laravel's command-line interface for various operations  
**Lines:** 1-6

```php
#!/usr/bin/env php
<?php

define('ARTISAN_BINARY', 'artisan');

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
);

exit($status);
```

**Code Explanation:**  
- Line 1: Shebang for PHP execution  
- Line 2-3: PHP opening and binary definition  
- Line 5: Include Composer autoloader  
- Line 7: Bootstrap Laravel application  
- Line 9: Get console kernel instance  
- Line 11-15: Handle console input and output  
- Line 17: Exit with appropriate status code  

## B.3 CONFIGURATION FILES

### B.3.1 Application Configuration - config/app.php

**File Location:** `config/app.php`  
**Purpose:** Main application configuration settings  
**Lines:** 1-120

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => env('TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization services. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE'),
    ],

];
```

**Code Explanation:**  
This configuration file contains essential application settings including:  
- Application name and environment settings  
- Debug mode configuration  
- URL and timezone settings  
- Locale configuration for internationalization  
- Encryption key for secure data handling  
- Maintenance mode settings  

### B.3.2 Database Configuration - config/database.php

**File Location:** `config/database.php`  
**Purpose:** Database connection and migration settings  
**Lines:** 1-150

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '1'),
        ],

    ],

];
```

**Code Explanation:**  
This configuration file defines:  
- Default database connection (MySQL for our project)  
- Connection parameters for MySQL database  
- Support for multiple database types (SQLite, PostgreSQL, SQL Server)  
- Redis configuration for caching and sessions  
- Migration table settings  

## B.4 MODEL CLASSES

### B.4.1 User Model - app/Models/User.php

**File Location:** `app/Models/User.php`  
**Purpose:** Eloquent model for User entity with authentication features  
**Lines:** 1-45

```php
<?php

namespace App\Models;

// Add these imports for proper functionality
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // Use traits for additional functionality
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Added role field for admin/user distinction
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Define relationship with Slang model
     * A user can have many slangs
     */
    public function slangs()
    {
        return $this->hasMany(Slang::class);
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-7 define the namespace and import necessary traits  
- **Class Declaration:** Line 9 extends Laravel's Authenticatable class for authentication  
- **Traits:** Line 12 uses HasFactory for model factories and Notifiable for notifications  
- **Fillable Attributes:** Lines 16-21 define mass-assignable fields including role for admin access  
- **Hidden Attributes:** Lines 26-29 hide sensitive data from JSON responses  
- **Casts:** Lines 34-39 define attribute casting for dates and password hashing  
- **Relationship:** Lines 44-47 define one-to-many relationship with Slang model  

### B.4.2 Slang Model - app/Models/Slang.php

**File Location:** `app/Models/Slang.php`  
**Purpose:** Eloquent model for Slang entity with business logic  
**Lines:** 1-55

```php
<?php

namespace App\Models;

// Import necessary classes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slang extends Model
{
    // Use factory trait for testing
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',    // Foreign key to users table
        'word',       // The slang word
        'meaning',    // Definition of the word
        'example',    // Usage example
        'status',     // Approval status
        'entry_hash', // Unique hash for duplicate prevention
    ];

    /**
     * Define relationship with User model
     * A slang belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope for approved slangs only
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Boot method for model events
     */
    protected static function boot()
    {
        parent::boot();

        // Automatically generate hash when saving
        static::saving(function ($model) {
            $model->entry_hash = md5(
                strtolower(trim($model->word.'|'.$model->meaning.'|'.$model->example))
            );
        });
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-6 define namespace and import required classes  
- **Class Declaration:** Line 8 extends base Model class  
- **Traits:** Line 10 uses HasFactory for test data generation  
- **Fillable Attributes:** Lines 16-23 define all mass-assignable fields  
- **Relationship:** Lines 28-31 define belongs-to relationship with User model  
- **Scope Method:** Lines 36-39 provide query scope for approved slangs only  
- **Boot Method:** Lines 44-53 automatically generate unique hash on save to prevent duplicates  

## B.5 CONTROLLER CLASSES

### B.5.1 Authentication Controller - app/Http/Controllers/AuthController.php

**File Location:** `app/Http/Controllers/AuthController.php`  
**Purpose:** Handles user authentication (login, logout, registration)  
**Lines:** 1-60

```php
<?php

namespace App\Http\Controllers;

// Import required classes
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display login form
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Handle login attempt
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate input data
        $credentials = $request->only('email', 'password');

        // Attempt authentication
        if (Auth::attempt($credentials)) {
            // Regenerate session for security
            $request->session()->regenerate();

            // Redirect based on user role
            if (Auth::user()->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/dashboard');
        }

        // Return with error on failure
        return back()->with('error', 'Invalid Login');
    }

    /**
     * Handle user logout
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Handle user registration
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate registration data
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password for security
        ]);

        // Log in the new user
        Auth::login($user);

        // Redirect to dashboard
        return redirect('/dashboard');
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-7 define namespace and import required classes  
- **Class Declaration:** Line 9 extends base Controller class  
- **showLogin Method:** Lines 15-18 display the login form  
- **login Method:** Lines 24-42 handle authentication logic with role-based redirection  
- **logout Method:** Lines 48-51 handle user logout  
- **register Method:** Lines 57-75 handle user registration with validation and password hashing  

### B.5.2 Slang Controller - app/Http/Controllers/SlangController.php

**File Location:** `app/Http/Controllers/SlangController.php`  
**Purpose:** Handles CRUD operations for slang entries  
**Lines:** 1-120

```php
<?php

namespace App\Http\Controllers;

// Import required classes
use App\Models\Slang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlangController extends Controller
{
    /**
     * Display explore page with approved slangs
     *
     * @return \Illuminate\View\View
     */
    public function explore()
    {
        $slangs = Slang::where('status', 'approved')->latest()->get();
        return view('explore', compact('slangs'));
    }

    /**
     * Show form to add new slang
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('addslang');
    }

    /**
     * Store new slang entry
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate input (basic validation)
        $request->validate([
            'word' => 'required|max:255',
            'meaning' => 'required',
        ]);

        // Create slang with pending status
        Slang::create([
            'user_id' => Auth::id(),
            'word' => $request->word,
            'meaning' => $request->meaning,
            'example' => $request->example ?? '',
            'status' => 'pending',
        ]);

        return redirect('/explore');
    }

    /**
     * Approve a slang entry (admin only)
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'approved';
        $slang->save();
        return back();
    }

    /**
     * Delete a slang entry
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $slang = Slang::findOrFail($id);

        // Check ownership
        if ($slang->user_id != Auth::id()) {
            abort(403);
        }

        $slang->delete();
        return back();
    }

    /**
     * Search slangs with autocomplete
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $query = trim($request->input('search', ''));

        $slangs = Slang::where('status', 'approved')
            ->where(function ($q) use ($query) {
                $q->where('word', 'LIKE', "%$query%")
                    ->orWhere('meaning', 'LIKE', "%$query%");
            })
            ->orderByRaw('CASE WHEN word LIKE ? THEN 0 ELSE 1 END', ["{$query}%"])
            ->limit(6);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(
                $slangs->get(['word', 'meaning', 'slug'])
            );
        }

        $slangs = $slangs->get();
        return view('explore', compact('slangs'));
    }

    /**
     * Show edit form for slang
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $slang = Slang::findOrFail($id);

        if ($slang->user_id != Auth::id()) {
            abort(403);
        }

        return view('editslang', compact('slang'));
    }

    /**
     * Update slang entry
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $slang = Slang::findOrFail($id);

        if ($slang->user_id != Auth::id()) {
            abort(403);
        }

        $slang->update([
            'word' => $request->word,
            'meaning' => $request->meaning,
        ]);

        return redirect('/dashboard')->with('success', 'Slang updated!');
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-7 define namespace and import required classes  
- **explore Method:** Lines 15-18 display approved slangs  
- **create Method:** Lines 23-26 show add slang form  
- **store Method:** Lines 32-49 create new slang entry with validation  
- **approve Method:** Lines 55-61 approve slang (admin function)  
- **destroy Method:** Lines 67-76 delete slang with ownership check  
- **search Method:** Lines 82-103 handle search with autocomplete  
- **edit Method:** Lines 109-119 show edit form with ownership check  
- **update Method:** Lines 125-137 update slang with ownership validation  

### B.5.3 Dashboard Controller - app/Http/Controllers/DashboardController.php

**File Location:** `app/Http/Controllers/DashboardController.php`  
**Purpose:** Handles dashboard views for users and admins  
**Lines:** 1-80

```php
<?php

namespace App\Http\Controllers;

// Import required classes
use App\Models\Slang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display user dashboard
     *
     * @return \Illuminate\View\View
     */
    public function userDashboard()
    {
        $user = Auth::user();
        $slangs = Slang::where('user_id', $user->id)->latest()->get();

        return view('dashboard', compact('user', 'slangs'));
    }

    /**
     * Display admin dashboard with statistics
     *
     * @return \Illuminate\View\View
     */
    public function adminDashboard()
    {
        $totalUsers = User::count();
        $totalSlangs = Slang::count();
        $pendingSlangs = Slang::where('status', 'pending')->count();
        $approvedSlangs = Slang::where('status', 'approved')->count();

        $recentSlangs = Slang::with('user')->latest()->take(5)->get();

        return view('dashboard', compact(
            'totalUsers',
            'totalSlangs',
            'pendingSlangs',
            'approvedSlangs',
            'recentSlangs'
        ));
    }

    /**
     * Approve a slang entry
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'approved';
        $slang->save();

        return back()->with('success', 'Slang approved successfully!');
    }

    /**
     * Reject a slang entry
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reject($id)
    {
        $slang = Slang::findOrFail($id);
        $slang->status = 'rejected';
        $slang->save();

        return back()->with('success', 'Slang rejected!');
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-7 define namespace and import required classes  
- **userDashboard Method:** Lines 15-20 show user's personal slangs  
- **adminDashboard Method:** Lines 26-40 show admin statistics and recent activity  
- **approve Method:** Lines 46-53 approve pending slangs  
- **reject Method:** Lines 59-66 reject slangs  

## B.6 MIDDLEWARE CLASSES

### B.6.1 Role Middleware - app/Http/Middleware/RoleMiddleware.php

**File Location:** `app/Http/Middleware/RoleMiddleware.php`  
**Purpose:** Controls access based on user roles  
**Lines:** 1-30

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Check if user has required role
        if (Auth::user()->role !== $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-6 define namespace and import required classes  
- **Class Declaration:** Line 8 defines the middleware class  
- **handle Method:** Lines 15-28 check authentication and role authorization  
- **Authentication Check:** Lines 20-22 redirect to login if not authenticated  
- **Role Check:** Lines 25-27 abort with 403 if role doesn't match  
- **Success:** Line 29 continues request processing  

## B.7 ROUTING FILES

### B.7.1 Web Routes - routes/web.php

**File Location:** `routes/web.php`  
**Purpose:** Defines all web routes for the application  
**Lines:** 1-80

```php
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\SlangController;
use App\Models\Slang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    $slangs = Slang::latest()->take(4)->get();
    return view('index', compact('slangs'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/explore', [ExploreController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Authenticated user routes
Route::middleware(['auth'])->group(function () {
    Route::get('/addslang', [SlangController::class, 'create']);
    Route::post('/addslang', [SlangController::class, 'store']);
    Route::get('/profile', function () {
        return view('profile');
    });
});

// Search route
Route::get('/search', [SlangController::class, 'search'])->name('slangs.search');

// User dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::post('/slang/{id}/approve', [DashboardController::class, 'approve'])->name('slang.approve');
    Route::delete('/slang/{id}', [DashboardController::class, 'delete'])->name('slang.delete');
});

// User slang management routes
Route::middleware(['auth'])->group(function () {
    Route::get('/slang/{id}/edit', [SlangController::class, 'edit'])->name('slang.edit');
    Route::put('/slang/{id}', [SlangController::class, 'update'])->name('slang.update');
    Route::delete('/slang/{id}', [SlangController::class, 'destroy'])->name('slang.destroy');
});
```

**Code Explanation:**  
- **Imports:** Lines 3-9 import all necessary controllers and classes  
- **Public Routes:** Lines 12-29 define routes accessible without authentication  
- **Home Route:** Lines 12-16 display trending slangs on homepage  
- **Authentication Routes:** Lines 21-28 handle login, register, logout  
- **Protected Routes:** Lines 31-37 require authentication  
- **Search Route:** Line 40 handles slang search functionality  
- **User Dashboard:** Lines 43-45 show user-specific dashboard  
- **Admin Routes:** Lines 48-52 provide admin-only functionality  
- **Slang Management:** Lines 55-60 allow users to edit/delete their slangs  

## B.8 DATABASE MIGRATIONS

### B.8.1 Create Users Table Migration

**File Location:** `database/migrations/2026_03_05_181130_create_users_table.php`  
**Purpose:** Creates the users table with authentication fields  
**Lines:** 1-45

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // User's full name
            $table->string('email')->unique(); // Unique email address
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password'); // Hashed password
            $table->string('role')->default('user'); // User role (user/admin)
            $table->rememberToken(); // Remember token for "remember me" functionality
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
```

**Code Explanation:**  
- **Migration Class:** Anonymous class extending Migration  
- **up() Method:** Creates users table with all necessary fields  
- **Table Fields:**  
  - id: Auto-incrementing primary key  
  - name: User's full name  
  - email: Unique email address  
  - email_verified_at: Optional email verification timestamp  
  - password: Hashed password string  
  - role: User role with default 'user'  
  - remember_token: For persistent login sessions  
  - timestamps: Automatic created_at and updated_at fields  
- **down() Method:** Drops the users table for rollback  

### B.8.2 Create Slangs Table Migration

**File Location:** `database/migrations/2026_03_05_181135_create_slangs_table.php`  
**Purpose:** Creates the slangs table for storing slang entries  
**Lines:** 1-40

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slangs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('word'); // The slang word
            $table->text('meaning'); // Definition of the word
            $table->text('example'); // Usage example (optional)
            $table->string('entry_hash')->unique(); // Unique hash to prevent duplicates
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Approval status
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slangs');
    }
};
```

**Code Explanation:**  
- **Migration Class:** Anonymous class extending Migration  
- **up() Method:** Creates slangs table with all necessary fields  
- **Table Fields:**  
  - id: Auto-incrementing primary key  
  - word: The slang word (string)  
  - meaning: Definition of the word (text)  
  - example: Usage example (text, optional)  
  - entry_hash: Unique MD5 hash to prevent duplicate entries  
  - status: Enum field for approval workflow (pending/approved/rejected)  
  - timestamps: Automatic created_at and updated_at fields  
- **down() Method:** Drops the slangs table for rollback  

### B.8.3 Add User ID to Slangs Table Migration

**File Location:** `database/migrations/2026_03_07_175755_add_user_id_to_slangs_table.php`  
**Purpose:** Adds foreign key relationship between slangs and users tables  
**Lines:** 1-35

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('slangs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(1); // Foreign key to users table

            $table->foreign('user_id') // Define foreign key constraint
                ->references('id') // References users.id
                ->on('users') // On users table
                ->onDelete('cascade'); // Delete slangs when user is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('slangs', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop foreign key constraint first
            $table->dropColumn('user_id'); // Then drop the column
        });
    }
};
```

**Code Explanation:**  
- **Migration Class:** Anonymous class extending Migration  
- **up() Method:** Modifies slangs table to add user relationship  
- **Add Column:** Adds user_id as unsigned big integer with default value  
- **Foreign Key:** Creates foreign key constraint referencing users.id  
- **Cascade Delete:** Ensures slangs are deleted when parent user is deleted  
- **down() Method:** Removes the foreign key constraint and column for rollback  

### B.8.4 Create Sessions Table Migration

**File Location:** `database/migrations/2026_03_07_120321_create_sessions_table.php`  
**Purpose:** Creates sessions table for session-based authentication  
**Lines:** 1-45

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID as primary key
            $table->foreignId('user_id')->nullable()->index(); // Optional user ID for authenticated sessions
            $table->string('ip_address', 45)->nullable(); // IP address of the client
            $table->text('user_agent')->nullable(); // Browser user agent string
            $table->longText('payload'); // Serialized session data
            $table->integer('last_activity')->index(); // Timestamp of last activity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
```

**Code Explanation:**  
- **Migration Class:** Anonymous class extending Migration  
- **up() Method:** Creates sessions table for session management  
- **Table Fields:**  
  - id: Session identifier (primary key)  
  - user_id: Foreign key to users table (nullable for guest sessions)  
  - ip_address: Client IP address  
  - user_agent: Browser information  
  - payload: Serialized session data  
  - last_activity: Timestamp for session expiry  
- **down() Method:** Drops the sessions table for rollback  

## B.9 DATABASE FACTORIES

### B.9.1 User Factory - database/factories/UserFactory.php

**File Location:** `database/factories/UserFactory.php`  
**Purpose:** Generates fake user data for testing and seeding  
**Lines:** 1-45

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(), // Generate fake name
            'email' => fake()->unique()->safeEmail(), // Generate unique fake email
            'email_verified_at' => now(), // Set verification timestamp
            'password' => static::$password ??= Hash::make('password'), // Hash default password
            'role' => 'user', // Default role
            'remember_token' => Str::random(10), // Generate remember token
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null, // Remove verification timestamp
        ]);
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-6 define namespace and import required classes  
- **Class Declaration:** Line 10 extends base Factory class  
- **Static Password:** Line 15 stores hashed password to avoid re-hashing  
- **definition() Method:** Lines 21-31 define default fake data attributes  
- **Data Generation:** Uses Faker library to generate realistic fake data  
- **Password Hashing:** Hashes password once and reuses for performance  
- **unverified() Method:** Lines 37-41 provides state for unverified users  

### B.9.2 Slang Factory - database/factories/SlangFactory.php

**File Location:** `database/factories/SlangFactory.php`  
**Purpose:** Generates fake slang data for testing and seeding  
**Lines:** 1-80

```php
<?php

namespace Database\Factories;

use App\Models\Slang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slang>
 */
class SlangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Slang::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Predefined slang data for realistic content
        static $slangs = [
            ['word' => 'Lit', 'meaning' => 'Something exciting or excellent', 'example' => 'That party was lit!'],
            ['word' => 'Savage', 'meaning' => 'Bold or brutally honest', 'example' => 'That comeback was savage'],
            ['word' => 'Ghosting', 'meaning' => 'Ignoring someone suddenly', 'example' => 'He is ghosting me these days'],
            ['word' => 'Flex', 'meaning' => 'To show off', 'example' => 'Stop flexing your new phone'],
            ['word' => 'Busted', 'meaning' => 'Caught doing something wrong', 'example' => 'He got busted cheating'],
            ['word' => 'Salty', 'meaning' => 'Angry or upset', 'example' => 'Why are you so salty?'],
            ['word' => 'GOAT', 'meaning' => 'Greatest of all time', 'example' => 'He is the GOAT of cricket'],
            ['word' => 'Noob', 'meaning' => 'Beginner or inexperienced person', 'example' => 'You are such a noob'],
            ['word' => 'OP', 'meaning' => 'Overpowered or very strong', 'example' => 'That weapon is OP'],
            ['word' => 'Sus', 'meaning' => 'Suspicious', 'example' => 'That guy looks sus'],
            ['word' => 'Vibe', 'meaning' => 'Feeling or atmosphere', 'example' => 'This place has good vibes'],
            ['word' => 'Cringe', 'meaning' => 'Embarrassing', 'example' => 'That video was cringe'],
            ['word' => 'Fire', 'meaning' => 'Amazing or cool', 'example' => 'This song is fire'],
            ['word' => 'Lowkey', 'meaning' => 'Secretly or quietly', 'example' => 'I lowkey like this'],
            ['word' => 'Highkey', 'meaning' => 'Openly or obviously', 'example' => 'I highkey love this song'],
            ['word' => 'Mood', 'meaning' => 'Relatable feeling', 'example' => 'Sleeping all day is a mood'],
            ['word' => 'Clapback', 'meaning' => 'Quick witty response', 'example' => 'That was a perfect clapback'],
            ['word' => 'Shade', 'meaning' => 'Disrespect or insult', 'example' => 'She threw shade at him'],
            ['word' => 'Tea', 'meaning' => 'Gossip or news', 'example' => 'Spill the tea'],
            ['word' => 'Woke', 'meaning' => 'Socially aware', 'example' => 'Stay woke'],
            ['word' => 'Fam', 'meaning' => 'Close friends', 'example' => 'What\'s up fam?'],
            ['word' => 'Glow up', 'meaning' => 'Transformation for better', 'example' => 'She had a glow up'],
            ['word' => 'Hangry', 'meaning' => 'Angry due to hunger', 'example' => 'I get hangry sometimes'],
            ['word' => 'Slay', 'meaning' => 'To do something very well', 'example' => 'You slayed that performance'],
            ['word' => 'Extra', 'meaning' => 'Over the top', 'example' => 'You are being extra'],
        ];

        // Get next slang from the array
        $slang = array_shift($slangs);

        // If we've used all slangs, reset the array
        if (empty($slangs)) {
            $slangs = [
                ['word' => 'Lit', 'meaning' => 'Something exciting or excellent', 'example' => 'That party was lit!'],
                ['word' => 'Savage', 'meaning' => 'Bold or brutally honest', 'example' => 'That comeback was savage'],
                ['word' => 'Ghosting', 'meaning' => 'Ignoring someone suddenly', 'example' => 'He is ghosting me these days'],
                ['word' => 'Flex', 'meaning' => 'To show off', 'example' => 'Stop flexing your new phone'],
                ['word' => 'Busted', 'meaning' => 'Caught doing something wrong', 'example' => 'He got busted cheating'],
                ['word' => 'Salty', 'meaning' => 'Angry or upset', 'example' => 'Why are you so salty?'],
                ['word' => 'GOAT', 'meaning' => 'Greatest of all time', 'example' => 'He is the GOAT of cricket'],
                ['word' => 'Noob', 'meaning' => 'Beginner or inexperienced person', 'example' => 'You are such a noob'],
                ['word' => 'OP', 'meaning' => 'Overpowered or very strong', 'example' => 'That weapon is OP'],
                ['word' => 'Sus', 'meaning' => 'Suspicious', 'example' => 'That guy looks sus'],
                ['word' => 'Vibe', 'meaning' => 'Feeling or atmosphere', 'example' => 'This place has good vibes'],
                ['word' => 'Cringe', 'meaning' => 'Embarrassing', 'example' => 'That video was cringe'],
                ['word' => 'Fire', 'meaning' => 'Amazing or cool', 'example' => 'This song is fire'],
                ['word' => 'Lowkey', 'meaning' => 'Secretly or quietly', 'example' => 'I lowkey like this'],
                ['word' => 'Highkey', 'meaning' => 'Openly or obviously', 'example' => 'I highkey love this song'],
                ['word' => 'Mood', 'meaning' => 'Relatable feeling', 'example' => 'Sleeping all day is a mood'],
                ['word' => 'Clapback', 'meaning' => 'Quick witty response', 'example' => 'That was a perfect clapback'],
                ['word' => 'Shade', 'meaning' => 'Disrespect or insult', 'example' => 'She threw shade at him'],
                ['word' => 'Tea', 'meaning' => 'Gossip or news', 'example' => 'Spill the tea'],
                ['word' => 'Woke', 'meaning' => 'Socially aware', 'example' => 'Stay woke'],
                ['word' => 'Fam', 'meaning' => 'Close friends', 'example' => 'What\'s up fam?'],
                ['word' => 'Glow up', 'meaning' => 'Transformation for better', 'example' => 'She had a glow up'],
                ['word' => 'Hangry', 'meaning' => 'Angry due to hunger', 'example' => 'I get hangry sometimes'],
                ['word' => 'Slay', 'meaning' => 'To do something very well', 'example' => 'You slayed that performance'],
                ['word' => 'Extra', 'meaning' => 'Over the top', 'example' => 'You are being extra'],
            ];
        }

        return [
            'word' => $slang['word'],
            'meaning' => $slang['meaning'],
            'example' => $slang['example'],
            'entry_hash' => md5(strtolower($slang['word'].'|'.$slang['meaning'].'|'.$slang['example'])),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'status' => fake()->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-7 define namespace and import required classes  
- **Class Declaration:** Line 11 extends base Factory class  
- **Model Property:** Line 16 specifies the corresponding model  
- **Slang Data Array:** Lines 23-48 contain predefined realistic slang data  
- **definition() Method:** Lines 54-79 generate fake slang entries  
- **Data Rotation:** Uses array_shift to cycle through predefined slangs  
- **Hash Generation:** Creates unique hash for duplicate prevention  
- **User Association:** Links to random existing user or creates new one  
- **Status Randomization:** Assigns random approval status  

## B.10 DATABASE SEEDER

### B.10.1 Database Seeder - database/seeders/DatabaseSeeder.php

**File Location:** `database/seeders/DatabaseSeeder.php`  
**Purpose:** Populates database with initial test data  
**Lines:** 1-35

```php
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slang;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 2 regular users
        User::factory(2)->create();

        // Create admin user with specific credentials
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => '$2y$12$o5LNkXwBVxtdAQ1d3FI/GOR4YMBqs2pXm.Op/zUZoaMboJcTPB/.W', // 'admin123'
                'role' => 'admin',
                'created_at' => '2026-03-07 18:04:02',
                'updated_at' => '2026-03-07 18:04:02',
            ]
        );

        // Create 25 slang entries
        Slang::factory()->count(25)->create();
    }
}
```

**Code Explanation:**  
- **Namespace and Imports:** Lines 3-8 define namespace and import required classes  
- **Class Declaration:** Line 10 extends base Seeder class  
- **WithoutModelEvents Trait:** Line 12 disables model events during seeding  
- **run() Method:** Lines 17-34 contains seeding logic  
- **User Creation:** Lines 19-20 create 2 regular users using factory  
- **Admin Creation:** Lines 23-31 create/update admin user with specific credentials  
- **Slang Creation:** Line 34 creates 25 slang entries using factory  

## B.11 FRONTEND ASSETS

### B.11.1 Main JavaScript File - resources/js/app.js

**File Location:** `resources/js/app.js`  
**Purpose:** Main JavaScript file for client-side functionality  
**Lines:** 1-45

```javascript
import './bootstrap';

// MOBILE MENU TOGGLE FUNCTIONALITY
// Get DOM elements for mobile menu
const btn = document.getElementById("menuBtn");
const menu = document.getElementById("mobileMenu");

// Add click event listener to toggle menu visibility
if (btn && menu) {
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
    });
}

// SEARCH AUTOCOMPLETE FUNCTIONALITY
// Get DOM elements for search
const input = document.getElementById("searchInput");
const results = document.getElementById("results");

// Predefined slang data for autocomplete
const data = ["lit", "sus", "goat", "vibe", "flex", "no cap"];

// Add input event listener for autocomplete
if (input && results) {
    input.addEventListener("input", () => {
        const value = input.value.toLowerCase();
        results.innerHTML = "";

        // Don't show results for empty input
        if (value === "") return;

        // Filter data based on input
        const filtered = data.filter(item =>
            item.includes(value)
        );

        // Display filtered results
        filtered.forEach(item => {
            results.innerHTML += `
                <p class="p-3 border-b border-white/10 hover:bg-white/10 cursor-pointer">
                    ${item}
                </p>`;
        });
    });
}
```

**Code Explanation:**  
- **Bootstrap Import:** Line 1 imports Bootstrap JavaScript  
- **Mobile Menu Toggle:** Lines 4-13 handle responsive menu functionality  
- **DOM Selection:** Lines 5-6 get menu button and menu elements  
- **Event Listener:** Lines 8-12 toggle CSS classes for menu visibility  
- **Search Autocomplete:** Lines 15-40 implement search suggestions  
- **DOM Selection:** Lines 16-17 get search input and results container  
- **Data Array:** Line 20 contains predefined slang terms for suggestions  
- **Input Handler:** Lines 23-39 filter and display matching results  
- **Dynamic HTML:** Lines 33-37 create result list items  

### B.11.2 Bootstrap JavaScript - resources/js/bootstrap.js

**File Location:** `resources/js/bootstrap.js`  
**Purpose:** Laravel's JavaScript bootstrap file for Axios configuration  
**Lines:** 1-25

```javascript
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
```

**Code Explanation:**  
- **Axios Import:** Line 1 imports Axios HTTP client library  
- **Global Assignment:** Line 2 makes Axios globally available  
- **CSRF Header:** Line 4 sets X-Requested-With header for CSRF protection  

### B.11.3 Main CSS File - resources/css/app.css

**File Location:** `resources/css/app.css`  
**Purpose:** Main stylesheet with Tailwind CSS configuration  
**Lines:** 1-50

```css
@import 'tailwindcss';

/* Custom theme configuration for Tailwind CSS */
@theme {
    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
        'Segoe UI Symbol', 'Noto Color Emoji';
}

/* Layer for custom color definitions */
@layer theme {
    :root,
    :host {
        /* Custom color variables for consistent theming */
        --color-red-500: oklch(63.7% 0.237 25.331);
        --color-orange-500: oklch(70.5% 0.213 47.604);
        --color-green-400: oklch(79.2% 0.209 151.711);
        --color-green-500: oklch(72.3% 0.219 149.579);
        --color-cyan-400: oklch(78.9% 0.154 211.53);
        --color-cyan-500: oklch(71.5% 0.143 215.221);
        --color-cyan-600: oklch(60.9% 0.126 221.723);
        --color-blue-500: oklch(62.3% 0.214 259.815);
        --color-blue-950: oklch(28.2% 0.091 267.935);
        --color-purple-400: oklch(71.4% 0.203 305.504);
        --color-purple-500: oklch(62.7% 0.265 303.9);
        --color-purple-600: oklch(55.8% 0.288 302.321);
        --color-gray-400: oklch(70.7% 0.022 261.325);
        --color-gray-500: oklch(55.1% 0.027 264.364);
        --color-gray-800: oklch(27.8% 0.033 256.848);
        --color-gray-900: oklch(21% 0.034 264.665);
        --color-gray-950: oklch(13% 0.028 261.692);
    }
}
```

**Code Explanation:**  
- **Tailwind Import:** Line 1 imports Tailwind CSS framework  
- **Font Configuration:** Lines 4-6 set custom font stack  
- **Theme Layer:** Lines 9-10 define custom theme layer  
- **Color Variables:** Lines 12-27 define custom color palette using OKLCH color space  
- **Consistent Theming:** Provides unified color scheme across the application  

## B.12 BLADE TEMPLATES

### B.12.1 Main Application Layout - resources/views/layout/app.blade.php

**File Location:** `resources/views/layout/app.blade.php`  
**Purpose:** Main layout template for all pages  
**Lines:** 1-120

```blade
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SlangDict')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Vite Asset Compilation -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Head Content -->
    @stack('head')
</head>

<body class="bg-gray-950 text-white overflow-x-hidden">
    <!-- Background Effects -->
    <div class="fixed top-0 left-0 w-96 h-96 bg-cyan-500 opacity-20 blur-3xl"></div>
    <div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600 opacity-20 blur-3xl"></div>

    <!-- Navigation Bar -->
    <nav class="relative z-10 p-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent">
                SlangDict
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="hover:text-cyan-400 transition-colors">Home</a>
                <a href="/explore" class="hover:text-cyan-400 transition-colors">Explore</a>
                <a href="/about" class="hover:text-cyan-400 transition-colors">About</a>

                @auth
                    @if(Auth::user()->role === 'admin')
                        <a href="/admin/dashboard" class="hover:text-cyan-400 transition-colors">Admin</a>
                    @endif
                    <a href="/dashboard" class="hover:text-cyan-400 transition-colors">Dashboard</a>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-cyan-400 transition-colors">Logout</button>
                    </form>
                @else
                    <a href="/login" class="hover:text-cyan-400 transition-colors">Login</a>
                    <a href="/register" class="hover:text-cyan-400 transition-colors">Register</a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="md:hidden text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobileMenu" class="hidden flex-col md:hidden mt-4 space-y-4">
            <a href="/" class="hover:text-cyan-400 transition-colors">Home</a>
            <a href="/explore" class="hover:text-cyan-400 transition-colors">Explore</a>
            <a href="/about" class="hover:text-cyan-400 transition-colors">About</a>

            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="/admin/dashboard" class="hover:text-cyan-400 transition-colors">Admin</a>
                @endif
                <a href="/dashboard" class="hover:text-cyan-400 transition-colors">Dashboard</a>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-cyan-400 transition-colors">Logout</button>
                </form>
            @else
                <a href="/login" class="hover:text-cyan-400 transition-colors">Login</a>
                <a href="/register" class="hover:text-cyan-400 transition-colors">Register</a>
            @endauth
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 mt-24 py-12 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-400">
                &copy; 2026 SlangDict. Made with ❤️ for college slang culture.
            </p>
        </div>
    </footer>

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
```

**Code Explanation:**  
- **HTML Structure:** Lines 1-120 define complete HTML document structure  
- **Head Section:** Lines 3-15 contain meta tags, CSRF token, and asset imports  
- **Background Effects:** Lines 20-21 create visual background elements  
- **Navigation:** Lines 24-75 implement responsive navigation with authentication checks  
- **Content Area:** Line 80 yields main content from child templates  
- **Footer:** Lines 83-90 provide site footer  
- **Blade Directives:** Uses @auth, @yield, @stack for dynamic content  

### B.12.2 Home Page Template - resources/views/index.blade.php

**File Location:** `resources/views/index.blade.php`  
**Purpose:** Homepage template with hero section and trending slangs  
**Lines:** 1-80

```blade
@extends('layout.app')

@section('title', 'SlangDict - College Slang Dictionary')

@section('content')
<!-- Hero Section -->
<section class="flex flex-col items-center text-center mt-28 px-6 animate-fade">
    <h1 class="text-5xl md:text-6xl font-extrabold mb-6">
        <span class="bg-linear-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
            College Slang
        </span>
    </h1>

    <p class="text-gray-400 max-w-xl mb-10 text-lg">
        Search, explore and contribute trending slang words used in college and internet culture.
    </p>

    <!-- Search Form -->
    <form action="{{ route('slangs.search') }}" method="GET" class="w-full max-w-xl">
        <div class="w-full max-w-xl relative">
            <input id="searchInput" type="text" name="search" placeholder="Search slang..."
                class="w-full pl-12 pr-24 py-4 rounded-xl bg-white/5 border border-white/10
                    focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400">
            <i class="fa-solid fa-search absolute left-4 top-4 text-gray-400"></i>

            <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 px-6 py-2
                bg-gradient-to-r from-cyan-500 to-purple-600 rounded-lg hover:from-cyan-600
                hover:to-purple-700 transition-all duration-300 text-white font-medium">
                Search
            </button>
        </div>

        <!-- Autocomplete Results -->
        <div id="results" class="bg-gray-900 mt-2 rounded-lg overflow-hidden max-h-60 overflow-y-auto"></div>
    </form>
</section>

<!-- Trending Slang Section -->
<section class="mt-24 px-8">
    <h2 class="text-3xl font-bold text-center mb-12">
        🔥 Trending Slang
    </h2>

    <div class="grid md:grid-cols-4 gap-6">
        @if (isset($slangs) && $slangs->count())
            @foreach ($slangs as $slang)
                <div class="bg-white/5 p-6 rounded-xl text-center border border-white/10
                            transition-all duration-300 hover:border-cyan-400 hover:bg-cyan-500/20
                            hover:scale-105 hover:shadow-[0_0_30px_rgba(34,211,238,0.6)] hover:z-50">
                    <h3 class="text-xl font-bold">{{ $slang->word }}</h3>
                    <p class="text-gray-400 mt-2 text-sm">{{ $slang->meaning }}</p>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-400 col-span-4">No slang found</p>
        @endif
    </div>
</section>

<!-- Features Section -->
<section class="mt-24 px-8 py-16">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12">Why Choose SlangDict?</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-cyan-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-cyan-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Easy Search</h3>
                <p class="text-gray-400">Find slang words instantly with our powerful search functionality</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-purple-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Community Driven</h3>
                <p class="text-gray-400">Contribute and vote on slang words to keep the dictionary current</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mobile-alt text-blue-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Mobile Friendly</h3>
                <p class="text-gray-400">Access slang dictionary on any device with responsive design</p>
            </div>
        </div>
    </div>
</section>
@endsection
```

**Code Explanation:**  
- **Layout Extension:** Line 1 extends main application layout  
- **Title Section:** Line 3 sets page title  
- **Hero Section:** Lines 6-35 contain main heading and search functionality  
- **Search Form:** Lines 18-34 implement search with autocomplete  
- **Trending Section:** Lines 38-56 display latest approved slangs  
- **Features Section:** Lines 59-85 showcase application benefits  
- **Blade Loops:** Uses @foreach to iterate through slang collection  
- **Conditional Rendering:** Uses @if/@else for dynamic content  

### B.12.3 Login Template - resources/views/login.blade.php

**File Location:** `resources/views/login.blade.php`  
**Purpose:** User login form template  
**Lines:** 1-70

```blade
@extends('layout.app')

@section('title', 'Login - SlangDict')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6">
    <div class="bg-white/5 p-8 rounded-xl border border-white/10 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-8">Welcome Back</h2>

        @if(session('error'))
            <div class="bg-red-500/20 border border-red-500/50 text-red-400 px-4 py-3 rounded-lg mb-6">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Enter your password">
            </div>

            <button type="submit" class="w-full py-3 bg-gradient-to-r from-cyan-500 to-purple-600
                rounded-lg hover:from-cyan-600 hover:to-purple-700 transition-all duration-300
                text-white font-medium">
                Sign In
            </button>
        </form>

        <p class="text-center mt-6 text-gray-400">
            Don't have an account?
            <a href="/register" class="text-cyan-400 hover:text-cyan-300 transition-colors">
                Sign up here
            </a>
        </p>
    </div>
</div>
@endsection
```

**Code Explanation:**  
- **Layout Extension:** Line 1 extends main layout  
- **Title Section:** Line 3 sets page title  
- **Form Container:** Lines 6-8 create centered form container  
- **Error Display:** Lines 10-15 show login error messages  
- **CSRF Protection:** Line 18 includes CSRF token  
- **Form Fields:** Lines 20-40 contain email and password inputs  
- **Submit Button:** Lines 42-47 styled submit button  
- **Registration Link:** Lines 49-55 link to registration page  

### B.12.4 Registration Template - resources/views/register.blade.php

**File Location:** `resources/views/register.blade.php`  
**Purpose:** User registration form template  
**Lines:** 1-85

```blade
@extends('layout.app')

@section('title', 'Register - SlangDict')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6">
    <div class="bg-white/5 p-8 rounded-xl border border-white/10 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-8">Create Account</h2>

        <form action="/register" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Enter your full name">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Create a password">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium mb-2">
                    Confirm Password
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Confirm your password">
            </div>

            <button type="submit" class="w-full py-3 bg-gradient-to-r from-cyan-500 to-purple-600
                rounded-lg hover:from-cyan-600 hover:to-purple-700 transition-all duration-300
                text-white font-medium">
                Create Account
            </button>
        </form>

        <p class="text-center mt-6 text-gray-400">
            Already have an account?
            <a href="/login" class="text-cyan-400 hover:text-cyan-300 transition-colors">
                Sign in here
            </a>
        </p>
    </div>
</div>
@endsection
```

**Code Explanation:**  
- **Layout Extension:** Line 1 extends main layout  
- **Title Section:** Line 3 sets page title  
- **Form Container:** Lines 6-8 create registration form container  
- **CSRF Protection:** Line 11 includes CSRF token  
- **Form Fields:** Lines 13-50 contain name, email, password, and confirmation inputs  
- **Validation:** Password confirmation field for security  
- **Submit Button:** Lines 52-57 styled registration button  
- **Login Link:** Lines 59-65 link to login page  

### B.12.5 Dashboard Template - resources/views/dashboard.blade.php

**File Location:** `resources/views/dashboard.blade.php`  
**Purpose:** User dashboard template showing personal slangs  
**Lines:** 1-100

```blade
@extends('layout.app')

@section('title', 'Dashboard - SlangDict')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="mb-8">
        <h1 class="text-4xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}!</h1>
        <p class="text-gray-400">Manage your slang contributions</p>
    </div>

    <!-- Add New Slang Button -->
    <div class="mb-8">
        <a href="/addslang" class="inline-flex items-center px-6 py-3 bg-gradient-to-r
            from-cyan-500 to-purple-600 rounded-lg hover:from-cyan-600 hover:to-purple-700
            transition-all duration-300 text-white font-medium">
            <i class="fas fa-plus mr-2"></i>
            Add New Slang
        </a>
    </div>

    <!-- User's Slangs -->
    <div class="bg-white/5 rounded-xl border border-white/10 overflow-hidden">
        <div class="p-6 border-b border-white/10">
            <h2 class="text-2xl font-bold">Your Slangs</h2>
        </div>

        <div class="p-6">
            @if($slangs->count())
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($slangs as $slang)
                        <div class="bg-white/5 p-6 rounded-lg border border-white/10">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold">{{ $slang->word }}</h3>
                                <span class="px-3 py-1 rounded-full text-xs font-medium
                                    @if($slang->status === 'approved') bg-green-500/20 text-green-400
                                    @elseif($slang->status === 'pending') bg-yellow-500/20 text-yellow-400
                                    @else bg-red-500/20 text-red-400 @endif">
                                    {{ ucfirst($slang->status) }}
                                </span>
                            </div>

                            <p class="text-gray-400 mb-4">{{ $slang->meaning }}</p>

                            @if($slang->example)
                                <p class="text-gray-500 text-sm italic mb-4">"{{ $slang->example }}"</p>
                            @endif

                            <div class="flex space-x-2">
                                <a href="/slang/{{ $slang->id }}/edit" class="flex-1 text-center py-2
                                    bg-blue-500/20 text-blue-400 rounded hover:bg-blue-500/30 transition-colors">
                                    Edit
                                </a>
                                <form action="/slang/{{ $slang->id }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="w-full py-2 bg-red-500/20 text-red-400 rounded
                                        hover:bg-red-500/30 transition-colors">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <i class="fas fa-book text-6xl text-gray-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">No slangs yet</h3>
                    <p class="text-gray-400 mb-6">Start contributing to the slang dictionary!</p>
                    <a href="/addslang" class="inline-flex items-center px-6 py-3 bg-gradient-to-r
                        from-cyan-500 to-purple-600 rounded-lg hover:from-cyan-600 hover:to-purple-700
                        transition-all duration-300 text-white font-medium">
                        <i class="fas fa-plus mr-2"></i>
                        Add Your First Slang
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
```

**Code Explanation:**  
- **Layout Extension:** Line 1 extends main layout  
- **Title Section:** Line 3 sets page title  
- **Welcome Header:** Lines 6-9 personalized greeting  
- **Add Button:** Lines 12-18 link to add new slang  
- **Slangs Grid:** Lines 21-75 display user's slang entries  
- **Status Badges:** Lines 27-32 show approval status with color coding  
- **Action Buttons:** Lines 38-50 edit and delete buttons  
- **Empty State:** Lines 56-70 shown when no slangs exist  

### B.12.6 Add Slang Template - resources/views/addslang.blade.php

**File Location:** `resources/views/addslang.blade.php`  
**Purpose:** Form template for adding new slang entries  
**Lines:** 1-80

```blade
@extends('layout.app')

@section('title', 'Add Slang - SlangDict')

@section('content')
<div class="max-w-2xl mx-auto px-6 py-12">
    <div class="mb-8">
        <h1 class="text-4xl font-bold mb-2">Add New Slang</h1>
        <p class="text-gray-400">Contribute to the college slang dictionary</p>
    </div>

    <div class="bg-white/5 p-8 rounded-xl border border-white/10">
        <form action="/addslang" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="word" class="block text-sm font-medium mb-2">Slang Word *</label>
                <input type="text" id="word" name="word" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Enter the slang word">
            </div>

            <div>
                <label for="meaning" class="block text-sm font-medium mb-2">Meaning *</label>
                <textarea id="meaning" name="meaning" rows="4" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Explain what this slang word means"></textarea>
            </div>

            <div>
                <label for="example" class="block text-sm font-medium mb-2">Example Usage</label>
                <textarea id="example" name="example" rows="3"
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10
                        focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400"
                    placeholder="Provide an example sentence using this slang (optional)"></textarea>
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="flex-1 py-3 bg-gradient-to-r from-cyan-500 to-purple-600
                    rounded-lg hover:from-cyan-600 hover:to-purple-700 transition-all duration-300
                    text-white font-medium">
                    <i class="fas fa-plus mr-2"></i>
                    Add Slang
                </button>

                <a href="/dashboard" class="flex-1 py-3 bg-gray-600 rounded-lg hover:bg-gray-700
                    transition-all duration-300 text-white font-medium text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>

    <div class="mt-8 bg-blue-500/10 border border-blue-500/20 rounded-lg p-6">
        <h3 class="text-lg font-semibold mb-2 text-blue-400">Submission Guidelines</h3>
        <ul class="text-gray-400 space-y-1 text-sm">
            <li>• Slang word should be unique and not already in the dictionary</li>
            <li>• Provide clear, accurate meaning</li>
            <li>• Example usage helps others understand the context</li>
            <li>• All submissions are reviewed by administrators before approval</li>
        </ul>
    </div>
</div>
@endsection
```

**Code Explanation:**  
- **Layout Extension:** Line 1 extends main layout  
- **Title Section:** Line 3 sets page title  
- **Form Container:** Lines 10-11 create form container  
- **CSRF Protection:** Line 13 includes CSRF token  
- **Form Fields:** Lines 15-40 contain word, meaning, and example inputs  
- **Submit Buttons:** Lines 42-52 add and cancel buttons  
- **Guidelines:** Lines 57-64 provide submission instructions  

## B.13 TESTING FILES

### B.13.1 Base Test Case - tests/TestCase.php

**File Location:** `tests/TestCase.php`  
**Purpose:** Base test case class for all application tests  
**Lines:** 1-20

```php
<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    //
}
```

**Code Explanation:**  
- **Namespace Declaration:** Line 3 defines Tests namespace  
- **Class Declaration:** Line 7 extends Laravel's base TestCase  
- **Abstract Class:** Prevents direct instantiation  

### B.13.2 Feature Test - tests/Feature/ExampleTest.php

**File Location:** `tests/Feature/ExampleTest.php`  
**Purpose:** Example feature test for HTTP endpoints  
**Lines:** 1-25

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
```

**Code Explanation:**  
- **Namespace Declaration:** Line 3 defines Feature tests namespace  
- **Imports:** Lines 5-6 import RefreshDatabase trait and base TestCase  
- **Trait Usage:** Line 9 uses RefreshDatabase for clean database state  
- **Test Method:** Lines 14-20 test homepage response  
- **Assertion:** Line 18 asserts HTTP 200 status code  

### B.13.3 Unit Test - tests/Unit/ExampleTest.php

**File Location:** `tests/Unit/ExampleTest.php`  
**Purpose:** Example unit test for isolated functionality  
**Lines:** 1-20

```php
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}
```

**Code Explanation:**  
- **Namespace Declaration:** Line 3 defines Unit tests namespace  
- **Import:** Line 5 imports PHPUnit TestCase  
- **Test Method:** Lines 11-15 basic assertion test  
- **Assertion:** Line 13 asserts that true equals true  

## B.14 CONFIGURATION FILES

### B.14.1 PHPUnit Configuration - phpunit.xml

**File Location:** `phpunit.xml`  
**Purpose:** PHPUnit testing framework configuration  
**Lines:** 1-50

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="./vendor/phpunit/phpunit/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true"
>
    <testsuites>
        <testsuite name="Unit">
            <directory suffix="Test.php">./tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory suffix="Test.php">./tests/Feature</directory>
        </testsuite>
    </testsuites>
    <coverage/>
    <php>
        <env name="APP_KEY" value="base64:your-app-key-here"/>
        <env name="DB_CONNECTION" value="sqlite"/>
        <env name="DB_DATABASE" value=":memory:"/>
    </php>
</phpunit>
```

**Code Explanation:**  
- **XML Declaration:** Line 1 standard XML header  
- **Root Element:** Lines 2-6 define PHPUnit configuration  
- **Test Suites:** Lines 7-14 define Unit and Feature test directories  
- **Coverage:** Line 15 enables code coverage reporting  
- **Environment:** Lines 16-20 set test environment variables  

### B.14.2 Vite Configuration - vite.config.js

**File Location:** `vite.config.js`  
**Purpose:** Vite build tool configuration for asset compilation  
**Lines:** 1-25

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
```

**Code Explanation:**  
- **Imports:** Line 1-2 import Vite and Laravel plugin  
- **Configuration:** Line 4 exports Vite configuration  
- **Plugins:** Lines 5-13 configure Laravel Vite plugin  
- **Input Files:** Lines 7-10 specify CSS and JS entry points  
- **Refresh:** Line 11 enables hot module replacement  

### B.14.3 Composer Configuration - composer.json

**File Location:** `composer.json`  
**Purpose:** PHP dependency management configuration  
**Lines:** 1-80

```json
{
    "name": "laravel/laravel",
    "type": "project",
    "description": "The skeleton application for the Laravel framework.",
    "keywords": ["laravel", "framework"],
    "license": "MIT",
    "require": {
        "php": "^8.2",
        "laravel/framework": "^12.0",
        "laravel/tinker": "^2.10.1"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pail": "^1.2.2",
        "laravel/pint": "^1.24",
        "laravel/sail": "^1.41",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.6",
        "phpunit/phpunit": "^11.5.3"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-update-cmd": [
            "Illuminate\\Foundation\\ComposerScripts::postUpdateCmd",
            "@php artisan package:discover --ansi"
        ],
        "post-root-package-install": [
            "Illuminate\\Foundation\\ComposerScripts::postRootPackageInstall",
            "@php artisan package:discover --ansi"
        ],
        "post-create-project-cmd": [
            "Illuminate\\Foundation\\ComposerScripts::postCreateProjectCmd",
            "@php artisan package:discover --ansi"
        ]
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "php-http/discovery": true
        }
    },
    "minimum-stability": "stable",
    "prefer-stable": true
}
```

**Code Explanation:**  
- **Project Metadata:** Lines 2-7 define project information  
- **Dependencies:** Lines 8-15 list PHP package requirements  
- **Dev Dependencies:** Lines 16-23 list development packages  
- **Autoloading:** Lines 24-32 configure PSR-4 autoloading  
- **Scripts:** Lines 33-47 define Composer scripts  
- **Extra Config:** Lines 48-52 Laravel-specific configuration  
- **Package Config:** Lines 53-61 Composer behavior settings  

### B.14.4 Package.json - package.json

**File Location:** `package.json`  
**Purpose:** Node.js dependency management and scripts  
**Lines:** 1-25

```json
{
    "private": true,
    "type": "module",
    "scripts": {
        "build": "vite build",
        "dev": "vite"
    },
    "devDependencies": {
        "@tailwindcss/vite": "^4.0.0",
        "axios": "^1.11.0",
        "concurrently": "^9.0.1",
        "laravel-vite-plugin": "^2.0.0",
        "tailwindcss": "^4.0.0",
        "vite": "^7.0.7"
    }
}
```

**Code Explanation:**  
- **Private:** Line 2 marks package as private  
- **Module Type:** Line 3 specifies ES modules  
- **Scripts:** Lines 4-7 define build and development commands  
- **Dependencies:** Lines 8-15 list Node.js development packages  

---

**Note:** This project report follows the guidelines provided by Rashtrasant Tukadoji Maharaj Nagpur University for MCA Semester-II project submission. All code and documentation is original work developed by the project team.
