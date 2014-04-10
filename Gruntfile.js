module.exports = function(grunt) {

	grunt.initConfig({
		watch: {
			options: {
				livereload: true
			},
			html: {
				files: ['index.html', 'views/*.html']
			},
			css: {
				files: ['scss/*.scss'],
				tasks: ['compass']
			}
		},
		compass: {
			options: {
				sassDir: 'scss',
				cssDir: 'css'
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.registerTask('default', ['watch', 'compass']);
};
