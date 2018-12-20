# Starter static 

A configuration with bootstrap, font-family, iconic, less, bootstrap, build, uglify & concat js

#### Doc. UI/UX
1. Bootstrap v3.3.4 [http://getbootstrap.com/](http://getbootstrap.com/)
2. Font-family : fontsquirrel [fontsquirrel.com](http://fontsquirrel.com)
3. Iconic : Font Awesome [http://fontawesome.io/](http://fontawesome.io/)
4. Less [http://lesscss.org/](http://lesscss.org/)
4. Backbone [http://backbonejs.org](http://backbonejs.org)

#### Automatisation
1. Task Runner : grunt v0.4.5 [http://gruntjs.com/](http://gruntjs.com/) (need to nodejs)
##### Plugin
1. "grunt-contrib-less": "~1.0.0",
2. "grunt-contrib-watch": "~0.6.1",
3. "grunt-contrib-concat": "~0.5.1",
4. "grunt-contrib-uglify": "~0.9.1",
5. "grunt-contrib-copy": "~0.8.0"

## Install
In build folder
```
npm install
```
## Commands
####Watch task (only for less)
```
grunt watch
```
####Distribute from the source (less, js, fonts...)
```
grunt build
```