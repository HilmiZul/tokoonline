# POINT OF *(Latihan)* a.k.a *step-by-step* 😅
### Design Tool
- Figma
- Adobe Photoshop / or *Freeware* 😁

### Tech Stack:
1. Laravel (Web API)
2. MySQL
3. Vue (Frontend)
*Auth with JWT (Firebase/Supabase maybe. haha)*

### PART 1: Create a Database
DB name: **tokoonline**

### PART 2: Backend (RESTFul API)
Project name: **tokoonline**
Framework: Laravel

**Create a project**
```bash
$ composer create-project laravel/laravel tokoonline
```

**Edit .env**
```bash
...
DB_DATABASE=tokoonline
...
```

**Make a model**
```bash
$ cd tokoonline
$ php artisan make:model Kategori -m
```
*--dan seterusnya*

**Create fields/columns**
- open and edit file ***`...kategoris_table.php`*** or something like `_table.php` end of name.
Data types:
  - varchar/text: string()
  - integer: integer()
  - date: date()
  - foreign key: foreignId()
- add some field in `up()` function
  ```php
  //...
  $table->string('nama_kategori');
  //...
  ```
- filed with foreign key
  if the table have a foreign key, use `foreignId()`
  ```php
  //...
  $table->foreignId('kategori_id')->constrained();
  //...
  ```

**Migrate Model**
```bash
$ php artisan migrate
```

***Rollback Model***
use this command to undo change model that made.

```bash
$ php artisan migrate:rollback
```

**Make a controller**
```bash
$ php artisan make:controller APIKategoriController
```

**Write a function to GET Kategori**
Edit file: App/Http/Controllers/**APIKategoriController.php**
```php
/* import model */
use App\Models\Kategori;

//....
  /* create a function to return all Kategori */
  public function getKategori() {
    return Kategori::all();
  }
//....
```

**Write an API Route to GET all Kategori**
Edit file: Routes/**api.php**
```php
//....
use App\Http\Controller\APIKategoriController;

Route::get('/kategori', [APIKategoriController::class, 'getKategori']);
```

**Run App.**
```bash
$ php artisan serve
```

*Test using Thunder Client (if using VSCode)*
```php
method: GET 
url: http://127.0.0.1:8000/api/kategori
```

### PART 3: Frontend
*comming soon* 🚀
