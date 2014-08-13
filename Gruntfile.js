module.exports = function(grunt) {

// 1. All configuration goes here 
grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    imagemin: {
        dynamic: {
            files: [{
                expand: true,
                cwd: 'library/images/',
                src: ['**/*.{png,jpg,gif}'],
                dest: 'build/images'
            }]
        }
    },

    sass: {                                 
        dist: {                              
            files: {                         
                'library/css/style.css': 'library/sass/style.scss'      
            }
        }
    },

    watch: {
        css: {
            files: ['library/sass/*.scss', 'library/sass/inc/*.scss'],
            tasks: ['sass'],
            options: {
                spawn: false,
            }
        }
    },

    browserSync: {
        default_options: {
            bsFiles: {
                src: [
                "library/css/*.css",
                "*.html",
                "*.php"
                ]
            },
            options: {
                watchTask: true,
                proxy: "localhost:8888/bookmarkie2.0",
                notify: false
            }
        }
    }


});


// 3. Where we tell Grunt we plan to use this plug-in.
grunt.loadNpmTasks('grunt-browser-sync');
grunt.loadNpmTasks('grunt-contrib-imagemin');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-sass');

// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
grunt.registerTask('default', ['imagemin','browserSync','sass', 'watch']);

};