module.exports = function(grunt) {

  // Load all grunt tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    postcss: {
	    options: {
		    map: false,
		    processors: [
			    require('autoprefixer')({browsers: 'last 2 versions'})
		    ]
	    },
	    dist: {
		    src: 'css/bmwedding.css'
	    }
    },

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed',
          sourceMap: true
        },
        files: {
          'css/bmwedding.css': 'scss/app.scss',
          'css/ie8.css': 'scss/ie8.scss',
          'css/admin-editor.css': 'scss/admin-editor.scss'
        }
      }
    },

    copy: {
      scripts: {
        expand: true,
        cwd: 'bower_components/',
        src: '**/*.js',
        dest: 'js'
      },

      maps: {
        expand: true,
        cwd: 'bower_components/',
        src: '**/*.map',
        dest: 'js'
      }
    },

    uglify: {
      dist: {
        files: {
          'js/modernizr/modernizr.min.js': ['js/modernizr/modernizr.js']
        }
      },
      theme: {
        files: {
            'js/bmwedding.min.js' : ['js/app.js', 'js/linchpin.js', 'js/bmwedding.js']
        }
      }
    },

    concat: {
      options: {
        separator: ';'
      },

      // instead of loading all foundation files you could easily
      // define your dependencies here as needed.

      dist: {
        src: [
          'js/foundation/js/foundation.min.js'
        ],

        dest: 'js/app.js'
      },

      // linchpin specific libraries

      linchpin: {
        src:[
          'js/linchpin/*.js'
        ],
        dest: 'js/linchpin.js'
      },

      // everything else with your theme

      theme: {
        src:[
          'js/bmwedding/*.js'
        ],
        dest: 'js/bmwedding.js'
      }

    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass', 'postcss:dist']
      },

      javascript: {
        files: [
          'js/foundation.min.js',
          'js/linchpin.js',
          'js/bmwedding/*.js',
          'js/bmwedding.js'
        ],
        tasks: ['concat', 'uglify']
      }
    },

	imagemin: {                            // Task

		dynamic: {                         // Another target
			files: [{
			expand: true,                  // Enable dynamic expansion
			cwd: 'assets/images/src/',     // Src matches are relative to this path
			src: ['**/*.{png,jpg,jpeg,gif}'],   // Actual patterns to match
			dest: 'assets/images/dist/'                  // Destination path prefix
			}]
		}
	}
  });

  grunt.registerTask('build', ['sass', 'minify']);
  grunt.registerTask('minify', ['newer:imagemin:dynamic']);
  grunt.registerTask('default', ['minify','copy', 'uglify', 'concat', 'postcss:dist', 'watch']);

}