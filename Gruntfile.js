module.exports = function(grunt) {

	grunt.initConfig({
		sass: {
			dist: {
				files: {
					'css/global.css': 'scss/global.scss'
				}
			}
	    },

		watch: {
		    css: {
		      // We watch and compile sass files as normal but don't live reload here
		      files: 'scss/**/*.scss',
		      tasks: ['sass'],
		    }
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['watch']);

};