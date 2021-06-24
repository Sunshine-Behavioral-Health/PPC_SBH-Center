# Intro

Custom theme developed by Nathan Wilson, designed by Michelle Lopez-Mckay for Sunshine Behavioral Health Rehab Centers for PPC.


# Setup Instructions

This theme has all of the .scss and .js files under /resources. Open up terminal in /resources and run "npm install". This will install all of the dependencies necessary to use gulp (task runner) to compile and minify the css and js files in the theme root under /css and /js respectively.


# Adding more scss files

When the need arises to add new css for a new componenet create a new file prefixed by "_" under /resources/scss, then add the file name and file path to /resources/style.scss. You can find examples there of how to do this. In /resources/style.scss remove the "_" before the file name. Gulp automatically looks at all files ending in .scss
