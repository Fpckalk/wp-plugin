# wp-plugin
This repo provides a barebones example for a WordPress plugin.

This is just an example of how I like my code when writing a plugin.
It's also very basic, I'm not adding stuff like Composer or Webpack in this project to keep things clear.
Only things I'm using are PHP and WordPress to make things as understandable as possible.

## Code style
One thing you'll notice is that I try to keep my functions, properties, and variable names in ```snake_case```.
WordPress uses this style for their functions and properties. So for me it's best to adhere to the environment I'm programming in.
It gets confusing to write everything in multiple styles

## Structure
```wp-plugin.php```
I use this file as my main plugin file. This is where the WordPress plugin header comment goes, and where I load all my files.
This file also contains ALL hooks. Hooks are explained in that file. You can also divide the hooks in the different lib files, but I like mine to be in one place, so I can see everything that is going down in my plugin.

```lib/WPPlugin/Example.php```
This file is a class that contains some functions. The functions are called by the hooks in ```wp-plugin.php```.

## Adding more
This is just a very basic setup, but it works for adding a plugin and outputting some content.
To extend this plugin I recommend the following:
- If you have more code, create more classes in the folder ```lib/WPPlugin``` to keep your code nice and clean.
- Plugins can alter both the admin and public side. Keep it clear what code is doing what.
- Add your own hooks! When the plugin is used by other people, they can alter output or add some more, just like we did in this plugin.
  - This also provides more mutability when a plugin is only used by you, but across multiple projects. Now you can change how the function works without changing the code!
- To keep your PHP more clean, install [Composer](https://getcomposer.org/). This dependency manager provides a good way for autoloading necessary files and using external packages.
- When you want to provide some complex JavaScript or CSS I recommend using [Webpack](https://webpack.js.org/). With this you can keep your code clean, and let Webpack (and some packages) handle all the nitty gritty of cross browser compatibility.
- Something that isn't covered here: plugin settings. Let users input an API key for some service for example. Use the [WordPress Settings API](https://developer.wordpress.org/plugins/settings/settings-api/) to create your settings screen. This is the most clean way to write settings for a plugin.