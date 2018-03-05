
# Frontend build tools

This theme already has SASS tools integrated.

## Instructions for use:

1. Make sure you have node.js and npm (package manager) installed globally - you will only have to do this once: https://www.npmjs.com/get-npm

2. You will also need to have gulp installed globally. If you don't have it, run: ```npm install -g gulp```

2. When you pull the theme, navigate to your theme folder in your terminal and run following commands, which will install your gulp tools:

- ```npm install gulp --save-dev```
- ```npm install gulp-sass --save-dev```
- ```npm install browser-sync --save-dev```

You are ready to go!

3. To compile sass run ```gulp watch``` from your theme folder. The gulp watchcommand will automatically watch for all other tasks like browsersync.
