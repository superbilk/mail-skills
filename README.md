# mail-skills Setup


## Setup

    gem install bootstrap-sass
    npm install uglifyjs -g
    git clone git@github.com:superbilk/mail-skills.git


## Update Bootstrap ##

    gem update bootstrap-sass


## Compile CSS ##

    compass compile


## Minify Javascript ##

    uglifyjs affix.js alert.js button.js carousel.js collapse.js dropdown.js tab.js transition.js scrollspy.js modal.js tooltip.js popover.js -co bootstrap.min.js

