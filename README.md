# OpCan WordPress theme



## About

Built all the way back in 2017 using the Understrap theme template when I was a pretty rookie WP theme developer.

Website: [https://understrap.com](https://understrap.com)

Child Theme Project: [https://github.com/understrap/understrap-child](https://github.com/understrap/understrap-child)

## Developing With npm

### Installing Dependencies
- Make sure you have installed Node.js on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install`

### Running
To work with and compile your Sass files on the fly start:

- `$ npm run watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `src/build/browser-sync.config.json` in the beginning of the file:
```javascript
{
  module.exports = {
      "proxy": "https://opcan.local", // Change here
    ...
};
```
- then run: `$ npm run watch-bs`