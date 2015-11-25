module.exports = function(grunt) {
  grunt.initConfig({
        less: { // kompilace less souborů
		    style: {
		        files: {
		          "less/upload/global.css": "less/style.less"
		        },
            options: {
                // compress: true,
                sourceMap: true,
                sourceMapFilename: 'less/upload/global.css.map',
                sourceMapURL: 'global.css.map',  //relativní cesta od global souboru k sourcemap
                sourceMapRootpath: '../'  //tuto cestu přidá před cestu k less souborům (odkazy z dev. console)
            }
          }
		    },
        autoprefixer: { // automatické přídání prefixů
          single_file: {
            options: {
              browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1'],
              map: true
            },
            src: 'less/upload/global.css',
            dest: 'less/upload/global.css'
          },
        },
        copy: { // kopírování souborů do složky s css
          main: {
            files: [
              {src: ['less/upload/global.css.map'], dest: 'css/global.css.map'},
              {src: ['less/upload/global.css'], dest: 'css/global.css'}
            ]
          }
        },
        'ftp-deploy': { // upload obsahu složky upload na ftp (v případě vývoje mimo localhost)
              build: {
                auth: {
                  host: 'ftp.helveti.cz',
                  port: 21,
                  authKey: 'key1'
                },
                src: 'less/upload',
                dest: '/themes/leodig/css'
              }
            },
        watch: {  // sledovací task
            styles: {
               options: {
                    spawn: false,
                    atBegin: true,
                    event: ["added", "deleted", "changed"]
                },
                files: [ "less/components/basic/*.css", "less/components/basic/*.less", "less/components/structure/*.css", "less/components/structure/*.less", "less/components/component/*.css", "less/components/component/*.less", "less/components/page/*.css", "less/components/page/*.less", "less/components/module/*.css", "less/components/module/*.less", "less/bootstrap/*.less", "less/font-awesome/*.less", "less/**/*.js"],
                tasks: [ "less", "autoprefixer", "copy", "ftp-deploy" ]
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-less");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks('grunt-ftp-deploy');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-autoprefixer');

    // defaultní task který se spustí příkazem grunt
    grunt.registerTask("default", ["watch"]);
   
};
