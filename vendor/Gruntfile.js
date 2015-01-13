module.exports = function (grunt) {
    'use strict';

    grunt.loadTasks('tasks');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-img');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-clean');
    //grunt.loadNpmTasks('grunt-phpmd');


    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
          '': 'development',

          development: {
            options: {
              style: 'expanded',
              sourcemap: 'auto',
              trace: true,
              debugInfo: false, // This should stay FALSE because debug code breaks older versions of IE
              lineNumbers: true
            },
            files: {
              '../build/main.min.css': '../assets/scss/main.scss'
            }
          },

          production: {
            options: {
              style: 'compressed',
              sourcemap: 'none'
            },
            files: {
              '../build/main.min.css': '../assets/scss/main.scss'
            }
          }
        },

        uglify: {
           '': 'development',

           production: {
               options: {
                   preserveComments: 'none'
               },
               files: {
                   '../build/main.min.js': [
                       '../assets/js/plugins/*.js',
                       '../assets/js/main.js'
                   ],
                   '../build/lib/modernizr.min.js': [
                       'bower_components/foundation/js/vendor/modernizr.js'
                   ],
                    '../build/lib/jquery.min.js': [
                       'bower_components/foundation/js/vendor/jquery.js'
                   ]
               }
           },
           development: {
               options: {
                   preserveComments: 'all',
                   compress: false,
                   beautify: true,
                   sourceMap: true
               },
               files: {
                   '../build/main.min.js': [
                       '../assets/js/plugins/*.js',
                       '../assets/js/main.js'
                   ],
                   '../build/lib/modernizr.min.js': [
                       'bower_components/foundation/js/vendor/modernizr.js'
                   ],
                    '../build/lib/jquery.min.js': [
                       'bower_components/foundation/js/vendor/jquery.js'
                   ]
               }
           }
       },

        img: {
            dist1: {
                src: ['../assets/img/*'],
                dest: '../build/img'
            },
            dist2: {
                src: ['../assets/img/ie/*'],
                dest: '../build/img/ie'
            },
        },

        _watch: {
            less: {
                files: ['../assets/scss/*.scss', '../assets/scss/*/*.scss'],
                tasks: ['sass']
            },
            js: {
                files: ['../assets/js/main.js', '../assets/js/plugins/*.js'],
                tasks: ['jshint', 'uglify']
            }
        },

        // TODO: because Grunt's working dir is vendor, clean refuses to do this unless you say --force
        // I am not specifying force option here, because dragons
        clean: ['../build/*'],

        /*phpmd: {
          '': 'development',

          options: {
            rulesets: 'codesize,unusedcode,naming',
            bin: '~/Projects/tools/phpmd/src/bin/phpmd',
            reportFormat: 'text'
          },

          development: {
            dir: "../"
          }
        },*/

        jshint: {
          '': 'development',

          options: {
            bitwise: true,
            curly: true,
            es3: true,
            latedef: true,
            noarg: true,
            nonbsp: true,
            nonew: true,
            undef: true,
            unused: true,

            browser: true,
            jquery: true,
            node: true
          },

          development: {
            files: {
              src: ['Gruntfile.js', '../assets/js/main.js', '../assets/js/plugins/*.js']
            },
            options: {
              devel: true
            }
          },

          production: {
            files: {
              src: ['Gruntfile.js', '../assets/js/main.js', '../assets/js/plugins/*.js']
            },
            options: {
              devel: false
            }
          }
        }
    });

    var env = grunt.option('env') || 'development';

    grunt.registerTask('bower-install', 'Installs bower deps', function () {
        var done = this.async(),
            bower = require('bower');

        bower.commands.install().on('end', function () {
            done();
        });
    });

    grunt.renameTask('watch', '_watch');

    grunt.registerTask('watch', [
        'default',
        '_watch'
    ]);

    grunt.registerTask('default', [
        'bower-install',
        'sass:' + env,
        'uglify:'+ env
    ]);
};
