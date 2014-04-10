module.exports = function(grunt) {

	grunt.initConfig({
		watch: {
			options: {
				livereload: true,
			},
			css: {
				files: ['scss/*.scss'],
				tasks: ['compass'],
			}
		},
		compass: {
			options: {
				sassDir: 'scss',
				cssDir: 'css'
			}
		}
	});

	grunt.registerTask('default', ['livereload', 'compass']);
};
