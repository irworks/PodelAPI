#Podel API (PHP JodelAPI)  

I was bored, so I looked into the [Jodel App's](https://jodel-app.com/) API.  
So I created a basic project to access the data from a PHP-Backend. I hopefully will add more calls in the future.  
  
So feel free to build a nice front-end for this app if you want to.  
  
##How to use Podel?  
  
See example.php.  
Or:
###Step by step:
- Create a `config.php` in the `/conf` folder. Use the `config.example.php` for help.
- Create an instance of `\PodelAPI\Controller\JodelAPIController` in your code
  
  
###Calls:
- `getUserConfig()` **=>** Gets an `User` model with your config.
- `getUserKarma()` **=>** Gets an `User` model with karma, completes a optionally given `User` model.
- `getJodelsComboByLocation(lng, lat, sticky)` **=>** Gets an array of the Jodels around given coordinates.
-- ``