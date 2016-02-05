/* jshint node:true */
module.exports = function( grunt ) {
	'use strict';

	require( 'load-grunt-tasks' )( grunt );

	var themeConfig = {

		// gets the package vars
		pkg: grunt.file.readJSON( 'package.json' ),

		// setting folder templates
		dirs: {
			js: 'assets/javascript',
			sass: 'assets/scss',
			images: 'assets/images',
			fonts: 'assets/fonts'
		},

		// javascript linting with jshint
		jshint: {
			options: {
				jshintrc: true
			},
			all: [
				'Gruntfile.js',
				'<%= dirs.js %>/main.js'
			]
		},

		// uglify to concat and minify
		uglify: {
			dist: {
				files: {
					'<%= dirs.js %>/main.min.js': [
						'<%= dirs.js %>/libs/*.js', // External libs/plugins
						'<%= dirs.js %>/main.js'    // Custom JavaScript
					]
				}
			},
		},

		// compile scss/sass files to CSS
		sass: {
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: [{
					expand: true,
					cwd: '<%= dirs.sass %>',
					src: ['*.scss'],
					ext: '.css'
				}]
			}
		},

		// watch for changes and trigger sass, jshint, uglify and livereload browser
		watch: {
			sass: {
				files: [
					'<%= dirs.sass %>/**'
				],
				tasks: ['sass']
			},
			js: {
				files: [
					'<%= dirs.js %>/**'
				],
				tasks: ['jshint', 'uglify']
			},
			options: {
				spawn: false
			}
		},

		// image optimization
		imagemin: {
			dist: {
				options: {
					optimizationLevel: 7,
					progressive: true
				},
				files: [{
					expand: true,
					filter: 'isFile',
					cwd: '<%= dirs.images %>/',
					src: '**/*.{png,jpg,gif}',
					dest: '<%= dirs.images %>/'
				}]
			}
		},

	};

	// Initialize Grunt Config
	// --------------------------
	grunt.initConfig( themeConfig );

	// Register Tasks
	// --------------------------

	// Default Task
	grunt.registerTask( 'default', [
		'jshint',
		'sass',
		'uglify'
	] );

	// Optimize Images Task
	grunt.registerTask( 'optimize', ['imagemin'] );

	// Short aliases
	grunt.registerTask( 'w', ['watch'] );
	grunt.registerTask( 'o', ['optimize'] );
};
