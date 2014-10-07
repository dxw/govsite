/* Enable default multitask support. Define your default task by adding another task
* with the empty string ('') as its name and the name of the default task as its value.
  *
* Example: (publish is a multi-task)
  *     // In your Gruntfile.js
  *     grunt.initConfig({
    *         publish: {
      *             options: {
        *                // some options
    *             },
  *             '': 'dev',
  *             dev: {
    *                 // definition
    *             },
  *             release: {
    *                 // definition
    *             }
  *         }
  *     });
  *
  *     // Running "grunt publish" will only invoke publish:dev
  *
  */
  module.exports = function (grunt) {
    var originalRunAllTargets = grunt.task.runAllTargets;
    grunt.task.runAllTargets = function(taskname, args) {

      var targets = grunt.config.getRaw(taskname) || {},
          target;

      function isValidMultiTaskTarget(name) {
        return !/^_|^options$/.test(name);
      }

      target = targets[''];
      if (typeof target === 'undefined') {
        originalRunAllTargets(taskname, args);
      } else {
        if (! isValidMultiTaskTarget(target)) {
          throw new Error('Invalid default target "' + target + '" specified.');
        }
        grunt.task.run([taskname, target].concat(args || []).join(':'));
      }
    };
  };
