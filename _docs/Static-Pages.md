Static Pages

Static pages refers to pages that perform tasks such as:

- Welcome Screen
- Admin Dashboard
- Client Dashboard
- About
- Contact Us
- Privacy Policy
- Terms and Conditions

and so forth.

## Install FlowBite UI

To help reduce workload, we are going to use the FlowBite UI
Library (https://flowbite.com/) and also
Themesberg's Flowbite Admin Dashboard
UI (https://github.com/themesberg/flowbite-admin-dashboard).

Both use TailwindCSS as the base.

### Adding Flowbite:

Run the following command in the top terminal:

```shell
npm install -D tailwindcss postcss autoprefixer flowbite
```

Edit the `tailwind.config.js` file and modify to read:

```js
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],
    plugins: [
        forms,
        require('flowbite/plugin')
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

};

```

Next edit the resources/css/app.css file and modify to read:

```css
@flowbite;
@tailwind base;
@tailwind components;
@tailwind utilities;

```

At this point you may want to stop the npm process in the other terminal and
re-start it. It should not need this, but personally I tend to restart as a
precaution.

## Create Controller

We will create a static page controller that allows us to group the required
pages together and reduce clutter in the file structure.

It will also help with reducing routing confusion issues.

```shell
php artisan make:controller StaticPageController
```

### Edit the Controller

Open the `app/Http/Controllers/StaticPageController.php` file

It will be a stub:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
}

```

We will add new controller methods for home, admin dashboard and contact us.

You will then add controller methods for about, privacy, terms and conditions.

At this time, the client dashboard will be left.

We update the stub as follows for the home route:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home()
    {
        return view('pages.welcome');
    }
}

```

We repeat for the other controller methods.

#### Admin Dashboard

```php
    public function adminDashboard()
    {
        return view('pages.admin-dashboard');
    }
```

#### Contact Us

```php
    public function contactUs()
    {
        return view('pages.contact-us');
    }
```

## Moving the Static pages

Our next task is to move the current static pages into a new pages folder.

Create a new folder `resources/views/pages`:

```shell
mkdir resources/views/pages
```

Move the `welcome.blade.php` and `dashboard.blade.php` files into the new
folder, also renaming the `dashboard.blade.php` file to
become `admin-dashboard.blade.php`.

```shell
mv resources/views/welcome.blade.php resources/views/pages/
mv resources/views/dashboard.blade.php resources/views/pages/admin-dashboard.blade.php
```

## Update the Routes

Next we need to update the routes.

Open the `routes/web.php` file.

First we tell the router to look for the `StaticPageController` by adding a
new `use` line a the top of the file, just after the line that
contains `ProfileController`.

```php
use App\Http\Controllers\StaticPageController;
```

Now we can edit the required routes, starting with the welcome or splash page.

Modify the route that reacts to `/` (welcome) to read:

```php
Route::get('/', [StaticPageController::class, 'home'])->name('home');
```

This allows us to use `home` in our links etc when needed, rather than
remembering the `/` which may actually be much more complex than this base
example.

Next modify the dashboard route to read:

```php
Route::prefix('admin')
  ->get('dashboard', [StaticPageController::class, 'adminDashboard'])
  ->middleware(['auth', 'verified'])
  ->name('admin-dashboard');
```

This tells the Laravel router to look for the URI starting with `/admin` and
having
`/dashboard` as the next segment. For example:  
http://laravel-11-shop-admin-interface-demo.test/admin/dashboard

When this is found, it directs to the `adminDashboard` method in
the `StaticPageController`.

## Image Service

A good enhancement at this point is to be able to deliver images from a static
storage location.

To do this we will create an image controller.

```shell
php artisan make:controller ImageController
```

Once created, edit the `app/Http/Controllers/ImageController.php` file and add
the following methods to the class:

```php
private function pathToImage($imageName)
{
    // Construct the full path to the image within the storage directory
    $path = storage_path("app/public/images/{$imageName}");
    debug($path);

    // Check if the image exists; if not, return a 404 response
    if (!Storage::exists("public/images/{$imageName}")) {
        abort(404);
    }

    return $path;
}

/**
 * Display the specified image.
 *
 * @param  string  $imageName
 * @return \Illuminate\Http\Response
 */
public function show($imageName)
{
    $path = $this->pathToImage($imageName);
    // Return the image as a response
    return response()->file($path);
}
```

Now edit the web routes (routes/web.php) and add just after the static routes:

```php

/**********************************************************************
 * Image Rendering Route
 *
 * Add a route that can load an image from storage based on a parameter
 **********************************************************************/
Route::get('/images/{imageName}', [ImageController::class, 'show'])
    ->name('image.show');
```

Almost done... create a folder in storage/app/public named images.

You may then place any images that are needed by the application in this
folder.

To display an image using this method we would use code similar to the
following example:

```php
<img src="{{ route('image.show', ['imageName' => 'some-image-name.png']) }}"
     alt="Assistive technology short alternative text"
     class="mx-auto pb-1">
```

## Serving SVGs via blade components

A nice way to work with SVG images in a Laravel application is to create a
blade component.

It is as easy as, navigating to the `resources/views/components` folder,
duplicating the `application-logo.blade.php` file, giving it a suitable name.
Then editing this new file and copying the SVG source code into it.

For example... duplicate
`resources/views/components/application-logo.blade.php` renaming it
`resources/views/components/maintenance-image.blade.php`.

Using PHP Storm, or a suitable editor, open the sample maintenance SVG image
in edit mode, so you may copy the source code. Copy the source code and then
paste it into the `maintenance-image.blade.php` file replacing its contents.

Finally, you will need to add `{{ $attributes }}` to the end of the `<svg...>`
line. For example:

```html

<svg width="702" height="648" viewBox="0 0 702 648" fill="none"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" {{ $attributes }}>
```

## Update the `guest.blade.php` Template

At the moment the Guest template has a very narrow area, so we will now update
this to use the majority of the screen space.

Open the `/resources/views/layouts/guest.blade.php` file and edit to be:
