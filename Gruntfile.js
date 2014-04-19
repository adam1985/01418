module.exports = function (grunt) {
    // 以下代码初始化Grunt任务
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

		// 编译styl -> css
		stylus: {
				compile: {
						options: {
							paths: ['./assets/styl'],
							urlfunc: 'embedurl'
						},
						files: {
							'./assets/css/index.css': './assets/styl/index.styl'
						}
				}
		},

        // 压缩css任务
        cssmin: {
            css: {
                files: [{
                    src : ['./assets/css/reset.css', './assets/css/index.css'],
                    dest: './assets/dist/index.min.css'
                }]
            }
        },

        // watch任务
        watch: {
            options: {
                livereload: true,
                interrupt: true,
                nospawn: true,
                atBegin : true
            },
			styl: {
				files: ['./assets/styl/*.styl'],
				tasks: ['stylus']
			},
			css: {
					files: ['./assets/css/*.css'],
					tasks: ['cssmin']
			}
        }

    });

    // 加载package.json中的想用插件
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // 注册一个任务，第二参数可以是数组或者字符串
    // 默认会执行default任务.
    grunt.registerTask('default', ['stylus', 'cssmin', 'closureDepsWriter', 'closureBuilder']);

    /**
     * 单个任务执行
     */

    grunt.registerTask('styl', ['stylus']); // 触发编译styl -> css
    grunt.registerTask('css', ['cssmin']); // 压缩css文件

    /**
     * 自动编译
     */
	
    grunt.registerTask('wstyl', ['stylus', 'watch:styl']); // 自动触发编译styl -> css
    grunt.registerTask('wcss', ['cssmin', 'watch:css']); //　自动压缩css文件


};

