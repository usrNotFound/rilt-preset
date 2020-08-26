# Command to bootstrap RILT

This preset adds and configures `tailwindcss`, `react`, `inertiajs` for Laravel application.

**To install this package**:

`composer require usrnotfound/rilt-preset`

**To publish the configuration run the following command**:
```bash
php artisan usnnotfound:rilt-preset
```

#What happens when I run the command? 
- Updates `pacakge.json`  with
```@babel/plugin-proposal-optional-chaining,
                @babel/plugin-syntax-dynamic-import,
                @babel/preset-react,
                react,
                react-dom,
                cross-env,
                tailwindcss,
```
- Publishes `tailwind.config.js`, and `babelrc`
- `webpack.js` will get updated with all the bells and whistles you need for you code splitting
- Updates `app.js` and `app.scss`
 
# Supports
- Assets Built Pipeline
- Code Splitting
- Purge CSS

#License
The package is open-sourced software licensed under the MIT license.
