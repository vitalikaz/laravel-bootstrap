# laravel-bootstrap
A simple initiated Laravel project with Twitter Bootstrap and AngularJS (+ CoffeeScript) set up.

## PhpStorm project setup
Some little things to make development more fancy and a developer more happy.
### CoffeeScript File Watcher
Output Arguments:
```--output $ProjectFileDir$/public/js/dist/$FileDirPathFromParent(src)$ --compile $FileName$```

Working Directory:
```$FileDir$```

Output paths to refresh:
```$ProjectFileDir$/public/js/dist/$FileDirPathFromParent(src)$/$FileNameWithoutExtension$.js```

## Adding AngularJS controllers and other parts
1. Create appropriate .coffee file in `/public/js/src/` directory.
2. Include compiled JS in `/resources/views/home.blade.php`.