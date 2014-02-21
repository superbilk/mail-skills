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

    uglifyjs -c bootstrap/affix.js bootstrap/alert.js bootstrap/button.js bootstrap/carousel.js bootstrap/collapse.js bootstrap/dropdown.js bootstrap/tab.js bootstrap/transition.js bootstrap/scrollspy.js bootstrap/modal.js bootstrap/tooltip.js bootstrap/popover.js -o bootstrap.min.js

